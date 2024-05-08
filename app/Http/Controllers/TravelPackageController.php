<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;
use App\Models\TravelPackage;

class TravelPackageController extends Controller
{
    public function index()
    {
        $travel_packages = TravelPackage::with('galleries')->get()->unique('location');

        return view('travel_packages.index', compact('travel_packages'));
    }

    public function show(TravelPackage $travel_package)
    {
        $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

        return view('travel_packages.komodo.show', compact('travel_package', 'travel_packages'));
    }

 /*
|--------------------------------------------------------------------------
| Komodo
|--------------------------------------------------------------------------
|
| Here is where you can for your application.
|
*/
    // show list where boat details open trip
    public function showOpenTrip(TravelPackage $travel_package)
    {
        $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('open trip')])->get();

        $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

        return view('travel_packages.komodo.opentrip', compact('travel_package', 'boats', 'travel_packages'));
    }

    // show list where boat silver details private trip
    public function showPrivateTripSilver(Boat $boat, TravelPackage $travel_package)
    {
        $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

        $boats = Boat::where('name', 'silver')->get();

        $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

        return view('travel_packages.komodo.privatetrip', compact('boats', 'travel_package'));
    }

     // show list where boat bronze details private trip
     public function showPrivateTripBronze(Boat $boat)
     {
         $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

         $boats = Boat::where('name', 'bronze')->get();

         return view('travel_packages.komodo.privatetrip', compact('boats'));
     }

     // show list where boat gold details private trip
     public function showPrivateTripGold(Boat $boat, TravelPackage $travel_package)
     {
         $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

         $boats = Boat::where('name', 'gold')->get();

         $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
         $travel_package = TravelPackage::where('location', 'komodo')->get();

         return view('travel_packages.komodo.privatetrip', compact('boats', 'travel_package'));
     }

    // list boat open trip
    public function boatShowOpenTrip()
    {
        return view('travel_packages.komodo.boat_open');
    }

    // list boat private trip
    public function boatShowPrivateTrip(Boat $boat, TravelPackage $travel_package)
    {
        $boat = Boat::where('id', '!=', $boat->id)->get();

        $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
        $travel_package = TravelPackage::where('location', 'komodo')->get();

        return view('travel_packages.komodo.boat_private', compact('boat', 'travel_package'));
    }

    // booking private trip Komodo
    public function bookingPrivateTripKomodo(TravelPackage $travel_package)
    {
        $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

        $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

        $travel_packages = TravelPackage::with('galleries')->get()->unique('location');
        $boats = Boat::where('name', 'silver')->get();

        $travel_packages = TravelPackage::where('location', 'komodo')->get();

        // dd($travel_packages);

        return view('travel_packages.komodo.book_privatetrip_komodo', compact('travel_package', 'boats', 'travel_packages'));
    }
/*
|--------------------------------------------------------------------------
| Sumba
|--------------------------------------------------------------------------
|
| Here is where you can for your application.
|
*/

public function Sumba(TravelPackage $travel_package)
{
    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.sumba.show', compact('travel_package', 'travel_packages'));
}

public function OpenTripSumba(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('open trip')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.sumba.opentrip', compact('travel_package', 'boats', 'travel_packages'));
}

// show list where boat silver details private trip
public function PrivateTripSilverSumba(Boat $boat, TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $boats = Boat::where('name', 'silver')->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.sumba.privatetrip', compact('boats', 'travel_package'));
}

 // show list where boat bronze details private trip
 public function PrivateTripBronzeSumba(Boat $boat)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'bronze')->get();

     return view('travel_packages.sumba.privatetrip', compact('boats'));
 }

 // show list where boat gold details private trip
 public function PrivateTripGoldSumba(Boat $boat, TravelPackage $travel_package)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'gold')->get();

     $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
     $travel_package = TravelPackage::where('location', 'sumba')->get();

     return view('travel_packages.sumba.privatetrip', compact('boats', 'travel_package'));
 }

// list boat open trip
public function boatOpenTripSumba()
{
    return view('travel_packages.sumba.boat_open');
}

// list boat private trip
public function boatPrivateTripSumba(Boat $boat, TravelPackage $travel_package)
{
    $boat = Boat::where('id', '!=', $boat->id)->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
    $travel_package = TravelPackage::where('location', 'sumba')->get();

    return view('travel_packages.sumba.boat_private', compact('boat', 'travel_package'));
}

// booking private trip Sumba
public function bookingPrivateTripSumba(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    $travel_packages = TravelPackage::with('galleries')->get()->unique('location');
    $boats = Boat::where('name', 'silver')->get();

    $travel_packages = TravelPackage::where('location', 'sumba')->get();

    // dd($travel_packages);

    return view('travel_packages.sumba.book_privatetrip_sumba', compact('travel_package', 'boats', 'travel_packages'));
}

/*
|--------------------------------------------------------------------------
| Waerebo
|--------------------------------------------------------------------------
|
| Here is where you can for your application.
|
*/

public function Waerebo(TravelPackage $travel_package)
{
    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.waerebo.show', compact('travel_package', 'travel_packages'));
}

public function OpenTripWaerebo(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('open trip')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.waerebo.opentrip', compact('travel_package', 'boats', 'travel_packages'));
}

// show list where boat silver details private trip
public function PrivateTripSilverWaerebo(Boat $boat, TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $boats = Boat::where('name', 'silver')->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.waerebo.privatetrip', compact('boats', 'travel_package'));
}

 // show list where boat bronze details private trip
 public function PrivateTripBronzeWaerebo(Boat $boat)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'bronze')->get();

     return view('travel_packages.waerebo.privatetrip', compact('boats'));
 }

 // show list where boat gold details private trip
 public function PrivateTripGoldWaerebo(Boat $boat, TravelPackage $travel_package)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'gold')->get();

     $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
     $travel_package = TravelPackage::where('location', 'waerebo')->get();

     return view('travel_packages.waerebo.privatetrip', compact('boats', 'travel_package'));
 }

