!function(e) {
    function t(t) {
        var l=t.find(".marker"),
        s=e(document).width()>580?!0:!1,
        r= {
            zoom:10,
            maxZoom: 15,
            center:new google.maps.LatLng(0, 0),
            mapTypeControl:!1,
            panControl:!1,
            draggable:s,
            scrollwheel:!0,
            zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL, position: google.maps.ControlPosition.RIGHT_BOTTOM},
        },

        a=new google.maps.Map(t[0], r);
        a.markers=[],
        l.each(function() {
            o(e(this), a)
        }),

        n(a)

    }

    function o(e, t) {
        
        var o=new google.maps.LatLng(e.attr("data-lat"), e.attr("data-lng")),
        
        n=e.attr("data-icon"),
        r=e.attr("data-icon"),
        
        a=new google.maps.Marker({
            position: o, 
            map: t, 
            icon: n
        });

        cr_location=new google.maps.LatLng(37.686325, -77.441766),
        cr=new google.maps.Marker({
            position: cr_location, 
            map: t, 
            icon: 'http://charlestonridgeapartments.com/wp-content/themes/charleston-ridge/images/layout/location-pin-cr.png'
        });


        t.markers.push(a, cr),
        e.html()&&(google.maps.event.addListener(a, "click", function() {
            for(var o=0; o<t.markers.length;o++)
            this.setIcon(r), s.setContent(e.html()), s.open(t, this), l.html(e.html())
            cr.setIcon('http://charlestonridgeapartments.com/wp-content/themes/charleston-ridge/images/layout/location-pin-cr.png')
        }), 

        google.maps.event.addListener(t, "click", function(e) {
            s&&(s.close(), a.setIcon(n))
        })
    )};

    function n(t) {
        var o=new google.maps.LatLngBounds;
        e.each(t.markers, function(e, t) {
            var n=new google.maps.LatLng(t.position.lat(), t.position.lng());
            o.extend(n)
        }),

        1==t.markers.length?(t.setCenter(o.getCenter()), t.setZoom(10)):t.fitBounds(o)
    }

    var l=e("#locationsinfo"),
    s=new google.maps.InfoWindow({
        content: ""
    });

    e(document).ready(function() {
        e(".acf-map").each(function() {
            t(e(this))
        });

        e('.tabs a').on('click', function (e) {
          setTimeout(function(){  
            google.maps.event.trigger(map, 'resize');
            center_map( map );
          }, 500);
        });
    });
}

(jQuery);