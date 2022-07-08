<?php

namespace Auramel\TelegramBotApi\Events;

use Auramel\TelegramBotApi\Types\Update;
use Closure;

class Event
{
    protected Closure $checker;

    protected Closure $action;

    public function __construct(Closure $action, Closure $checker)
    {
        $this->action = $action;
        $this->checker = $checker;
    }

    public function getAction(): Closure
    {
        return $this->action;
    }

    public function getChecker(): ?Closure
    {
        return $this->checker;
    }

    public function executeChecker(Update $message)
    {
        if (is_callable($this->checker)) {
            return call_user_func($this->checker, $message);
        }

        return false;
    }

    public function executeAction(Update $message)
    {
        if (is_callable($this->action)) {
            return call_user_func($this->action, $message);
        }

        return false;
    }
}
