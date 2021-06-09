$( document ).ready(function() {

    $("._submit"). attr("disabled", true);

    $('#checkbox').change(function()
    {

      if ($(this).is(':checked')) {
        $("._submit"). attr("disabled", false);
        $('.checkbox-yes').removeClass('hide');
        $('.checkbox-no').addClass('hide');
      }else {
        $('.checkbox-no').removeClass('hide');
        $('.checkbox-yes').addClass('hide');
      };
    });

    $('#_form_9_ input[type="text"]').blur(function(){
        $('#errors').removeClass('hide');
        if(!$(this).val()){

            $('.details-no').addClass('hide');
            $('.details-yes').removeClass('hide');
        } else{
            $('.details-no').removeClass('hide');
            $('.details-yes').addClass('hide');
        }
    });
});