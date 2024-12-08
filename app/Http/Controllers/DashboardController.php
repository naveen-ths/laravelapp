<?php

namespace App\Http\Controllers;

use App\Models\StockData;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index() {
        $stock_data = DB::table('stock_data')->get()->toArray();
        $resultArray = json_decode(json_encode($stock_data), true);

        $stock_d = []; 
        foreach ($resultArray as $key => $stock) {
            $stock_d[$key] = [$stock['market_date'], $stock['close']];
        }
//        echo "<pre>";
//        print_r($stock_d);
//        echo "</pre>";die;
        return view('dashboard', ['stockData' => $stock_d]);
    }
}
