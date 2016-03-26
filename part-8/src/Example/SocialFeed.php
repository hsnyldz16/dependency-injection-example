<?php

namespace Example;

use Example\FeedReaders\FeedReaderInterface;

/**
 * Farklı formatlarda formatlanmış 
 * sosyal medya durum güncellemesi getirir.
 */
class SocialFeed
{
    /**
     * FeedReaderInterface implementasyonu
     *
     * @var FeedReaderInterface
     */
    private $feedReader;

    /**
     * Bağımlılıklar enjekte ediliyor.
     *
     * TwitterFeedReader type hintini kaldırıp yerine FeedReaderInterface 
     * type hintini yerleştirdik. Bu şekilde FeedReaderInterface'ine uygun olan 
     * her sınıf artık enjekte edilebilir hale gelmiş oldu.
     * 
     * @param FeedReaderInterface $feedReader
     */


    public function __construct(FeedReaderInterface $feedReader)
    {
        $this->feedReader = $feedReader;
    }

    /**
     * Sosyal ağ durum güncellemesi array olarak alınıyor
     * 
     * @return array
     */
    public function getArray()
    {
        return $this->feedReader->getMessages();
    }
}
