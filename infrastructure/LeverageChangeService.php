<?php

namespace infrastructure;
use infrastructure\Facades\ApiBinanceFacade;

class LeverageChangeService{

    public function getleveragechange($leverage)
    {
        $parameters['leverage'] = $leverage;
        $parameters['symbol'] = 'BTCUSDT';
  
        $response = ApiBinanceFacade::signedRequest('POST','/fapi/v1/leverage',$parameters);
    
        return $response;
    }


}   