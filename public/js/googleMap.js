// JavaScript Document

var panorama;

// StreetViewPanoramaData of a panorama just outside the Google Sydney office.
var outsideHiteAutoBody;

// StreetViewPanoramaData for a custom panorama: the Google Sydney reception.
function getReceptionPanoramaData() {
  return {
    location: {
      pano: 'reception',  // The ID for this custom panorama.
      description: 'Hite Autobody & Restoration',
      latLng: new google.maps.LatLng(45.388087, -93.628384)
    },
    links: [{
      heading: 195,
      description: 'Exit',
      pano: outsideHiteAutoBody.location.pano
    }],
    copyright: 'Imagery (c) 2010 Google',
    tiles: {
      tileSize: new google.maps.Size(1024, 512),
      worldSize: new google.maps.Size(2048, 1024),
      centerHeading: 105,
      getTileUrl: function(pano, zoom, tileX, tileY) {
        return 'https://developers.google.com/maps/documentation/javascript/examples/full/images/' +
            'panoReception1024-' + zoom + '-' + tileX + '-' + tileY + '.jpg';
      }
    }
  };
}

function initPanorama() {
  panorama = new google.maps.StreetViewPanorama(
      document.getElementById('hite-map'),
      {
        pano: outsideHiteAutoBody.location.pano,
        // Register a provider for our custom panorama.
        panoProvider: function(pano) {
          if (pano === 'reception') {
            return getReceptionPanoramaData();
          }
        }
      });
}

function initialize() {
  // Use the Street View service to find a pano ID, outside 
  // Hite Autobody & Restoration.
  var streetviewService = new google.maps.StreetViewService;
  streetviewService.getPanorama(
      {location: {lat: 45.388087, lng: -93.628384}},
      function(result, status) {
        if (status === 'OK') {
          outsideHiteAutoBody = result;
          initPanorama();
        }
      });
}
