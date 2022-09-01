<?php

namespace infrastructure;
use infrastructure\Facades\ApiBinanceFacade;

class BuyTradeService{

    //create order buy
    public function getbuytrade($quantity)
    {
        $parameters['quantity'] = $quantity;
        $parameters['symbol'] = 'BTCUSDT';
        $parameters['side'] = 'BUY';
        $parameters['Type'] = 'MARKET';
  
        $buy_binance_trade = ApiBinanceFacade::signedRequest('POST','/fapi/v1/order',$parameters);
        
        return $buy_binance_trade;
    }


}