<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $sermons = Sermon::all();
        return view('dashboard.sermons.index', compact('user', 'sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('dashboard.sermons.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $sermon = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'audio' => 'required|mimes:mp3,mp4,ogg,wav,aac,flac',
            'video' => 'nullable'
        ]);

        $audio_dir = $request->file('audio')->store('audio', 'public');

        // dd($sermon);
        DB::beginTransaction();

        $sermon = Sermon::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'audio' => $audio_dir,
            'video' => $request->input('video')
        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.sermon.index'))->with('message', 'Payment Submitted Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function show(Sermon $sermon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermon $sermon, $id)
    {
        //
        $user = auth()->user();
        $sermon = Sermon::findOrFail($id);
        return view('dashboard.sermons.edit', compact('user', 'sermon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sermon = Sermon::findOrFail($id);
        $valid = $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'audio' => 'nullable|mimes:mp3,mp4,ogg,wav,aac,flac',
            'video' => 'nullable'

        ]);

        $sermon->title = $request->title ?? $sermon->title;
        $sermon->description = $request->description ?? $sermon->description;
        $sermon->audio = $request->audio ?? $sermon->audio;
        $sermon->video = $request->video ?? $sermon->video;

        if ($request->hasFile('audio')) {
            $sermon->update(array_merge($valid, ['audio' => $request->file('audio')->store('audio', 'public')]));
        } else {
            $sermon->update(array_merge($valid));
        }


        // dd($valid);
        return redirect()->intended(route('dashboard.sermon.index'))->withInput($request->input())->with('message', 'Sermon Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermon $sermon, $id)
    {
        //
        $sermon = Sermon::findOrFail($id);
        $sermon->delete();
        return redirect()->back()->with('message', 'Sermon deleted Successfully');
    }
}
