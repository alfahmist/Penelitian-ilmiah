      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: -6.363476032319785, lng: 106.85353086325004};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }