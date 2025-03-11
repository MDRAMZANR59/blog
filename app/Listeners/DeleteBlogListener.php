<?php

namespace App\Listeners;

use queue;
use App\Mail\DeleteBlogMail;
use App\Events\DeleteBlogEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteBlogListener implements ShouldQueue
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
    public function handle(DeleteBlogEvent $deletedData): void
    {
        Mail::to(Auth::user()->email)->queue(new DeleteBlogMail($deletedData->deletedData));
    }
}
