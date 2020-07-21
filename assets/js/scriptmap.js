var mymap = L.map('map').setView([45.830820, 1.256901], 9);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    minZoom: 9,
    maxZoom: 12,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoic2Ftejg3IiwiYSI6ImNrY3ZwaW81djA2Y3QydHMxbjBoeGlqMWwifQ.E60l2GlN0vwo7c7RPrOeOw'
}).addTo(mymap);
L.marker([45.837425, 1.262095]).addTo(mymap);
L.circle([45.837425, 1.262095], {radius: 20000}).addTo(mymap);