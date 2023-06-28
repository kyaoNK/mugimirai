<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- Wordpressのヘッダー -->
        <?php wp_head(); ?>
        <title><?php wp_title("|", true, "right"); ?></title>
        <!-- レスポンシブ対応 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-width=1.0, minimum-width=1.0">
        <!-- favicon -->
    </head>
    <body>
        <header class="humberger-header">
            <a class="menu">
                <span class="menu_line menu_line_top"></span>
                <span class="menu_line menu_line_center"></span>
                <span class="menu_line menu_line_bottom"></span>
            </a>
            <nav class="full-nav">
                <div class="full-nav-wrap">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href="">生い立ち</a></li>
                        <li><a href="">ストーリー</a></li>
                        <li><a href="">活動</a></li>
                        <li><a href="">関わり日記</a></li>
                    </ul>
                </div>
            </nav>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . "/assets/img/"; ?>logo.png">
            </div>
        </header>