<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Criteria;
use App\Models\Alternative;

class DashboardController extends Controller
{
   public function index(){
    $totalUnit = Unit::count();
    $totalCriteria = Criteria::count();
    $totalAlternative = Alternative::count();

    $latestUnits = Unit::latest()->limit(5)->get();
    $latestCriterias = Criteria::with('unit')->latest()->limit(5)->get();
    $latestAlternatives = Alternative::latest()->limit(5)->get();

    return view('pages.index', compact(
        'totalUnit',
        'totalCriteria',
        'totalAlternative',
        'latestUnits',
        'latestCriterias',
        'latestAlternatives'
    ));
}

}
