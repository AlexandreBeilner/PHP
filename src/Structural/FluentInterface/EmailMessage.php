<?php

declare(strict_types=1);

namespace App\Structural\FluentInterface;

final class EmailMessage
{
    private string $body;
    private string $from;
    private string $subject;
    /**
     * @var array<int, string> $to
     */
    private array $to;
    /**
     * @var array<int, string> $bcc
     */
    private array $cc;
    /**
     * @var array<int, string> $bcc
     */
    private array $bcc;
    /**
     * @var array<int, string> $bcc
     */
    private array $attachments;

    public function __construct(
        string $from,
        string $subject,
        string $body,
        array $bcc = [],
        array $attachments = [],
        array $to = [],
        array $cc = []

    ) {
        $this->from = $from;
        $this->subject = $subject;
        $this->body = $body;
        $this->to = $to;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->attachments = $attachments;
    }

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @return array
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return array
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * @param array $attachments
     */
    public function setAttachments(array $attachments): void
    {
        $this->attachments = $attachments;
    }

    /**
     * @param array $bcc
     */
    public function setBcc(array $bcc): void
    {
        $this->bcc = $bcc;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @param array $cc
     */
    public function setCc(array $cc): void
    {
        $this->cc = $cc;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @param array $to
     */
    public function setTo(array $to): void
    {
        $this->to = $to;
    }

    public function __toString(): string
    {
        return sprintf(
            'From: %s, Subject: %s, Body: %s, To: %s',
            $this->from,
            $this->subject,
            $this->body,
            implode(', ', $this->to)
        );
    }
}
