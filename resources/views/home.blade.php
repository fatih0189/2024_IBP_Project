<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>Ana Sayfa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="{{asset('style_main.css')}}">

</head>
{{-- <div>
    <button class="login">Oturum Aç</button>
    <button class="signup">Kaydol</button>
</div> --}}
<body>
<!-- partial:index.partial.html -->
<head>
  <link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/n5gUtm/icon_1.png"/>
<meta name="theme-color" content="#daa37f">
  <title>Kahve Serüveni</title>
</head>

<body>
    <div class="banner">
  <div class="banner__overlay">
    <div class="banner__container">
      <h1 class="banner__title">Türkiye'nin İlk Yerli Kahve Zinciri</h1>
      <p class="banner__text">1897'den beri, ilk günkü aşkla...</p>
      <a href="{{route('login')}}" class="btn btn--opacity">Aramıza Katıl!</a>
    </div>
    <img class="banner__scroll-down" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=" />
  </div>
</div>
<div class="sect sect--type">
  <div class="container">
    <div class="row row--center">
      <div class="col-md-5 col-xs-8 col-sm-6 col--inbl">
        <h1 class="sect__title">Şeflerimizin Önerileri</h1>
      <p class="sect__subtitle">
        Her biri birbirinden lezzetli onlarca tür kahve. Hepsini deneyerek vakit kaybetmeyin, yalnızca sunduklarımıza odaklanın ve hazzı yaşayın
      </p>
      </div>
    </div>
    <div class="row row--small row--margin row--center">
      <div class="col-md-4 col-sm-4 coffee">
        <img src="https://image.ibb.co/bKy6Db/coffee_item_2.png" class="coffee__img">
        <h2 class="coffee__name">Mocha latte</h2>
        <p class="coffee__descr">
            Mocha latte, kahvenin çekici acılığı ile çikolatanın tatlı kucaklaşmasının en keyifli sonuçlarından biridir. Damakta bıraktığı yoğun lezzet ve kokusu, soğuk bir kış gününde içimizi ısıtırken, aynı zamanda bizi tatlı bir hayal dünyasına götürür. Kahvenin enerjisi ve çikolatanın mutluluk veren etkisi bir araya geldiğinde, mocha latte sadece bir içecek olmaktan çıkar, günün yorgunluğunu atıp keyifli bir mola vermenin vazgeçilmez bir parçası haline gelir.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 coffee">
        <img src="https://image.ibb.co/nN0WeG/coffee_item_1.png" class="coffee__img">
        <h2 class="coffee__name">Pour over</h2>
        <p class="coffee__descr">
            Pour over, kahvenin özünü damla damla yakalayan bir ritüeldir. Suyun ve kahvenin dansı, fincanda ortaya çıkan lezzetle taçlanır. Her yudum, kahve çekirdeklerinin tüm aromasını ve karakterini keşfetmek için bir davettir.
        </p>
      </div>

       <div class="col-md-4 col-sm-4 coffee">
        <img src="https://image.ibb.co/dHQa6w/coffee_item_3.png" class="coffee__img">
        <h2 class="coffee__name">Espresso</h2>
        <p class="coffee__descr">
            Espresso, yoğunluğu ve aromasıyla kahve tutkunlarını cezbeden bir İtalyan klasiğidir. İnce öğütülmüş kahve çekirdeklerinin yüksek basınçlı suyla buluşması sonucu ortaya çıkan bu lezzet bombası, küçük fincanlarda servis edilmesine rağmen güçlü bir etki bırakır. Kreması, kokusu ve damakta bıraktığı tat, kahve deneyimini bambaşka bir boyuta taşır.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="sect sect--brown sect--no-bottom">
  <div class="container">
    <div class="row row--center">
      <div class="col-md-5 col-sm-6 col--inbl ">
        <h1 class="sect__title sect--white-text">Hikayemiz</h1>
      <p class="sect__subtitle sect--white-text">
        İstanbul'un kalabalığından uzak, Arnavutköy'ün Arnavut kaldırımlı sokaklarında gizli bir cennet olan "Kahveci Rıza"nın hikayesi, eski bir dostlukla başlar. Çocukluk arkadaşları Rıza ve Ayşe, yıllardır hayalini kurdukları kahve dükkanını açmaya karar verirler. Rıza, yıllarca dünya kahvelerini gezmiş, farklı demleme yöntemlerini öğrenmiş bir kahve tutkunudur. Ayşe ise, pasta ve tatlı yapımında usta bir şeftir.

İkili, eski bir Rum evini özenle restore ederek, sıcak ve samimi bir atmosfere sahip bir kahveci yaratır. Kahveci Rıza'nın menüsünde, Rıza'nın özenle seçtiği kahve çekirdeklerinden hazırlanan özel kahveler ve Ayşe'nin elinden çıkan enfes tatlılar yer alır. Mekanın en sevilen köşesi ise, eski bir gramofonun nostaljik ezgileri eşliğinde kahvelerini yudumlayan müdavimlerin sohbetlerine ev sahipliği yapan şöminenin yanıdır.

Kahveci Rıza, kısa sürede sadece lezzetli kahveleriyle değil, aynı zamanda sıcak atmosferi ve samimi hizmetiyle de mahallelinin uğrak noktası haline gelir. Rıza ve Ayşe, hayallerini gerçekleştirmenin mutluluğunu yaşarken, kahve tutkunlarına unutulmaz bir deneyim sunmaya devam ederler.
      </p>
      </div>
    </div>
