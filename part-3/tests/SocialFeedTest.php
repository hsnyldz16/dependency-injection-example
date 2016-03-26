<?php

use Example\SocialFeed;
use Example\TwitterFeedReader;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * İlk olarak SocialFeed sınıfını kullanmadan önce
     * bir örneğini oluşturalım.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $t = new TwitterFeedReader;
        $s = new SocialFeed($t);
    }

    /**
     * Enjekte ediliyor!
     *
     * Şimdi TwitterFeedReader sınıfını SocialFeed 
     * sınıfına enjekte edebiliriz. Test hala başarısız olacak 
     * fakat sonuca bir adım daha yaklaştık.
     * 
     * Bölüm dörde geçin oradaki testin başarılı 
     * olduğunu göreceksiniz.
     *
     */

    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $t = new TwitterFeedReader;
        $s = new SocialFeed($t);
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
