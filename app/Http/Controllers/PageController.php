<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $tasks = [
            'Read book',
            'Wash clothes',
            'Resume portfolio',
            'Hello World!'
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'heading' => request('heading')
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
