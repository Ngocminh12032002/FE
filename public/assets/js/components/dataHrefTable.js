$(document).ready(function() {
    $('#dsDaoTao').on('click', 'tr[data-href]', function(event) {
        if ($(event.target).closest('td').index() !== $(this).find('td').length - 1) {
            window.location.href = $(this).data('href');
        }
    });
});