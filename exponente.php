<?php
	require_once "HTML/Template/ITX.php";
	
	// ========================================================================
	//
	// 	Cargamos el template principal
	// 
	// ========================================================================
	$template = new HTML_Template_ITX('./templates');
	$template->loadTemplatefile("principal.html", true, true);
	
	if(isset($_POST['entrar']))
	{
		$Base = $_POST['base'];
		$Exponente = $_POST['exponente'];
		$Resultado = pow($Base,$Exponente);
		/* Sólo para números enteros positivos.
		$Resultado = 1;
		for($i = 1; $i<=$Exponente; $i++ )
			$Resultado *= $Base;
		*/
		$template->setVariable("TITULO", "Potencia"); // De la página principal.html se coloca el título
		$template->addBlockfile("CONTENIDO", "ResultExp", "resultado.html"); // De la página principal.html se coloca en contenido el bloque de código HTML de resultado.html y se coloca un ID llamado ResultExp 
		$template->setCurrentBlock("ResultExp"); // Nos ubicamos en el bloque HTML ResultExp
		$template->setVariable("BASE", $Base);
		$template->setVariable("EXPONENTE", $Exponente);
		$template->setVariable("RESULTADO", $Resultado); // En su mensaje de bienvenido ponemos texto.
		$template->parseCurrentBlock("ResultExp"); //Se sale del bloque de código HTML ResultExp

	}
	else
	{
		$template->setVariable("TITULO", "Potencia");
		$template->addBlockfile("CONTENIDO", "INICIO", "forma.html");
		$template->touchBlock('INICIO'); 
	}
	
	// Mostramos la pagina con los templates que llenamos
	$template->show();
?>
