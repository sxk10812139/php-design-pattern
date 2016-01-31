<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/29 15:25
 */

namespace Behavioral\Strategy\Test;


use Behavioral\Strategy\IdComparator;
use Behavioral\Strategy\ObjCollection;

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function setUp(){
        
    }
    
    public function testStrategy(){
        $obj = new ObjCollection();
        $obj->addElement(array('id'=>1,'date'=>'2012'));
        $obj->addElement(array('id'=>0,'date'=>'2013'));
        $strategy = new IdComparator();
        $obj->setStrategy($strategy);
        $result = $obj->run()->getElements();
        $this->assertEquals(array(
            1=>array(
                'id'=>0,
                'date'=>'2013'
            ),
            0=>array(
                'id'=>1,
                'date'=>'2012'
            )
        ),$result);
    }

    /**
     * @expectedException \Exception
     */
    public function testNoStrategy(){
        $obj = new ObjCollection();
        $obj->addElement(array('id'=>1,'date'=>'2012'));
        $obj->addElement(array('id'=>0,'date'=>'2013'));
        $strategy = new IdComparator();
        $result = $obj->run()->getElements();
    }
}
