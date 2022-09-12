src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"
	
$(document).ready(function(){
    $('.input-group').click(function(){
        id = $(this).attr('data-id');
        qty = $('#rowname'+id).val();
        var thisClick=$(this);
        $.ajax({
            url:"{{route('sepetGuncelle')}}",
            headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
            method:"GET",
            data:{yemekQty:qty, rowId:id},
            success:function(response){
                thisClick.closest(".cartitem").find('.row-subtotal').text(response.qty+" ₺")
                thisClick.closest(".cartpage").find('.subtotal').text(response.total+" ₺")
                console.log(response.total);
                //alert("Sepete Eklendi")
            }


        });
        
    });
    
}); 
	