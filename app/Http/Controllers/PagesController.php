<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function about() {
        $data = array(
            'services' => ['Design', 'Development', 'Deploy']
        );
        return view('about')->with($data);
    }
}
