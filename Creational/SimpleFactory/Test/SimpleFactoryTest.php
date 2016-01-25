<?php

/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/25 18:00
 */

namespace Creational\SimpleFactory\Test;
use Creational\SimpleFactory\SimpleFactory as SimpleFactory;
class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $factory;
    protected function setUp(){
        $this->factory = new SimpleFactory();
    }
    
    public function getTypes(){
        return array(
            array('bus'),
            array('car')
        );
    }

    /**
     * @dataProvider getTypes
     */
    public function testCreation($type){
        $obj = $this->factory->create($type);
        $this->assertInstanceOf('Creational\SimpleFactory\VehicleInterface',$obj);
    }

    /**
     * @expectedException \Exception
     */
    public function testBadType(){
        $this->factory->create('moto');
    }
}