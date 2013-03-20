<?
ini_set("display_errors", 0 );
error_reporting(0); 

include("instagram/Instagram.php");

$instagram = new Instagram();

$valor = $instagram->getUserRecent("308571444");

$var = json_decode($valor,1);

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="http://www.tvrba.com.br/js/jquery.js"></script>
<script type= "text/javascript">
/*<![CDATA[*/
$(function(){
	//Get our elements for faster access and set overlay width
	var div = $('div.sc_menu'),
		ul = $('ul.sc_menu'),
		ulPadding = 15;
	
	//Get menu width
	var divWidth = div.width();

	//Remove scrollbars	
	div.css({overflow: 'hidden'});
	
	//Find last image container
	var lastLi = ul.find('li:last-child');
	
	//When user move mouse over menu
	div.mousemove(function(e){
		//As images are loaded ul width increases,
		//so we recalculate it each time
		var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;	
		var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
		div.scrollLeft(left);
	});
});
/*]]>*/
</script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<style type="text/css">
<!--
body {margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; }
#botao_pro1 {float: left; height: 102px; width: 25px; margin-top: 10px; }
#botao1 {height: 86px; width: 17px; margin-top: 5px; margin-left: 10px;}
#botao_pro2 {float: left; height: 102px; width: 17px; margin-top: 10px; margin-left: 10px;}
#botao2 { height: 86px; width: 17px; margin-top: 5px; margin-left: 0px; }
div.sc_menu {/* Set it so we could calculate the offsetLeft */position: relative; height: 145px; width: 575px; overflow: auto; margin-top:-1px; margin-left: 10px; float:left;}
#fundo_programas {height: 170px; width: 651px; /*background-image: url(http://www.tvrba.com.br/image/fundo_programas_verde.gif);*//* background-color:#d2d8aa;*/ background-image: url(http://www.tvrba.com.br/image/fundo_noticias.jpg); background-repeat:no-repeat; background-color:#fcfcfc;}
#nome_programas {height: 17px; width: 93px; margin-left: 8px; }
#titulo_programas {height: 22px; width: 651px; margin-top:3px;}
.titulos {font-family: "Trebuchet MS"; font-size: 14px; color: rgb(6, 54, 95); padding-top:6px;}
.sc_menu li {display: block; float: left; padding: 0 12px; width: 147px; }
.sc_menu a {display: block; text-decoration: none; }
.sc_menu span {display: none; margin-top: 3px; text-align: center; font-size: 12px;	 color: #fff; }
.sc_menu a:hover span {display: block; }
.sc_menu img {border: 1px #dbdbdb solid; /*-webkit-border-radius: 6px;   -moz-border-radius: 6px; */ padding:3px; }
.sc_menu a:hover img {filter:alpha(opacity=50);	 opacity: 0.5; }
ul.sc_menu {display: block; height: 110px; /* max width here, for users without javascript */	width: 5000px; /* removing default styling */ margin: 0; list-style: none; padding-top: 10px; padding-right: 0;  padding-bottom: 0; padding-left: 0px; }
-->
</style>

<div id="fundo_programas">
	  
	    <div  id="titulo_programas">
		
		  <div class="titulos" id="nome_programas" style="padding-top:3px; /padding-top:2px; width:300px"><strong><img src="instagramlogo.jpg" width="25" align="absmiddle"> Instagram BC</strong></div>
		</div>
	    <!--fim titulo_programas-->
		
		<div id="botao_pro1">
		
		  <div id="botao1"><img src="http://www.tvrba.com.br/image/seta_esq.gif" width="17" height="86"  border="0" /></div>
  </div>
		<!--fim botao_pro1-->
		<div class="sc_menu">
 <ul class="sc_menu">	
<?

foreach($var["data"] as $img) {
	
	$imagem = ($img["images"]["low_resolution"]["url"]);
	$imageg = ($img["images"]["standard_resolution"]["url"]);
	
	
	$legenda = ($img["caption"]["text"]);	
?>

              <li><a href="<?=$imageg?>" rel="shadowbox[gal]" title="<?=$legenda?>"><img src="<?=$imagem?>" border="0" title="<?=$legenda?>" alt="<?=$legenda?>" width="120"  /></a></li>
   <?
}
?>          
				
        </ul>
  </div>
<div id="botao_pro2">
		
		  <div id="botao2"><img src="http://www.tvrba.com.br/image/seta_dir.gif" width="17" height="86" border="0" /></div>
		  
		  
  </div><!--fim botao_pro2-->
		
</div>