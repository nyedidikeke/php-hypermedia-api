<?php
namespace Solvire\API\Serializers\DataFields;

use Solvire\API\Exceptions\InvalidParameterException;

/**
 *
 * @author solvire <info@scotttactical.com>
 * @package DataFields
 * @namespace Solvire\API\Serializers\DataFields
 */
class FloatField extends DataField
{

    protected $cast = 'float';

    public function setData($data)
    {
        if (! is_float($data))
            throw new InvalidParameterException('FloatField data must be a float/double');
        
        $this->data = $data;
        return $this;
    }

    /**
     * This is a char so it will always be just a string
     */
    public function getData()
    {
        return (float) $this->data;
    }
}