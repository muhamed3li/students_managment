<?php

namespace App\Listeners;

use App\Models\Payment;
use App\Models\User;
use App\Notifications\PaymentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NotPayingNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;
        $payments = Payment::with('month')->get();
        foreach ($payments as $payment) 
        {
            $current_date = strtotime(date("Y-m-d"));
            $month_end = strtotime($payment->month->end);
            $diff = round(($month_end - $current_date) / (60 * 60 * 24));
            // dd($payment->month_paid);
            if ($diff >= 1 && $diff <= 5) 
            {
                if($payment->month_paid <= 0)
                {
                    Notification::send($user, new PaymentNotification($payment->student,$payment->month->name));
                }
            }
        }
    }
}
