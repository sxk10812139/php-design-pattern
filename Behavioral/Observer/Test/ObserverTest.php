<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 14:37
 */

namespace Behavioral\Observer\Test;


use Behavioral\Observer\Subject;
use Behavioral\Observer\SubjectObserver;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    public function setUp(){
        
        
    }
    
    public function testNotify(){
        $this->expectOutputString('Behavioral\Observer\Subject has been updated');
        $observer = new SubjectObserver();
        $subject = new Subject();
        $subject->attach($observer);
        $subject->title='helloworld';
    }
}
