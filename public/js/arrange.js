const Ram = document.getElementById('ram');
const Cpu = document.getElementById('cpu');
const Drive = document.getElementById('drive');
const ListProduct = document.getElementById('list_product');

$(document).ready(function() {
    $('.funtion').change(function() {
        var ram = $(Ram).val();
        var cpu = $(Cpu).val();
        var drive = $(Drive).val();
        $.ajax({
            type: 'post',
            url: '/find_product',
            data: {
                ram: ram,
                cpu: cpu,
                drive: drive,
                _token:  $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            success: function(data) {
                ListProduct.innerHTML = data;
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
