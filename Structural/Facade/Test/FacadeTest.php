<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/2/1 10:39
 */

namespace Structural\Facade\Test;


use Structural\Facade\Facade;
use Structural\Facade\SubSystemOne;
use Structural\Facade\SubSystemTwo;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function testOperation(){
        $this->expectOutputString("Structural\Facade\SubSystemOne::operationOneStructural\Facade\SubSystemTwo::operationOne");
        $sys1 = new SubSystemOne();
        $sys2 = new SubSystemTwo();
        $facade = new Facade($sys1,$sys2);
        $facade->operationOne();
    }
}
