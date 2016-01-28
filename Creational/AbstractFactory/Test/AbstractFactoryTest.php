<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:34
 */

namespace Creational\AbstractFactory\Test;


use Creational\AbstractFactory\HaierFactory;
use Creational\AbstractFactory\TclFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getSetUp(){
        return array(
            array(new HaierFactory(),array('computer','phone','tv')),
            array(new TclFactory(),array('computer','phone','tv')),
        );
    }

    /**
     * @dataProvider getSetUp
     */
    public function testProductCreate($factory,$products){
        foreach($products as $product){
            $productName = ucfirst($product);
            $method = 'create'. $productName;
            $obj = $factory->$method();
            $this->assertInstanceOf('Creational\AbstractFactory\Abstract'.$productName,$obj);
        }
    }
}
