<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class requestOrder extends Mailable
{
    use Queueable, SerializesModels;
    protected $order =null ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->order ;
        return  $this->from( 'OnlineShoppingSystem@gmail.com')->subject('congratulations , order is Requested')->view('user.orders.mail' , compact('order') );
    }
}
