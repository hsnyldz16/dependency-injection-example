<?php

use Example\TwitterFeedReader;

class TwitterFeedReaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * TwitterFeedReader sınıfımız durum güncellemesi  
     * getiren sınıfımızdan ayrıldığından beri 
     * testlerimizi izole edebiliriz. Ayrıca sınıfımız
     * Twitter API'sine gerçekten bağlı değil. Yani bu
     * kısım hayali bir test barındırıyor. Herşeyide 
     * devletten beklemeyin hayal gücünüzü kullanın millet!
     */
    public function testFeedReaderCanBeInstantiated()
    {
        $s = new TwitterFeedReader;
    }

    /**
     * Gerçek olmayan test.
     */
    public function testSomethingToDoWithRetreivalFromApi()
    {
        $this->assertTrue(true);
    }

    /**
     * Gerçek olmayan test.
     */
    public function testSomethingElseToDoWithRetreivalFromApi()
    {
        $this->assertTrue(true);
    }
}
