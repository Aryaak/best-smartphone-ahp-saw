<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::latest()
        ->get();
        return view('pages.units', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Unit::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
        ]);

        return back()->with('success', 'Satuan berhasil ditambahkan.');
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $unit = Unit::findOrFail($uuid);
        $unit->update([
            'name' => $request->name
        ]);

        return back()->with('success', 'Satuan berhasil diperbarui.');
    }

    public function destroy($uuid)
    {
        Unit::findOrFail($uuid)->delete();
        return back()->with('success', 'Satuan berhasil dihapus.');
    }
}
