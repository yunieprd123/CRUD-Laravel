<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    public $primary='user_id';
    protected $table="packages";
    protected $fillable=[
       'id','user_id','title','description','cover'
    ];
    //public function comunity(){
    //    return $this->belongsTo(comunity::class,'comunity_id','comunity_id');
}