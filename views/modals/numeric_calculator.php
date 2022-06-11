<div class="wobef-modal" id="wobef-modal-numeric-calculator">
    <div class="wobef-modal-container">
        <div class="wobef-modal-box wobef-modal-box-sm">
            <div class="wobef-modal-content">
                <div class="wobef-modal-title">
                    <h2><?php esc_html_e('Calculator', WOBEF_NAME); ?> - <span id="wobef-modal-numeric-calculator-item-title" class="wobef-modal-product-title"></span></h2>
                    <button type="button" class="wobef-modal-close" data-toggle="modal-close">
                        <i class="lni lni-close"></i>
                    </button>
                </div>
                <div class="wobef-modal-body">
                    <div class="wobef-wrap">
                        <select id="wobef-numeric-calculator-operator" title="<?php esc_html_e('Select Operator', WOBEF_NAME); ?>">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="replace"><?php esc_html_e('replace', WOBEF_NAME); ?></option>
                        </select>
                        <input type="number" placeholder="<?php esc_html_e('Enter Value ...', WOBEF_NAME); ?>" id="wobef-numeric-calculator-value" title="<?php esc_html_e('Value', WOBEF_NAME); ?>">
                    </div>
                </div>
                <div class="wobef-modal-footer">
                    <button type="button" data-item-id="" data-field="" data-field-type="" data-toggle="modal-close" class="wobef-button wobef-button-blue wobef-edit-action-numeric-calculator">
                        <?php esc_html_e('Apply Changes', WOBEF_NAME); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>