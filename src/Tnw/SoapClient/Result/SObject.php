<?php

namespace Tnw\SoapClient\Result;

/**
 * Standard object
 *
 */
#[AllowDynamicProperties]
class SObject
{
    /**
     * @var string
     */
    public $Id;
    public $Company;
    public $PersonContactId;

    public function getId()
    {
        return $this->Id;
    }
}
