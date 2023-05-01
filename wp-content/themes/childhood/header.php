<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
            <?php
                bloginfo('name');
                echo " | ";
                bloginfo('description');
            ?>
        </title>
        <meta name="theme-color" content="#c9e0e04d">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-180x180.png">
		<?php
			wp_head();
		?>
    </head>
    <body class="no-svg">
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                        <div class="header__logo">
                            <?php
                                the_custom_logo();
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
                        <div class="header__contacts">
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/email.svg" alt="почта" class="header__contacts-logo">
                                <a href="<?php the_field('mail', 2) ?>" class="header__contacts-mail"><?php the_field('mail', 2) ?></a>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
                                <div class="header__contacts-tel">
                                    <a href="<?php the_field('phone_1', 2) ?>"><?php the_field('phone_1', 2) ?></a>
                                    <a href="<?php the_field('phone_2', 2) ?>"><?php the_field('phone_2', 2) ?></a>
                                </div>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="header__contacts-logo">
                                <address><?php the_field('address_1', 2) ?><br>
                                <?php the_field('address_2', 2) ?></address>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="row" data-slide="1">
                <?php
                    wp_nav_menu( [
                        //'theme_location'  => '',//указать в каком месте зарегистртровано меню. Используется, если меню задается через wp_register. При регистрации через wp_nav_menu удаляем этот пункт
                        'menu'            => 'Main', //Меню которое нужно вывести. Можно указать: id, slug или название меню.
                        'container'       => false, //Чем оборачивать ul тег. Может быть: div или nav.
                        //Если не нужно оборачивать ничем, то пишем false: container => false 
                        //'container_class' => '',//удалить, если нет нет контейнера
                        //'container_id'    => '', //удалить, если нет нет контейнера
                        'menu_class'      => 'header__nav',//скопировать из статичного меню (внутри <ul>)</ul> название <ul>, в который помещено меню
                        //'menu_id'         => '',//id меню
                        'echo'            => true, //Выводить на экран или возвратить для обработки.
                        'fallback_cb'     => 'wp_page_menu', //Функция для обработки вывода, если никакое меню не найдено.Передает все аргументы $args указанной тут функции. Установите пустую строку '' или '__return_empty_string', чтобы ничего не выводилось, если меню нет.
                        //'before'          => '',//Текст перед тегом <a> в меню.
                        //'after'           => '',//Текст после каждого тега </a> в меню.
                        //'link_before'     => '', //Текст перед анкором каждой ссылки в меню.
                        //'link_after'      => '',//Текст после анкора каждой ссылки в меню.
                        'items_wrap'      => '<ul id="%1$s" class="header__nav">%3$s</ul>',//Шаблон обёртки для элементов меню. Шаблон обязательно должен иметь плейсхолдер %3$s, остальное опционально.
                        'depth'           => 1, //До какого уровня вложенности нужно показывать ссылки (элементы меню). 0 - все уровни. Указать 1, если нужно только основное меню
                        //'walker'          => '', //Класс, который будет использоваться для построения меню. Нужно указывать экземпляр объекта, а не строку, например new My_Menu_Walker().
                     ] );
                ?>
                
                </nav>
            </div>
            <div class="header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
	</header>