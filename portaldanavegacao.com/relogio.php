<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script type="text/javascript">
                  
//relogio


function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()
// add a zero in front of numbers<10
m=checkTime(m)
s=checkTime(s)
document.getElementById('txt').innerHTML=h+":"+m+":"+s
t=setTimeout('startTime()',500)
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}
</script>
</head>
          
  
<style>
#relogio {
	width:150px;
	height:100px;
	background-image:url(icar-relogiov2.png);
	
}
#relogio_conteudo {
	padding-top:68px;
	text-align:center;
	font-weight: bold;
	color: #2C7500;
	font-family: Arial, Helvetica, sans-serif;
}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body onload="startTime()">
<div id="relogio" style="cursor:pointer" onclick="window.parent.location='http://postoiccar.no-ip.org/Site/'">
  <div id="relogio_conteudo"><div id="txt"></div></div></div>
</body>
</html>