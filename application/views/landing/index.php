<body onload="loaderFun()" data-link="<?= base_url() ?>">
    <div class="background">
        <img src="" alt="" class="lazyload" data-src="" />
    </div>
    <div class="container">
        <div class="loader active">
            <div class="item">
                <img src="<?= base_url() ?>assets/img/loader.gif" alt="" />
                <p>Making a coffe, please wait...</p>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="logo">
                    <img src="<?= base_url() ?>assets/img/sso-logo.png" class="lazyload"
                        data-src="<?= base_url() ?>assets/img/sso-logo.png" alt="Logo HMJ TI" />
                </div>
                <div class="text">
                    <h4>Selamat datang di website</h4>
                    <h1>SSO-INFORMATICS <br>
                        HMJ TI UNDIKSHA</h1>
                </div>
            </header>
            <main>
                <div class="link">
                    <?php foreach ($mainLinks as $mainlink) : ?>
                    <a href="<?= base_url() ?><?= $mainlink['href']; ?>">
                        <i class="<?= $mainlink['icon']; ?>"></i>
                        <h5><?= $mainlink['title']; ?></h5>
                    </a>
                    <?php endforeach; ?>

                    <!-- show more shortcut -->
                    <a href="#" class="more">
                        <i class="fas fa-bars"></i>
                        <h5>Layanan</h5>
                    </a>
                </div>
            </main>
        </div>
        <div class="more-content">
            <div class="back">
                <a href="#"><i class="fas fa-caret-left"></i> </a>
            </div>
            <div class="swipe">
                <img src="" alt="" />
            </div>
            <div class="content">
                <div class="tag">
                    <h5>Semua Layanan</h5>
                </div>
                <div class="link-all">
                    <?php foreach ($links as $link) : ?>
                    <a href="<?= $link['href']; ?>">
                        <i class="<?= $link['icon']; ?>"></i>
                        <h5><?= $link['title']; ?></h5>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>