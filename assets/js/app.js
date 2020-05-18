var map = L.map('map-wrapper').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Jackei&copy; <a href="http://jabar.mohammadi.dev@gmail.com">Jabar Mohammadi</a>'
}).addTo(map);
