<?php

namespace App\Http\Controllers;

use App\Models\IntroPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IntroPostController extends Controller
{
    public function update($id)
    {
        $intropost = IntroPost::findOrFail($id);

        $intropost->description = request('description');
        if(request('file')) {
            File::delete(public_path('/files/intropost/'.$intropost->file_path));
            $newIntropostDocumentName = time() . '-' . request('file')->getClientOriginalName();
            request('file')->move(public_path('/files/intropost'), $newIntropostDocumentName);
            $intropost->file_path = $newIntropostDocumentName;
        }

        $intropost->save();

        return redirect('/admin');
    }
}
