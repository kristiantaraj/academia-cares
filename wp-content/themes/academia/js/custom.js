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

        if(!$(this).val()){
            $('.details-no').addClass('hide');
            $('.details-yes').removeClass('hide');
            $('#errors').addClass('hide');

        } else{
            $('#errors').addClass('hide');
            $('.details-no').removeClass('hide');
            $('.details-yes').addClass('hide');

        }
    });
});