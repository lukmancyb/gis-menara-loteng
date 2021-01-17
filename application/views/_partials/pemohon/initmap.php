
<?php $url = $this->uri->uri_string();?>

<?php 
if($url == 'bakti/tambah'|| $this->uri->segment(2) == 'edit'|| $url == 'tower/tambah' || $url == 'blankspot/tambah' || $url == 'bakti/tambah'){;?>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAUkINMHMrcNZLLysL44L8g4FR2_75H3ak&callback=initMap&amp;sensor=true"></script>
<?php }else{ ?>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry,visualization,weather&key=AIzaSyDFY_kt0xcpNKV9a9Z6dvim9HWQ8aPYslg&callback=initMap&libraries=&v=weekly" defer></script>
<?php } ?>