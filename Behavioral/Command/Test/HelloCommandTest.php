<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 11:31
 */

namespace Behavioral\Command\Test;


use Behavioral\Command\AbstractCommand;
use Behavioral\Command\HelloCommand;
use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;

class HelloCommandTest extends \PHPUnit_Framework_TestCase
{
    
    public function testHelloCommand(){
        $invoker = new Invoker();
        $receiver = new Receiver();
        $command = new HelloCommand($receiver);
        $invoker->setCommand($command);
        $invoker->run();
        $this->assertEquals('hello',$receiver->getLog());
    }
}
