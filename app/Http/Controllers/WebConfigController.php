<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebConfigRequest;
use App\Models\Config;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    public function show()
    {
        $config = Config::first();
        return view('admin.web_config', compact('config'));
    }

    public function update(Request $request)
    {
        $setting = \App\Models\Config::first();

        if($request->file('images')){
            $gambar = $request->file('images');
            $gambarId = time() . "_" . $gambar->getClientOriginalName();
            $path = 'img/logo';
            $gambar->move($path, $gambarId);
            $setting->image = $gambarId;
        }
        $setting->domain_web = $request->domain_web;
        $setting->link_instagram = $request->link_instagram;
        $setting->link_facebook = $request->link_facebook;
        $setting->link_youtube = $request->link_youtube;
        $setting->linktree = $request->linktree;
        $setting->link_twitter = $request->link_twitter;
        $setting->link_maps = $request->link_maps;
        $setting->no_telp = $request->no_telp;
        $setting->no_wa_booking = $request->no_wa_booking;
        $setting->about_company = $request->about_company;
        $setting->name_company = $request->name_company;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated');
    }

}
