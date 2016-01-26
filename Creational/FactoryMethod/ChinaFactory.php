<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:29
 */

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Haval;

class ChinaFactory extends AbstractFactory
{
    public function create($type)
    {
        switch($type){
            case 'haval':
                $obj =  new Haval();break;
            default:
                throw new \Exception("$type is not a valid type");
        }
        return $obj;
    }

}