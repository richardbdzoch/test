<?php

$word = $_GET['word'];

$pSegment = $page->addChild("pageSegment");
$pSegment->addAttribute("x", "10");
$pSegment->addAttribute("y", "30");
edited edited

blabla



blablabla
added
added
edited
$fixed = $pSegment->addChild("fixed");
$text = $fixed->addChild("text", "Word: " . strtoupper($word));

$text = $fixed->addChild("text", "You win!");
edited
edited
$text->addAttribute("style", "list_text");
$text->addAttribute("align", "left");

added
added


addHe edited tings);
addFooterMenu($bml, $app_settings); 
?>
