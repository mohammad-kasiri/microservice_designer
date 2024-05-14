<?php

namespace App\Http\Controllers;

use App\Models\Functionalities;
use App\Models\Service;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    public function index()
    {
        $services= Service::query()->with('tables')->get();
        $functionalities= Functionalities::query()->with('tables')->get();

        return view('functionality.index')
            ->with('functionalities', $functionalities)
            ->with('services', $services);
    }

    public function add(Request $request)
    {
        $functionality= Functionalities::query()->create([
            'name' => $request->functionality
        ]);

        $functionality->tables()->attach($request->tables);

        return redirect()->back();
    }
}
