<?php
define("MAX_ITEMS", 5);
$url = "http://dentafrice.com/rss.xml";

$xml = new SimpleXMLElement(@file_get_contents($url));

$counter = 0;

foreach($xml->channel->item as $item) {
  if($counter == MAX_ITEMS)
    break;

  $link = $item->link;
  $link = str_replace('.github', '', $link);

  echo "<li><a href='{$link}' target='_blank'>{$item->title}</a></li>";
  $counter++;
}
?>