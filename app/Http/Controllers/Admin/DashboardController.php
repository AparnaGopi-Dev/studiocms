<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use App\Models\Photo;
use App\Models\Booking;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'storyCount' => Story::count(),
            'photoCount' => Photo::count(),
            'bookingCount' => Booking::count(),
            'messageCount' => Contact::count(),
        ]);
    }
}