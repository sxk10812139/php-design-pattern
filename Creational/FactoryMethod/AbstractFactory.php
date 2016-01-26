<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:28
 */

namespace Creational\FactoryMethod;


abstract class AbstractFactory
{
    abstract public function create($type);
}