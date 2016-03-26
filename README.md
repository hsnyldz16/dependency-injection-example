# Dependency Injection Örneği

> Dependency injection karmaşık olmak zorunda değil. Hadi bunu beraber görelim

## Peki nedir?

Dependency injection sınıf bağımlıklıklarını daha kolay kontrol altına almak için, daha iyi bir test ortamı hazırlamak ve mocking(sahte sınıf türetme) tekniğini kullanışlı hale getirmek için kullanılır.
İnternette Dependency injection ile ilgili bir çok örnek var fakat bir çoğunu oldukça karmaşık buldum. Bu paket ile Dependency injection kavramını kodların içeriğinde bulunan yorum satırlarıyla, adım adım daha kolay anlayacaksınız.

## Peki bu kimin eseri?

Merhaba! ben [Dayle Rees](http://daylerees.com).

Açık kaynak kod hayranıyım, ve [Laravel framework](http://laravel.com) core geliştiricisiyim.
Ayrıca öğretmeye düşkünüm. Kitaplarım [Code Bright](http://leanpub.com/codebright) ve [Code Happy](http://leanpub.com/codehappy) binlerce web geliştiricisinin Laravel PHP frameworkunu benimsemesini sağladı.

Yazı sitilim basit ve sade bir dil içerir, tıpkı bu açıklamada olduğu gibi.

## Nasıl öğreneceğim?

Çok kolay klasörlerdeki 'part-x' leri görüyormusun? Her biri tamamladığımız işlem adımlarını temsil ediyor. `part-1` den başlayarak dependency injection gerekliliklerini algılayıp, zorlukları keşfedip, çözümlerini buluyoruz.

Öğrenmek için yorum satırlarını okuman yeterlidir. İlk olarak uygulamanın mimarisine bir göz atalım. `part-x/src` klasörünün içince yorumlu sınıflardan oluşan 5'den az dosya bulunmaktadır. İlgili test dosyaları ise `part-x/tests` klasörünün içindedir. 

`phpunit` komutunu her 'part-x' klasörününde çalıştırıp test sonuçlarını incelemeyi unutmayın.

part 9' a geldiğinizde bir dependency injection ustası olacaksınız.


## Nasıl çalışır?

Deponun her bir bölümü tamamlanmış çeşitli yaşam döngü safhalarından oluşan PHP uygulaması barındırır. Her bölüm bir birinden bağımsızdır. Sınıf yükleme işi composer](http://getcomposer.org/) tarafından sağlanır. Bu nedenle her bir bölümde `composer.json` dosyası vardır.
Ayrıca testleri çalıştırmak için composerın bir kopyasını oluşturmanız gerekmiyor. Vendor dosyalarını her bir test için versiyonladığım için testleri direk çalıştırabilirsiniz. Şanslısınız Vesselam!

Uygulama dosyalarımız `psr-0` standartlarına göre `part-x/src` klasörlerinde kaydedilmiştir. Bütün test dosyaları `part-x/tests` klasörünün altındadır. Her bölüm `phpunit.xml` dosyası içermektedir. Bu nedenle `phpunit` komutuyla test işlemlerini gerçekleştirebilirsiniz.

## Ek tavsiye olarak

Her bir bölümü dikkatlice okuyun. Repository'i localinize clonlamanızı tavsiye ediyorum. böylece text editörünüzün özelliklerini kullanabilir ve testleri çalıştırarak deneyebilirsiniz.

## Size nasıl teşekkür edebilirim?

Neden olmasın son Laravel kitabımı alabilirsiniz. Laravel dependency injectionı ve inversion of control prensiplerini kullanan harika bir framework. [Leanpub üzerinden bir kopyasını alabilirsiniz](http://leanpub.com/codebright)

İlla paramı olması gerekiyor. Tabiyki de değil github repomu beğenebilirsiniz. İlgiye bayılırım. Dünyaya yayılması için bu repositoryin linkini Twitter veya HackerNews de paylaşabilirsin. 

[Twitterda beni takip](https://twitter.com/daylerees) etmeyi unutmayın!

Teşekkürler!
