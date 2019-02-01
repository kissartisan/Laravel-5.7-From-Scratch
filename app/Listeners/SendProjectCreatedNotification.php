<?php

namespace App\Listeners;

use App\Events\ProjectWasCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreatedProject;

class SendProjectCreatedNotification
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
     * @param  ProjectWasCreated  $event
     * @return void
     */
    public function handle(ProjectWasCreated $event)
    {
        Mail::to($event->project->owner->email)->send(
            new CreatedProject($event->project)
        );
    }
}
