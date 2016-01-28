<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:02
 */

namespace Creational\AbstractFactory;


use Creational\AbstractFactory\Tcl\Computer;
use Creational\AbstractFactory\Tcl\Phone;
use Creational\AbstractFactory\Tcl\Tv;

class TclFactory extends AbstractFactory
{
    public function createTv()
    {
        return new Tv();
    }

    public function createPhone()
    {
        return  new Phone();
    }

    public function createComputer()
    {
        return new Computer();
    }

}