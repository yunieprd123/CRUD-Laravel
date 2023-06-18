<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritas extends Model
{
    use HasFactory;
    // protected $table = 'beritabaju';
    // protected $primaryKey = 'id';
    protected $fillable=[
        'id','user_id','title','description','cover'
    ];
}
