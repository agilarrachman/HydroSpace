<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Facade as Indonesia; // Perbaikan alias

class LocationController extends Controller
{
    // Get Cities by Province ID
    public function getCities($province_id)
    {
        $province = Indonesia::findProvince($province_id, ['cities']);
        if (!$province) {
            return response()->json(['error' => 'Province not found'], 404);
        }
        return response()->json($province->cities);
    }

    // Get Districts by City ID
    public function getDistricts($city_id)
    {
        $city = Indonesia::findCity($city_id, ['districts']);
        if (!$city) {
            return response()->json(['error' => 'City not found'], 404);
        }
        return response()->json($city->districts);
    }

    // Get Villages by District ID
    public function getVillages($district_id)
    {
        $district = Indonesia::findDistrict($district_id, ['villages']);
        if (!$district) {
            return response()->json(['error' => 'District not found'], 404);
        }
        return response()->json($district->villages);
    }
}
