<?php

namespace infrastructure;
use infrastructure\Facades\ApiBinanceFacade;

class SellTradeService{

    //order create sell
    public function getselltrade($quantity)
    {
        $parameters['quantity'] = $quantity;
        $parameters['symbol'] = 'BTCUSDT';
        $parameters['side'] = 'SELL';
        $parameters['Type'] = 'MARKET';

        $sell_trade = ApiBinanceFacade::signedRequest('POST','/fapi/v1/order',$parameters);
    
        return $sell_trade;
    }


}