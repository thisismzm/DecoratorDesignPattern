<?php
namespace App\Decorator;

interface NotifierInterface
{
    public function send(array $payload);
}
