<?php

namespace App\Http\Controllers;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Album;

use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        $rows = Track::paginate(10);
        return view('track.index', compact('rows'));
    }

      public function create()
    {
        $album = Album::all();
        return view('track.add', compact('album'));
    }

    public function store(Request $request)
    {
        
        $rows = new Track();
        $rows->track_name = $request->input('track_name');
        $rows->time = $request->input('track_time');
        $rows->album_id     = $request->input('album_id');

        if ($request->hasFile('track_file')) {
            $track_file = $request->file('track_file');
            $extension = $request->input('track_name');
            $filename =  $extension;
            $track_file->move('public/uploads/track/', $filename);
        }
            $rows->save();
            return redirect('track');
          
    }
    
     public function edit($id)
    {
         $album = Album::all();
         $rows = Track::findOrFail($id);
        return view('track.edit', compact('rows','album'));
    }

    public function update(Request $request, $id)
    {
        $rows = track::find($id);
        $rows->track_name = $request->input('track_name');
        $rows->time = $request->input('track_time');
        $rows->album_id     = $request->input('album_id');

        if ($request->hasFile('track_file')) {
            $track_file = $request->file('track_file');
            $extension = $request->input('track_name');
            $filename =  $extension;
            $track_file->move('public/uploads/track/', $filename);
        }

            $rows->save();
            return redirect('track');
    }

    public function destroy($id)
    {
        $rows = Track::findOrFail($id);
        $rows->delete();

        return redirect('photo');

    }
}
