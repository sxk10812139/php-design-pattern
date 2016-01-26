<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:29
 */

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Benz;
use Creational\FactoryMethod\Audi;
class GermanFactory extends AbstractFactory
{
    public function create($type)
    {
        switch($type){
            case "benz":
                $obj = new Benz();
                $obj->setColor("yellow");
                break;
            case "audi":
                $obj = new Audi();
                break;
            default:
                throw new \Exception("$type is not a valid type");
        }
        return $obj;
    }

}