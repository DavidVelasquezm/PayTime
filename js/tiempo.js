     function multiplicar() {
	valor = document.getElementById("costo").value
    
      vhoras = valor*horag
    
      vminutos = (valor*minutog)/60
    
      vsegundos = (valor*segundog)/3200
    
      total = vhoras+vminutos+vsegundos
	ntotal = total.toFixed(2);

      document.valor.total.value=ntotal
    
      console.log(total)
    }

    var hora = "0"
    var minuto = "00"
    var segundo = "0"
    
    var horag = <? echo "\"$SHoras\""; ?>
    
    var minutog = <? echo "\"$SMinutos\""; ?>
    
    var segundog = <? echo "\"$SSegundos\""; ?>
    
    function tiempo(){
    
    
    	horag = parseInt(horag) + parseInt(hora)
    	minutog = parseInt(minutog) + parseInt(minuto)
      if (minutog >59){
      minutog = minutog - 60
      horag++
      }
    
      if (segundo !== 0){
        	segundog = parseInt(segundog) + (parseInt(segundo) - parseInt(1) )
      }
      else{
    	segundog = segundog
      }
      if (segundog > 59){
      segundog = segundog - 60
      minutog++
      }
    	console.log(segundog)
    	document.tablatiempo.ttotal.value=horag + ":" + minutog + ":" + segundog
    	document.cronometro.gratisss.value = "0" + ":" + "00" + ":" + "00"
	document.getElementById('rhora').value = horag
	document.getElementById('rmin').value = minutog
	document.getElementById('rsec').value = segundog
    	hora = "0"
    	minuto = "00"
    	segundo = "0"
    }
    
    
    function cronometro(){
    
      if ((minuto < 10) && (minuto != "00")){
      bajamin = "0" + minuto
      }
      else{
      bajamin = minuto
      }
      bajasec = (segundo < 10) ? segundo = "0" + segundo : segundo
      document.cronometro.gratisss.value = hora + ":" + bajamin + ":" + bajasec
      if (segundo < 59){
      segundo++
      }
      else{
      segundo = "0"
      minuto++
      if (minuto > 59){
      minuto = "00"
      hora++
      }
      }
      window.setTimeout("cronometro()",1000) 
    }
	function godash(){
	document.location.href = 'dashboard.php'
}    