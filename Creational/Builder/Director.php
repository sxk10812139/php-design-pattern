<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:21
 */

namespace Creational\Builder;


class Director
{
    protected $builder;
    public function setBuilder(AbstractBuilder $builder){
        $this->builder = $builder;
    }
    
    public function build(){
        if($this->builder){
            $this->builder->create();
            $this->builder->addEngine();
            $this->builder->addWheel();
            $this->builder->addDoor();
            return $this->builder->get();
        }
    }
}