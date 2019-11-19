<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script  defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfnjbBIqMVUJWAZ5HoFH8aNftrSbn2egk"  type="text/javascript"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" id="bootstrap-css" rel="stylesheet" />
</head>
<body>
<div class="container">
<div class="row">
<div class="jumbotron">
<h1>Calculate the Distance Between two Addresses demo</h1>
</div>

<div class="col-md-6">
<form id="distance_form">
<div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter a location" /> <input id="origin" name="origin" required="" type="hidden" /></div>

<div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" placeholder="Enter a location" /> <input id="destination" name="destination" required="" type="hidden" /></div>
<input class="btn btn-primary" type="submit" value="Calculate" /></form>

<div id="result">
<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-center">Distance In Mile :</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">Distance is Kilo:</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">IN TEXT:</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">IN MINUTES:</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">FROM:</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">TO:</li>
</ul>
</div>
</div>
</div>
</div>
<script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places(document.getElementById('from_places'));
            var to_places = new google.maps.places(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.'DRIVING',
                    //unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                     unitSystem: google.maps.UnitSystem.METRIC, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    //var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    //$('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

</script></body>
</html>
