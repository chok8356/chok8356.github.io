<div class="hkb-feedbackbar__block" data-nonce="<?php echo wp_create_nonce('feedbackResponses'); ?>">
    <h2 class="hkb-feedbackbar__title"><span class="hkb-feedbackbar_count">0</span> <?php _e( 'Responses' , 'ht-knowledge-base' ); ?></h2>
        <div class="hkb-feedbackbar">
            <div class="hkb-feedbackbar_good" data-hkb-feedbacknum="" style="width: 50%">&nbsp;</div>
            <div class="hkb-feedbackbar_bad" data-hkb-feedbacknum="" style="width: 50%"> &nbsp;</div>
        </div>
</div>

<div class="hkb-feedbackfilter">
    <div class="hkb-feedbackfilter__btnlabel"><?php _e( 'Show:' , 'ht-knowledge-base' ); ?></div>
    <div class="hkb-feedbackfilter__btngroup">
        <button class="hkb-feedbackfilter__btn hkb-feedbackfilter__btn_all active"><?php _e( 'All' , 'ht-knowledge-base' ); ?></button>
        <button class="hkb-feedbackfilter__btn hkb-feedbackfilter__btn_helpful"><?php _e( 'Helpful' , 'ht-knowledge-base' ); ?></button>
        <button class="hkb-feedbackfilter__btn hkb-feedbackfilter__btn_unhelpful"><?php _e( 'Unhelpful' , 'ht-knowledge-base' ); ?></button>
    </div>
    <span class="hkb-feedbackfilter__info">
        (<?php _e( 'Shows latest 30 responses in period' , 'ht-knowledge-base' ); ?>)
    </span>
</div>

<ul class="hkb-feedbacklist" data-nonce="<?php echo wp_create_nonce('feedbackCards'); ?>">

</ul>