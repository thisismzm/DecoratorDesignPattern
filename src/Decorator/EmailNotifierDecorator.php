<?php
namespace App\Decorator;

final class EmailNotifierDecorator extends NotifierDecorator
{
    private string $email;

    public function __construct(NotifierInterface $notifier, string $email)
    {
        parent::__construct($notifier);
        $this->email = $email;
    }

    public function send(array $payload)
    {
        parent::send($payload);
        echo "\n=== Email Sent to {$this->email} ===\n";
    }
}
