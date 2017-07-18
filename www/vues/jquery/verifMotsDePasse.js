$(function() {
      $('.password').hide();
     
      $( "#password,#cpassword" ).keyup(function(e) {
        if($('#password').val()!=$('#cpassword').val())
        {
           $('.password').show();
        }
        else
        {
            $('.password').hide();
        }
        
    });
 
    $( "#modifier" ).submit(function(e) {
        if( ($('#password').val()!=$('#cpassword').val()) || ($('#role_partenaire').val()==1 && $('#nom_partenaire').val()==0) || $('#pays').val()==0)
        {
            return false;
        }
        else
        {
               $('.password').hide();
        }
    });
  
});



