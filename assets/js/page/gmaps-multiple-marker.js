"use strict";

// initialize map
var map = new GMaps({
  div: '#map',
  lat: -8.7023391,
  lng: 116.2059599,
  zoom: 12
});
// Added markers to the map
map.addMarker({
  lat: -8.6487878,
  lng: 116.2974412,
  title: 'PT. Persada Soka Tama',
  infoWindow: {
    content: '<h6>Desa Aik Darek</h6><p>Jl. Raya Praya Mantang No. 17, Montong Terep ., <br>Kabupaten Lombok Tengah, Nusa Tenggara Barat 83511</p><p><a target="_blank" href="https://persadasokatama.com">Website</a></p>'
  }
});
map.addMarker({
  lat: -6.1325841,
  lng: 106.8116507,
  title: 'Procyon Logikreasi Indonesia',
  infoWindow: {
    content: '<h6>Procyon Logikreasi Indonesia</h6><p>Jl. Kali Besar Tim. No.29C, RT.7/RW.7, Pinangsia, Tamansari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110</p><p><a target="_blank" href="https://procyon.co.id/">Website</a></p>'
  }
});
map.addMarker({
  lat: -6.4462693,
  lng: 106.7654318,
  title: 'Sigma ID',
  infoWindow: {
    content: '<h6>Sigma ID</h6><p>Jl.Setapak No.5, Citayam, Tajur Halang, Bogor, Jawa Barat 16320</p><p><a target="_blank" href="http://sigmaid.net/">Website</a></p>'
  }
});
