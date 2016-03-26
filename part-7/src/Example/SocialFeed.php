<?php

namespace Example;

/**
 * Farklı formatlarda formatlanmış 
 * sosyal medya durum güncellemesi getirir.
 */
class SocialFeed
{
    /**
     * TwitterFeedReader örneklemesi.
     *
     * @var TwitterFeedReader
     */
    private $twitterFeedReader;

    /**
     * Bağımlılıklar enjekte ediliyor.
     *
     * Bu sefer type-hintimiz var TwitterFeedReader'ımız yabancı
     * veri gönderemeyeceğimizden artık emin. Şuan yabancı bir veri
     * göndermemiz mümkün değil. 
     * 
     * @param TwitterFeedReader $twitterFeedReader
     */
    
    public function __construct(TwitterFeedReader $twitterFeedReader)
    {
        $this->twitterFeedReader = $twitterFeedReader;
    }

    /**
     * Sosyal ağ durum güncellemesi array olarak alınıyor
     * 
     * @return array
     */
    public function getArray()
    {
        return $this->twitterFeedReader->getMessages();
    }
}
