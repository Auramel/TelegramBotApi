<?php

namespace Auramel\TelegramBotApi\Collection;

interface CollectionItemInterface
{
    public function toJson($inner = false);
}
