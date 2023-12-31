<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $users=User::all();
        $services=Service::all();
        return view('webClinica.index', compact('users','services'));
    }
}
