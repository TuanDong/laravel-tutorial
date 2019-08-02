function callAjaxController() {

    this.callGetData = function(event,id) {
        event.preventdefault;

        $.ajax({
            type:'GET',
            url:'./get-product-id/'+id,
            data:{id:id},
            async: false,
            success: function(data){
                console.log(data);
                $('.js-modal1').addClass('show-modal1');
            }
        });
    }
}
