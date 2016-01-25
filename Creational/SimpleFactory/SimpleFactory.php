<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/25 17:41
 */
namespace Creational\SimpleFactory;


class SimpleFactory
{
    protected $typeList = array();

    /**
     * SimpleFactory constructor.
     * @param array $typeList
     */
    public function __construct()
    {
        $this->typeList = array(
            'bus'=>__NAMESPACE__.'\Bus',
            'car'=>__NAMESPACE__.'\Car',
        );
    }
    
    public function create($keyword){
        if(!array_key_exists($keyword,$this->typeList)){
            throw new \Exception("$keyword is not a valid keyword");
        }
        $class = $this->typeList[$keyword];
        return new $class;
    }


}