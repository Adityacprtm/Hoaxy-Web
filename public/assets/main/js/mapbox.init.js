var theme = "light";
const userPrefersDark =
	window.matchMedia &&
	window.matchMedia("(prefers-color-scheme: dark)").matches;

if (userPrefersDark) {
	theme = "dark";
}

mapboxgl.accessToken =
	"pk.eyJ1IjoiYWRpdHlhY3BydG0iLCJhIjoiY2thd2JvcWxnMjJuODJxbXh2cWY5dHl3ayJ9.Wnk9lMcXHr09UdQ-Iicp9Q";
var map = new mapboxgl.Map({
	container: "map",
	style: "mapbox://styles/mapbox/" + theme + "-v10",
	center: [114.74047295804884, -3.42994542196984], // starting position
	zoom: 13 // starting zoom
});

// create the popup
var popup = new mapboxgl.Popup({ offset: 40 }).setText("Banjarbaru, Indonesia");

// create DOM element for the marker
var el = document.createElement("div");
el.id = "marker";

// create the marker
new mapboxgl.Marker(el)
	.setLngLat([114.74047295804884, -3.42994542196984])
	.setPopup(popup) // sets a popup on this marker
	.addTo(map);

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl(), "bottom-right");

// disable map zoom when using scroll
map.scrollZoom.disable();
