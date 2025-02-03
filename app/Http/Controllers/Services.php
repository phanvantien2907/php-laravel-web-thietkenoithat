<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Servy as Serv;
class Services extends Controller
{
    //
    public function index($slug, $id)
    {

        $services = Serv::where('slug', $slug)->where('servies_id', $id) ->firstOrFail();
        return view('services.index', compact('services'));
    }
}
