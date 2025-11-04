<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{ 
   use HasUlids;    
   //primary key
   protected $primaryKey = 'id';
   protected $keyType = 'string';
   public $incrementing = false;
   protected $table = 'tag';

   protected $fillable = ['title'];//fields that can be ubdated
  
   protected $guarded = ['id'];// fields that can not be updated
      public function posts(){
      return $this->belongsToMany(Post::class);
   }
}
