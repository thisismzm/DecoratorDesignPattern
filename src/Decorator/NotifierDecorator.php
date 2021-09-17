<?php
namespace App\Decorator;

class NotifierDecorator implements NotifierInterface
{
    protected NotifierInterface $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send(array $payload)
    {
        $this->notifier->send($payload);
    }
}
