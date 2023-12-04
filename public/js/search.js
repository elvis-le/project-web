const search = document.getElementById('search-product');
const searchResult = document.getElementById('search-result');
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(search).on('keyup',function(){
        const value=$(this).val();
        $.ajax({
            type : 'get',
            url : '/search',
            data:{'search':value},
            success:function(data){
                searchResult.innerHTML = data;
            }
        });
    })
});


