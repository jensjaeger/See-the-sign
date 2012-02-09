<?php
class Sign {
	public $name;
   	public $url; 
	public $text; 
	public $image_url; 
	
	function Sign($name, $url, $text, $image_url)
	{
		$this->name = $name;
		$this->url = $url;
		$this->text = $text;
		$this->image_url = $image_url;
	}
	
	function printAd()
	{
		$html = "<div class=\"sign\">";
		$html .= "<a href=\"$this->url\">";
		$html .= "<img class=\"sign\" alt=\"$this->name\" src=\"$this->image_url\" border=\"0\" height=\"80\"></a>";
		$html .= "<p class=\"signs\"><a href=\"$this->url\">$this->text</a></p></div>";
		echo $html;
	}
}


$signs = array( 
  new Sign("Autobahn81", "http://autobahn81.com", "Autobahn81.com. Print and web design on the fast lane.", "http://sign.js-ing.com/i/a81.png"),
  new Sign("Handysquares", "http://autobahn81.com/design/handysquares-magazine/", "Handy Squares. A premium Indesign template. Magazine or Book. 210x210 mm", "http://sign.js-ing.com/i/thumb-handysquares.png"),
  new Sign("Mapped contact form pro", "http://autobahn81.com/design/mapped-contact-form-pro/", "Mapped contact form pro. Ajax contact form inside a google maps info window. ", "http://sign.js-ing.com/i/thumb-mapped-contact.png"),
  new Sign("Travel map pro", "http://autobahn81.com/design/travel-map-pro/", "Travel map pro. Easy travel route with google maps.", "http://sign.js-ing.com/i/thumb-travelmap.png"),
    new Sign("Snow campus", "http://autobahn81.com/design/snowcampus-winter-stationery/", "SnowCampus Stationery. Quark and Indesign corporate identity pack.", "http://sign.js-ing.com/i/thumb-snowcampus-xxl.png"),
    new Sign("Iceland ", "http://unleashyouradventure.com/pages/unleash-your-adventure-books", "Iceland: A Stormy Motorcycle Adventure, an ebook by Sherrie McCarthy.", "http://sign.js-ing.com/i/iceland_cover_53x80.png")
);
?>
