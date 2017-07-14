<?php
   $q = $_GET["q"];
   
   if($q == "Fashion") {
      $xml = ("http://feeds.feedburner.com/fibre2fashion/fashion-news");
   }elseif($q == "Textile") {
      $xml = ("http://feeds.feedburner.com/fibre2fashion/textile-news");
   }elseif($q = "Apparel"){
      $xml = ("http://feeds.feedburner.com/fibre2fashion/apparelnews");
   }
	
   $xmlDoc = new DOMDocument();
   $xmlDoc->load($xml);
   
   $channel = $xmlDoc->getElementsByTagName('channel')->item(0);
   
   $channel_title = $channel->getElementsByTagName('title')
   ->item(0)->childNodes->item(0)->nodeValue;
   
   $channel_link = $channel->getElementsByTagName('link')
   ->item(0)->childNodes->item(0)->nodeValue;
   
   $channel_desc = $channel->getElementsByTagName('description')
   ->item(0)->childNodes->item(0)->nodeValue;
   
   echo("<p><a href = '" . $channel_link . "'>" .$channel_title . "</a>");
   echo("<br>");
   echo($channel_desc . "</p>");
   
   $x = $xmlDoc->getElementsByTagName('item');
   
   for ($i = 0; $i<=2; $i++) {
      $item_title = $x->item($i)->getElementsByTagName('title')
      ->item(0)->childNodes->item(0)->nodeValue;
      
      $item_link = $x->item($i)->getElementsByTagName('link')
      ->item(0)->childNodes->item(0)->nodeValue;
      
      $item_desc = $x->item($i)->getElementsByTagName('description')
      ->item(0)->childNodes->item(0)->nodeValue;
      
      echo ("<marquee><p><a href = '" . $item_link . "'>" .
         $item_title . "</a>");
      echo ("<br>");
      echo ($item_desc . "</p></marquee>");
   }
?>
