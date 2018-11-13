<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');?>
<link rel="stylesheet" href="/mobile/assets/css/style.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php');?>

    <main id="content">
        <article class="contact-request">
            <div class="maps">
                <span>지도영역</span>
            </div>
            <div class="container">
                <dl class="details-addr">
                    <dt>CONTACT</dt>
                    <dd>
                        <b>유어스디자인그룹</b>
                        <address>서울시 강남구 선릉로 112길 37 건정빌딩 3층 2호</address>
                        <a href="tel:+82025177778">+82 (0)2 517 7778</a>
                    </dd>
                </dl>
                <div class="article-content">
                    <h3>PROJECT REQUEST</h3>
                    <p>
                        If you think I am the guy for your next project or if you’d just like to say “hello”, feel free to get in touch with me anytime. I’m quick at responding.
                    </p>
                    <form action="#">
                        <ul>
                            <li>
                                <div class="form-group">
                                    <label for="u-name" class="sr-only">Name</label>
                                    <input type="text" id="u-name" class="form-control" placeholder="Name">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="u-mail" class="sr-only">Email</label>
                                    <input type="text" id="u-mail" class="form-control" placeholder="Email">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="u-company" class="sr-only">Company</label>
                                    <input type="text" id="u-company" class="form-control" placeholder="Company">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="u-phone" class="sr-only">Phone</label>
                                    <input type="text" id="u-phone" class="form-control" placeholder="Phone">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="u-comment" class="sr-only">Comments</label>
                                    <textarea id="u-comment" class="form-control" placeholder="Comments"></textarea>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-default">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php');?>
</body>
</html>