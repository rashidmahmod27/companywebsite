<?php
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$xmldoc = new DomDocument();    
    $xmldoc->formatOutput = true;
	$xml = file_get_contents('messages.xml');
	$xmldoc->loadXML($xml);
	$root = $xmldoc->firstChild;
	$newElement = $xmldoc->createElement('note');
    $root->appendChild($newElement);
	
	$nameElement = $xmldoc->createElement('name');
    $newElement->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($name);
    $nameElement->appendChild($nameText);
	
	$sexElement = $xmldoc->createElement('sex');
    $newElement->appendChild($sexElement);
    $sexText = $xmldoc->createTextNode($sex);
    $sexElement->appendChild($sexText);
	
	$mailElement = $xmldoc->createElement('mail');
    $newElement->appendChild($mailElement);
    $mailText = $xmldoc->createTextNode($email);
    $mailElement->appendChild($mailText);
	
	$websiteElement = $xmldoc->createElement('website');
    $newElement->appendChild($websiteElement);
    $websiteText = $xmldoc->createTextNode($website);
    $websiteElement->appendChild($websiteText);
	
	$titleElement = $xmldoc->createElement('title');
    $newElement->appendChild($titleElement);
    $titleText = $xmldoc->createTextNode($title);
    $titleElement->appendChild($titleText);
	
	$contentElement = $xmldoc->createElement('content');
    $newElement->appendChild($contentElement);
    $contentText = $xmldoc->createTextNode($content);
    $contentElement->appendChild($contentText);
	
	$dateElement = $xmldoc->createElement('date');
    $newElement->appendChild($dateElement);
    $dateText = $xmldoc->createTextNode(date("d/m/Y"));
    $dateElement->appendChild($dateText);
	
	$xmldoc->save('messages.xml');
	echo 'Successfully Saved';
	
?>