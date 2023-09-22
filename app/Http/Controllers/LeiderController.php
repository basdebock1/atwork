<?php

namespace App\Http\Controllers;

use App\Models\Leider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LeiderController extends Controller
{
    public function index()
    {
        return view('leiding.index', [
            'leiders' => Leider::all(),
            'kapoenen' => Leider::all()->where('tak', 'kapoenen'),
            'wouters' => Leider::all()->where('tak', 'wouters'),
            'jonggivers' => Leider::all()->where('tak', 'jonggivers'),
            'givers' => Leider::all()->where('tak', 'givers'),
        ]);
    }

    public function show($id)
    {
        return view('leiding.show', [
            'leider' => Leider::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('leiding.create');
    }

    public function store()
    {
        $newLeiderImageName = time() . '-' . request('image')->getClientOriginalName();

        $leider = new Leider();

        $leider->fname = request('fname');
        $leider->lname = request('lname');
        $leider->totem = request('totem');
        $leider->tak = request('tak');
        $leider->email = request('email');
        $leider->phone = request('phone');
        $leider->image_path = $newLeiderImageName;

        request('image')->move(public_path('/images/leiding'), $newLeiderImageName);

        $leider->save();

        return redirect('/admin/leiding');
    }

    public function edit($id)
    {
        return view('leiding.edit', [
            'leider' => Leider::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $leider = Leider::findOrFail($id);

        $leider->fname = request('fname');
        $leider->lname = request('lname');
        $leider->totem = request('totem');
        $leider->tak = request('tak');
        $leider->email = request('email');
        $leider->phone = request('phone');
        if(request('image') != null) {
            File::delete(public_path('/images/leiding/'.$leider->image_path));
            $newLeiderImageName = time() . '-' . request('image')->getClientOriginalName();
            request('image')->move(public_path('/images/leiding'), $newLeiderImageName);
            $leider->image_path = $newLeiderImageName;
        }

        $leider->save();

        return redirect('/admin/leiding');
    }
    
    public function delete($id) {
        $leider = Leider::findOrFail($id);

        $leider->delete();

        File::delete(public_path('/images/leiding/'.$leider->image_path));

        return redirect('/admin/leiding');
    }
}
