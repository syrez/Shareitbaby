<?php

namespace shareitbaby\Http\Controllers;

use Illuminate\Http\Request;

use shareitbaby\Http\Requests;
use shareitbaby\Http\Controllers\Controller;

class LinkController extends Controller
{
    public function listlink()
    {
        return view('link.listlink');
    }

    public function addlink()
    {
        return view('link.addlink');
    }

    public function Validlink(Request $request)
    {
        $parameters = $request->all();
        unset($parameters['_token']);
//        add to database
        return redirect()->route('listlink')->with('success', 'Item was added.');

    }

    public function allJson()
    {
        $collection = [
            ['name' => 'toto'],
            ['name' => 'tata'],
            ['name' => 'titi'],
        ];

        return response()->json($collection);
    }
}
