<?php

namespace Example\FeedReaders;

class FacebookFeedReader implements FeedReaderInterface
{
    /**
     * Facebook API den array mesajları döndürür
     *
     * @return array
     */
    public function getMessages()
    {
        // mocking yapmayı öğrendik o yüzden API yı bozmaya gerek yok
        // Onun yerine birkaç rastgele mesaj gönderelim
        return array(
            'LOOK AT PHOTOS OF MY KIDS',
            'HAHA LOOK WHAT MY CAT DID',
            'HAI PLZ TO PLAY FARMVILLE?'
        );
    }
}
