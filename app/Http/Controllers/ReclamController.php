<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamController extends Controller
{
    public function reclamer() {
        return view('reclamation');
    }
}
