const chatbox = document.getElementById('chatbox-toggle');
const menuChat = document.getElementById('menu-chat');
const closeChat = document.getElementById('close-chat');


$(document).ready(function() {
    $(chatbox).click(function() {
        $(menuChat).toggle();
        $(chatbox).hide();
    });
    $(closeChat).click(function() {
        $(menuChat).hide();
        $(chatbox).toggle();
    });
});
