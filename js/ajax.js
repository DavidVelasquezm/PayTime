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
		}, 3000)
               clearQueue();
            }
            else
            {
                $("#login_div").html("<span style='color:#05A62D;'>Bienvenido de nuevo a Paytime<br>Ahora puedes seguir cobrando tu tiempo.</span>");
                $("#login_div").slideDown();
		$("#crs").slideUp();
		setTimeout(function(){
		$("#login_div").slideUp();
		//$("#login_div").load('login.php');
		$("#login_div").slideDown();
		}, 3000)
                clearQueue();
            }
            //-------------------------------------
            });
        }, 500)
    });

}); // Fin DR