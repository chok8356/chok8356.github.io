<div class="hkb-grid">
    <div class="hkb-grid__col hkb-grid__4">
        <div id="hkba_search_overview" class="hkb-dashbox"><!-- start dashbox -->

            <div class="hkb-dashbox__header">
                <h3><?php _e('Search Overview', 'ht-knowledge-base'); ?></h3>
            </div>

            <div class="hkb-dashbox__content hkb-dashbox--search-donut">
                <div class="hkb-dashbox--search-donut-messages">
                    <!-- error messages and/or legend goes here -->
                </div>
                <canvas data-nonce="<?php echo wp_create_nonce('searchDonut'); ?>" class="chart-canvas--search-donut"></canvas>
            </div>

        </div><!-- end dashbox -->
    </div><!-- end hkb-grid__col -->

    <div class="hkb-grid__col hkb-grid__8">
        <div id="hkba_search_month" class="hkb-dashbox"><!-- start dashbox -->
            <div class="hkb-dashbox__header">
                <h3><?php _e('Searches Per Month', 'ht-knowledge-base'); ?></h3>
            </div>

            <div class="hkb-dashbox__content hkb-dashbox--search-monthly">
                <div class="hkb-dashbox--search-monthly-messages">
                    <!-- error messages and/or legend goes here -->
                </div>
                <canvas data-nonce="<?php echo wp_create_nonce('monthlySearchesChart'); ?>" class="chart-canvas--monthly-searches"></canvas>
            </div>

        </div><!-- end dashbox -->
    </div><!-- end hkb-grid__col -->
</div><!-- end hkb-grid -->

<div class="hkb-grid">

    <div class="hkb-grid__col hkb-grid__6">
        <div id="hkba_null_searches" class="hkb-dashbox"><!-- start dashbox -->

            <div class="hkb-dashbox__content" style="padding-top:0; padding-left:0; padding-right:0;">
                <table class="null-searches-result result responsive" data-nonce="<?php echo wp_create_nonce('nullSearches'); ?>" width="100%">
                    <thead>
                        <tr class="terms">
                            <th>
                                <?php  _e('Null Searches','ht-knowledge-base'); ?> 
                            </th>
                            <th class="count">
                                <?php _e('Count', 'ht-knowledge-base'); ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- null searches will be populated here -->
                    </tbody>
                </table>
            </div>
        </div><!-- end dashbox -->
    </div><!-- end hkb-grid__col -->

    <div class="hkb-grid__col hkb-grid__6">
        <div id="hkba_popular_searches" class="hkb-dashbox"><!-- start dashbox -->

            <div class="hkb-dashbox__content" style="padding-top:0; padding-left:0; padding-right:0;">
                <table class="top-searches-result result responsive" data-nonce="<?php echo wp_create_nonce('topSearches'); ?>" width="100%">
                    <thead>
                        <tr class="terms">
                            <th>
                                <?php  _e('Popular Searches','ht-knowledge-base'); ?> 
                            </th>
                            <th class="count">
                                <?php _e('Count', 'ht-knowledge-base'); ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- top searches will be populated here -->
                    </tbody>
                </table>
            </div>
        </div><!-- end dashbox -->
    </div>
</div><!-- end hkb-grid -->

