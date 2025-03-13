<?php
namespace App\Jobs;

use App\Models\User;
use App\Notifications\BlogDeleteNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class BlogDeleteEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $forNotice;

    /**
     * Create a new job instance.
     */
    public function __construct($from_Controller)
    {
        $this->forNotice = $from_Controller;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Fetch all users from the database
        $users = User::all();

        // Loop through users and send them the notification
        foreach ($users as $user) {
            $user->notify(new BlogDeleteNotification($this->forNotice));
        }
    }
}
