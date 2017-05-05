// JavaScript Document

// Mobile menu to fill entire screen once opened.
//function openNav() {
//		document.getElementById("myNavbar").style.height = "100%";	
//	}
//
//function closeNav() {
//		document.getElementById("myNavbar").style.height = "0%";
//	}

// Mobile menu to expand the mobiile button
/*var icon = document.getElementsByClassName("icon-bars");
var pushDown = document.getElementById("push");

$(document).ready(function(){
  $(icon[0]).click(function(){
	if($(pushDown).hasClass("push")){
	  pushDown.className = "pushUp";
	}
	else{
	  pushDown.className = "push";
	}
  })
});
*/

// Google Maps Key
var gMapAPIKey = 'AIzaSyBJ32VRVw2_IYxLzc1jkzgyZBDzr4Kna18';

var map;
function initMap() {

var storeLocation = {lat: 45.3880869, lng: -93.6283842};

// Brings Google Maps to web page and adjusts zoom, scroll and drag options. Place inside hite-map div.	
   map = new google.maps.Map(document.getElementById('hite-map'), {
     'center' : storeLocation,
     'zoom' : 15,
	 'mapTypeID' : google.maps.MapTypeId.ROADMAP,
	 'draggable' : false,
	 'scrollwheel' : false
});


// Give a pop up window when marker is clicked.
 var popupContent = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<div id="bodyContent">'+
			'<img class="logo img-responsive" src="images/logos/hite-footer-logo.svg" alt="Hite Autobody and Restoration">' +
            '<p><b>Hite Auto Body and Restoration</b> opened its doors in 1990 and has been producing some of the best-looking cars in the Midwest ever since. &nbsp;' +
            "Located in Elk River, Minnesota, we have turned out cars that have appeared in Hot Rod Magazine, Mopar Collector's Guide and have graced the cover of Muscle Car Review. &nbsp;"+
            'Every car that enters the shop gets special attention from a detail job to a complete ground-up build. &nbsp;'+
            'Our highly skilled staff members have been providing excellent service and exceptional quality since our inception.</p>'+
            '</div>'+
            '</div>';
  


// Popup window
var infowindow = new google.maps.InfoWindow({
    content: popupContent
});

// Adds a marker on map to pin point the exact location.
var marker = new google.maps.Marker({
      'position' : storeLocation,
      'map' : map,
      'title' : '23045 142nd St NW, Elk River, MN 55330'
});

// Adds the event listener to the map. Opens when marker is clicked.
marker.addListener('click', function() {
     infowindow.open(map, marker);
});


}