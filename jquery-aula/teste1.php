<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src='js/jquery.min.js'></script>
<title>Teste</title>
<script type="text/javascript">
$(document).ready(function(){
  $("#link").click(function(){
	  
    $("#demo").hide(200);
	
  });
});
</script>
</head>

<body>
<h2>Isto é um titulo</h2>
<p id="demo">Isto é um parágrafo 1.</p>
<p>Isto é mais um parágrafo 2.</p>
<a href="#" id="link">Clica-me</a>
</body>
</html>