<!DOCTYPE html>
<html lang="ja">
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1.0,user-scalable=yes" name="viewport">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/common.css" type="text/css" media="screen">
<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-light px-0">
                <a href="#" class="navbar-brand">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand-v.svg" alt="ブランド">
                </a>
                <nav class="nav justify-content-end">
                    <div class="text-center">
                        <a class="nav-link" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/category.svg" width="30" height="30" alt="カテゴリ">
                            <p class="small">カテゴリ</p>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="nav-link" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq.svg" width="30" height="30" alt="FAQ">
                            <p class="small">FAQ</p>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="nav-link" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/login.svg" width="30" height="30" alt="ログイン">
                            <p class="small">ログイン</p>
                        </a>
                    </div>
                </nav>
            </nav>
            <div class="component-lg input-group search mx-auto my-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-search border-0">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/search.svg" width="20" height="20" alt="検索">
                        </a>
                    </span>
                </div>
                <input type="text" class="form-control bg-search border-0" placeholder="デバイスを検索">
            </div>
            <div class="component-md ml-auto d-flex justify-content-between">
                <div>
                    <span class="align-middle">保有ポイント</span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/d-point.png" height="40" alt="dポイント">
                </div>
                <div>
                    <span class="align-middle">-,---,---P</span>
                    <a href="#" class="ml-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/angle-right.svg" width="20" height="20" alt="dポイント">
                    </a>
                </div>
            </div>
        </div>
    </header>