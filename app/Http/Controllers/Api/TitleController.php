<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index()
    {
        return Title::with('episodes')->get();
    }

    public function show($id)
    {
        return Title::with('episodes')->find($id);
    }
}
