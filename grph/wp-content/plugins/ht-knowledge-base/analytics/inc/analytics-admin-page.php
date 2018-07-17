<?php 
    global $wpdb; 
    $tab = isset($_GET['tab']) ? $_GET['tab'] : '';
?>

<div class="wrap">
    <h1><?php _e('Analytics <sup>BETA</sup>', 'ht-knowledge-base'); ?></h1>

    <h2 class="nav-tab-wrapper">
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=dashboard'); ?>" class="nav-tab <?php if(empty($tab)||'dashboard'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Dashboard', 'ht-knowledge-base'); ?>
        </a>
        <!--
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=articles'); ?>" class="nav-tab <?php if(!empty($tab)&&'articles'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Articles', 'ht-knowledge-base'); ?>
        </a>
        -->
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=feedback'); ?>" class="nav-tab <?php if(!empty($tab)&&'feedback'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Feedback', 'ht-knowledge-base'); ?>
        </a>
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=search'); ?>" class="nav-tab <?php if(!empty($tab)&&'search'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Search', 'ht-knowledge-base'); ?>
        </a>
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=exits'); ?>" class="nav-tab <?php if(!empty($tab)&&'exits'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Transfers', 'ht-knowledge-base'); ?>
        </a>
        <!--
        <a href="<?php echo admin_url('edit.php?post_type=ht_kb&page=hkb-analytics&tab=authors'); ?>" class="nav-tab <?php if(!empty($tab)&&'authors'==$tab) echo 'nav-tab-active'; ?>">
            <?php _e('Authors', 'ht-knowledge-base'); ?>
        </a>
        -->
    </h2>

    <div class="hkb-analyticsdate" data-nonce="<?php echo wp_create_nonce('updateUserMetaDates'); ?>">
            <span class="hkb-analyticsdate__inputwrap"><input type="text" id="filterDate1" name="filterDate1" class="datepicker" /></span>
                <span class="hkb-analyticsdate__div">-</span>
            <span class="hkb-analyticsdate__inputwrap"><input type="text" id="filterDate2" name="filterDate2" class="datepicker" /></span>
    </div>


    <div class="hkb-analyticsdash">

        <?php 

            switch ($tab) {
                case 'articles':
                    include_once('analytics-admin-page-articles-tab.php');
                    break;
                case 'feedback':
                    include_once('underscores-analytics-templates.php');
                    include_once('analytics-admin-page-feedback-tab.php');
                    break;
                case 'search':
                    include_once('analytics-admin-page-search-tab.php');
                    break;
                case 'authors':
                    include_once('analytics-admin-page-authors-tab.php');
                    break;
                case 'exits':
                    include_once('analytics-admin-page-exits-tab.php');
                    break;
                case 'dashboard':
                default:
                    include_once('analytics-admin-page-dash-tab.php');
                    break;
            }

        ?>

    </div><!-- end hkb-analyticsdash -->

</div> <!-- end wrap -->