$(function() {
     $('.partenaire').hide();
      $('.password').hide();
      $('.pays').hide();
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
    
     $( "#role_partenaire" ).change(function() {
        if($('#role_partenaire').val()==1 )
        {
           $('.partenaire').show();
        }
        else
        {
              $('.partenaire').hide();
        }
    });
    
      $( "#nom_partenaire" ).change(function() {
        if( $('#nom_partenaire').val()==0 )
        {
           $('.partenaire_m').show();
        }
         else 
        {
           $('.partenaire_m').hide();
        }
       
    });
    
     $( "#pays" ).change(function() {
        if($('#pays').val()==0)
        {
           $('.pays').show();
        }
         else 
        {
             $('.pays').hide();
        }
      
    });
    
    
    $( "#inscription" ).submit(function(e) {
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


