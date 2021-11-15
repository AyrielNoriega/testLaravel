<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function store(Request $request)
    {
        Tag::create( $request->all() ); //enviamos datos por asignacion masiva  

        return redirect('/');
    }
}
