<?php

namespace App\Listeners;

use queue;
use App\Mail\DeleteBlogMail;
use App\Events\DeleteBlogEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteBlogListener
{
    use InteractsWithQueue;
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
    public function handle(DeleteBlogEvent $event): void
    {
        Log::info("Data Cach From Event");
        Mail::to(Auth::user()->email)->send(new DeleteBlogMail($event->set_name_for_listener));
        Log::info('Data Pass To Mail');
    }
}
