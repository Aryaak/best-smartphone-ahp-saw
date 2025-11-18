<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Alternative;

class DashboardController extends Controller
{
    public function index(){
        $totalCriteria = Criteria::count();
        $totalAlternative = Alternative::count();
        $alternatives = Alternative::latest()
                                    ->limit(5)
                                    ->get();

        return view('pages.index', compact(
            'totalCriteria',
            'totalAlternative',
            'alternatives'
        ));
    }
}
