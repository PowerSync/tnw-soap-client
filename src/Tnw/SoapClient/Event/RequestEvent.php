<?php
namespace Tnw\SoapClient\Event;

use Symfony\Contracts\EventDispatcher\Event;

class RequestEvent extends Event
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}

