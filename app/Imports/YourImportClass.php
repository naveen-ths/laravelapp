<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;



class YourImportClass implements ToModel, WithStartRow
{
   public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
        $date = date('Y-m-d', strtotime($row[0]));
        
//         echo '<pre>';
//        print_r($row);
//        print_r($date);
//        echo '</pre>';
//        die;
        return new \App\Models\StockData([
            'market_date' => $date,
            'open' => $row[1],
            'close' => $row[4],
            'low' => $row[3],
            'high' => $row[2],
            // Add more columns as needed
        ]);
    }
    
}
