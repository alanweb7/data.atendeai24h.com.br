<?php

defined('BASEPATH') || exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="settings[cliente_webhook_settings]" class="control-label">
                <?php echo _l('API name'); ?> <span class="text-danger">*</span>
            </label>
            <input type="text" name="settings[cliente_webhook_settings]" class="form-control" required value="<?php echo get_option('cliente_webhook_settings'); ?>">
        </div>
    </div>
</div>