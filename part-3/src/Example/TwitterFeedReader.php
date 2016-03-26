<?php

namespace Example;

use Exception;

class TwitterFeedReader
{
    /**
     * Twitter API den array olarak mesajlar alır
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
