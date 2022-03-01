<?php 


   /////////////////CRIPTOGRAFANDO UM TEXTO///////////

	$texto = "E o seguinte. eu tambem nao vou vacinar porque essa vacina ta matando muita gente. conheco muita gente que vacinou e que esta morrendo de cancer. o tio da  minha esposa morreu ontem. ele nao tinha nenhum problelma de saude. derrepente apareceu tumores por todo o corpo. fiquei sabendo de mais tres pessoas que tiveram o mesmo problema. inclusive uma delas e sobrinho do meu falecido cunhado toninho. outro assunto. nesse texto eu inclui espaco fazio";

		/////////////////////vogais//////////////////////////////

	$textoAlterado = str_replace("a", "b3kt3", $texto);
	$textoAlterado = str_replace("A", "4cefx", $textoAlterado);
	$textoAlterado = str_replace("e", "x3s2", $textoAlterado);
	$textoAlterado = str_replace("E", "7afr3", $textoAlterado);
	$textoAlterado  = str_replace("i", "h1s4", $textoAlterado);
	$textoAlterado  = str_replace("I", "t5ref", $textoAlterado);
	$textoAlterado  = str_replace("o", "gy6o", $textoAlterado);
	$textoAlterado  = str_replace("O", "tgj8z", $textoAlterado);
	$textoAlterado  = str_replace("u", "wrd5t", $textoAlterado);
	$textoAlterado  = str_replace("U", "ijukhL", $textoAlterado);

	///////////////////pontuacao/////////////////////////////

	$textoAlterado  = str_replace(".", "h7yhwe6", $textoAlterado);	//

	/////////////////espaco fazio/////////////////////////////

	//$textoAlterado  = str_replace(" ", "y76tgy4", $textoAlterado);

	$criptografado = $textoAlterado;
	echo "texto criptografado: <br /><br />$criptografado";

	 /////////////////FIM CRIPTOGRAFANDO UM TEXTO///////////

	////////////////DESCRIPTONGRAFANDO UM TEXTO////////////////////

	$criptografado = "7afr3 gy6o sx3s2gwrd5th1s4ntx3s2h7yhwe6 x3s2wrd5t tb3kt3mbx3s2m nb3kt3gy6o vgy6owrd5t vb3kt3ch1s4nb3kt3r pgy6orqwrd5tx3s2 x3s2ssb3kt3 vb3kt3ch1s4nb3kt3 tb3kt3 mb3kt3tb3kt3ndgy6o mwrd5th1s4tb3kt3 gx3s2ntx3s2h7yhwe6 cgy6onhx3s2cgy6o mwrd5th1s4tb3kt3 gx3s2ntx3s2 qwrd5tx3s2 vb3kt3ch1s4ngy6owrd5t x3s2 qwrd5tx3s2 x3s2stb3kt3 mgy6orrx3s2ndgy6o dx3s2 cb3kt3ncx3s2rh7yhwe6 gy6o th1s4gy6o db3kt3 mh1s4nhb3kt3 x3s2spgy6osb3kt3 mgy6orrx3s2wrd5t gy6ontx3s2mh7yhwe6 x3s2lx3s2 nb3kt3gy6o th1s4nhb3kt3 nx3s2nhwrd5tm prgy6oblx3s2lmb3kt3 dx3s2 sb3kt3wrd5tdx3s2h7yhwe6 dx3s2rrx3s2px3s2ntx3s2 b3kt3pb3kt3rx3s2cx3s2wrd5t twrd5tmgy6orx3s2s pgy6or tgy6odgy6o gy6o cgy6orpgy6oh7yhwe6 fh1s4qwrd5tx3s2h1s4 sb3kt3bx3s2ndgy6o dx3s2 mb3kt3h1s4s trx3s2s px3s2ssgy6ob3kt3s qwrd5tx3s2 th1s4vx3s2rb3kt3m gy6o mx3s2smgy6o prgy6oblx3s2mb3kt3h7yhwe6 h1s4nclwrd5tsh1s4vx3s2 wrd5tmb3kt3 dx3s2lb3kt3s x3s2 sgy6obrh1s4nhgy6o dgy6o mx3s2wrd5t fb3kt3lx3s2ch1s4dgy6o cwrd5tnhb3kt3dgy6o tgy6onh1s4nhgy6oh7yhwe6 gy6owrd5ttrgy6o b3kt3sswrd5tntgy6oh7yhwe6 nx3s2ssx3s2 tx3s2xtgy6o x3s2wrd5t h1s4nclwrd5th1s4 x3s2spb3kt3cgy6o fb3kt3zh1s4gy6o


";
	
	echo "<br/>";
	
	//////////////////////////////vogais/////////////////////////////////

	$descriptografando = str_replace("b3kt3", "a",$criptografado);
	$descriptografando = str_replace("4cefx", "A",$descriptografando);
	$descriptografando = str_replace("x3s2", "e",$descriptografando);
	$descriptografando = str_replace("7afr3", "E",$descriptografando);
	$descriptografando = str_replace("h1s4", "i",$descriptografando);
	$descriptografando = str_replace("t5ref", "I",$descriptografando);
	$descriptografando = str_replace("gy6o", "o",$descriptografando);
	$descriptografando = str_replace("tgj8z", "O",$descriptografando);
	$descriptografando = str_replace("wrd5t", "u",$descriptografando);
	$descriptografando = str_replace("ijukhL", "U",$descriptografando);

	////////////////////pontuacao//////////////////////////////

	$descriptografando = str_replace("h7yhwe6", ".",$descriptografando);

    /////////////////espaco fazio/////////////////////////////

	//$descriptografando  = str_replace("y76tgy4", " ", $descriptografando);

	echo "<br /><br />texto descriptografado:<br /><br /> $descriptografando";
	echo "<br />";

	////////////////FIM DESCRIPTONGRAFANDO UM TEXTO////////////////////
 ?>