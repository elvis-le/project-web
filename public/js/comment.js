const sentcomment = document.getElementById('sent_comment');
const comments = document.getElementById('comment');
const rating = document.getElementById('rating');
const productiD = document.getElementById('product_id_comment');
const showcomment = document.getElementById('comment_of_user');

$(document).ready(function() {
    $(sentcomment).click(function() {
        var comment = comments.value;
        var rate = $('input[name="rate"]:checked', rating).val();
        var productId = productiD.value;
        var userId = $(this).data('user-id');
        $.ajax({
            type: 'post',
            url: '/comment',
            data: {
                comment: comment,
                productId: productId,
                rate: rate,
                userId: userId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                showcomment.innerHTML = data;
                comments.value = '';
                alert("Comment successfully.");
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
