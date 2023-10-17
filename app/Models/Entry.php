<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Entry extends Model
{
    protected $fillable = ['title','author','publication_date','content'];
    use HasFactory;
}
