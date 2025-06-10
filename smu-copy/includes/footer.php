    <footer class="footer">
    <div class="footer__main">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col footer__col--logo">
                    <div class="footer__logo">
                        <img src="/images/logo-white.svg" alt="СМУ-1" class="footer__logo-img">
                        <span class="footer__logo-text">СМУ-1</span>
                    </div>
                    <div class="footer__copyright">© <?php echo SITE_YEAR; ?> <?php echo SITE_COMPANY; ?></div>
                </div>

                <div class="footer__col">
                    <h3 class="footer__title">Компании группы</h3>
                    <ul class="footer__menu">
                        <li><a href="/sk-smu1">СК «СМУ-1»</a></li>
                        <li><a href="/inone-euro">InOne Euro</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h3 class="footer__title">Партнеры</h3>
                    <div class="footer__partners">
                        <a href="#"><img src="/images/partners/evraz.png" alt="ЕВРАЗ"></a>
                        <a href="#"><img src="/images/partners/tmk.png" alt="ТМК"></a>
                        <a href="#"><img src="/images/partners/tatneft.png" alt="Татнефть"></a>
                        <a href="#"><img src="/images/partners/uralkaliy.png" alt="Уралкалий"></a>
                    </div>
                </div>

                <div class="footer__col footer__col--contacts">
                    <h3 class="footer__title">Контакты</h3>
                    <address class="footer__address">
                        <?php echo SITE_ADDRESS; ?>
                    </address>
                    <div class="footer__phone">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                            <path d="M14.5 11.5c-.6.9-1.5 1.7-2.4 2.3-.4.2-.8.3-1.2.3-.4 0-.8-.1-1.1-.3l-1.5-.8c-1.2-.6-2.3-1.6-3.1-2.8-.8-1.1-1.4-2.3-1.8-3.6-.1-.4 0-.8.2-1.1.3-.5.6-1 .9-1.5.3-.5.7-.9 1.1-1.3.4-.4.9-.7 1.4-.9.4-.2.8-.2 1.2-.1.4.1.8.3 1.1.6l1.2 1.2c.3.3.5.7.5 1.1 0 .4-.2.8-.5 1.1l-.8.8c-.1.1-.1.3 0 .4.4.6.9 1.1 1.5 1.6.1.1.3.1.4 0 .5l-.8.8c-.3.3-.7.5-1.1.5-.4 0-.8-.2-1.1-.5l-1.2-1.2c-.1-.1-.3-.1-.4 0-.2.2-.3.4-.5.6-.1.2-.1.4 0 .5.6 1.1 1.4 2 2.3 2.8.1.1.3.1.4 0 .2-.2.4-.3.6-.5.1-.1.3-.1.4 0l1.2 1.2c.5.5 1.2.7 1.9.6.7-.1 1.3-.5 1.8-1z"/>
                        </svg>
                        <?php echo SITE_PHONE; ?>
                    </div>
                    <div class="footer__email">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                            <path d="M14 3H2c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 2l-6 4-6-4V4l6 4 6-4v1z"/>
                        </svg>
                        <?php echo SITE_EMAIL; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/js/script.js"></script>
</body>
</html>
