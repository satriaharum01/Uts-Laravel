<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = "artist";
    protected $primaryKey = "artist_id";
    protected $fillable = ['artist_name'];
    
	public function Album()
    {
     return $this->hasMany('App\Models\Album','artist_id');  
    }
}
