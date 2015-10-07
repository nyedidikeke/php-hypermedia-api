<?php
namespace Solvire\Tests\API\Serializers\DataFields;

use Respect\Validation\Validator as v;
use Solvire\API\Serializers\DataFields\EmailField;

/**
 *
 *
 *
 *
 * @group DataFields
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @namespace Solvire\Tests\API\Serializers\DataFields
 */
class EmailFieldTest extends \BaseTestCase
{

    /**
     * check to make sure we can validate an email address
     *
     * @expectedException \RuntimeException
     */
    public function testCanSetEmailData()
    {
        $em1 = 'stevenjscott@gmail.com';
        $em2 = 'bademail#test.com';
        
        $ef = new EmailField();
        $ef->setData($em1);
        $this->assertEquals($ef->getData(), $em1);
        $ef->setData($em2);
    }
}
