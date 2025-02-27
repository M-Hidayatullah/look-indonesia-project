<?php

namespace App\Http\Controllers\Admin;

use App\Models\Boat;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use App\Models\Trip;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travel_packages = TravelPackage::paginate(10);
        // $blogs = Blog::with('category')->paginate(5);

        return view('admin.travel_packages.index', compact('travel_packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $boat = Boat::get(['name', 'id']);
        // $trip = Trip::get(['name', 'id']);

        return view('admin.travel_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelPackageRequest $request)
    {
        if($request->validated()) {
            $slug = Str::slug($request->location, '-' ,$request->trips_id);
            $travel_package = TravelPackage::create($request->validated() + ['slug' => $slug ]);
        }

        return redirect()->route('admin.travel_packages.edit', [$travel_package])->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravelPackage $travel_package)
    {
        $galleries = Gallery::paginate(10);
        $boats = Boat::paginate(10);


        // $boat = Boat::get(['name', 'id']);
        // $trip = Trip::get(['name', 'id']);

        return view('admin.travel_packages.edit', compact(
            'travel_package',
            'galleries',
            'boats',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TravelPackageRequest $request, TravelPackage $travel_package)
    {
        if($request->validated()) {
            $slug = Str::slug($request->location, '-' ,$request->trips_id);
            $travel_package->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('admin.travel_packages.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravelPackage $travel_package)
    {
        $travel_package->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
