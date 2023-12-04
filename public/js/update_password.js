const saveBtn = document.getElementById('saveBtn');
const current_password = document.getElementById('current_password');
const password = document.getElementById('new_password');
const password_confirmation = document.getElementById('password_confirmation');
const myForm = document.getElementById('myForm');

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(saveBtn).click(function(event) {
        event.preventDefault();
        var current_password_value = $(current_password).val();
        var password_value = $().val();
        var password_confirmation_value = $(password_confirmation).val();
        $.ajax({
            type: 'put',
            url: "/update-password", // Update the URL here
            data: {
                current_password: current_password_value,
                password: password_value,
                password_confirmation: password_confirmation_value,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                myForm.innerHTML = data;
                $(current_password).val('');
                $(password).val('');
                $(password_confirmation).val('');
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});

