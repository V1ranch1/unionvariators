<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="Ремонт вариаторов JATCO">
    <meta name="description" content="Профессиональный ремонт вариаторов от компании ЮНИОН с гарантией за 72 часа!">
    <meta name="yandex-verification" content="4195a0e700255dd7">
    <title>Юнион Вариаторы<?= $title ? ' | ' . $title : ''; ?></title>
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/datepicker.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <header class="header">
            <div class="wrapper headerWrapper">

                <div class="info info_inline headerInfo">
                    <div class="infoInner">
                        <a class="infoValue infoPhone" href="tel:+7(991)9276247"><span class="infoHightlight">+7 (991)</span> 927-62-47</a>
                        <a class="infoValue infoPhone" href="tel:+7(967)1074554"><span class="infoHightlight">+7 (967)</span> 107-45-54</a>
                    </div>
                </div>

                <a class="headerLogo" href="/">
                    <img class="logo" src="/images/logo.svg" alt="Юнион Вариаторы">
                </a>

                <div class="headerSocial social">
                    <span class="socialCaption">Мы в соцсетях</span>
                    <ul class="socialList">
                        <li class="socialListItem">
                            <a class="socialLink" href="https://vk.com/unionvariators">
                                <img class="socialIcon" src="/images/social/vk.svg" alt="Юнион Вариаторы Вконтакте">
                            </a>
                        </li>
                        <li class="socialListItem">
                            <a class="socialLink" href="https://t.me/unionvariators">
                                <img class="socialIcon" src="/images/social/telegram.svg" alt="Юнион Вариаторы Телеграм">
                            </a>
                        </li>
                        <li class="socialListItem">
                            <a class="socialLink" href="https://www.drive2.ru/users/unionvariators/">
                                <img class="socialIcon" src="/images/social/drive2.svg" alt="Юнион Вариаторы Драйвту">
                            </a>
                        </li>
                        <li class="socialListItem">
                            <a class="socialLink" href="https://ok.ru/group/70000000281023">
                                <img class="socialIcon" src="/images/social/ok.svg" alt="Юнион Вариаторы Одноклассники">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <?php if ($page == 'main') { ?>
                <div class="menu">
                    <div class="menuFixed">
                        <div class="wrapper">
                            <menu class="menuInner">
                                <a class="menuLink scrollTo" href="#models">Модели вариаторов</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#services">Услуги</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#benefits">Преимущества</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#catalog">Каталог</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#order">Заявка</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#contacts">Контакты</a>
                            </menu>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="menuStub"></div>
            <?php } ?>

        </header>

        <?= $content; ?>

        <footer class="footer<?= $page == 'main' ? ' footer_main' : ''; ?>">

            <div class="footerTop">

                <?php if ($page == 'main') { ?>
                    <div class="menu menu_footer">
                        <div class="wrapper">
                            <menu class="menuInner">
                                <a class="menuLink scrollTo" href="#models">Модели вариаторов</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#services">Услуги</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#benefits">Преимущества</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#catalog">Каталог</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#order">Заявка</a>
                                <span class="menuSeparator"></span>
                                <a class="menuLink scrollTo" href="#contacts">Контакты</a>
                            </menu>
                        </div>
                    </div>
                <?php } ?>

                <div class="wrapper footerTopWrapper">

                    <div class="info info_inline info_white footerInfo">
                        <div class="infoInner">
                            <a class="infoValue infoPhone" href="tel:+7(991)9276247"><span class="infoHightlight">+7 (991)</span> 927-62-47</a>
                            <a class="infoValue infoPhone" href="tel:+7(777)7777777"><span class="infoHightlight">+7 (967)</span> 107-45-54</a>
                        </div>
                    </div>

                    <a class="footerLogo" href="/">
                        <img class="logo" src="/images/logowhite.svg" alt="Юнион Вариаторы">
                    </a>

                    <div class="footerSocial social">
                        <span class="socialCaption">Мы в соцсетях</span>
                        <ul class="socialList">
                            <li class="socialListItem">
                                <a class="socialLink" href="https://vk.com/unionvariators">
                                    <img class="socialIcon" src="/images/social/vk.svg" alt="Юнион Вариаторы Вконтакте">
                                </a>
                            </li>
                            <li class="socialListItem">
                                <a class="socialLink" href="https://t.me/unionvariators">
                                    <img class="socialIcon" src="/images/social/telegram.svg" alt="Юнион Вариаторы Телеграм">
                                </a>
                            </li>
                            <li class="socialListItem">
                                <a class="socialLink" href="https://www.drive2.ru/users/unionvariators/">
                                    <img class="socialIcon" src="/images/social/drive2.svg" alt="Юнион Вариаторы Драйвту">
                                </a>
                            </li>
                            <li class="socialListItem">
                                <a class="socialLink" href="https://ok.ru/group/70000000281023">
                                    <img class="socialIcon" src="/images/social/ok.svg" alt="Юнион Вариаторы Одноклассники">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="footerBottom">
                <div class="wrapper footerBottomWrapper">
                    <span class="footerCopyright">&copy; Юнион Вариаторы 2022</span>
                    <a class="footerLink" href="https://advcreative.ru/" rel="nofollow noopenner noreferrer" target="_blank">ADVCREATIVE</a>
                </div>
            </div>

        </footer>

    </div>

    <script src="/js/datepicker.min.js"></script>
    <script src="/js/mask.js"></script>
    <script src="/js/main.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(89390481, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/89390481" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
