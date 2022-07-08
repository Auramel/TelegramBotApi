<?php

namespace Auramel\TelegramBotApi;

/**
 * Class HttpException
 *
 * @codeCoverageIgnore
 * @package Auramel\TelegramBotApi
 */
class HttpException extends Exception
{
    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * HttpException constructor.
     *
     * @param string    $message [optional] The Exception message to throw.
     * @param int       $code [optional] The Exception code.
     * @param Exception $previous [optional] The previous throwable used for the exception chaining.
     * @param array     $parameters [optional] Array of parameters returned from API.
     */
    public function __construct($message = '', $code = 0, Exception $previous = null, $parameters = [])
    {
        $this->parameters = $parameters;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
