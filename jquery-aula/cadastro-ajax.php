<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src='js/jquery.min.js'></script>
<title>Teste</title>
<script type="text/javascript">
$(document).ready(function(){
 

	  $("#button").click(function(){  			//1. E O ID DO BOTAO ONDE SE CLICA PARA POSTAR O FORMULARIO
			var form = $("#form1").serialize(); //2. O FORM1 É O PARAMENTO QUE IDENTIFICA DE QUAL FORMULARIO PUXAR AS VARIAVEIS, E SAO ARMAZENADAS em var 'form'
			executaform(form); 					//3. FOI CRIADO UMA FUNCAO executaform() QUE CONTEM O JQUERY QUE VAI POSTAR AS VARIAVEIS E TRAZER OS RESULTADOS
			$(".campo").val('');				//4. LIMPA TODOS OS CAMPOS DO FORMULARIO QUE TIVEREM A CLASSE='campo' 
			return false; 						//5. NECESSÁRIO PARA A PÁGINA NÃO DAR RELOAD
	  
	 });
	 	
	 $("#nomex").focus(function(){  			
			$("#nomex").val('');
	 });
	  $("#nomex").blur(function(){  			
			$("#nomex").val('Digite aqui');
	 });
	  
	  
	  
	  function executaform(varform) {		//1. DURANTE A EXECUCAO DO EXECUTAFORM OS PARAMENTOS DO FORMULARIO SAO RECEBIDOS

			 $("#button").val('aguarde...');	//2. ALTERA O TEXTO DO BOTAO APOS O CLIQUE PARA 'aguarde...'
			 $("#button").attr("disabled","disabled");//2.1 ADICIONA UM ATRIBUTO AO BOTAO CHAMADO 'disabled='disabled'
				
			
			 $.ajax({
			   url: "cadastro-ajax-result.php", //3. POSTA AS VARIAVEIS PARA A PÁGINA DETERMINADA 
			   type: "POST",					//4. O AJAX SOLICITA O TIPO DE METODO QUE VOCE DESEJA ENVIAR AS VARIAVEIS
			   data:varform,					//5. data:varform SAO TODAS AS VARIAVEIS RECEBIDAS DO FORMUARIO EM UM ARRAY
			  success: function(result) {		//6.  success: É O PARAMENTO APOS O PHP TER SIDO EXECUTADO TRAS OS VALORES de cadastro-ajax-result.php ATRAVEZ DO PARAMENTRO 'result'
				  
						$("#resultado").html(result); //7. NOME DA DIV QUE MOSTRARÁ O RESULTADO
						
						
							 $("#button").val('ok'); //8. ALTERA O NOME DO BOTAO NOVAMENTE.
							  $("#button").attr("disabled","");
				  	   }   
	
			   });
		
			
		
	  };

	  
	  
	  
}); 
  	
  

</script>
</head>

<body>
<h2>Cadastro em Ajax</h2>
<p id="demo">&nbsp;</p>
<form action="#" name="form1" id="form1"><table width="276" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="51">Nome: </td>
    <td width="149"><input name="nomex" type="text" class="campo" id="nomex" value="Digite Aqui!" /></td>
  </tr>
  <tr>
    <td>E-mail: </td>
    <td><input type="text" name="emailx" id="emailx" class="campo" />
      <input type="submit" name="button" id="button" value="ok"   /></td>
  </tr>
</table></form>
<br />
<div id="resultado">Resultado da operação: </div>
</body>
</html>