<?php

namespace App\Http\Controllers\LexaInstitute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('LexaInstitute.about.index');
    }
}
