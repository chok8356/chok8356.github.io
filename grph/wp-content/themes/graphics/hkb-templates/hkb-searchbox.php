<?php
/*
*
* Шаблон, используемый для отображения окна поиска
*
*/
?>

<?php if(hkb_show_knowledgebase_search()): ?>
    <?php /*важно - загружать скрипты живого поиска */ ht_knowledge_base_activate_live_search(); ?>
    <form class="hkb-site-search" method="get" action="<?php echo home_url( '/' ); ?>">
        <label class="hkb-screen-reader-text" for="s"><?php _e( 'Искать', 'helpguru' ); ?></label>
        <input class="hkb-site-search__field" type="text" value="<?php echo get_search_query(); ?>" placeholder="Поиск по базе знаний" name="s" autocomplete="off">
        <input type="hidden" name="ht-kb-search" value="1" />
        <input type="hidden" name="lang" value="<?php if(defined('ICL_LANGUAGE_CODE')) echo(ICL_LANGUAGE_CODE); ?>"/>
        <button class="hkb-site-search__button" type="submit"><span><?php _e( 'Поиск', 'helpguru' ); ?></span></button>
    </form>
<?php endif; ?>