<?php

namespace Example;

/**
 * Farklı formatlarda formatlanmış 
 * sosyal medya durum güncellemesi getirir.
 */
class SocialFeed
{
    /**
     * Sosyal medya durumunu array olarak getirir
     *
     * @return array
     */
    public function getArray()
    {
        // Bu sınıflar ilişkilerini bitirmek zorunda :(
        // ---------------------------------------------------
        // Durum bilgisi getiren sınıfımımz ile 
        // Twitter API sınıfımız ayrıldılar
        // Şimdi herbirinin kendi görevi var

        $twitterFeedReader = new TwitterFeedReader;
        return $twitterFeedReader->getMessages();
    }
}
