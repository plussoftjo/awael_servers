<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
class ProfilesController extends Controller
{
    public function get_profile(Request $request) {
        $profiles = Profile::where('countre_id',$request->country_id)->
        where('section_id',$request->section_id)->
        get();

        return response()->json(['profiles' => $profiles]);
    }

    public function search(Request $request) {
        $profiles = Profile::
            where('gender',$request->gender)->
            where('status',$request->status)->
            where('countre_id',$request->country)->
            where('section_id',$request->section)->
            get();

        return response()->json(['profiles' => $profiles]);
    }
}
