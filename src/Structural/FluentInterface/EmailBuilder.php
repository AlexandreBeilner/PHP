<?php

namespace App\Structural\FluentInterface;

class EmailBuilder
{
    private string $body = '';
    private string $from = '';
    private string $subject = '';
    /**
     * @var array<int, string> $to
     */
    private array $to = [];
    /**
     * @var array<int, string> $bcc
     */
    private array $cc = [];
    /**
     * @var array<int, string> $bcc
     */
    private array $bcc = [];
    /**
     * @var array<int, string> $bcc
     */
    private array $attachments = [];

    public function to(string $email): EmailBuilder
    {
        $this->to[] = $email;
        return $this;
    }

    public function cc(string $email): EmailBuilder
    {
        $this->cc[] = $email;
        return $this;
    }

    public function bcc(string $email): EmailBuilder
    {
        $this->bcc[] = $email;
        return $this;
    }

    public function from(string $email): EmailBuilder
    {
        $this->from = $email;
        return $this;
    }

    public function subject(string $subject): EmailBuilder
    {
        $this->subject = $subject;
        return $this;
    }

    public function body(string $body): EmailBuilder
    {
        $this->body = $body;
        return $this;
    }

    public function attachments(array $attachments): EmailBuilder
    {
        $this->attachments[] = $attachments;
        return $this;
    }

    public function build(): EmailMessage
    {
        return new EmailMessage(
            $this->from,
            $this->subject,
            $this->body,
            $this->bcc,
            $this->attachments,
            $this->to,
            $this->cc
        );
    }
}
