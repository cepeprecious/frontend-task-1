<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(Request $request) {
        return view('homepage');
    }

    public function about_us(Request $request) {
        return view('about_us');
    }

    public function services(Request $request) {
        return view('services');
    }

    public function careers(Request $request) {
        return view('careers');
    }

    public function employers(Request $request) {
        return view('employers');
    }

    public function contact_us(Request $request) {
        return view('contact_us');
    }
    public function application(Request $request) {
        return view('apply_now');
    }
}
