<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coordinate\StoreRequest;
use App\Http\Requests\Coordinate\UpdateRequest;
use App\Models\Coordinate;
use App\Models\Region;
use Illuminate\Http\Request;

class CoordinateController extends Controller
{
    public function index()
    {

        $coordinates = Coordinate::all();

        return view('admin.coordinate.index', compact('coordinates'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('admin.coordinate.create', compact('regions'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Coordinate::create($data);

        return redirect()->route('admin.coordinate.index');
    }


    public function edit(Coordinate $coordinate)
    {
        $regions = Region::all();
        return view('admin.coordinate.edit', compact('coordinate', 'regions'));
    }

    public function update(Coordinate $coordinate, UpdateRequest $request)
    {
        $data = $request->validated();

        $coordinate->update($data);

        return redirect()->route('admin.coordinate.index');
    }
}
