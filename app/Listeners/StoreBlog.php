<?php

namespace App\Listeners;

use App\Mail\AlartMail;
use App\Events\BlogStoreEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreBlog
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BlogStoreEvent $event): void
    {
        Mail::to(Auth::user()->email)->send(new AlartMail($event->model));
    }
}
