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
     * Bağımlılıklar enjekte ediliyor 
     * 
     * @param TwitterFeedReader $twitterFeedReader
     */
    public function __construct($twitterFeedReader)
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
