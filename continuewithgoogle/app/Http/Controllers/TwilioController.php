<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TwilioService;

class TwilioController extends Controller
{
    protected $twilio;

    public function __construct(TwilioService $twilio)
    {
        $this->twilio = $twilio;
    }

  public function sendSms(Request $request)
{
    $to = $request->input('to', '+923176486659');
    $message = $request->input('message', 'Hello from Laravel + Twilio!');

    try {
        $this->twilio->sendSms($to, $message);
        return redirect()->back()->with('success', 'SMS sent successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'SMS failed: ' . $e->getMessage());
    }
}

}

