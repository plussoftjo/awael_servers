<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Section;
use App\Plus;
use App\Countre;
class SectionController extends Controller
{
    public function index() {
        $sections = section::get();
        $pluses = Plus::get();
        $countres = Countre::get();
        
        return response()->json(['sections' => $sections,'pluses'=>$pluses,'countres' => $countres]);
    }
}
