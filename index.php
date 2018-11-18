<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php if ( is_user_logged_in() ) { ?>

    <?php if ( is_front_page() ) { ?>
    
        <?php include (TEMPLATEPATH . '/home-page.php' ); ?>
        
    <?php } elseif ( is_home() ) { ?>
    
        <?php include (TEMPLATEPATH . '/blog.php' ); ?>
    
    <?php } else { ?>
    
        <?php include (TEMPLATEPATH . '/default-page.php' ); ?>
    
    <?php } ?>
    
<?php } elseif (false !== strpos($url,'?' . $key )) { ?>

    <?php if ( is_front_page() ) { ?>
    
        <?php include( TEMPLATEPATH . '/page-login.php' ); ?>
    
    <?php } else { ?>
    
        <?php include (TEMPLATEPATH . '/page-public.php' ); ?>
    
    <?php } ?>

<?php } else { ?>

    <?php include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php } ?>

</html>