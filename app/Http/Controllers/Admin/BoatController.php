<?php

namespace App\Http\Controllers\Admin;

use App\Models\Boat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BoatRequest;

class BoatController extends Controller
{

    // public function store(BoatRequest $request,)
    // {
    //     if($request->validated()) {
    //         $image = $request->file('images')->store(
    //             'boats/images', 'public'
    //         );
    //         $slug = Str::slug($request->name, '-');

    //         Boat::create($request->except('images') + ['slug' => $slug, 'images' => $image]);
    //     }

    //     return redirect()->route('admin.travel_packages.edit')->with([
    //         'message' => 'Success Created !',
    //         'alert-type' => 'success'
    //     ]);
    // }

    public function store(BoatRequest $request, TravelPackage $travel_package)
    {
        $request->validate([
            'jenis_trip' => [
                'required',
                Rule::in([strtolower('OPEN TRIP'), strtolower('PRIVATE TRIP')]), // Hanya menerima input 'OPEN TRIP' atau 'PRIVATE TRIP' tanpa memperdulikan huruf besar atau kecil
            ],
            // Tambahkan aturan validasi lainnya di sini
        ]);

        if($request->validated()){
            $images = $request->file('images')->store(
                'travel_package/boat', 'public'
            );
            Boat::create($request->except('images') + ['images' => $images,'travel_package_id' => $travel_package->id]);
        }

        return redirect()->route('admin.travel_packages.edit', [$travel_package])->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    // public function edit(Boat $boat)
    // {
    //     return view('admin.boat.edit', compact('boat'));
    // }

    public function edit(TravelPackage $travel_package,Boat $boat)
    {
        return view('admin.boat.edit', compact('travel_package','boat'));
    }

    // public function update(BoatRequest $request, Boat $boat)
    // {
    //     if($request->validated()) {
    //         $slug = Str::slug($request->title, '-');
    //         if($request->image) {
    //             File::delete('storage/'. $boat->image);
    //             $image = $request->file('images')->store(
    //                 'boats/images', 'public'
    //             );
    //             $boat->update($request->except('images') + ['slug' => $slug, 'image' => $image]);
    //         }else {
    //             $boat->update($request->validated() + ['slug' => $slug]);
    //         }
    //     }

    //     return redirect()->route('admin.travel_packages.edit')->with([
    //         'message' => 'Success Updated !',
    //         'alert-type' => 'info'
    //     ]);
    // }

    public function update(BoatRequest $request,TravelPackage $travel_package, Boat $boat)
    {
        $request->validate([
            'jenis_trip' => [
                'required',
                Rule::in([strtolower('OPEN TRIP'), strtolower('PRIVATE TRIP')]), // Hanya menerima input 'OPEN TRIP' atau 'PRIVATE TRIP' tanpa memperdulikan huruf besar atau kecil
            ],
            // Tambahkan aturan validasi lainnya di sini
        ]);

        if($request->validated()) {
            if($request->images) {
                File::delete('storage/'. $boat->images);
                $images = $request->file('images')->store(
                    'travel_package/boat', 'public'
                );
                $boat->update($request->except('images') + ['images' => $images, 'travel_package_id' => $travel_package->id]);
            }else {
                $boat->update($request->validated());
            }
        }

        return redirect()->route('admin.travel_packages.edit', [$travel_package])->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }


    public function destroy(TravelPackage $travel_package, Boat $boat)
    {
        $boat->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
