<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:06
 */

namespace Creational\AbstractFactory\Haier;


use Creational\AbstractFactory\AbstractPhone;

class Phone extends AbstractPhone
{
    public function run(){
        echo __NAMESPACE__;
    }
}