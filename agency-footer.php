<?php
/**
 * 加盟教室専用のフッターテンプレート
 * 
 * 求人情報管理ページ用のカスタムフッター
 */
?>

<!-- #content -->

<footer class="agency-footer">
    <div class="agency-footer-container">
        <div class="agency-footer-copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<style>
    /* 加盟教室専用フッターのスタイル */
    .agency-footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        margin-top: 50px;
    }
    
    .agency-footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }
    
    .agency-footer-copyright p {
        margin: 0;
        font-size: 14px;
    }
    
    /* モバイル対応 */
    @media (max-width: 768px) {
        .agency-footer {
            padding: 15px 0;
        }
    }
</style>