const addfavoriteProduct = document.getElementById('add_favorite_product');
const productID = document.getElementById('product_id');
const addfavorite = document.getElementById('favorite_product');

$(document).ready(function() {
    $(addfavoriteProduct).click(function() {
        var productId = $(productID).val();
        var userId = $(addfavoriteProduct).attr('value');
        $.ajax({
            type: 'post',
            url: '/add-favorite-product',
            data: {
                productId: productId,
                user_id: userId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                addfavorite.innerHTML = data;
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
