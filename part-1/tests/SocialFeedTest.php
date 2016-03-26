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
     * İşte!
     *
     * Dostum, testimiz fail oldu çünkü Twitter
     * API'si çöktü.
     *
     * Aslında daha büyük bir problemimiz var.
     * SocialFeed sınıfımız Twitter API'sinin etkileşiminden ve
     * durum güncellemelerini formatlamaktan/almaktan sorumlu
     * Her bir sınıfın yanlızca bir görevi olmalıdır (SINGLE RESPONSIBILITY)
     * Bu sınıfları bu durumda test edemeyiz. Çünkü birbirine bağımlılar
     * Birisi fail olduğunda diğeride fail olur.
     * Elbette bu durumu düzeltebiliriz. İkinci bölüme geçin
     */
    public function testCanReturnAnArrayOfStatusUpdates()
    {
        $s = new SocialFeed();
        $v = $s->getArray();
        $this->assertCount(5, $v);
    }
}
