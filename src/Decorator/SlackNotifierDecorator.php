<?php
namespace App\Decorator;

class SlackNotifierDecorator extends NotifierDecorator
{
    private string $slackId;

    public function __construct(NotifierInterface $notifier, string $slackId)
    {
        parent::__construct($notifier);
        $this->slackId = $slackId;

    }

    public function send(array $payload)
    {
        parent::send($payload);
        echo "\n=== Slack Sent to {$this->slackId} ===\n";
    }
}
