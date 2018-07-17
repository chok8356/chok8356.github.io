<div class="hkb-grid">
    <div class="hkb-grid__col hkb-grid__12"> 
        <div class="hkb-grid__col hkb-grid__6">
            <div id="hkba_exits_overview" class="hkb-dashbox"><!-- start dashbox -->

                <div class="hkb-dashbox__header">
                    <h3><?php _e('Transfers Split %', 'ht-knowledge-base'); ?></h3>
                </div>

                <div class="hkb-dashbox__content hkb-dashbox--exits-donut">
                    <div class="hkb-dashbox--exits-donut-messages">
                        <!-- error messages and/or legend goes here -->
                    </div>
                    <!-- exit split pie chart -->
                    <canvas data-nonce="<?php echo wp_create_nonce('exitsDonut'); ?>" class="chart-canvas--exits-donut"></canvas>
                </div>

            </div><!-- end dashbox -->
        </div><!-- end hkb-grid__col6 -->

        <div class="hkb-grid__col hkb-grid__6">
            <div id="hkba_exits_metrics" class="hkb-dashbox"><!-- start dashbox -->

                <div class="hkb-dashbox__header">
                    <h3><?php _e('Transfer Overview', 'ht-knowledge-base'); ?></h3>
                </div>
                <div class="hkb-dashbox__content">
                    <ul class="hkb-transfermetrics">
                        <li>
                            <div class="hkb-transfermetrics__value hkb-transfermetrics__totalviews_value" data-nonce="<?php echo wp_create_nonce('totalViewsStats'); ?>">0</div>
                            <div class="hkb-transfermetrics__label hkb-transfermetrics__totalviews_label" title=""><?php _e('Total Views', 'ht-knowledge-base'); ?></div>
                        </li>
                        <li>
                            <div class="hkb-transfermetrics__value hkb-transfermetrics__totalexits_value" data-nonce="<?php echo wp_create_nonce('totalExitsStats'); ?>">0</div>
                            <div class="hkb-transfermetrics__label hkb-transfermetrics__totalexits_label" title=""><?php _e('Total Transfers', 'ht-knowledge-base'); ?></div>
                        </li>
                        <li>
                            <div class="hkb-transfermetrics__value hkb-transfermetricss__exitpercentage_value" data-nonce="<?php echo wp_create_nonce('exitPercentageStats'); ?>">0</div>
                            <div class="hkb-transfermetrics__label hkb-transfermetrics__exitpercentage_label" title=""><?php _e('Transfer Percentage', 'ht-knowledge-base'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- end hkb-grid__col6 -->

    </div><!-- end hkb-grid__col12 -->
</div><!-- end hkb-grid -->


<div class="hkb-grid">
    <div class="hkb-grid__col hkb-grid__12">    

        <div class="hkb-grid__col hkb-grid__6">
            <div id="hkba_category_exits" class="hkb-dashbox"><!-- start dashbox -->

                <div class="hkb-dashbox__content" style="padding-top:0; padding-left:0; padding-right:0;">
                    <table class="category-exits-result result responsive" data-nonce="<?php echo wp_create_nonce('categoryExits'); ?>" width="100%">
                        <thead>
                            <tr class="items">
                                <th class="">
                                    <?php  _e('Category Transfers','ht-knowledge-base'); ?> 
                                </th>
                                <th class="">
                                    <?php _e('Views', 'ht-knowledge-base'); ?>
                                </th>
                                <th class="">
                                    <?php _e('Transfers', 'ht-knowledge-base'); ?>
                                </th>
                                <th class="">
                                    <?php _e('Transfer %', 'ht-knowledge-base'); ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- category exits will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div><!-- end dashbox --> 
        </div><!-- hkb-grid__col grid__6 --> 

        <div class="hkb-grid__col hkb-grid__6">
            <div id="hkba_article_exits" class="hkb-dashbox"><!-- start dashbox -->

                <div class="hkb-dashbox__content" style="padding-top:0; padding-left:0; padding-right:0;">
                    <table class="article-exits-result result responsive" data-nonce="<?php echo wp_create_nonce('articleExits'); ?>" width="100%">
                        <thead>
                            <tr class="items">
                                <th class="">
                                    <?php  _e('Articles Transfers','ht-knowledge-base'); ?> 
                                </th>
                                <th class="">
                                    <?php _e('Views', 'ht-knowledge-base'); ?>
                                </th>
                                <th class="">
                                    <?php _e('Transfers', 'ht-knowledge-base'); ?>
                                </th>
                                <th class="">
                                    <?php _e('Transfer %', 'ht-knowledge-base'); ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- category exits will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div><!-- end dashbox --> 
        </div><!-- hkb-grid__col grid__6 --> 
    </div>
</div>

