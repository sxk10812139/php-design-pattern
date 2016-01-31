<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:37
 */

namespace Creational\Builder\Test;


use Creational\Builder\AbstractBuilder;
use Creational\Builder\BikeBuilder;
use Creational\Builder\CarBuilder;
use Creational\Builder\Director;


/**
 * @property Director $director
 */
class DirectorTest extends \PHPUnit_Framework_TestCase
{
 
    protected $director;
    public function setUp(){
        $this->director = new Director();
    }
    
    public function getBuilder(){
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder())
        );
    }

    /**
     * @dataProvider getBuilder
     */
    public function testDirector(AbstractBuilder $buidler){
        $this->director->setBuilder($buidler);
        $obj = $this->director->build();
        $this->assertInstanceOf('Creational\Builder\AbstractVehicle',$obj);
    }
}
