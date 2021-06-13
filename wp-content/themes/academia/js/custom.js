$( document ).ready(function() {
    



    $('.submit-hide').click(function() {

        if ($('#checkbox').is(':checked')) {
            // $("._submit"). attr("disabled", false);
            $('.checkbox-error').addClass('hide');
          }else {
            // $("._submit"). attr("disabled", true);
            $('.checkbox-error').removeClass('hide');
          }

          $('#checkbox').change(function(){
            if ($('#checkbox').is(':checked')) {
                // $("._submit"). attr("disabled", false);
                $('.checkbox-yes').removeClass('hide');
                $('.checkbox-no').addClass('hide');
              }else {
                // $("._submit"). attr("disabled", true);
                $('.checkbox-no').removeClass('hide');
                $('.checkbox-yes').addClass('hide');
              };

          });


          

            if((!$('.email').val()) && (!$('.phone').val()) ){
                $('.info-error').removeClass('hide');
                $('.details-no').addClass('hide');
                $('.details-yes').removeClass('hide');


            }else{
                $('.info-error').addClass('hide');
                $('.details-no').removeClass('hide');
                $('.details-yes').addClass('hide');

            }

            if(($('#checkbox-error2').hasClass('hide')) && ($('#info-error2').hasClass('hide'))) {
                $('#myInput').click();
                $('#button').remove();
                $('.submit-hide').css('display', 'none');
                $('.submit-show').css('display', 'block');
                $('.upload').addClass('hide');
                $('.upload2').removeClass('hide');
            }


        
 
     });


    // $("#myInput").change(function(){
    //     $('.correct-yes').removeClass('hide');
    //     $("._submit"). attr("disabled", false);
    //     $('.correct-no').addClass('hide');
        
    // });


    // $('#checkbox').change(function()
    // {

  

    // $('#_form_9_ input[type="text"]').blur(function(){

    //     if(!$(this).val()){
    //         $('.details-no').addClass('hide');
    //         $('.details-yes').removeClass('hide');
    //         $("._submit"). attr("disabled", false);


});