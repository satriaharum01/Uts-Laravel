<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table = 'track';
    protected $primaryKey = 'track_id';
    protected $fillable = ['track_name','track_name', 'time', 'album_id'];

     public function Album()
    {
    	return $this->belongsTo('App\Models\Album', 'album_id','album_id');  
    }

}
