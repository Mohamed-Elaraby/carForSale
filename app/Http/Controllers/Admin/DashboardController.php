<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\Check;
use App\Models\CheckStatus;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard');
    }
}
