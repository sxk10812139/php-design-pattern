<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 11:30
 */

namespace Behavioral\Command;


class Invoker
{
    protected $command;

    /**
     * @param mixed $command
     */
    public function setCommand(AbstractCommand $command)
    {
        $this->command = $command;
    }
    
    public function run(){
        $this->command->execute();
    }
    
}