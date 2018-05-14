<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="NBC") {
  $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
}elseif($q=="NTD") {
  $xml=("http://feeds.feedburner.com/ndtvnews-top-stories");
}elseif($q=="BBC") {
  $xml=("http://feeds.bbci.co.uk/news/rss.xml");
}elseif($q=="DIGINS") {
  $xml=("http://feeds.feedburner.com/labnol");
}elseif($q=="GOOEARTH") {
  $xml=("http://feeds.feedburner.com/GoogleEarthBlog");
}elseif($q=="SEAENG") {
  $xml=("http://feedpress.me/searchenginejournal");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<br>");
echo("<p><a href='" . $channel_link
  . "'style=\"color:Black; font-weight:bold; font-size:25px; text-decoration:underline;\">" . $channel_title . "</a>");
echo("<br> <br>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_date=$x->item($i)->getElementsByTagName('pubDate')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p style=\"text-align:left;\"><a href='" . $item_link
  . "'  style=\"background:black; color:white; font-size:20px; margin-left:20px; padding:5px;\">" . $item_title . "</a>");
  echo ("<br><p style=\"text-align:left; margin-left:20px; font-size:12px;\"> Published On: <i>");
  echo ($item_date . "</i></p>");
  echo ("<p style=\"font-size:15px; text-align:left; padding-left:30px; padding-right:30px;\">--->");
  echo ($item_desc . "</p></p><br>");
}
?>