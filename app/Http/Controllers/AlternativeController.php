<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\AlternativeCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlternativeController extends Controller
{

public function test(){
$alternatives = [
    [
        'no' => 'A01',
        'nama' => 'Samsung Galaxy Z Flip 5',
        'harga' => 16000000,
        'ram' => 8,
        'kamera' => 12,
        'baterai' => 3700,
        'layar' => 6.7,
        'memori' => 512
    ],
    [
        'no' => 'A02',
        'nama' => 'Xiaomi 14 Ultra',
        'harga' => 10000000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.73,
        'memori' => 512
    ],
    [
        'no' => 'A03',
        'nama' => 'Poco F6',
        'harga' => 5000000,
        'ram' => 8,
        'kamera' => 64,
        'baterai' => 5100,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A04',
        'nama' => 'Samsung Galaxy S24 Ultra',
        'harga' => 21999000,
        'ram' => 12,
        'kamera' => 200,
        'baterai' => 5000,
        'layar' => 6.8,
        'memori' => 512
    ],
    [
        'no' => 'A05',
        'nama' => 'Samsung Galaxy S24',
        'harga' => 14999000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 4000,
        'layar' => 6.2,
        'memori' => 256
    ],
    [
        'no' => 'A06',
        'nama' => 'Samsung Galaxy Z Fold 5',
        'harga' => 18000000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 4450,
        'layar' => 7.6,
        'memori' => 512
    ],
    [
        'no' => 'A07',
        'nama' => 'Samsung Galaxy A54 5G',
        'harga' => 5999000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5050,
        'layar' => 6.4,
        'memori' => 256
    ],
    [
        'no' => 'A08',
        'nama' => 'Samsung Galaxy A34 5G',
        'harga' => 4999000,
        'ram' => 8,
        'kamera' => 48,
        'baterai' => 5000,
        'layar' => 6.65,
        'memori' => 256
    ],
    [
        'no' => 'A09',
        'nama' => 'Samsung Galaxy A24',
        'harga' => 2899000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.5,
        'memori' => 128
    ],
    [
        'no' => 'A10',
        'nama' => 'Samsung Galaxy A15 5G',
        'harga' => 3599000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.5,
        'memori' => 256
    ],
    [
        'no' => 'A11',
        'nama' => 'Xiaomi 14T Pro',
        'harga' => 8499000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5050,
        'layar' => 6.68,
        'memori' => 256
    ],
    [
        'no' => 'A12',
        'nama' => 'Xiaomi 14T',
        'harga' => 6499000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A13',
        'nama' => 'Redmi Note 13 Pro 5G',
        'harga' => 4300000,
        'ram' => 8,
        'kamera' => 200,
        'baterai' => 5100,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A14',
        'nama' => 'Redmi Note 13 5G',
        'harga' => 3299000,
        'ram' => 6,
        'kamera' => 108,
        'baterai' => 5000,
        'layar' => 6.67,
        'memori' => 128
    ],
    [
        'no' => 'A15',
        'nama' => 'Redmi 14C',
        'harga' => 1599000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5180,
        'layar' => 6.88,
        'memori' => 128
    ],
    [
        'no' => 'A16',
        'nama' => 'Poco X6 Pro 5G',
        'harga' => 4349000,
        'ram' => 8,
        'kamera' => 64,
        'baterai' => 5020,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A17',
        'nama' => 'Poco X6 5G',
        'harga' => 3999000,
        'ram' => 8,
        'kamera' => 64,
        'baterai' => 5100,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A18',
        'nama' => 'Poco C75',
        'harga' => 1399000,
        'ram' => 6,
        'kamera' => 50,
        'baterai' => 5160,
        'layar' => 6.88,
        'memori' => 256
    ],
    [
        'no' => 'A19',
        'nama' => 'Samsung Galaxy S25 Ultra',
        'harga' => 22999000,
        'ram' => 12,
        'kamera' => 200,
        'baterai' => 5050,
        'layar' => 6.9,
        'memori' => 256
    ],
    [
        'no' => 'A20',
        'nama' => 'Xiaomi 14 Pro',
        'harga' => 19999000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.73,
        'memori' => 256
    ],
    [
        'no' => 'A21',
        'nama' => 'Oppo Find X7',
        'harga' => 14999000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.8,
        'memori' => 256
    ],
    [
        'no' => 'A22',
        'nama' => 'Samsung Galaxy S23 Ultra',
        'harga' => 19499000,
        'ram' => 12,
        'kamera' => 200,
        'baterai' => 5000,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A23',
        'nama' => 'Xiaomi 13T Pro',
        'harga' => 13499000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.1,
        'memori' => 256
    ],
    [
        'no' => 'A24',
        'nama' => 'Oppo Find X8',
        'harga' => 13999000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5630,
        'layar' => 6.59,
        'memori' => 256
    ],
    [
        'no' => 'A25',
        'nama' => 'Oppo Find X8 Pro',
        'harga' => 17999000,
        'ram' => 16,
        'kamera' => 50,
        'baterai' => 5910,
        'layar' => 6.78,
        'memori' => 512
    ],
    [
        'no' => 'A26',
        'nama' => 'Oppo Reno 12',
        'harga' => 5499000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A27',
        'nama' => 'Oppo A78 5G',
        'harga' => 2999000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.56,
        'memori' => 128
    ],
    [
        'no' => 'A28',
        'nama' => 'Vivo V40 5G',
        'harga' => 6999000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5500,
        'layar' => 6.78,
        'memori' => 256
    ],
    [
        'no' => 'A29',
        'nama' => 'Vivo V30 Pro',
        'harga' => 8190000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.78,
        'memori' => 512
    ],
    [
        'no' => 'A30',
        'nama' => 'Vivo Y100 5G',
        'harga' => 3499000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A31',
        'nama' => 'Realme 12 Pro Plus',
        'harga' => 6000000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A32',
        'nama' => 'Realme 12 Plus 5G',
        'harga' => 4199000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.67,
        'memori' => 256
    ],
    [
        'no' => 'A33',
        'nama' => 'Realme C67',
        'harga' => 2599000,
        'ram' => 8,
        'kamera' => 108,
        'baterai' => 5000,
        'layar' => 6.72,
        'memori' => 128
    ],
    [
        'no' => 'A34',
        'nama' => 'Huawei Mate X6',
        'harga' => 24999000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 5110,
        'layar' => 7.93,
        'memori' => 512
    ],
    [
        'no' => 'A35',
        'nama' => 'Huawei Pura 70 Ultra',
        'harga' => 17879000,
        'ram' => 16,
        'kamera' => 50,
        'baterai' => 5200,
        'layar' => 6.8,
        'memori' => 512
    ],
    [
        'no' => 'A36',
        'nama' => 'Huawei P50 Pro',
        'harga' => 12998000,
        'ram' => 8,
        'kamera' => 64,
        'baterai' => 4360,
        'layar' => 6.6,
        'memori' => 256
    ],
    [
        'no' => 'A37',
        'nama' => 'Huawei Nova 9',
        'harga' => 5799000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 4300,
        'layar' => 6.57,
        'memori' => 256
    ],
    [
        'no' => 'A38',
        'nama' => 'Huawei Mate 40 Pro',
        'harga' => 11499000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 4400,
        'layar' => 6.76,
        'memori' => 256
    ],
    [
        'no' => 'A39',
        'nama' => 'Huawei Mate 30 Pro',
        'harga' => 7999000,
        'ram' => 8,
        'kamera' => 40,
        'baterai' => 4500,
        'layar' => 6.53,
        'memori' => 256
    ],
    [
        'no' => 'A40',
        'nama' => 'Huawei P40 Pro',
        'harga' => 9699000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 4200,
        'layar' => 6.58,
        'memori' => 256
    ],
    [
        'no' => 'A41',
        'nama' => 'Huawei Mate Xs',
        'harga' => 41000000,
        'ram' => 8,
        'kamera' => 40,
        'baterai' => 4500,
        'layar' => 8,
        'memori' => 512
    ],
    [
        'no' => 'A42',
        'nama' => 'Samsung Galaxy Z Flip7',
        'harga' => 16499000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 4000,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A43',
        'nama' => 'Samsung Galaxy A17 5G',
        'harga' => 3599000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A44',
        'nama' => 'Samsung Galaxy S25',
        'harga' => 12499000,
        'ram' => 12,
        'kamera' => 50,
        'baterai' => 4050,
        'layar' => 6.2,
        'memori' => 256
    ],
    [
        'no' => 'A45',
        'nama' => 'Infinix Hot 50 5G',
        'harga' => 2179900,
        'ram' => 8,
        'kamera' => 48,
        'baterai' => 5000,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A46',
        'nama' => 'Infinix Hot 60 Pro',
        'harga' => 2264000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5160,
        'layar' => 6.78,
        'memori' => 256
    ],
    [
        'no' => 'A47',
        'nama' => 'Infinix GT 30 Pro',
        'harga' => 4399000,
        'ram' => 12,
        'kamera' => 108,
        'baterai' => 5200,
        'layar' => 6.78,
        'memori' => 512
    ],
    [
        'no' => 'A48',
        'nama' => 'Infinix Hot 60i',
        'harga' => 1729000,
        'ram' => 8,
        'kamera' => 50,
        'baterai' => 5160,
        'layar' => 6.7,
        'memori' => 256
    ],
    [
        'no' => 'A49',
        'nama' => 'Realme Narzo 60',
        'harga' => 3199000,
        'ram' => 6,
        'kamera' => 50,
        'baterai' => 5000,
        'layar' => 6.6,
        'memori' => 128
    ],
    [
        'no' => 'A50',
        'nama' => 'Infinix Note 20',
        'harga' => 2699000,
        'ram' => 8,
        'kamera' => 64,
        'baterai' => 5200,
        'layar' => 6.78,
        'memori' => 256
    ]
];

$no = 1;

foreach($alternatives as $alternative){
    $data = Alternative::create([
        'code' => $alternative['no'],
        'image' => $no . '.jpg',
        'name' => $alternative['nama'],
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => '55068076-ceb7-4f3e-b5a3-8e15624bfcd0',
        'value' => $alternative['harga']
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => '780a1a80-6439-48ba-8463-56fe2d021610',
        'value' => $alternative['ram']
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => '247b464e-d3d0-434c-8c22-9b90ca9af945',
        'value' => $alternative['kamera']
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => 'abbd7b77-5410-42b7-ab39-e35770f07338',
        'value' => $alternative['baterai']
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => 'c7910a27-870b-4d6a-a591-53b3aed24315',
        'value' => $alternative['layar']
    ]);

    AlternativeCriteria::create([
        'alternative_uuid' => $data->uuid,
        'criteria_uuid' => '8b0da664-9b9a-4dd7-97b6-c2d6842003a5',
        'value' => $alternative['memori']
    ]);

    $no++;
}

dd('OK');

}

public function index(Request $request)
{
    $search = $request->input('search');

    $alternatives = Alternative::when($search, function ($query, $search) {
            $query->where('code', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%");
        })
        ->oldest()
        ->paginate(5)
        ->withQueryString();

    $criterias = Criteria::orderBy('code')->get();

    return view('pages.alternatives', compact('alternatives', 'criterias', 'search'));
}


public function store(Request $request)
{
    $request->validate([
        'code' => 'required|string|max:225',
        'name' => 'required|string|max:225',
        'image'=> 'required|image|mimes:jpg,jpeg,png|max:2048',
        'criteria.*' => 'required|numeric',
    ]);

    $imagePath = $request->file('image')->store('alternatives', 'public');

    $alternative = Alternative::create([
        'uuid' => Str::uuid(),
        'code' => $request->code,
        'name' => $request->name,
        'image'=> $imagePath,
    ]);

    // simpan nilai kriteria
    foreach ($request->criteria as $criteria_uuid => $value) {
        AlternativeCriteria::create([
            'uuid'             => Str::uuid(),
            'alternative_uuid' => $alternative->uuid,
            'criteria_uuid'    => $criteria_uuid,
            'value'            => $value,
        ]);
    }

    return redirect()->route('alternatives.index')
                     ->with('success', 'Alternatif berhasil ditambahkan');
}

public function update(Request $request, $uuid)
{
    $alternative = Alternative::findOrFail($uuid);

    $request->validate([
        'code' => 'required|string|max:225',
        'name' => 'required|string|max:225',
        'image'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'criteria.*' => 'required|numeric',
    ]);

    if ($request->hasFile('image')) {
        Storage::disk('public')->delete($alternative->image);
        $imagePath = $request->file('image')->store('alternatives', 'public');
        $alternative->image = $imagePath;
    }

    $alternative->code = $request->code;
    $alternative->name = $request->name;
    $alternative->save();

    foreach ($request->criteria as $criteria_uuid => $value) {
        AlternativeCriteria::updateOrCreate(
            ['alternative_uuid' => $alternative->uuid, 'criteria_uuid' => $criteria_uuid],
            ['value' => $value, 'uuid' => Str::uuid()]
        );
    }

    return redirect()->route('alternatives.index')
                     ->with('success', 'Alternatif berhasil diperbarui');
}

public function destroy($uuid)
{
    $alternative = Alternative::findOrFail($uuid);

    if ($alternative->image && \Storage::disk('public')->exists($alternative->image)) {
        \Storage::disk('public')->delete($alternative->image);
    }

    $alternative->delete();

    return redirect()->route('alternatives.index')
                     ->with('success', 'Alternatif berhasil dihapus');
}


}
