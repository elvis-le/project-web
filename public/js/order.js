const idProduct = document.getElementById('product_id');
const idUser = document.getElementById('user_id');
const Address = document.getElementById('address');
const Amount = document.getElementById('amount');
const Payment = document.getElementById('payment');
const Total = document.getElementById('price_total');

$(document).ready(function() {
    $(idUser).click(function() {
        var productId = $(idProduct).val();
        var address = $(Address).val();
        var amount = $(Amount).val();
        var payment = $(Payment).val();
        var total = $(Total).val();
        var userId = $(idUser).val();

        var confirmation = confirm('Are you sure you want to make this purchase?');
        if (confirmation) {
            $.ajax({
                type: 'post',
                url: '/order',
                data: {
                    address: address,
                    amount: amount,
                    payment: payment,
                    total: total,
                    productId: productId,
                    user_id: userId,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'html',
                success: function(data) {
                    alert("Buy product successfully.");
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        } else {
            // Handle cancel action if needed
        }
    });
});
