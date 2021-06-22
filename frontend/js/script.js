$.ajaxSetup({
    cache: false
});
$( document ).ready(function() { 
   

    $('.accesstypeval').change(function() {
        var accesstype = $(this).val();
        //alert(accesstype);
        if(accesstype == '10'){
            $(this).parents(".po_relative").find('.pricesell').hide();
            $(this).parents(".po_relative").find('.weight_b').show();
        }else{
            $(this).parents(".po_relative").find('.pricesell').show();
            $(this).parents(".po_relative").find('.weight_b').hide();
        }
    });

    $('input.pricecost').keyup(function() {  

        var total = 0;
        $('input.pricecost').each(function(){
            total += parseInt(this.value);
        });

        $('#total').val(total);
    });

    $('.savebreaking').click(function() {  
        var costtotal = $('#total').val();
        if(costtotal > 500000){
            $('#notbreaking').modal('show')
        }else{
            $('#savesuccess').modal('show')
        }
    });

    $(".con_tranferticket").click(function(){
        if ($('.filled-in:checked').length == $('.filled-in').length) {
            $('#savesuccess').modal('show')
        }else{
            $('#incompletetranfer').modal('show')
        }
    });

    $("input[name='bill_type']").change(function(){
        if ($('#bill_credit').is(':checked')) {
            $('.bill_credit').show()
        }else{
            $('.bill_credit').hide()
        }
    });

    $(".selectdata .btn").click(function(){
        var btnid = $(this).attr('id');
        $(this).parents('.dataframe_body').hide();
        $("button[title="+btnid+"]").parents('.dataframe_body').show();
        $("button[title="+btnid+"]").parents('.dataframe_body').addClass("show");

        var datalength = $( ".dataselect .dataframe_body.show" ).length

        if(datalength == '0'){
            $(".dataframe_none").show();  
        }else{
            $(".dataframe_none").hide(); 
        }

        var total = 0;
        $('.dataframe_body.show input').each(function(){
            total += parseInt(this.value);
        });
        $('.dataframe_search .w_total').text(total);
    });

    $(".dataselect .btn").click(function(){
        var btnid = $(this).attr('title');
        $(this).parents('.dataframe_body').hide();
        $(this).parents('.dataframe_body').removeClass("show");
        $("button[id="+btnid+"]").parents('.dataframe_body').show();

        var datalength = $( ".dataselect .dataframe_body.show" ).length

        if(datalength == 0){
            $(".dataframe_none").show();  
        }else{
            $(".dataframe_none").hide();  
        }

        var total = 0;
        $('.dataframe_body.show input').each(function(){
            total += parseInt(this.value);
        });
        $('.dataframe_search .w_total').text(total);
    });

    $('.selectbatch').click(function() {
        var selectbatch  = $('.selectbatch:checked').length;
        $(".floatbox .btn > b").text(selectbatch);
        
        if(selectbatch != '0'){
            $(".floatbox").addClass('showbox');
        }else{
            $(".floatbox").removeClass('showbox');
        }
    });

   
});




