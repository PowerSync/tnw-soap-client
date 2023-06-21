<?php

namespace Tnw\SoapClient\Result;

class ChildRelationship
{
    protected $cascadeDelete;
    protected $childSObject;
    protected $deprecatedAndHidden;
    protected $field;
    protected $relationshipName;

    protected $junctionIdListNames;
    protected $junctionReferenceTo;
    protected $restrictedDelete;

    public function isCascadeDelete()
    {
        return $this->cascadeDelete;
    }

    public function getChildSObject()
    {
        return $this->childSObject;
    }

    public function isDeprecatedAndHidden()
    {
        return $this->deprecatedAndHidden;
    }

    public function getField()
    {
        return $this->field;
    }

    public function getRelationshipName()
    {
        return $this->relationshipName;
    }
}
