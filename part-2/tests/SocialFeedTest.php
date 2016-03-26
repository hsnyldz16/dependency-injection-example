<?php

use Example\SocialFeed;

class SocialFeedTest extends PHPUnit_Framework_TestCase
{
    /**
     * İlk olarak SocialFeed sınıfını kullanmadan önce
     * bir örneğini oluşturalım.
     */
    public function testSocialFeedCanBeInstantiated()
    {
        $s = new SocialFeed;
    }

    /**
     * Ayrıldılar!
     *
     *  Twitter API'sinin şimdi kendi sınıfı var
     *  ve bizim durum güncllemesi getiren sınıfımızdan ayrıldı.
     *  Vayyy sonunda iki sınıfında kendi sorumlukları var ve
     *  artık tamamen izole olmuş bir şekilde test edilebilirler.
     *
     *  Mi acaba?
     *  
     *  Hala bir problemimiz var aslında yok mu? Durum güncellemesi
     *  sınıfı(SocialFeed) TwitterFeedReader sınıfının içinde örnekleniyor. 
     *  ki bu sınıf Twitter API'sine ulaşamıyor. 
     *  Dolasıyla tüm testlerimiz yine başarısız oldu.
     *  
     *  Üçüncü bölüme geçin.
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $s = new SocialFeed();
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
