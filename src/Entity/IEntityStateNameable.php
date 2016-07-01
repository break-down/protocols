<?php

namespace BreakDown\Protocols\Entity;

interface IEntityStateNameable
{

    public static function getCodeNameMap();
    public function getName();
}
