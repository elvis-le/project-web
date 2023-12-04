const unfavoriteProduct = document.getElementById('un_favorite_product');
const unfavorite = document.getElementById('favorite_product_table');

$(document).ready(function() {
    $(unfavoriteProduct).click(function() {
        var productId = $(unfavoriteProduct).attr('value');
        $.ajax({
            type: 'post',
            url: '/un-favorite-product',
            data: {
                productId: productId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                unfavorite.innerHTML = data;
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
