<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function openPopup()
    {
        return view('popup');
    }
}
