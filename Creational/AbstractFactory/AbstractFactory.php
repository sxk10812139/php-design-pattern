<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:02
 */

namespace Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createTv();
    abstract public function createPhone();
    abstract public function createComputer();
}