<?php

namespace App\Http\Controllers;

use App\Mail\PortfolioMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function SendMail()
    {
      $details = [
        'title' => 'Your resnpose was recieved',
        'body' => 'This is to show that you have successfully submitted a form from '
      ];
      Mail::to('jayhmz10@gmail.com')->send(new PortfolioMail($details))
    }
}
