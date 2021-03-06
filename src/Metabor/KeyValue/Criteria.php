<?php
namespace Metabor\KeyValue;

/**
 * @author otischlinger
 */
class Criteria extends \ArrayObject
{
    /**
     * @param \ArrayAccess $keyvalue
     *
     * @return boolean
     */
    public function check(\ArrayAccess $keyvalue)
    {
        foreach ($this as $key => $value) {
            if (!($keyvalue->offsetExists($key) && ($keyvalue->offsetGet($key) === $value))) {
                return false;
            }
        }

        return true;
    }
}
