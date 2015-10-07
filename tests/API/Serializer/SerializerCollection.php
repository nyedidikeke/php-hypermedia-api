<?php
namespace Solvire\API\Serializers;

use Solvire\API\Serializers\BaseSerializer;
use PhpCollection\Sequence;
use LeadFerret\Http\Controllers\API\Serializers\HealthSerializer;

/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Serializers
 * @namespace Solvire\API\Serializers
 */
class SerializerCollection extends Sequence
{

    /**
     *
     *
     *
     * There isn't much to ordering here.
     * Just use a numeric key and we will try tro sort later
     *
     * @param
     *            array of parameters $sequence
     */
    public function __construct($serializers = [])
    {
        foreach ($serializers as $key => $serializer) {
            if (! ($serializer instanceof BaseSerializer)) {
                throw new \RuntimeException("Only serializer objects allowed here.");
            }
        }
        parent::__construct($serializers);
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        return $this->all();
    }

    public function add($serializer)
    {
        if (! ($serializer instanceof BaseSerializer)) {
            throw new Exceptions\InvalidParameterException("Only search paramater objects allowed here.");
        }
        return parent::add($serializer);
    }
}
