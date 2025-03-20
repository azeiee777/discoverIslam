// Bootstrap and jQuery are already included via CDN in the layout

$(document).ready(function() {
    // Add any additional JavaScript for your admin panel
    console.log("Admin Panel Loaded");

    // Example: Toggle sidebar visibility
    $('#sidebarToggle').click(function() {
        $('#sidebar').toggleClass('active');
    });
});
