<?php
	$path 	   = './www-build/rgaa-3.0-test-cases/';
	$scanned_directory = array_diff(scandir($path), array('..', '.'));
	$html_sitemap = "<h1>rgaa-3.0-test-cases</h1><ul>";
	foreach($scanned_directory AS $dir){
		
		$html_sitemap .= "<li><a href=\"$dir\">$dir</a></li>";	
		echo "\n\n$dir\n----------\n";
		$files = array_diff(scandir("$path/$dir"), array('..', '.','index.html'));
		$html = "<h1>$dir</h1><ul>";
		foreach($files AS $file){
			echo "$dir/$file - ";

			// 
			libxml_use_internal_errors(true);
			$doc = new DOMDocument();
			$doc->loadHTMLFile("$path/$dir/$file");		 
	 
			$title = $doc->getElementsByTagName('title')->item(0);
			$title = $doc->getElementsByTagName('h1')->item(0);
			$title = $title->nodeValue;
			 echo $title;
		
			echo "\n";
			$html .= "<li><a href=\"$file\">$title</a></li>";	
		}
		$html .= '<ul>';
		file_put_contents("$path/$dir/index.html",$html);
	}
	$html_sitemap .= '<ul>';
	file_put_contents("$path/index.html",$html_sitemap);

