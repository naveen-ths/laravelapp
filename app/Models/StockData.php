<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stock_data';
    
    protected $fillable = ['market_date', 'low', 'close', 'open', 'high'];

}
