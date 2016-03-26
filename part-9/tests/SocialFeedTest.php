<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Testlerimiz artık FeedReader sınıfına bağımlı değil
     * ee o zaman neden interface'i mock işlemine tabi tutmayalım
     * 
     * Umarım dependency injection ders serisinden memnun kalmışsınızdır.
     * (gerçekten bir ders serisi değil mi?) inversion of control prensiplerini
     * anlatan benzer bir tanıtım için tetikte olun.
     * 
     * Okuduğunuz için teşekkürler
     * Dayle
    */
    public function testSocialFeedCanBeInstantiated()
    {
        $f = M::mock('Example\FeedReaders\FeedReaderInterface');
        $s = new SocialFeed($f);
    }

    /**
     * Hadi dönen mesajları test edelim.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $f = M::mock('Example\FeedReaders\FeedReaderInterface');
        $f->shouldReceive('getMessages')
            ->once()
            ->andReturn(array('foo', 'bar', 'baz', 'boo', 'bop'));
        $s = new SocialFeed($f);
        $v = $s->getArray();
        $this->assertCount(5, $v);
        $this->assertEquals($v[0], 'foo');
        $this->assertEquals($v[1], 'bar');
        $this->assertEquals($v[2], 'baz');
        $this->assertEquals($v[3], 'boo');
        $this->assertEquals($v[4], 'bop');
    }

    /**
     * Arkanı temizle
     */
    public function tearDown()
    {
        M::close();
    }
}
