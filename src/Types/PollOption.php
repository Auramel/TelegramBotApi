<?php

namespace Auramel\TelegramBotApi\Types;

use Auramel\TelegramBotApi\BaseType;
use Auramel\TelegramBotApi\InvalidArgumentException;
use Auramel\TelegramBotApi\TypeInterface;

/**
 * Class PollOption
 * This object contains information about one answer option in a poll.
 *
 * @package Auramel\TelegramBotApi\Types
 */
class PollOption extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['text', 'voter_count'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'text' => true,
        'voter_count' => true
    ];

    /**
     * Option text, 1-100 characters
     *
     * @var string
     */
    protected $text;

    /**
     * Number of users that voted for this option
     *
     * @var integer
     */
    protected $voterCount;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getVoterCount()
    {
        return $this->voterCount;
    }

    /**
     * @param int $voterCount
     */
    public function setVoterCount($voterCount)
    {
        $this->voterCount = $voterCount;
    }
}
