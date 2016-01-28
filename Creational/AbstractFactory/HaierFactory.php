<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 16:02
 */

namespace Creational\AbstractFactory;


use Creational\AbstractFactory\Haier\Computer;
use Creational\AbstractFactory\Haier\Phone;
use Creational\AbstractFactory\Haier\Tv;

class HaierFactory extends AbstractFactory
{
    public function createTv()
    {
        return new Tv();
    }

    public function createPhone()
    {
        return new Phone();
    }

    public function createComputer()
    {
        return new Computer();
    }

}