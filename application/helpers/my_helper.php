<?php 
	function css_url($nom)
	{
		return base_url().'/assets/css/'.$nom.'.css';
	}
	function csss_url($nom)
	{
		return base_url().'/assets/css/csss/'.$nom.'.css';
	}
	
	function fonts_url($nom)
	{
		return base_url().'/assets/fonts/'.$nom;
	}
	function images_url($nom="",$isUnique=false)
	{
		if ($isUnique)
			return base_url().'/assets/images/';
		return base_url().'/assets/images/'.$nom;
	}
	
	function js_url($nom)
	{
		return base_url().'/assets/js/'.$nom.'.js';
	}
	function jss_url($nom)
	{
		return base_url().'/assets/js/jss/'.$nom.'.js';
	}
	
	function pageVisiteur_url($nom)
	{
		return base_url().'/index.php/visiteur/'.$nom.'.php';
	}
	function pageVisiteur_function($nom)
	{
		return base_url().'/index.php/visiteur/'.$nom;
	}
	function pageMembre_url($nom="")
	{
		return base_url().'/index.php/abonne/'.$nom.'.php';
	}
	function pageMembre_function($nom)
	{
		return base_url().'/index.php/abonne/'.$nom;
	}
	