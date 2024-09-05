<?php
// Hook to replace the ticket price display with a slider
add_action('mep_ticket_type_list_row_start', 'custom_replace_ticket_price_with_slider', 10, 2);

function custom_replace_ticket_price_with_slider($field, $post_id) {
    // Output the slider instead of the fixed price
    ?>
    <td class="ticket-price">
        <label for="ticket_price_slider_<?php echo esc_attr($post_id); ?>">
            <?php echo __('Donation Amount:', 'mage-eventpress'); ?>
        </label>
        <input type="range" id="ticket_price_slider_<?php echo esc_attr($post_id); ?>" name="ticket_price[]" 
               min="50" max="500" step="5" value="50" 
               oninput="updateTicketPriceDisplay(this.value, <?php echo esc_attr($post_id); ?>)">
        <span id="ticket_price_display_<?php echo esc_attr($post_id); ?>" class="selected-price">$50</span>

        <!-- Hidden input for form submission -->
        <input type="hidden" id="ticket_price_hidden_<?php echo esc_attr($post_id); ?>" 
               name="option_price[]" value="50">
    </td>
    <?php
}

// Enqueue the JavaScript file for the slider
add_action('wp_enqueue_scripts', 'custom_enqueue_slider_script');

function custom_enqueue_slider_script() {
    wp_enqueue_script('custom-ticket-slider', plugin_dir_url(__FILE__) . '../js/slider.js', array('jquery'), '1.0', true);
}