<?php

namespace Example\FeedReaders;

interface FeedReaderInterface
{
    /**
     * Durum mesajları array olarak alınıyor
     *
     * @return array
     */
    public function getMessages();
}
