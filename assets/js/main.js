$(function(){


    $("#b1").click(function() {

        $('#col-1').css("display","block");
        $('#col-2').css("display","block");
        $('#col-3').css("display","none");
        $('#col-4').css("display","none");
        $('#col-5').css("display","none");
        $('#col-6').css("display","none");
        $('#col-7').css("display","none");
    });


    $("#b2").click(function() {

        $('#col-1').css("display","none");
        $('#col-2').css("display","none");
        $('#col-3').css("display","block");
        $('#col-4').css("display","block");
        $('#col-5').css("display","none");
        $('#col-6').css("display","none");
        $('#col-7').css("display","none");

    });

    $("#b3").click(function() {

        $('#col-1').css("display","none");
        $('#col-2').css("display","none");
        $('#col-3').css("display","none");
        $('#col-4').css("display","none");
        $('#col-5').css("display","block");
        $('#col-7').css("display","block");



        if($("#relocate_status").val() == 1){
         $('#col-6').css("display","block");
    }  
        
        if($("#relocate_status").val() == 0){
         $('#col-6').css("display","none");
    }  
    });

    $("#relocate_status").change(function(){
        
        if($("#relocate_status").val() == 1){
         $('#col-6').css("display","block");
    }  
        
        if($("#relocate_status").val() == 0){
         $('#col-6').css("display","none");
    }  
        
    });

$("#printer").click(function(){
  var divToPrint=document.getElementById('divtoprint');
  var newWin=window.open('','Print-Window');
  newWin.document.open();
  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
  newWin.document.close();
  setTimeout(function(){newWin.close();},10);

});


/*    $("#submit").on('click', function(e){
        e.preventDefault();
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            "Confirm": function(e) {
                $(this).dialog('close');
                $('#formDelete').submit();


            },
            "Cancel": function() {
                $(this).dialog('close');
            }
        }
    });*/
    $('#modal-submit').click(function() {

      //  $(location).attr('href', '../?modal_insert');

    });




});
