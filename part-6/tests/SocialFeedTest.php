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
     * Pekala hala integer SocialFeed örneğine integer değer
     * gönderiyoruz. Bu sefer type-hinted özelliğinden yararlanıyoruz.
     * Göreceğiniz üzere daha açıklayıcı bir hata mesajı alıyoruz.
     * 
     * Gelecek bölümde Twitter mesaj kaynağımızı Facebook olarak değiştireceğiz
     * 
     * Eee daha neyi bekliyorsun.
     * 
    */
    public function testThatWeCanBeACompleteIdiot()
    {
        $s = new SocialFeed(4);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }

    /**
     * Aslan yattığı yerden belli olur.
     */
    public function tearDown()
    {
        M::close();
    }
}
