<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;

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

