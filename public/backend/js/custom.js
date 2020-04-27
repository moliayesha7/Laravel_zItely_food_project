(function($){
    $(document).ready(function(){
        $(document).on('click','a#logout_user',function(e){
            e.preventDefault();

          $('form#logout_form').submit();

         
        });

        $(document).on('click','button#delete-btn',function(e){
            

            let sure=confirm('Are you sure?');

            if( sure== true){
                return true;
            }else{
                return false;
            }
          });
    });
})(jQuery)