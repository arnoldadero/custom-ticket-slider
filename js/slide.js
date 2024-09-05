function updateTicketPriceDisplay(value, post_id) {
    // Update the displayed price next to the slider
    document.getElementById('ticket_price_display_' + post_id).textContent = '$' + value;

    // Update the hidden price input field (for form submission)
    document.getElementById('ticket_price_hidden_' + post_id).value = value;
}
