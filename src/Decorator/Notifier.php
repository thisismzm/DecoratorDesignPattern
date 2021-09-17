<?php
namespace App\Decorator;

final class Notifier implements NotifierInterface
{
    private string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function send(array $payload)
    {
        echo "\n=== Message: {$payload['message']} ===\n";
        echo "\n=== SMS Sent to {$this->phoneNumber} ===\n";
    }
}
