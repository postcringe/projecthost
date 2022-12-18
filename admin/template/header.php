<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/template/assets/css/main.css">
    <script src="/admin/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/admin/template/assets/js/jquery.mask.js"></script>
    <script src="/admin/template/assets/js/sticky-header.js"></script>
    <script src="/admin/template/assets/js/jquery.vide.js"></script>
    <script src="/admin/template/assets/js/main.js"></script>
    <title><?=$PAGE_TITLE;?></title>
    <meta name="title" content="<?=$PAGE_TITLE;?>">
</head>
<body>
    <header class="wrapper main-header">
        <div class="container">
            <div class="site-name-container">
                <a href="/">
                    <svg class="header-logo" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:url(#linear-gradient-2);}.cls-3{fill:url(#linear-gradient-3);}.cls-4{fill:url(#linear-gradient-4);}.cls-5{fill:url(#linear-gradient-5);}.cls-6{fill:url(#linear-gradient-6);}.cls-7{fill:url(#linear-gradient-7);}.cls-8{fill:url(#linear-gradient-8);}.cls-9{fill:url(#linear-gradient-9);}.cls-10{fill:url(#linear-gradient-10);}.cls-11{fill:url(#linear-gradient-11);}.cls-12{fill:url(#linear-gradient-12);}</style><linearGradient id="linear-gradient" x1="24" y1="49.67" x2="24" y2="-19.53" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#273a9b"/><stop offset="0.56" stop-color="#202f65"/><stop offset="1" stop-color="#021e2f"/></linearGradient><linearGradient id="linear-gradient-2" x1="24" y1="50" x2="24" y2="-8" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#27e9de"/><stop offset="0.52" stop-color="#03a4ec"/><stop offset="1" stop-color="#2547a8"/></linearGradient><linearGradient id="linear-gradient-3" y1="50.44" x2="24" y2="10.74" xlink:href="#linear-gradient-2"/><linearGradient id="linear-gradient-4" y1="18.71" x2="24" y2="5.6" xlink:href="#linear-gradient-2"/><linearGradient id="linear-gradient-5" x1="24" y1="23.87" x2="24" y2="-6.98" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.52" stop-color="#cce2e6"/><stop offset="1" stop-color="#8fa1bb"/></linearGradient><linearGradient id="linear-gradient-6" x1="24" y1="36.24" x2="24" y2="15.89" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f3c57a"/><stop offset="0.49" stop-color="#f39369"/><stop offset="1" stop-color="#e94867"/></linearGradient><linearGradient id="linear-gradient-7" x1="24" y1="37.49" x2="24" y2="17.18" xlink:href="#linear-gradient-6"/><linearGradient id="linear-gradient-8" x1="24" y1="30.83" x2="24" y2="12.64" xlink:href="#linear-gradient-6"/><linearGradient id="linear-gradient-9" x1="24.12" y1="33.19" x2="24.12" y2="18.17" xlink:href="#linear-gradient-5"/><linearGradient id="linear-gradient-10" x1="20.34" y1="33.19" x2="20.34" y2="18.17" xlink:href="#linear-gradient-5"/><linearGradient id="linear-gradient-11" x1="30.86" y1="33.19" x2="30.86" y2="18.17" xlink:href="#linear-gradient-5"/><linearGradient id="linear-gradient-12" x1="27.11" y1="33.19" x2="27.11" y2="18.17" xlink:href="#linear-gradient-5"/></defs><title>smartphone, smart, phone, mobile, profile</title><rect class="cls-1" x="10.5" y="3" width="27" height="42" rx="5.26" ry="5.26"/><path class="cls-2" d="M32.39,6H29.12a1.29,1.29,0,0,0-1.21.83l-.1.25a1.29,1.29,0,0,1-1.21.83H21.39a1.29,1.29,0,0,1-1.21-.83l-.1-.25A1.29,1.29,0,0,0,18.88,6H15.61A2.11,2.11,0,0,0,13.5,8.11V39.89A2.11,2.11,0,0,0,15.61,42H32.39a2.11,2.11,0,0,0,2.11-2.11V8.11A2.11,2.11,0,0,0,32.39,6Z"/><rect class="cls-3" x="16.5" y="19.5" width="15" height="22.5"/><path class="cls-4" d="M32.39,6H29.12a1.29,1.29,0,0,0-1.21.83l-.1.25a1.29,1.29,0,0,1-1.21.83H21.39a1.29,1.29,0,0,1-1.21-.83l-.1-.25A1.29,1.29,0,0,0,18.88,6H15.61A2.11,2.11,0,0,0,13.5,8.11V9.23a2.11,2.11,0,0,1,2.11-2.11h3.27A1.29,1.29,0,0,1,20.09,8l.1.25A1.29,1.29,0,0,0,21.39,9h5.22a1.29,1.29,0,0,0,1.21-.83l.1-.25a1.29,1.29,0,0,1,1.21-.83h3.27A2.11,2.11,0,0,1,34.5,9.23V8.11A2.11,2.11,0,0,0,32.39,6Z"/><circle class="cls-5" cx="24" cy="19.51" r="7.5"/><path class="cls-6" d="M24,21.67a7.48,7.48,0,0,0-5.73,2.67,7.49,7.49,0,0,0,11.46,0A7.48,7.48,0,0,0,24,21.67Z"/><path class="cls-7" d="M24,21.67a7.44,7.44,0,0,0-2.76.54,3,3,0,0,0,5.51,0A7.44,7.44,0,0,0,24,21.67Z"/><circle class="cls-8" cx="24" cy="18.01" r="3"/><path class="cls-9" d="M30.89,31.5H17.36a.75.75,0,0,1-.75-.75h0a.75.75,0,0,1,.75-.75H30.89a.75.75,0,0,1,.75.75h0A.75.75,0,0,1,30.89,31.5Z"/><path class="cls-10" d="M23.33,36h-6a.75.75,0,0,1-.75-.75h0a.75.75,0,0,1,.75-.75h6a.75.75,0,0,1,.75.75h0A.75.75,0,0,1,23.33,36Z"/><path class="cls-11" d="M30.86,36h0a.75.75,0,0,1-.75-.75h0a.75.75,0,0,1,.75-.75h0a.75.75,0,0,1,.75.75h0A.75.75,0,0,1,30.86,36Z"/><path class="cls-12" d="M27.11,36h0a.75.75,0,0,1-.75-.75h0a.75.75,0,0,1,.75-.75h0a.75.75,0,0,1,.75.75h0A.75.75,0,0,1,27.11,36Z"/></svg>
                </a>
                <a href="/">
                    <div class="site-name__title">restorania.ru</div>
                    <div class="site-name__subtitle">Сайт ресторанов </div>
                </a>
            </div>
            <div class="header-navigation-container">
                <nav class="header-navigation">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog/">Рестораны</a></li>
                        <li><a href="/about/">О проекте</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-buttons-wrapper">
               
                <? global $USER;
                 if ($USER->IsAuthorized()):?>
                    <div class="header-login-toggle">
                        <?global $USER;?>
                        <div class="toggle__header"><?=$USER->GetSurName()?> <?=mb_substr($USER->GetFirstName(), 0, 1)."."?> <?=mb_substr($USER->GetFather(), 0, 1)."."?></div>
                        <div class="toggle_toggle-area">
                            <div class="toggle-area__items">
                                <? 
                                if ($USER->IsAdmin()):?>
                                <a href="/admin/console/" class="toggle-area__item">Администрирование</a>
                                <?endif;?>
                                
                                <a href="/profile" class="toggle-area__item">Настройки</a>
                                <a href="/login/logout.php" class="toggle-area__item">Выход</a>
                            </div>
                        </div>
                    </div>
                <?else:?>
                    <div class="header-login-button-wrapper">
                        <a href="/login/" class="header-login-button">Войти</a>
                    </div>
                <?endif;?>
            </div>
        </div>
    </header>
    <div class="wrapper content main-wrapper">
        <div class="container">