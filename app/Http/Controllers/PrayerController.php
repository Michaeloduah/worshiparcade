<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PrayerController extends Controller
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
        $prayers = Prayer::all();
        return view('dashboard.prayer.index', compact('user', 'prayers'));
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
        return view('dashboard.prayer.create', compact('user'));
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
        $request->validate([
            'prayer1' => 'required',
            'prayer2' => 'nullable',
            'prayer3' => 'nullable',
            'prayer4' => 'nullable',
            'day' => 'required',
            'date' => 'required'
        ]);

        DB::beginTransaction();

        $prayer = Prayer::create([
            'prayer1' => $request->input('prayer1'),
            'prayer2' => $request->input('prayer2'),
            'prayer3' => $request->input('prayer3'),
            'prayer4' => $request->input('prayer4'),
            'day' => $request->input('day'),
            'date' => $request->input('date')
        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.prayer.index'))->with('message', 'Prayers Created Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function show(Prayer $prayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function edit(Prayer $prayer, $id)
    {
        //
        $user = auth()->user();
        $prayer = Prayer::findOrFail($id);
        return view('dashboard.prayer.edit', compact('prayer', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prayer $prayer, $id)
    {
        //
        {
            $prayer = Prayer::findOrFail($id);
            $valid = $request->validate([
                'prayer1' => 'nullable',
                'prayer2' => 'nullable',
                'prayer3' => 'nullable',
                'prayer4' => 'nullable',
                'day' => 'nullable',
                'date' => 'nullable'
            ]);

            $prayer->prayer1 = $request->prayer1 ?? $prayer->prayer1;
            $prayer->prayer2 = $request->prayer2 ?? $prayer->prayer2;
            $prayer->prayer3 = $request->prayer3 ?? $prayer->prayer3;
            $prayer->prayer4 = $request->prayer4 ?? $prayer->prayer4;
            $prayer->day = $request->day ?? $prayer->day;
            $prayer->date = $request->date ?? $prayer->date;

            $prayer->save();

            return redirect()->intended(route('dashboard.prayer.index'))->withInput($request->input())->with('message','Category Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prayer $prayer, $id)
    {
        //
        $prayer = Prayer::findOrFail($id);
        $prayer->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
