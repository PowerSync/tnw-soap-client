<?php

namespace Tnw\SoapClient\Result;

use AllowDynamicProperties;

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
        $this->IsActive = true;
        return $this->Id;
    }
}
