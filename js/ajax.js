$(document).ready(function() {
    /* Login de Usuarios */
    $("#btsub").click(function(){
        setTimeout(function(){
            $.post("cores/validacion_gen.php", { da1: $("#username").val(), da2: $("#password").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//document.location.href = document.location.href;
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#login_div").html("<span style='color:#05A62D;'>Bienvenido de nuevo a Paytime<br>Ahora puedes seguir cobrando tu tiempo.</span>");
                $("#login_div").slideDown();
		document.location.href = 'dashboard.php';
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

	// Login Al presionar Enter en password.
    $("#password").bind('keyup', function(e){
if (e.keyCode == 13){
        setTimeout(function(){
            $.post("cores/validacion_gen.php", { da1: $("#username").val(), da2: $("#password").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//document.location.href = document.location.href;
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#login_div").html("<span style='color:#05A62D;'>Bienvenido de nuevo a Paytime<br>Ahora puedes seguir cobrando tu tiempo.</span>");
                $("#login_div").slideDown();
		document.location.href = 'dashboard.php';
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
}
    });

	// Login Al presionar Enter en Username.
    $("#username").bind('keyup', function(e){
if (e.keyCode == 13){
        setTimeout(function(){
            $.post("cores/validacion_gen.php", { da1: $("#username").val(), da2: $("#password").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//document.location.href = document.location.href;
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#login_div").html("<span style='color:#05A62D;'>Bienvenido de nuevo a Paytime<br>Ahora puedes seguir cobrando tu tiempo.</span>");
                $("#login_div").slideDown();
		document.location.href = 'dashboard.php';
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
}
    });

    /* Log Out */
    $("#btloff").click(function(){
        $("#login_div").slideUp();
        setTimeout(function(){
            $.post("cores/core_out.php", { da1: $("#username").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#login_div").html(data);
               $("#login_div").slideDown();
		setTimeout(function(){
		$("#login_div").slideUp();
		$("#login_div").load('f_log.php');
		$("#login_div").slideDown();
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#login_div").html("<span style='color:#05A62D;'>Deslogeado Correctamente.</span>");
		document.location.href = 'index.php';
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });


    /* Reset PW */
    $("#btreset").click(function(){
        $("#resultado2").slideUp();
        setTimeout(function(){
            $.post("cores/forgot_pw.php", { da1: $("#username22").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado2").html(data);
               $("#resultado2").slideDown();
		setTimeout(function(){
		$("#resultado2").slideUp();
		}, 3000)
               clearQueue();
            }
            else
            {
		 $("#reset_div").slideUp();
                $("#reset_div").html("<span style='color:#05A62D;'>Password reseteada correctamente. Te enviamos un e-mail con tus datos nuevos.</span>");
                $("#reset_div").slideDown();
		document.location.href = 'index.php';
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });



    /* Guardar Valores... */
    $("#save").click(function(){
        setTimeout(function(){
            $.post("cores/guardar.php", { da1: $("#rhora").val(), da2: $("#rmin").val(), da3: $("#rsec").val(), da4: $("#id").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
		$('#myModal').modal('show')
               clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

    /* Guardar Proyecto... */
    $("#crearp").click(function(){
        setTimeout(function(){
            $.post("cores/crearp.php", { da1: $("#nombrep").val()},
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
		$('#myModal').modal('show')
               clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

    /* Editar Proyecto... */
    $("#editp").click(function(){
        setTimeout(function(){
            $.post("cores/editp.php", { da1: $("#nombrepr").val(), da2: $("#horap").val(), da3: $("#minp").val(), da4: $("#secp").val(), da5: $("#idp").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
        $('#myModal').modal('show')
		
               clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

    /* Registro de usuarios */
    $("#regbtn").click(function(){
        setTimeout(function(){
            $.post("cores/reg_gen.php", { da1: $("#email").val(), da2: $("#password").val(), da3: $("#nombre").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//$("#login_div").load('register.php');
		//$("#login_div").slideDown();
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#formreg").html("<span style='color:#05A62D;'>Se a enviado un email a tu casilla de correo<br>Sigue los pasos para activar tu cuenta.</span>");
                $("#formreg").slideDown();
		setTimeout(function(){
		document.location.href= 'index.php'
		}, 3000)
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

	// Envia form al Presionar Enter en email
    $("#email").bind('keyup', function(e){
if (e.keyCode == 13){
        setTimeout(function(){
            $.post("cores/reg_gen.php", { da1: $("#email").val(), da2: $("#password").val(), da3: $("#nombre").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//$("#login_div").load('register.php');
		//$("#login_div").slideDown();
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#formreg").html("<span style='color:#05A62D;'>Se a enviado un email a tu casilla de correo<br>Sigue los pasos para activar tu cuenta.</span>");
                $("#formreg").slideDown();
		setTimeout(function(){
		document.location.href= 'index.php'
		}, 3000)
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
	}
    });

	// Envia Form al Presionar Enter en Password
    $("#password").bind('keyup', function(e){
if (e.keyCode == 13){
        setTimeout(function(){
            $.post("cores/reg_gen.php", { da1: $("#email").val(), da2: $("#password").val(), da3: $("#nombre").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//$("#login_div").load('register.php');
		//$("#login_div").slideDown();
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#formreg").html("<span style='color:#05A62D;'>Se a enviado un email a tu casilla de correo<br>Sigue los pasos para activar tu cuenta.</span>");
                $("#formreg").slideDown();
		setTimeout(function(){
		document.location.href= 'index.php'
		}, 3000)
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
	}
    });

	
	// Envia form al Presionar enter en Nombre
    $("#nombre").bind('keyup', function(e){
if (e.keyCode == 13){
        setTimeout(function(){
            $.post("cores/reg_gen.php", { da1: $("#email").val(), da2: $("#password").val(), da3: $("#nombre").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
               $("#resultado").html(data);
               $("#resultado").slideDown();
		setTimeout(function(){
		$("#resultado").slideUp();
		//$("#login_div").load('register.php');
		//$("#login_div").slideDown();
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#formreg").html("<span style='color:#05A62D;'>Se a enviado un email a tu casilla de correo<br>Sigue los pasos para activar tu cuenta.</span>");
                $("#formreg").slideDown();
		setTimeout(function(){
		document.location.href= 'index.php'
		}, 3000)
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
	}
    });

}); // Fin DR