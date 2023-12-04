const sentchat = document.getElementById('sent-new-chat');
const textchat = document.getElementById('text');
const showchat = document.getElementById('chat-content');

$(document).ready(function() {
    $(sentchat).click(function() {
        var text = $(textchat).val();
        var userId = $(this).attr('value');

        $.ajax({
            type: 'post',
            url: '/resentChat',
            data: {
                text: text,
                userId: userId,
                _token:  $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                showchat.innerHTML = data;
                $(textchat).val('');
                showchat.scrollTop = showchat.scrollHeight;
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
