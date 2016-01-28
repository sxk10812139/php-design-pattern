<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:42
 */

namespace Creational\FactoryMethod\Test;

use Creational\FactoryMethod\ChinaFactory;
use Creational\FactoryMethod\GermanFactory;
use Creational\FactoryMethod\AbstractFactory;
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function getFactorys(){
        return array(
            array(new ChinaFactory(),array("haval")),
            array(new GermanFactory(),array("audi","benz"))
        );
    }

    /**
     * @dataProvider getFactorys
     */
    public function testCreate(AbstractFactory $factory,$types){
        foreach($types as $type){
            $obj = $factory->create($type);
            $this->assertInstanceOf('Creational\FactoryMethod\VehicleInterface',$obj);
        }
    }

    /**
     * @expectedException \Exception
     */
    public function testBadType(){
        $factory = new ChinaFactory();
        $factory->create('moto');
    }
}
