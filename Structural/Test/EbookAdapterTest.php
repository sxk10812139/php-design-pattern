<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/31 02:41
 */

namespace Structural\Test;


use Structural\Ebook;
use Structural\EbookAdapter;

/**
 * @property Ebook $ebook
 * @property EbookAdapter $ebookAdapter
 */
class EbookAdapterTest extends \PHPUnit_Framework_TestCase
{
    protected $ebook;
    protected $ebookAdapter;
    
    public function setUp(){
        $this->ebookAdapter = new EbookAdapter();
        $this->ebook = new Ebook();
    }
    
    public function testOpen(){
//        $this->expectOutputString("ebook start");
        $this->ebookAdapter->setAdaptee($this->ebook);
        $this->ebookAdapter->open();
    }
}





