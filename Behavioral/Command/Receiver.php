<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 11:30
 */

namespace Behavioral\Command;


class Receiver
{
    protected $log;
    
    public function log($info){
        $this->log[] = $info;
    }
    
    public function getLog(){
        return implode(PHP_EOL,$this->log);
    }
}