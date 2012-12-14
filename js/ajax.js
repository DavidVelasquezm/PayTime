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
		document.location.href = document.location.href;
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
		document.location.href = document.location.href;
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
		document.location.href = document.location.href;
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
                $("#login_div").slideDown();
		$("#crs").slideUp();
		setTimeout(function(){
		$("#login_div").slideUp();
		$("#login_div").slideDown();
		}, 3000)
		document.location.href = document.location.href;
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

    /* Guardar Valores... */
    $("#save").click(function(){
        setTimeout(function(){
            $.post("cores/guardar.php", { da1: $("#rhora").val(), da2: $("#rmin").val(), da3: $("#rsec").val() },
            function(data){
            //-------*******************************
            if(data!=='ok')
            {
		alert("Guardado con exito.");
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