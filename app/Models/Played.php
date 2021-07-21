<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;
    protected $table = 'played';
    protected $primaryKey = 'play_id';
    protected $fillable = ['track_id'];

     public function Track()
    {
     return $this->belongsTo('App\Models\Track', 'track_id','track_id');  
    }
}
