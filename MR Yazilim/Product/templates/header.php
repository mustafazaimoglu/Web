<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="79q7ttvS7OfoeT6X_ifsGZH2_MzNUfuau8PjJPgYF30"/>
    <!-- <script data-ad-client="ca-pub-6040066203466117" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
    <meta name="author" content="mryazilim.net">
    <meta name="description" content="<?php echo isset($content) ? htmlspecialchars($category ." ". $content["title"]) : htmlspecialchars("MR Yazılım - Algoritma ve Programlama Konu Anlatımları, Örnekleri") ;?>">
    <meta name="keywords" content="HTML, CSS, Java, Tutorial, Algoritma, Algoritma Konu Anlatımı,Algoritma Karar Yapıları,Basit Algoritmalar, Java Örnekler, Porgramlama,Programlama Türkçe,MR,MR yazilim,MRyazılım,Algoritma Ders,Algoritma Örnekler,Hmtl Taglar, Hmtl Tags, CSS flexbox,kodlama,yazılım,inönü üniversitesi">
    <meta name="keywords" content="<?php echo isset($category) ? htmlspecialchars($category) : htmlspecialchars("Algoritma Nedir") ; ?>">
    <link rel="icon" href="./system/logo/icon.png">
    <title><?php echo isset($content["title"]) ? htmlspecialchars($content["title"]) : htmlspecialchars("MR Yazılım") ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/977c0c8866.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" media="(max-width:762px)" href="./css/mobile.css">

    <!-- Code Highlight -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/monokai-sublime.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>

<body>
    <header>
        <div id="firstNav">
            <div class="container">
                <div id="navbar1">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./system/logo/logo.png" alt="logo" height="50px">
                        </a>
                    </div>

                    <div id="menuPositioningDiv">
                        <div id="menus">
                            <div class="navbar-list">
                                <div id="menuCloseSpan" class="navbar-list-item" style="text-align: right;">
                                    <span>
                                        <i class="fas fa-times" id="menuCloseButton"></i>
                                    </span>
                                </div>
                                <div class="navbar-list-item">
                                    <a href="content.php?category=Algoritma">Algoritma</a>
                                </div>
                                <div class="navbar-list-item">
                                    <a href="content.php?category=Ne_nedir">Ne Nedir?</a>
                                </div>
                                <div class="navbar-list-item" id="dropdownMenu">
                                <a href="#">Hızlı Erişim<i class="fas fa-caret-down" style="font-size: 1.2rem; padding-left: 1.2rem;"></i></a>
                                <div class="dropdownContent">
                                    <?php foreach($categories as $c): ?>
                                        <div class="navbar-list-item">
                                        <a href="content.php?category=<?php echo htmlspecialchars($c["category_name"])?>" style="<?php echo $c["category_name"] == $category ? htmlspecialchars("color:#0048ff !important") : htmlspecialchars("") ?>">
                                            <?php echo htmlspecialchars($c["category_name"]) ?>
                                        </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                                <div class="navbar-list-item">
                                    <a href="about-us.php">Hakkımızda</a>
                                </div>
                            </div>

                            
                            
                        </div>
                    </div>

                    <span id="menuOpenSpan">
                        <i class="fas fa-bars" id="menuOpenButton"></i>
                    </span>
                </div>
            </div>
        </div>
        <div id="secondNav">
            <div class="container">
                <div id="navbar2">
                    <div class="navbar-list">
                        <?php foreach($categories as $c): ?>
                            <div class="navbar-list-item">
                            <a href="content.php?category=<?php echo htmlspecialchars($c["category_name"])?>" style="<?php echo $c["category_name"] == $category ? htmlspecialchars("color:#ffff00") : htmlspecialchars("") ?>">
                                <?php echo htmlspecialchars($c["category_name"]) ?>
                            </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="forMoreButton" style="display:<?php echo isset($content) ? htmlspecialchars("") : htmlspecialchars("none") ;?> ">
            <a href="#sidebar">
                <span style="color: rgb(0, 0, 0);">Dahası</span>
                <i class="fas fa-arrow-down" style="font-size: 2.5rem;"></i>
            </a>
        </div>
    </header>