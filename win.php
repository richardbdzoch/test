<?php

$word = $_GET['word'];

$pSegment = $page->addChild("pageSegment");
$pSegment->addAttribute("x", "10");
$pSegment->addAttribute("y", "30");
edited


added
$fixed = $pSegment->addChild("fixed");
$text = $fixed->addChild("text", "Word: " . strtoupper($word));
$text->addAttribute("x", "0");
$text->addAttribute("w", "width");
$text->addAttribute("y", "0");
3 removed

$text = $fixed->addChild("text", "You win!");
edited
$text->addAttribute("w", "width");
$text->addAttribute("y", "40");
edited
$text->addAttribute("style", "list_text");
$text->addAttribute("align", "left");

added
added


addHe edited tings);
addFooterMenu($bml, $app_settings); 
?>
