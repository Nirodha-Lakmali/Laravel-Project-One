<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use infrastructure\Facades\ApiBybitFacade;

class BybitController extends Controller
{


    public function buyTrade(Request $request)
    {

        $quantity = $request->quantity;
        $side = 'Buy';
        $buybittrade = ApiBybitFacade::getapi($quantity,$side);
        return view('bybit-buy');
       
    }

    public function sellTrade(Request $request)
    {
        
        $quantity = $request->quantity;
        $side = 'Sell';
        $sellbittrade = ApiBybitFacade::getapi($quantity,$side);
        return view('bybit-sell');
        
    }
   
    
        
 
    
    

}
