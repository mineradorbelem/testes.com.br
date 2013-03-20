// JavaScript Document
var ismobile = (/iphone|ipod|android|blackberry|opera mini|opera mobi|skyfire|maemo|windows phone|palm|iemobile|symbian|symbianos|fennec/i.test(navigator.userAgent.toLowerCase()));

		var url = window.location.pathname;
		var retorno = url.split("-");
		var idnot = retorno[1];
			//alert('ID: '+ retorno[1]);

 if (ismobile == true) {	
			  if (confirm("Você está usando um celular. Deseja ler esta notícia em uma versão compatível com seu dispositivo?")) {
				document.location.href='http://mobi.diarioonline.com.br/not.php?idnot='+ idnot;
			  }else{
				//document.location.href='http://www.diarioonline.com.br/noticia-'+idnot+'-.html';  
			  }
	} else {
		//COMPUTADOR
	}