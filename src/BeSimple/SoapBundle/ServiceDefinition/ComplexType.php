<?php

/*
 * This file is part of the BeSimpleSoap.
 *
 * (c) Christian Kerl <christian-kerl@web.de>
 * (c) Francis Besset <francis.besset@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace BeSimple\SoapBundle\ServiceDefinition;

/**
 * @author Francis Besset <francis.besset@gmail.com>
 */
class ComplexType
{
    private $name;
    private $value;
    private $isNillable = false;
    private $minOccurs = null;
    private $maxOccurs = null;
    private $restriction = array();

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function isNillable()
    {
        return $this->isNillable;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setNillable($isNillable)
    {
        $this->isNillable = (bool) $isNillable;
    }

    public function getMinOccurs()
    {
        return $this->minOccurs;
    }

    public function setMinOccurs($minOccurs)
    {
        $this->minOccurs = $minOccurs;
    }

    public function getMaxOccurs()
    {
        return $this->maxOccurs;
    }

    public function setMaxOccurs($maxOccurs)
    {
        $this->maxOccurs = $maxOccurs;
    }

    public function getRestriction()
    {
        return $this->restriction;
    }

    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
    }

}
