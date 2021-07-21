<?php

namespace App\Http\Controllers;
use App\Models\Played;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;

class PlayedController extends Controller
{
    public function index()
    {
        $rows = Played::paginate(10);
        return view('played.index', compact('rows'));
    }

    
    public function create()
    {
        $track = Track::All();
        return view('played.add', compact('track')); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'track_id'      => 'required'
         ]);

        $rows=Played::create([
            'track_id'      => $request->track_id
        ]);
        
        return redirect('played'); 
    }

    public function edit($id)
    {
        $track = track::All();
         $rows = Played::findOrFail($id);
        return view('played.edit', compact('rows','track'));
    }

    public function update(Request $request, $id)
    {
        $rows = Played::find($id);
         $rows->update([
            'track_id'  => $request->track_id   
         ]);

        return redirect('played');
    }

   
    public function destroy($id)
    {
        $rows = Played::findOrFail($id);
        $rows->delete();

        return redirect('played');
    }
}
