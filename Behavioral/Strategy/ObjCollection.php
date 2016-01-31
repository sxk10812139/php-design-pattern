<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/29 12:04
 */

namespace Behavioral\Strategy;


class ObjCollection
{
    protected $strategy;
    protected $elements;

    /**
     * ObjCollection constructor.
     * @param $elements
     */
    public function __construct($elements=array())
    {
        $this->elements = $elements;
    }

    /**
     * @param mixed $strategy
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
    
    public function addElement(array $element){
        $this->elements[] = $element;
    }
    
    public function run(){
        if(!$this->strategy){
            throw new \Exception("strategy is not valid");
        }
        $callback = array($this->strategy,'algorithm');
        uasort($this->elements,$callback);
        return $this;
    }
    
    public function getElements(){
        return $this->elements;
    }
}