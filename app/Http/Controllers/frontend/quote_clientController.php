<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\Labiocert_mail;
use App\Models\Quote;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class quote_clientController extends Controller
{
  public function quote_send(Request $request)
  {
      $quote = new Quote();
      $quote->full_name = $request->fullName;
      $quote->company = $request->companyName;
      $quote->service = $request->industrySelector;
      $quote->state = 0;
      $quote->phone = $request->contactNumber;
      $quote->email = $request->emailAddress;
      $quote->remark = $request->inquiry;
      $quote->save();

      $web_info = WebsiteInfo::first();


      $mailData = [
          'fullName' => $request->fullName,
          'companyName' => $request->companyName,
          'industrySelector' => $request->industrySelector,
          'contactNumber' => $request->contactNumber,
          'emailAddress' => $request->emailAddress,
          'inquiry' => $request->inquiry,

      ];

      Mail::to($web_info->quote_reciever)->send(new Labiocert_mail($mailData));

      return redirect('/service/pharmaceutical/quote')->with('success', 'Well Received Thank You.');
  }
  
  public function test(){
    $mailData = [
      'fullName' => "Y Samoun",
      'companyName' => "PPM Industrail",
      'industrySelector' => "Food Testiong",
      'contactNumber' => "09645612",
      'emailAddress' => "ysamoun2@gmail.com",
      'inquiry' => "Testtigngfd"
      
  ];

    return view('frontend.mail_send',['mailData'=>$mailData]);
  }
}
