<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="content-static">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <main id="content" class="basic-content">
        <section class="contact-request">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <article class="contact">
                            <div class="article-header">
                                <h2>CONTACT</h2>
                                <dl>
                                    <dt>유어스디자인</dt>
                                    <dd>
                                        <address>서울시 강남구 선릉로 112길 37 권정빌딩 3층 2호</address>
                                        <b>+82 (0)2 517 7778</b>
                                    </dd>
                                </dl>
                            </div>
                            <div class="article-content">
                                <div class="maps">
                                    <img src="/assets/images/contact/img_maps.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-8">
                        <article class="request">
                            <div class="article-header">
                                <h2>PROJECT REQUEST</h2>
                                <p>
                                    If you think I am the guy for your next project or if  you’d just like to say “hello”, feel free to get in touch with me anytime. I’m quick at responding.
                                </p>
                            </div>
                            <div class="article-content">
                                <form action="#">
                                    <div class="table-wrap">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="u-name" class="sr-only">name</label>
                                                            <input type="text" class="form-control" id="u-name" placeholder="Name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="u-mail" class="sr-only">E-mail</label>
                                                            <input type="text" class="form-control" id="u-mail" placeholder="Email">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="u-company" class="sr-only">company</label>
                                                            <input type="text" class="form-control" id="u-company" placeholder="Company">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="u-phone" class="sr-only">Phone</label>
                                                            <input type="text" class="form-control" id="u-phone" placeholder="Phone">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="form-group">
                                                            <label for="u-comment" class="sr-only">comment</label>
                                                            <textarea class="form-control" id="u-comment" placeholder="Comment"></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn-area">
                                        <button type="submit" class="btn btn-submit">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>