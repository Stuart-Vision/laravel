<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // 
    public function index() {
        return "<h1>Home Page</h1>";
    }

    public function detail($id) {
            return "<h1>Detail Page with parameter:" .$id." <h1>";
    }
        
    }
