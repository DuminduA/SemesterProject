@extends('layouts.master')

@section('contain')
<body>
<br/>
<h1>Orchid Lanka Enterprises Pvt Ltd</h1>
<hr><br/>

<p>In 1990 orchid was established as a moderate sole proprietary enterprise in the Horana Township.
    It was founded by the present chairman Mr. Mahesh Hewawasam and his consort Mrs. Rasanjalee Rajasinghe.
    Today it has grown in to a group of companies with subsidiary companies engages in retail and wholesale distribution of wide spectrum of global and national brands.
    Over the ensuing decades the organization gained distributorship of strong brands owned by major multinational companies and leading manufacturing and importing national organizations. Over the last decade the Group has significantly focused on growth.
    As we look to the future we are committed in our resolve to widen and diversify our product and service portfolio, while giving emphasis on the quality of customer service.</p>
<br/>
<h4>Our mission</h4>
<p>“To provide friendly trustworthy and convenient customer service’’</p>
<br/>
<h4>Our team</h4>
<img src="photos/team.jpg" style="width:500px;height:360px;">
<br/><br/><br/>
<h4>Awards</h4>
<img src="photos/awards.jpg" style="width:600px;height:220px;">
<p><ul> <li>Recognition Award Outstanding Sales Representative 2002/2003</li>
    <li>Merchandising drive 2004/2005 Winner</li>
    <li>Best DSR Gold Award 2005</li>
    <li>Best DSR Top Achiever Colombo South Region 2006</li>
    <li>Service Excellence Award 2007</li>
    <li>Best DSR Top Achiever Runners up Colombo South 2007</li></ul></p>

<br/>
<h4>Contact Us</h4>
<ul><li>Orchid International Pvt Ltd - Stationery Stores <b>0777494949</b></li>
    <li>Atlas Stationery Distribution Center <b>0777753480</b><li/>
    <li>Orchid Lanka Enterprises Pvt Ltd Dialog Distribution Center <b>0773501539</b></li>
</ul>
<br/>
<h5>Our branches</h5><div><div class="row">
    <div class="col s3"><b>main branch</b><br/>175/20,<br/>Anguruwathota Road,<br/>A Horana,<br/>Sri Lanka</div>
    <div class="col s3"><br/>109,<br/> Anguruwathota Road,<br/> Horana,<br/> Sri Lanka</div>
    <div class="col s3"><br/>Havelock Town Colombo 05,<br/>Sri Lanka</div>
    <div class="col s3"><br/>Palm Garden,<br/> Colombo Road,<br/> Ratnapura,<br/> Sri Lanka</div>
</div></div>
<br/>
<div>
    <h5><b>Find us</b></h5>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://privacypolicygenerator.info">privacy policy example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(6.7099195,80.06947949999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.7099195,80.06947949999994)});infowindow = new google.maps.InfoWindow({content:'<strong>Main Branch</strong><br>175/20,Anguruwathota Road, Horana,Sri Lanka. <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

</body>
@endsection