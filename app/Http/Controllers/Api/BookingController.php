<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index(BookingRequest $request)
    {
        $data = $request->all();
        Mail::send('mail.booking', $data, function($message) {
            $message->to('to@mailhog', 'Mailhog To')->subject('Subscription');
            $message->from('from@mailhog','Mailhog From');
        });

        return [
            'success' => true
        ];
    }
}
