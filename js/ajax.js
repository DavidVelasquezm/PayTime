$(document).ready(function() {
    /* Registro de usuarios */
    $("#btsub").click(function(){
        $("#login_div").slideUp();
        setTimeout(function(){
            $.post("cores/validacion_gen.php", { da1: $("#username").val(), da2: $("#password").val() },
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
		document.location.href = document.location.href;
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

}); // Fin DR