<?php

namespace Livan2r\Deployer\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvoyNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $results;
    public $projects;
    public $payload;

    /**
     * Create a new message instance.
     *
     * @param $projects
     * @param $results
     * @param $payload
     */
    public function __construct($projects, $results, $payload)
    {
        $this->projects = $projects;
        $this->results = $results;
        $this->payload = $payload;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->view('Deployer::notify');
    }
}
