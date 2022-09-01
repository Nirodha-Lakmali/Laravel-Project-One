<?php

namespace infrastructure;
use Illuminate\Support\Facades\Mail;
use App\Mail\TradeResultEmail;

class SendEmailService{

    //send email
    public function sendEmail($symbol)
    {

        $content = ['message' => $symbol.' trade opened'];

        Mail::to('nirodha41@gmail.com')->send(new TradeResultEmail($content));
        
    }


}