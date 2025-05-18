<?php
/**
 * 加盟教室専用のヘッダーテンプレート
 * 
 * 求人情報管理ページ用のカスタムヘッダー
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        /* 加盟教室専用ヘッダーのスタイル */
        .agency-header {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
        }
        
        .agency-header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .agency-site-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }
        
        .agency-site-title a {
            color: #fff;
            text-decoration: none;
        }
        
        .agency-user-info {
            display: flex;
            align-items: center;
        }
        
        .agency-username {
            margin-right: 15px;
            font-size: 14px;
        }
        
        .agency-nav {
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }
        
        .agency-nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .agency-nav-menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        
        .agency-nav-menu li {
            margin: 0;
            padding: 0;
        }
        
        .agency-nav-menu a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .agency-nav-menu a:hover,
        .agency-nav-menu a.active {
            color: #ff9800;
            border-bottom-color: #ff9800;
        }
        
        /* モバイル対応 */
        @media (max-width: 768px) {
            .agency-header-container,
            .agency-user-info {
                flex-direction: column;
                text-align: center;
            }
            
            .agency-site-title {
                margin-bottom: 10px;
            }
            
            .agency-username {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .agency-nav-menu {
                flex-wrap: wrap;
            }
            
            .agency-nav-menu a {
                padding: 10px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="agency-header">
    <div class="agency-header-container">
        <h1 class="agency-site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        
        <div class="agency-user-info">
            <?php if (is_user_logged_in()): ?>
                <?php $current_user = wp_get_current_user(); ?>
                <span class="agency-username">ようこそ、<?php echo esc_html($current_user->display_name); ?>さん</span>
                <a href="<?php echo wp_logout_url('https://testjc-fc.kphd-portal.net/instructor-login/'); ?>" class="btn-logout">ログアウト</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<nav class="agency-nav">
    <div class="agency-nav-container">
        <ul class="agency-nav-menu">
            <?php if (is_user_logged_in()): ?>
                <li><a href="<?php echo home_url('/job-list/'); ?>" <?php echo (is_page('job-list')) ? 'class="active"' : ''; ?>>求人情報管理一覧</a></li>
                <li><a href="https://testjc-fc.kphd-portal.net/" target="_blank">求人サイトへ</a></li>
                <li><a href="<?php echo home_url('/inquiry/'); ?>" <?php echo (is_page('inquiry')) ? 'class="active"' : ''; ?>>お問い合わせ</a></li>
            <?php else: ?>
                <li><a href="https://testjc-fc.kphd-portal.net/" target="_blank">求人サイトへ</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div id="content" class="site-content">