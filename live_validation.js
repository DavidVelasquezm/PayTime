$(document).ready(function() {

    $('#boton-forma').click(function(e) {
     e.preventDefault();
    //$('.formu').validate();
    
    
    //Ejemplo para validar los campos
    var input01_val = new LiveValidation( "input01", { validMessage: "Correct!", wait: 1000 } );
    input01_val.add( Validate.Presence,{ failureMessage: "Insert Your Name" } );

    var input02_val = new LiveValidation( "input02", { validMessage: "Correct!", wait: 1000} );
    input02_val.add( Validate.Presence,{ failureMessage: "Insert Your LastName" } );
    
    var input07_Val = new LiveValidation( "input07", { validMessage: "Correct!", wait: 1000 } );
    input07_Val.add( Validate.Presence,{ failureMessage: "Insert Your E-mail" } );
    input07_Val.add( Validate.Email,{ failureMessage: "Must Be a Valid E-mail" } );

    var select01_val = new LiveValidation( "select01", { validMessage: "Correct!", wait: 1000} );
    select01_val.add( Validate.Presence,{ failureMessage: "Choose A Genre" } );

});
    
    $('#regbtn').click(function(e) {

          //$('.formu').validate();
          var namer_val = new LiveValidation( "name", { validMessage: "Correcto!", wait: 1000 } );
          input01_val.add( Validate.Presence,{ failureMessage: "inserte su nombre" } );

          var emailr_Val = new LiveValidation( "email", { validMessage: "Correcto!", wait: 1000 } );
          emailr_Val.add( Validate.Presence,{ failureMessage: "inserte su E-mail" } );
          emailr_Val.add( Validate.Email,{ failureMessage: "deve ser un  E-mail valido " } );

          var passwordr_val = new LiveValidation( "password", { validMessage: "Correcto!", wait: 1000 } );
          input01_val.add( Validate.Presence,{ failureMessage: "Inserte su contraseña" } );

          var f19r_val = new LiveValidation( "f19", { validMessage: "Correcto!", wait: 1000 } );
          input01_val.add( Validate.Presence,{ failureMessage: "Inserte su contraseña" } );





      });