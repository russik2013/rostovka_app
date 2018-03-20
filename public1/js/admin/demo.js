$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$('.form-search button').on('click', function (e) {
    e.preventDefault();
    window.location = $('meta[name="root-site"]').attr('content') + '/admin_index/' + $('.search-query').val();
});