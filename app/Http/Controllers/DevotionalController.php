<?php

namespace App\Http\Controllers;

use App\Models\Devotional;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DevotionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $devotionals = Devotional::all();
        return view('dashboard.devotional.index', compact('user', 'devotionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = auth()->user();
        return view('dashboard.devotional.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // opening prayer
        // topic
        // bible text
        // memory verse
        // devotion
        // closing prayer
        $request->validate([
            'opening_prayer' => 'required',
            'topic' => 'required',
            'bible_text' => 'required',
            'memory_verse' => 'required',
            'devotion' => 'required',
            'closing_prayer' => 'required',
            'date' => 'required',
            'day' => 'required'
        ]);

        DB::beginTransaction();

        $event = Devotional::create([
            'opening_prayer' => $request->input('opening_prayer'),
            'topic' => $request->input('topic'),
            'bible_text' => $request->input('bible_text'),
            'memory_verse' => $request->input('memory_verse'),
            'devotion' => $request->input('devotion'),
            'closing_prayer' => $request->input('closing_prayer'),
            'date' => $request->input('date'),
            'day' => $request->input('day')

        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.devotion.index'))->with('message', 'Payment Submitted Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function show(Devotional $devotional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function edit(Devotional $devotional, $id)
    {
        //
        $user = auth()->user();
        $devotion = Devotional::findOrFail($id);
        return view('dashboard.devotional.edit', compact('devotion', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        {
            $devotion = Devotional::findOrFail($id);
            $valid = $request->validate([
                'opening_prayer' => 'nullable',
                'topic' => 'nullable',
                'bible_text' => 'nullable',
                'memory_verse' => 'nullable',
                'devotion' => 'nullable',
                'closing_prayer' => 'nullable',
                'date' => 'nullable',
                'day' => 'nullable'
            ]);

            $devotion->opening_prayer = $request->opening_prayer ?? $devotion->opening_prayer;
            $devotion->topic = $request->topic ?? $devotion->topic;
            $devotion->bible_text = $request->bible_text ?? $devotion->bible_text;
            $devotion->memory_verse = $request->memory_verse ?? $devotion->memory_verse;
            $devotion->devotion = $request->devotion ?? $devotion->devotion;
            $devotion->closing_prayer = $request->closing_prayer ?? $devotion->closing_prayer;
            $devotion->date = $request->date ?? $devotion->date;
            $devotion->day = $request->day ?? $devotion->day;

            $devotion->save();


            // dd($valid);
            return redirect()->intended(route('dashboard.devotion.index'))->withInput($request->input())->with('message', 'Category Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devotional $devotional, $id)
    {
        //
        $devotion = Devotional::findOrFail($id);
        $devotion->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
