<div class="widgetbox <?= $brand; ?>">
    
    <!--<h3><?= __('Search for the latest offers!', 'dynamic-searchbox') ?></h3>-->
    
    <h3>
        <span class="ds-header-feat">
            <span class="ds-icon icon-flight"></span>
            <?= __('Flights', 'dynamic-searchbox') ?>
        </span> 
        <?= __('to', 'dynamic-searchbox') ?> Amsterdam
    </h3>
    
    <form id="searchbox_form">

        <input type="hidden" name="user_departure" autocomplete="off" />
        <input type="hidden" name="user_arrival" autocomplete="off" />
        <input type="hidden" name="user_language" value="<?= __('en', 'dynamic-searchbox') ?>" autocomplete="off" />   
        <input type="hidden" name="user_page" value="<?= __('com', 'dynamic-searchbox') ?>" autocomplete="off" /> 
        <input type="hidden" name="user_brand" value="<?= $brand ?>" autocomplete="off" />         
        <input type="hidden" name="user_email" value="" />        

        <div class="sb-form-fields">
        
            <label for="alert_from"><?= __('From', 'dynamic-searchbox') ?>:</label>
            <div class="input_holder">                           
                <input type="text" autocomplete="off" name="alert_from" class="form-control txt-auto" data-related="user_departure" placeholder="<?= __('Enter a city...', 'dynamic-searchbox') ?>">
                <span class="input_icon icon-home"></span>
            </div>   

            <label for="alert_to"><?= __('To', 'dynamic-searchbox'); ?>:</label>
            <div class="input_holder">                           
                <input type="text" autocomplete="off" name="alert_to" class="txt-auto" data-related="user_arrival" placeholder="<?= __('Enter a city...', 'dynamic-searchbox'); ?>">
                <span class="input_icon icon-location"></span>
            </div>

            <label for="alert_date"><?= __('Departure date', 'dynamic-searchbox'); ?>:</label>
            <div class="input_holder"> 
                <?php
                if($itinerary === "monthly") {
                ?>
                <input type="text" autocomplete="off" name="alert_date" id="datepicker" class="txt-auto" data-required="required" value="<?php echo ucfirst(date_i18n( 'F Y' )); ?>">
                <span class="input_icon icon-calendar-empty"></span>
                <?php
                } else {
                ?>          
                <select id="alert_period" name="alert_period">
                    <option value="WITHIN_2_WEEKS" selected="selected">Within 2 weeks</option>
                    <option value="BETWEEN_2_AND_4_WEEKS">Between 2 and 4 weeks</option>
                    <option value="MORE_THAN_4_WEEKS">More than 4 weeks </option>                 
                </select> 
                <span class="input_icon icon-calendar-empty"></span>
                <?php
                }
                ?>
            </div>
        
        </div>

        <div class="btn_action_wrapper">
            <a class="btn_action btn_wide" id="submit_search"><?= ($button_text) ? $button_text : __('Get offers!', 'dynamic-searchbox'); ?></a>
        </div>

    </form>
    
    <a href="<?= __('http://www.edreams.com/flights/', 'dynamic-searchbox'); ?>" target="_blank" class="btn_external"><?= __('Advanced search', 'dynamic-searchbox'); ?> >></a>        
    
</div>

<div class="sb-home-modal"></div>