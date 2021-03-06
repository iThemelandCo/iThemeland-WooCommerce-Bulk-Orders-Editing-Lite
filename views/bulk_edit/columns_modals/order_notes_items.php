<?php if (!empty($order_notes) && is_array($order_notes)) : ?>
    <?php foreach ($order_notes as $order_note) : ?>
        <?php if (!empty($order_note->id)) : ?>
            <div class="wobef-order-note-item">
                <div class="note-content <?php echo ($order_note->customer_note) ? 'customer-note' : ''; ?> <?php echo ($order_note->added_by == 'system') ? 'system-note' : ''; ?>">
                    <?php echo $order_note->content; ?>
                </div>
                <div class="note-info">
                    <abbr><?php echo $order_note->date_created->date('M d,Y at H:i'); ?> by <?php echo $order_note->added_by; ?></abbr>
                    <button type="button" class="delete-note" data-note-id="<?php echo intval($order_note->id); ?>"><?php esc_html_e('delete note', WOBEF_NAME); ?></button>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>