$(function() {
    $('.recruteur').hide();
    $( "#roles" ).change(function() {
          if($('#roles').val()!=1)
        {
            $('.etudiant').hide();
            $('.recruteur').show();
        }
        else
        {
            $('.etudiant').show();
            
        }
    });
  
});