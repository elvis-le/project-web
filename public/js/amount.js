const amount = document.getElementById('amount');
const price = document.getElementById('price');
const product_price = document.getElementById('product_price');
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(amount).on('keyup', function(){
        const productPrice = parseFloat($(product_price).val());
        const value = parseFloat($(this).val());

        $.ajax({
            type: 'get',
            url: '/amount',
            data: {
                'amount': value,
                'productPrice': productPrice,
            },
            success: function(data){
                $(price).html('<input type="hidden" value="'+ data +'" id="price_total" >'+
                    '<p>' + data + 'VND</p>'); // Append 'VND' to the calculated value
            }
        });
    });
});



