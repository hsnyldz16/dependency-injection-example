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
     * Vay! TwitterFeedReader sınıfının örneğini 
     * göndererek sınıfa bağımlılık enjekte ediyoruz.
     * 
     * constructor içinden SocialFeed sınıfının kullandığı
     * TwitterFeedReader örneklemesini göndererek
     * bağımlılık kontrolünü sağlıyoruz
     * 
     * @param TwitterFeedReader $twitterFeedReader
     */
    public function __construct(TwitterFeedReader  $twitterFeedReader)
    {
        $this->twitterFeedReader = $twitterFeedReader;
    }

    /**
     * Sosyal medya durumunu array olarak getirir
     *
     * @return array
     */
    public function getArray()
    {
        // Görüldüğü üzere örnekleme yapılmıyor artık.
        // ---------------------------------------------------
        // Bu sefer yeni bir örnek oluşturmak zorunda değiliz.
        // Bunun yerine constructor dan set edilen twitterFeedReader 
        // değişkenini kullanıyoruz.
        // 
        // İşte bu kadar işlem tamam artık dependancy injection kullanıyoruz.
        // Şimdi teste baksakmı ki?
        return $this->twitterFeedReader->getMessages();
    }
}
