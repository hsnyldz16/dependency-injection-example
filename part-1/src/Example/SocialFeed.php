<?php

namespace Example;

use Exception;

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
        // İşte test problemleri!
        // ---------------------------------------------------
        // Bu kodu test edemeyiz sosyal medya beslemesi
        // kodun mesajları getirmesi için birbirine çok bağımlı
        // seçtiğimiz sosyal medya (Twitter).
        return $this->getMessages();
    }

    /**
     * Twitter API den bir array olarak mesajları alır
     *
     * @return array
     */
    public function getMessages()
    {
        // Şimdi sonlanan bir bağlantıyı ve fail olan bir işlemi simüle edelim.
        // uygulama 10 saniye sonra sonlanıyor ve
        // yeni bir istisna (exception) fırlatıyor.
        sleep(10);
        throw new Exception('Connection to twitter timed out.');
    }
}
