<?php

namespace App\Http\Controllers;

use App\logsystem;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = logsystem::orderBy('created_at', 'desc')->get();

        return view('back.log.index', compact('logs'));
    }
}
