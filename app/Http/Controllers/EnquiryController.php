<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use App\Post;

class EnquiryController extends Controller
{
    public function create()
{
    return view('enquiry');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'course' => 'required|string|max:255',
    ]);

    Enquiry::create($validatedData);
    $request->session()->flash('successMsg','Saved succesfully!'); 
    return redirect('/enquiry');
}

public function show()
{
    $posts = Enquiry::all();
    return view('dashboard')->with('posts', $posts);
}

}
