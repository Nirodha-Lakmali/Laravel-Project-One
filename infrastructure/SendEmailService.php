<?php

namespace infrastructure;
use Illuminate\Support\Facades\Mail;
use App\Mail\TradeResultEmail;

class SendEmailService{

    //send email
    public function sendEmail($symbol)
    {

        $content = ['message' => $symbol.' trade opened'];

        Mail::to('sahan@speralabs.com')->send(new TradeResultEmail($content));
        
    }


}