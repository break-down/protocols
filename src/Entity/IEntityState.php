<?php

namespace BreakDown\Protocols\Entity;

interface IEntityState
{

    public static function getValidStates();

    public function assert($code);

    public function isValid();

    public function canBeEmpty();

    public function __toString();
}
