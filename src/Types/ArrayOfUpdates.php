<?php

namespace Auramel\TelegramBotApi\Types;

abstract class ArrayOfUpdates
{
    public static function fromResponse($data)
    {
        $arrayOfUpdates = [];
        foreach ($data as $update) {
            $arrayOfUpdates[] = Update::fromResponse($update);
        }

        return $arrayOfUpdates;
    }
}
