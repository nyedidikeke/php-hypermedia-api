<?php
namespace Solvire\API\Serializers;

use Carbon\Carbon;
include_once (realpath(__DIR__ . '/ArraySerializerConcrete.php'));

/**
 * Just map a static output
 * Methods are only GET
 *
 * @group Serializers
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package Serializers
 * @namespace Solvire\API\Serializers
 */
class ArraySerializerTest extends \BaseTestCase
{

    public function testCanBuildArraySerializer()
    {
        $ars = new ArraySerializerConcrete();
        $data = $ars->loadData([
            'status' => 'OK',
            'timestamp' => Carbon::now()
        ]);
        
        $this->assertTrue(is_array($data->toArray()));
        $this->assertCount(2, $data->toArray());
        
        $json = json_encode($data);
        $this->assertTrue(is_string($json));
        $this->assertTrue(is_object(json_decode($json)));
    }
}
