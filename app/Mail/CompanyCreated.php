<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompanyCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Company $company)
    {
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('company.admin@example.org')
                    ->markdown('emails.companies.created')
                    ->withUrl('/companies/'.$this->company->id);
    }
}
