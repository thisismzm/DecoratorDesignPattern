<?php
namespace App;

use App\Decorator;

final class Kernel
{
    private array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function notify()
    {
        $notifier = new Decorator\Notifier('+989999999999');
        $notifierDecorator = new Decorator\NotifierDecorator($notifier);
        $emailAndSmsNotifier = new Decorator\EmailNotifierDecorator($notifierDecorator, 'fakeemail@test.php');
        $slackAndEmailAnSmsNotifier = new Decorator\SlackNotifierDecorator($emailAndSmsNotifier, 'fakeslackid');
        $slackAndEmailAnSmsNotifier->send($this->payload);
    }
}
