<?php
namespace Solvire\Tests\API\Serializers\DataFields;

use Solvire\API\Serializers\DataFields\URLField;
/**
 * TODO need to find a library that handles url parsing well
 *
 * @group DataFields
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @namespace Solvire\Tests\API\Serializers\DataFields
 */
class URLFieldTest extends \BaseTestCase
{

    /**
     * @expectedException \RuntimeException
     */
    public function testCanSetUrlData()
    {
        $url1 = 'http://google.com';
        $url2 = 'https://test';
        $url3 = 'git@github.com:Respect/Validation.git';
        
        $u = new URLField();
        $u->setData($url1);
        $this->assertEquals($u->getData(), $url1);
        $u->setData($url2);
        $this->assertEquals($u->getData(), $url2);
        $u->setData($url3);
    }
}
