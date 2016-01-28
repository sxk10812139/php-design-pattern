<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:22
 */

namespace Creational\Builder;

use Creational\Builder\Part\Engine;
use Creational\Builder\Part\Wheel;

class CarBuilder extends AbstractBuilder
{
    protected $obj;

    public function create()
    {
        $this->obj = new Bike();
    }

    public function addEngine()
    {
        $this->obj->addEngine('engine',new Engine());
    }

    public function addDoor()
    {
        $this->obj->addEngine('engine',new Engine());
    }

    public function addWheel()
    {
        $this->obj->addWheel('firstWheel',new Wheel());
        $this->obj->addWheel('secondWheel',new Wheel());
        $this->obj->addWheel('thirdWheel',new Wheel());
        $this->obj->addWheel('fourthWheel',new Wheel());
    }

    public function get()
    {
        return $this->obj;
    }
}