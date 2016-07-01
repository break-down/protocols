<?php

namespace BreakDown\Protocols\Entity;

interface IEntityValueObjectSerializable
{

    /**
     *
     * @return boolean
     */
    public function isDeSerializeable(array $data);

    /**
     * @return array
     */
    public function serialize();

    public function deSerialize(array $data);
}
