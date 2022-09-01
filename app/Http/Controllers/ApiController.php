<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use infrastructure\Facades\ApiBinanceFacade;
use infrastructure\Facades\ListWalletBalanceFacade;
use infrastructure\Facades\LeverageChangeFacade;
use infrastructure\Facades\BuyTradeFacade;
use infrastructure\Facades\SellTradeFacade;
use infrastructure\Facades\SendEmailFacade;

class ApiController extends Controller
{

    //get wallet balance
    public function list()
    {
        $data = ListWalletBalanceFacade::getlist();
        return view('api')->with('data',$data);
    }

    //leverage change
    public function leverageChange(Request $request)
    {
        $leverage = $request->leverage;
        $response = LeverageChangeFacade::getleveragechange($leverage);
        return redirect('api');
    }

    public function buyBinanceTradeView()
    {
        return view('trade-buy');
    }

    public function sellBinanceTradeView()
    {
        return view('trade-sell');       
    }


    //create trade
    public function buyBinanceTrade(Request $request)
    {
        $quantity = $request ->quantity;
        $buy_trade = BuyTradeFacade::getbuytrade($quantity);
        
        $symbol = $buy_trade->symbol;
        $this->sendOrderEmail($symbol);
        return redirect('trade-buy');
        
    }

    public function sellBinanceTrade(Request $request)
    {
        $quantity= $request ->quantity;
        $sell_trade = SellTradeFacade::getselltrade($quantity);
  
        $symbol = $sell_trade->symbol;
        $this->sendOrderEmail($symbol);
        return redirect('trade-sell');
           
    }

    public function sendOrderEmail($symbol)
    {
        SendEmailFacade::sendEmail($symbol);
    }
    
}