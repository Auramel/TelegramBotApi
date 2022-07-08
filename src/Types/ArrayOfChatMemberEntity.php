<?php

namespace Auramel\TelegramBotApi\Types;

abstract class ArrayOfChatMemberEntity
{
    public static function fromResponse($data)
    {
        $arrayOfChatMemberEntity = [];
        foreach ($data as $chatMemberEntity) {
            $arrayOfChatMemberEntity[] = ChatMember::fromResponse($chatMemberEntity);
        }

        return $arrayOfChatMemberEntity;
    }
}
