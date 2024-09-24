<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use App\Http\Requests\Image\UpdateRequest;
use App\Models\Coordinate;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {

        $images = Image::with('coordinate')->get();
        return view('admin.image.index', compact('images'));
    }

    public function create()
    {
        $coordinates = Coordinate::all();
        return view('admin.image.create', compact('coordinates'));
    }

    public function store(Image $image, StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);

        Image::firstOrCreate($data);

        return redirect()->route('admin.image.index');
    }

    public function edit(Image $image)
    {
        $coordinates = $image->coordinate()->get();
        return view('admin.image.edit', compact('image', 'coordinates'));
    }

    public function update(Image $image, UpdateRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $image->update($data);

        return redirect()->route('admin.image.index');
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('admin.image.index');
    }
}
