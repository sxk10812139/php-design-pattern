<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:06
 */

namespace Creational\AbstractFactory\Haier;


use Creational\AbstractFactory\AbstractComputer;

class Computer extends AbstractComputer
{
    public function run(){
        echo __NAMESPACE__;
    }
}