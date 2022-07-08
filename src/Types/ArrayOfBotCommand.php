<?php

namespace Auramel\TelegramBotApi\Types;

abstract class ArrayOfBotCommand
{
    public static function fromResponse($data)
    {
        $arrayOfBotCommand = [];
        foreach ($data as $botCommand) {
            $arrayOfBotCommand[] = BotCommand::fromResponse($botCommand);
        }

        return $arrayOfBotCommand;
    }
}
