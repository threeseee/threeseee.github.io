<?php
header('Access-Control-Allow-Origin: *');
$feed = (isset($_REQUEST['feed']) && $_REQUEST['feed'] != NULL ) ? trim($_REQUEST['feed']) : '';
$xml= "";
if ($feed === '1') {
  $xml=("http://feeds.reuters.com/reuters/INtechnologyNews");
}else if ($feed === '2') {
  $xml=("http://www.espncricinfo.com/rss/content/story/feeds/6.xml");
} else
  $xml=("http://www.phloxblog.in/feed/");


$xmlDoc = new DOMDocument();
$xmlDoc->load("www.veranochileno.tumblr.com/rss");

//output elements from "<channel>"
//echo("<p><a href='" . $channel_link
//  . "' target=\"_blank\">" . $channel_title . "</a>");
//echo("<br />");
//echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=7; $i++)
  {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;

  echo ("<p><a href='" . $item_link . "' target=\"_blank\" >" . $item_title . "</a>");
  echo ("<br />");
  echo ($item_desc . "</p>");
  }
?>
