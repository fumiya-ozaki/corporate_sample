<!DOCTYPE html>
<html lang="ja">
<head><!--headstart-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">                    <!--レスポンシブ-->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">    <!--fontawsome-->
  <link rel="stylesheet" href="css/reset.css">                                              <!--resetcss-->
  <link rel="stylesheet" href="css/style.css">                                              <!--css-->
  <title>corporate_sample</title>
</head><!--headend-->

<body> <!--bodystart-->
  <div id="container">

    <nav id="header"><!--headerstart-->
      <h1><a href="index.html">"CORPORATE_SAMPLE_SITE"</a></h1>
      <div id="menu">
        <ul>
          <li class="home"><a href="index.html">ホーム</a></li>
          <li><a href="service.html">事業内容</a></li>
          <li><a href="company.html">会社概要</a></li>
          <li><a href="archive.html">お知らせ</a></li>
          <li><a href="single.html">ブログ</a></li>                
          <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
      </div>
    </nav><!--headerend-->

    <div class="humb-menu"><!--humbmenustart-->
      <input id="gnav-input" type="checkbox">
      <label for="gnav-input" id="gnav-btn">
        <div i class="fas fa-bars"></div>
      </label>
    
      <div id="gnav-content">
        <!-- タイトルを記載ください -->
        <div class="humb-menu__title">リンク</div>
        <label for="label1">
          <!-- 親要素の名前 -->
          <p>ブログ</p><p>＋</p>
        </label>
        <input type="checkbox" id="label1" class="cssacc" />
        <div class="accshow">
          <!-- 子要素の名前 -->
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>
      
        <label for="label2">
          <p>リリース</p><p>＋</p>
        </label>
        <input type="checkbox" id="label2" class="cssacc" />
        <div class="accshow">
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>

        <label for="label3">
          <p>業務について</p><p>＋</p>
        </label>
        <input type="checkbox" id="label3" class="cssacc" />
        <div class="accshow">
          <p>content</p>
          <p>content</p>
          <p>content</p>
          <p>content</p>
        </div>
      </div>
    </div><!--humbmenuend-->
