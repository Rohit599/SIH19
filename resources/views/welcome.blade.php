@section('css')
<style type="text/css">
header{
	height: 100%;
}
</style>
@stop
@extends('layouts.default')
@section('script')
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClAb86kVhydjMRAuOF1nZtMZNmCpgflJ8&libraries=visualization&callback=initMap">
</script>
<script type="text/javascript">
	var map, heatmap;

	function initMap() {
		var country = "INDIA";
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4.5,
			mapTypeId: 'roadmap'
		});

		var geocoder = new google.maps.Geocoder();
		geocoder.geocode( { 'address': country }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
			} else {
				alert("Could not find location: " + location);
			}
		});

		heatmap = new google.maps.visualization.HeatmapLayer({
			data: getPoints(),
			map: map
		});
		heatmap.set('radius', 20);
	}

	function toggleHeatmap() {
		heatmap.setMap(heatmap.getMap() ? null : map);
	}

	function changeGradient() {
		var gradient = [
		'rgba(0, 255, 255, 0)',
		'rgba(0, 255, 255, 1)',
		'rgba(0, 191, 255, 1)',
		'rgba(0, 127, 255, 1)',
		'rgba(0, 63, 255, 1)',
		'rgba(0, 0, 255, 1)',
		'rgba(0, 0, 223, 1)',
		'rgba(0, 0, 191, 1)',
		'rgba(0, 0, 159, 1)',
		'rgba(0, 0, 127, 1)',
		'rgba(63, 0, 91, 1)',
		'rgba(127, 0, 63, 1)',
		'rgba(191, 0, 31, 1)',
		'rgba(255, 0, 0, 1)'
		]
		heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
	}

	function changeRadius() {
		heatmap.set('radius', heatmap.get('radius') ? null : 20);
	}

	function changeOpacity() {
		heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
	}
	    // Heatmap data: 500 Points
	    function getPoints() {
	    	return [
	    	new google.maps.LatLng(28.782551, 77.445368),
	    	new google.maps.LatLng(28.782745, 77.444586),
	    	new google.maps.LatLng(28.782842, 77.443688),
	    	new google.maps.LatLng(28.782919, 77.442815),
	    	new google.maps.LatLng(28.782992, 77.442112),
	    	new google.maps.LatLng(28.783100, 77.441461),
	    	new google.maps.LatLng(28.783206, 77.440829),
	    	new google.maps.LatLng(28.783273, 77.440324),
	    	new google.maps.LatLng(28.783316, 77.440023),
	    	new google.maps.LatLng(28.783357, 77.439794),
	    	new google.maps.LatLng(28.783281, 77.439687),
	    	new google.maps.LatLng(28.783368, 77.439666),
	    	new google.maps.LatLng(28.783383, 77.439594),
	    	new google.maps.LatLng(28.783508, 77.439525),
	    	new google.maps.LatLng(28.783842, 77.439591),
	    	new google.maps.LatLng(28.784147, 77.439668),
	    	new google.maps.LatLng(28.784206, 77.439686),
	    	new google.maps.LatLng(28.784386, 77.439790),
	    	new google.maps.LatLng(28.784701, 77.439902),
	    	new google.maps.LatLng(28.784965, 77.439938),
	    	new google.maps.LatLng(28.785010, 77.439947),
	    	new google.maps.LatLng(28.785360, 77.439952),
	    	new google.maps.LatLng(28.785715, 77.440030),
	    	new google.maps.LatLng(28.786117, 77.440119),
	    	new google.maps.LatLng(28.786564, 77.440209),
	    	new google.maps.LatLng(28.786905, 77.440270),
	    	new google.maps.LatLng(28.786956, 77.440279),
	    	new google.maps.LatLng(28.800224, 77.433520),
	    	new google.maps.LatLng(28.800155, 77.434101),
	    	new google.maps.LatLng(28.800160, 77.434430),
	    	new google.maps.LatLng(28.800288, 77.434527),
	    	new google.maps.LatLng(28.800738, 77.434598),
	    	new google.maps.LatLng(28.800938, 77.434650),
	    	new google.maps.LatLng(28.801024, 77.434889),
	    	new google.maps.LatLng(28.800955, 77.435392),
	    	new google.maps.LatLng(28.800886, 77.435959),
	    	new google.maps.LatLng(28.800811, 77.436275),
	    	new google.maps.LatLng(28.800788, 77.436299),
	    	new google.maps.LatLng(28.800719, 77.436302),
	    	new google.maps.LatLng(28.800702, 77.436298),
	    	new google.maps.LatLng(28.800661, 77.436273),
	    	new google.maps.LatLng(28.800395, 77.436172),
	    	new google.maps.LatLng(28.800228, 77.436116),
	    	new google.maps.LatLng(28.800169, 77.436130),
	    	new google.maps.LatLng(28.800066, 77.436167),
	    	new google.maps.LatLng(28.784345, 77.422922),
	    	new google.maps.LatLng(28.784389, 77.422926),
	    	new google.maps.LatLng(28.784428, 77.422924),
	    	new google.maps.LatLng(28.784746, 77.422818),
	    	new google.maps.LatLng(28.785436, 77.422959),
	    	new google.maps.LatLng(28.786120, 77.423112),
	    	new google.maps.LatLng(28.786433, 77.423029),
	    	new google.maps.LatLng(28.786631, 77.421213),
	    	new google.maps.LatLng(28.786660, 77.421033),
	    	new google.maps.LatLng(28.786801, 77.420141),
	    	new google.maps.LatLng(28.786823, 77.420034),
	    	new google.maps.LatLng(28.786831, 77.419916),
	    	new google.maps.LatLng(28.787034, 77.418208),
	    	new google.maps.LatLng(28.787056, 77.418034),
	    	new google.maps.LatLng(28.787169, 77.417145),
	    	new google.maps.LatLng(28.787217, 77.416715),
	    	new google.maps.LatLng(28.786144, 77.416403),
	    	new google.maps.LatLng(28.785292, 77.416257),
	    	new google.maps.LatLng(28.780666, 77.390284),
	    	new google.maps.LatLng(28.780501, 77.391281),
	    	new google.maps.LatLng(28.780148, 77.392052),
	    	new google.maps.LatLng(28.780173, 77.391148),
	    	new google.maps.LatLng(28.780693, 77.390592),
	    	new google.maps.LatLng(28.781261, 77.391142),
	    	new google.maps.LatLng(28.781808, 77.391730),
	    	new google.maps.LatLng(28.782340, 77.392341),
	    	new google.maps.LatLng(28.782812, 77.393022),
	    	new google.maps.LatLng(28.783300, 77.393672),
	    	new google.maps.LatLng(28.783809, 77.394275),
	    	new google.maps.LatLng(28.784246, 77.394979),
	    	new google.maps.LatLng(28.784791, 77.395958),
	    	new google.maps.LatLng(28.785675, 77.396746),
	    	new google.maps.LatLng(28.786262, 77.395780),
	    	new google.maps.LatLng(28.786776, 77.395093),
	    	new google.maps.LatLng(28.787282, 77.394426),
	    	new google.maps.LatLng(28.787783, 77.392867),
	    	new google.maps.LatLng(28.788343, 77.393184),
	    	new google.maps.LatLng(28.788895, 77.392506),
	    	new google.maps.LatLng(28.789281, 77.391701),
	    	new google.maps.LatLng(28.789722, 77.390952),
	    	new google.maps.LatLng(28.790315, 77.390305),
	    	new google.maps.LatLng(28.790738, 77.389616),
	    	new google.maps.LatLng(28.779448, 77.438702),
	    	new google.maps.LatLng(28.779023, 77.438585),
	    	new google.maps.LatLng(28.778542, 77.438492),
	    	new google.maps.LatLng(28.778100, 77.438411),
	    	new google.maps.LatLng(28.777986, 77.438286),
	    	new google.maps.LatLng(28.777680, 77.438313),
	    	new google.maps.LatLng(28.777316, 77.438273),
	    	new google.maps.LatLng(28.777135, 77.438254),
	    	new google.maps.LatLng(28.776987, 77.438303),
	    	new google.maps.LatLng(28.776946, 77.438404),
	    	new google.maps.LatLng(28.776944, 77.438467),
	    	new google.maps.LatLng(28.776892, 77.438459),
	    	new google.maps.LatLng(28.776842, 77.438442),
	    	new google.maps.LatLng(28.776822, 77.438391),
	    	new google.maps.LatLng(28.776814, 77.438412),
	    	new google.maps.LatLng(28.776787, 77.438628),
	    	new google.maps.LatLng(28.776729, 77.438650),
	    	new google.maps.LatLng(28.776759, 77.438677),
	    	new google.maps.LatLng(28.776772, 77.438498),
	    	new google.maps.LatLng(28.776787, 77.438389),
	    	new google.maps.LatLng(28.776848, 77.438283),
	    	new google.maps.LatLng(28.776870, 77.438239),
	    	new google.maps.LatLng(28.777015, 77.438198),
	    	new google.maps.LatLng(28.777333, 77.438256),
	    	new google.maps.LatLng(28.777595, 77.438308),
	    	new google.maps.LatLng(28.777797, 77.438344),
	    	new google.maps.LatLng(28.778160, 77.438442),
	    	new google.maps.LatLng(28.778414, 77.438508),
	    	new google.maps.LatLng(28.778445, 77.438516),
	    	new google.maps.LatLng(28.778503, 77.438529),
	    	new google.maps.LatLng(28.778607, 77.438549),
	    	new google.maps.LatLng(28.778670, 77.438644),
	    	new google.maps.LatLng(28.778847, 77.438706),
	    	new google.maps.LatLng(28.779240, 77.438744),
	    	new google.maps.LatLng(28.779738, 77.438822),
	    	new google.maps.LatLng(28.780201, 77.438882),
	    	new google.maps.LatLng(28.780400, 77.438905),
	    	new google.maps.LatLng(28.780501, 77.438921),
	    	new google.maps.LatLng(28.780892, 77.438986),
	    	new google.maps.LatLng(28.781446, 77.439087),
	    	new google.maps.LatLng(28.781985, 77.439199),
	    	new google.maps.LatLng(28.782239, 77.439249),
	    	new google.maps.LatLng(28.782286, 77.439266),
	    	new google.maps.LatLng(28.797847, 77.429388),
	    	new google.maps.LatLng(28.797874, 77.429180),
	    	new google.maps.LatLng(28.797885, 77.429069),
	    	new google.maps.LatLng(28.797887, 77.429050),
	    	new google.maps.LatLng(28.797933, 77.428954),
	    	new google.maps.LatLng(28.798242, 77.428990),
	    	new google.maps.LatLng(28.798617, 77.429075),
	    	new google.maps.LatLng(28.798719, 77.429092),
	    	new google.maps.LatLng(28.798944, 77.429145),
	    	new google.maps.LatLng(28.799320, 77.429251),
	    	new google.maps.LatLng(28.799590, 77.429309),
	    	new google.maps.LatLng(28.799677, 77.429324),
	    	new google.maps.LatLng(28.799966, 77.429360),
	    	new google.maps.LatLng(28.800288, 77.429430),
	    	new google.maps.LatLng(28.800443, 77.429461),
	    	new google.maps.LatLng(28.800465, 77.429474),
	    	new google.maps.LatLng(28.800644, 77.429540),
	    	new google.maps.LatLng(28.800948, 77.429620),
	    	new google.maps.LatLng(28.801242, 77.429685),
	    	new google.maps.LatLng(28.801285, 77.429702),
	    	new google.maps.LatLng(28.801400, 77.429703),
	    	new google.maps.LatLng(28.801453, 77.429707),
	    	new google.maps.LatLng(28.801473, 77.429709),
	    	new google.maps.LatLng(28.801532, 77.429707),
	    	new google.maps.LatLng(28.801852, 77.429729),
	    	new google.maps.LatLng(28.802173, 77.429789),
	    	new google.maps.LatLng(28.802459, 77.429847),
	    	new google.maps.LatLng(28.802554, 77.429825),
	    	new google.maps.LatLng(28.802647, 77.429549),
	    	new google.maps.LatLng(28.802693, 77.429179),
	    	new google.maps.LatLng(28.802729, 77.428751),
	    	new google.maps.LatLng(28.766104, 77.409291),
	    	new google.maps.LatLng(28.766103, 77.409268),
	    	new google.maps.LatLng(28.766138, 77.409229),
	    	new google.maps.LatLng(28.766183, 77.409231),
	    	new google.maps.LatLng(28.766153, 77.409276),
	    	new google.maps.LatLng(28.766005, 77.409365),
	    	new google.maps.LatLng(28.765897, 77.409570),
	    	new google.maps.LatLng(28.765767, 77.409739),
	    	new google.maps.LatLng(28.765693, 77.410389),
	    	new google.maps.LatLng(28.765615, 77.411201),
	    	new google.maps.LatLng(28.765533, 77.412121),
	    	new google.maps.LatLng(28.765467, 77.412939),
	    	new google.maps.LatLng(28.765444, 77.414821),
	    	new google.maps.LatLng(28.765444, 77.414964),
	    	new google.maps.LatLng(28.765318, 77.415424),
	    	new google.maps.LatLng(28.763961, 77.415296),
	    	new google.maps.LatLng(28.763115, 77.415196),
	    	new google.maps.LatLng(28.762967, 77.415183),
	    	new google.maps.LatLng(28.762278, 77.415127),
	    	new google.maps.LatLng(28.761675, 77.415055),
	    	new google.maps.LatLng(28.760932, 77.414988),
	    	new google.maps.LatLng(28.759328, 77.414862),
	    	new google.maps.LatLng(28.773187, 77.421922),
	    	new google.maps.LatLng(28.773043, 77.422118),
	    	new google.maps.LatLng(28.773007, 77.422165),
	    	new google.maps.LatLng(28.772979, 77.422219),
	    	new google.maps.LatLng(28.772865, 77.422394),
	    	new google.maps.LatLng(28.772779, 77.422503),
	    	new google.maps.LatLng(28.772676, 77.422701),
	    	new google.maps.LatLng(28.772606, 77.422806),
	    	new google.maps.LatLng(28.772566, 77.422840),
	    	new google.maps.LatLng(28.772508, 77.422852),
	    	new google.maps.LatLng(28.772387, 77.423011),
	    	new google.maps.LatLng(28.772099, 77.423328),
	    	new google.maps.LatLng(28.771704, 77.422883),
	    	new google.maps.LatLng(28.771481, 77.424081),
	    	new google.maps.LatLng(28.771400, 77.424179),
	    	new google.maps.LatLng(28.771352, 77.424220),
	    	new google.maps.LatLng(28.771248, 77.424327),
	    	new google.maps.LatLng(28.770904, 77.424781),
	    	new google.maps.LatLng(28.770520, 77.425283),
	    	new google.maps.LatLng(28.770328, 77.425553),
	    	new google.maps.LatLng(28.770128, 77.425832),
	    	new google.maps.LatLng(28.769756, 77.426331),
	    	new google.maps.LatLng(28.769300, 77.426902),
	    	new google.maps.LatLng(28.769132, 77.427065),
	    	new google.maps.LatLng(28.769092, 77.427103),
	    	new google.maps.LatLng(28.768979, 77.427172),
	    	new google.maps.LatLng(28.768595, 77.427634),
	    	new google.maps.LatLng(28.768282, 77.427913),
	    	new google.maps.LatLng(28.768328, 77.427961),
	    	new google.maps.LatLng(28.768244, 77.428138),
	    	new google.maps.LatLng(28.767942, 77.428581),
	    	new google.maps.LatLng(28.767482, 77.429094),
	    	new google.maps.LatLng(28.767031, 77.429606),
	    	new google.maps.LatLng(28.766732, 77.429986),
	    	new google.maps.LatLng(28.766680, 77.430058),
	    	new google.maps.LatLng(28.766633, 77.430109),
	    	new google.maps.LatLng(28.766580, 77.430211),
	    	new google.maps.LatLng(28.766367, 77.430594),
	    	new google.maps.LatLng(28.765910, 77.431128),
	    	new google.maps.LatLng(28.765353, 77.431806),
	    	new google.maps.LatLng(28.764962, 77.432298),
	    	new google.maps.LatLng(28.764868, 77.432486),
	    	new google.maps.LatLng(28.764518, 77.432913),
	    	new google.maps.LatLng(28.763435, 77.434173),
	    	new google.maps.LatLng(28.762847, 77.434953),
	    	new google.maps.LatLng(28.762291, 77.435935),
	    	new google.maps.LatLng(28.762224, 77.436074),
	    	new google.maps.LatLng(28.761957, 77.436892),
	    	new google.maps.LatLng(28.761652, 77.438886),
	    	new google.maps.LatLng(28.761284, 77.439955),
	    	new google.maps.LatLng(28.761210, 77.440068),
	    	new google.maps.LatLng(28.761064, 77.440720),
	    	new google.maps.LatLng(28.761040, 77.441411),
	    	new google.maps.LatLng(28.761048, 77.442324),
	    	new google.maps.LatLng(28.760851, 77.443118),
	    	new google.maps.LatLng(28.759977, 77.444591),
	    	new google.maps.LatLng(28.759913, 77.444698),
	    	new google.maps.LatLng(28.759623, 77.445065),
	    	new google.maps.LatLng(28.758902, 77.445158),
	    	new google.maps.LatLng(28.758428, 77.444570),
	    	new google.maps.LatLng(28.757687, 77.443340),
	    	new google.maps.LatLng(28.757583, 77.443240),
	    	new google.maps.LatLng(28.757019, 77.442787),
	    	new google.maps.LatLng(28.756603, 77.442322),
	    	new google.maps.LatLng(28.756380, 77.441602),
	    	new google.maps.LatLng(28.755790, 77.441382),
	    	new google.maps.LatLng(28.754493, 77.442133),
	    	new google.maps.LatLng(28.754361, 77.442206),
	    	new google.maps.LatLng(28.752819, 77.442650),
	    	new google.maps.LatLng(28.753096, 77.442915),
	    	new google.maps.LatLng(28.751617, 77.443211),
	    	new google.maps.LatLng(28.751496, 77.443246),
	    	new google.maps.LatLng(28.750733, 77.443428),
	    	new google.maps.LatLng(28.750126, 77.443536),
	    	new google.maps.LatLng(28.750103, 77.442884),
	    	new google.maps.LatLng(28.750390, 77.444010),
	    	new google.maps.LatLng(28.750448, 77.444013),
	    	new google.maps.LatLng(28.750536, 77.444040),
	    	new google.maps.LatLng(28.750493, 77.444141),
	    	new google.maps.LatLng(28.790859, 77.402808),
	    	new google.maps.LatLng(28.790864, 77.402768),
	    	new google.maps.LatLng(28.790995, 77.402539),
	    	new google.maps.LatLng(28.791148, 77.402172),
	    	new google.maps.LatLng(28.791385, 77.401312),
	    	new google.maps.LatLng(28.791405, 77.400776),
	    	new google.maps.LatLng(28.791288, 77.400528),
	    	new google.maps.LatLng(28.791113, 77.400441),
	    	new google.maps.LatLng(28.791027, 77.400395),
	    	new google.maps.LatLng(28.791094, 77.400311),
	    	new google.maps.LatLng(28.791211, 77.400183),
	    	new google.maps.LatLng(28.791060, 77.399334),
	    	new google.maps.LatLng(28.790538, 77.398718),
	    	new google.maps.LatLng(28.790095, 77.398086),
	    	new google.maps.LatLng(28.789644, 77.397360),
	    	new google.maps.LatLng(28.789254, 77.396844),
	    	new google.maps.LatLng(28.788855, 77.396397),
	    	new google.maps.LatLng(28.788483, 77.395963),
	    	new google.maps.LatLng(28.788015, 77.395365),
	    	new google.maps.LatLng(28.787558, 77.394735),
	    	new google.maps.LatLng(28.787472, 77.394323),
	    	new google.maps.LatLng(28.787630, 77.394025),
	    	new google.maps.LatLng(28.787767, 77.393987),
	    	new google.maps.LatLng(28.787486, 77.394452),
	    	new google.maps.LatLng(28.786977, 77.395043),
	    	new google.maps.LatLng(28.786583, 77.395552),
	    	new google.maps.LatLng(28.786540, 77.395610),
	    	new google.maps.LatLng(28.786516, 77.395659),
	    	new google.maps.LatLng(28.786288, 77.395707),
	    	new google.maps.LatLng(28.786044, 77.395362),
	    	new google.maps.LatLng(28.785598, 77.394715),
	    	new google.maps.LatLng(28.785321, 77.394361),
	    	new google.maps.LatLng(28.785207, 77.394236),
	    	new google.maps.LatLng(28.785751, 77.394062),
	    	new google.maps.LatLng(28.785996, 77.393881),
	    	new google.maps.LatLng(28.786092, 77.393830),
	    	new google.maps.LatLng(28.785998, 77.393899),
	    	new google.maps.LatLng(28.785114, 77.394365),
	    	new google.maps.LatLng(28.785022, 77.394441),
	    	new google.maps.LatLng(28.784823, 77.394635),
	    	new google.maps.LatLng(28.784719, 77.394629),
	    	new google.maps.LatLng(28.785069, 77.394176),
	    	new google.maps.LatLng(28.785500, 77.393650),
	    	new google.maps.LatLng(28.785770, 77.393291),
	    	new google.maps.LatLng(28.785839, 77.393159),
	    	new google.maps.LatLng(28.782651, 77.400628),
	    	new google.maps.LatLng(28.782616, 77.400599),
	    	new google.maps.LatLng(28.782702, 77.400470),
	    	new google.maps.LatLng(28.782915, 77.400192),
	    	new google.maps.LatLng(28.783128, 77.399887),
	    	new google.maps.LatLng(28.783414, 77.399519),
	    	new google.maps.LatLng(28.783629, 77.399228),
	    	new google.maps.LatLng(28.783688, 77.399157),
	    	new google.maps.LatLng(28.782816, 77.399106),
	    	new google.maps.LatLng(28.782898, 77.399072),
	    	new google.maps.LatLng(28.783997, 77.399186),
	    	new google.maps.LatLng(28.784271, 77.399538),
	    	new google.maps.LatLng(28.784577, 77.399948),
	    	new google.maps.LatLng(28.784828, 77.400260),
	    	new google.maps.LatLng(28.784999, 77.400477),
	    	new google.maps.LatLng(28.785113, 77.400651),
	    	new google.maps.LatLng(28.785155, 77.400703),
	    	new google.maps.LatLng(28.785192, 77.400749),
	    	new google.maps.LatLng(28.785278, 77.400839),
	    	new google.maps.LatLng(28.785387, 77.400857),
	    	new google.maps.LatLng(28.785478, 77.400890),
	    	new google.maps.LatLng(28.785526, 77.401022),
	    	new google.maps.LatLng(28.785598, 77.401148),
	    	new google.maps.LatLng(28.785631, 77.401202),
	    	new google.maps.LatLng(28.785660, 77.401267),
	    	new google.maps.LatLng(28.803986, 77.426035),
	    	new google.maps.LatLng(28.804102, 77.425089),
	    	new google.maps.LatLng(28.804211, 77.424156),
	    	new google.maps.LatLng(28.803861, 77.423385),
	    	new google.maps.LatLng(28.803151, 77.423214),
	    	new google.maps.LatLng(28.802439, 77.423077),
	    	new google.maps.LatLng(28.801740, 77.422905),
	    	new google.maps.LatLng(28.801069, 77.422785),
	    	new google.maps.LatLng(28.800345, 77.422649),
	    	new google.maps.LatLng(28.799633, 77.422603),
	    	new google.maps.LatLng(28.799750, 77.421700),
	    	new google.maps.LatLng(28.799885, 77.420854),
	    	new google.maps.LatLng(28.799209, 77.420607),
	    	new google.maps.LatLng(28.795656, 77.400395),
	    	new google.maps.LatLng(28.795203, 77.400304),
	    	new google.maps.LatLng(28.778738, 77.415584),
	    	new google.maps.LatLng(28.778812, 77.415189),
	    	new google.maps.LatLng(28.778824, 77.415092),
	    	new google.maps.LatLng(28.778833, 77.414932),
	    	new google.maps.LatLng(28.778834, 77.414898),
	    	new google.maps.LatLng(28.778740, 77.414757),
	    	new google.maps.LatLng(28.778501, 77.414433),
	    	new google.maps.LatLng(28.778182, 77.414026),
	    	new google.maps.LatLng(28.777851, 77.413623),
	    	new google.maps.LatLng(28.777486, 77.413166),
	    	new google.maps.LatLng(28.777109, 77.412674),
	    	new google.maps.LatLng(28.776743, 77.412186),
	    	new google.maps.LatLng(28.776440, 77.411800),
	    	new google.maps.LatLng(28.776295, 77.411614),
	    	new google.maps.LatLng(28.776158, 77.411440),
	    	new google.maps.LatLng(28.775806, 77.410997),
	    	new google.maps.LatLng(28.775422, 77.410484),
	    	new google.maps.LatLng(28.775126, 77.410087),
	    	new google.maps.LatLng(28.775012, 77.409854),
	    	new google.maps.LatLng(28.775164, 77.409573),
	    	new google.maps.LatLng(28.775498, 77.409180),
	    	new google.maps.LatLng(28.775868, 77.408730),
	    	new google.maps.LatLng(28.776256, 77.408240),
	    	new google.maps.LatLng(28.776519, 77.407928),
	    	new google.maps.LatLng(28.776539, 77.407904),
	    	new google.maps.LatLng(28.776595, 77.407854),
	    	new google.maps.LatLng(28.776853, 77.407547),
	    	new google.maps.LatLng(28.777234, 77.407087),
	    	new google.maps.LatLng(28.777644, 77.406558),
	    	new google.maps.LatLng(28.778066, 77.406017),
	    	new google.maps.LatLng(28.778468, 77.405499),
	    	new google.maps.LatLng(28.778866, 77.404995),
	    	new google.maps.LatLng(28.779295, 77.404455),
	    	new google.maps.LatLng(28.779695, 77.403950),
	    	new google.maps.LatLng(28.779982, 77.403584),
	    	new google.maps.LatLng(28.780295, 77.403223),
	    	new google.maps.LatLng(28.780664, 77.402766),
	    	new google.maps.LatLng(28.781043, 77.402288),
	    	new google.maps.LatLng(28.781399, 77.401823),
	    	new google.maps.LatLng(28.781727, 77.401407),
	    	new google.maps.LatLng(28.781853, 77.401247),
	    	new google.maps.LatLng(28.781894, 77.401195),
	    	new google.maps.LatLng(28.782076, 77.400977),
	    	new google.maps.LatLng(28.782338, 77.400603),
	    	new google.maps.LatLng(28.782666, 77.400133),
	    	new google.maps.LatLng(28.783048, 77.399634),
	    	new google.maps.LatLng(28.783450, 77.399198),
	    	new google.maps.LatLng(28.782891, 77.398998),
	    	new google.maps.LatLng(28.784177, 77.398959),
	    	new google.maps.LatLng(28.784388, 77.398971),
	    	new google.maps.LatLng(28.784404, 77.399128),
	    	new google.maps.LatLng(28.784586, 77.399524),
	    	new google.maps.LatLng(28.784835, 77.399927),
	    	new google.maps.LatLng(28.785116, 77.400307),
	    	new google.maps.LatLng(28.785282, 77.400539),
	    	new google.maps.LatLng(28.785346, 77.400692),
	    	new google.maps.LatLng(28.765769, 77.407201),
	    	new google.maps.LatLng(28.765790, 77.407414),
	    	new google.maps.LatLng(28.765802, 77.407755),
	    	new google.maps.LatLng(28.765791, 77.408219),
	    	new google.maps.LatLng(28.765763, 77.408759),
	    	new google.maps.LatLng(28.765726, 77.409348),
	    	new google.maps.LatLng(28.765716, 77.409882),
	    	new google.maps.LatLng(28.765708, 77.410202),
	    	new google.maps.LatLng(28.765705, 77.410253),
	    	new google.maps.LatLng(28.765707, 77.410369),
	    	new google.maps.LatLng(28.765692, 77.410720),
	    	new google.maps.LatLng(28.765699, 77.411215),
	    	new google.maps.LatLng(28.765687, 77.411789),
	    	new google.maps.LatLng(28.765666, 77.412283),
	    	new google.maps.LatLng(28.765598, 77.412883),
	    	new google.maps.LatLng(28.765543, 77.413039),
	    	new google.maps.LatLng(28.765532, 77.413125),
	    	new google.maps.LatLng(28.765500, 77.413553),
	    	new google.maps.LatLng(28.765448, 77.414053),
	    	new google.maps.LatLng(28.765388, 77.414645),
	    	new google.maps.LatLng(28.765323, 77.415250),
	    	new google.maps.LatLng(28.765303, 77.415847),
	    	new google.maps.LatLng(28.765251, 77.416439),
	    	new google.maps.LatLng(28.765204, 77.417020),
	    	new google.maps.LatLng(28.765172, 77.417556),
	    	new google.maps.LatLng(28.765164, 77.418075),
	    	new google.maps.LatLng(28.765153, 77.418618),
	    	new google.maps.LatLng(28.765136, 77.419112),
	    	new google.maps.LatLng(28.765129, 77.419288),
	    	new google.maps.LatLng(28.765119, 77.419481),
	    	new google.maps.LatLng(28.765100, 77.419852),
	    	new google.maps.LatLng(28.765083, 77.420349),
	    	new google.maps.LatLng(28.765045, 77.420930),
	    	new google.maps.LatLng(28.764992, 77.421481),
	    	new google.maps.LatLng(28.764980, 77.421695),
	    	new google.maps.LatLng(28.764993, 77.421843),
	    	new google.maps.LatLng(28.764986, 77.422255),
	    	new google.maps.LatLng(28.764975, 77.422823),
	    	new google.maps.LatLng(28.764939, 77.423411),
	    	new google.maps.LatLng(28.764902, 77.424014),
	    	new google.maps.LatLng(28.764853, 77.424576),
	    	new google.maps.LatLng(28.764826, 77.424922),
	    	new google.maps.LatLng(28.764796, 77.425285),
	    	new google.maps.LatLng(28.764782, 77.425869),
	    	new google.maps.LatLng(28.764768, 77.426089),
	    	new google.maps.LatLng(28.764766, 77.426117),
	    	new google.maps.LatLng(28.764723, 77.426276),
	    	new google.maps.LatLng(28.764681, 77.426649),
	    	new google.maps.LatLng(28.782012, 77.404200),
	    	new google.maps.LatLng(28.781574, 77.404911),
	    	new google.maps.LatLng(28.781055, 77.405597),
	    	new google.maps.LatLng(28.780479, 77.406341),
	    	new google.maps.LatLng(28.779996, 77.406939),
	    	new google.maps.LatLng(28.779459, 77.407613),
	    	new google.maps.LatLng(28.778953, 77.408228),
	    	new google.maps.LatLng(28.778409, 77.408839),
	    	new google.maps.LatLng(28.777842, 77.409501),
	    	new google.maps.LatLng(28.777334, 77.410181),
	    	new google.maps.LatLng(28.776809, 77.410836),
	    	new google.maps.LatLng(28.776240, 77.411514),
	    	new google.maps.LatLng(28.775725, 77.412145),
	    	new google.maps.LatLng(28.775190, 77.412805),
	    	new google.maps.LatLng(28.774672, 77.413464),
	    	new google.maps.LatLng(28.774084, 77.414186),
	    	new google.maps.LatLng(28.773533, 77.413636),
	    	new google.maps.LatLng(28.773021, 77.413009),
	    	new google.maps.LatLng(28.772501, 77.412281),
	    	new google.maps.LatLng(28.771964, 77.411681),
	    	new google.maps.LatLng(28.771479, 77.411078),
	    	new google.maps.LatLng(28.770992, 77.410477),
	    	new google.maps.LatLng(28.770467, 77.409801),
	    	new google.maps.LatLng(28.770090, 77.408904),
	    	new google.maps.LatLng(28.769657, 77.408103),
	    	new google.maps.LatLng(28.769132, 77.407276),
	    	new google.maps.LatLng(28.768564, 77.406469),
	    	new google.maps.LatLng(28.767980, 77.405745),
	    	new google.maps.LatLng(28.767380, 77.405299),
	    	new google.maps.LatLng(28.766604, 77.405297),
	    	new google.maps.LatLng(28.765838, 77.405200),
	    	new google.maps.LatLng(28.765139, 77.405139),
	    	new google.maps.LatLng(28.764457, 77.405094),
	    	new google.maps.LatLng(28.762816, 77.405142),
	    	new google.maps.LatLng(28.762932, 77.405398),
	    	new google.maps.LatLng(28.762126, 77.405813),
	    	new google.maps.LatLng(28.761344, 77.406215),
	    	new google.maps.LatLng(28.760556, 77.406495),
	    	new google.maps.LatLng(28.759732, 77.406484),
	    	new google.maps.LatLng(28.758910, 77.406228),
	    	new google.maps.LatLng(28.758182, 77.405695),
	    	new google.maps.LatLng(28.757676, 77.405118),
	    	new google.maps.LatLng(28.757039, 77.404346),
	    	new google.maps.LatLng(28.756335, 77.402819),
	    	new google.maps.LatLng(28.755503, 77.403406),
	    	new google.maps.LatLng(28.754665, 77.403242),
	    	new google.maps.LatLng(28.753828, 77.403172),
	    	new google.maps.LatLng(28.752986, 77.403112),
	    	new google.maps.LatLng(28.751266, 77.403355)
	    	];
	    }
	</script>
