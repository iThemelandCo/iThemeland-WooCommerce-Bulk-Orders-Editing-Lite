<div class="wobef-modal" id="wobef-modal-item-duplicate">
    <div class="wobef-modal-container">
        <div class="wobef-modal-box wobef-modal-box-sm">
            <div class="wobef-modal-content">
                <div class="wobef-modal-title">
                    <h2><?php esc_html_e('Duplicate', WOBEF_NAME); ?></h2>
                    <button type="button" class="wobef-modal-close" data-toggle="modal-close">
                        <i class="lni lni-close"></i>
                    </button>
                </div>
                <div class="wobef-modal-body">
                    <div class="wobef-wrap">
                        <div class="wobef-form-group">
                            <label class="wobef-label-big" for="wobef-bulk-edit-duplicate-number">
                                <?php esc_html_e('Enter how many item(s) to Duplicate!', WOBEF_NAME); ?>
                            </label>
                            <input type="number" class="wobef-input-numeric-sm" id="wobef-bulk-edit-duplicate-number" value="1" placeholder="<?php esc_html_e('Number ...', WOBEF_NAME); ?>">
                        </div>
                    </div>
                </div>
                <div class="wobef-modal-footer">
                    <button type="button" class="wobef-button wobef-button-blue" id="wobef-bulk-edit-duplicate-start">
                        <?php esc_html_e('Start Duplicate', WOBEF_NAME); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>