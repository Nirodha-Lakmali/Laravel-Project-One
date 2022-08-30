<?php

namespace infrastructure;
use infrastructure\Facades\ApiBinanceFacade;

class ListWalletBalanceService{

    public function getlist()
    {
       // $parameters=[];
        $items = ApiBinanceFacade::signedRequest('GET','/fapi/v2/balance',[]);
        
        return $items;
    }


}