</script>
@stop
@section('header')
<!-- Intro Section -->
<div id="intro" class="view">

	<div class="mask rgba-black-strong">
		<div class="container-fluid d-flex align-items-center justify-content-center h-100">
			<div class="row d-flex justify-content-center text-center">
				<div class="col-md-10">
					<!-- Heading -->
					<h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Cosmo Green</h2>
					<!-- Divider -->
					<hr class="hr-light">

					<!-- Description -->
					<h4 class="white-text my-4">An Idea to build a Swachh Bharat(Clean India)</h4>
					<button type="button" class="btn btn-outline-white waves-effect waves-light">Read more<i class="fa fa-book ml-2"></i></button>

				</div>
			</div>
		</div>
	</div>
</div>
@include('includes.login_modal')
@stop
<main>
	@section('content')
	<div class="container-fluid wow fadeIn" data-wow-delay="0.3s">
		<div class="row">
			<div class="col-md-9 mb-9 text-center">
				<section>
					<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
						<div class="text-center">
							<h2 class="h1-responsive font-weight-bold my-5">Issues
								<a href="{{ url('issue/create') }}" type="button" class="btn blue-gradient btn-rounded">
									<i class="fa fa-plus"></i>
									Add Issue
								</a>
							</h2>
						</div>

						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-multi" data-slide-to="1"></li>
							<li data-target="#carousel-example-multi" data-slide-to="2"></li>
							<li data-target="#carousel-example-multi" data-slide-to="3"></li>
							<li data-target="#carousel-example-multi" data-slide-to="4"></li>
							<li data-target="#carousel-example-multi" data-slide-to="5"></li>
						</ol>
						<!--/.Indicators-->
						@if(!empty($issues))

						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="col-md-4">
									<!-- Card -->
									<div class="card">
										<!-- Card image -->
										<div class="view overlay">
											<img class="card-img-top" src="{{asset('uploads/'.$issues[0]['image'])}}" alt="Card image cap">
											<a>
												<div class="mask rgba-white-slight"></div>
											</a>
										</div>

										<!-- Button -->
										<a class="btn-floating btn-action ml-auto mr-4" style="background-color: #40bff5" href="{{url('issue/'.$issues[0]['id'])}}"><i class="fas fa-chevron-right pl-1"></i></a>

										<!-- Card content -->
										<div class="card-body">

											<!-- Title -->
											<h4 class="card-title">{{$issues[0]['title']}}</h4>
											<hr>
											<!-- Text -->
											{{-- <p class="card-text">{{$issues[0]['description']}}</p> --}}

										</div>

										<!-- Card footer -->
										<div class="rounded-bottom text-center pt-3" style="background-color: #40bff5">
											<ul class="list-unstyled list-inline font-small">
												<li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>{{date('d/m/y',strtotime($issues[0]['updated_at']))}}</li>
												<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
												<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
												<li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
											</ul>
										</div>

									</div>
									<!-- Card -->
								</div>
							</div>
							@for($i = 1; $i < sizeof($issues); $i++)
							<div class="carousel-item">
								<div class="col-md-4">
									<!-- Card -->
									<div class="card">
										<!-- Card image -->
										<div class="view overlay">
											<img class="card-img-top" src="{{asset('uploads/'.$issues[$i]['image'])}}" alt="Issue Image">
											<a>
												<div class="mask rgba-white-slight"></div>
											</a>
										</div>

										<!-- Button -->
										<a href="{{url('issue/'.$issues[$i]['id'])}}" class="btn-floating btn-action ml-auto mr-4"><i class="fas fa-chevron-right pl-1" style="background-color: #40bff5;"></i></a>

										<!-- Card content -->
										<div class="card-body">

											<!-- Title -->
											<h4 class="card-title">{{$issues[$i]['title']}}</h4>
											<hr>
											<!-- Text -->
											{{-- <p class="card-text">{{$issues[$i]['description']}}</p> --}}

										</div>

										<!-- Card footer -->
										<div class="rounded-bottom text-center pt-3" style="background-color: #40bff5">
											<ul class="list-unstyled list-inline font-small">
												<li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>{{date('d/m/y',strtotime($issues[$i]['updated_at']))}}</li>
												<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
												<li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
												<li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
											</ul>
										</div>

									</div>
									<!-- Card -->
								</div>
							</div>
							@endfor
						</div>
						@endif
					</div>
					<div class="text-center">
						<h2 class="h1-responsive font-weight-bold my-5"><a id="homepage-cta-news" alt="See all News" class="btn btn-info btn-sm waves-effect waves-light" href="{{url('issues')}}" role="button">See all Issues</a> </h2>
					</div>
				</section>
				<hr class="my-5">
				<!-- Section: Blog v.2 -->
				<section class="text-center my-5">
					<!-- Section heading -->
					<h2 class="h1-responsive font-weight-bold my-5">Recent posts<a href="{{ url('blog/create') }}" type="button" class="btn blue-gradient btn-rounded"><i class="fa fa-plus"></i>Write a post</a></h2>
					<!-- Section description -->
					<p class="dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
					qui officia deserunt mollit anim id est laborum.</p>

					<!-- Grid row -->
					<div class="row">
						@foreach($blogs as $blog)
						<!-- Grid column -->
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

							<!-- Featured image -->
							<div class="view overlay rounded z-depth-2 mb-4">
								<img class="img-fluid" src="{{asset('uploads/images/'.$blog->cover_img)}}" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!-- Category -->

							<!-- Post title -->
							<h5 class="font-weight-bold mb-3"><strong>{{$blog->title}}</strong></h5>
							<!-- Post data -->
							<p>by <a class="font-weight-bold">{{$blog->user->name}}</a>, {{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</p>
							<!-- Excerpt -->
							{{-- <p class="dark-grey-text">{{substr(strip_tags($blog->content), 0, 50)}}</p> --}}
							<a href="#!" class="pink-text">
								<h6 class="font-weight-bold mb-3"><i class="fas fa-tag pr-2"></i>@foreach($blog->tags as $tag){{$tag->name}}
								@endforeach</h6>
							</a>
							<!-- Read more button -->
							<a class="btn btn-pink btn-rounded btn-md">Read more</a>

						</div>
						<!-- Grid column -->
						@endforeach
					</div>
					<!-- Grid row -->
					<div class="text-center">
						<h2 class="h1-responsive font-weight-bold my-5"><a id="homepage-cta-news" alt="See all Posts" class="btn btn-info btn-sm waves-effect waves-light" href="{{url('blogs')}}" role="button">See all Posts</a> </h2>
					</div>
				</section>
				<!-- Section: Blog v.2 -->
				<hr class="my-5">
				<!-- Section: Blog v.2 -->
				<section class="text-center my-5">

					@if(Agent::isMobile())
					<div name="airvisual_widget" key="nfrMuFE8EYtjYojZT"></div>
					@else
					<br>
					<div name="airvisual_widget" key="Xr2XrimkdPXynKwkF"></div>
					<br>
					@endif
					<br>
					<script type="text/javascript" src="https://www.airvisual.com/scripts/widget_v2.0.js"></script>
					<div class="card card-body pb-0">
						<table class="table table-sm table-bordered">
							<thead bgcolor="#f0f0f0">
								<tr class="text-center">
									<td><strong>Air Quality Index</strong></td>
									<td><strong>Levels of Health Concern</strong></td>
									<td><strong>Health Implications	</strong></td>
									<td><strong>Recommended Precautions
									</strong></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>0 to 50</td>
									<td bgcolor="#26e400">Good</td>
									<td>No health implications.	</td>
									<td>Everyone can continue their outdoor activities normally.</td>
								</tr>
								<tr>
									<td>51 to 100</td>
									<td bgcolor="#fffd02">Moderate</td>
									<td>Some pollutants may slightly affect very few hypersensitive individuals.	</td>
									<td>Only very few hypersensitive people should reduce outdoor activities.</td>
								</tr>
								<tr>
									<td>101 to 150</td>
									<td bgcolor="#fe7e01" class="text-white">Unhealthy for Sensitive Groups</td>
									<td>Healthy people may experience slight irritations and sensitive individuals will be slightly affected to a larger extent.	</td>
									<td>Children, seniors and individuals with respiratory or heart diseases should reduce sustained and high-intensity outdoor exercises.</td>
								</tr>
								<tr>
									<td>151 to 200</td>
									<td bgcolor="#fd1600" class="text-white">Unhealthy</td>
									<td>Sensitive individuals will experience more serious conditions. The hearts and respiratory systems of healthy people may be affected.	</td>
									<td>Children, seniors and individuals with respiratory or heart diseases should avoid sustained and high-intensity outdoor exercises. General population should moderately reduce outdoor activities.</td>
								</tr>
								<tr>
									<td>0201 to 300</td>
									<td bgcolor="#8f3f97" class="text-white">Very Unhealthy</td>
									<td>Healthy people will commonly show symptoms. People with respiratory or heart diseases will be significantly affected and will experience reduced endurance in activities.	</td>
									<td>Children, seniors and individuals with heart or lung diseases should stay indoors and avoid outdoor activities. General population should reduce outdoor activities.</td>
								</tr>
								<tr>
									<td>301 to 500</td>
									<td bgcolor="#7e0723" class="text-white">Hazardous</td>
									<td>Healthy people will experience reduced endurance in activities and may also show noticeably strong symptoms. Other illnesses may be triggered in healthy people. Elders and the sick should remain indoors and avoid exercise. Healthy individuals should avoid outdoor activities.	</td>
									<td>Children, seniors and the sick should stay indoors and avoid physical exertion. General population should avoid outdoor activities.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
				<hr class="my-5">
				<section>
					<div id="map" style="height: 600px; width: 600px;"></div>
				</section>
			</div>
			<div class="col-md-3 mb-3">
				<section class="section widget-content mt-5">

					<!-- Heading -->
					<h5 class="dark-grey-text font-weight-bold">
						<strong>FEATURED POSTS</strong>
					</h5>
					<hr>

					<div class="card card-body pb-0">
						@foreach ($news as $n)

						<div class="single-post">

							<!-- Grid row -->
							<div class="row">
								<div class="col-4">
									<!-- Image -->
									<div class="view overlay rgba-white-slight">
										<img src="{{ $n->urlToImage }}" class="img-fluid rounded-0" alt="sample image" width="94px">
										<a href="{{ $n->url }}" target="_blank">
											<div class="mask waves-light waves-effect waves-light"></div>
										</a>
									</div>
								</div>

								<!-- Excerpt -->
								<div class="col-8">
									<h6>
										<a href="{{ $n->url }}" target="_blank" class="black-text">
											<strong>{{ $n->title }}</strong>
										</a>
									</h6>

									<div class="post-data">
										<p class="font-small mb-0">
											<i class="far fa-clock-o"></i> {{ $n->publishedAt }}
										</p>
									</div>

								</div>
								<!--/ Excerpt -->
							</div>
							<!--/ Grid row -->
						</div>

						@endforeach

					</div>
				</section>
			</div>	
		</div>
	</div>

	@if(session('msg') || $errors->any())
	<script>
		$(document).ready(function() {
			$('#login_modal').trigger('click');
		});
	</script>
	@endif

	@stop
</main>