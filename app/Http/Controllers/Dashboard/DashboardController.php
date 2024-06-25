<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    public function index() {
        $user = auth()->user();
        $payments = Payment::all();
        $categories = EventCategory::all();
        $news = News::all();
        $payment_history = Payment::all()->where('user_id', $user->id);
        return view('dashboard.index', compact('payments', 'categories', 'user', 'payment_history'));
    }

    public function profile() {
        $user = auth()->user();
        return view('dashboard.profile', compact('user'));
    }

    public function editprofile() {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user)],
            'password' => ['nullable', 'min:8'],
            'confirmpassword' => ['nullable', 'same:password', 'min:8'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('images/users', 'public');
        } else {
            $img_dir = NULL;
        }

        // Only update the fields that are not null
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone = $request->phone ?? $user->phone;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Save new image
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }
        // dd($user);

        $user->save();

        return redirect(route('dashboard.dashboard', absolute: false))->with('success', 'Profile updated successfully!');
    }

    public function payment() {
        $user = auth()->user();
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');


        return view('dashboard.payment.index', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds', 'user'));
    }
    public function offering() {
        $user = auth()->user();
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.offering', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds', 'user'));
    }

    public function tithe() {
        $user = auth()->user();
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.tithe', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds', 'user'));
    }

    public function churchProject() {
        $user = auth()->user();
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.churchProject', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds', 'user'));
    }

    public function propheticSeed() {
        $user = auth()->user();
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.propheticSeed', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds', 'user'));
    }

    public function home() {
        return view('index');
    }
}

