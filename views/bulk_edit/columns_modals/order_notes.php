<div class="wobef-modal" id="wobef-modal-order-notes">
    <div class="wobef-modal-container">
        <div class="wobef-modal-box wobef-modal-box-sm">
            <div class="wobef-modal-content">
                <div class="wobef-modal-title">
                    <h2><?php esc_html_e('Order', WOBEF_NAME); ?> <span id="wobef-modal-order-notes-item-title" class="wobef-modal-item-title"></span></h2>
                    <button type="button" class="wobef-modal-close" data-toggle="modal-close">
                        <i class="lni lni-close"></i>
                    </button>
                </div>
                <div class="wobef-modal-body">
                    <div class="wobef-wrap">
                        <div class="wobef-col-7">
                            <h3><?php esc_html_e('Notes', WOBEF_NAME); ?></h3>
                            <div id="wobef-modal-order-notes-items"></div>
                            <div class="wobef-modal-order-notes-add-note">
                                <label><?php esc_html_e('New Note', WOBEF_NAME); ?></label>
                                <textarea id="wobef-modal-order-notes-content" placeholder="<?php esc_html_e('Note', WOBEF_NAME) . ' ...'; ?>"></textarea>
                                <select id="wobef-modal-order-notes-type">
                                    <option value="private"><?php esc_html_e('Private note', WOBEF_NAME); ?></option>
                                    <option value="customer"><?php esc_html_e('Note to customer', WOBEF_NAME); ?></option>
                                </select>
                                <button type="button" class="wobef-button wobef-button-blue" id="wobef-modal-order-notes-add" data-order-id=""><?php esc_html_e('Add Note', WOBEF_NAME); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wobef-modal-footer">
                    <button type="button" class="wobef-button wobef-button-blue" data-toggle="modal-close">
                        <?php esc_html_e('Close', WOBEF_NAME); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>