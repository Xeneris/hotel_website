<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        Room::create($request->all());

        return back();
    }
}
