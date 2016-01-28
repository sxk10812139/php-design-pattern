<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:05
 */

namespace Creational\AbstractFactory\Tcl;


use Creational\AbstractFactory\AbstractComputer;

class Computer extends AbstractComputer
{
    public function run(){
        echo __NAMESPACE__;
    }
}