const addBagProduct = document.getElementById('add_bag_product');
const productid = document.getElementById('product_id_bag');
const addBag = document.getElementById('add_bag');

$(document).ready(function() {
    $(addBagProduct).click(function() {
        var productId = $(productid).val();
        var userId = $(addBagProduct).attr('value');
        $.ajax({
            type: 'post',
            url: '/add-bag-product',
            data: {
                productId: productId,
                user_id: userId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                addBag.innerHTML = data;
                alert("Product add to bag successfully.");
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
