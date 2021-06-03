<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;
use App\Models\User;
use App\Models\Mailer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use App\Mail\PostNotViewedMail;

class MailPostNotViewed implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $postsNotViewed;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Collection $postsNotViewed)
    {
        $this->user = $user;
        $this->postsNotViewed = $postsNotViewed;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer = Mailer::create([
            'recipient_id' => $this->user->id,
            'type' => MailPostNotViewed::class
        ]); // PENDING
        Mail::to($this->user->email)->send(new PostNotViewedMail($this->user, $this->postsNotViewed));
        $mailer->update([ 'status' => Mailer::SENDING ]);
        if(empty(Mail::failures())) {
            $mailer->update([ 'status' => Mailer::DONE ]);
            return;
        }
        $mailer->update([ 'status' => Mailer::ERROR ]); // TODO: Need more optimize
        return;
    }
}
