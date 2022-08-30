<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use infrastructure\Facades\ApiBinanceFacade;
use infrastructure\Facades\ListWalletBalanceFacade;
use infrastructure\Facades\LeverageChangeFacade;
use infrastructure\Facades\BuyTradeFacade;
use infrastructure\Facades\SellTradeFacade;

class ApiController extends Controller
{

    public function list()
    {
        $data = ListWalletBalanceFacade::getlist();
        return view('api')->with('data',$data);
    }

    public function leverageChange(Request $request)
    {
        $leverage = $request->leverage;
        $response = LeverageChangeFacade::getleveragechange($leverage);
        return redirect('api');
    }

    public function buyBinanceTrade(Request $request)
    {
        $quantity= $request ->quantity;
        $buy_trade = BuyTradeFacade::getbuytrade($quantity);
        return view('trade-buy')->with('buy_trade',$buy_trade);
    }

    public function sellBinanceTrade(Request $request)
    {
        $quantity= $request ->quantity;
        $sell_trade = SellTradeFacade::getselltrade($quantity);
        return view('trade-sell');
       
        
    }

    
}