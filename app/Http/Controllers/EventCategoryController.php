<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Mockery\Undefined;

class EventCategoryController extends Controller
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
        $categories = EventCategory::all();
        return view('dashboard.news_and_event.event_categories.index', compact('user', 'categories'));
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
        return view('dashboard.news_and_event.event_categories.create', ['user' => $user]);
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
        $valid= $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:event_categories',
        ]);

        $slug = Str::slug($valid['slug'], '-');

        DB::beginTransaction();

        EventCategory::create(array_merge($valid,['slug' => $slug]));

        DB::commit();
        return redirect()->intended(route('dashboard.event-category.index'))->with('message', 'Event Category Created Submitted Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategory $eventCategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EventCategory $eventCategory, $id)
    {
        //
        $user = auth()->user();
        $eventCategory = EventCategory::findOrFail($id);
        return view('dashboard.news_and_event.event_categories.edit', ['eventCategory' => $eventCategory], ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
        $eventCategory = EventCategory::findOrFail($id);
        $valid = $request->validate([
            'name' => ['nullable', 'max:255', 'min:5'],
            'slug' => ['nullable', Rule::unique('event_categories')->ignore($eventCategory)]

        ]);

        $eventCategory->name = $request->name ?? $eventCategory->name;
        $eventCategory->slug = $request->slug ?? $eventCategory->slug;
        $slug = Str::slug($eventCategory->slug = $request->slug ?? $eventCategory->slug, '-');

        $update = [
            'name' => $eventCategory->name = $request->name ?? $eventCategory->name,
            'slug' => $slug,
        ];
        
        $eventCategory->update($update);


        // dd($valid);
        return redirect()->intended(route('dashboard.event-category.index'))->withInput($request->input())->with('message','Category Updated');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventCategory $eventCategory, $id)
    {
        //
        $news = EventCategory::findOrFail($id);
        $news->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
