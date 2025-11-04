<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   use HasFactory;

   use HasUuids;
   protected $table = 'Post';
   //primary key
   protected $primaryKey = 'id';
   protected $keyType = 'string';
   public $incrementing = false;

    protected $fillable = ['title','body','published','author'];//fields that can be ubdated
  
   protected $guarded = ['id'];// fields that can not be updated
   public function comments(){
      return $this->hasMany(Comment::class);
   }
   public function tags(){
      return $this->belongsToMany(Tag::class);
   }
}
