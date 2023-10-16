<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public function getDate()
    {
        Carbon::setLocale('nl');
        return Carbon::parse($this->created_at)->isoFormat('DD MMMM YYYY');
    }
}
