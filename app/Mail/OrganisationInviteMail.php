<?php

namespace App\Mail;

use App\Models\Organisation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrganisationInviteMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $organisation;
    public $inviteLink;

    /**
     * Create a new message instance.
     *
     * @param Organisation $organisation
     * @param string $inviteLink
     */
    public function __construct(Organisation $organisation, $inviteLink)
    {
        $this->organisation = $organisation;
        $this->inviteLink = $inviteLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You are invited to join ' . $this->organisation->name)
                    ->view('emails.organisation_invite')
                    ->with([
                        'organisationName' => $this->organisation->name,
                        'inviteLink' => $this->inviteLink,
                    ]);
    }
}
