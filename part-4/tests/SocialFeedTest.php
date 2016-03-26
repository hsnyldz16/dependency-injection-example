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
     * Mocking işlemi!
     * 
     * Mockery (https://github.com/padraic/mockery) kütüphanesini 'sahte'
     * TwitterFeedReader sınıfının örneğini oluşturmak için kullanabiliriz.
     * O sınıfın testiyle ilgilenmiyoruz. O sınıfın kendi test ortamı olmalı zaten.
     * 
     * 
     * 'sahte' sınıfımızı kullanılarak olması gereken sınıfın özellikleri taklit edilebilir. 
     * Sahte sınıfımızın 'getMessages' methodundan ne döndüreceğini ona söyleyebiliriz.
     * böylece sonuc olarak bize array bir değer döndürmesini sağlıyoruz.
     * 
     * 
     * Temel test işlemlerini FeedReader sınıfına sahte injection yaparak  
     * mock'un tahmin edilebilir yanıtlar vermesini sağlayarak gerçekleştiririz.
     *  
     * FeedReader sınıfı 'sahte' yapılmamıştır. Fakat test edilmiştir.
     * SONUNDA YEŞİL BAR! (fakat uzun süreliğine değil)
     *
     * Üzgünüm, ama bunu 5. bölümde tekrar bozacağım !
     *
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
     * Nasıl bulduysan öyle bırak...
     */
    public function tearDown()
    {
        M::close();
    }
}
