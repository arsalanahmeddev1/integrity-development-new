<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index() {
     $user = Auth::user();

     if($user->hasRole('super_admin')) {
        return view('screens.admin.dashboards.superadmin');
     } elseif ($user->hasRole('company_admin')) {
        return view('screens.admin.dashboards.companyadmin');
     }

     abort(403);
   } 
}
