<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/assets/css/style.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php');?>

    <main id="content" class="main">
        <div class="jumbotron">
            <ul class="main-slide">
                <li style="background-image: url(/mobile/assets/images/main/img_slide01.gif);"></li>
                <li style="background-image: url(/mobile/assets/images/main/img_slide02.jpg);"></li>
                <li style="background-image: url(/mobile/assets/images/main/img_slide03.jpg);"></li>
                <li style="background-image: url(/mobile/assets/images/main/img_slide04.jpg);"></li>
                <li style="background-image: url(/mobile/assets/images/main/img_slide05.jpg);"></li>
            </ul>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php');?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/mobile/assets/js/slide.js"></script>
</body>
</html>