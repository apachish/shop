<?php

namespace App\Listeners;

use App\Events\ProductCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Kavenegar\KavenegarApi;

class SendSms implements ShouldQueue
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
     * @param  ProductCreated  $event
     * @return void
     */
    public function handle(ProductCreated $event)
    {
        $client = new KavenegarApi(env('KAVEH_NEGAR_KEY'));
        $client->send(env('SENDER_MOBILE'),$event->user->phone_number,'hi created '.$event->product->name.'for user'.$event->user->name);
    }
}
