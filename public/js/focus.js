$(document).ready(function() {
    const search = $('#search-product');
    const searchResult = $('#search-result');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    search.on('keyup', function() {
        var value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ route("search") }}',
            data: {'search': value},
            success: function(data) {
                searchResult.find('ul').html(data);
            }
        });
    });

    search.on('focus', function() {
        searchResult.show();
    });

    search.on('blur', function() {
        setTimeout(function() {
            searchResult.hide();
        }, 200);
    });
});