</div>
  </div>
  <div class="story-img"></div>

<div class="half-sect">
  <div class="half half-sect__first">
    <div class="description">
      <h2 class="description__title">Taze Öğütülmüş</h2>
      <p class="description__p">Taze öğütülmüş kahve, adeta bir vaha gibidir; kokusu burnunuza dolandığı anda tüm duyularınızı harekete geçirir ve sizi bambaşka bir dünyaya taşır. Kahve çekirdeklerinin içinde saklı olan eşsiz aromalar, öğütüldüğü anda havaya karışır ve adeta bir davet gibi sizi kendine çeker. Bu davet, sıradan bir kahve deneyiminden çok daha fazlasını vaat eder. Her bir yudumda, kahvenin tazeliğini ve canlılığını hisseder, damakta bıraktığı izlerle keyifli bir yolculuğa çıkarsınız. Taze öğütülmüş kahvenin kokusu ve tadı, günün yorgunluğunu unutturur, zihni canlandırır ve yeni keşiflere ilham verir.

      </p>
    </div>

  </div>
    <div class="half half-sect__second">  </div>
</div>

<div class="sect sect--great">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7 col-sm-offset-4 col-md-offset-6">
        <div class="description">
      <h2 class="description__title">İyi Kahve</h2>
      <p class="description__p">İyi kahve, sadece damaklarda bıraktığı tatla değil, aynı zamanda tüm duyulara hitap eden bir deneyimdir. Öğütülürken havaya karışan cezbedici kokusu, fincanda oluşan kadifemsi kreması ve ilk yudumda damağı saran zengin aromasıyla adeta bir şölene dönüşür. İyi kahve, özenle seçilmiş çekirdeklerin ustalıkla kavrulması ve demlenmesiyle ortaya çıkan bir sanat eseridir.</p>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="sect sect--best sect--center">
  <div class="container">
    <div class="row row--center">
      <div class="col-md-6 col-sm-7 col-xs-12">
        <h1 class="sect__title best--bottom sect--white-text">En İyi Makineler, Usta Eller</h1>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/n5gUtm/icon_1.png" class="best__img">
            <h2 class="best__title">En iyi Çekirdekler</h2>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/dwEXDm/icon_2.png" class="best__img">
            <h2 class="best__title">Taze Süt</h2>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/j5Og66/icon_3.png" class="best__img">
            <h2 class="best__title">Son Model Makineler</h2>
          </div>
        </div>

      <p class="sect__subtitle best--margin sect--white-text ">

Usta eller, yılların deneyimini ve birikimini her dokunuşunda hissettirir. İster bir kahve çekirdeğini öğütürken, ister bir hamuru yoğururken olsun, o ellerin sihri, ortaya çıkan lezzete yansır. Usta eller, sadece bir işi yapmakla kalmaz, aynı zamanda ona ruh katar, onu bir sanat eserine dönüştürür.
      </p>
      </div>
    </div>
</div>
  </div>


<div class="three-img">
  <div class="col-md-4 col-sm-4 col-xs-4 three-img__img three-img--1"></div>
    <div class="col-md-4 col-xs-4 col-sm-4 three-img__img three-img--2"></div>
    <div class="col-md-4 col-xs-4 col-sm-4 three-img__img three-img--3"></div>
</div>


<div class="sect blog sect--grey">
  <div class="container">
    <div class="row row--center">
      <div class="col-md-5 col-sm-6 col--inbl">
        <h1 class="sect__title">En Son Blog Paylaşımları</h1>
      </div>
    </div>
    <div class="row last-articles">
      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-1">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
            Günümüz
          </h1>
          <span class="article-pre__date">Sep 27, 2017</span>
          <p class="article-pre__ex">
            Bir fincan kahve, bir parça mutluluk! ☕ Kahvenin büyülü dünyasına adım atmak ve damaklarınızı şenlendirmek için doğru yerdesiniz. Taze çekilmiş kahve çekirdeklerinin eşsiz kokusu ve lezzetiyle güne başlamak gibisi var mı?
          </p>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-2">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
            Tecrübeler
          </h1>
          <span class="article-pre__date">Sep 27, 2017</span>
          <p class="article-pre__ex">
            Uzman baristalarımızın özenle hazırladığı birbirinden özel kahve çeşitlerimizle güne zinde başlayın, öğleden sonralarınıza keyif katın. Sıcak yaz günlerinde ise soğuk kahve seçeneklerimizle serinleyin. Yanında taptaze kruvasanlarımız ve enfes tatlılarımızla keyfinize keyif katın!
          </p>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-3">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
            Siz ve Sosyal Medyamız
          </h1>
          <span class="article-pre__date">Sep 27, 2017</span>
          <p class="article-pre__ex">
            #kahveseverler #coffeelover #demlemekeyfi etiketleriyle fotoğraflarınızı bizimle paylaşın, kahvenin mutluluğunu birlikte yaşayalım!
          </p>
        </div>
        </div>
      </div>
    </div>
    <div class="row row--margin row--center">
    </div>
 </div>
</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script><script  src=".{{asset('style_main.css')}}"></script>

</html>
