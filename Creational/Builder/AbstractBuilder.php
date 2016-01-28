<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:22
 */

namespace Creational\Builder;


abstract class AbstractBuilder
{
    abstract public function create();
    abstract public function addEngine();
    abstract public function addDoor();
    abstract public function addWheel();
    abstract public function get();

}