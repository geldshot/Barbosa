<?php
class coordinate{
public $lat;
public $lon;
public $url;
public $id;
public $message;

function coordinate($lat, $lon, $url, $id, $message){
	$this->lat = $lat;
	$this->lon = $lon;
	$this->url = $url;
	$this->id = $id;
	$this->message = $message;
	return $this;
}


}

function getTestCoordinates(){
	$set[0] = new coordinate(120, 120, 'http://www.google.com', '-2', 'this is a test');
	$set[1] = new coordinate(100, 100, 'http://maps.google.com', '-2', 'DEMACIA');
	return $set;

}
?>