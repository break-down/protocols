<?php

namespace BreakDown\Protocols\Entity;

use DateTime;

interface IEntityTimeTracked
{

    public function getDateCreated();

    public function getDateModified();

    public function setDateCreated(DateTime $dateCreated);

    public function setDateModified(DateTime $dateModified);
}
