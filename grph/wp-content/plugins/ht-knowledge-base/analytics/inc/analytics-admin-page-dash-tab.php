<div class="hkb-grid">

    <div class="hkb-grid__col hkb-grid__8">
        <!-- start dashbox -->
        <div id="hkb_kbvisits" class="hkb-dashbox">

            <div class="hkb-dashbox__header">
                <h3><?php _e('Knowledge Base Views', 'ht-knowledge-base'); ?></h3>
            </div>

            <div class="hkb-dashbox__content hkb-dashbox--monthly-views">
                <div class="hkb-dashbox--monthly-views-messages">
                        <!-- error messages and/or legend goes here -->
                    </div>
                <canvas data-nonce="<?php echo wp_create_nonce('monthlyViewsChart'); ?>" class="chart-canvas--monthly-views"></canvas>
            </div>

        </div>
        <!-- end dashbox -->
    </div>

    <div class="hkb-grid__col hkb-grid__4">
        <div id="hkb_kbstats" class="hkb-dashbox">
            <div class="hkb-dashbox__header">
                <h3><?php _e('Knowledge Base Statistics', 'ht-knowledge-base'); ?></h3>
            </div>
            <div class="hkb-dashbox__content">
                <ul class="hkb-dashboardmetrics">
                    <li>
                        <div class="hkb-dashboardmetrics__value hkb-dashboardmetrics__totalarticles_value" data-nonce="<?php echo wp_create_nonce('totalArticlesStats'); ?>">0</div>
                        <div class="hkb-dashboardmetrics__label hkb-dashboardmetrics__totalarticles_label" title=""><?php _e('Total Articles', 'ht-knowledge-base'); ?></div>
                    </li>
                    <li>
                        <div class="hkb-dashboardmetrics__value hkb-dashboardmetrics__articlesperiod_value" data-nonce="<?php echo wp_create_nonce('articlesPeriodStats'); ?>">0</div>
                        <div class="hkb-dashboardmetrics__label hkb-dashboardmetrics__articlesperiod_label" title=""><?php _e('Articles Published', 'ht-knowledge-base'); ?></div>
                    </li>
                    <li>
                        <div class="hkb-dashboardmetrics__value hkb-dashboardmetrics__articleviews_value" data-nonce="<?php echo wp_create_nonce('articleViewsStats'); ?>">0</div>
                        <div class="hkb-dashboardmetrics__label hkb-dashboardmetrics__articleviews_label" title=""><?php _e('Article Views', 'ht-knowledge-base'); ?></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /.hkb-grid -->

<div class="hkb-grid">

    <div class="hkb-grid__col hkb-grid__6">
        <div class="hkb-dashbox hkb-dashboardfeedback">
            <div class="hkb-dashbox__header">
                <h3><?php _e('Article Feedback', 'ht-knowledge-base'); ?></h3>
            </div>
            <div class="hkb-dashbox__content">

                <ul class="hkb-dashboardfeedback__stats" data-nonce="<?php echo wp_create_nonce('feedbackOverview'); ?>">
                    <li class="hkb-dashboardfeedback__statsgood">
                        <div class="hkb-dashboardfeedback__value hkb-dashboardfeedback__good_value">0</div>
                        <div class="hkb-dashboardfeedback__label hkb-dashboardfeedback__good_label">
                            <?php _e('Voted Helpful', 'ht-knowledge-base'); ?>
                        </div>
                    </li>
                    <li class="hkb-dashboardfeedback__statsbad">
                        <div class="hkb-dashboardfeedback__value hkb-dashboardfeedback__bad_value">0</div>
                        <div class="hkb-dashboardfeedback__label hkb-dashboardfeedback__bad_label">
                            <?php _e('Voted Unhelpful', 'ht-knowledge-base'); ?>
                        </div>
                    </li>
                </ul>

                <div class="hkb-dashboardfeedback__summary hkb-dashboardfeedback__summary--good">
                    <h4 class="hkb-dashboardfeedback__summarytitle"><?php _e('Your Feedback Rating', 'ht-knowledge-base'); ?></h4>
                    <div class="hkb-dashboardfeedback__summaryfeedback">
                        <div class="hkb-dashboardfeedback__summaryvalue"><span class="hkb-dashboardfeedback__summaryvaluenum">0</span>%</div>
                        <div class="hkb-dashboardfeedback__summarylabel"><?php _e('Article Success', 'ht-knowledge-base'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="hkb-grid__col hkb-grid__6">

        <div class="hkb-dashbox hkb-dashboardsearcheffect">
            <div class="hkb-dashbox__header">
                <h3><?php _e('Search Effectiveness', 'ht-knowledge-base'); ?></h3>
            </div>
            <div class="hkb-dashbox__content">
                <ul class="hkb-dashboardsearcheffect__stats" data-nonce="<?php echo wp_create_nonce('searchesOverview'); ?>">
                    <li class="hkb-dashboardsearcheffect__total">
                        <div class="hkb-dashboardsearcheffect__value hkb-dashboardsearcheffect__total_value">0</div>
                        <div class="hkb-dashboardsearcheffect__label hkb-dashboardsearcheffect__total_label">
                            <?php _e('Total Searches', 'ht-knowledge-base'); ?>
                        </div>
                    </li>
                    <li class="hkb-dashboardsearcheffect__failed">
                        <div class="hkb-dashboardsearcheffect__value hkb-dashboardsearcheffect__failed_value">0</div>
                        <div class="hkb-dashboardsearcheffect__label hkb-dashboardsearcheffect__failed_label">
                            <?php _e('Failed Searches', 'ht-knowledge-base'); ?>
                        </div>
                    </li>
                </ul>

                <div class="hkb-dashboardsearcheffect__summary hkb-dashboardsearcheffect__summary--good">
                    <h4 class="hkb-dashboardsearcheffect__summarytitle"><?php _e('Your Search Effectiveness', 'ht-knowledge-base'); ?></h4>
                    <div class="hkb-dashboardsearcheffect__summaryfeedback">
                        <div class="hkb-dashboardsearcheffect__summaryvalue"><span class="hkb-dashboardsearcheffect__summaryvaluenum">0</span>%</div>
                        <div class="hkb-dashboardsearcheffect__summarylabel"><?php _e('Search Effectiveness', 'ht-knowledge-base'); ?></div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- /.hkb-grid -->