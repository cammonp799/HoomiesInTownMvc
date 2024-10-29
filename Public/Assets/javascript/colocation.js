// Define the size of the marker icon
const icon = L.marker({
  iconSize: [38, 90],
});

// Initialize the map and set the default view
const map = L.map("map").setView([48.8552, 2.3467], 6);

// Add tile layer from OpenStreetMap
const tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

// Array of coordinates for my apartments
let coords = [
  [43.6, 1.433333],
  [48.584614, 7.7507127],
  [49.4938975, 0.1079732],
  [47.2186371, -1.5541362],
  [44.841225, -0.5800364],
  [43.6112422, 3.8767337],
];

// Set apartment area sizes
let areas = ["65 m2", "50 m2", "42,12 m2", "40 m2", "49,19 m2", "52,90 m2"];

// Set number of rooms
let rooms = [3, 2, 3, 2, 3, 3];

// Total number of apartments
let position = coords.length;

// Select elements in the DOM for each apartment button
let appart1 = document.querySelector("#appart1");
let appart2 = document.querySelector("#appart2");
let appart3 = document.querySelector("#appart3");
let appart4 = document.querySelector("#appart4");
let appart5 = document.querySelector("#appart5");
let appart6 = document.querySelector("#appart6");

// Store DOM elements in an array
let nbAppartement = [appart1, appart2, appart3, appart4, appart5, appart6];

// Loop through all apartments and create markers and event listeners
for (let i = 0; i < position; i++) {
  // Create a popup with apartment area and number of rooms
  let pop = L.popup({
    // Close the popup when clicking outside of it
    CloseOnClick: true,
  }).setContent(
    "superficie : " + areas[i] + " " + rooms[i] + " " + "chambres  "
  );

  // Add marker to the map and bind the popup to it
  const marker = L.marker(coords[i]).addTo(map).bindPopup(pop);

  // Add click event to each apartment button to fly to the respective coordinates
  nbAppartement[i].addEventListener("click", () => {
    map.flyTo(coords[i], 16); // Zoom in to the apartment's coordinates with a smooth transition
  });
}
