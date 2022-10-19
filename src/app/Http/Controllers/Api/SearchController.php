<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($number = null)
    {
        $clients = Client::where('license_plate', 'LIKE', "%" . $number)->get();
        return $clients;
    }
}
