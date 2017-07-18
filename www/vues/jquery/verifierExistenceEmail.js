 $(function() {
        $( "#enregistrer" ).click(function(e) {
          $('#verifEmail').text("");
          var param = 'email=' + $.trim($('#email').val());
          $('#verifEmail').load('../ajax/verifEmail.php',param);
          if($('#verifEmail').text()==="Cette adresse existe deja")
          {
                event.preventDefault();
          }
        });  
      });