// list boat open trip
public function boatOpenTripWaerebo()
{
    return view('travel_packages.waerebo.boat_open');
}

// list boat private trip
public function boatPrivateTripWaerebo(Boat $boat, TravelPackage $travel_package)
{
    $boat = Boat::where('id', '!=', $boat->id)->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
    $travel_package = TravelPackage::where('location', 'waerebo')->get();

    return view('travel_packages.waerebo.boat_private', compact('boat', 'travel_package'));
}

// booking private trip Waerebo
public function bookingPrivateTripWaerebo(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    $travel_packages = TravelPackage::with('galleries')->get()->unique('location');
    $boats = Boat::where('name', 'silver')->get();

    $travel_packages = TravelPackage::where('location', 'waerebo')->get();

    // dd($travel_packages);

    return view('travel_packages.waerebo.book_privatetrip_waerebo', compact('travel_package', 'boats', 'travel_packages'));
}




/*
|--------------------------------------------------------------------------
| Raja Ampat
|--------------------------------------------------------------------------
|
| Here is where you can for your application.
|
*/
public function rajaAmpat(TravelPackage $travel_package)
{
    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.raja-ampat.show', compact('travel_package', 'travel_packages'));
}

public function OpenTripRajaAmpat(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('open trip')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.raja-ampat.opentrip', compact('travel_package', 'boats', 'travel_packages'));
}

// show list where boat silver details private trip
public function PrivateTripSilverRajaAmpat(Boat $boat, TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $boats = Boat::where('name', 'silver')->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.raja-ampat.privatetrip', compact('boats', 'travel_package'));
}

 // show list where boat bronze details private trip
 public function PrivateTripBronzeRajaAmpat(Boat $boat)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'bronze')->get();

     return view('travel_packages.raja-ampat.privatetrip', compact('boats'));
 }

 // show list where boat gold details private trip
 public function PrivateTripGoldRajaAmpat(Boat $boat, TravelPackage $travel_package)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'gold')->get();

     $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
     $travel_package = TravelPackage::where('location', 'raja ampat')->get();

     return view('travel_packages.raja-ampat.privatetrip', compact('boats', 'travel_package'));
 }

// list boat open trip
public function boatOpenTripRajaAmpat()
{
    return view('travel_packages.raja-ampat.boat_open');
}

// list boat private trip
public function boatPrivateTripRajaAmpat(Boat $boat, TravelPackage $travel_package)
{
    $boat = Boat::where('id', '!=', $boat->id)->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
    $travel_package = TravelPackage::where('location', 'raja ampat')->get();

    return view('travel_packages.raja-ampat.boat_private', compact('boat', 'travel_package'));
}

// booking private trip Raja Ampat
public function bookingPrivateTripRajaAmpat(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    $travel_packages = TravelPackage::with('galleries')->get()->unique('location');
    $boats = Boat::where('name', 'silver')->get();

    $travel_packages = TravelPackage::where('location', 'raja ampat')->get();

    // dd($travel_packages);

    return view('travel_packages.raja-ampat.book_privatetrip_rajaAmpat', compact('travel_package', 'boats', 'travel_packages'));
}



/*
|--------------------------------------------------------------------------
| Flores
|--------------------------------------------------------------------------
|
| Here is where you can for your application.
|
*/
public function Flores(TravelPackage $travel_package)
{
    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.flores.show', compact('travel_package', 'travel_packages'));
}

public function OpenTripFlores(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('open trip')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.flores.opentrip', compact('travel_package', 'boats', 'travel_packages'));
}

// show list where boat silver details private trip
public function PrivateTripSilverFlores(Boat $boat, TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $boats = Boat::where('name', 'silver')->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    return view('travel_packages.flores.privatetrip', compact('boats', 'travel_package'));
}

 // show list where boat bronze details private trip
 public function PrivateTripBronzeFlores(Boat $boat)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'bronze')->get();

     return view('travel_packages.flores.privatetrip', compact('boats'));
 }

 // show list where boat gold details private trip
 public function PrivateTripGoldFlores(Boat $boat, TravelPackage $travel_package)
 {
     $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

     $boats = Boat::where('name', 'gold')->get();

     $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
     $travel_package = TravelPackage::where('location', 'flores')->get();

     return view('travel_packages.flores.privatetrip', compact('boats', 'travel_package'));
 }

// list boat open trip
public function boatOpenTripFlores()
{
    return view('travel_packages.flores.boat_open');
}

// list boat private trip
public function boatPrivateTripFlores(Boat $boat, TravelPackage $travel_package)
{
    $boat = Boat::where('id', '!=', $boat->id)->get();

    $travel_package = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');
    $travel_package = TravelPackage::where('location', 'flores')->get();

    return view('travel_packages.flores.boat_private', compact('boat', 'travel_package'));
}

// booking private trip Flores
public function bookingPrivateTripFlores(TravelPackage $travel_package)
{
    $boats = Boat::whereRaw('LOWER(jenis_trip) = ?', [strtolower('PRIVATE TRIP')])->get();

    $travel_packages = TravelPackage::where('id', '!=', $travel_package->id)->get()->unique('location');

    $travel_packages = TravelPackage::with('galleries')->get()->unique('location');
    $boats = Boat::where('name', 'silver')->get();

    $travel_packages = TravelPackage::where('location', 'flores')->get();

    // dd($travel_packages);

    return view('travel_packages.flores.book_privatetrip_flores', compact('travel_package', 'boats', 'travel_packages'));
}

}
