<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * 
     * Şimdi enjekte edilmiş dependency'miz bir interface'e type hint edilmiş durumda.
     * FeedReader'a artık istediğimiz implementasyonu gerçekleştirebiliriz.
     * 
     * Testimiz yine geçti! heyt be
     * 
     * Aslında şöyle bir düşünürsek burada yaptığımız şey testin geçmesini
     * sağlamaktan daha önemli birşey.
     * Böyle yaparak bir dizayn pattern (tasarım deseni) olan adapter desenini uygulamış olduk.
     * 
     * Diyelim ki ileride GooglePlusFeedReader gibi bir sınıfı sistemimize eklemek istedik.
     * Bu mimariye göre uygulamanın çalışması için ekstra bir kod yazmak zorunda kalmayız.
     * Ayrıca böyle bir mimari kullanarak kod bakımlarını daha az zaman harcayarak gerçekleştiririz.
     * Tabiyki sizden sonra gelecek bir yazılımcının arkanızdan iyi sözler sarfetmeside cabası.
     * 
     * Aslında tam olrak bitirmedik.
     * Bir sonraki son bölümde biraz temizlik yapacağız.
    */
    
    public function testSocialFeedCanBeInstantiated()
    {
        $t = M::mock('Example\FeedReaders\FacebookFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * Hadi dönen mesajları test edelim.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\FeedReaders\FacebookFeedReader');
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
     * Arkanı Temizle
     */
    public function tearDown()
    {
        M::close();
    }
}
