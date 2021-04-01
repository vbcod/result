<?php

namespace Vbcod\Result;

class Result
{
    const STATUS_UNDEFINED = 'undefined';
    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'error';

    public $status = self::STATUS_UNDEFINED;
    public $message = '';

    public function isSuccess()
    {
        return $this->status == self::STATUS_SUCCESS;
    }

    public function isError()
    {
        return $this->status == self::STATUS_ERROR;
    }

    public function setStatusToSuccess()
    {
        $this->status = self::STATUS_SUCCESS;
        return $this;
    }

    public function setStatusToError()
    {
        $this->status = self::STATUS_ERROR;
        return $this;
    }

    public function setMessage($message = '')
    {
        $this->message = $message;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
