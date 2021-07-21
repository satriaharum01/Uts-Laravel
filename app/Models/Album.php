<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name', 'artist_id'];


      public function Artist()
    {
     return $this->belongsTo('App\Models\Artist', 'artist_id','artist_id');  
    }

    public function Track()
    {
     return $this->hasMany('App\Models\Track', 'album_id');  
    }
}
