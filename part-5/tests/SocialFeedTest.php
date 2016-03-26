<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * İlk olarak SocialFeed sınıfını kullanmadan önce
     * bir örneğini oluşturalım.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = M::mock('Example\TwitterFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * Hadi SocialFeed sınıfımızı test edelim
     * Sınıfımız kaynağımızdan birkaç tane
     * durum mesajı gönderecek.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\TwitterFeedReader');
        $t->shouldReceive('getMessages')
            ->once()
            ->andReturn(array('foo', 'bar', 'baz', 'boo', 'bop'));
        $s = new SocialFeed($t);
        $v = $s->getArray();
        $this->assertCount(5, $v);
        $this->assertEquals($v[0], 'foo');
        $this->assertEquals($v[1], 'bar');
        $this->assertEquals($v[2], 'baz');
        $this->assertEquals($v[3], 'boo');
        $this->assertEquals($v[4], 'bop');
    }

    /**
     * İnsanlar her zaman beklenildiği gibi zeki değillerdir.
     * Birisi mutlaka keser yerine balyoz kullanmayı deneyecektir.
     * Hepimiz böyle insanların varlığını biliyoruz.
     * Bu birisi TwitterFeedReader sınıfına SocialFeed
     * bağımlılığının göndereceğine integer 4 değerini gönderebilir.
     * 
     * Ne olacağını merak ettim doğrusu.
     * 
     * Testi çalıştırıp bir sonraki bölüme geçin.
     * 
    */
    public function testThatWeCanBeACompleteIdiot()
    {
        $s = new SocialFeed(4);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }

    /**
     * Temizlik İmandan Gelir
     */
    public function tearDown()
    {
        M::close();
    }
}
