<?php

use Mockery as M;
use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * Hadi şimdi TwitterFeedReader moc'u FacebookFeedReader mok ile değiştirelim
     * 
     * Hmm.. Geçmiyor ooo tabi ya. TwitterFeedReader'ı type hint kullanarak başka bir
     * verinin geçmesini engellemiştik. Öyle ya Facebook kabul etmez tabiy ki
    */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = M::mock('Example\FacebookFeedReader');
        $s = new SocialFeed($t);
    }

    /**
     * Evet, burada da aynı problem var. 
     * Bu type-hint gerçektende probleme neden oluyor.
     * 
     * Pekala hadi part-8 e geçelim ve problemi çözelim
    */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = M::mock('Example\FacebookFeedReader');
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
     * Temizlik önemli
     */
    public function tearDown()
    {
        M::close();
    }
}
