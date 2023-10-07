<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>
    
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_0a1222ec25c27c4539778c2f24934c3c {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
                .leaflet-container { font-size: 1rem; }
            </style>
        
</head>
<body>
    
    
            <div class="folium-map" id="map_0a1222ec25c27c4539778c2f24934c3c" ></div>
        
</body>
<script>
    
    
            var map_0a1222ec25c27c4539778c2f24934c3c = L.map(
                "map_0a1222ec25c27c4539778c2f24934c3c",
                {
                    center: [0.0, 0.0],
                    crs: L.CRS.EPSG3857,
                    zoom: 2,
                    zoomControl: true,
                    preferCanvas: true,
                    lang: "en",
                }
            );
            L.control.scale().addTo(map_0a1222ec25c27c4539778c2f24934c3c);

            

        
    
            var tile_layer_93bca89c771ff18afe73735f1a2b19af = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca target=\"_blank\" href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca target=\"_blank\" href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var marker_bcba140241a85d4f1b1c52da65e14553 = L.marker(
                [15.7, 131.2],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3fda8e8ad760a08f43ffa64c3b3477d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "black", "prefix": "glyphicon"}
            );
            marker_bcba140241a85d4f1b1c52da65e14553.setIcon(icon_3fda8e8ad760a08f43ffa64c3b3477d3);
        
    
        var popup_4d7d91d2284552e87c4894ea7616eba0 = L.popup({"maxWidth": "100%"});

        
            
                var html_5837e3447bbb305b876049e0d5991933 = $(`<div id="html_5837e3447bbb305b876049e0d5991933" style="width: 100.0%; height: 100.0%;"><strong>Typhoon Koinu</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6433" target="_blank">More Info</a></div>`)[0];
                popup_4d7d91d2284552e87c4894ea7616eba0.setContent(html_5837e3447bbb305b876049e0d5991933);
            
        

        marker_bcba140241a85d4f1b1c52da65e14553.bindPopup(popup_4d7d91d2284552e87c4894ea7616eba0)
        ;

        
    
    
            var marker_a8bab0ac0253464c91b133dceb33f7e7 = L.marker(
                [17.4, -45.0],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d8786f73f4af84736f402cace6191215 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "black", "prefix": "glyphicon"}
            );
            marker_a8bab0ac0253464c91b133dceb33f7e7.setIcon(icon_d8786f73f4af84736f402cace6191215);
        
    
        var popup_4d0fa8613f6535cbdbb9f5db6bc9aec4 = L.popup({"maxWidth": "100%"});

        
            
                var html_31a836c842ce2b7d6f7fd15d1af6e546 = $(`<div id="html_31a836c842ce2b7d6f7fd15d1af6e546" style="width: 100.0%; height: 100.0%;"><strong>Tropical Storm Rina</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6432" target="_blank">More Info</a></div>`)[0];
                popup_4d0fa8613f6535cbdbb9f5db6bc9aec4.setContent(html_31a836c842ce2b7d6f7fd15d1af6e546);
            
        

        marker_a8bab0ac0253464c91b133dceb33f7e7.bindPopup(popup_4d0fa8613f6535cbdbb9f5db6bc9aec4)
        ;

        
    
    
            var marker_39cf23647d7a7d592b13b78161f9e738 = L.marker(
                [15.6, -39.7],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1db05cfb5f2ad6d081ddaca26e206b03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "black", "prefix": "glyphicon"}
            );
            marker_39cf23647d7a7d592b13b78161f9e738.setIcon(icon_1db05cfb5f2ad6d081ddaca26e206b03);
        
    
        var popup_1905e51eae76051c32e0cd28f2520665 = L.popup({"maxWidth": "100%"});

        
            
                var html_4a47fd954dfebc87195555fc1f6d7fa6 = $(`<div id="html_4a47fd954dfebc87195555fc1f6d7fa6" style="width: 100.0%; height: 100.0%;"><strong>Tropical Storm Philippe</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6431" target="_blank">More Info</a></div>`)[0];
                popup_1905e51eae76051c32e0cd28f2520665.setContent(html_4a47fd954dfebc87195555fc1f6d7fa6);
            
        

        marker_39cf23647d7a7d592b13b78161f9e738.bindPopup(popup_1905e51eae76051c32e0cd28f2520665)
        ;

        
    
    
            var marker_17b494e576a85aa4d85db81a3ab49e1e = L.marker(
                [15.605, 145.572],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_02664abc9af4fcd2252340d3b4485247 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_17b494e576a85aa4d85db81a3ab49e1e.setIcon(icon_02664abc9af4fcd2252340d3b4485247);
        
    
        var popup_66f9317f53fb744c11e3cbf193ab3a8a = L.popup({"maxWidth": "100%"});

        
            
                var html_9609f57d5645e9269a3327cbb865b197 = $(`<div id="html_9609f57d5645e9269a3327cbb865b197" style="width: 100.0%; height: 100.0%;"><strong>Ruby Submarine Volcano</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6429" target="_blank">More Info</a></div>`)[0];
                popup_66f9317f53fb744c11e3cbf193ab3a8a.setContent(html_9609f57d5645e9269a3327cbb865b197);
            
        

        marker_17b494e576a85aa4d85db81a3ab49e1e.bindPopup(popup_66f9317f53fb744c11e3cbf193ab3a8a)
        ;

        
    
    
            var marker_5e237dc43dba184060552acb6c63b37e = L.marker(
                [19.421, -155.287],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4093c81ef98630b90e51840c5eb68c54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_5e237dc43dba184060552acb6c63b37e.setIcon(icon_4093c81ef98630b90e51840c5eb68c54);
        
    
        var popup_62b4775f3fce671a048d8796bb391f03 = L.popup({"maxWidth": "100%"});

        
            
                var html_6d04dd26dd61cd5e35613732cf127e1c = $(`<div id="html_6d04dd26dd61cd5e35613732cf127e1c" style="width: 100.0%; height: 100.0%;"><strong>Kilauea Volcano, Hawaii</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6425" target="_blank">More Info</a></div>`)[0];
                popup_62b4775f3fce671a048d8796bb391f03.setContent(html_6d04dd26dd61cd5e35613732cf127e1c);
            
        

        marker_5e237dc43dba184060552acb6c63b37e.bindPopup(popup_62b4775f3fce671a048d8796bb391f03)
        ;

        
    
    
            var marker_f2c87dd05f65480a1c8b11d88f8d320b = L.marker(
                [-69.38, 17.14],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9238739ec2c168383b4e90ec9b241e63 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_f2c87dd05f65480a1c8b11d88f8d320b.setIcon(icon_9238739ec2c168383b4e90ec9b241e63);
        
    
        var popup_0b4d6e5f491efb275c73c4a7477f4b66 = L.popup({"maxWidth": "100%"});

        
            
                var html_f29fc35590ee7f3e998f4fbb40bb29f7 = $(`<div id="html_f29fc35590ee7f3e998f4fbb40bb29f7" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D33A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6423" target="_blank">More Info</a></div>`)[0];
                popup_0b4d6e5f491efb275c73c4a7477f4b66.setContent(html_f29fc35590ee7f3e998f4fbb40bb29f7);
            
        

        marker_f2c87dd05f65480a1c8b11d88f8d320b.bindPopup(popup_0b4d6e5f491efb275c73c4a7477f4b66)
        ;

        
    
    
            var marker_497365becb2e4442f02bc6f4201754f0 = L.marker(
                [-69.64, 18.3],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_170fa630e6c5b26835f7653f45d44b29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_497365becb2e4442f02bc6f4201754f0.setIcon(icon_170fa630e6c5b26835f7653f45d44b29);
        
    
        var popup_ce9c52508333039c7507d7d6061cee3f = L.popup({"maxWidth": "100%"});

        
            
                var html_3b6456f8d212916f272680e9bd6bc484 = $(`<div id="html_3b6456f8d212916f272680e9bd6bc484" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D33B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6424" target="_blank">More Info</a></div>`)[0];
                popup_ce9c52508333039c7507d7d6061cee3f.setContent(html_3b6456f8d212916f272680e9bd6bc484);
            
        

        marker_497365becb2e4442f02bc6f4201754f0.bindPopup(popup_ce9c52508333039c7507d7d6061cee3f)
        ;

        
    
    
            var marker_8419f6c7e41e887ee7a3d946d42eaf0d = L.marker(
                [33.2128, -100.3936],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e7d2dc9390b2d8ab3b7bb4c01e8abc54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8419f6c7e41e887ee7a3d946d42eaf0d.setIcon(icon_e7d2dc9390b2d8ab3b7bb4c01e8abc54);
        
    
        var popup_1fdecd7c7583ee98a38971a2a0f3bd56 = L.popup({"maxWidth": "100%"});

        
            
                var html_dafb1b9c31f83e986cde62432962d4a2 = $(`<div id="html_dafb1b9c31f83e986cde62432962d4a2" style="width: 100.0%; height: 100.0%;"><strong>Peacock Fire Information</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6418" target="_blank">More Info</a></div>`)[0];
                popup_1fdecd7c7583ee98a38971a2a0f3bd56.setContent(html_dafb1b9c31f83e986cde62432962d4a2);
            
        

        marker_8419f6c7e41e887ee7a3d946d42eaf0d.bindPopup(popup_1fdecd7c7583ee98a38971a2a0f3bd56)
        ;

        
    
    
            var marker_7c78dc6151d5d1654ab0af717093a2a9 = L.marker(
                [-39.42, -71.93],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_72addba4791f6cb7d189841e15f8dfd8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_7c78dc6151d5d1654ab0af717093a2a9.setIcon(icon_72addba4791f6cb7d189841e15f8dfd8);
        
    
        var popup_74f728cd6c9ed51b5634edf53d149c61 = L.popup({"maxWidth": "100%"});

        
            
                var html_8ba5eddffa0a8aa29641556e26c3eb82 = $(`<div id="html_8ba5eddffa0a8aa29641556e26c3eb82" style="width: 100.0%; height: 100.0%;"><strong>Villarrica Volcano, Chile</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6422" target="_blank">More Info</a></div>`)[0];
                popup_74f728cd6c9ed51b5634edf53d149c61.setContent(html_8ba5eddffa0a8aa29641556e26c3eb82);
            
        

        marker_7c78dc6151d5d1654ab0af717093a2a9.bindPopup(popup_74f728cd6c9ed51b5634edf53d149c61)
        ;

        
    
    
            var marker_57217bd1020480163ca9493dbb27043d = L.marker(
                [47.7369, -123.5278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ecb795ccfd0a1ca83c6c8a791b10ab6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_57217bd1020480163ca9493dbb27043d.setIcon(icon_ecb795ccfd0a1ca83c6c8a791b10ab6c);
        
    
        var popup_9101b74fc068d7a60501b0e2d574155d = L.popup({"maxWidth": "100%"});

        
            
                var html_07ae36072d76c0eaf634b01078d11080 = $(`<div id="html_07ae36072d76c0eaf634b01078d11080" style="width: 100.0%; height: 100.0%;"><strong>Olympic National Park Lightning Fires</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6427" target="_blank">More Info</a></div>`)[0];
                popup_9101b74fc068d7a60501b0e2d574155d.setContent(html_07ae36072d76c0eaf634b01078d11080);
            
        

        marker_57217bd1020480163ca9493dbb27043d.bindPopup(popup_9101b74fc068d7a60501b0e2d574155d)
        ;

        
    
    
            var marker_2e72c9e8dc438403747c0ce663b5f5f9 = L.marker(
                [42.5158, -124.0372],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ff051cfa770e5a39eee97671034c90ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2e72c9e8dc438403747c0ce663b5f5f9.setIcon(icon_ff051cfa770e5a39eee97671034c90ce);
        
    
        var popup_39a746127f2abf294a4d042d9247c627 = L.popup({"maxWidth": "100%"});

        
            
                var html_e67e8e3d7a921ae418770cded4fd37a3 = $(`<div id="html_e67e8e3d7a921ae418770cded4fd37a3" style="width: 100.0%; height: 100.0%;"><strong>Flat Fire Information</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6388" target="_blank">More Info</a></div>`)[0];
                popup_39a746127f2abf294a4d042d9247c627.setContent(html_e67e8e3d7a921ae418770cded4fd37a3);
            
        

        marker_2e72c9e8dc438403747c0ce663b5f5f9.bindPopup(popup_39a746127f2abf294a4d042d9247c627)
        ;

        
    
    
            var marker_9cbf7bc32f73cafc8ab96b413ce577cf = L.marker(
                [65.756, -163.97],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_eb820a63f68a999d386e7910e89fa586 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_9cbf7bc32f73cafc8ab96b413ce577cf.setIcon(icon_eb820a63f68a999d386e7910e89fa586);
        
    
        var popup_b7ca5b6a8183dbf8f29cd8d9bcac4151 = L.popup({"maxWidth": "100%"});

        
            
                var html_cfcbd9ce91a0f8c13f3c3f3d7cc064ee = $(`<div id="html_cfcbd9ce91a0f8c13f3c3f3d7cc064ee" style="width: 100.0%; height: 100.0%;"><strong>Shishaldin Volcano, Alaska</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6393" target="_blank">More Info</a></div>`)[0];
                popup_b7ca5b6a8183dbf8f29cd8d9bcac4151.setContent(html_cfcbd9ce91a0f8c13f3c3f3d7cc064ee);
            
        

        marker_9cbf7bc32f73cafc8ab96b413ce577cf.bindPopup(popup_b7ca5b6a8183dbf8f29cd8d9bcac4151)
        ;

        
    
    
            var marker_a3dc0f0c6199c8992eb4205a002a9ff8 = L.marker(
                [-6.137, 155.196],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0e04df1efb1f130bbcd72309abefd218 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_a3dc0f0c6199c8992eb4205a002a9ff8.setIcon(icon_0e04df1efb1f130bbcd72309abefd218);
        
    
        var popup_4ef1600dc93a128bec3baf5192699a76 = L.popup({"maxWidth": "100%"});

        
            
                var html_ec9b7898c69ba470dad34e69325c5cd4 = $(`<div id="html_ec9b7898c69ba470dad34e69325c5cd4" style="width: 100.0%; height: 100.0%;"><strong>Bagana Volcano, Papua New Guinea</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6379" target="_blank">More Info</a></div>`)[0];
                popup_4ef1600dc93a128bec3baf5192699a76.setContent(html_ec9b7898c69ba470dad34e69325c5cd4);
            
        

        marker_a3dc0f0c6199c8992eb4205a002a9ff8.bindPopup(popup_4ef1600dc93a128bec3baf5192699a76)
        ;

        
    
    
            var marker_b5ff4ea952aff13caa71b51c644bbd2e = L.marker(
                [56.056, 160.642],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d083206093aeeb4472cd7d7eab5b037d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_b5ff4ea952aff13caa71b51c644bbd2e.setIcon(icon_d083206093aeeb4472cd7d7eab5b037d);
        
    
        var popup_c3fa9cfd3fbf043aa396b3b6c12d6bf4 = L.popup({"maxWidth": "100%"});

        
            
                var html_8e2889c58df1ad5a01b4f1a240768113 = $(`<div id="html_8e2889c58df1ad5a01b4f1a240768113" style="width: 100.0%; height: 100.0%;"><strong>Klyuchevskoy Volcano, Russia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6381" target="_blank">More Info</a></div>`)[0];
                popup_c3fa9cfd3fbf043aa396b3b6c12d6bf4.setContent(html_8e2889c58df1ad5a01b4f1a240768113);
            
        

        marker_b5ff4ea952aff13caa71b51c644bbd2e.bindPopup(popup_c3fa9cfd3fbf043aa396b3b6c12d6bf4)
        ;

        
    
    
            var marker_e3f591fd4dc524cb778e7f391140fe15 = L.marker(
                [56.653, 161.36],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_fd6ec6f2240353b6b2c2fb6867f9b7e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_e3f591fd4dc524cb778e7f391140fe15.setIcon(icon_fd6ec6f2240353b6b2c2fb6867f9b7e9);
        
    
        var popup_110cdb2f5b175e96a471be7608da1bf0 = L.popup({"maxWidth": "100%"});

        
            
                var html_87dc533f1f662b0e9a3676fd4351fd65 = $(`<div id="html_87dc533f1f662b0e9a3676fd4351fd65" style="width: 100.0%; height: 100.0%;"><strong>Sheveluch Volcano, Russia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6386" target="_blank">More Info</a></div>`)[0];
                popup_110cdb2f5b175e96a471be7608da1bf0.setContent(html_87dc533f1f662b0e9a3676fd4351fd65);
            
        

        marker_e3f591fd4dc524cb778e7f391140fe15.bindPopup(popup_110cdb2f5b175e96a471be7608da1bf0)
        ;

        
    
    
            var marker_8ac97977ea76c66fca232c4833c1fa6e = L.marker(
                [-16.355, -70.903],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d424c8ec3d27fb9d96d3fc822c8008d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_8ac97977ea76c66fca232c4833c1fa6e.setIcon(icon_d424c8ec3d27fb9d96d3fc822c8008d0);
        
    
        var popup_743ae09e56c78b8c6581b014fefcec63 = L.popup({"maxWidth": "100%"});

        
            
                var html_ccb34bcbefa357b547930dbec01e4838 = $(`<div id="html_ccb34bcbefa357b547930dbec01e4838" style="width: 100.0%; height: 100.0%;"><strong>Ubinas Volcano, Peru</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6377" target="_blank">More Info</a></div>`)[0];
                popup_743ae09e56c78b8c6581b014fefcec63.setContent(html_ccb34bcbefa357b547930dbec01e4838);
            
        

        marker_8ac97977ea76c66fca232c4833c1fa6e.bindPopup(popup_743ae09e56c78b8c6581b014fefcec63)
        ;

        
    
    
            var marker_9e6237582837aff428e38dffe13dba20 = L.marker(
                [13.257, 123.685],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_61a169b0e51910a2d6b2cf60710ba681 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_9e6237582837aff428e38dffe13dba20.setIcon(icon_61a169b0e51910a2d6b2cf60710ba681);
        
    
        var popup_f84561d0c8ba1ea9d6bedd4e50f0757a = L.popup({"maxWidth": "100%"});

        
            
                var html_6d4167dc2224a857a1e11ba1fb5c426c = $(`<div id="html_6d4167dc2224a857a1e11ba1fb5c426c" style="width: 100.0%; height: 100.0%;"><strong>Mayon Volcano, Philippines</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6375" target="_blank">More Info</a></div>`)[0];
                popup_f84561d0c8ba1ea9d6bedd4e50f0757a.setContent(html_6d4167dc2224a857a1e11ba1fb5c426c);
            
        

        marker_9e6237582837aff428e38dffe13dba20.bindPopup(popup_f84561d0c8ba1ea9d6bedd4e50f0757a)
        ;

        
    
    
            var marker_e19e0336c7617c86eeb28ef2da92727d = L.marker(
                [1.488, 127.63],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8aee39b501b0ba0607ac485938083636 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_e19e0336c7617c86eeb28ef2da92727d.setIcon(icon_8aee39b501b0ba0607ac485938083636);
        
    
        var popup_76c0c9841dd5eeb6498d945e36a57533 = L.popup({"maxWidth": "100%"});

        
            
                var html_45a1e6fbe8b3d8d9cfd101b1aa0b2d21 = $(`<div id="html_45a1e6fbe8b3d8d9cfd101b1aa0b2d21" style="width: 100.0%; height: 100.0%;"><strong>Ibu Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6369" target="_blank">More Info</a></div>`)[0];
                popup_76c0c9841dd5eeb6498d945e36a57533.setContent(html_45a1e6fbe8b3d8d9cfd101b1aa0b2d21);
            
        

        marker_e19e0336c7617c86eeb28ef2da92727d.bindPopup(popup_76c0c9841dd5eeb6498d945e36a57533)
        ;

        
    
    
            var marker_8131a135d79bf7ec087d4fdb76c2ae96 = L.marker(
                [34.551083, -111.466806],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c7050dc99ee8b0344742199d8a76a810 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8131a135d79bf7ec087d4fdb76c2ae96.setIcon(icon_c7050dc99ee8b0344742199d8a76a810);
        
    
        var popup_a8cd4e38b29711fd5d4803b1502e2d5c = L.popup({"maxWidth": "100%"});

        
            
                var html_6583db899bb4346a497e14785ccd598d = $(`<div id="html_6583db899bb4346a497e14785ccd598d" style="width: 100.0%; height: 100.0%;"><strong>Wilbur Fire, Arizona</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6370" target="_blank">More Info</a></div>`)[0];
                popup_a8cd4e38b29711fd5d4803b1502e2d5c.setContent(html_6583db899bb4346a497e14785ccd598d);
            
        

        marker_8131a135d79bf7ec087d4fdb76c2ae96.bindPopup(popup_a8cd4e38b29711fd5d4803b1502e2d5c)
        ;

        
    
    
            var marker_fe54e79e889bbde93f0563da8d490fdb = L.marker(
                [-55.21, -39.22],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c579a765c184f9cd7d54cdbf2b11ff6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_fe54e79e889bbde93f0563da8d490fdb.setIcon(icon_c579a765c184f9cd7d54cdbf2b11ff6a);
        
    
        var popup_57561e5151769458a1d9278666e766dd = L.popup({"maxWidth": "100%"});

        
            
                var html_98c6f0d17c069c0c2b1ab3ea70a7c0de = $(`<div id="html_98c6f0d17c069c0c2b1ab3ea70a7c0de" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76F</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6355" target="_blank">More Info</a></div>`)[0];
                popup_57561e5151769458a1d9278666e766dd.setContent(html_98c6f0d17c069c0c2b1ab3ea70a7c0de);
            
        

        marker_fe54e79e889bbde93f0563da8d490fdb.bindPopup(popup_57561e5151769458a1d9278666e766dd)
        ;

        
    
    
            var marker_ae5aeba4cd553feeb4e27ff2e923cbda = L.marker(
                [-54.1, -40.22],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a5715230ba8220edb68faaeb20d47fca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_ae5aeba4cd553feeb4e27ff2e923cbda.setIcon(icon_a5715230ba8220edb68faaeb20d47fca);
        
    
        var popup_ae64b63906bd844fca707785c62e1242 = L.popup({"maxWidth": "100%"});

        
            
                var html_1f61efaf77997326b52a9b75503961de = $(`<div id="html_1f61efaf77997326b52a9b75503961de" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76G</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6356" target="_blank">More Info</a></div>`)[0];
                popup_ae64b63906bd844fca707785c62e1242.setContent(html_1f61efaf77997326b52a9b75503961de);
            
        

        marker_ae5aeba4cd553feeb4e27ff2e923cbda.bindPopup(popup_ae64b63906bd844fca707785c62e1242)
        ;

        
    
    
            var marker_c1a5f745ed18c77a6d679d3042b74247 = L.marker(
                [-54.84, -39.09],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_794db0693907e7f3abc65da6a3b42803 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_c1a5f745ed18c77a6d679d3042b74247.setIcon(icon_794db0693907e7f3abc65da6a3b42803);
        
    
        var popup_c3a1cea597379a97a1aa8393aa6570aa = L.popup({"maxWidth": "100%"});

        
            
                var html_1e70f7dbbd1e340de593c7dfec613072 = $(`<div id="html_1e70f7dbbd1e340de593c7dfec613072" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76H</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6357" target="_blank">More Info</a></div>`)[0];
                popup_c3a1cea597379a97a1aa8393aa6570aa.setContent(html_1e70f7dbbd1e340de593c7dfec613072);
            
        

        marker_c1a5f745ed18c77a6d679d3042b74247.bindPopup(popup_c3a1cea597379a97a1aa8393aa6570aa)
        ;

        
    
    
            var marker_38725899a2c30e2da169f78651a20466 = L.marker(
                [-54.14, -39.77],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bc71a86164bb875954ebd5b15465989f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_38725899a2c30e2da169f78651a20466.setIcon(icon_bc71a86164bb875954ebd5b15465989f);
        
    
        var popup_e0cebe5b9cbd36d6d1be40a674229f15 = L.popup({"maxWidth": "100%"});

        
            
                var html_4aef7491541fe55049f6f2a972b502d3 = $(`<div id="html_4aef7491541fe55049f6f2a972b502d3" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76J</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6358" target="_blank">More Info</a></div>`)[0];
                popup_e0cebe5b9cbd36d6d1be40a674229f15.setContent(html_4aef7491541fe55049f6f2a972b502d3);
            
        

        marker_38725899a2c30e2da169f78651a20466.bindPopup(popup_e0cebe5b9cbd36d6d1be40a674229f15)
        ;

        
    
    
            var marker_598a8fcbf4c07d9b2706397e7c7a2609 = L.marker(
                [-54.61, -38.62],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1c6047ea639998002bad1eb9d006ca02 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_598a8fcbf4c07d9b2706397e7c7a2609.setIcon(icon_1c6047ea639998002bad1eb9d006ca02);
        
    
        var popup_309de4d1c96df3422a22840ebde0a1ad = L.popup({"maxWidth": "100%"});

        
            
                var html_a0af0ac3e991707aebea91143b888043 = $(`<div id="html_a0af0ac3e991707aebea91143b888043" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76K</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6359" target="_blank">More Info</a></div>`)[0];
                popup_309de4d1c96df3422a22840ebde0a1ad.setContent(html_a0af0ac3e991707aebea91143b888043);
            
        

        marker_598a8fcbf4c07d9b2706397e7c7a2609.bindPopup(popup_309de4d1c96df3422a22840ebde0a1ad)
        ;

        
    
    
            var marker_3f08e0f405b43cc23c09d3525ab68d4b = L.marker(
                [-55.1, -38.77],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_65c609b7c3c0be8df9a048115ed52215 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_3f08e0f405b43cc23c09d3525ab68d4b.setIcon(icon_65c609b7c3c0be8df9a048115ed52215);
        
    
        var popup_8de7f6c383722735678971ec2bd5d65e = L.popup({"maxWidth": "100%"});

        
            
                var html_5e62a99532f64e3e61e263381db1ac62 = $(`<div id="html_5e62a99532f64e3e61e263381db1ac62" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76L</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6360" target="_blank">More Info</a></div>`)[0];
                popup_8de7f6c383722735678971ec2bd5d65e.setContent(html_5e62a99532f64e3e61e263381db1ac62);
            
        

        marker_3f08e0f405b43cc23c09d3525ab68d4b.bindPopup(popup_8de7f6c383722735678971ec2bd5d65e)
        ;

        
    
    
            var marker_0257bbcea3185c0e897a80b69e6e280f = L.marker(
                [-54.55, -41.69],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_91bfa0e1670f5855f58936166807c48d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_0257bbcea3185c0e897a80b69e6e280f.setIcon(icon_91bfa0e1670f5855f58936166807c48d);
        
    
        var popup_c751635d46bdb09a0548ea50dd621b70 = L.popup({"maxWidth": "100%"});

        
            
                var html_54039dff22ce27d2729f9ee3f7c4ed07 = $(`<div id="html_54039dff22ce27d2729f9ee3f7c4ed07" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76D</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6347" target="_blank">More Info</a></div>`)[0];
                popup_c751635d46bdb09a0548ea50dd621b70.setContent(html_54039dff22ce27d2729f9ee3f7c4ed07);
            
        

        marker_0257bbcea3185c0e897a80b69e6e280f.bindPopup(popup_c751635d46bdb09a0548ea50dd621b70)
        ;

        
    
    
            var marker_bca3515104f51ed61022756187475caf = L.marker(
                [29.229722, -81.688889],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_23c5daad97ae0aca610e9be8902956fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_bca3515104f51ed61022756187475caf.setIcon(icon_23c5daad97ae0aca610e9be8902956fa);
        
    
        var popup_28984815d30c3eff7786617042ba450a = L.popup({"maxWidth": "100%"});

        
            
                var html_db78adb8e625b73de66ab636ef5ac844 = $(`<div id="html_db78adb8e625b73de66ab636ef5ac844" style="width: 100.0%; height: 100.0%;"><strong>Major Fire, Ocala National Forest, Florida, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6350" target="_blank">More Info</a></div>`)[0];
                popup_28984815d30c3eff7786617042ba450a.setContent(html_db78adb8e625b73de66ab636ef5ac844);
            
        

        marker_bca3515104f51ed61022756187475caf.bindPopup(popup_28984815d30c3eff7786617042ba450a)
        ;

        
    
    
            var marker_cdd642f2cd61704239ea18ec5e1bcb41 = L.marker(
                [10.83, -85.324],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2a42d8aa00e8ce5c1536a145d1324912 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_cdd642f2cd61704239ea18ec5e1bcb41.setIcon(icon_2a42d8aa00e8ce5c1536a145d1324912);
        
    
        var popup_e6872b8f4830b33fdd885abc9d9d0679 = L.popup({"maxWidth": "100%"});

        
            
                var html_6095c235f98a626b124200a48e764cbf = $(`<div id="html_6095c235f98a626b124200a48e764cbf" style="width: 100.0%; height: 100.0%;"><strong>Rincon de la Vieja Volcano, Costa Rica</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6345" target="_blank">More Info</a></div>`)[0];
                popup_e6872b8f4830b33fdd885abc9d9d0679.setContent(html_6095c235f98a626b124200a48e764cbf);
            
        

        marker_cdd642f2cd61704239ea18ec5e1bcb41.bindPopup(popup_e6872b8f4830b33fdd885abc9d9d0679)
        ;

        
    
    
            var marker_b871c3029467a28f7d97f1acbaf15dce = L.marker(
                [34.870158, -77.051228],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f547025ecabf536a66be2cfead1c9496 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b871c3029467a28f7d97f1acbaf15dce.setIcon(icon_f547025ecabf536a66be2cfead1c9496);
        
    
        var popup_35d80772301d31e6f56d088d31ba59a2 = L.popup({"maxWidth": "100%"});

        
            
                var html_54befb5c48df256f882b4b2c6a328d72 = $(`<div id="html_54befb5c48df256f882b4b2c6a328d72" style="width: 100.0%; height: 100.0%;"><strong>Great Lake Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6343" target="_blank">More Info</a></div>`)[0];
                popup_35d80772301d31e6f56d088d31ba59a2.setContent(html_54befb5c48df256f882b4b2c6a328d72);
            
        

        marker_b871c3029467a28f7d97f1acbaf15dce.bindPopup(popup_35d80772301d31e6f56d088d31ba59a2)
        ;

        
    
    
            var marker_dc6aff6f1ad996b9377f0dd57fc60e77 = L.marker(
                [-72.19, -59.34],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_36c3338e554189dcf1c034c239619ab4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_dc6aff6f1ad996b9377f0dd57fc60e77.setIcon(icon_36c3338e554189dcf1c034c239619ab4);
        
    
        var popup_df5adfce6e7ac6a0bb6c367655e05f0a = L.popup({"maxWidth": "100%"});

        
            
                var html_220481f4c9b59fe5469b6997cb05df93 = $(`<div id="html_220481f4c9b59fe5469b6997cb05df93" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A80D</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6330" target="_blank">More Info</a></div>`)[0];
                popup_df5adfce6e7ac6a0bb6c367655e05f0a.setContent(html_220481f4c9b59fe5469b6997cb05df93);
            
        

        marker_dc6aff6f1ad996b9377f0dd57fc60e77.bindPopup(popup_df5adfce6e7ac6a0bb6c367655e05f0a)
        ;

        
    
    
            var marker_e648a62a4bf82f4079364174c2e14e41 = L.marker(
                [2.781, 125.407],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b99c281280c6b7779ffb2d5e69334f96 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_e648a62a4bf82f4079364174c2e14e41.setIcon(icon_b99c281280c6b7779ffb2d5e69334f96);
        
    
        var popup_f775749d8d979d811c3200b20631f792 = L.popup({"maxWidth": "100%"});

        
            
                var html_896141315762c20ddc145c6c5c930dc6 = $(`<div id="html_896141315762c20ddc145c6c5c930dc6" style="width: 100.0%; height: 100.0%;"><strong>Karangetang Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6326" target="_blank">More Info</a></div>`)[0];
                popup_f775749d8d979d811c3200b20631f792.setContent(html_896141315762c20ddc145c6c5c930dc6);
            
        

        marker_e648a62a4bf82f4079364174c2e14e41.bindPopup(popup_f775749d8d979d811c3200b20631f792)
        ;

        
    
    
            var marker_51724476104f6d8664bf2158cb2698a7 = L.marker(
                [-75.66, -27.16],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_90c1c3904d446b9e03098fc5e7f0a386 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_51724476104f6d8664bf2158cb2698a7.setIcon(icon_90c1c3904d446b9e03098fc5e7f0a386);
        
    
        var popup_5d35b662ea4f86d9fae1f65db4159c0b = L.popup({"maxWidth": "100%"});

        
            
                var html_a965a75ed363624c6209270010b46991 = $(`<div id="html_a965a75ed363624c6209270010b46991" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A81</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6320" target="_blank">More Info</a></div>`)[0];
                popup_5d35b662ea4f86d9fae1f65db4159c0b.setContent(html_a965a75ed363624c6209270010b46991);
            
        

        marker_51724476104f6d8664bf2158cb2698a7.bindPopup(popup_5d35b662ea4f86d9fae1f65db4159c0b)
        ;

        
    
    
            var marker_23d4ff366a30a9d9569e349f6fae01ef = L.marker(
                [-8.272, 123.505],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_789f33e21ffdacb6b847c81d493bbcc4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_23d4ff366a30a9d9569e349f6fae01ef.setIcon(icon_789f33e21ffdacb6b847c81d493bbcc4);
        
    
        var popup_f8126e77d08c3841b3bcac85e6805a29 = L.popup({"maxWidth": "100%"});

        
            
                var html_8586abb898c491364d5a0fef99fd8979 = $(`<div id="html_8586abb898c491364d5a0fef99fd8979" style="width: 100.0%; height: 100.0%;"><strong>Lewotolok Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6319" target="_blank">More Info</a></div>`)[0];
                popup_f8126e77d08c3841b3bcac85e6805a29.setContent(html_8586abb898c491364d5a0fef99fd8979);
            
        

        marker_23d4ff366a30a9d9569e349f6fae01ef.bindPopup(popup_f8126e77d08c3841b3bcac85e6805a29)
        ;

        
    
    
            var marker_da80eb9f3f73e60ad3fe401b9e4907d0 = L.marker(
                [4.892, -75.324],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_54953d58c077da6fd3ad618ff1b3c3e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_da80eb9f3f73e60ad3fe401b9e4907d0.setIcon(icon_54953d58c077da6fd3ad618ff1b3c3e1);
        
    
        var popup_2b8ca8ff17af40fa8e7f4e50209da766 = L.popup({"maxWidth": "100%"});

        
            
                var html_164af33c8d64826ce8c78ce374b0199b = $(`<div id="html_164af33c8d64826ce8c78ce374b0199b" style="width: 100.0%; height: 100.0%;"><strong>Nevado del Ruiz Volcano, Colombia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6309" target="_blank">More Info</a></div>`)[0];
                popup_2b8ca8ff17af40fa8e7f4e50209da766.setContent(html_164af33c8d64826ce8c78ce374b0199b);
            
        

        marker_da80eb9f3f73e60ad3fe401b9e4907d0.bindPopup(popup_2b8ca8ff17af40fa8e7f4e50209da766)
        ;

        
    
    
            var marker_dcb7c150e67329262254752f1ee70e51 = L.marker(
                [-71.77, -60.27],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e4ff3232658b975ea52d671a8747ef5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_dcb7c150e67329262254752f1ee70e51.setIcon(icon_e4ff3232658b975ea52d671a8747ef5c);
        
    
        var popup_8ea6ac50aacad129b9b3a07851ccbcd6 = L.popup({"maxWidth": "100%"});

        
            
                var html_34ada6b710614a2ac8ad126d5d9faa69 = $(`<div id="html_34ada6b710614a2ac8ad126d5d9faa69" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A80A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6302" target="_blank">More Info</a></div>`)[0];
                popup_8ea6ac50aacad129b9b3a07851ccbcd6.setContent(html_34ada6b710614a2ac8ad126d5d9faa69);
            
        

        marker_dcb7c150e67329262254752f1ee70e51.bindPopup(popup_8ea6ac50aacad129b9b3a07851ccbcd6)
        ;

        
    
    
            var marker_8d35dff11fc2371874288562e9fa3b1c = L.marker(
                [-6.102, 105.423],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b27d44c48a331c350101bb1f9da5ed96 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_8d35dff11fc2371874288562e9fa3b1c.setIcon(icon_b27d44c48a331c350101bb1f9da5ed96);
        
    
        var popup_e97471065a05438523c6e47b6824c788 = L.popup({"maxWidth": "100%"});

        
            
                var html_ce64f6fa310837262761f5b7e621f12e = $(`<div id="html_ce64f6fa310837262761f5b7e621f12e" style="width: 100.0%; height: 100.0%;"><strong>Krakatau Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6296" target="_blank">More Info</a></div>`)[0];
                popup_e97471065a05438523c6e47b6824c788.setContent(html_ce64f6fa310837262761f5b7e621f12e);
            
        

        marker_8d35dff11fc2371874288562e9fa3b1c.bindPopup(popup_e97471065a05438523c6e47b6824c788)
        ;

        
    
    
            var marker_132cc9bf3c29b19e6d9fc95b31c759c4 = L.marker(
                [-68.36, 70.68],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0ad3e696a2373de7856bf8b777ab790b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_132cc9bf3c29b19e6d9fc95b31c759c4.setIcon(icon_0ad3e696a2373de7856bf8b777ab790b);
        
    
        var popup_0c5c8f23c347120e79d1beec1381e04b = L.popup({"maxWidth": "100%"});

        
            
                var html_f06bee21fa5ef3156dfdc741b439fec0 = $(`<div id="html_f06bee21fa5ef3156dfdc741b439fec0" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D32</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6288" target="_blank">More Info</a></div>`)[0];
                popup_0c5c8f23c347120e79d1beec1381e04b.setContent(html_f06bee21fa5ef3156dfdc741b439fec0);
            
        

        marker_132cc9bf3c29b19e6d9fc95b31c759c4.bindPopup(popup_0c5c8f23c347120e79d1beec1381e04b)
        ;

        
    
    
            var marker_cfbecfea0a0616b9ef846d655a36caea = L.marker(
                [45.696, -122.281],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_881977e7cd98ee1c8370cff25c990bda = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cfbecfea0a0616b9ef846d655a36caea.setIcon(icon_881977e7cd98ee1c8370cff25c990bda);
        
    
        var popup_dc75f16ac092360fabecf16522c798c5 = L.popup({"maxWidth": "100%"});

        
            
                var html_ee95bd4e29f638046d8fc839e00d57fd = $(`<div id="html_ee95bd4e29f638046d8fc839e00d57fd" style="width: 100.0%; height: 100.0%;"><strong>Nakia Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6280" target="_blank">More Info</a></div>`)[0];
                popup_dc75f16ac092360fabecf16522c798c5.setContent(html_ee95bd4e29f638046d8fc839e00d57fd);
            
        

        marker_cfbecfea0a0616b9ef846d655a36caea.bindPopup(popup_dc75f16ac092360fabecf16522c798c5)
        ;

        
    
    
            var marker_c15b7b536786fb1b463aa48781c1dea0 = L.marker(
                [41.869, -100.31],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7977f1f207802f8db2fbedf6510258b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c15b7b536786fb1b463aa48781c1dea0.setIcon(icon_7977f1f207802f8db2fbedf6510258b0);
        
    
        var popup_02b4d6880cb25e81ef2896fa5617f996 = L.popup({"maxWidth": "100%"});

        
            
                var html_aefef38b6e5b3718a8695d76cd630c5f = $(`<div id="html_aefef38b6e5b3718a8695d76cd630c5f" style="width: 100.0%; height: 100.0%;"><strong>Bovee Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6269" target="_blank">More Info</a></div>`)[0];
                popup_02b4d6880cb25e81ef2896fa5617f996.setContent(html_aefef38b6e5b3718a8695d76cd630c5f);
            
        

        marker_c15b7b536786fb1b463aa48781c1dea0.bindPopup(popup_02b4d6880cb25e81ef2896fa5617f996)
        ;

        
    
    
            var marker_d97c70ea1afb16855070f7b3cbbf2713 = L.marker(
                [45.944, -122.089],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_68ed99254dbd04cf6d5799c2ae2f3c82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d97c70ea1afb16855070f7b3cbbf2713.setIcon(icon_68ed99254dbd04cf6d5799c2ae2f3c82);
        
    
        var popup_7f8da0eee3f5b1b7cf6fc1f661f96460 = L.popup({"maxWidth": "100%"});

        
            
                var html_e4d84a6374d9379305abb79b17d3c9fc = $(`<div id="html_e4d84a6374d9379305abb79b17d3c9fc" style="width: 100.0%; height: 100.0%;"><strong>Siouxon Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6283" target="_blank">More Info</a></div>`)[0];
                popup_7f8da0eee3f5b1b7cf6fc1f661f96460.setContent(html_e4d84a6374d9379305abb79b17d3c9fc);
            
        

        marker_d97c70ea1afb16855070f7b3cbbf2713.bindPopup(popup_7f8da0eee3f5b1b7cf6fc1f661f96460)
        ;

        
    
    
            var marker_6e4c75ff0d28d0b20f615e4f8bb3a656 = L.marker(
                [47.728, -121.346],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4fc4644436ba9a8c9abc00cfa0f93fe2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6e4c75ff0d28d0b20f615e4f8bb3a656.setIcon(icon_4fc4644436ba9a8c9abc00cfa0f93fe2);
        
    
        var popup_bf4d9a26af722ad2ab4d0a23c44f6b6e = L.popup({"maxWidth": "100%"});

        
            
                var html_8343d4d13ed19cd61ceddc1ad0475333 = $(`<div id="html_8343d4d13ed19cd61ceddc1ad0475333" style="width: 100.0%; height: 100.0%;"><strong>Bolt Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6246" target="_blank">More Info</a></div>`)[0];
                popup_bf4d9a26af722ad2ab4d0a23c44f6b6e.setContent(html_8343d4d13ed19cd61ceddc1ad0475333);
            
        

        marker_6e4c75ff0d28d0b20f615e4f8bb3a656.bindPopup(popup_bf4d9a26af722ad2ab4d0a23c44f6b6e)
        ;

        
    
    
            var marker_ee03b10168f8464fde9b5a9e8a7e0488 = L.marker(
                [48.139, -109.682],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7edaf540a09fe786532ffd8a69e1bed1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ee03b10168f8464fde9b5a9e8a7e0488.setIcon(icon_7edaf540a09fe786532ffd8a69e1bed1);
        
    
        var popup_1cafbbf9b9fb502123a23c9013bac458 = L.popup({"maxWidth": "100%"});

        
            
                var html_a111835963cd71b174c66b1d2b153881 = $(`<div id="html_a111835963cd71b174c66b1d2b153881" style="width: 100.0%; height: 100.0%;"><strong>Eagle Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6242" target="_blank">More Info</a></div>`)[0];
                popup_1cafbbf9b9fb502123a23c9013bac458.setContent(html_a111835963cd71b174c66b1d2b153881);
            
        

        marker_ee03b10168f8464fde9b5a9e8a7e0488.bindPopup(popup_1cafbbf9b9fb502123a23c9013bac458)
        ;

        
    
    
            var marker_9d40a3436483913276a45339613fc1a6 = L.marker(
                [39.01, -120.719],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_862c1f81c1afaa62826c2b9fdd633587 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9d40a3436483913276a45339613fc1a6.setIcon(icon_862c1f81c1afaa62826c2b9fdd633587);
        
    
        var popup_69c525bf349bd3765dc03929db12f882 = L.popup({"maxWidth": "100%"});

        
            
                var html_aba0f558ac638fdaeb4d5e71a535a488 = $(`<div id="html_aba0f558ac638fdaeb4d5e71a535a488" style="width: 100.0%; height: 100.0%;"><strong>Mosquito Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6225" target="_blank">More Info</a></div>`)[0];
                popup_69c525bf349bd3765dc03929db12f882.setContent(html_aba0f558ac638fdaeb4d5e71a535a488);
            
        

        marker_9d40a3436483913276a45339613fc1a6.bindPopup(popup_69c525bf349bd3765dc03929db12f882)
        ;

        
    
    
            var marker_810da832a670c61d181dd52d6392f706 = L.marker(
                [42.989, -109.138],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c72be7bdf1539dbf82971c2b28eb8817 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_810da832a670c61d181dd52d6392f706.setIcon(icon_c72be7bdf1539dbf82971c2b28eb8817);
        
    
        var popup_b517cfab4e601e5f454682b2e70a7769 = L.popup({"maxWidth": "100%"});

        
            
                var html_453180ca10e0c925f06614812d3fb439 = $(`<div id="html_453180ca10e0c925f06614812d3fb439" style="width: 100.0%; height: 100.0%;"><strong>Washakie Park Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6241" target="_blank">More Info</a></div>`)[0];
                popup_b517cfab4e601e5f454682b2e70a7769.setContent(html_453180ca10e0c925f06614812d3fb439);
            
        

        marker_810da832a670c61d181dd52d6392f706.bindPopup(popup_b517cfab4e601e5f454682b2e70a7769)
        ;

        
    
    
            var marker_d10413c6e7e8d1330effeb3a25bade29 = L.marker(
                [48.913, -120.818],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_990749d751db382d12e83271f4445ddc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d10413c6e7e8d1330effeb3a25bade29.setIcon(icon_990749d751db382d12e83271f4445ddc);
        
    
        var popup_1f159ce944b62969282ad5e0ab0b56f0 = L.popup({"maxWidth": "100%"});

        
            
                var html_d287ee160973dc5e40e4307ef84d6865 = $(`<div id="html_d287ee160973dc5e40e4307ef84d6865" style="width: 100.0%; height: 100.0%;"><strong>NW Pasayten Fires</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6227" target="_blank">More Info</a></div>`)[0];
                popup_1f159ce944b62969282ad5e0ab0b56f0.setContent(html_d287ee160973dc5e40e4307ef84d6865);
            
        

        marker_d10413c6e7e8d1330effeb3a25bade29.bindPopup(popup_1f159ce944b62969282ad5e0ab0b56f0)
        ;

        
    
    
            var marker_afd2bcc03cecd0cc7ac795ce1863f3c0 = L.marker(
                [33.714, -116.891],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5c6d9680773bcaaabf078de844c16d8a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_afd2bcc03cecd0cc7ac795ce1863f3c0.setIcon(icon_5c6d9680773bcaaabf078de844c16d8a);
        
    
        var popup_827e31a32ea35792493878d3eec61335 = L.popup({"maxWidth": "100%"});

        
            
                var html_67a3f5e23fffb67881a9829409612e4b = $(`<div id="html_67a3f5e23fffb67881a9829409612e4b" style="width: 100.0%; height: 100.0%;"><strong>Fairview Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6223" target="_blank">More Info</a></div>`)[0];
                popup_827e31a32ea35792493878d3eec61335.setContent(html_67a3f5e23fffb67881a9829409612e4b);
            
        

        marker_afd2bcc03cecd0cc7ac795ce1863f3c0.bindPopup(popup_827e31a32ea35792493878d3eec61335)
        ;

        
    
    
            var marker_989a7694be187e32374cfaf8110191b3 = L.marker(
                [34.177, -116.882],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c50a1b028530298aeba1e10102203373 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_989a7694be187e32374cfaf8110191b3.setIcon(icon_c50a1b028530298aeba1e10102203373);
        
    
        var popup_a04a46b17b0e7657e76841177081564a = L.popup({"maxWidth": "100%"});

        
            
                var html_299dc9a948d2e953b94defd890913630 = $(`<div id="html_299dc9a948d2e953b94defd890913630" style="width: 100.0%; height: 100.0%;"><strong>Radford Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6233" target="_blank">More Info</a></div>`)[0];
                popup_a04a46b17b0e7657e76841177081564a.setContent(html_299dc9a948d2e953b94defd890913630);
            
        

        marker_989a7694be187e32374cfaf8110191b3.bindPopup(popup_a04a46b17b0e7657e76841177081564a)
        ;

        
    
    
            var marker_dca878b5d1ce33d25135d5e36aab0519 = L.marker(
                [47.828, -118.323],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_aacc866130b905926ee6cd8a0ab6f0e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_dca878b5d1ce33d25135d5e36aab0519.setIcon(icon_aacc866130b905926ee6cd8a0ab6f0e2);
        
    
        var popup_a19c824715567b6fb83311c1df2b6e1b = L.popup({"maxWidth": "100%"});

        
            
                var html_69900f89bb4e5b5416058a9e7ac6be33 = $(`<div id="html_69900f89bb4e5b5416058a9e7ac6be33" style="width: 100.0%; height: 100.0%;"><strong>Seven Bays Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6220" target="_blank">More Info</a></div>`)[0];
                popup_a19c824715567b6fb83311c1df2b6e1b.setContent(html_69900f89bb4e5b5416058a9e7ac6be33);
            
        

        marker_dca878b5d1ce33d25135d5e36aab0519.bindPopup(popup_a19c824715567b6fb83311c1df2b6e1b)
        ;

        
    
    
            var marker_47cc479f4fee4633679d22fe391dd07e = L.marker(
                [47.070999999, -113.81999999],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d27e1fbcb705ae1dc2d83745712cd2df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_47cc479f4fee4633679d22fe391dd07e.setIcon(icon_d27e1fbcb705ae1dc2d83745712cd2df);
        
    
        var popup_d54a181bed36c9dc5ae10dcf3082ba19 = L.popup({"maxWidth": "100%"});

        
            
                var html_eb485f4a3ad8ac89621a5b1958799355 = $(`<div id="html_eb485f4a3ad8ac89621a5b1958799355" style="width: 100.0%; height: 100.0%;"><strong>Boulder Lake Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6238" target="_blank">More Info</a></div>`)[0];
                popup_d54a181bed36c9dc5ae10dcf3082ba19.setContent(html_eb485f4a3ad8ac89621a5b1958799355);
            
        

        marker_47cc479f4fee4633679d22fe391dd07e.bindPopup(popup_d54a181bed36c9dc5ae10dcf3082ba19)
        ;

        
    
    
            var marker_317fade00f5e4febe384aa6c8e3f0517 = L.marker(
                [48.087, -115.826],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bd27a21e2b15aeb2a2e8232c064b566b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_317fade00f5e4febe384aa6c8e3f0517.setIcon(icon_bd27a21e2b15aeb2a2e8232c064b566b);
        
    
        var popup_76cfce96aa98944c68adfec6325c48d4 = L.popup({"maxWidth": "100%"});

        
            
                var html_d4fdf13e937756a59121d1777d04f349 = $(`<div id="html_d4fdf13e937756a59121d1777d04f349" style="width: 100.0%; height: 100.0%;"><strong>Bull Gin Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6229" target="_blank">More Info</a></div>`)[0];
                popup_76cfce96aa98944c68adfec6325c48d4.setContent(html_d4fdf13e937756a59121d1777d04f349);
            
        

        marker_317fade00f5e4febe384aa6c8e3f0517.bindPopup(popup_76cfce96aa98944c68adfec6325c48d4)
        ;

        
    
    
            var marker_c9f48291ca49da4c1928dab3d3624349 = L.marker(
                [47.644, -121.661],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ddb34e02e54afaa4822d0a15741f744b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c9f48291ca49da4c1928dab3d3624349.setIcon(icon_ddb34e02e54afaa4822d0a15741f744b);
        
    
        var popup_bd539d5386f5aac065cfa7458f96d52f = L.popup({"maxWidth": "100%"});

        
            
                var html_dc13cd5884c0245e1e12bebdcfb61d1a = $(`<div id="html_dc13cd5884c0245e1e12bebdcfb61d1a" style="width: 100.0%; height: 100.0%;"><strong>Loch Katrine Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6281" target="_blank">More Info</a></div>`)[0];
                popup_bd539d5386f5aac065cfa7458f96d52f.setContent(html_dc13cd5884c0245e1e12bebdcfb61d1a);
            
        

        marker_c9f48291ca49da4c1928dab3d3624349.bindPopup(popup_bd539d5386f5aac065cfa7458f96d52f)
        ;

        
    
    
            var marker_c1e45d86e811669a38648823691c9be1 = L.marker(
                [48.925, -121.38],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f92e116b1b4b93694fa8f843f01ed1b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c1e45d86e811669a38648823691c9be1.setIcon(icon_f92e116b1b4b93694fa8f843f01ed1b0);
        
    
        var popup_59c92b4e54e25c749f0e2594c6c01a77 = L.popup({"maxWidth": "100%"});

        
            
                var html_031791ca56894cb3461b10489e16099e = $(`<div id="html_031791ca56894cb3461b10489e16099e" style="width: 100.0%; height: 100.0%;"><strong>Chilliwack Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6226" target="_blank">More Info</a></div>`)[0];
                popup_59c92b4e54e25c749f0e2594c6c01a77.setContent(html_031791ca56894cb3461b10489e16099e);
            
        

        marker_c1e45d86e811669a38648823691c9be1.bindPopup(popup_59c92b4e54e25c749f0e2594c6c01a77)
        ;

        
    
    
            var marker_66ed183ceb3f5c7e941bf6daff257478 = L.marker(
                [45.428, -116.739],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8dcf322b3c430523399a98a86f85aa65 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_66ed183ceb3f5c7e941bf6daff257478.setIcon(icon_8dcf322b3c430523399a98a86f85aa65);
        
    
        var popup_72f1bee41da4abde2889ef525787358a = L.popup({"maxWidth": "100%"});

        
            
                var html_d7a35e2fe0ecb02eb747015039029a58 = $(`<div id="html_d7a35e2fe0ecb02eb747015039029a58" style="width: 100.0%; height: 100.0%;"><strong>Double Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6209" target="_blank">More Info</a></div>`)[0];
                popup_72f1bee41da4abde2889ef525787358a.setContent(html_d7a35e2fe0ecb02eb747015039029a58);
            
        

        marker_66ed183ceb3f5c7e941bf6daff257478.bindPopup(popup_72f1bee41da4abde2889ef525787358a)
        ;

        
    
    
            var marker_e4cf33958b9e73122bcb3b984b177c4e = L.marker(
                [48.311, -121.392],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d0f2be541796b32ec8282f95fd99aa71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e4cf33958b9e73122bcb3b984b177c4e.setIcon(icon_d0f2be541796b32ec8282f95fd99aa71);
        
    
        var popup_9e51d13ad47671b071b6d083de9d719b = L.popup({"maxWidth": "100%"});

        
            
                var html_3386a588ac6c938835a5caf7fc66ae26 = $(`<div id="html_3386a588ac6c938835a5caf7fc66ae26" style="width: 100.0%; height: 100.0%;"><strong>Suiattle River Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6282" target="_blank">More Info</a></div>`)[0];
                popup_9e51d13ad47671b071b6d083de9d719b.setContent(html_3386a588ac6c938835a5caf7fc66ae26);
            
        

        marker_e4cf33958b9e73122bcb3b984b177c4e.bindPopup(popup_9e51d13ad47671b071b6d083de9d719b)
        ;

        
    
    
            var marker_c6fcff1b3bc067d39632990343bfb8e6 = L.marker(
                [45.693, -115.652],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ca9882f523f12fc9ba713cbb709a4fda = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c6fcff1b3bc067d39632990343bfb8e6.setIcon(icon_ca9882f523f12fc9ba713cbb709a4fda);
        
    
        var popup_266ea71a29e3f012df843321ffabf408 = L.popup({"maxWidth": "100%"});

        
            
                var html_010aa03680bdacad1e6c951c32f81ede = $(`<div id="html_010aa03680bdacad1e6c951c32f81ede" style="width: 100.0%; height: 100.0%;"><strong>Williams Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6210" target="_blank">More Info</a></div>`)[0];
                popup_266ea71a29e3f012df843321ffabf408.setContent(html_010aa03680bdacad1e6c951c32f81ede);
            
        

        marker_c6fcff1b3bc067d39632990343bfb8e6.bindPopup(popup_266ea71a29e3f012df843321ffabf408)
        ;

        
    
    
            var marker_fee55b4a914b290bf5e9b85e28880b62 = L.marker(
                [45.78, -113.867],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_214d01469d4ee8890e10ce629d4ea61e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_fee55b4a914b290bf5e9b85e28880b62.setIcon(icon_214d01469d4ee8890e10ce629d4ea61e);
        
    
        var popup_808e124d9a26b8f1e586553547bdf7a7 = L.popup({"maxWidth": "100%"});

        
            
                var html_02ce5a5fe0d49cb9745d00a29f79a080 = $(`<div id="html_02ce5a5fe0d49cb9745d00a29f79a080" style="width: 100.0%; height: 100.0%;"><strong>Trail Ridge Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6211" target="_blank">More Info</a></div>`)[0];
                popup_808e124d9a26b8f1e586553547bdf7a7.setContent(html_02ce5a5fe0d49cb9745d00a29f79a080);
            
        

        marker_fee55b4a914b290bf5e9b85e28880b62.bindPopup(popup_808e124d9a26b8f1e586553547bdf7a7)
        ;

        
    
    
            var marker_9a4d478340dea685c08c81e292420fa5 = L.marker(
                [45.133, -117.11],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_fc47bd0c607f05988a96913eac3b929f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9a4d478340dea685c08c81e292420fa5.setIcon(icon_fc47bd0c607f05988a96913eac3b929f);
        
    
        var popup_f27dddebd1aa789ac37dd68cda15eae0 = L.popup({"maxWidth": "100%"});

        
            
                var html_78413c8229e1e85e99d7a78273805cfe = $(`<div id="html_78413c8229e1e85e99d7a78273805cfe" style="width: 100.0%; height: 100.0%;"><strong>Nebo Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6205" target="_blank">More Info</a></div>`)[0];
                popup_f27dddebd1aa789ac37dd68cda15eae0.setContent(html_78413c8229e1e85e99d7a78273805cfe);
            
        

        marker_9a4d478340dea685c08c81e292420fa5.bindPopup(popup_f27dddebd1aa789ac37dd68cda15eae0)
        ;

        
    
    
            var marker_3f41666a6389ea97f0cb152e3899f68d = L.marker(
                [45.284, -117.534],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_14ab118bc255b3b84b7a299c69f36e7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3f41666a6389ea97f0cb152e3899f68d.setIcon(icon_14ab118bc255b3b84b7a299c69f36e7a);
        
    
        var popup_3316119fcca3428403b41a632fe63f69 = L.popup({"maxWidth": "100%"});

        
            
                var html_8a6263768c1a78693699a3366c311886 = $(`<div id="html_8a6263768c1a78693699a3366c311886" style="width: 100.0%; height: 100.0%;"><strong>Sturgill Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6200" target="_blank">More Info</a></div>`)[0];
                popup_3316119fcca3428403b41a632fe63f69.setContent(html_8a6263768c1a78693699a3366c311886);
            
        

        marker_3f41666a6389ea97f0cb152e3899f68d.bindPopup(popup_3316119fcca3428403b41a632fe63f69)
        ;

        
    
    
            var marker_80d4dcca2d4e1dc1796520b70f5ab816 = L.marker(
                [44.728, -118.708],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_94caf686b55b14076c1bcbf50f092efd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_80d4dcca2d4e1dc1796520b70f5ab816.setIcon(icon_94caf686b55b14076c1bcbf50f092efd);
        
    
        var popup_3ee7c7dd6136dcbe388a4f54f52ea65b = L.popup({"maxWidth": "100%"});

        
            
                var html_0da47ad11d9d89bee441d26aa524acee = $(`<div id="html_0da47ad11d9d89bee441d26aa524acee" style="width: 100.0%; height: 100.0%;"><strong>Crockets Knob Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6195" target="_blank">More Info</a></div>`)[0];
                popup_3ee7c7dd6136dcbe388a4f54f52ea65b.setContent(html_0da47ad11d9d89bee441d26aa524acee);
            
        

        marker_80d4dcca2d4e1dc1796520b70f5ab816.bindPopup(popup_3ee7c7dd6136dcbe388a4f54f52ea65b)
        ;

        
    
    
            var marker_98f8354fe7178ee7661c3b79fe1b83dd = L.marker(
                [48.1, -113.808],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_beb477f1d485074f8eca4258575fc61a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_98f8354fe7178ee7661c3b79fe1b83dd.setIcon(icon_beb477f1d485074f8eca4258575fc61a);
        
    
        var popup_bd4ea348aab7beb2fe6f21aa46f46c92 = L.popup({"maxWidth": "100%"});

        
            
                var html_a1557302b6aff6eb6ca63c7c0588e735 = $(`<div id="html_a1557302b6aff6eb6ca63c7c0588e735" style="width: 100.0%; height: 100.0%;"><strong>Margaret Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6239" target="_blank">More Info</a></div>`)[0];
                popup_bd4ea348aab7beb2fe6f21aa46f46c92.setContent(html_a1557302b6aff6eb6ca63c7c0588e735);
            
        

        marker_98f8354fe7178ee7661c3b79fe1b83dd.bindPopup(popup_bd4ea348aab7beb2fe6f21aa46f46c92)
        ;

        
    
    
            var marker_cec10903ed360d65060dffc81d52e2c8 = L.marker(
                [47.086, -117.857],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b21e95ba74af7905d4f9941e079994e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cec10903ed360d65060dffc81d52e2c8.setIcon(icon_b21e95ba74af7905d4f9941e079994e2);
        
    
        var popup_355fba9e4be0b51e7b24c932e0c0c718 = L.popup({"maxWidth": "100%"});

        
            
                var html_252a2906f67a398d8e69ab6c22b03577 = $(`<div id="html_252a2906f67a398d8e69ab6c22b03577" style="width: 100.0%; height: 100.0%;"><strong>Wagner Road Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6182" target="_blank">More Info</a></div>`)[0];
                popup_355fba9e4be0b51e7b24c932e0c0c718.setContent(html_252a2906f67a398d8e69ab6c22b03577);
            
        

        marker_cec10903ed360d65060dffc81d52e2c8.bindPopup(popup_355fba9e4be0b51e7b24c932e0c0c718)
        ;

        
    
    
            var marker_6f54c3f24d67ce5fbec3f10774d572b1 = L.marker(
                [42.641, -123.628],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_46edeb65c70d358358487ffb30c3fda4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6f54c3f24d67ce5fbec3f10774d572b1.setIcon(icon_46edeb65c70d358358487ffb30c3fda4);
        
    
        var popup_73385d08db34903ac773376f1607c69d = L.popup({"maxWidth": "100%"});

        
            
                var html_6e62f04414a350fde57ba19eefece041 = $(`<div id="html_6e62f04414a350fde57ba19eefece041" style="width: 100.0%; height: 100.0%;"><strong>Rum Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6196" target="_blank">More Info</a></div>`)[0];
                popup_73385d08db34903ac773376f1607c69d.setContent(html_6e62f04414a350fde57ba19eefece041);
            
        

        marker_6f54c3f24d67ce5fbec3f10774d572b1.bindPopup(popup_73385d08db34903ac773376f1607c69d)
        ;

        
    
    
            var marker_7d1137e73a60dc37696f6003c6d9b323 = L.marker(
                [47.694, -114.489],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_6ce9dd89e29b8026b36c270a6fd6034f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7d1137e73a60dc37696f6003c6d9b323.setIcon(icon_6ce9dd89e29b8026b36c270a6fd6034f);
        
    
        var popup_b787bc09d59a1a9f042aaef171c68c8f = L.popup({"maxWidth": "100%"});

        
            
                var html_11ad39c5b163f903b3d71d977d2e1951 = $(`<div id="html_11ad39c5b163f903b3d71d977d2e1951" style="width: 100.0%; height: 100.0%;"><strong>Garceau Fire, W of Polson, Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6174" target="_blank">More Info</a></div>`)[0];
                popup_b787bc09d59a1a9f042aaef171c68c8f.setContent(html_11ad39c5b163f903b3d71d977d2e1951);
            
        

        marker_7d1137e73a60dc37696f6003c6d9b323.bindPopup(popup_b787bc09d59a1a9f042aaef171c68c8f)
        ;

        
    
    
            var marker_aecbd2f0d7f0561fee45a04566a76057 = L.marker(
                [43.811, -114.98],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7660a67e3cc493038cd16947dfe3ff9d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_aecbd2f0d7f0561fee45a04566a76057.setIcon(icon_7660a67e3cc493038cd16947dfe3ff9d);
        
    
        var popup_f9df7e001bd7199d1506026d3c908fe7 = L.popup({"maxWidth": "100%"});

        
            
                var html_cb905252cd46fb73dd58b53f781d1ab2 = $(`<div id="html_cb905252cd46fb73dd58b53f781d1ab2" style="width: 100.0%; height: 100.0%;"><strong>Ross Fork Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6216" target="_blank">More Info</a></div>`)[0];
                popup_f9df7e001bd7199d1506026d3c908fe7.setContent(html_cb905252cd46fb73dd58b53f781d1ab2);
            
        

        marker_aecbd2f0d7f0561fee45a04566a76057.bindPopup(popup_f9df7e001bd7199d1506026d3c908fe7)
        ;

        
    
    
            var marker_a02f4b771aeb0172a1e24117dc65d3ea = L.marker(
                [48.854, -114.025],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8e34ef60f8adaf7763b0f2b971477f23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a02f4b771aeb0172a1e24117dc65d3ea.setIcon(icon_8e34ef60f8adaf7763b0f2b971477f23);
        
    
        var popup_7b650c2486be3006b23c480726491100 = L.popup({"maxWidth": "100%"});

        
            
                var html_6c3e2b62c9047467d56ecaf8bfe558d5 = $(`<div id="html_6c3e2b62c9047467d56ecaf8bfe558d5" style="width: 100.0%; height: 100.0%;"><strong>Quartz Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6183" target="_blank">More Info</a></div>`)[0];
                popup_7b650c2486be3006b23c480726491100.setContent(html_6c3e2b62c9047467d56ecaf8bfe558d5);
            
        

        marker_a02f4b771aeb0172a1e24117dc65d3ea.bindPopup(popup_7b650c2486be3006b23c480726491100)
        ;

        
    
    
            var marker_29e778395299468ff3e3b944a5304c45 = L.marker(
                [47.533, -119.919],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ca56f52adb1b991b97bf899123ae3e84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_29e778395299468ff3e3b944a5304c45.setIcon(icon_ca56f52adb1b991b97bf899123ae3e84);
        
    
        var popup_e3783ec84be4705ab4cc153cc82310e9 = L.popup({"maxWidth": "100%"});

        
            
                var html_2853130f01e29e94eb0a8c689c773a28 = $(`<div id="html_2853130f01e29e94eb0a8c689c773a28" style="width: 100.0%; height: 100.0%;"><strong>Mohr Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6165" target="_blank">More Info</a></div>`)[0];
                popup_e3783ec84be4705ab4cc153cc82310e9.setContent(html_2853130f01e29e94eb0a8c689c773a28);
            
        

        marker_29e778395299468ff3e3b944a5304c45.bindPopup(popup_e3783ec84be4705ab4cc153cc82310e9)
        ;

        
    
    
            var marker_a913d4ae1768854e1af6c2e2a9f0ee02 = L.marker(
                [47.885, -120.917],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d4e386f732bb1c8ed3287ae0bbd1c0e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a913d4ae1768854e1af6c2e2a9f0ee02.setIcon(icon_d4e386f732bb1c8ed3287ae0bbd1c0e2);
        
    
        var popup_586051b974849593dcec4209b79cb425 = L.popup({"maxWidth": "100%"});

        
            
                var html_25cce88ef1710e32b711378461644439 = $(`<div id="html_25cce88ef1710e32b711378461644439" style="width: 100.0%; height: 100.0%;"><strong>White River  Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6181" target="_blank">More Info</a></div>`)[0];
                popup_586051b974849593dcec4209b79cb425.setContent(html_25cce88ef1710e32b711378461644439);
            
        

        marker_a913d4ae1768854e1af6c2e2a9f0ee02.bindPopup(popup_586051b974849593dcec4209b79cb425)
        ;

        
    
    
            var marker_6da544e8805339da0f861235b6d763a6 = L.marker(
                [46.636, -121.517],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_09d8164a7a535359ee2b283be749b193 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6da544e8805339da0f861235b6d763a6.setIcon(icon_09d8164a7a535359ee2b283be749b193);
        
    
        var popup_fe51d28b84acc89ed67a9ba7cf6ca379 = L.popup({"maxWidth": "100%"});

        
            
                var html_b242a0e1ee7ee85ef4ddc7dd22f0d09d = $(`<div id="html_b242a0e1ee7ee85ef4ddc7dd22f0d09d" style="width: 100.0%; height: 100.0%;"><strong>Goat Rocks Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6240" target="_blank">More Info</a></div>`)[0];
                popup_fe51d28b84acc89ed67a9ba7cf6ca379.setContent(html_b242a0e1ee7ee85ef4ddc7dd22f0d09d);
            
        

        marker_6da544e8805339da0f861235b6d763a6.bindPopup(popup_fe51d28b84acc89ed67a9ba7cf6ca379)
        ;

        
    
    
            var marker_b57d1eb66d19603bdef31845431eb6be = L.marker(
                [37.954, -119.552],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_670e5bf412247a07cac72e3a203ffe8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b57d1eb66d19603bdef31845431eb6be.setIcon(icon_670e5bf412247a07cac72e3a203ffe8f);
        
    
        var popup_6e6545663687601dc025b238a3e4883e = L.popup({"maxWidth": "100%"});

        
            
                var html_1f98d113be35d56f6efd647d543d1dad = $(`<div id="html_1f98d113be35d56f6efd647d543d1dad" style="width: 100.0%; height: 100.0%;"><strong>Rodgers Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6197" target="_blank">More Info</a></div>`)[0];
                popup_6e6545663687601dc025b238a3e4883e.setContent(html_1f98d113be35d56f6efd647d543d1dad);
            
        

        marker_b57d1eb66d19603bdef31845431eb6be.bindPopup(popup_6e6545663687601dc025b238a3e4883e)
        ;

        
    
    
            var marker_abc03d49eda9cc6765254e242fc83c02 = L.marker(
                [38.789, 15.213],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_69c21ab47a1de160df0ab761921608b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_abc03d49eda9cc6765254e242fc83c02.setIcon(icon_69c21ab47a1de160df0ab761921608b4);
        
    
        var popup_7c69f126aec2959b1b01c3f78e0cea35 = L.popup({"maxWidth": "100%"});

        
            
                var html_55c00af05bae2c073d6f53a4eb3a7e54 = $(`<div id="html_55c00af05bae2c073d6f53a4eb3a7e54" style="width: 100.0%; height: 100.0%;"><strong>Stromboli Volcano, Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6175" target="_blank">More Info</a></div>`)[0];
                popup_7c69f126aec2959b1b01c3f78e0cea35.setContent(html_55c00af05bae2c073d6f53a4eb3a7e54);
            
        

        marker_abc03d49eda9cc6765254e242fc83c02.bindPopup(popup_7c69f126aec2959b1b01c3f78e0cea35)
        ;

        
    
    
            var marker_5edbdc284fe8ea20f6a3cfc8a9c092ce = L.marker(
                [40.907, -123.598],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d4aa2c0809ada13ec32383c6dd6e3542 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5edbdc284fe8ea20f6a3cfc8a9c092ce.setIcon(icon_d4aa2c0809ada13ec32383c6dd6e3542);
        
    
        var popup_07402b467d69cda4bd094460540eb811 = L.popup({"maxWidth": "100%"});

        
            
                var html_1311acc4d552fde10ea618efba62f2f2 = $(`<div id="html_1311acc4d552fde10ea618efba62f2f2" style="width: 100.0%; height: 100.0%;"><strong>Six Rivers Lightning Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6158" target="_blank">More Info</a></div>`)[0];
                popup_07402b467d69cda4bd094460540eb811.setContent(html_1311acc4d552fde10ea618efba62f2f2);
            
        

        marker_5edbdc284fe8ea20f6a3cfc8a9c092ce.bindPopup(popup_07402b467d69cda4bd094460540eb811)
        ;

        
    
    
            var marker_9b3927d79309b4580c24df787f472555 = L.marker(
                [37.661, -119.471],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d506be7195b1f0757dd5bdb9dacb72cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9b3927d79309b4580c24df787f472555.setIcon(icon_d506be7195b1f0757dd5bdb9dacb72cc);
        
    
        var popup_7b72e71c6ff9ecee0ac01489013d729d = L.popup({"maxWidth": "100%"});

        
            
                var html_241e6586557d759d50af9bbaa89e9fd7 = $(`<div id="html_241e6586557d759d50af9bbaa89e9fd7" style="width: 100.0%; height: 100.0%;"><strong>Red Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6191" target="_blank">More Info</a></div>`)[0];
                popup_7b72e71c6ff9ecee0ac01489013d729d.setContent(html_241e6586557d759d50af9bbaa89e9fd7);
            
        

        marker_9b3927d79309b4580c24df787f472555.bindPopup(popup_7b72e71c6ff9ecee0ac01489013d729d)
        ;

        
    
    
            var marker_00ef1bc02a793e15dea8775a2ac5bdcf = L.marker(
                [41.868, -123.278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4a07cee257e3b2d82d7fef5db2bfe183 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_00ef1bc02a793e15dea8775a2ac5bdcf.setIcon(icon_4a07cee257e3b2d82d7fef5db2bfe183);
        
    
        var popup_9d61072803675dc0d0d105deb3443e42 = L.popup({"maxWidth": "100%"});

        
            
                var html_b19767f6bc2fedc9d1515c1baf08f741 = $(`<div id="html_b19767f6bc2fedc9d1515c1baf08f741" style="width: 100.0%; height: 100.0%;"><strong>Yeti and Alex Fires</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6151" target="_blank">More Info</a></div>`)[0];
                popup_9d61072803675dc0d0d105deb3443e42.setContent(html_b19767f6bc2fedc9d1515c1baf08f741);
            
        

        marker_00ef1bc02a793e15dea8775a2ac5bdcf.bindPopup(popup_9d61072803675dc0d0d105deb3443e42)
        ;

        
    
    
            var marker_baa8abbdbef110d9c263673b0d2eaa0c = L.marker(
                [44.857, -114.927],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a85cf02d93dd644d97543910cd37b6e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_baa8abbdbef110d9c263673b0d2eaa0c.setIcon(icon_a85cf02d93dd644d97543910cd37b6e1);
        
    
        var popup_dcf4d6025a8cc719b530899947d83fd6 = L.popup({"maxWidth": "100%"});

        
            
                var html_089974dd1e64b286708f3cba11ceac9e = $(`<div id="html_089974dd1e64b286708f3cba11ceac9e" style="width: 100.0%; height: 100.0%;"><strong>Norton Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6186" target="_blank">More Info</a></div>`)[0];
                popup_dcf4d6025a8cc719b530899947d83fd6.setContent(html_089974dd1e64b286708f3cba11ceac9e);
            
        

        marker_baa8abbdbef110d9c263673b0d2eaa0c.bindPopup(popup_dcf4d6025a8cc719b530899947d83fd6)
        ;

        
    
    
            var marker_3425a92ac0ccdbf94f2bbc227982969c = L.marker(
                [43.74, -122.166],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3e91b2a1dc5b0ae54108709c869d07ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3425a92ac0ccdbf94f2bbc227982969c.setIcon(icon_3e91b2a1dc5b0ae54108709c869d07ee);
        
    
        var popup_95a9f3b2609922d79f057591ceee9db7 = L.popup({"maxWidth": "100%"});

        
            
                var html_a42fa0d60b414c5c31c59cf85baca327 = $(`<div id="html_a42fa0d60b414c5c31c59cf85baca327" style="width: 100.0%; height: 100.0%;"><strong>Cedar Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6155" target="_blank">More Info</a></div>`)[0];
                popup_95a9f3b2609922d79f057591ceee9db7.setContent(html_a42fa0d60b414c5c31c59cf85baca327);
            
        

        marker_3425a92ac0ccdbf94f2bbc227982969c.bindPopup(popup_95a9f3b2609922d79f057591ceee9db7)
        ;

        
    
    
            var marker_e8572ecb59ccd88296d47fbb6935a7e5 = L.marker(
                [43.363, -122.052],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4cf4b800ec3a8f8a0733192cca82efd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e8572ecb59ccd88296d47fbb6935a7e5.setIcon(icon_4cf4b800ec3a8f8a0733192cca82efd7);
        
    
        var popup_b200d5141d8591f2e162a5d9a827e04c = L.popup({"maxWidth": "100%"});

        
            
                var html_1db579dfb9e8672f2ab2174933c93874 = $(`<div id="html_1db579dfb9e8672f2ab2174933c93874" style="width: 100.0%; height: 100.0%;"><strong>Windigo Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6148" target="_blank">More Info</a></div>`)[0];
                popup_b200d5141d8591f2e162a5d9a827e04c.setContent(html_1db579dfb9e8672f2ab2174933c93874);
            
        

        marker_e8572ecb59ccd88296d47fbb6935a7e5.bindPopup(popup_b200d5141d8591f2e162a5d9a827e04c)
        ;

        
    
    
            var marker_4e123675d845078f95348dad4358827c = L.marker(
                [48.977, -114.748],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_592b7db00209d794529f2e4c0e3adb8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4e123675d845078f95348dad4358827c.setIcon(icon_592b7db00209d794529f2e4c0e3adb8e);
        
    
        var popup_86a512c14195bb7ec9544f696b4d1ca1 = L.popup({"maxWidth": "100%"});

        
            
                var html_a93cd19a66c554bd6b99e9582532d6bd = $(`<div id="html_a93cd19a66c554bd6b99e9582532d6bd" style="width: 100.0%; height: 100.0%;"><strong>Weasel Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6153" target="_blank">More Info</a></div>`)[0];
                popup_86a512c14195bb7ec9544f696b4d1ca1.setContent(html_a93cd19a66c554bd6b99e9582532d6bd);
            
        

        marker_4e123675d845078f95348dad4358827c.bindPopup(popup_86a512c14195bb7ec9544f696b4d1ca1)
        ;

        
    
    
            var marker_94ddc7815a95e638e3e9921e2927b1e0 = L.marker(
                [47.818, -114.507],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_aa825d0c7cc3dbcc63825e0f1e1ab914 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_94ddc7815a95e638e3e9921e2927b1e0.setIcon(icon_aa825d0c7cc3dbcc63825e0f1e1ab914);
        
    
        var popup_5bd6e48ab6c537d121fd3f6564d58037 = L.popup({"maxWidth": "100%"});

        
            
                var html_d68c8e1bd6847df834e36e2adabe554d = $(`<div id="html_d68c8e1bd6847df834e36e2adabe554d" style="width: 100.0%; height: 100.0%;"><strong>Elmo Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6141" target="_blank">More Info</a></div>`)[0];
                popup_5bd6e48ab6c537d121fd3f6564d58037.setContent(html_d68c8e1bd6847df834e36e2adabe554d);
            
        

        marker_94ddc7815a95e638e3e9921e2927b1e0.bindPopup(popup_5bd6e48ab6c537d121fd3f6564d58037)
        ;

        
    
    
            var marker_0f16121c38f9af9971a800b32c804c68 = L.marker(
                [41.819, -122.885],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_57b01743c181dc17bdbdbd44c569259b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0f16121c38f9af9971a800b32c804c68.setIcon(icon_57b01743c181dc17bdbdbd44c569259b);
        
    
        var popup_aabe6d68b34ff1946d5561624f468b5a = L.popup({"maxWidth": "100%"});

        
            
                var html_a8cfcd45fc15ad5043a17d8553dcfb80 = $(`<div id="html_a8cfcd45fc15ad5043a17d8553dcfb80" style="width: 100.0%; height: 100.0%;"><strong>McKinney Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6140" target="_blank">More Info</a></div>`)[0];
                popup_aabe6d68b34ff1946d5561624f468b5a.setContent(html_a8cfcd45fc15ad5043a17d8553dcfb80);
            
        

        marker_0f16121c38f9af9971a800b32c804c68.bindPopup(popup_aabe6d68b34ff1946d5561624f468b5a)
        ;

        
    
    
            var marker_cd7a0b3cb93b11a032610ce46ff4588f = L.marker(
                [41.868, -123.278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_353b7ba2a010121fda20143805d3c40b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cd7a0b3cb93b11a032610ce46ff4588f.setIcon(icon_353b7ba2a010121fda20143805d3c40b);
        
    
        var popup_9a6507804414161d8619974ea2d8f2e9 = L.popup({"maxWidth": "100%"});

        
            
                var html_0adc2dea6d020efc743ec048ec1bfed3 = $(`<div id="html_0adc2dea6d020efc743ec048ec1bfed3" style="width: 100.0%; height: 100.0%;"><strong>Yeti and Alex Fires</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6164" target="_blank">More Info</a></div>`)[0];
                popup_9a6507804414161d8619974ea2d8f2e9.setContent(html_0adc2dea6d020efc743ec048ec1bfed3);
            
        

        marker_cd7a0b3cb93b11a032610ce46ff4588f.bindPopup(popup_9a6507804414161d8619974ea2d8f2e9)
        ;

        
    
    
            var marker_5b6e562e043e10a328ddfd75ac889b66 = L.marker(
                [37.5509366, -119.9234728],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ed263063a6e4af5befcca64c6c7986b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5b6e562e043e10a328ddfd75ac889b66.setIcon(icon_ed263063a6e4af5befcca64c6c7986b6);
        
    
        var popup_fdffad0ae3aa2c793a37a904e2fcd67a = L.popup({"maxWidth": "100%"});

        
            
                var html_a787dc55f8c75e829090d09999bc3db4 = $(`<div id="html_a787dc55f8c75e829090d09999bc3db4" style="width: 100.0%; height: 100.0%;"><strong>Oak FIre</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6131" target="_blank">More Info</a></div>`)[0];
                popup_fdffad0ae3aa2c793a37a904e2fcd67a.setContent(html_a787dc55f8c75e829090d09999bc3db4);
            
        

        marker_5b6e562e043e10a328ddfd75ac889b66.bindPopup(popup_fdffad0ae3aa2c793a37a904e2fcd67a)
        ;

        
    
    
            var marker_d6c38d7a1c7dcc4a54fabdc17fec7aef = L.marker(
                [37.549, -119.921],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cedb29fc0af518fb42de6ec119cc9106 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d6c38d7a1c7dcc4a54fabdc17fec7aef.setIcon(icon_cedb29fc0af518fb42de6ec119cc9106);
        
    
        var popup_fc75b04777784e53a7fff7db8beb0766 = L.popup({"maxWidth": "100%"});

        
            
                var html_1e204fe1d2c62222a228077a04f553c6 = $(`<div id="html_1e204fe1d2c62222a228077a04f553c6" style="width: 100.0%; height: 100.0%;"><strong>Oak Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6133" target="_blank">More Info</a></div>`)[0];
                popup_fc75b04777784e53a7fff7db8beb0766.setContent(html_1e204fe1d2c62222a228077a04f553c6);
            
        

        marker_d6c38d7a1c7dcc4a54fabdc17fec7aef.bindPopup(popup_fc75b04777784e53a7fff7db8beb0766)
        ;

        
    
    
            var marker_4c0aa79efb5cd5e05519e25137f5521a = L.marker(
                [35.859, -113.228],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0d10f00f1a7e0bd7fcfbc21e1db03e0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4c0aa79efb5cd5e05519e25137f5521a.setIcon(icon_0d10f00f1a7e0bd7fcfbc21e1db03e0d);
        
    
        var popup_787d4bbebc20e410ceef24a4d5efa352 = L.popup({"maxWidth": "100%"});

        
            
                var html_8b89e4ef17abd920293d634c2c017e93 = $(`<div id="html_8b89e4ef17abd920293d634c2c017e93" style="width: 100.0%; height: 100.0%;"><strong>C3 Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6132" target="_blank">More Info</a></div>`)[0];
                popup_787d4bbebc20e410ceef24a4d5efa352.setContent(html_8b89e4ef17abd920293d634c2c017e93);
            
        

        marker_4c0aa79efb5cd5e05519e25137f5521a.bindPopup(popup_787d4bbebc20e410ceef24a4d5efa352)
        ;

        
    
    
            var marker_7860d1b6d9bbe28756857cab4d9b73e7 = L.marker(
                [45.375, -114.091],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2baa0d5366ce99993c81230963f86aad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7860d1b6d9bbe28756857cab4d9b73e7.setIcon(icon_2baa0d5366ce99993c81230963f86aad);
        
    
        var popup_cdf45e54887bb396e4f0c8c6614fbe9f = L.popup({"maxWidth": "100%"});

        
            
                var html_c3c8cc39ccf36b64f772e7180eebbdab = $(`<div id="html_c3c8cc39ccf36b64f772e7180eebbdab" style="width: 100.0%; height: 100.0%;"><strong>Moose Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6122" target="_blank">More Info</a></div>`)[0];
                popup_cdf45e54887bb396e4f0c8c6614fbe9f.setContent(html_c3c8cc39ccf36b64f772e7180eebbdab);
            
        

        marker_7860d1b6d9bbe28756857cab4d9b73e7.bindPopup(popup_cdf45e54887bb396e4f0c8c6614fbe9f)
        ;

        
    
    
            var marker_2bebbc22fb6de5ebc2c1421e592006b1 = L.marker(
                [44.854, -114.632],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_650232eb2acbb8ef8a874dddbcf3ed87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2bebbc22fb6de5ebc2c1421e592006b1.setIcon(icon_650232eb2acbb8ef8a874dddbcf3ed87);
        
    
        var popup_f02698480e1efc388ef16879ee18bf9b = L.popup({"maxWidth": "100%"});

        
            
                var html_171830e784b24a792d22a42d1c480d20 = $(`<div id="html_171830e784b24a792d22a42d1c480d20" style="width: 100.0%; height: 100.0%;"><strong>Woodtick Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6129" target="_blank">More Info</a></div>`)[0];
                popup_f02698480e1efc388ef16879ee18bf9b.setContent(html_171830e784b24a792d22a42d1c480d20);
            
        

        marker_2bebbc22fb6de5ebc2c1421e592006b1.bindPopup(popup_f02698480e1efc388ef16879ee18bf9b)
        ;

        
    
    
            var marker_af2399e60215e0499ce3a155630ab6d1 = L.marker(
                [45.048, -111.87],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_368f9c86fc96ae0b76f12a30829a36a9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_af2399e60215e0499ce3a155630ab6d1.setIcon(icon_368f9c86fc96ae0b76f12a30829a36a9);
        
    
        var popup_5a7f135aa286169a1a072458b41b5216 = L.popup({"maxWidth": "100%"});

        
            
                var html_8db0a7332aaf945ed473662d8c94a5d3 = $(`<div id="html_8db0a7332aaf945ed473662d8c94a5d3" style="width: 100.0%; height: 100.0%;"><strong>Clover Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6144" target="_blank">More Info</a></div>`)[0];
                popup_5a7f135aa286169a1a072458b41b5216.setContent(html_8db0a7332aaf945ed473662d8c94a5d3);
            
        

        marker_af2399e60215e0499ce3a155630ab6d1.bindPopup(popup_5a7f135aa286169a1a072458b41b5216)
        ;

        
    
    
            var marker_89597944cee78545df4dbd5195e1d657 = L.marker(
                [40.423, -112.323],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_82996125c3da596d555c6c1aa42b18e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_89597944cee78545df4dbd5195e1d657.setIcon(icon_82996125c3da596d555c6c1aa42b18e8);
        
    
        var popup_82063ced88f77243aa6b2eb68eacd820 = L.popup({"maxWidth": "100%"});

        
            
                var html_b2743a25617846d21f69264271709d8d = $(`<div id="html_b2743a25617846d21f69264271709d8d" style="width: 100.0%; height: 100.0%;"><strong>Jacob City Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6115" target="_blank">More Info</a></div>`)[0];
                popup_82063ced88f77243aa6b2eb68eacd820.setContent(html_b2743a25617846d21f69264271709d8d);
            
        

        marker_89597944cee78545df4dbd5195e1d657.bindPopup(popup_82063ced88f77243aa6b2eb68eacd820)
        ;

        
    
    
            var marker_3bb553a3aa38048a54bb09164e5bced6 = L.marker(
                [39.93, -114.588],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c281d6612beb2ccece80105dcdfc766b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3bb553a3aa38048a54bb09164e5bced6.setIcon(icon_c281d6612beb2ccece80105dcdfc766b);
        
    
        var popup_0968613d5e62b7f177f3211e756538db = L.popup({"maxWidth": "100%"});

        
            
                var html_06fdb6a4fd35df8f203475cf2a2892f1 = $(`<div id="html_06fdb6a4fd35df8f203475cf2a2892f1" style="width: 100.0%; height: 100.0%;"><strong>Becky Peak Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6113" target="_blank">More Info</a></div>`)[0];
                popup_0968613d5e62b7f177f3211e756538db.setContent(html_06fdb6a4fd35df8f203475cf2a2892f1);
            
        

        marker_3bb553a3aa38048a54bb09164e5bced6.bindPopup(popup_0968613d5e62b7f177f3211e756538db)
        ;

        
    
    
            var marker_0f713d8073952d85876944ee5416e372 = L.marker(
                [38.915, -112.339],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_89aa1995a2498986f4adea78f75ef152 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0f713d8073952d85876944ee5416e372.setIcon(icon_89aa1995a2498986f4adea78f75ef152);
        
    
        var popup_db27aa8aca0a46acfcd8912101db6504 = L.popup({"maxWidth": "100%"});

        
            
                var html_249731763fcc01f435184c6e80b1155b = $(`<div id="html_249731763fcc01f435184c6e80b1155b" style="width: 100.0%; height: 100.0%;"><strong>Halfway Hill Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6112" target="_blank">More Info</a></div>`)[0];
                popup_db27aa8aca0a46acfcd8912101db6504.setContent(html_249731763fcc01f435184c6e80b1155b);
            
        

        marker_0f713d8073952d85876944ee5416e372.bindPopup(popup_db27aa8aca0a46acfcd8912101db6504)
        ;

        
    
    
            var marker_784e64254def37cb8c35ea6afb792fcb = L.marker(
                [37.53573, -119.55035],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_010b3f52b43b0b13bb99aca3391a70a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_784e64254def37cb8c35ea6afb792fcb.setIcon(icon_010b3f52b43b0b13bb99aca3391a70a4);
        
    
        var popup_8fb73325b5ba2f60e83a6e2318d93e44 = L.popup({"maxWidth": "100%"});

        
            
                var html_7d7de2858dfc0ec9a85af8cbd76677ea = $(`<div id="html_7d7de2858dfc0ec9a85af8cbd76677ea" style="width: 100.0%; height: 100.0%;"><strong>Washburn Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6130" target="_blank">More Info</a></div>`)[0];
                popup_8fb73325b5ba2f60e83a6e2318d93e44.setContent(html_7d7de2858dfc0ec9a85af8cbd76677ea);
            
        

        marker_784e64254def37cb8c35ea6afb792fcb.bindPopup(popup_8fb73325b5ba2f60e83a6e2318d93e44)
        ;

        
    
    
            var marker_f5fcbef3a6dd6ae9e884bb930aa40b5e = L.marker(
                [64.37, -144.95],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cc799aba955f680942bdac4157226d8c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_f5fcbef3a6dd6ae9e884bb930aa40b5e.setIcon(icon_cc799aba955f680942bdac4157226d8c);
        
    
        var popup_37e139629b35043b2ba36187cbc2f479 = L.popup({"maxWidth": "100%"});

        
            
                var html_a2d34f53b4144360bd5308b26f28ae2c = $(`<div id="html_a2d34f53b4144360bd5308b26f28ae2c" style="width: 100.0%; height: 100.0%;"><strong>Middle Tanana Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6109" target="_blank">More Info</a></div>`)[0];
                popup_37e139629b35043b2ba36187cbc2f479.setContent(html_a2d34f53b4144360bd5308b26f28ae2c);
            
        

        marker_f5fcbef3a6dd6ae9e884bb930aa40b5e.bindPopup(popup_37e139629b35043b2ba36187cbc2f479)
        ;

        
    
    
            var marker_21dcf3e8f03e9a354bbdbef6e120fc83 = L.marker(
                [66.876, -150.522],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4d3c9cfcd4d4bb099682c38dd6dae1fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_21dcf3e8f03e9a354bbdbef6e120fc83.setIcon(icon_4d3c9cfcd4d4bb099682c38dd6dae1fe);
        
    
        var popup_4e011796e2d4f50e61cca6f7f2686848 = L.popup({"maxWidth": "100%"});

        
            
                var html_5a83ec77ce3346a48ec53f3c82cb2723 = $(`<div id="html_5a83ec77ce3346a48ec53f3c82cb2723" style="width: 100.0%; height: 100.0%;"><strong>Dalton Highway Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6119" target="_blank">More Info</a></div>`)[0];
                popup_4e011796e2d4f50e61cca6f7f2686848.setContent(html_5a83ec77ce3346a48ec53f3c82cb2723);
            
        

        marker_21dcf3e8f03e9a354bbdbef6e120fc83.bindPopup(popup_4e011796e2d4f50e61cca6f7f2686848)
        ;

        
    
    
            var marker_d1ed79f779dd8016dd4dd97068a34104 = L.marker(
                [31.593, 130.657],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ef7c52acfb5e55e675bf2aa285c489b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_d1ed79f779dd8016dd4dd97068a34104.setIcon(icon_ef7c52acfb5e55e675bf2aa285c489b2);
        
    
        var popup_7dc7628b576d2b2d13cc0078e43ad471 = L.popup({"maxWidth": "100%"});

        
            
                var html_e647c00903fade546bd226b11bfe3175 = $(`<div id="html_e647c00903fade546bd226b11bfe3175" style="width: 100.0%; height: 100.0%;"><strong>Aira Volcano, Japan</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6104" target="_blank">More Info</a></div>`)[0];
                popup_7dc7628b576d2b2d13cc0078e43ad471.setContent(html_e647c00903fade546bd226b11bfe3175);
            
        

        marker_d1ed79f779dd8016dd4dd97068a34104.bindPopup(popup_7dc7628b576d2b2d13cc0078e43ad471)
        ;

        
    
    
            var marker_93d1e51864d94480022d98538f7c8936 = L.marker(
                [64.875, -151.641],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ffe7a8cd936d45d0c5b73ea7a2702dc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_93d1e51864d94480022d98538f7c8936.setIcon(icon_ffe7a8cd936d45d0c5b73ea7a2702dc5);
        
    
        var popup_e85dc856ed6b6d389bb3da1e78e01df7 = L.popup({"maxWidth": "100%"});

        
            
                var html_63505db5d64fbf8cdd5fa7b2acd0dffe = $(`<div id="html_63505db5d64fbf8cdd5fa7b2acd0dffe" style="width: 100.0%; height: 100.0%;"><strong>Bean Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6097" target="_blank">More Info</a></div>`)[0];
                popup_e85dc856ed6b6d389bb3da1e78e01df7.setContent(html_63505db5d64fbf8cdd5fa7b2acd0dffe);
            
        

        marker_93d1e51864d94480022d98538f7c8936.bindPopup(popup_e85dc856ed6b6d389bb3da1e78e01df7)
        ;

        
    
    
            var marker_c85147389743fcd6a157c00a2b4159b4 = L.marker(
                [40.514, -114.287],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_af8d502aab302496c38ba57365897481 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c85147389743fcd6a157c00a2b4159b4.setIcon(icon_af8d502aab302496c38ba57365897481);
        
    
        var popup_c70b77fdba6748da12f82b9e80f950d0 = L.popup({"maxWidth": "100%"});

        
            
                var html_4665c646462e3f7032c544f2659681e4 = $(`<div id="html_4665c646462e3f7032c544f2659681e4" style="width: 100.0%; height: 100.0%;"><strong>Goshute Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6094" target="_blank">More Info</a></div>`)[0];
                popup_c70b77fdba6748da12f82b9e80f950d0.setContent(html_4665c646462e3f7032c544f2659681e4);
            
        

        marker_c85147389743fcd6a157c00a2b4159b4.bindPopup(popup_c70b77fdba6748da12f82b9e80f950d0)
        ;

        
    
    
            var marker_8588fc6ea3426236052412b07b2cae7b = L.marker(
                [50.686, 156.014],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_404dbc06306b4dc563e8223ab7717330 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_8588fc6ea3426236052412b07b2cae7b.setIcon(icon_404dbc06306b4dc563e8223ab7717330);
        
    
        var popup_1713fe1abca166a3b2643a5daaf2a119 = L.popup({"maxWidth": "100%"});

        
            
                var html_8f64ef9f26846d04269fcf5a8f851f0a = $(`<div id="html_8f64ef9f26846d04269fcf5a8f851f0a" style="width: 100.0%; height: 100.0%;"><strong>Ebeko Volcano, Russia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6102" target="_blank">More Info</a></div>`)[0];
                popup_1713fe1abca166a3b2643a5daaf2a119.setContent(html_8f64ef9f26846d04269fcf5a8f851f0a);
            
        

        marker_8588fc6ea3426236052412b07b2cae7b.bindPopup(popup_1713fe1abca166a3b2643a5daaf2a119)
        ;

        
    
    
            var marker_861e2174e197b6fb61a7eda770681985 = L.marker(
                [64.405, -149.506],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f17032f2cfed48bb3d2a517216c9f05f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_861e2174e197b6fb61a7eda770681985.setIcon(icon_f17032f2cfed48bb3d2a517216c9f05f);
        
    
        var popup_7b2d96996169e779ae3039e8505cffd4 = L.popup({"maxWidth": "100%"});

        
            
                var html_decbab5b37b256c1bb09bb0128002bb3 = $(`<div id="html_decbab5b37b256c1bb09bb0128002bb3" style="width: 100.0%; height: 100.0%;"><strong>Clear Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6107" target="_blank">More Info</a></div>`)[0];
                popup_7b2d96996169e779ae3039e8505cffd4.setContent(html_decbab5b37b256c1bb09bb0128002bb3);
            
        

        marker_861e2174e197b6fb61a7eda770681985.bindPopup(popup_7b2d96996169e779ae3039e8505cffd4)
        ;

        
    
    
            var marker_a767717f00fbc07227c645dda9166fb5 = L.marker(
                [65.01, -148.747],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cd6e4b46426ff9af9be5dbc968581b50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a767717f00fbc07227c645dda9166fb5.setIcon(icon_cd6e4b46426ff9af9be5dbc968581b50);
        
    
        var popup_203b6ed7b32adbe124b025c020423142 = L.popup({"maxWidth": "100%"});

        
            
                var html_c4517b9b9bd425425cc13aeeb77e46ab = $(`<div id="html_c4517b9b9bd425425cc13aeeb77e46ab" style="width: 100.0%; height: 100.0%;"><strong>Minto Lakes Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6095" target="_blank">More Info</a></div>`)[0];
                popup_203b6ed7b32adbe124b025c020423142.setContent(html_c4517b9b9bd425425cc13aeeb77e46ab);
            
        

        marker_a767717f00fbc07227c645dda9166fb5.bindPopup(popup_203b6ed7b32adbe124b025c020423142)
        ;

        
    
    
            var marker_4d8490e58c45211bc9ce0add97d2c37f = L.marker(
                [40.081, -114.422],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_265a0c2a8434149161edcf51676b1f0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4d8490e58c45211bc9ce0add97d2c37f.setIcon(icon_265a0c2a8434149161edcf51676b1f0b);
        
    
        var popup_db68cce1958b0b7fe434596806083050 = L.popup({"maxWidth": "100%"});

        
            
                var html_efa0d369d256befeb8bea6f757302833 = $(`<div id="html_efa0d369d256befeb8bea6f757302833" style="width: 100.0%; height: 100.0%;"><strong>Kinsley Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6090" target="_blank">More Info</a></div>`)[0];
                popup_db68cce1958b0b7fe434596806083050.setContent(html_efa0d369d256befeb8bea6f757302833);
            
        

        marker_4d8490e58c45211bc9ce0add97d2c37f.bindPopup(popup_db68cce1958b0b7fe434596806083050)
        ;

        
    
    
            var marker_68e1ccbec0ef2b11311c3599601acace = L.marker(
                [61.57, -158.006],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4cb2525ad22a4d38799775c4c3b0c5ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_68e1ccbec0ef2b11311c3599601acace.setIcon(icon_4cb2525ad22a4d38799775c4c3b0c5ae);
        
    
        var popup_f40118e9ca4599c17a736f58a40c5dcb = L.popup({"maxWidth": "100%"});

        
            
                var html_a96bed8c5e08647ad11355a35c5a0293 = $(`<div id="html_a96bed8c5e08647ad11355a35c5a0293" style="width: 100.0%; height: 100.0%;"><strong>Lime Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6092" target="_blank">More Info</a></div>`)[0];
                popup_f40118e9ca4599c17a736f58a40c5dcb.setContent(html_a96bed8c5e08647ad11355a35c5a0293);
            
        

        marker_68e1ccbec0ef2b11311c3599601acace.bindPopup(popup_f40118e9ca4599c17a736f58a40c5dcb)
        ;

        
    
    
            var marker_5d7e4d38e0ea06b61bc7cdf552f09d8e = L.marker(
                [31.849, -111.574],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7e7cd542d236dd278a60d1e8b7247b2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5d7e4d38e0ea06b61bc7cdf552f09d8e.setIcon(icon_7e7cd542d236dd278a60d1e8b7247b2c);
        
    
        var popup_0a4ce71990b0d5f409ab4a206f20142e = L.popup({"maxWidth": "100%"});

        
            
                var html_f48d4390ea528f37d0eb5354b41a7cf7 = $(`<div id="html_f48d4390ea528f37d0eb5354b41a7cf7" style="width: 100.0%; height: 100.0%;"><strong>Contreras Fire </strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6087" target="_blank">More Info</a></div>`)[0];
                popup_0a4ce71990b0d5f409ab4a206f20142e.setContent(html_f48d4390ea528f37d0eb5354b41a7cf7);
            
        

        marker_5d7e4d38e0ea06b61bc7cdf552f09d8e.bindPopup(popup_0a4ce71990b0d5f409ab4a206f20142e)
        ;

        
    
    
            var marker_bc41f26e97dfd279fdf7b8125489aa0c = L.marker(
                [-76.9, -45.89],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_df159de0839cd7da4e2eaf557c10c38e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_bc41f26e97dfd279fdf7b8125489aa0c.setIcon(icon_df159de0839cd7da4e2eaf557c10c38e);
        
    
        var popup_a1c62395297b8217473410370d96a145 = L.popup({"maxWidth": "100%"});

        
            
                var html_9524f6c981a6d77786ecb7cfe31870fe = $(`<div id="html_9524f6c981a6d77786ecb7cfe31870fe" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A74A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6080" target="_blank">More Info</a></div>`)[0];
                popup_a1c62395297b8217473410370d96a145.setContent(html_9524f6c981a6d77786ecb7cfe31870fe);
            
        

        marker_bc41f26e97dfd279fdf7b8125489aa0c.bindPopup(popup_a1c62395297b8217473410370d96a145)
        ;

        
    
    
            var marker_ae7c05216fa837f0f341e32c3ac1c9d7 = L.marker(
                [-76.75, -44.91],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a36f6a4d9aade17653e66fc22de2c510 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_ae7c05216fa837f0f341e32c3ac1c9d7.setIcon(icon_a36f6a4d9aade17653e66fc22de2c510);
        
    
        var popup_93b46c053695495b156aaa922c8852bf = L.popup({"maxWidth": "100%"});

        
            
                var html_8404125aca2100985c6e9d8972d4aaa2 = $(`<div id="html_8404125aca2100985c6e9d8972d4aaa2" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A74B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6081" target="_blank">More Info</a></div>`)[0];
                popup_93b46c053695495b156aaa922c8852bf.setContent(html_8404125aca2100985c6e9d8972d4aaa2);
            
        

        marker_ae7c05216fa837f0f341e32c3ac1c9d7.bindPopup(popup_93b46c053695495b156aaa922c8852bf)
        ;

        
    
    
            var marker_8e6240486c19dba2f181839dc431a23c = L.marker(
                [62.366, -162.799],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a160c47662c7c7b0c445c28b65c519b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8e6240486c19dba2f181839dc431a23c.setIcon(icon_a160c47662c7c7b0c445c28b65c519b8);
        
    
        var popup_a1feadff74410a798057eb4e0cfba17a = L.popup({"maxWidth": "100%"});

        
            
                var html_5fb1342f5a523da83e04ba10d44cd5ae = $(`<div id="html_5fb1342f5a523da83e04ba10d44cd5ae" style="width: 100.0%; height: 100.0%;"><strong>East Fork Fire </strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6079" target="_blank">More Info</a></div>`)[0];
                popup_a1feadff74410a798057eb4e0cfba17a.setContent(html_5fb1342f5a523da83e04ba10d44cd5ae);
            
        

        marker_8e6240486c19dba2f181839dc431a23c.bindPopup(popup_a1feadff74410a798057eb4e0cfba17a)
        ;

        
    
    
            var marker_a07ced796df360d1710f9f6fcec5b00a = L.marker(
                [33.204, -108.059],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_66bd4f3d9e839f036df2dbad34283d23 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a07ced796df360d1710f9f6fcec5b00a.setIcon(icon_66bd4f3d9e839f036df2dbad34283d23);
        
    
        var popup_843c7f2cfc33a22b9467167319f1d53c = L.popup({"maxWidth": "100%"});

        
            
                var html_8dabcd6c1cc4f84c173cde2174d9f342 = $(`<div id="html_8dabcd6c1cc4f84c173cde2174d9f342" style="width: 100.0%; height: 100.0%;"><strong>Black Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6063" target="_blank">More Info</a></div>`)[0];
                popup_843c7f2cfc33a22b9467167319f1d53c.setContent(html_8dabcd6c1cc4f84c173cde2174d9f342);
            
        

        marker_a07ced796df360d1710f9f6fcec5b00a.bindPopup(popup_843c7f2cfc33a22b9467167319f1d53c)
        ;

        
    
    
            var marker_e5b7fd0e11a0332ec65539901363bf08 = L.marker(
                [37.483, -112.358],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_90e875805dd4984575a64f401a37e1a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e5b7fd0e11a0332ec65539901363bf08.setIcon(icon_90e875805dd4984575a64f401a37e1a5);
        
    
        var popup_86db2bd345028962a0d25615fe6274a3 = L.popup({"maxWidth": "100%"});

        
            
                var html_ddf697f0fe17f33aedb00dbd13c4787d = $(`<div id="html_ddf697f0fe17f33aedb00dbd13c4787d" style="width: 100.0%; height: 100.0%;"><strong>Left Fork Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6091" target="_blank">More Info</a></div>`)[0];
                popup_86db2bd345028962a0d25615fe6274a3.setContent(html_ddf697f0fe17f33aedb00dbd13c4787d);
            
        

        marker_e5b7fd0e11a0332ec65539901363bf08.bindPopup(popup_86db2bd345028962a0d25615fe6274a3)
        ;

        
    
    
            var marker_93a9b80f4dd6ad428f6caba744795b79 = L.marker(
                [-65.68, 99.61],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_21a8535e2e6a08b6b7bcdfa54f1780c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_93a9b80f4dd6ad428f6caba744795b79.setIcon(icon_21a8535e2e6a08b6b7bcdfa54f1780c9);
        
    
        var popup_2031b878709cceffa430fd5b508379e4 = L.popup({"maxWidth": "100%"});

        
            
                var html_2eae3f3bc58a9cf6a703f175e04b73ea = $(`<div id="html_2eae3f3bc58a9cf6a703f175e04b73ea" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C39</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6051" target="_blank">More Info</a></div>`)[0];
                popup_2031b878709cceffa430fd5b508379e4.setContent(html_2eae3f3bc58a9cf6a703f175e04b73ea);
            
        

        marker_93a9b80f4dd6ad428f6caba744795b79.bindPopup(popup_2031b878709cceffa430fd5b508379e4)
        ;

        
    
    
            var marker_71ef5e0858b05dc87f9de3d63a90b4b0 = L.marker(
                [35.775, -106.584],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8cd76434be424f422557aaddc606fee6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_71ef5e0858b05dc87f9de3d63a90b4b0.setIcon(icon_8cd76434be424f422557aaddc606fee6);
        
    
        var popup_558a7713d18d586653babeb3a7393129 = L.popup({"maxWidth": "100%"});

        
            
                var html_35fe0518b51f890159215237c662c7c9 = $(`<div id="html_35fe0518b51f890159215237c662c7c9" style="width: 100.0%; height: 100.0%;"><strong>Cerro Pelado Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6064" target="_blank">More Info</a></div>`)[0];
                popup_558a7713d18d586653babeb3a7393129.setContent(html_35fe0518b51f890159215237c662c7c9);
            
        

        marker_71ef5e0858b05dc87f9de3d63a90b4b0.bindPopup(popup_558a7713d18d586653babeb3a7393129)
        ;

        
    
    
            var marker_7e9cee930dae3191ef3e6fc44f3a5e21 = L.marker(
                [35.759, -105.503],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c1e9b8c1f37e6eefc998e9cebffd9280 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7e9cee930dae3191ef3e6fc44f3a5e21.setIcon(icon_c1e9b8c1f37e6eefc998e9cebffd9280);
        
    
        var popup_25d80b6aac56af5328369f957cdd227b = L.popup({"maxWidth": "100%"});

        
            
                var html_ab938b0da248db0d411be4201d4a5d47 = $(`<div id="html_ab938b0da248db0d411be4201d4a5d47" style="width: 100.0%; height: 100.0%;"><strong>Calf Canyon Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6060" target="_blank">More Info</a></div>`)[0];
                popup_25d80b6aac56af5328369f957cdd227b.setContent(html_ab938b0da248db0d411be4201d4a5d47);
            
        

        marker_7e9cee930dae3191ef3e6fc44f3a5e21.bindPopup(popup_25d80b6aac56af5328369f957cdd227b)
        ;

        
    
    
            var marker_90ee412c33ccd16aba34e538b2b108d5 = L.marker(
                [34.403, -112.426],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5802e788b9a9d607fddaf890619c286f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_90ee412c33ccd16aba34e538b2b108d5.setIcon(icon_5802e788b9a9d607fddaf890619c286f);
        
    
        var popup_6dba982fd6d772824b3880efe4e36d48 = L.popup({"maxWidth": "100%"});

        
            
                var html_d6e1b77ccb23c6ba90e6a595b7bbf19f = $(`<div id="html_d6e1b77ccb23c6ba90e6a595b7bbf19f" style="width: 100.0%; height: 100.0%;"><strong>Crooks Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6068" target="_blank">More Info</a></div>`)[0];
                popup_6dba982fd6d772824b3880efe4e36d48.setContent(html_d6e1b77ccb23c6ba90e6a595b7bbf19f);
            
        

        marker_90ee412c33ccd16aba34e538b2b108d5.bindPopup(popup_6dba982fd6d772824b3880efe4e36d48)
        ;

        
    
    
            var marker_40ccd1128ab50a3437551b4b6f2734b4 = L.marker(
                [35.718, -105.399],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ba2ada0b2d06650c8e887fe635772e27 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_40ccd1128ab50a3437551b4b6f2734b4.setIcon(icon_ba2ada0b2d06650c8e887fe635772e27);
        
    
        var popup_4ed677cc0d190aafb1b7ee2f35d7b1d9 = L.popup({"maxWidth": "100%"});

        
            
                var html_c2c89d07615f1b9083d34dcc523bdb68 = $(`<div id="html_c2c89d07615f1b9083d34dcc523bdb68" style="width: 100.0%; height: 100.0%;"><strong>Hermits Peak Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6059" target="_blank">More Info</a></div>`)[0];
                popup_4ed677cc0d190aafb1b7ee2f35d7b1d9.setContent(html_c2c89d07615f1b9083d34dcc523bdb68);
            
        

        marker_40ccd1128ab50a3437551b4b6f2734b4.bindPopup(popup_4ed677cc0d190aafb1b7ee2f35d7b1d9)
        ;

        
    
    
            var marker_d0986332c1db7a84ae9712c61e3a40a3 = L.marker(
                [-65.06, 101.72],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1004c2486ba22e6b17bc9b8b130a8d79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_d0986332c1db7a84ae9712c61e3a40a3.setIcon(icon_1004c2486ba22e6b17bc9b8b130a8d79);
        
    
        var popup_1006064904aa966d6f15e40aef895623 = L.popup({"maxWidth": "100%"});

        
            
                var html_cecd76e84a7ce6ebec309c32239a65e9 = $(`<div id="html_cecd76e84a7ce6ebec309c32239a65e9" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C38B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6037" target="_blank">More Info</a></div>`)[0];
                popup_1006064904aa966d6f15e40aef895623.setContent(html_cecd76e84a7ce6ebec309c32239a65e9);
            
        

        marker_d0986332c1db7a84ae9712c61e3a40a3.bindPopup(popup_1006064904aa966d6f15e40aef895623)
        ;

        
    
    
            var marker_ba5cab3ba2bb6317ab2f1ffe620def39 = L.marker(
                [37.543469882, -120.533005422],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_dfbb698b5a1fe000ed919fd3cce97657 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ba5cab3ba2bb6317ab2f1ffe620def39.setIcon(icon_dfbb698b5a1fe000ed919fd3cce97657);
        
    
        var popup_b9725dcf501ca6bf0a3d0f19495dff91 = L.popup({"maxWidth": "100%"});

        
            
                var html_c1b194e7c59ab61cd2fa2569e07a4e27 = $(`<div id="html_c1b194e7c59ab61cd2fa2569e07a4e27" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Merced, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6018" target="_blank">More Info</a></div>`)[0];
                popup_b9725dcf501ca6bf0a3d0f19495dff91.setContent(html_c1b194e7c59ab61cd2fa2569e07a4e27);
            
        

        marker_ba5cab3ba2bb6317ab2f1ffe620def39.bindPopup(popup_b9725dcf501ca6bf0a3d0f19495dff91)
        ;

        
    
    
            var marker_d62b25988cabf562f1e955ae04d10e1a = L.marker(
                [33.417091555, -110.862229905],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ff18f1063929b8a6b80029235a82ec54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d62b25988cabf562f1e955ae04d10e1a.setIcon(icon_ff18f1063929b8a6b80029235a82ec54);
        
    
        var popup_7f9673e8d9be777e7d031f4b0bc1353c = L.popup({"maxWidth": "100%"});

        
            
                var html_b2d699dc22d3d6b57e79e70739c3641b = $(`<div id="html_b2d699dc22d3d6b57e79e70739c3641b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6014" target="_blank">More Info</a></div>`)[0];
                popup_7f9673e8d9be777e7d031f4b0bc1353c.setContent(html_b2d699dc22d3d6b57e79e70739c3641b);
            
        

        marker_d62b25988cabf562f1e955ae04d10e1a.bindPopup(popup_7f9673e8d9be777e7d031f4b0bc1353c)
        ;

        
    
    
            var marker_780c8a5fd83e534e62a164625b091df4 = L.marker(
                [19.023, -98.622],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ef7909d2f91b0abf8557959ff40ef421 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_780c8a5fd83e534e62a164625b091df4.setIcon(icon_ef7909d2f91b0abf8557959ff40ef421);
        
    
        var popup_7a87d6ecc2dc51fa90e5cd39312483a4 = L.popup({"maxWidth": "100%"});

        
            
                var html_3d7e05c562aca8ea1022e80691b29ad0 = $(`<div id="html_3d7e05c562aca8ea1022e80691b29ad0" style="width: 100.0%; height: 100.0%;"><strong>Popocatepetl Volcano, Mexico</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6017" target="_blank">More Info</a></div>`)[0];
                popup_7a87d6ecc2dc51fa90e5cd39312483a4.setContent(html_3d7e05c562aca8ea1022e80691b29ad0);
            
        

        marker_780c8a5fd83e534e62a164625b091df4.bindPopup(popup_7a87d6ecc2dc51fa90e5cd39312483a4)
        ;

        
    
    
            var marker_2c9c8e267b0f1ede17559f6b6ce7bcce = L.marker(
                [41.002191345, -8.009577928],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_6a7895338ba7aea0ac6ba152e2e9e885 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2c9c8e267b0f1ede17559f6b6ce7bcce.setIcon(icon_6a7895338ba7aea0ac6ba152e2e9e885);
        
    
        var popup_95c235e4c28630858f90487a9757ec1b = L.popup({"maxWidth": "100%"});

        
            
                var html_f0ddab3e8366ff32d83b557ca205aeb6 = $(`<div id="html_f0ddab3e8366ff32d83b557ca205aeb6" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Viseu - Portugal</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6006" target="_blank">More Info</a></div>`)[0];
                popup_95c235e4c28630858f90487a9757ec1b.setContent(html_f0ddab3e8366ff32d83b557ca205aeb6);
            
        

        marker_2c9c8e267b0f1ede17559f6b6ce7bcce.bindPopup(popup_95c235e4c28630858f90487a9757ec1b)
        ;

        
    
    
            var marker_1eacc876fc8375102b8e82271be0f163 = L.marker(
                [41.517611178, -8.091955323],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a002d7a4b9ac514a20414dc3d967856d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1eacc876fc8375102b8e82271be0f163.setIcon(icon_a002d7a4b9ac514a20414dc3d967856d);
        
    
        var popup_9bca42eeff034d44637aea17deadf365 = L.popup({"maxWidth": "100%"});

        
            
                var html_29e93b685453470b5318aa98b03b1e34 = $(`<div id="html_29e93b685453470b5318aa98b03b1e34" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Braga - Portugal</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6004" target="_blank">More Info</a></div>`)[0];
                popup_9bca42eeff034d44637aea17deadf365.setContent(html_29e93b685453470b5318aa98b03b1e34);
            
        

        marker_1eacc876fc8375102b8e82271be0f163.bindPopup(popup_9bca42eeff034d44637aea17deadf365)
        ;

        
    
    
            var marker_8d7f7cb9a4af4139a73dd58b3cd7a213 = L.marker(
                [41.808267161, -7.675316232],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f7e928db8e3efeb67a767b9d288527f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8d7f7cb9a4af4139a73dd58b3cd7a213.setIcon(icon_f7e928db8e3efeb67a767b9d288527f9);
        
    
        var popup_de1720d582d07d6152f7a414cde63d75 = L.popup({"maxWidth": "100%"});

        
            
                var html_3b8230ad66a280828fccc177cf528f15 = $(`<div id="html_3b8230ad66a280828fccc177cf528f15" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Vila Real - Portugal</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6005" target="_blank">More Info</a></div>`)[0];
                popup_de1720d582d07d6152f7a414cde63d75.setContent(html_3b8230ad66a280828fccc177cf528f15);
            
        

        marker_8d7f7cb9a4af4139a73dd58b3cd7a213.bindPopup(popup_de1720d582d07d6152f7a414cde63d75)
        ;

        
    
    
            var marker_c55136f58eb81fb9d8c3d217f02f9b2d = L.marker(
                [33.416654251, -110.860071422],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3f6abc0eec1c3fb2ac481685a41fb7ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c55136f58eb81fb9d8c3d217f02f9b2d.setIcon(icon_3f6abc0eec1c3fb2ac481685a41fb7ab);
        
    
        var popup_52c85db9836106317b85fc1aedfe60dc = L.popup({"maxWidth": "100%"});

        
            
                var html_8cc68860a708ec073c138488d0719d0d = $(`<div id="html_8cc68860a708ec073c138488d0719d0d" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6003" target="_blank">More Info</a></div>`)[0];
                popup_52c85db9836106317b85fc1aedfe60dc.setContent(html_8cc68860a708ec073c138488d0719d0d);
            
        

        marker_c55136f58eb81fb9d8c3d217f02f9b2d.bindPopup(popup_52c85db9836106317b85fc1aedfe60dc)
        ;

        
    
    
            var marker_bb61669883823882b0fff19aad723505 = L.marker(
                [-69.89, 2.34],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7c3e05e1766455421bec5850e68c09b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_bb61669883823882b0fff19aad723505.setIcon(icon_7c3e05e1766455421bec5850e68c09b8);
        
    
        var popup_27792a89017d381f8d20252fddb49fed = L.popup({"maxWidth": "100%"});

        
            
                var html_3f56d41d22c06f508dfdfe94d2c7be3c = $(`<div id="html_3f56d41d22c06f508dfdfe94d2c7be3c" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D31</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6007" target="_blank">More Info</a></div>`)[0];
                popup_27792a89017d381f8d20252fddb49fed.setContent(html_3f56d41d22c06f508dfdfe94d2c7be3c);
            
        

        marker_bb61669883823882b0fff19aad723505.bindPopup(popup_27792a89017d381f8d20252fddb49fed)
        ;

        
    
    
            var marker_d498cac780afad9f56f761b9649265fe = L.marker(
                [42.971017184, -0.564755574],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a3ac6527a79538c8fb9904dad065466f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d498cac780afad9f56f761b9649265fe.setIcon(icon_a3ac6527a79538c8fb9904dad065466f);
        
    
        var popup_5aff767c073574383cdb9f6db0b94408 = L.popup({"maxWidth": "100%"});

        
            
                var html_400b2a9fa9096a02144f2ab2f9dc64e4 = $(`<div id="html_400b2a9fa9096a02144f2ab2f9dc64e4" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Tarbes, Midi-Pyrnes - France</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_6001" target="_blank">More Info</a></div>`)[0];
                popup_5aff767c073574383cdb9f6db0b94408.setContent(html_400b2a9fa9096a02144f2ab2f9dc64e4);
            
        

        marker_d498cac780afad9f56f761b9649265fe.bindPopup(popup_5aff767c073574383cdb9f6db0b94408)
        ;

        
    
    
            var marker_1dbbb61526b2694ffc98aab066a90b89 = L.marker(
                [36.27203, -121.79929],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8b39732411dce01c48e371765fdd5b9e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1dbbb61526b2694ffc98aab066a90b89.setIcon(icon_8b39732411dce01c48e371765fdd5b9e);
        
    
        var popup_843e52716608958fb9c277453c663c7c = L.popup({"maxWidth": "100%"});

        
            
                var html_8029274960ffa4030e7018926a52b7f1 = $(`<div id="html_8029274960ffa4030e7018926a52b7f1" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Big Sur, California, USA</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5998" target="_blank">More Info</a></div>`)[0];
                popup_843e52716608958fb9c277453c663c7c.setContent(html_8029274960ffa4030e7018926a52b7f1);
            
        

        marker_1dbbb61526b2694ffc98aab066a90b89.bindPopup(popup_843e52716608958fb9c277453c663c7c)
        ;

        
    
    
            var marker_b7b2b404e007db3185c0df56ad338052 = L.marker(
                [42.993829605, -0.401425255],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b7a70af09adb05caeeea2f7523acf723 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b7b2b404e007db3185c0df56ad338052.setIcon(icon_b7a70af09adb05caeeea2f7523acf723);
        
    
        var popup_a33d56dbd65bebff1f8f4703918d551e = L.popup({"maxWidth": "100%"});

        
            
                var html_d35e88941d41f9dd84f72f68b5b204cc = $(`<div id="html_d35e88941d41f9dd84f72f68b5b204cc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Tarbes, Midi-Pyrnes - France</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5990" target="_blank">More Info</a></div>`)[0];
                popup_a33d56dbd65bebff1f8f4703918d551e.setContent(html_d35e88941d41f9dd84f72f68b5b204cc);
            
        

        marker_b7b2b404e007db3185c0df56ad338052.bindPopup(popup_a33d56dbd65bebff1f8f4703918d551e)
        ;

        
    
    
            var marker_542633665e054995787f5abb77071367 = L.marker(
                [39.95983, -105.19282],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_430102c2b4aceb33b63ffb925d9bdeb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_542633665e054995787f5abb77071367.setIcon(icon_430102c2b4aceb33b63ffb925d9bdeb6);
        
    
        var popup_3a977ce776f9ceef954eceed24aa6a49 = L.popup({"maxWidth": "100%"});

        
            
                var html_bc84ade617f2e7b5b95ab731c73466ca = $(`<div id="html_bc84ade617f2e7b5b95ab731c73466ca" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Boulder, Colorado - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5988" target="_blank">More Info</a></div>`)[0];
                popup_3a977ce776f9ceef954eceed24aa6a49.setContent(html_bc84ade617f2e7b5b95ab731c73466ca);
            
        

        marker_542633665e054995787f5abb77071367.bindPopup(popup_3a977ce776f9ceef954eceed24aa6a49)
        ;

        
    
    
            var marker_578dbe893aec2e29b9185e8b527e6c9a = L.marker(
                [34.396954841, -117.729843629],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c2771cba7d3b5db1e2cc3935d4f83abf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_578dbe893aec2e29b9185e8b527e6c9a.setIcon(icon_c2771cba7d3b5db1e2cc3935d4f83abf);
        
    
        var popup_a82a32d6396b8b5424e692ae828f8fd3 = L.popup({"maxWidth": "100%"});

        
            
                var html_becc6c5ae10c00f7eb9dff8cc22e3887 = $(`<div id="html_becc6c5ae10c00f7eb9dff8cc22e3887" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Victorville, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5983" target="_blank">More Info</a></div>`)[0];
                popup_a82a32d6396b8b5424e692ae828f8fd3.setContent(html_becc6c5ae10c00f7eb9dff8cc22e3887);
            
        

        marker_578dbe893aec2e29b9185e8b527e6c9a.bindPopup(popup_a82a32d6396b8b5424e692ae828f8fd3)
        ;

        
    
    
            var marker_d6c7b230e14ae9917db0776fd55ad077 = L.marker(
                [33.417201559, -110.861196043],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_25590386a004e86cc73a07998253e5dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d6c7b230e14ae9917db0776fd55ad077.setIcon(icon_25590386a004e86cc73a07998253e5dd);
        
    
        var popup_530b05731da2a19b8d3cc915ec48f2c6 = L.popup({"maxWidth": "100%"});

        
            
                var html_1041d30de3311ad99689a2bb829ab7c0 = $(`<div id="html_1041d30de3311ad99689a2bb829ab7c0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5976" target="_blank">More Info</a></div>`)[0];
                popup_530b05731da2a19b8d3cc915ec48f2c6.setContent(html_1041d30de3311ad99689a2bb829ab7c0);
            
        

        marker_d6c7b230e14ae9917db0776fd55ad077.bindPopup(popup_530b05731da2a19b8d3cc915ec48f2c6)
        ;

        
    
    
            var marker_472c672f89c6b47cea80c0a34a0add8c = L.marker(
                [35.36753333, -120.045451449],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_746348d1b1d985a2ea13c5467c179811 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_472c672f89c6b47cea80c0a34a0add8c.setIcon(icon_746348d1b1d985a2ea13c5467c179811);
        
    
        var popup_da261e53bf3d5048cc78525fdd7d19ad = L.popup({"maxWidth": "100%"});

        
            
                var html_38bcf1e10c4a76cfde3c2a93eefe8ff9 = $(`<div id="html_38bcf1e10c4a76cfde3c2a93eefe8ff9" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of San Luis Obispo, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5977" target="_blank">More Info</a></div>`)[0];
                popup_da261e53bf3d5048cc78525fdd7d19ad.setContent(html_38bcf1e10c4a76cfde3c2a93eefe8ff9);
            
        

        marker_472c672f89c6b47cea80c0a34a0add8c.bindPopup(popup_da261e53bf3d5048cc78525fdd7d19ad)
        ;

        
    
    
            var marker_0cf1a2330cddceac74fcb7b175a78404 = L.marker(
                [42.686767291, -111.590258883],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2b591174321f4c064228807657ca68d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0cf1a2330cddceac74fcb7b175a78404.setIcon(icon_2b591174321f4c064228807657ca68d5);
        
    
        var popup_7171730eb254c56aab1149bebd8e6cca = L.popup({"maxWidth": "100%"});

        
            
                var html_a1c812be0917b9b106ddb0657b72a66b = $(`<div id="html_a1c812be0917b9b106ddb0657b72a66b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Montpelier, Idaho - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5975" target="_blank">More Info</a></div>`)[0];
                popup_7171730eb254c56aab1149bebd8e6cca.setContent(html_a1c812be0917b9b106ddb0657b72a66b);
            
        

        marker_0cf1a2330cddceac74fcb7b175a78404.bindPopup(popup_7171730eb254c56aab1149bebd8e6cca)
        ;

        
    
    
            var marker_26ee6fdecec64341dbe2617b649314e8 = L.marker(
                [33.954878389, -117.488521503],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_556d29e64fff3162be8ebb96d1a66b4d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_26ee6fdecec64341dbe2617b649314e8.setIcon(icon_556d29e64fff3162be8ebb96d1a66b4d);
        
    
        var popup_63199642fc55ec525f5ce7bd23c4a0f2 = L.popup({"maxWidth": "100%"});

        
            
                var html_5e5b107f39e114e5a0db4103fd106694 = $(`<div id="html_5e5b107f39e114e5a0db4103fd106694" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Riverside, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5974" target="_blank">More Info</a></div>`)[0];
                popup_63199642fc55ec525f5ce7bd23c4a0f2.setContent(html_5e5b107f39e114e5a0db4103fd106694);
            
        

        marker_26ee6fdecec64341dbe2617b649314e8.bindPopup(popup_63199642fc55ec525f5ce7bd23c4a0f2)
        ;

        
    
    
            var marker_1d13a2b58cbf63c9159fff7b83078dfd = L.marker(
                [35.621645413, -115.354724564],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_fae871bd2ae14bc9680ead77c3f132f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1d13a2b58cbf63c9159fff7b83078dfd.setIcon(icon_fae871bd2ae14bc9680ead77c3f132f3);
        
    
        var popup_b96ca53f4e9215c78b193583b3db9231 = L.popup({"maxWidth": "100%"});

        
            
                var html_892c2459141ec6d3cb36e1d9e0da4713 = $(`<div id="html_892c2459141ec6d3cb36e1d9e0da4713" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Boulder City, Nevada - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5972" target="_blank">More Info</a></div>`)[0];
                popup_b96ca53f4e9215c78b193583b3db9231.setContent(html_892c2459141ec6d3cb36e1d9e0da4713);
            
        

        marker_1d13a2b58cbf63c9159fff7b83078dfd.bindPopup(popup_b96ca53f4e9215c78b193583b3db9231)
        ;

        
    
    
            var marker_663dbcdfd7288c3914ad055db46f99bb = L.marker(
                [51.12941477, -0.444536626],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_6c9b971fdfccd8553bdb1e1c2ef1e17b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_663dbcdfd7288c3914ad055db46f99bb.setIcon(icon_6c9b971fdfccd8553bdb1e1c2ef1e17b);
        
    
        var popup_d9ac3d1c12dcd2195cdf8aa8499881c6 = L.popup({"maxWidth": "100%"});

        
            
                var html_58151fc024c2c886426bba4324d98c9f = $(`<div id="html_58151fc024c2c886426bba4324d98c9f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Brighton, Brighton and Hove - United Kingdom</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5968" target="_blank">More Info</a></div>`)[0];
                popup_d9ac3d1c12dcd2195cdf8aa8499881c6.setContent(html_58151fc024c2c886426bba4324d98c9f);
            
        

        marker_663dbcdfd7288c3914ad055db46f99bb.bindPopup(popup_d9ac3d1c12dcd2195cdf8aa8499881c6)
        ;

        
    
    
            var marker_2e2d8b5d83517e74b503838c03a844c9 = L.marker(
                [45.009877614, -123.929934447],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1bdbd3e8816d30174f6af6852d0edc92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2e2d8b5d83517e74b503838c03a844c9.setIcon(icon_1bdbd3e8816d30174f6af6852d0edc92);
        
    
        var popup_a55ec4e3925eea4c80d678562738017f = L.popup({"maxWidth": "100%"});

        
            
                var html_7eec4a24241ec2327208a7729aa791b1 = $(`<div id="html_7eec4a24241ec2327208a7729aa791b1" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - S of Tillamook, Oregon - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5966" target="_blank">More Info</a></div>`)[0];
                popup_a55ec4e3925eea4c80d678562738017f.setContent(html_7eec4a24241ec2327208a7729aa791b1);
            
        

        marker_2e2d8b5d83517e74b503838c03a844c9.bindPopup(popup_a55ec4e3925eea4c80d678562738017f)
        ;

        
    
    
            var marker_7527be5d48b14e3f7d601f8b2a8c645b = L.marker(
                [33.416293179, -110.861165478],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_24509069085a3b8fd3613128d7658812 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7527be5d48b14e3f7d601f8b2a8c645b.setIcon(icon_24509069085a3b8fd3613128d7658812);
        
    
        var popup_b6fca5693fcb5281ac5b0ae509e461f8 = L.popup({"maxWidth": "100%"});

        
            
                var html_d7c2c4c280c96cf8d46979964b07ca70 = $(`<div id="html_d7c2c4c280c96cf8d46979964b07ca70" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5962" target="_blank">More Info</a></div>`)[0];
                popup_b6fca5693fcb5281ac5b0ae509e461f8.setContent(html_d7c2c4c280c96cf8d46979964b07ca70);
            
        

        marker_7527be5d48b14e3f7d601f8b2a8c645b.bindPopup(popup_b6fca5693fcb5281ac5b0ae509e461f8)
        ;

        
    
    
            var marker_c2caa02afa2e921e324d536ced025155 = L.marker(
                [44.062464887, -0.011595617],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b9db0cc1085f30015f04a40379ded3f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c2caa02afa2e921e324d536ced025155.setIcon(icon_b9db0cc1085f30015f04a40379ded3f0);
        
    
        var popup_6f032095e56e5e06a8aa5703237725c7 = L.popup({"maxWidth": "100%"});

        
            
                var html_6854a2caf89119bef22424d468f77925 = $(`<div id="html_6854a2caf89119bef22424d468f77925" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Agen, Aquitaine - France</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5955" target="_blank">More Info</a></div>`)[0];
                popup_6f032095e56e5e06a8aa5703237725c7.setContent(html_6854a2caf89119bef22424d468f77925);
            
        

        marker_c2caa02afa2e921e324d536ced025155.bindPopup(popup_6f032095e56e5e06a8aa5703237725c7)
        ;

        
    
    
            var marker_ba1a53cb109c12676224a97feec062fc = L.marker(
                [52.076, -176.13],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_05faba5c94a35e62c33d0c07efe9345b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_ba1a53cb109c12676224a97feec062fc.setIcon(icon_05faba5c94a35e62c33d0c07efe9345b);
        
    
        var popup_9b512db89628ae7fc91080aded2a67d1 = L.popup({"maxWidth": "100%"});

        
            
                var html_91e83a70542fe38f8b009938f1ec9d62 = $(`<div id="html_91e83a70542fe38f8b009938f1ec9d62" style="width: 100.0%; height: 100.0%;"><strong>Great Sitkin Volcano, Andreanof Islands (U.S.)</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5959" target="_blank">More Info</a></div>`)[0];
                popup_9b512db89628ae7fc91080aded2a67d1.setContent(html_91e83a70542fe38f8b009938f1ec9d62);
            
        

        marker_ba1a53cb109c12676224a97feec062fc.bindPopup(popup_9b512db89628ae7fc91080aded2a67d1)
        ;

        
    
    
            var marker_b458bafa7dbecce68ab3cd92f2748a0c = L.marker(
                [32.974491635, -113.498576997],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a30767e92ff83aed396a35e18a8d834b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b458bafa7dbecce68ab3cd92f2748a0c.setIcon(icon_a30767e92ff83aed396a35e18a8d834b);
        
    
        var popup_a805ad8cd339b6e381efd46e7be5b1a4 = L.popup({"maxWidth": "100%"});

        
            
                var html_eb4785b293be9f53269b06910780b20a = $(`<div id="html_eb4785b293be9f53269b06910780b20a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Gila Bend, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5953" target="_blank">More Info</a></div>`)[0];
                popup_a805ad8cd339b6e381efd46e7be5b1a4.setContent(html_eb4785b293be9f53269b06910780b20a);
            
        

        marker_b458bafa7dbecce68ab3cd92f2748a0c.bindPopup(popup_a805ad8cd339b6e381efd46e7be5b1a4)
        ;

        
    
    
            var marker_13e75a743f9d5e2011f28cedbede43e0 = L.marker(
                [39.080745035, -122.164046901],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7bfe4b943b9b373bd90be3305ff9dc99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_13e75a743f9d5e2011f28cedbede43e0.setIcon(icon_7bfe4b943b9b373bd90be3305ff9dc99);
        
    
        var popup_a737497d7b8cc928d3b12fd9945ce358 = L.popup({"maxWidth": "100%"});

        
            
                var html_936133f7f7164a847c04478de5a3dab9 = $(`<div id="html_936133f7f7164a847c04478de5a3dab9" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Yuba City, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5954" target="_blank">More Info</a></div>`)[0];
                popup_a737497d7b8cc928d3b12fd9945ce358.setContent(html_936133f7f7164a847c04478de5a3dab9);
            
        

        marker_13e75a743f9d5e2011f28cedbede43e0.bindPopup(popup_a737497d7b8cc928d3b12fd9945ce358)
        ;

        
    
    
            var marker_57d71be372bff0a34735188199003b0d = L.marker(
                [39.092390021, -121.667893746],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_979394878f05fbd5414d69f813af0748 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_57d71be372bff0a34735188199003b0d.setIcon(icon_979394878f05fbd5414d69f813af0748);
        
    
        var popup_2615e9283a0d951b4df9f4cad47118ed = L.popup({"maxWidth": "100%"});

        
            
                var html_d9fdaea408cd95c2506c21dccd79d4cb = $(`<div id="html_d9fdaea408cd95c2506c21dccd79d4cb" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Yuba City, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5952" target="_blank">More Info</a></div>`)[0];
                popup_2615e9283a0d951b4df9f4cad47118ed.setContent(html_d9fdaea408cd95c2506c21dccd79d4cb);
            
        

        marker_57d71be372bff0a34735188199003b0d.bindPopup(popup_2615e9283a0d951b4df9f4cad47118ed)
        ;

        
    
    
            var marker_a86ad399be641118a5f37aa9303403bb = L.marker(
                [36.082566967, -120.07159514],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2942c4a13203d09c9b76db7e2c95be0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a86ad399be641118a5f37aa9303403bb.setIcon(icon_2942c4a13203d09c9b76db7e2c95be0c);
        
    
        var popup_86045beec4d1267cb1cb3bc7882d0e03 = L.popup({"maxWidth": "100%"});

        
            
                var html_81efbaa9568c94d67d97d38a0fc83982 = $(`<div id="html_81efbaa9568c94d67d97d38a0fc83982" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Tulare, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5951" target="_blank">More Info</a></div>`)[0];
                popup_86045beec4d1267cb1cb3bc7882d0e03.setContent(html_81efbaa9568c94d67d97d38a0fc83982);
            
        

        marker_a86ad399be641118a5f37aa9303403bb.bindPopup(popup_86045beec4d1267cb1cb3bc7882d0e03)
        ;

        
    
    
            var marker_2c962d23ea2a9dfcf644dc44dee6f959 = L.marker(
                [34.50631889, -120.106440487],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d089de1b54e02c43dde9e221545eba5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2c962d23ea2a9dfcf644dc44dee6f959.setIcon(icon_d089de1b54e02c43dde9e221545eba5b);
        
    
        var popup_a6c5d6cec78252dbdc65a43a81d02917 = L.popup({"maxWidth": "100%"});

        
            
                var html_e607a7109c33fade9f69612bd39bc900 = $(`<div id="html_e607a7109c33fade9f69612bd39bc900" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Santa Barbara, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5949" target="_blank">More Info</a></div>`)[0];
                popup_a6c5d6cec78252dbdc65a43a81d02917.setContent(html_e607a7109c33fade9f69612bd39bc900);
            
        

        marker_2c962d23ea2a9dfcf644dc44dee6f959.bindPopup(popup_a6c5d6cec78252dbdc65a43a81d02917)
        ;

        
    
    
            var marker_90d3a87ce623862413895508eb9b7821 = L.marker(
                [49.7389, -96.2511],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e8addbbc0431fe7f6784f2304a17fbf6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_90d3a87ce623862413895508eb9b7821.setIcon(icon_e8addbbc0431fe7f6784f2304a17fbf6);
        
    
        var popup_676c1cc5757b3353b104d6fd79ca779f = L.popup({"maxWidth": "100%"});

        
            
                var html_6824d14acc78c168de039c2fd3452a88 = $(`<div id="html_6824d14acc78c168de039c2fd3452a88" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA207, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5945" target="_blank">More Info</a></div>`)[0];
                popup_676c1cc5757b3353b104d6fd79ca779f.setContent(html_6824d14acc78c168de039c2fd3452a88);
            
        

        marker_90d3a87ce623862413895508eb9b7821.bindPopup(popup_676c1cc5757b3353b104d6fd79ca779f)
        ;

        
    
    
            var marker_984bf17adf79427a0bc572377bde5c8d = L.marker(
                [55.03, -100.5447],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_218a696b2f62bafbde4c54e880edf989 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_984bf17adf79427a0bc572377bde5c8d.setIcon(icon_218a696b2f62bafbde4c54e880edf989);
        
    
        var popup_c8db89d4dc5398410c7825e997036d89 = L.popup({"maxWidth": "100%"});

        
            
                var html_907ee799f38907842f2ce7144de0bf0d = $(`<div id="html_907ee799f38907842f2ce7144de0bf0d" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE093, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5950" target="_blank">More Info</a></div>`)[0];
                popup_c8db89d4dc5398410c7825e997036d89.setContent(html_907ee799f38907842f2ce7144de0bf0d);
            
        

        marker_984bf17adf79427a0bc572377bde5c8d.bindPopup(popup_c8db89d4dc5398410c7825e997036d89)
        ;

        
    
    
            var marker_6375d00abaaa3db66662935462231afb = L.marker(
                [39.188019314, -121.619186074],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9fc632d2a33d2082010f167ac3eb2377 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6375d00abaaa3db66662935462231afb.setIcon(icon_9fc632d2a33d2082010f167ac3eb2377);
        
    
        var popup_1f86cb6bba908954b1ebb13ca29f0c07 = L.popup({"maxWidth": "100%"});

        
            
                var html_a1a2258165e99526c1ec873b5fcad9df = $(`<div id="html_a1a2258165e99526c1ec873b5fcad9df" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Yuba City, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5942" target="_blank">More Info</a></div>`)[0];
                popup_1f86cb6bba908954b1ebb13ca29f0c07.setContent(html_a1a2258165e99526c1ec873b5fcad9df);
            
        

        marker_6375d00abaaa3db66662935462231afb.bindPopup(popup_1f86cb6bba908954b1ebb13ca29f0c07)
        ;

        
    
    
            var marker_7833e61a94ec902a3f9c857601d3ad52 = L.marker(
                [36.090993645, -118.664197288],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0c859ccffe7c8b023b8957d580f0cfea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7833e61a94ec902a3f9c857601d3ad52.setIcon(icon_0c859ccffe7c8b023b8957d580f0cfea);
        
    
        var popup_8c68c717a28c9d9389aee0146fe8abc2 = L.popup({"maxWidth": "100%"});

        
            
                var html_153fbf5e085a766330a9e008ac692e05 = $(`<div id="html_153fbf5e085a766330a9e008ac692e05" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Tulare, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5940" target="_blank">More Info</a></div>`)[0];
                popup_8c68c717a28c9d9389aee0146fe8abc2.setContent(html_153fbf5e085a766330a9e008ac692e05);
            
        

        marker_7833e61a94ec902a3f9c857601d3ad52.bindPopup(popup_8c68c717a28c9d9389aee0146fe8abc2)
        ;

        
    
    
            var marker_c054fbeac1e8197299dbce3856946497 = L.marker(
                [40.707903489, -122.300586725],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c30816d24b28b11e5ec17e7403f7b993 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c054fbeac1e8197299dbce3856946497.setIcon(icon_c30816d24b28b11e5ec17e7403f7b993);
        
    
        var popup_466b4339421b3ba35bed8e603de46592 = L.popup({"maxWidth": "100%"});

        
            
                var html_3f480d466323203861171fd2a93f5d69 = $(`<div id="html_3f480d466323203861171fd2a93f5d69" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Redding, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5939" target="_blank">More Info</a></div>`)[0];
                popup_466b4339421b3ba35bed8e603de46592.setContent(html_3f480d466323203861171fd2a93f5d69);
            
        

        marker_c054fbeac1e8197299dbce3856946497.bindPopup(popup_466b4339421b3ba35bed8e603de46592)
        ;

        
    
    
            var marker_a5960b82334efe001cc51c1b247cdfaf = L.marker(
                [34.676320178, -118.757917621],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b0c9ef3bc3747acf91670aeb7d22f2ac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a5960b82334efe001cc51c1b247cdfaf.setIcon(icon_b0c9ef3bc3747acf91670aeb7d22f2ac);
        
    
        var popup_0a759da2fac16e519680a849c679a57b = L.popup({"maxWidth": "100%"});

        
            
                var html_79da82914cc36954a9d85bf0537af3cc = $(`<div id="html_79da82914cc36954a9d85bf0537af3cc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Lancaster, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5930" target="_blank">More Info</a></div>`)[0];
                popup_0a759da2fac16e519680a849c679a57b.setContent(html_79da82914cc36954a9d85bf0537af3cc);
            
        

        marker_a5960b82334efe001cc51c1b247cdfaf.bindPopup(popup_0a759da2fac16e519680a849c679a57b)
        ;

        
    
    
            var marker_cde4122357c4d8b5f148e03ab8fdcb5a = L.marker(
                [36.518072392, -118.793009903],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3839fe741a59274d934e88e9f9d810ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cde4122357c4d8b5f148e03ab8fdcb5a.setIcon(icon_3839fe741a59274d934e88e9f9d810ed);
        
    
        var popup_9eae0efdbe95ed679ec851f64d47b47b = L.popup({"maxWidth": "100%"});

        
            
                var html_a54f479dd11004d0376d38dac9774854 = $(`<div id="html_a54f479dd11004d0376d38dac9774854" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Visalia, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5929" target="_blank">More Info</a></div>`)[0];
                popup_9eae0efdbe95ed679ec851f64d47b47b.setContent(html_a54f479dd11004d0376d38dac9774854);
            
        

        marker_cde4122357c4d8b5f148e03ab8fdcb5a.bindPopup(popup_9eae0efdbe95ed679ec851f64d47b47b)
        ;

        
    
    
            var marker_3cc4bdd07eb9c7873c8a314f34c1c78e = L.marker(
                [48.686237557, 35.475028187],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_fa9dddd6c2071ad04f0fd0fe04152801 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3cc4bdd07eb9c7873c8a314f34c1c78e.setIcon(icon_fa9dddd6c2071ad04f0fd0fe04152801);
        
    
        var popup_338486916ab0e8c32f9188269adabf3d = L.popup({"maxWidth": "100%"});

        
            
                var html_d6943f0c0056045db83ec20b681a9844 = $(`<div id="html_d6943f0c0056045db83ec20b681a9844" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Dnipropetrovsk, Dnipropetrovsk - Ukraine</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5926" target="_blank">More Info</a></div>`)[0];
                popup_338486916ab0e8c32f9188269adabf3d.setContent(html_d6943f0c0056045db83ec20b681a9844);
            
        

        marker_3cc4bdd07eb9c7873c8a314f34c1c78e.bindPopup(popup_338486916ab0e8c32f9188269adabf3d)
        ;

        
    
    
            var marker_fcd0480ec0257a146fa489ffae296d8a = L.marker(
                [33.417542977, -110.861358494],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_62bf649bc776bbfa67a04b0ab62e416d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_fcd0480ec0257a146fa489ffae296d8a.setIcon(icon_62bf649bc776bbfa67a04b0ab62e416d);
        
    
        var popup_1fa47c9e8cfe3842d73e4d87f192e7ce = L.popup({"maxWidth": "100%"});

        
            
                var html_5b17d2df636e9e896d49a79834aef358 = $(`<div id="html_5b17d2df636e9e896d49a79834aef358" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5925" target="_blank">More Info</a></div>`)[0];
                popup_1fa47c9e8cfe3842d73e4d87f192e7ce.setContent(html_5b17d2df636e9e896d49a79834aef358);
            
        

        marker_fcd0480ec0257a146fa489ffae296d8a.bindPopup(popup_1fa47c9e8cfe3842d73e4d87f192e7ce)
        ;

        
    
    
            var marker_83ea676fb36932412f5dfb567a8ef09a = L.marker(
                [42.277, -120.613],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b7af53e3bd520a88c864585c88abc280 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_83ea676fb36932412f5dfb567a8ef09a.setIcon(icon_b7af53e3bd520a88c864585c88abc280);
        
    
        var popup_2515e45c7b99ee674bd9aa03a0b228a6 = L.popup({"maxWidth": "100%"});

        
            
                var html_e736a9f084014664439ae67def100f2c = $(`<div id="html_e736a9f084014664439ae67def100f2c" style="width: 100.0%; height: 100.0%;"><strong>Cougar Peak Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5922" target="_blank">More Info</a></div>`)[0];
                popup_2515e45c7b99ee674bd9aa03a0b228a6.setContent(html_e736a9f084014664439ae67def100f2c);
            
        

        marker_83ea676fb36932412f5dfb567a8ef09a.bindPopup(popup_2515e45c7b99ee674bd9aa03a0b228a6)
        ;

        
    
    
            var marker_51615ac813de3fcfcf87e24d94c06bc2 = L.marker(
                [42.438826407, -7.338575131],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f0908ed60546bb8e3c0d0d59a13a787b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_51615ac813de3fcfcf87e24d94c06bc2.setIcon(icon_f0908ed60546bb8e3c0d0d59a13a787b);
        
    
        var popup_cfb250c6bca7ab91273388397d32a850 = L.popup({"maxWidth": "100%"});

        
            
                var html_23c07ee6bcb735a9903eb71a851bd67f = $(`<div id="html_23c07ee6bcb735a9903eb71a851bd67f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Ourense, Galicia  - Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5920" target="_blank">More Info</a></div>`)[0];
                popup_cfb250c6bca7ab91273388397d32a850.setContent(html_23c07ee6bcb735a9903eb71a851bd67f);
            
        

        marker_51615ac813de3fcfcf87e24d94c06bc2.bindPopup(popup_cfb250c6bca7ab91273388397d32a850)
        ;

        
    
    
            var marker_a6c5fa038daecd1ae39fd81095e2ed76 = L.marker(
                [44.068834373, 8.152622285],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b7938dbafdf8dfaed9204c8a8dd8e9b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a6c5fa038daecd1ae39fd81095e2ed76.setIcon(icon_b7938dbafdf8dfaed9204c8a8dd8e9b8);
        
    
        var popup_4ba5478333a46f9295156d2da5e4ddd0 = L.popup({"maxWidth": "100%"});

        
            
                var html_088854ca314a28da9f7b72a6fcc32acf = $(`<div id="html_088854ca314a28da9f7b72a6fcc32acf" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Monaco - Monaco</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5921" target="_blank">More Info</a></div>`)[0];
                popup_4ba5478333a46f9295156d2da5e4ddd0.setContent(html_088854ca314a28da9f7b72a6fcc32acf);
            
        

        marker_a6c5fa038daecd1ae39fd81095e2ed76.bindPopup(popup_4ba5478333a46f9295156d2da5e4ddd0)
        ;

        
    
    
            var marker_b4c061aebb51abdd3dfe3a122e7db38c = L.marker(
                [57.6761, -100.0331],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4ca520afe5c55d3e41636e0753b29eb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b4c061aebb51abdd3dfe3a122e7db38c.setIcon(icon_4ca520afe5c55d3e41636e0753b29eb6);
        
    
        var popup_ed7f78b5fb60f2f7284fd9b5f6f2fa5f = L.popup({"maxWidth": "100%"});

        
            
                var html_88f1c56594c90c0fbaac99c5ad91e390 = $(`<div id="html_88f1c56594c90c0fbaac99c5ad91e390" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO152, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5912" target="_blank">More Info</a></div>`)[0];
                popup_ed7f78b5fb60f2f7284fd9b5f6f2fa5f.setContent(html_88f1c56594c90c0fbaac99c5ad91e390);
            
        

        marker_b4c061aebb51abdd3dfe3a122e7db38c.bindPopup(popup_ed7f78b5fb60f2f7284fd9b5f6f2fa5f)
        ;

        
    
    
            var marker_7e34a40a7cefc150be1e3b7fe15570fd = L.marker(
                [40.916, -123.634],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_51c5b092c834bd6789d695d3541f5197 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7e34a40a7cefc150be1e3b7fe15570fd.setIcon(icon_51c5b092c834bd6789d695d3541f5197);
        
    
        var popup_2af373f935dd715da6f85dee57e12c4a = L.popup({"maxWidth": "100%"});

        
            
                var html_e78af3ff7ceed2da09197408d64398d5 = $(`<div id="html_e78af3ff7ceed2da09197408d64398d5" style="width: 100.0%; height: 100.0%;"><strong>Knob Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5911" target="_blank">More Info</a></div>`)[0];
                popup_2af373f935dd715da6f85dee57e12c4a.setContent(html_e78af3ff7ceed2da09197408d64398d5);
            
        

        marker_7e34a40a7cefc150be1e3b7fe15570fd.bindPopup(popup_2af373f935dd715da6f85dee57e12c4a)
        ;

        
    
    
            var marker_b412d4f3cba2ba5290024102620f1fa4 = L.marker(
                [37.969258033, -120.397719545],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f6a8e56c279b2bdaf9c582cbba229830 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b412d4f3cba2ba5290024102620f1fa4.setIcon(icon_f6a8e56c279b2bdaf9c582cbba229830);
        
    
        var popup_602359cc770706c9d1d386a8f4059cc5 = L.popup({"maxWidth": "100%"});

        
            
                var html_36d3a7c404145c9c86fee3b41d28eccb = $(`<div id="html_36d3a7c404145c9c86fee3b41d28eccb" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Modesto, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5902" target="_blank">More Info</a></div>`)[0];
                popup_602359cc770706c9d1d386a8f4059cc5.setContent(html_36d3a7c404145c9c86fee3b41d28eccb);
            
        

        marker_b412d4f3cba2ba5290024102620f1fa4.bindPopup(popup_602359cc770706c9d1d386a8f4059cc5)
        ;

        
    
    
            var marker_54c02dbf09d69ec7d7787542ec366907 = L.marker(
                [-70.35, -4.03],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_255a0dc0a138aca37501d1207a288b73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_54c02dbf09d69ec7d7787542ec366907.setIcon(icon_255a0dc0a138aca37501d1207a288b73);
        
    
        var popup_ad47d28872706791a22bc4c3d85cc626 = L.popup({"maxWidth": "100%"});

        
            
                var html_26429f9c6ca14865ee640867bb669170 = $(`<div id="html_26429f9c6ca14865ee640867bb669170" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A78</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5907" target="_blank">More Info</a></div>`)[0];
                popup_ad47d28872706791a22bc4c3d85cc626.setContent(html_26429f9c6ca14865ee640867bb669170);
            
        

        marker_54c02dbf09d69ec7d7787542ec366907.bindPopup(popup_ad47d28872706791a22bc4c3d85cc626)
        ;

        
    
    
            var marker_64dadcae9cd463fd60007a33c7e3b657 = L.marker(
                [34.182264114, -117.443074933],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_94d11169c21550a22b51d8de79ab9e1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_64dadcae9cd463fd60007a33c7e3b657.setIcon(icon_94d11169c21550a22b51d8de79ab9e1e);
        
    
        var popup_264ce07a47e6ff36fccc8d3895bf92cb = L.popup({"maxWidth": "100%"});

        
            
                var html_3a851c684bc97e8adffcdda66f163144 = $(`<div id="html_3a851c684bc97e8adffcdda66f163144" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of San Bernardino, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5898" target="_blank">More Info</a></div>`)[0];
                popup_264ce07a47e6ff36fccc8d3895bf92cb.setContent(html_3a851c684bc97e8adffcdda66f163144);
            
        

        marker_64dadcae9cd463fd60007a33c7e3b657.bindPopup(popup_264ce07a47e6ff36fccc8d3895bf92cb)
        ;

        
    
    
            var marker_b4d649bad8a044692e62272e97101ac3 = L.marker(
                [42.686670839, -111.591190059],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bbc34e911100a6731757a5b2f1259d61 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b4d649bad8a044692e62272e97101ac3.setIcon(icon_bbc34e911100a6731757a5b2f1259d61);
        
    
        var popup_04f7ea70d45e70a9cc858b8abce29e8f = L.popup({"maxWidth": "100%"});

        
            
                var html_b0b4f84b8533ab1895123c3b1d98705f = $(`<div id="html_b0b4f84b8533ab1895123c3b1d98705f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Montpelier, Idaho - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5899" target="_blank">More Info</a></div>`)[0];
                popup_04f7ea70d45e70a9cc858b8abce29e8f.setContent(html_b0b4f84b8533ab1895123c3b1d98705f);
            
        

        marker_b4d649bad8a044692e62272e97101ac3.bindPopup(popup_04f7ea70d45e70a9cc858b8abce29e8f)
        ;

        
    
    
            var marker_e28426de1e24b546d652f2ef4a5e8859 = L.marker(
                [42.635352272, 19.368286586],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_edebaf1ff505126e5a850f944bf3ad4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e28426de1e24b546d652f2ef4a5e8859.setIcon(icon_edebaf1ff505126e5a850f944bf3ad4a);
        
    
        var popup_5626898d3371ba728eed7b4caa48c53e = L.popup({"maxWidth": "100%"});

        
            
                var html_a1689e0a059d40fef7dcbd44c28b0939 = $(`<div id="html_a1689e0a059d40fef7dcbd44c28b0939" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Podgorica - Montenegro</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5890" target="_blank">More Info</a></div>`)[0];
                popup_5626898d3371ba728eed7b4caa48c53e.setContent(html_a1689e0a059d40fef7dcbd44c28b0939);
            
        

        marker_e28426de1e24b546d652f2ef4a5e8859.bindPopup(popup_5626898d3371ba728eed7b4caa48c53e)
        ;

        
    
    
            var marker_765c39df69b8ac85fe6dbaf175734008 = L.marker(
                [33.416821311, -110.859687743],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_577f406a9c3755548a646fa04158693a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_765c39df69b8ac85fe6dbaf175734008.setIcon(icon_577f406a9c3755548a646fa04158693a);
        
    
        var popup_8f9aaa66bc5ddf66a374a0aadfa961fb = L.popup({"maxWidth": "100%"});

        
            
                var html_00f50e57e6740a86270d51ee8a4f13a5 = $(`<div id="html_00f50e57e6740a86270d51ee8a4f13a5" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Mesa, Arizona - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5888" target="_blank">More Info</a></div>`)[0];
                popup_8f9aaa66bc5ddf66a374a0aadfa961fb.setContent(html_00f50e57e6740a86270d51ee8a4f13a5);
            
        

        marker_765c39df69b8ac85fe6dbaf175734008.bindPopup(popup_8f9aaa66bc5ddf66a374a0aadfa961fb)
        ;

        
    
    
            var marker_3e8c38b477fb878cf3833199a643ce58 = L.marker(
                [-71.01, -12.05],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1aa419bd014fed19398dcff3c1d9de5e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_3e8c38b477fb878cf3833199a643ce58.setIcon(icon_1aa419bd014fed19398dcff3c1d9de5e);
        
    
        var popup_6e4f7ea9daa2caa3552c5de38b24044e = L.popup({"maxWidth": "100%"});

        
            
                var html_6aa5eaf55718a6b31a9b968bf41b487d = $(`<div id="html_6aa5eaf55718a6b31a9b968bf41b487d" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A77</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5906" target="_blank">More Info</a></div>`)[0];
                popup_6e4f7ea9daa2caa3552c5de38b24044e.setContent(html_6aa5eaf55718a6b31a9b968bf41b487d);
            
        

        marker_3e8c38b477fb878cf3833199a643ce58.bindPopup(popup_6e4f7ea9daa2caa3552c5de38b24044e)
        ;

        
    
    
            var marker_c52d4319628b8f211454652259390483 = L.marker(
                [38.924589754, -122.604087947],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cab924cd967a87d00262dec5ddfd792d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c52d4319628b8f211454652259390483.setIcon(icon_cab924cd967a87d00262dec5ddfd792d);
        
    
        var popup_9d6f13e74da67af882cee0dc49124b04 = L.popup({"maxWidth": "100%"});

        
            
                var html_dfa3748ef664a22b248fcf2b61a12c10 = $(`<div id="html_dfa3748ef664a22b248fcf2b61a12c10" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Santa Rosa, California - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5884" target="_blank">More Info</a></div>`)[0];
                popup_9d6f13e74da67af882cee0dc49124b04.setContent(html_dfa3748ef664a22b248fcf2b61a12c10);
            
        

        marker_c52d4319628b8f211454652259390483.bindPopup(popup_9d6f13e74da67af882cee0dc49124b04)
        ;

        
    
    
            var marker_9b7777369fefb8f6b6b3bb59edfa0369 = L.marker(
                [38.092952272, 15.91418569],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_46deff9efd5ecebe7ccf52fc5759a774 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9b7777369fefb8f6b6b3bb59edfa0369.setIcon(icon_46deff9efd5ecebe7ccf52fc5759a774);
        
    
        var popup_ba629e7e2745ee9fe76940dec408a482 = L.popup({"maxWidth": "100%"});

        
            
                var html_9c5380f9a2f9c16b883854785da5b011 = $(`<div id="html_9c5380f9a2f9c16b883854785da5b011" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Reggio di Calabria, Calabria - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5879" target="_blank">More Info</a></div>`)[0];
                popup_ba629e7e2745ee9fe76940dec408a482.setContent(html_9c5380f9a2f9c16b883854785da5b011);
            
        

        marker_9b7777369fefb8f6b6b3bb59edfa0369.bindPopup(popup_ba629e7e2745ee9fe76940dec408a482)
        ;

        
    
    
            var marker_b8c5ecb53a7599ea7f07068248c9ff04 = L.marker(
                [43.28362333, 6.449664955],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8113b8b1ccd1de611fd36b7f063d4685 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b8c5ecb53a7599ea7f07068248c9ff04.setIcon(icon_8113b8b1ccd1de611fd36b7f063d4685);
        
    
        var popup_b596b9c635c65161a2582ef1db60ee0f = L.popup({"maxWidth": "100%"});

        
            
                var html_35ba156553147d8aa31a610b80f3a39e = $(`<div id="html_35ba156553147d8aa31a610b80f3a39e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Toulon, Provence-Alpes-Cte-dAzur - France</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5865" target="_blank">More Info</a></div>`)[0];
                popup_b596b9c635c65161a2582ef1db60ee0f.setContent(html_35ba156553147d8aa31a610b80f3a39e);
            
        

        marker_b8c5ecb53a7599ea7f07068248c9ff04.bindPopup(popup_b596b9c635c65161a2582ef1db60ee0f)
        ;

        
    
    
            var marker_c3325741572be572bbecfdecc3b12819 = L.marker(
                [55.54402, -122.48954],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f4623a7084602bfb55c5d76d945f3d56 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c3325741572be572bbecfdecc3b12819.setIcon(icon_f4623a7084602bfb55c5d76d945f3d56);
        
    
        var popup_f69803328ccbe67bdf3a5f7b812298be = L.popup({"maxWidth": "100%"});

        
            
                var html_fb799cc88f30ca658b82284b7b60ef16 = $(`<div id="html_fb799cc88f30ca658b82284b7b60ef16" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - British Columbia (Pine River Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5872" target="_blank">More Info</a></div>`)[0];
                popup_f69803328ccbe67bdf3a5f7b812298be.setContent(html_fb799cc88f30ca658b82284b7b60ef16);
            
        

        marker_c3325741572be572bbecfdecc3b12819.bindPopup(popup_f69803328ccbe67bdf3a5f7b812298be)
        ;

        
    
    
            var marker_c8ae2982baefc2d4cc2c56110acbbcca = L.marker(
                [49.19144, -115.44254],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_99c1804c1086c7c2006c0208e3476b84 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c8ae2982baefc2d4cc2c56110acbbcca.setIcon(icon_99c1804c1086c7c2006c0208e3476b84);
        
    
        var popup_c87ff7504879e0bd3253564959fc8036 = L.popup({"maxWidth": "100%"});

        
            
                var html_5d81b37e300bc4f18c79831811600e72 = $(`<div id="html_5d81b37e300bc4f18c79831811600e72" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - British Columbia (Plumbob Mountain Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5860" target="_blank">More Info</a></div>`)[0];
                popup_c87ff7504879e0bd3253564959fc8036.setContent(html_5d81b37e300bc4f18c79831811600e72);
            
        

        marker_c8ae2982baefc2d4cc2c56110acbbcca.bindPopup(popup_c87ff7504879e0bd3253564959fc8036)
        ;

        
    
    
            var marker_2b91210fe34792bec8b21d417472b810 = L.marker(
                [49.83591, -120.89404],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_54ed5290619ee70d8fcdb5125de4f733 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2b91210fe34792bec8b21d417472b810.setIcon(icon_54ed5290619ee70d8fcdb5125de4f733);
        
    
        var popup_2650693b3e6f5d604a77d345833385c9 = L.popup({"maxWidth": "100%"});

        
            
                var html_435fc1e7437992721a26747222429a35 = $(`<div id="html_435fc1e7437992721a26747222429a35" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - British Columbia (Brook Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5870" target="_blank">More Info</a></div>`)[0];
                popup_2650693b3e6f5d604a77d345833385c9.setContent(html_435fc1e7437992721a26747222429a35);
            
        

        marker_2b91210fe34792bec8b21d417472b810.bindPopup(popup_2650693b3e6f5d604a77d345833385c9)
        ;

        
    
    
            var marker_dba26d38230ccfc9ce2605c92965ea9e = L.marker(
                [47.93565, -117.72662],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_86a5ce4d8786f62741522dde836bcd00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_dba26d38230ccfc9ce2605c92965ea9e.setIcon(icon_86a5ce4d8786f62741522dde836bcd00);
        
    
        var popup_8de62d2e9ab51037b68fc31abdd2ee7e = L.popup({"maxWidth": "100%"});

        
            
                var html_cea39eeed9556efc77279a42579c5572 = $(`<div id="html_cea39eeed9556efc77279a42579c5572" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Stevens County (Ford Corkscrew Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5861" target="_blank">More Info</a></div>`)[0];
                popup_8de62d2e9ab51037b68fc31abdd2ee7e.setContent(html_cea39eeed9556efc77279a42579c5572);
            
        

        marker_dba26d38230ccfc9ce2605c92965ea9e.bindPopup(popup_8de62d2e9ab51037b68fc31abdd2ee7e)
        ;

        
    
    
            var marker_89d65d4c137e7d40ddcd932b9d8feea8 = L.marker(
                [47.56328, -91.62542],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a3614ca46189bba49f2724a927fed73c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_89d65d4c137e7d40ddcd932b9d8feea8.setIcon(icon_a3614ca46189bba49f2724a927fed73c);
        
    
        var popup_df590a59458f0f9a782b6474237ed8dd = L.popup({"maxWidth": "100%"});

        
            
                var html_2a35410f65ca3dc97ba18d4c0f91a97e = $(`<div id="html_2a35410f65ca3dc97ba18d4c0f91a97e" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Lake County (Greenwood Fire), Minnesota, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5862" target="_blank">More Info</a></div>`)[0];
                popup_df590a59458f0f9a782b6474237ed8dd.setContent(html_2a35410f65ca3dc97ba18d4c0f91a97e);
            
        

        marker_89d65d4c137e7d40ddcd932b9d8feea8.bindPopup(popup_df590a59458f0f9a782b6474237ed8dd)
        ;

        
    
    
            var marker_b5bd70625f26165ec0af38587c80446d = L.marker(
                [42.700772124, 19.047319774],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_011d10c74437312869cc7fc1bf48606a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b5bd70625f26165ec0af38587c80446d.setIcon(icon_011d10c74437312869cc7fc1bf48606a);
        
    
        var popup_f1fa9a86740512709d5648aa2ae3cffd = L.popup({"maxWidth": "100%"});

        
            
                var html_565ec83d871d4e3e93bb630f2a6880ad = $(`<div id="html_565ec83d871d4e3e93bb630f2a6880ad" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Podgorica - Montenegro</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5866" target="_blank">More Info</a></div>`)[0];
                popup_f1fa9a86740512709d5648aa2ae3cffd.setContent(html_565ec83d871d4e3e93bb630f2a6880ad);
            
        

        marker_b5bd70625f26165ec0af38587c80446d.bindPopup(popup_f1fa9a86740512709d5648aa2ae3cffd)
        ;

        
    
    
            var marker_a456c6157687ff63f73830385ee4b1db = L.marker(
                [37.733485333, 24.008749506],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_779cae145c76e1f6bfd832feb469823d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a456c6157687ff63f73830385ee4b1db.setIcon(icon_779cae145c76e1f6bfd832feb469823d);
        
    
        var popup_6e80f4ab4c19da3a662addcfc7be7bde = L.popup({"maxWidth": "100%"});

        
            
                var html_d31e3132fac1a23f2dbedc60579ed5c4 = $(`<div id="html_d31e3132fac1a23f2dbedc60579ed5c4" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Piraivs, Attiki - Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5867" target="_blank">More Info</a></div>`)[0];
                popup_6e80f4ab4c19da3a662addcfc7be7bde.setContent(html_d31e3132fac1a23f2dbedc60579ed5c4);
            
        

        marker_a456c6157687ff63f73830385ee4b1db.bindPopup(popup_6e80f4ab4c19da3a662addcfc7be7bde)
        ;

        
    
    
            var marker_38e04e14861597db4a361bbc6469a796 = L.marker(
                [41.111616348, -8.403170843],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7fdcb08c7d716b5a02e4efca55c09c8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_38e04e14861597db4a361bbc6469a796.setIcon(icon_7fdcb08c7d716b5a02e4efca55c09c8b);
        
    
        var popup_b77d2c0b070683b21d6157bc52f28f18 = L.popup({"maxWidth": "100%"});

        
            
                var html_8489d743d3d5214312d53450cf26c010 = $(`<div id="html_8489d743d3d5214312d53450cf26c010" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Porto - Portugal</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5868" target="_blank">More Info</a></div>`)[0];
                popup_b77d2c0b070683b21d6157bc52f28f18.setContent(html_8489d743d3d5214312d53450cf26c010);
            
        

        marker_38e04e14861597db4a361bbc6469a796.bindPopup(popup_b77d2c0b070683b21d6157bc52f28f18)
        ;

        
    
    
            var marker_9d9584f95400df692cb978d11a2bb43c = L.marker(
                [42.13337054, -7.52612883],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ed90f4d8e45cd2fe3ba901d9161d8765 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9d9584f95400df692cb978d11a2bb43c.setIcon(icon_ed90f4d8e45cd2fe3ba901d9161d8765);
        
    
        var popup_58ce339dae61ae8a3a92df2383f2bd5d = L.popup({"maxWidth": "100%"});

        
            
                var html_9ad7d8db581674e4f2a6b3b6fa4aa57f = $(`<div id="html_9ad7d8db581674e4f2a6b3b6fa4aa57f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Ourense, Galicia  - Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5869" target="_blank">More Info</a></div>`)[0];
                popup_58ce339dae61ae8a3a92df2383f2bd5d.setContent(html_9ad7d8db581674e4f2a6b3b6fa4aa57f);
            
        

        marker_9d9584f95400df692cb978d11a2bb43c.bindPopup(popup_58ce339dae61ae8a3a92df2383f2bd5d)
        ;

        
    
    
            var marker_74b25116ce117e564aa7f2cf7aec1d12 = L.marker(
                [40.73292, -111.64845],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_38fd2b33aadcc4514e96fd05d6fcc800 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_74b25116ce117e564aa7f2cf7aec1d12.setIcon(icon_38fd2b33aadcc4514e96fd05d6fcc800);
        
    
        var popup_12ae6a6346c14b91c727f12bda08ca0f = L.popup({"maxWidth": "100%"});

        
            
                var html_24c9eef4efe52e7686537241dae3e39d = $(`<div id="html_24c9eef4efe52e7686537241dae3e39d" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Salt Lake and Summit Counties (Parleys Canyon Fire), Utah, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5856" target="_blank">More Info</a></div>`)[0];
                popup_12ae6a6346c14b91c727f12bda08ca0f.setContent(html_24c9eef4efe52e7686537241dae3e39d);
            
        

        marker_74b25116ce117e564aa7f2cf7aec1d12.bindPopup(popup_12ae6a6346c14b91c727f12bda08ca0f)
        ;

        
    
    
            var marker_8885dbf92c69f08ba2e58ba61dcf5b4b = L.marker(
                [41.353574931, 13.529296144],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8401941b43c4f4a4c0593d731f826383 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8885dbf92c69f08ba2e58ba61dcf5b4b.setIcon(icon_8401941b43c4f4a4c0593d731f826383);
        
    
        var popup_608527e8adb84d7a302e889c41b50717 = L.popup({"maxWidth": "100%"});

        
            
                var html_09f62e726eff71750c41ce4534f278c6 = $(`<div id="html_09f62e726eff71750c41ce4534f278c6" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Caserta, Campania - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5855" target="_blank">More Info</a></div>`)[0];
                popup_608527e8adb84d7a302e889c41b50717.setContent(html_09f62e726eff71750c41ce4534f278c6);
            
        

        marker_8885dbf92c69f08ba2e58ba61dcf5b4b.bindPopup(popup_608527e8adb84d7a302e889c41b50717)
        ;

        
    
    
            var marker_0cd7d84af1271a83f4871d2571d8798b = L.marker(
                [42.685232232, -111.592808877],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c489ef67c9a4bf0e8ee1b873316ccf74 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0cd7d84af1271a83f4871d2571d8798b.setIcon(icon_c489ef67c9a4bf0e8ee1b873316ccf74);
        
    
        var popup_7cd82b7063daadec0e0d54ac8d3b949b = L.popup({"maxWidth": "100%"});

        
            
                var html_a0f43abdc3f82fc77eba017121731fbc = $(`<div id="html_a0f43abdc3f82fc77eba017121731fbc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Montpelier, Idaho - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5854" target="_blank">More Info</a></div>`)[0];
                popup_7cd82b7063daadec0e0d54ac8d3b949b.setContent(html_a0f43abdc3f82fc77eba017121731fbc);
            
        

        marker_0cd7d84af1271a83f4871d2571d8798b.bindPopup(popup_7cd82b7063daadec0e0d54ac8d3b949b)
        ;

        
    
    
            var marker_09bd08288a161ef68e3616cc70a02ed8 = L.marker(
                [40.497498017, -4.941953917],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ff38ea40ff065131fa74a73ff1756824 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_09bd08288a161ef68e3616cc70a02ed8.setIcon(icon_ff38ea40ff065131fa74a73ff1756824);
        
    
        var popup_f5336907568a3a2302c1daa2705c46c3 = L.popup({"maxWidth": "100%"});

        
            
                var html_81e4fabf08150943733a4468f9e9105e = $(`<div id="html_81e4fabf08150943733a4468f9e9105e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Salamanca, Castilla y Len  - Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5851" target="_blank">More Info</a></div>`)[0];
                popup_f5336907568a3a2302c1daa2705c46c3.setContent(html_81e4fabf08150943733a4468f9e9105e);
            
        

        marker_09bd08288a161ef68e3616cc70a02ed8.bindPopup(popup_f5336907568a3a2302c1daa2705c46c3)
        ;

        
    
    
            var marker_463a1c2d677ea5d084df87c7e0ef9a9b = L.marker(
                [39.406022427, 16.811103215],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f6dd144ec4b3717b871ce19363d68690 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_463a1c2d677ea5d084df87c7e0ef9a9b.setIcon(icon_f6dd144ec4b3717b871ce19363d68690);
        
    
        var popup_05ddd3cdb947a5ee2d8c297818aa4857 = L.popup({"maxWidth": "100%"});

        
            
                var html_87c3854c58448b9646288edf493d6420 = $(`<div id="html_87c3854c58448b9646288edf493d6420" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Crotone, Calabria - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5844" target="_blank">More Info</a></div>`)[0];
                popup_05ddd3cdb947a5ee2d8c297818aa4857.setContent(html_87c3854c58448b9646288edf493d6420);
            
        

        marker_463a1c2d677ea5d084df87c7e0ef9a9b.bindPopup(popup_05ddd3cdb947a5ee2d8c297818aa4857)
        ;

        
    
    
            var marker_fa8956c32d9c35e8f6d45b5f79ae8f48 = L.marker(
                [47.981, -91.016],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c296eac22bcba4f5875d8e027f3ef437 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_fa8956c32d9c35e8f6d45b5f79ae8f48.setIcon(icon_c296eac22bcba4f5875d8e027f3ef437);
        
    
        var popup_d4abbca14a84a6845385fab869ecd32f = L.popup({"maxWidth": "100%"});

        
            
                var html_78c865465ea0d97cc1523bad88c89426 = $(`<div id="html_78c865465ea0d97cc1523bad88c89426" style="width: 100.0%; height: 100.0%;"><strong>John Ek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5891" target="_blank">More Info</a></div>`)[0];
                popup_d4abbca14a84a6845385fab869ecd32f.setContent(html_78c865465ea0d97cc1523bad88c89426);
            
        

        marker_fa8956c32d9c35e8f6d45b5f79ae8f48.bindPopup(popup_d4abbca14a84a6845385fab869ecd32f)
        ;

        
    
    
            var marker_03bbd0c775e9ffc6765a0b3f1e358275 = L.marker(
                [48.94482, -118.21131],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2fd84d20fa9408bc68c2ca0ce6e34458 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_03bbd0c775e9ffc6765a0b3f1e358275.setIcon(icon_2fd84d20fa9408bc68c2ca0ce6e34458);
        
    
        var popup_b39bb3a3323b7c1e390ef1a658aa587d = L.popup({"maxWidth": "100%"});

        
            
                var html_f18489b380fe03e659681e56b31bdf1b = $(`<div id="html_f18489b380fe03e659681e56b31bdf1b" style="width: 100.0%; height: 100.0%;"><strong>Stevens County (Nine Mine Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5841" target="_blank">More Info</a></div>`)[0];
                popup_b39bb3a3323b7c1e390ef1a658aa587d.setContent(html_f18489b380fe03e659681e56b31bdf1b);
            
        

        marker_03bbd0c775e9ffc6765a0b3f1e358275.bindPopup(popup_b39bb3a3323b7c1e390ef1a658aa587d)
        ;

        
    
    
            var marker_3a57909617ac72889dc7bd8138e25e18 = L.marker(
                [41.975235893, 12.807477192],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5100d3e380f781b25428cc40cbb1c6bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3a57909617ac72889dc7bd8138e25e18.setIcon(icon_5100d3e380f781b25428cc40cbb1c6bf);
        
    
        var popup_2d1e23e6729c6ed800db954591331b3d = L.popup({"maxWidth": "100%"});

        
            
                var html_4430200460c7aa54d018274077cd7a31 = $(`<div id="html_4430200460c7aa54d018274077cd7a31" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Rome, Lazio - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5827" target="_blank">More Info</a></div>`)[0];
                popup_2d1e23e6729c6ed800db954591331b3d.setContent(html_4430200460c7aa54d018274077cd7a31);
            
        

        marker_3a57909617ac72889dc7bd8138e25e18.bindPopup(popup_2d1e23e6729c6ed800db954591331b3d)
        ;

        
    
    
            var marker_77c24b0205a2ce63510568081ec7847c = L.marker(
                [36.70731, 4.84825],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4684f1573034f0d6ebcd2ba628972165 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_77c24b0205a2ce63510568081ec7847c.setIcon(icon_4684f1573034f0d6ebcd2ba628972165);
        
    
        var popup_41a37a98eea911fa38c6f8c200e0b54d = L.popup({"maxWidth": "100%"});

        
            
                var html_ecf05e21ba44bf4fee51a9153a527ff2 = $(`<div id="html_ecf05e21ba44bf4fee51a9153a527ff2" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - W of Bejaia, Bjaa - Algeria</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5828" target="_blank">More Info</a></div>`)[0];
                popup_41a37a98eea911fa38c6f8c200e0b54d.setContent(html_ecf05e21ba44bf4fee51a9153a527ff2);
            
        

        marker_77c24b0205a2ce63510568081ec7847c.bindPopup(popup_41a37a98eea911fa38c6f8c200e0b54d)
        ;

        
    
    
            var marker_8dda0d9d21c226c25bb180849401b74e = L.marker(
                [37.52055, 14.30792],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_840a9822d99a66344fc1dba1bdc357f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8dda0d9d21c226c25bb180849401b74e.setIcon(icon_840a9822d99a66344fc1dba1bdc357f5);
        
    
        var popup_20df02ecbf0de3f2bffdd0a15cb36538 = L.popup({"maxWidth": "100%"});

        
            
                var html_cca437ed171db3fb09bfdb43b50cdb58 = $(`<div id="html_cca437ed171db3fb09bfdb43b50cdb58" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Enna Province, Sicily, Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5829" target="_blank">More Info</a></div>`)[0];
                popup_20df02ecbf0de3f2bffdd0a15cb36538.setContent(html_cca437ed171db3fb09bfdb43b50cdb58);
            
        

        marker_8dda0d9d21c226c25bb180849401b74e.bindPopup(popup_20df02ecbf0de3f2bffdd0a15cb36538)
        ;

        
    
    
            var marker_cf61683e44894f3ec8f7e24a8d43901c = L.marker(
                [39.40551, -121.29963],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_58ffe6078a5ae2df09f718dd756e7e11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cf61683e44894f3ec8f7e24a8d43901c.setIcon(icon_58ffe6078a5ae2df09f718dd756e7e11);
        
    
        var popup_fa660e378c526874f2e2c5acf64caaf7 = L.popup({"maxWidth": "100%"});

        
            
                var html_2116e41b97b1cbebc46cd672517ec912 = $(`<div id="html_2116e41b97b1cbebc46cd672517ec912" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Yuba County (Glen Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5830" target="_blank">More Info</a></div>`)[0];
                popup_fa660e378c526874f2e2c5acf64caaf7.setContent(html_2116e41b97b1cbebc46cd672517ec912);
            
        

        marker_cf61683e44894f3ec8f7e24a8d43901c.bindPopup(popup_fa660e378c526874f2e2c5acf64caaf7)
        ;

        
    
    
            var marker_6eeaf03cfe3209c27111bfb2e0e63680 = L.marker(
                [42.21, -120.599],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bc7c2f7d82535253a2b67da350bf5b91 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6eeaf03cfe3209c27111bfb2e0e63680.setIcon(icon_bc7c2f7d82535253a2b67da350bf5b91);
        
    
        var popup_9a43fc49a4ecb4457aa177c6a55dcac7 = L.popup({"maxWidth": "100%"});

        
            
                var html_542fa35ea390c7e5e8a9f13e5440b668 = $(`<div id="html_542fa35ea390c7e5e8a9f13e5440b668" style="width: 100.0%; height: 100.0%;"><strong>Patton Meadow Fire, Klamath and Lake Counties, Oregon, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5832" target="_blank">More Info</a></div>`)[0];
                popup_9a43fc49a4ecb4457aa177c6a55dcac7.setContent(html_542fa35ea390c7e5e8a9f13e5440b668);
            
        

        marker_6eeaf03cfe3209c27111bfb2e0e63680.bindPopup(popup_9a43fc49a4ecb4457aa177c6a55dcac7)
        ;

        
    
    
            var marker_edb103161be55f4614ea48a07e929e6f = L.marker(
                [39.80247011, 15.886187733],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_61798bc6d5e18515f17e4fb2fa8ed20f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_edb103161be55f4614ea48a07e929e6f.setIcon(icon_61798bc6d5e18515f17e4fb2fa8ed20f);
        
    
        var popup_275ae8382f998bd1fd3b601cc1fa5669 = L.popup({"maxWidth": "100%"});

        
            
                var html_943a7d89bea4fa5d67f1c55023d83141 = $(`<div id="html_943a7d89bea4fa5d67f1c55023d83141" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - S of Potenza, Basilicata - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5824" target="_blank">More Info</a></div>`)[0];
                popup_275ae8382f998bd1fd3b601cc1fa5669.setContent(html_943a7d89bea4fa5d67f1c55023d83141);
            
        

        marker_edb103161be55f4614ea48a07e929e6f.bindPopup(popup_275ae8382f998bd1fd3b601cc1fa5669)
        ;

        
    
    
            var marker_4acd8c556e09418bf4dc988a94e64d36 = L.marker(
                [37.64685, 21.8275],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5338b5394eace4aad4052f1dda9e3ae9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4acd8c556e09418bf4dc988a94e64d36.setIcon(icon_5338b5394eace4aad4052f1dda9e3ae9);
        
    
        var popup_515fed8c2f7d00edbfff31e9427f9fbb = L.popup({"maxWidth": "100%"});

        
            
                var html_4f6f2b6b22ec81908aff0cf467febe73 = $(`<div id="html_4f6f2b6b22ec81908aff0cf467febe73" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Ancient Olympia, Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5821" target="_blank">More Info</a></div>`)[0];
                popup_515fed8c2f7d00edbfff31e9427f9fbb.setContent(html_4f6f2b6b22ec81908aff0cf467febe73);
            
        

        marker_4acd8c556e09418bf4dc988a94e64d36.bindPopup(popup_515fed8c2f7d00edbfff31e9427f9fbb)
        ;

        
    
    
            var marker_e129d31dcf036380202b6be39719de27 = L.marker(
                [38.141349887, 15.922377809],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a25401a65ecf423e6a9f116a0772f830 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e129d31dcf036380202b6be39719de27.setIcon(icon_a25401a65ecf423e6a9f116a0772f830);
        
    
        var popup_77533f07a203c5db2f385edb7f55bac8 = L.popup({"maxWidth": "100%"});

        
            
                var html_4473fb5fee10f5236f821e8418c1785a = $(`<div id="html_4473fb5fee10f5236f821e8418c1785a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Reggio di Calabria, Calabria - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5820" target="_blank">More Info</a></div>`)[0];
                popup_77533f07a203c5db2f385edb7f55bac8.setContent(html_4473fb5fee10f5236f821e8418c1785a);
            
        

        marker_e129d31dcf036380202b6be39719de27.bindPopup(popup_77533f07a203c5db2f385edb7f55bac8)
        ;

        
    
    
            var marker_7812b0cc1ea45fd4fad208319825c43a = L.marker(
                [36.59086, 4.32671],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_36618e343a2366fb94f4a2afa92a2dfc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7812b0cc1ea45fd4fad208319825c43a.setIcon(icon_36618e343a2366fb94f4a2afa92a2dfc);
        
    
        var popup_871f9de411078d1905094a514915b649 = L.popup({"maxWidth": "100%"});

        
            
                var html_8c60ff3ac781d904788f1f0190434d1b = $(`<div id="html_8c60ff3ac781d904788f1f0190434d1b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Tizi-Ouzou, Tizi Ouzou - Algeria</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5822" target="_blank">More Info</a></div>`)[0];
                popup_871f9de411078d1905094a514915b649.setContent(html_8c60ff3ac781d904788f1f0190434d1b);
            
        

        marker_7812b0cc1ea45fd4fad208319825c43a.bindPopup(popup_871f9de411078d1905094a514915b649)
        ;

        
    
    
            var marker_8822a5cf4b43e4487a22238400199310 = L.marker(
                [50.06766, -121.44627],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3f730139a3274414f78092e6e2711ad1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8822a5cf4b43e4487a22238400199310.setIcon(icon_3f730139a3274414f78092e6e2711ad1);
        
    
        var popup_36f46161c4beabb67699c91b57f1df08 = L.popup({"maxWidth": "100%"});

        
            
                var html_ae69cfc13a3904f423cef38c35b062da = $(`<div id="html_ae69cfc13a3904f423cef38c35b062da" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Mowhokam Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5815" target="_blank">More Info</a></div>`)[0];
                popup_36f46161c4beabb67699c91b57f1df08.setContent(html_ae69cfc13a3904f423cef38c35b062da);
            
        

        marker_8822a5cf4b43e4487a22238400199310.bindPopup(popup_36f46161c4beabb67699c91b57f1df08)
        ;

        
    
    
            var marker_bb03e53a868cb11c249a166b884de094 = L.marker(
                [50.19223, -121.54309],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_936d8cd5d956b9c5123030ae55b60877 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_bb03e53a868cb11c249a166b884de094.setIcon(icon_936d8cd5d956b9c5123030ae55b60877);
        
    
        var popup_bc69a649f66b63bb2287e851a94f6933 = L.popup({"maxWidth": "100%"});

        
            
                var html_31573ad8b423c7814ca7a76ed704eb62 = $(`<div id="html_31573ad8b423c7814ca7a76ed704eb62" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (George Road Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5816" target="_blank">More Info</a></div>`)[0];
                popup_bc69a649f66b63bb2287e851a94f6933.setContent(html_31573ad8b423c7814ca7a76ed704eb62);
            
        

        marker_bb03e53a868cb11c249a166b884de094.bindPopup(popup_bc69a649f66b63bb2287e851a94f6933)
        ;

        
    
    
            var marker_cfe0e07d798d57e5f23b49e6da3b9e48 = L.marker(
                [48.76877, -119.79643],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_565d0c0708a9d6ec3f9cdc849f2b1e4e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_cfe0e07d798d57e5f23b49e6da3b9e48.setIcon(icon_565d0c0708a9d6ec3f9cdc849f2b1e4e);
        
    
        var popup_ca8bbd6c6c981452a01e62b9f928cd0e = L.popup({"maxWidth": "100%"});

        
            
                var html_2cd528471929244bcd926a09351d0586 = $(`<div id="html_2cd528471929244bcd926a09351d0586" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Okanogan County (Chickadee Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5813" target="_blank">More Info</a></div>`)[0];
                popup_ca8bbd6c6c981452a01e62b9f928cd0e.setContent(html_2cd528471929244bcd926a09351d0586);
            
        

        marker_cfe0e07d798d57e5f23b49e6da3b9e48.bindPopup(popup_ca8bbd6c6c981452a01e62b9f928cd0e)
        ;

        
    
    
            var marker_92cefbd68b584050cf19ef07ab3ba622 = L.marker(
                [38.97683, 23.23897],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f3f591d672c04ac59dbc2a1e1fc6cbcd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_92cefbd68b584050cf19ef07ab3ba622.setIcon(icon_f3f591d672c04ac59dbc2a1e1fc6cbcd);
        
    
        var popup_09b0bf7e9a668705c01edb3fe22c526a = L.popup({"maxWidth": "100%"});

        
            
                var html_a7f197332f81b5ed1832ee753685b5b9 = $(`<div id="html_a7f197332f81b5ed1832ee753685b5b9" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Evia Island, Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5814" target="_blank">More Info</a></div>`)[0];
                popup_09b0bf7e9a668705c01edb3fe22c526a.setContent(html_a7f197332f81b5ed1832ee753685b5b9);
            
        

        marker_92cefbd68b584050cf19ef07ab3ba622.bindPopup(popup_09b0bf7e9a668705c01edb3fe22c526a)
        ;

        
    
    
            var marker_1f3427ab70d97a4916127ad3398e9f2a = L.marker(
                [43.216020669, 19.217378153],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_002fda6eb03af2abc5b134b17673baac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1f3427ab70d97a4916127ad3398e9f2a.setIcon(icon_002fda6eb03af2abc5b134b17673baac);
        
    
        var popup_eca65d0b67abe30fcbe8a12f46e94869 = L.popup({"maxWidth": "100%"});

        
            
                var html_a58ea511232c734a880da2668c57ae95 = $(`<div id="html_a58ea511232c734a880da2668c57ae95" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Podgorica - Montenegro</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5803" target="_blank">More Info</a></div>`)[0];
                popup_eca65d0b67abe30fcbe8a12f46e94869.setContent(html_a58ea511232c734a880da2668c57ae95);
            
        

        marker_1f3427ab70d97a4916127ad3398e9f2a.bindPopup(popup_eca65d0b67abe30fcbe8a12f46e94869)
        ;

        
    
    
            var marker_273fbcd449c2ed4b8ebab1087b6a402b = L.marker(
                [48.16566, -119.14283],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b935fe5eceab262fafe4933f4620741a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_273fbcd449c2ed4b8ebab1087b6a402b.setIcon(icon_b935fe5eceab262fafe4933f4620741a);
        
    
        var popup_d0251fa83d321f86ca6f60c8318a9650 = L.popup({"maxWidth": "100%"});

        
            
                var html_f3d44c04c22545b9a61a08d17d9ea560 = $(`<div id="html_f3d44c04c22545b9a61a08d17d9ea560" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Colville Indian Reservation (Whitmore Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5790" target="_blank">More Info</a></div>`)[0];
                popup_d0251fa83d321f86ca6f60c8318a9650.setContent(html_f3d44c04c22545b9a61a08d17d9ea560);
            
        

        marker_273fbcd449c2ed4b8ebab1087b6a402b.bindPopup(popup_d0251fa83d321f86ca6f60c8318a9650)
        ;

        
    
    
            var marker_1183f99c5734329d8d3bf932e609575e = L.marker(
                [41.56375, -123.39812],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5e676b51331740149e2b166265d2eed1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1183f99c5734329d8d3bf932e609575e.setIcon(icon_5e676b51331740149e2b166265d2eed1);
        
    
        var popup_0ad3c576f4f40d2f7b458accafc4f684 = L.popup({"maxWidth": "100%"});

        
            
                var html_f36cd7cb8cacfc7fb67739c8534dab9c = $(`<div id="html_f36cd7cb8cacfc7fb67739c8534dab9c" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Siskiyou County (McCash Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5791" target="_blank">More Info</a></div>`)[0];
                popup_0ad3c576f4f40d2f7b458accafc4f684.setContent(html_f36cd7cb8cacfc7fb67739c8534dab9c);
            
        

        marker_1183f99c5734329d8d3bf932e609575e.bindPopup(popup_0ad3c576f4f40d2f7b458accafc4f684)
        ;

        
    
    
            var marker_2eae4687aec0b689ea95edf31296284b = L.marker(
                [42.90764, -122.83812],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e20fac514e3a255cb2f12116ee86466b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2eae4687aec0b689ea95edf31296284b.setIcon(icon_e20fac514e3a255cb2f12116ee86466b);
        
    
        var popup_6f6c2e99d2402ab86fc4c1a780543878 = L.popup({"maxWidth": "100%"});

        
            
                var html_2c70f20d7b57f8255efa07b91bbeaf21 = $(`<div id="html_2c70f20d7b57f8255efa07b91bbeaf21" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Douglas County (Devils Knob Complex), Oregon, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5792" target="_blank">More Info</a></div>`)[0];
                popup_6f6c2e99d2402ab86fc4c1a780543878.setContent(html_2c70f20d7b57f8255efa07b91bbeaf21);
            
        

        marker_2eae4687aec0b689ea95edf31296284b.bindPopup(popup_6f6c2e99d2402ab86fc4c1a780543878)
        ;

        
    
    
            var marker_d08cad17d29c1c96a482c8c9378a3a2f = L.marker(
                [46.467, -111.175],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_283d6a34ad1aea74fd2889d3bc3f7c3d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d08cad17d29c1c96a482c8c9378a3a2f.setIcon(icon_283d6a34ad1aea74fd2889d3bc3f7c3d);
        
    
        var popup_6b2724a83a2a999d55e6bd94f2890064 = L.popup({"maxWidth": "100%"});

        
            
                var html_715e600cc585286e9972c86050d99ae3 = $(`<div id="html_715e600cc585286e9972c86050d99ae3" style="width: 100.0%; height: 100.0%;"><strong>Needles Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5802" target="_blank">More Info</a></div>`)[0];
                popup_6b2724a83a2a999d55e6bd94f2890064.setContent(html_715e600cc585286e9972c86050d99ae3);
            
        

        marker_d08cad17d29c1c96a482c8c9378a3a2f.bindPopup(popup_6b2724a83a2a999d55e6bd94f2890064)
        ;

        
    
    
            var marker_7760c3daa31ec2fadb845f4f66fd1360 = L.marker(
                [37.051774213, 22.244933855],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_50b5a7cf88b277e5e7d46ca8d014d603 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7760c3daa31ec2fadb845f4f66fd1360.setIcon(icon_50b5a7cf88b277e5e7d46ca8d014d603);
        
    
        var popup_e517fbd414c41aacbd17d5d44290225e = L.popup({"maxWidth": "100%"});

        
            
                var html_38767920268060ab4e76faefb913d17b = $(`<div id="html_38767920268060ab4e76faefb913d17b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Kalamata, Peloponnisos - Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5793" target="_blank">More Info</a></div>`)[0];
                popup_e517fbd414c41aacbd17d5d44290225e.setContent(html_38767920268060ab4e76faefb913d17b);
            
        

        marker_7760c3daa31ec2fadb845f4f66fd1360.bindPopup(popup_e517fbd414c41aacbd17d5d44290225e)
        ;

        
    
    
            var marker_250ed5401ba98f5ebdaaed23223038d4 = L.marker(
                [38.179266359, 23.809994396],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8f36e4fdc955c90d0fe9bf7c32d83d2b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_250ed5401ba98f5ebdaaed23223038d4.setIcon(icon_8f36e4fdc955c90d0fe9bf7c32d83d2b);
        
    
        var popup_093a137a50907977de02862cde93dbf2 = L.popup({"maxWidth": "100%"});

        
            
                var html_42d5ac539e14499481671460acc8f46d = $(`<div id="html_42d5ac539e14499481671460acc8f46d" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - N of Athens, Attiki - Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5779" target="_blank">More Info</a></div>`)[0];
                popup_093a137a50907977de02862cde93dbf2.setContent(html_42d5ac539e14499481671460acc8f46d);
            
        

        marker_250ed5401ba98f5ebdaaed23223038d4.bindPopup(popup_093a137a50907977de02862cde93dbf2)
        ;

        
    
    
            var marker_56ad0f71052bb914e07c777d3503eeea = L.marker(
                [46.84509, -121.15523],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1a5b3ff94a7bb33e7c1c8bff80e843bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_56ad0f71052bb914e07c777d3503eeea.setIcon(icon_1a5b3ff94a7bb33e7c1c8bff80e843bf);
        
    
        var popup_fd5da6ac432d36b4f9e875f0d97d4e9f = L.popup({"maxWidth": "100%"});

        
            
                var html_00a4a6c585462691de646b1819c027ed = $(`<div id="html_00a4a6c585462691de646b1819c027ed" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Yakima County (Schneider Springs Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5781" target="_blank">More Info</a></div>`)[0];
                popup_fd5da6ac432d36b4f9e875f0d97d4e9f.setContent(html_00a4a6c585462691de646b1819c027ed);
            
        

        marker_56ad0f71052bb914e07c777d3503eeea.bindPopup(popup_fd5da6ac432d36b4f9e875f0d97d4e9f)
        ;

        
    
    
            var marker_a1708f2c43ca5e854be17084faa5f7aa = L.marker(
                [59.45171, -120.96992],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e91f4e6ddd0b3038f59d3c1854680419 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a1708f2c43ca5e854be17084faa5f7aa.setIcon(icon_e91f4e6ddd0b3038f59d3c1854680419);
        
    
        var popup_af97bb900a6ee30ccfc5498cd3142bc2 = L.popup({"maxWidth": "100%"});

        
            
                var html_a279fee31b95e1fa2439ed81c37305f3 = $(`<div id="html_a279fee31b95e1fa2439ed81c37305f3" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Helmut/Kotcho Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5782" target="_blank">More Info</a></div>`)[0];
                popup_af97bb900a6ee30ccfc5498cd3142bc2.setContent(html_a279fee31b95e1fa2439ed81c37305f3);
            
        

        marker_a1708f2c43ca5e854be17084faa5f7aa.bindPopup(popup_af97bb900a6ee30ccfc5498cd3142bc2)
        ;

        
    
    
            var marker_9254f12935b32644ab90d918009be5ac = L.marker(
                [48.791, -118.271],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b62e825354478c1dcbd83f52a472a8d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9254f12935b32644ab90d918009be5ac.setIcon(icon_b62e825354478c1dcbd83f52a472a8d9);
        
    
        var popup_39344f0597578b57d885d47154b77f21 = L.popup({"maxWidth": "100%"});

        
            
                var html_49570afc368ed94c9310e841dac7e29e = $(`<div id="html_49570afc368ed94c9310e841dac7e29e" style="width: 100.0%; height: 100.0%;"><strong>Bulldog Mountain Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5801" target="_blank">More Info</a></div>`)[0];
                popup_39344f0597578b57d885d47154b77f21.setContent(html_49570afc368ed94c9310e841dac7e29e);
            
        

        marker_9254f12935b32644ab90d918009be5ac.bindPopup(popup_39344f0597578b57d885d47154b77f21)
        ;

        
    
    
            var marker_8253b8c1082cbed21f595d859d182085 = L.marker(
                [38.06253427, 15.860281114],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d4c999c7f4fe58fb884643140ea7a0ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8253b8c1082cbed21f595d859d182085.setIcon(icon_d4c999c7f4fe58fb884643140ea7a0ca);
        
    
        var popup_462180c4596305f4c3aa7c644268a3d8 = L.popup({"maxWidth": "100%"});

        
            
                var html_1e5be7f86128e88dd4f72cc8ebbbe3de = $(`<div id="html_1e5be7f86128e88dd4f72cc8ebbbe3de" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Reggio di Calabria, Calabria - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5780" target="_blank">More Info</a></div>`)[0];
                popup_462180c4596305f4c3aa7c644268a3d8.setContent(html_1e5be7f86128e88dd4f72cc8ebbbe3de);
            
        

        marker_8253b8c1082cbed21f595d859d182085.bindPopup(popup_462180c4596305f4c3aa7c644268a3d8)
        ;

        
    
    
            var marker_0b357e3792507f9ea8e0faea83bbd59a = L.marker(
                [39.11329, -120.97613],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_efa702904fc2b1518bdb0ff3111e1f2e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0b357e3792507f9ea8e0faea83bbd59a.setIcon(icon_efa702904fc2b1518bdb0ff3111e1f2e);
        
    
        var popup_b24ea95ecbf344b199064b1a85b389a3 = L.popup({"maxWidth": "100%"});

        
            
                var html_4a6f0e62f8d7f003dfb45a23261b2a92 = $(`<div id="html_4a6f0e62f8d7f003dfb45a23261b2a92" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Nevada and Placer Counties (River Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5783" target="_blank">More Info</a></div>`)[0];
                popup_b24ea95ecbf344b199064b1a85b389a3.setContent(html_4a6f0e62f8d7f003dfb45a23261b2a92);
            
        

        marker_0b357e3792507f9ea8e0faea83bbd59a.bindPopup(popup_b24ea95ecbf344b199064b1a85b389a3)
        ;

        
    
    
            var marker_3223693be92563a42048c0ddb44f37c1 = L.marker(
                [37.24411, 28.44278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4d0c8128ae205829a5ff77dfc2224476 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3223693be92563a42048c0ddb44f37c1.setIcon(icon_4d0c8128ae205829a5ff77dfc2224476);
        
    
        var popup_315cad5bcce6887539c68eb462f14072 = L.popup({"maxWidth": "100%"});

        
            
                var html_3b363828d49d49509f75db94df22c204 = $(`<div id="html_3b363828d49d49509f75db94df22c204" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NE of Mugla - Turkey</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5778" target="_blank">More Info</a></div>`)[0];
                popup_315cad5bcce6887539c68eb462f14072.setContent(html_3b363828d49d49509f75db94df22c204);
            
        

        marker_3223693be92563a42048c0ddb44f37c1.bindPopup(popup_315cad5bcce6887539c68eb462f14072)
        ;

        
    
    
            var marker_19de63428d1b69f9d7dca3ea012dc698 = L.marker(
                [48.815, -119.079],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e7df2d572bdc814996a8cf26c42493c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_19de63428d1b69f9d7dca3ea012dc698.setIcon(icon_e7df2d572bdc814996a8cf26c42493c1);
        
    
        var popup_3f4916707199f9062cfab71c2dc079ef = L.popup({"maxWidth": "100%"});

        
            
                var html_636c75ec77d5bdb7f2afe5bbcbab1568 = $(`<div id="html_636c75ec77d5bdb7f2afe5bbcbab1568" style="width: 100.0%; height: 100.0%;"><strong>Spur Fire, Okanogan County, Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5817" target="_blank">More Info</a></div>`)[0];
                popup_3f4916707199f9062cfab71c2dc079ef.setContent(html_636c75ec77d5bdb7f2afe5bbcbab1568);
            
        

        marker_19de63428d1b69f9d7dca3ea012dc698.bindPopup(popup_3f4916707199f9062cfab71c2dc079ef)
        ;

        
    
    
            var marker_6703fff4ca6eea29b104d5df33185206 = L.marker(
                [48.69, -118.359],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5cbabcdc6b7b91739e609aa2b70c38b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6703fff4ca6eea29b104d5df33185206.setIcon(icon_5cbabcdc6b7b91739e609aa2b70c38b7);
        
    
        var popup_3a978ec88c1df105d475b243860cd8d6 = L.popup({"maxWidth": "100%"});

        
            
                var html_42ed59488b362790649537bdb85b87d8 = $(`<div id="html_42ed59488b362790649537bdb85b87d8" style="width: 100.0%; height: 100.0%;"><strong>Mack Mountain Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5889" target="_blank">More Info</a></div>`)[0];
                popup_3a978ec88c1df105d475b243860cd8d6.setContent(html_42ed59488b362790649537bdb85b87d8);
            
        

        marker_6703fff4ca6eea29b104d5df33185206.bindPopup(popup_3a978ec88c1df105d475b243860cd8d6)
        ;

        
    
    
            var marker_adaada200c86fc6f8a135671aedff89e = L.marker(
                [42.01566, 22.46409],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2236ae40a33267d8a6caba6c9fba26ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_adaada200c86fc6f8a135671aedff89e.setIcon(icon_2236ae40a33267d8a6caba6c9fba26ae);
        
    
        var popup_9d2e135148e99a4f8924ecbe2db73fa4 = L.popup({"maxWidth": "100%"});

        
            
                var html_414a41c382058ad95ac3cef8e208538a = $(`<div id="html_414a41c382058ad95ac3cef8e208538a" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - NE of Kochani City, North Macedonia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5770" target="_blank">More Info</a></div>`)[0];
                popup_9d2e135148e99a4f8924ecbe2db73fa4.setContent(html_414a41c382058ad95ac3cef8e208538a);
            
        

        marker_adaada200c86fc6f8a135671aedff89e.bindPopup(popup_9d2e135148e99a4f8924ecbe2db73fa4)
        ;

        
    
    
            var marker_3719336ff92d5e7ace2ac80ea3e20f2e = L.marker(
                [40.07284, 20.10249],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e7f313828d25d9f483fecaa55a615dbc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3719336ff92d5e7ace2ac80ea3e20f2e.setIcon(icon_e7f313828d25d9f483fecaa55a615dbc);
        
    
        var popup_30ee8228fc066c6508a22bc448e21426 = L.popup({"maxWidth": "100%"});

        
            
                var html_af504733aa100d737027e870c2fd3f94 = $(`<div id="html_af504733aa100d737027e870c2fd3f94" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Southwestern Albania</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5771" target="_blank">More Info</a></div>`)[0];
                popup_30ee8228fc066c6508a22bc448e21426.setContent(html_af504733aa100d737027e870c2fd3f94);
            
        

        marker_3719336ff92d5e7ace2ac80ea3e20f2e.bindPopup(popup_30ee8228fc066c6508a22bc448e21426)
        ;

        
    
    
            var marker_9d20df4f72469e06d2143cb2186603e6 = L.marker(
                [48.575, -119.832],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_57e8dba5609288fd1e6e879fcb6d3b8a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9d20df4f72469e06d2143cb2186603e6.setIcon(icon_57e8dba5609288fd1e6e879fcb6d3b8a);
        
    
        var popup_c614320c47df170dc0742eec9fce5f07 = L.popup({"maxWidth": "100%"});

        
            
                var html_42e6d671a077ddfcaa43e7c72f4828ad = $(`<div id="html_42e6d671a077ddfcaa43e7c72f4828ad" style="width: 100.0%; height: 100.0%;"><strong>Muckamuck Fire, Okanogan County, Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5804" target="_blank">More Info</a></div>`)[0];
                popup_c614320c47df170dc0742eec9fce5f07.setContent(html_42e6d671a077ddfcaa43e7c72f4828ad);
            
        

        marker_9d20df4f72469e06d2143cb2186603e6.bindPopup(popup_c614320c47df170dc0742eec9fce5f07)
        ;

        
    
    
            var marker_7e023c62dc8f1bcaad77079614fb1783 = L.marker(
                [38.811353392, 23.324881191],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_987475877a0309aa2e7d0d7c99568cf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7e023c62dc8f1bcaad77079614fb1783.setIcon(icon_987475877a0309aa2e7d0d7c99568cf7);
        
    
        var popup_e039284abcb2eb5bdc7db4a34f89986a = L.popup({"maxWidth": "100%"});

        
            
                var html_b5fc82faa68b3203e6c72096b3eca322 = $(`<div id="html_b5fc82faa68b3203e6c72096b3eca322" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Chalkida, Stere Ellda - Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5759" target="_blank">More Info</a></div>`)[0];
                popup_e039284abcb2eb5bdc7db4a34f89986a.setContent(html_b5fc82faa68b3203e6c72096b3eca322);
            
        

        marker_7e023c62dc8f1bcaad77079614fb1783.bindPopup(popup_e039284abcb2eb5bdc7db4a34f89986a)
        ;

        
    
    
            var marker_b75d9de4c0cb9e6e51d4de9ce2f2c150 = L.marker(
                [52.3744, -96.4772],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3baa253c88f94ca92fa0fb8b5285efa9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b75d9de4c0cb9e6e51d4de9ce2f2c150.setIcon(icon_3baa253c88f94ca92fa0fb8b5285efa9);
        
    
        var popup_b9c0d329bff9d5c496eb468cbd645cdd = L.popup({"maxWidth": "100%"});

        
            
                var html_7468d29ce45ed237c8dcb858db750a83 = $(`<div id="html_7468d29ce45ed237c8dcb858db750a83" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA196, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5788" target="_blank">More Info</a></div>`)[0];
                popup_b9c0d329bff9d5c496eb468cbd645cdd.setContent(html_7468d29ce45ed237c8dcb858db750a83);
            
        

        marker_b75d9de4c0cb9e6e51d4de9ce2f2c150.bindPopup(popup_b9c0d329bff9d5c496eb468cbd645cdd)
        ;

        
    
    
            var marker_d3e7ba13259266eb82a631455a7a0463 = L.marker(
                [48.763, -119.788],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_324fae96ed06e487e8ccd5d8b8ea26e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d3e7ba13259266eb82a631455a7a0463.setIcon(icon_324fae96ed06e487e8ccd5d8b8ea26e0);
        
    
        var popup_eab2a6ed51f700d9f0e2558010781a8b = L.popup({"maxWidth": "100%"});

        
            
                var html_17842067c5848c3b655f6a35ff999de2 = $(`<div id="html_17842067c5848c3b655f6a35ff999de2" style="width: 100.0%; height: 100.0%;"><strong>Chickadee Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5859" target="_blank">More Info</a></div>`)[0];
                popup_eab2a6ed51f700d9f0e2558010781a8b.setContent(html_17842067c5848c3b655f6a35ff999de2);
            
        

        marker_d3e7ba13259266eb82a631455a7a0463.bindPopup(popup_eab2a6ed51f700d9f0e2558010781a8b)
        ;

        
    
    
            var marker_df6c8d41f5a5390384dbe24e1ec878b3 = L.marker(
                [41.1534, -123.05161],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_94f2353016b3b3d4ed25ee601956c506 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_df6c8d41f5a5390384dbe24e1ec878b3.setIcon(icon_94f2353016b3b3d4ed25ee601956c506);
        
    
        var popup_ea06590d4e824765ca9c0c09dd07902b = L.popup({"maxWidth": "100%"});

        
            
                var html_1c166ccea2a92556d8b2aa7fddf18706 = $(`<div id="html_1c166ccea2a92556d8b2aa7fddf18706" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Siskiyou County (River Complex), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5768" target="_blank">More Info</a></div>`)[0];
                popup_ea06590d4e824765ca9c0c09dd07902b.setContent(html_1c166ccea2a92556d8b2aa7fddf18706);
            
        

        marker_df6c8d41f5a5390384dbe24e1ec878b3.bindPopup(popup_ea06590d4e824765ca9c0c09dd07902b)
        ;

        
    
    
            var marker_d56a1948bcbfdfa598fe56d8e828bc07 = L.marker(
                [36.34799, 28.07286],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_81ca751adbdb2c3d91f7a925b757e2e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d56a1948bcbfdfa598fe56d8e828bc07.setIcon(icon_81ca751adbdb2c3d91f7a925b757e2e9);
        
    
        var popup_6f7bf57d8ca3a6333acab0cd2e310ee0 = L.popup({"maxWidth": "100%"});

        
            
                var html_2510cadc2de78cf9516f7c36674b3bc9 = $(`<div id="html_2510cadc2de78cf9516f7c36674b3bc9" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Rhodes Island, Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5761" target="_blank">More Info</a></div>`)[0];
                popup_6f7bf57d8ca3a6333acab0cd2e310ee0.setContent(html_2510cadc2de78cf9516f7c36674b3bc9);
            
        

        marker_d56a1948bcbfdfa598fe56d8e828bc07.bindPopup(popup_6f7bf57d8ca3a6333acab0cd2e310ee0)
        ;

        
    
    
            var marker_e9327ab8d51ea64f75359f1881660b48 = L.marker(
                [42.874, -122.87],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7d67dc9d144a3acad055753879562c08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e9327ab8d51ea64f75359f1881660b48.setIcon(icon_7d67dc9d144a3acad055753879562c08);
        
    
        var popup_41e4a23d71dffb6380027da924abe878 = L.popup({"maxWidth": "100%"});

        
            
                var html_7342594530d7b2e57e88af982d32b09f = $(`<div id="html_7342594530d7b2e57e88af982d32b09f" style="width: 100.0%; height: 100.0%;"><strong>Devil&#039;s Knob Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5796" target="_blank">More Info</a></div>`)[0];
                popup_41e4a23d71dffb6380027da924abe878.setContent(html_7342594530d7b2e57e88af982d32b09f);
            
        

        marker_e9327ab8d51ea64f75359f1881660b48.bindPopup(popup_41e4a23d71dffb6380027da924abe878)
        ;

        
    
    
            var marker_f499f8cbd6ac978989248892249d577e = L.marker(
                [41.50178, -121.92528],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9b9418e96fd861a3bc533e302521624a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_f499f8cbd6ac978989248892249d577e.setIcon(icon_9b9418e96fd861a3bc533e302521624a);
        
    
        var popup_26610ae0ce935be82f2a66ba47f1c704 = L.popup({"maxWidth": "100%"});

        
            
                var html_5a84271bb2da5c756a7cccc2da59a68f = $(`<div id="html_5a84271bb2da5c756a7cccc2da59a68f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Siskiyou County (Antelope Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5748" target="_blank">More Info</a></div>`)[0];
                popup_26610ae0ce935be82f2a66ba47f1c704.setContent(html_5a84271bb2da5c756a7cccc2da59a68f);
            
        

        marker_f499f8cbd6ac978989248892249d577e.bindPopup(popup_26610ae0ce935be82f2a66ba47f1c704)
        ;

        
    
    
            var marker_350b28f4e622394b5e80d56139e1a2fe = L.marker(
                [43.95022, -122.47228],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2f53ac299286675ac7f7d8a5564a3c97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_350b28f4e622394b5e80d56139e1a2fe.setIcon(icon_2f53ac299286675ac7f7d8a5564a3c97);
        
    
        var popup_c8d4038011f4188e2ee4c279d71a44fd = L.popup({"maxWidth": "100%"});

        
            
                var html_e23885b08df3b22725cd9a428a109282 = $(`<div id="html_e23885b08df3b22725cd9a428a109282" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Lane County (Middle Fork Complex), Oregon, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5751" target="_blank">More Info</a></div>`)[0];
                popup_c8d4038011f4188e2ee4c279d71a44fd.setContent(html_e23885b08df3b22725cd9a428a109282);
            
        

        marker_350b28f4e622394b5e80d56139e1a2fe.bindPopup(popup_c8d4038011f4188e2ee4c279d71a44fd)
        ;

        
    
    
            var marker_07379231b3d7237ae8dcbef273bcc651 = L.marker(
                [40.748, -123.31743],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0501dbae96cdcdf54be91533f15abd71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_07379231b3d7237ae8dcbef273bcc651.setIcon(icon_0501dbae96cdcdf54be91533f15abd71);
        
    
        var popup_70dcc720d0d4d1034fdf14528f41f28c = L.popup({"maxWidth": "100%"});

        
            
                var html_54f28d986fa9279ced650f397a116430 = $(`<div id="html_54f28d986fa9279ced650f397a116430" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Trinity County (Monument Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5749" target="_blank">More Info</a></div>`)[0];
                popup_70dcc720d0d4d1034fdf14528f41f28c.setContent(html_54f28d986fa9279ced650f397a116430);
            
        

        marker_07379231b3d7237ae8dcbef273bcc651.bindPopup(popup_70dcc720d0d4d1034fdf14528f41f28c)
        ;

        
    
    
            var marker_e5f76f18e5eaa8389c4b7b2f133e5dd4 = L.marker(
                [47.77489, -113.99586],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_89ca331ff721348a1d3b3eae285425fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e5f76f18e5eaa8389c4b7b2f133e5dd4.setIcon(icon_89ca331ff721348a1d3b3eae285425fa);
        
    
        var popup_0de93fab9fa0448fd33605958425a277 = L.popup({"maxWidth": "100%"});

        
            
                var html_72272a3e9f2eab47520f9a4161cdbbaa = $(`<div id="html_72272a3e9f2eab47520f9a4161cdbbaa" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Lake County (Boulder 2700 Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5750" target="_blank">More Info</a></div>`)[0];
                popup_0de93fab9fa0448fd33605958425a277.setContent(html_72272a3e9f2eab47520f9a4161cdbbaa);
            
        

        marker_e5f76f18e5eaa8389c4b7b2f133e5dd4.bindPopup(popup_0de93fab9fa0448fd33605958425a277)
        ;

        
    
    
            var marker_83b38d5e116208c444a38c187243b841 = L.marker(
                [48.21894, -116.92985],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9cc8ae5a4696e6490a64e7c7351f9e66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_83b38d5e116208c444a38c187243b841.setIcon(icon_9cc8ae5a4696e6490a64e7c7351f9e66);
        
    
        var popup_8cf7743cfb733c456952ff2fd3a1be3b = L.popup({"maxWidth": "100%"});

        
            
                var html_d5a3187ac21cbd7ee0615991a8f8ea44 = $(`<div id="html_d5a3187ac21cbd7ee0615991a8f8ea44" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Bonner County (Pioneer Fire), Idaho, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5752" target="_blank">More Info</a></div>`)[0];
                popup_8cf7743cfb733c456952ff2fd3a1be3b.setContent(html_d5a3187ac21cbd7ee0615991a8f8ea44);
            
        

        marker_83b38d5e116208c444a38c187243b841.bindPopup(popup_8cf7743cfb733c456952ff2fd3a1be3b)
        ;

        
    
    
            var marker_856ab72de192047706cad0bb9091f1c1 = L.marker(
                [38.30693, 21.96864],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_612d04b20f512101c955e60c7f6ef3b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_856ab72de192047706cad0bb9091f1c1.setIcon(icon_612d04b20f512101c955e60c7f6ef3b2);
        
    
        var popup_1c7c6226a488814763b1eec95aacd615 = L.popup({"maxWidth": "100%"});

        
            
                var html_a436e585ed4a265d16bff102611c1dbb = $(`<div id="html_a436e585ed4a265d16bff102611c1dbb" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Aigialeia Municipality, Greece</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5753" target="_blank">More Info</a></div>`)[0];
                popup_1c7c6226a488814763b1eec95aacd615.setContent(html_a436e585ed4a265d16bff102611c1dbb);
            
        

        marker_856ab72de192047706cad0bb9091f1c1.bindPopup(popup_1c7c6226a488814763b1eec95aacd615)
        ;

        
    
    
            var marker_0465fb9900e9529179a091fc89637ba9 = L.marker(
                [41.90777, 14.92611],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9587aff46cb34b3892dcfbd3c086b28c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0465fb9900e9529179a091fc89637ba9.setIcon(icon_9587aff46cb34b3892dcfbd3c086b28c);
        
    
        var popup_164cdb8b5ae745235cc9ac4f54754cfc = L.popup({"maxWidth": "100%"});

        
            
                var html_04ac53c3dda93b66eef35d72d6e2188a = $(`<div id="html_04ac53c3dda93b66eef35d72d6e2188a" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Termoli, Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5754" target="_blank">More Info</a></div>`)[0];
                popup_164cdb8b5ae745235cc9ac4f54754cfc.setContent(html_04ac53c3dda93b66eef35d72d6e2188a);
            
        

        marker_0465fb9900e9529179a091fc89637ba9.bindPopup(popup_164cdb8b5ae745235cc9ac4f54754cfc)
        ;

        
    
    
            var marker_564df833f5da71fa84181df723bdd30f = L.marker(
                [37.7455, 14.98278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1da05d755b811b96a862fc6bcdf3904c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_564df833f5da71fa84181df723bdd30f.setIcon(icon_1da05d755b811b96a862fc6bcdf3904c);
        
    
        var popup_a2aca257f0c84b3e4cb7c66accbffbd6 = L.popup({"maxWidth": "100%"});

        
            
                var html_c70a4c86de899a9f3da800e4941bc9d6 = $(`<div id="html_c70a4c86de899a9f3da800e4941bc9d6" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Catania, Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5755" target="_blank">More Info</a></div>`)[0];
                popup_a2aca257f0c84b3e4cb7c66accbffbd6.setContent(html_c70a4c86de899a9f3da800e4941bc9d6);
            
        

        marker_564df833f5da71fa84181df723bdd30f.bindPopup(popup_a2aca257f0c84b3e4cb7c66accbffbd6)
        ;

        
    
    
            var marker_7f39b52205e07de5da2377620ab01e13 = L.marker(
                [36.90983, 31.61545],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9cdd055eae6d09215875222a61781007 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7f39b52205e07de5da2377620ab01e13.setIcon(icon_9cdd055eae6d09215875222a61781007);
        
    
        var popup_1396cef2c857603856d1ce709493b2c3 = L.popup({"maxWidth": "100%"});

        
            
                var html_02a80e9d654e1cf625499be5a84feb72 = $(`<div id="html_02a80e9d654e1cf625499be5a84feb72" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - E of Antalya - Turkey</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5769" target="_blank">More Info</a></div>`)[0];
                popup_1396cef2c857603856d1ce709493b2c3.setContent(html_02a80e9d654e1cf625499be5a84feb72);
            
        

        marker_7f39b52205e07de5da2377620ab01e13.bindPopup(popup_1396cef2c857603856d1ce709493b2c3)
        ;

        
    
    
            var marker_64efd80a062cea817691cd534ba444d9 = L.marker(
                [36.96302, 27.87693],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9acd33ce2b7ee8983d171bf74a6c309d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_64efd80a062cea817691cd534ba444d9.setIcon(icon_9acd33ce2b7ee8983d171bf74a6c309d);
        
    
        var popup_5c01ba2f44cc97dc3f9581313404a38f = L.popup({"maxWidth": "100%"});

        
            
                var html_e1e01ff4963f2a271a091e87d992c3be = $(`<div id="html_e1e01ff4963f2a271a091e87d992c3be" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Mugla - Turkey</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5772" target="_blank">More Info</a></div>`)[0];
                popup_5c01ba2f44cc97dc3f9581313404a38f.setContent(html_e1e01ff4963f2a271a091e87d992c3be);
            
        

        marker_64efd80a062cea817691cd534ba444d9.bindPopup(popup_5c01ba2f44cc97dc3f9581313404a38f)
        ;

        
    
    
            var marker_111ce33ea8e500c3bc5c3ef2b962c51f = L.marker(
                [56.4297, -99.6875],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b15a74d9b17f3760146bdec7590cecc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_111ce33ea8e500c3bc5c3ef2b962c51f.setIcon(icon_b15a74d9b17f3760146bdec7590cecc0);
        
    
        var popup_94d218997782fa351154478ee3d0f975 = L.popup({"maxWidth": "100%"});

        
            
                var html_123661d4c701e73bd664ac91c063a583 = $(`<div id="html_123661d4c701e73bd664ac91c063a583" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO135, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5775" target="_blank">More Info</a></div>`)[0];
                popup_94d218997782fa351154478ee3d0f975.setContent(html_123661d4c701e73bd664ac91c063a583);
            
        

        marker_111ce33ea8e500c3bc5c3ef2b962c51f.bindPopup(popup_94d218997782fa351154478ee3d0f975)
        ;

        
    
    
            var marker_95048175d1c0c33620da44a1acc67af4 = L.marker(
                [56.8306, -101.4542],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e49c6fa86c49b6acecfe5cb02018a697 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_95048175d1c0c33620da44a1acc67af4.setIcon(icon_e49c6fa86c49b6acecfe5cb02018a697);
        
    
        var popup_a9f1a3ec19060b836fba688ba8b06df3 = L.popup({"maxWidth": "100%"});

        
            
                var html_34900fe6b479a9547ca618dadeacf65e = $(`<div id="html_34900fe6b479a9547ca618dadeacf65e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO132, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5840" target="_blank">More Info</a></div>`)[0];
                popup_a9f1a3ec19060b836fba688ba8b06df3.setContent(html_34900fe6b479a9547ca618dadeacf65e);
            
        

        marker_95048175d1c0c33620da44a1acc67af4.bindPopup(popup_a9f1a3ec19060b836fba688ba8b06df3)
        ;

        
    
    
            var marker_7da2a49f9fa537d755a5589aef305c81 = L.marker(
                [56.4594, -100.4708],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9a8dbfacefcbb7966a42711a3c92a90b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7da2a49f9fa537d755a5589aef305c81.setIcon(icon_9a8dbfacefcbb7966a42711a3c92a90b);
        
    
        var popup_07c99803f0c7a437e0dae3550b81bd5a = L.popup({"maxWidth": "100%"});

        
            
                var html_588596452b9f89575b7426567f435024 = $(`<div id="html_588596452b9f89575b7426567f435024" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO134, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5904" target="_blank">More Info</a></div>`)[0];
                popup_07c99803f0c7a437e0dae3550b81bd5a.setContent(html_588596452b9f89575b7426567f435024);
            
        

        marker_7da2a49f9fa537d755a5589aef305c81.bindPopup(popup_07c99803f0c7a437e0dae3550b81bd5a)
        ;

        
    
    
            var marker_c7bd7700dba31153b85505c882e6f76f = L.marker(
                [40.34992, -123.06769],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c173d36586512f4e74e98a860deca779 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c7bd7700dba31153b85505c882e6f76f.setIcon(icon_c173d36586512f4e74e98a860deca779);
        
    
        var popup_3540e80cfac1d9f01afdd35ec3f6dd28 = L.popup({"maxWidth": "100%"});

        
            
                var html_a1ed18e1f46aff74925672968e7915a0 = $(`<div id="html_a1ed18e1f46aff74925672968e7915a0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Trinity County (McFarland Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5760" target="_blank">More Info</a></div>`)[0];
                popup_3540e80cfac1d9f01afdd35ec3f6dd28.setContent(html_a1ed18e1f46aff74925672968e7915a0);
            
        

        marker_c7bd7700dba31153b85505c882e6f76f.bindPopup(popup_3540e80cfac1d9f01afdd35ec3f6dd28)
        ;

        
    
    
            var marker_160e157118926b514e8959dc4f0714af = L.marker(
                [19.95018, -155.61588],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_841caf27455c22f231df9966011bab15 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_160e157118926b514e8959dc4f0714af.setIcon(icon_841caf27455c22f231df9966011bab15);
        
    
        var popup_369d4bb6f947074b15ba88bb6136172d = L.popup({"maxWidth": "100%"});

        
            
                var html_94038047380cd33a1cc77a3a73e8c941 = $(`<div id="html_94038047380cd33a1cc77a3a73e8c941" style="width: 100.0%; height: 100.0%;"><strong>Wildfire -  Waimea, Hawaii County, Hawaii</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5735" target="_blank">More Info</a></div>`)[0];
                popup_369d4bb6f947074b15ba88bb6136172d.setContent(html_94038047380cd33a1cc77a3a73e8c941);
            
        

        marker_160e157118926b514e8959dc4f0714af.bindPopup(popup_369d4bb6f947074b15ba88bb6136172d)
        ;

        
    
    
            var marker_43cd705e6727f4eba33457d82292c14a = L.marker(
                [56.9119, -96.3331],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5e396adb8383dc1a5c6492e7e2395c48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_43cd705e6727f4eba33457d82292c14a.setIcon(icon_5e396adb8383dc1a5c6492e7e2395c48);
        
    
        var popup_36d8bdf93735e750a214352d46cb5cbc = L.popup({"maxWidth": "100%"});

        
            
                var html_41e5a1e3831cbd4ca19ae415eece2eec = $(`<div id="html_41e5a1e3831cbd4ca19ae415eece2eec" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO124, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5744" target="_blank">More Info</a></div>`)[0];
                popup_36d8bdf93735e750a214352d46cb5cbc.setContent(html_41e5a1e3831cbd4ca19ae415eece2eec);
            
        

        marker_43cd705e6727f4eba33457d82292c14a.bindPopup(popup_36d8bdf93735e750a214352d46cb5cbc)
        ;

        
    
    
            var marker_48db568292fc44ae99bed434f24715ed = L.marker(
                [57.1783, -96.3789],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_946e891c7cb194eab4e293aa9048fe16 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_48db568292fc44ae99bed434f24715ed.setIcon(icon_946e891c7cb194eab4e293aa9048fe16);
        
    
        var popup_6ea71d93af62e36f4fddba71a12fae03 = L.popup({"maxWidth": "100%"});

        
            
                var html_86b38c10bda803a534a0afb32503e834 = $(`<div id="html_86b38c10bda803a534a0afb32503e834" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO125, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5745" target="_blank">More Info</a></div>`)[0];
                popup_6ea71d93af62e36f4fddba71a12fae03.setContent(html_86b38c10bda803a534a0afb32503e834);
            
        

        marker_48db568292fc44ae99bed434f24715ed.bindPopup(popup_6ea71d93af62e36f4fddba71a12fae03)
        ;

        
    
    
            var marker_efe58131f4d7ddc29c2ecce3bce0d9cc = L.marker(
                [57.2778, -96.8731],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bc2fd930b0f082cb633bbb99af1e3ac8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_efe58131f4d7ddc29c2ecce3bce0d9cc.setIcon(icon_bc2fd930b0f082cb633bbb99af1e3ac8);
        
    
        var popup_688fb149d87918928dbfea8e6a93843f = L.popup({"maxWidth": "100%"});

        
            
                var html_9812d01eb0b8f69bd75be8f3a1ce5fc2 = $(`<div id="html_9812d01eb0b8f69bd75be8f3a1ce5fc2" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO126, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5746" target="_blank">More Info</a></div>`)[0];
                popup_688fb149d87918928dbfea8e6a93843f.setContent(html_9812d01eb0b8f69bd75be8f3a1ce5fc2);
            
        

        marker_efe58131f4d7ddc29c2ecce3bce0d9cc.bindPopup(popup_688fb149d87918928dbfea8e6a93843f)
        ;

        
    
    
            var marker_3563d54fec3eae1369474bc7599f821b = L.marker(
                [56.7183, -100.3767],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_dca37bdca12eb91e0789b62a35c10110 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3563d54fec3eae1369474bc7599f821b.setIcon(icon_dca37bdca12eb91e0789b62a35c10110);
        
    
        var popup_54cc964b9e8fa8a53aee9d3c62a89f04 = L.popup({"maxWidth": "100%"});

        
            
                var html_3f6de0311cf6cbfed6e2b623d8295551 = $(`<div id="html_3f6de0311cf6cbfed6e2b623d8295551" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO129, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5765" target="_blank">More Info</a></div>`)[0];
                popup_54cc964b9e8fa8a53aee9d3c62a89f04.setContent(html_3f6de0311cf6cbfed6e2b623d8295551);
            
        

        marker_3563d54fec3eae1369474bc7599f821b.bindPopup(popup_54cc964b9e8fa8a53aee9d3c62a89f04)
        ;

        
    
    
            var marker_7f1e3a2ec4fb2b6f4699e99fcf50501f = L.marker(
                [41.564, -123.404],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_91eb3ad292d3054e65e7f49ea8b3f79f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7f1e3a2ec4fb2b6f4699e99fcf50501f.setIcon(icon_91eb3ad292d3054e65e7f49ea8b3f79f);
        
    
        var popup_1d9f8ff61bf18f83588769a33f5c9450 = L.popup({"maxWidth": "100%"});

        
            
                var html_29d41b229db2fd6ea1661d898e97bf06 = $(`<div id="html_29d41b229db2fd6ea1661d898e97bf06" style="width: 100.0%; height: 100.0%;"><strong>McCash Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5797" target="_blank">More Info</a></div>`)[0];
                popup_1d9f8ff61bf18f83588769a33f5c9450.setContent(html_29d41b229db2fd6ea1661d898e97bf06);
            
        

        marker_7f1e3a2ec4fb2b6f4699e99fcf50501f.bindPopup(popup_1d9f8ff61bf18f83588769a33f5c9450)
        ;

        
    
    
            var marker_af1c1baedeb20b49b5409639ce1cedce = L.marker(
                [57.4306, -95.0492],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_eefa1b27a75d3123dad4a1cb931d3f6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_af1c1baedeb20b49b5409639ce1cedce.setIcon(icon_eefa1b27a75d3123dad4a1cb931d3f6c);
        
    
        var popup_786e89be6f9d36e40da81b6d1fcf821f = L.popup({"maxWidth": "100%"});

        
            
                var html_5560653a59255996c34e9638e252f430 = $(`<div id="html_5560653a59255996c34e9638e252f430" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO121, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5839" target="_blank">More Info</a></div>`)[0];
                popup_786e89be6f9d36e40da81b6d1fcf821f.setContent(html_5560653a59255996c34e9638e252f430);
            
        

        marker_af1c1baedeb20b49b5409639ce1cedce.bindPopup(popup_786e89be6f9d36e40da81b6d1fcf821f)
        ;

        
    
    
            var marker_4d0f72e28a84de8f162c6aa52b3fff84 = L.marker(
                [40.752, -123.337],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_be012c64a6b10ec06c4018c7fdc631fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4d0f72e28a84de8f162c6aa52b3fff84.setIcon(icon_be012c64a6b10ec06c4018c7fdc631fa);
        
    
        var popup_04565908894e1fffc97a42b1f5bb24f8 = L.popup({"maxWidth": "100%"});

        
            
                var html_4ed0af1a4dfd3f9a3a48d89d5a7e631a = $(`<div id="html_4ed0af1a4dfd3f9a3a48d89d5a7e631a" style="width: 100.0%; height: 100.0%;"><strong>Monument Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5742" target="_blank">More Info</a></div>`)[0];
                popup_04565908894e1fffc97a42b1f5bb24f8.setContent(html_4ed0af1a4dfd3f9a3a48d89d5a7e631a);
            
        

        marker_4d0f72e28a84de8f162c6aa52b3fff84.bindPopup(popup_04565908894e1fffc97a42b1f5bb24f8)
        ;

        
    
    
            var marker_254968739457d6e5185b25e73c507f5b = L.marker(
                [34.5457, 36.31338],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_20730d2b0b3a1d5ee194f52111ab07ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_254968739457d6e5185b25e73c507f5b.setIcon(icon_20730d2b0b3a1d5ee194f52111ab07ed);
        
    
        var popup_649ae2d9d4726dbb105741205e9e06d7 = L.popup({"maxWidth": "100%"});

        
            
                var html_b1dc27892202f4df25fc44d8ba32006f = $(`<div id="html_b1dc27892202f4df25fc44d8ba32006f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Qoubaiyat, Lebanon</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5732" target="_blank">More Info</a></div>`)[0];
                popup_649ae2d9d4726dbb105741205e9e06d7.setContent(html_b1dc27892202f4df25fc44d8ba32006f);
            
        

        marker_254968739457d6e5185b25e73c507f5b.bindPopup(popup_649ae2d9d4726dbb105741205e9e06d7)
        ;

        
    
    
            var marker_336128e969d71927859619077d4e57e0 = L.marker(
                [36.52297, 8.67799],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c6e4bac82207a6e74b6cc832ebc6ac35 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_336128e969d71927859619077d4e57e0.setIcon(icon_c6e4bac82207a6e74b6cc832ebc6ac35);
        
    
        var popup_f92fa43481c70a47c8f5ec8e4784a27b = L.popup({"maxWidth": "100%"});

        
            
                var html_79419c3c55ff59f84421fe44d98dda41 = $(`<div id="html_79419c3c55ff59f84421fe44d98dda41" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Kef and Jendouba  Governorates, Tunisia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5733" target="_blank">More Info</a></div>`)[0];
                popup_f92fa43481c70a47c8f5ec8e4784a27b.setContent(html_79419c3c55ff59f84421fe44d98dda41);
            
        

        marker_336128e969d71927859619077d4e57e0.bindPopup(popup_f92fa43481c70a47c8f5ec8e4784a27b)
        ;

        
    
    
            var marker_deac2a64e8950b7461f6cca4ad28f9aa = L.marker(
                [38.029739929, 15.387676131],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ee9ebe0c3fb7d15b3bff94575eab2bae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_deac2a64e8950b7461f6cca4ad28f9aa.setIcon(icon_ee9ebe0c3fb7d15b3bff94575eab2bae);
        
    
        var popup_25cd38441d156eb864708a0352068ec9 = L.popup({"maxWidth": "100%"});

        
            
                var html_80de17f7949934cbc7f4142c171e3949 = $(`<div id="html_80de17f7949934cbc7f4142c171e3949" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SW of Messina, Sicily - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5725" target="_blank">More Info</a></div>`)[0];
                popup_25cd38441d156eb864708a0352068ec9.setContent(html_80de17f7949934cbc7f4142c171e3949);
            
        

        marker_deac2a64e8950b7461f6cca4ad28f9aa.bindPopup(popup_25cd38441d156eb864708a0352068ec9)
        ;

        
    
    
            var marker_39bf0077098cda5a9a322f67d546aceb = L.marker(
                [55.2464, -100.8642],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cd0629ae8459e9c52834e21f49406680 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_39bf0077098cda5a9a322f67d546aceb.setIcon(icon_cd0629ae8459e9c52834e21f49406680);
        
    
        var popup_0826832834dd0b44d601c76006209aa3 = L.popup({"maxWidth": "100%"});

        
            
                var html_ac6609aaf9152bdb4aa6817028720d1f = $(`<div id="html_ac6609aaf9152bdb4aa6817028720d1f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE083, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5766" target="_blank">More Info</a></div>`)[0];
                popup_0826832834dd0b44d601c76006209aa3.setContent(html_ac6609aaf9152bdb4aa6817028720d1f);
            
        

        marker_39bf0077098cda5a9a322f67d546aceb.bindPopup(popup_0826832834dd0b44d601c76006209aa3)
        ;

        
    
    
            var marker_61f72d576432bc69ed7c2fa42c0d660a = L.marker(
                [43.511, -122.676],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a6bc9ef050ac798be769de00bb13f409 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_61f72d576432bc69ed7c2fa42c0d660a.setIcon(icon_a6bc9ef050ac798be769de00bb13f409);
        
    
        var popup_b46faa5b67d0023267ee01be6118cc12 = L.popup({"maxWidth": "100%"});

        
            
                var html_82a57f0723450c25adca33963a7eca5c = $(`<div id="html_82a57f0723450c25adca33963a7eca5c" style="width: 100.0%; height: 100.0%;"><strong>Rough Patch Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5798" target="_blank">More Info</a></div>`)[0];
                popup_b46faa5b67d0023267ee01be6118cc12.setContent(html_82a57f0723450c25adca33963a7eca5c);
            
        

        marker_61f72d576432bc69ed7c2fa42c0d660a.bindPopup(popup_b46faa5b67d0023267ee01be6118cc12)
        ;

        
    
    
            var marker_b3c22f719912d705862b16237f34e53d = L.marker(
                [40.35, -123.034],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_57dfd66ceb987270644794e1ab4d7377 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b3c22f719912d705862b16237f34e53d.setIcon(icon_57dfd66ceb987270644794e1ab4d7377);
        
    
        var popup_f7f8aabe5dab5a79c6f83581e5c09859 = L.popup({"maxWidth": "100%"});

        
            
                var html_a1a615b1d2d1c6c23c2d84348c237ac7 = $(`<div id="html_a1a615b1d2d1c6c23c2d84348c237ac7" style="width: 100.0%; height: 100.0%;"><strong>McFarland Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5736" target="_blank">More Info</a></div>`)[0];
                popup_f7f8aabe5dab5a79c6f83581e5c09859.setContent(html_a1a615b1d2d1c6c23c2d84348c237ac7);
            
        

        marker_b3c22f719912d705862b16237f34e53d.bindPopup(popup_f7f8aabe5dab5a79c6f83581e5c09859)
        ;

        
    
    
            var marker_57cffd019e9946cfd6d2c6cf82d920d6 = L.marker(
                [44.983, -120.951],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0b709ae7c1b09e1b176f08a8ab70f747 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_57cffd019e9946cfd6d2c6cf82d920d6.setIcon(icon_0b709ae7c1b09e1b176f08a8ab70f747);
        
    
        var popup_0d7ef538fadcc2548053b7d1f03dcb7e = L.popup({"maxWidth": "100%"});

        
            
                var html_d7400f47631dfcb2514639a8c7a6e952 = $(`<div id="html_d7400f47631dfcb2514639a8c7a6e952" style="width: 100.0%; height: 100.0%;"><strong>Deep Creek Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5737" target="_blank">More Info</a></div>`)[0];
                popup_0d7ef538fadcc2548053b7d1f03dcb7e.setContent(html_d7400f47631dfcb2514639a8c7a6e952);
            
        

        marker_57cffd019e9946cfd6d2c6cf82d920d6.bindPopup(popup_0d7ef538fadcc2548053b7d1f03dcb7e)
        ;

        
    
    
            var marker_5627e77445970ea87080d2cffa900f19 = L.marker(
                [43.869, -122.409],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1d4268ff6aea2f327396739dffa4156c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5627e77445970ea87080d2cffa900f19.setIcon(icon_1d4268ff6aea2f327396739dffa4156c);
        
    
        var popup_a0d5194d0b09d512a5bc9a6ac3085b3e = L.popup({"maxWidth": "100%"});

        
            
                var html_42d458a557c8f820299aa030f83c5b58 = $(`<div id="html_42d458a557c8f820299aa030f83c5b58" style="width: 100.0%; height: 100.0%;"><strong>Middle Fork Complex Fire</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5762" target="_blank">More Info</a></div>`)[0];
                popup_a0d5194d0b09d512a5bc9a6ac3085b3e.setContent(html_42d458a557c8f820299aa030f83c5b58);
            
        

        marker_5627e77445970ea87080d2cffa900f19.bindPopup(popup_a0d5194d0b09d512a5bc9a6ac3085b3e)
        ;

        
    
    
            var marker_bb33ba250cc00c2bd8bb713a910699bc = L.marker(
                [46.17848, -117.72063],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ca7259daa6e54874c3ab837ae3ba97c2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_bb33ba250cc00c2bd8bb713a910699bc.setIcon(icon_ca7259daa6e54874c3ab837ae3ba97c2);
        
    
        var popup_723faf3df8870a320312aa7ac5f5d12c = L.popup({"maxWidth": "100%"});

        
            
                var html_1e3826b3699aca8b2e2e20cbd5a4f6cf = $(`<div id="html_1e3826b3699aca8b2e2e20cbd5a4f6cf" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Garfield County (Green Ridge Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5721" target="_blank">More Info</a></div>`)[0];
                popup_723faf3df8870a320312aa7ac5f5d12c.setContent(html_1e3826b3699aca8b2e2e20cbd5a4f6cf);
            
        

        marker_bb33ba250cc00c2bd8bb713a910699bc.bindPopup(popup_723faf3df8870a320312aa7ac5f5d12c)
        ;

        
    
    
            var marker_07cf7f81f07b9c499bd8400272d1c5b6 = L.marker(
                [45.60727, -113.84928],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c2683431b3779411deb810e600478102 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_07cf7f81f07b9c499bd8400272d1c5b6.setIcon(icon_c2683431b3779411deb810e600478102);
        
    
        var popup_139287c9a353993da2c1a5d89293e49d = L.popup({"maxWidth": "100%"});

        
            
                var html_621eac176a18eb9b7aa6f570105aff5b = $(`<div id="html_621eac176a18eb9b7aa6f570105aff5b" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Beaverhead County (Trail Creek Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5722" target="_blank">More Info</a></div>`)[0];
                popup_139287c9a353993da2c1a5d89293e49d.setContent(html_621eac176a18eb9b7aa6f570105aff5b);
            
        

        marker_07cf7f81f07b9c499bd8400272d1c5b6.bindPopup(popup_139287c9a353993da2c1a5d89293e49d)
        ;

        
    
    
            var marker_694ee0bab88801ff03578c1e86bbf279 = L.marker(
                [47.82259, -117.47202],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_27510d70b76ce7a4918584d1bad1947f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_694ee0bab88801ff03578c1e86bbf279.setIcon(icon_27510d70b76ce7a4918584d1bad1947f);
        
    
        var popup_128e0213d6c82002c7cf229321ced88b = L.popup({"maxWidth": "100%"});

        
            
                var html_0e79a03e5cbc349a14d69cdbf01a1f62 = $(`<div id="html_0e79a03e5cbc349a14d69cdbf01a1f62" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Spokane County (Hazard Hill Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5723" target="_blank">More Info</a></div>`)[0];
                popup_128e0213d6c82002c7cf229321ced88b.setContent(html_0e79a03e5cbc349a14d69cdbf01a1f62);
            
        

        marker_694ee0bab88801ff03578c1e86bbf279.bindPopup(popup_128e0213d6c82002c7cf229321ced88b)
        ;

        
    
    
            var marker_811ddb94c5ac0f00f1b4431bd5828a55 = L.marker(
                [58.2822, -96.6219],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_43e7f349aee438272c97432168062994 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_811ddb94c5ac0f00f1b4431bd5828a55.setIcon(icon_43e7f349aee438272c97432168062994);
        
    
        var popup_5f8bbe47b98903d29f7aa34e733ca411 = L.popup({"maxWidth": "100%"});

        
            
                var html_32cae1cac528bde17d7e827a64b92065 = $(`<div id="html_32cae1cac528bde17d7e827a64b92065" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO110, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5729" target="_blank">More Info</a></div>`)[0];
                popup_5f8bbe47b98903d29f7aa34e733ca411.setContent(html_32cae1cac528bde17d7e827a64b92065);
            
        

        marker_811ddb94c5ac0f00f1b4431bd5828a55.bindPopup(popup_5f8bbe47b98903d29f7aa34e733ca411)
        ;

        
    
    
            var marker_398704e19ed2b96b25fbd391c5120266 = L.marker(
                [53.4831, -101.3808],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_93366f0114e8b6a4bf30a32c978d2a74 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_398704e19ed2b96b25fbd391c5120266.setIcon(icon_93366f0114e8b6a4bf30a32c978d2a74);
        
    
        var popup_148d90829ca20f43d8801a73d7f49869 = L.popup({"maxWidth": "100%"});

        
            
                var html_4f23258349248f789d754ef22519080f = $(`<div id="html_4f23258349248f789d754ef22519080f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE080, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5730" target="_blank">More Info</a></div>`)[0];
                popup_148d90829ca20f43d8801a73d7f49869.setContent(html_4f23258349248f789d754ef22519080f);
            
        

        marker_398704e19ed2b96b25fbd391c5120266.bindPopup(popup_148d90829ca20f43d8801a73d7f49869)
        ;

        
    
    
            var marker_78941d27b6ad96c9890d0e8ca758fed9 = L.marker(
                [58.0589, -98.6256],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_91a95c64d3c11f4fdc1b8fbf2b21ddaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_78941d27b6ad96c9890d0e8ca758fed9.setIcon(icon_91a95c64d3c11f4fdc1b8fbf2b21ddaa);
        
    
        var popup_43ff182d0ac602ef4d3148a0ef724a35 = L.popup({"maxWidth": "100%"});

        
            
                var html_1ef6ae18fd986dffa659977a9bc7fd08 = $(`<div id="html_1ef6ae18fd986dffa659977a9bc7fd08" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO106, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5838" target="_blank">More Info</a></div>`)[0];
                popup_43ff182d0ac602ef4d3148a0ef724a35.setContent(html_1ef6ae18fd986dffa659977a9bc7fd08);
            
        

        marker_78941d27b6ad96c9890d0e8ca758fed9.bindPopup(popup_43ff182d0ac602ef4d3148a0ef724a35)
        ;

        
    
    
            var marker_c2ef78b0572ddb3c56d129e00f507242 = L.marker(
                [56.9667, -93.9208],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_33b9b7b5795f659f00b187c5a6b8a95b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c2ef78b0572ddb3c56d129e00f507242.setIcon(icon_33b9b7b5795f659f00b187c5a6b8a95b);
        
    
        var popup_4917334650b4af2fe99cab371d642266 = L.popup({"maxWidth": "100%"});

        
            
                var html_adbd87ca78e8a0eb584e43b56a8047fc = $(`<div id="html_adbd87ca78e8a0eb584e43b56a8047fc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO108, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5848" target="_blank">More Info</a></div>`)[0];
                popup_4917334650b4af2fe99cab371d642266.setContent(html_adbd87ca78e8a0eb584e43b56a8047fc);
            
        

        marker_c2ef78b0572ddb3c56d129e00f507242.bindPopup(popup_4917334650b4af2fe99cab371d642266)
        ;

        
    
    
            var marker_438d1e694fa334473abf06f098c23227 = L.marker(
                [55.8328, -95.1853],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_91d38e977e4c52963913b407399d07a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_438d1e694fa334473abf06f098c23227.setIcon(icon_91d38e977e4c52963913b407399d07a2);
        
    
        var popup_5641542c25d104629bf816ca543f0814 = L.popup({"maxWidth": "100%"});

        
            
                var html_bc47abf8b9a7251ad1970de97dc5a035 = $(`<div id="html_bc47abf8b9a7251ad1970de97dc5a035" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO112, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5849" target="_blank">More Info</a></div>`)[0];
                popup_5641542c25d104629bf816ca543f0814.setContent(html_bc47abf8b9a7251ad1970de97dc5a035);
            
        

        marker_438d1e694fa334473abf06f098c23227.bindPopup(popup_5641542c25d104629bf816ca543f0814)
        ;

        
    
    
            var marker_63cdaed68ba4589fd4ce02360d2ad3bd = L.marker(
                [46.5346, -111.30538],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1567e25e9db4ba1143f8fc042abe69e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_63cdaed68ba4589fd4ce02360d2ad3bd.setIcon(icon_1567e25e9db4ba1143f8fc042abe69e0);
        
    
        var popup_3715493ea2140e875ccb751b24c6f59f = L.popup({"maxWidth": "100%"});

        
            
                var html_b68f91c64da0fa11ae0961a333b401a1 = $(`<div id="html_b68f91c64da0fa11ae0961a333b401a1" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Broadwater County (Woods Creek Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5719" target="_blank">More Info</a></div>`)[0];
                popup_3715493ea2140e875ccb751b24c6f59f.setContent(html_b68f91c64da0fa11ae0961a333b401a1);
            
        

        marker_63cdaed68ba4589fd4ce02360d2ad3bd.bindPopup(popup_3715493ea2140e875ccb751b24c6f59f)
        ;

        
    
    
            var marker_06b0841db310b93805da4fbd33f9abf6 = L.marker(
                [48.35746, -118.48844],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cec985413d0b0c01c597a8e7ae9456f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_06b0841db310b93805da4fbd33f9abf6.setIcon(icon_cec985413d0b0c01c597a8e7ae9456f2);
        
    
        var popup_49c1d0e039cff099bd04ab59fcb4c59a = L.popup({"maxWidth": "100%"});

        
            
                var html_63270c4f6e247da89f85e5ca7b7b6d11 = $(`<div id="html_63270c4f6e247da89f85e5ca7b7b6d11" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Colville Reservation (Summit Trail Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5718" target="_blank">More Info</a></div>`)[0];
                popup_49c1d0e039cff099bd04ab59fcb4c59a.setContent(html_63270c4f6e247da89f85e5ca7b7b6d11);
            
        

        marker_06b0841db310b93805da4fbd33f9abf6.bindPopup(popup_49c1d0e039cff099bd04ab59fcb4c59a)
        ;

        
    
    
            var marker_42ac0e325cb8c7551c8d669c60233510 = L.marker(
                [38.46407, -1.8015],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2c89b7c89d0c63b8a4e6685303b03021 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_42ac0e325cb8c7551c8d669c60233510.setIcon(icon_2c89b7c89d0c63b8a4e6685303b03021);
        
    
        var popup_b67cd81a6c9bc5ee3221f36fdcea47c8 = L.popup({"maxWidth": "100%"});

        
            
                var html_6d309049a174b719d16836a4cee26382 = $(`<div id="html_6d309049a174b719d16836a4cee26382" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Albacete. Castilla la Mancha, Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5705" target="_blank">More Info</a></div>`)[0];
                popup_b67cd81a6c9bc5ee3221f36fdcea47c8.setContent(html_6d309049a174b719d16836a4cee26382);
            
        

        marker_42ac0e325cb8c7551c8d669c60233510.bindPopup(popup_b67cd81a6c9bc5ee3221f36fdcea47c8)
        ;

        
    
    
            var marker_d5219c875e0b406ba403b8438c5b72df = L.marker(
                [41.50593, 1.45238],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ed17a48688dc4a13300102f48194a324 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d5219c875e0b406ba403b8438c5b72df.setIcon(icon_ed17a48688dc4a13300102f48194a324);
        
    
        var popup_27df0ebcc7b64a93986f34d684854264 = L.popup({"maxWidth": "100%"});

        
            
                var html_8a29759b03095b0b0b556d335a1a2edd = $(`<div id="html_8a29759b03095b0b0b556d335a1a2edd" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Catalonia, Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5706" target="_blank">More Info</a></div>`)[0];
                popup_27df0ebcc7b64a93986f34d684854264.setContent(html_8a29759b03095b0b0b556d335a1a2edd);
            
        

        marker_d5219c875e0b406ba403b8438c5b72df.bindPopup(popup_27df0ebcc7b64a93986f34d684854264)
        ;

        
    
    
            var marker_0a6acca4bd8a065189a3865b1f8bd6e6 = L.marker(
                [42.19169, 0.34014],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_38eaec26d6e240dcb9dc1884a9647e92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0a6acca4bd8a065189a3865b1f8bd6e6.setIcon(icon_38eaec26d6e240dcb9dc1884a9647e92);
        
    
        var popup_ddb1e7a12456b16f04c161425a502693 = L.popup({"maxWidth": "100%"});

        
            
                var html_6ed62db12812dd09f94f628507a3d8a5 = $(`<div id="html_6ed62db12812dd09f94f628507a3d8a5" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Aragon, Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5707" target="_blank">More Info</a></div>`)[0];
                popup_ddb1e7a12456b16f04c161425a502693.setContent(html_6ed62db12812dd09f94f628507a3d8a5);
            
        

        marker_0a6acca4bd8a065189a3865b1f8bd6e6.bindPopup(popup_ddb1e7a12456b16f04c161425a502693)
        ;

        
    
    
            var marker_5e9811f5e5fbbd971444e8e117d530b0 = L.marker(
                [37.44168, -6.60248],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d15f418cd9629c3b3e9bdc4c3b9de17b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5e9811f5e5fbbd971444e8e117d530b0.setIcon(icon_d15f418cd9629c3b3e9bdc4c3b9de17b);
        
    
        var popup_9be73598de2a842c744efa06070c5592 = L.popup({"maxWidth": "100%"});

        
            
                var html_b8ed249cb3e1f3ffb449388a604d27e9 = $(`<div id="html_b8ed249cb3e1f3ffb449388a604d27e9" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Andalucia, Spain</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5708" target="_blank">More Info</a></div>`)[0];
                popup_9be73598de2a842c744efa06070c5592.setContent(html_b8ed249cb3e1f3ffb449388a604d27e9);
            
        

        marker_5e9811f5e5fbbd971444e8e117d530b0.bindPopup(popup_9be73598de2a842c744efa06070c5592)
        ;

        
    
    
            var marker_07ad204bf94f551459aa0f2d48d3a456 = L.marker(
                [49.64172, -117.45453],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_66b3feb2263d2d06a553da00b3155ede = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_07ad204bf94f551459aa0f2d48d3a456.setIcon(icon_66b3feb2263d2d06a553da00b3155ede);
        
    
        var popup_6e85b23314751a0fc2c48af8cc4c4ac3 = L.popup({"maxWidth": "100%"});

        
            
                var html_badcfcd71eb6ad2c1f97c5ae96fc2909 = $(`<div id="html_badcfcd71eb6ad2c1f97c5ae96fc2909" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Trozzo Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5693" target="_blank">More Info</a></div>`)[0];
                popup_6e85b23314751a0fc2c48af8cc4c4ac3.setContent(html_badcfcd71eb6ad2c1f97c5ae96fc2909);
            
        

        marker_07ad204bf94f551459aa0f2d48d3a456.bindPopup(popup_6e85b23314751a0fc2c48af8cc4c4ac3)
        ;

        
    
    
            var marker_a79f7d87ca45a3a8e036ddabb5bb74d8 = L.marker(
                [49.70377, -118.07207],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_acee9e561a46710b4d8cac77fc4213c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a79f7d87ca45a3a8e036ddabb5bb74d8.setIcon(icon_acee9e561a46710b4d8cac77fc4213c0);
        
    
        var popup_2b30833f099892f9641a6912a3a013dd = L.popup({"maxWidth": "100%"});

        
            
                var html_114c56d79d00425901b8a9ca7efbef8c = $(`<div id="html_114c56d79d00425901b8a9ca7efbef8c" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Octopus Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5694" target="_blank">More Info</a></div>`)[0];
                popup_2b30833f099892f9641a6912a3a013dd.setContent(html_114c56d79d00425901b8a9ca7efbef8c);
            
        

        marker_a79f7d87ca45a3a8e036ddabb5bb74d8.bindPopup(popup_2b30833f099892f9641a6912a3a013dd)
        ;

        
    
    
            var marker_c9c81078889f957c7ca5961290d65868 = L.marker(
                [49.4979, -118.2039],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_14981e61336f2ae3447b5ed522454eb3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c9c81078889f957c7ca5961290d65868.setIcon(icon_14981e61336f2ae3447b5ed522454eb3);
        
    
        var popup_f996dac31d17985960bc39c711566bd2 = L.popup({"maxWidth": "100%"});

        
            
                var html_50d80b099c456045d919a11c349b373b = $(`<div id="html_50d80b099c456045d919a11c349b373b" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Michaud Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5695" target="_blank">More Info</a></div>`)[0];
                popup_f996dac31d17985960bc39c711566bd2.setContent(html_50d80b099c456045d919a11c349b373b);
            
        

        marker_c9c81078889f957c7ca5961290d65868.bindPopup(popup_f996dac31d17985960bc39c711566bd2)
        ;

        
    
    
            var marker_437fc00bc158af1c1b4ff35a2f4f87b8 = L.marker(
                [49.29791, -116.81074],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c2aebe9442d99b7c9b9cb5f1339cb03e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_437fc00bc158af1c1b4ff35a2f4f87b8.setIcon(icon_c2aebe9442d99b7c9b9cb5f1339cb03e);
        
    
        var popup_4fc9062b3b345806ab23be4e9cd44821 = L.popup({"maxWidth": "100%"});

        
            
                var html_c82329e4bfde3e09fdb9dff6ca5cdc49 = $(`<div id="html_c82329e4bfde3e09fdb9dff6ca5cdc49" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Cultus Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5696" target="_blank">More Info</a></div>`)[0];
                popup_4fc9062b3b345806ab23be4e9cd44821.setContent(html_c82329e4bfde3e09fdb9dff6ca5cdc49);
            
        

        marker_437fc00bc158af1c1b4ff35a2f4f87b8.bindPopup(popup_4fc9062b3b345806ab23be4e9cd44821)
        ;

        
    
    
            var marker_65976c08464a1028071fdd6f710c7c50 = L.marker(
                [48.54019, -117.5832],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_dd0f6d16f1e96f642952c8e3406653ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_65976c08464a1028071fdd6f710c7c50.setIcon(icon_dd0f6d16f1e96f642952c8e3406653ea);
        
    
        var popup_7ebd2d48f6e5b63ecfb383dcb9e66af4 = L.popup({"maxWidth": "100%"});

        
            
                var html_514f0f3e0e5c29ba77edfcb9686f878e = $(`<div id="html_514f0f3e0e5c29ba77edfcb9686f878e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Stevens County (Spruce Canyon Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5710" target="_blank">More Info</a></div>`)[0];
                popup_7ebd2d48f6e5b63ecfb383dcb9e66af4.setContent(html_514f0f3e0e5c29ba77edfcb9686f878e);
            
        

        marker_65976c08464a1028071fdd6f710c7c50.bindPopup(popup_7ebd2d48f6e5b63ecfb383dcb9e66af4)
        ;

        
    
    
            var marker_4e5d59c3e40484e6b4ff2343eefa684b = L.marker(
                [46.15516, -110.28626],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ca631401a189ffe522fc7b25719f07f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4e5d59c3e40484e6b4ff2343eefa684b.setIcon(icon_ca631401a189ffe522fc7b25719f07f4);
        
    
        var popup_529ed4625580a9880aceb0fdb08d6aa3 = L.popup({"maxWidth": "100%"});

        
            
                var html_867e617b692b34c184590f76eff10ac9 = $(`<div id="html_867e617b692b34c184590f76eff10ac9" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Cascade County (American Fork Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5698" target="_blank">More Info</a></div>`)[0];
                popup_529ed4625580a9880aceb0fdb08d6aa3.setContent(html_867e617b692b34c184590f76eff10ac9);
            
        

        marker_4e5d59c3e40484e6b4ff2343eefa684b.bindPopup(popup_529ed4625580a9880aceb0fdb08d6aa3)
        ;

        
    
    
            var marker_da83602285b2afc89a60af01797453ee = L.marker(
                [48.77414, -114.42992],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c7ea49fc96a39d3a32697fcee5965910 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_da83602285b2afc89a60af01797453ee.setIcon(icon_c7ea49fc96a39d3a32697fcee5965910);
        
    
        var popup_6fcad51c4c826b4c91c795bb1f39c7aa = L.popup({"maxWidth": "100%"});

        
            
                var html_764acbd18254f6e74452e1d132951ca0 = $(`<div id="html_764acbd18254f6e74452e1d132951ca0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Flathead County (Hay Creek Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5699" target="_blank">More Info</a></div>`)[0];
                popup_6fcad51c4c826b4c91c795bb1f39c7aa.setContent(html_764acbd18254f6e74452e1d132951ca0);
            
        

        marker_da83602285b2afc89a60af01797453ee.bindPopup(popup_6fcad51c4c826b4c91c795bb1f39c7aa)
        ;

        
    
    
            var marker_df0e476dbd656b9717e58b3f0f72bf6c = L.marker(
                [48.35426, -116.00995],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_364218161acf9dfb9f1b366793ba31c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_df0e476dbd656b9717e58b3f0f72bf6c.setIcon(icon_364218161acf9dfb9f1b366793ba31c0);
        
    
        var popup_80c993814a4f28fc894d313d5f00e5c4 = L.popup({"maxWidth": "100%"});

        
            
                var html_0b7c180bba2fd86303d20ec0f82d39c7 = $(`<div id="html_0b7c180bba2fd86303d20ec0f82d39c7" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Lincoln County (Burnt Peak Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5700" target="_blank">More Info</a></div>`)[0];
                popup_80c993814a4f28fc894d313d5f00e5c4.setContent(html_0b7c180bba2fd86303d20ec0f82d39c7);
            
        

        marker_df0e476dbd656b9717e58b3f0f72bf6c.bindPopup(popup_80c993814a4f28fc894d313d5f00e5c4)
        ;

        
    
    
            var marker_ddf6766321de737f3950b7f7f1d093c9 = L.marker(
                [47.00918, -110.88619],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bf46c11ccc40ca6a7724574e4d57ffe5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ddf6766321de737f3950b7f7f1d093c9.setIcon(icon_bf46c11ccc40ca6a7724574e4d57ffe5);
        
    
        var popup_74fd4097af6a98d570675a74b0081364 = L.popup({"maxWidth": "100%"});

        
            
                var html_7f6176f4d61ee4acc2b975d045c3b0d2 = $(`<div id="html_7f6176f4d61ee4acc2b975d045c3b0d2" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Cascade County (Divide Complex - Balsinger Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5703" target="_blank">More Info</a></div>`)[0];
                popup_74fd4097af6a98d570675a74b0081364.setContent(html_7f6176f4d61ee4acc2b975d045c3b0d2);
            
        

        marker_ddf6766321de737f3950b7f7f1d093c9.bindPopup(popup_74fd4097af6a98d570675a74b0081364)
        ;

        
    
    
            var marker_b430d977bfbf727b6b9b3c472f143235 = L.marker(
                [52.7903, -99.3464],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2da2d0c6cc239073d773382829b5dfd5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b430d977bfbf727b6b9b3c472f143235.setIcon(icon_2da2d0c6cc239073d773382829b5dfd5);
        
    
        var popup_4fd964c57ae70bcc231def297a79cae6 = L.popup({"maxWidth": "100%"});

        
            
                var html_8cc4746c6d8b67144462b7d0d5553b7b = $(`<div id="html_8cc4746c6d8b67144462b7d0d5553b7b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE078, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5717" target="_blank">More Info</a></div>`)[0];
                popup_4fd964c57ae70bcc231def297a79cae6.setContent(html_8cc4746c6d8b67144462b7d0d5553b7b);
            
        

        marker_b430d977bfbf727b6b9b3c472f143235.bindPopup(popup_4fd964c57ae70bcc231def297a79cae6)
        ;

        
    
    
            var marker_c372f1159a3d7bd65263a4bed09f6ffd = L.marker(
                [57.3939, -101.395],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7ca42304d57c66c8cf8a5ececbd42456 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c372f1159a3d7bd65263a4bed09f6ffd.setIcon(icon_7ca42304d57c66c8cf8a5ececbd42456);
        
    
        var popup_d65eb2fb0f63b33706253f6070e408cf = L.popup({"maxWidth": "100%"});

        
            
                var html_dc2c34f2a6b4f0d13e71120ad3bcb5a6 = $(`<div id="html_dc2c34f2a6b4f0d13e71120ad3bcb5a6" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO102, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5837" target="_blank">More Info</a></div>`)[0];
                popup_d65eb2fb0f63b33706253f6070e408cf.setContent(html_dc2c34f2a6b4f0d13e71120ad3bcb5a6);
            
        

        marker_c372f1159a3d7bd65263a4bed09f6ffd.bindPopup(popup_d65eb2fb0f63b33706253f6070e408cf)
        ;

        
    
    
            var marker_c520147f7b3ccfc33be42d330578d35f = L.marker(
                [40.164541093, 8.536184696],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_52a4110068b64fa819357f98d49ca5ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c520147f7b3ccfc33be42d330578d35f.setIcon(icon_52a4110068b64fa819357f98d49ca5ca);
        
    
        var popup_862cf29d1827d3515cde3610befe236c = L.popup({"maxWidth": "100%"});

        
            
                var html_ae6155c37f4e186e7d537ac8ea6ba10b = $(`<div id="html_ae6155c37f4e186e7d537ac8ea6ba10b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - S of Sassari, Sardegna - Italy</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5678" target="_blank">More Info</a></div>`)[0];
                popup_862cf29d1827d3515cde3610befe236c.setContent(html_ae6155c37f4e186e7d537ac8ea6ba10b);
            
        

        marker_c520147f7b3ccfc33be42d330578d35f.bindPopup(popup_862cf29d1827d3515cde3610befe236c)
        ;

        
    
    
            var marker_4de05ba313f15850d9d54249f7f577b3 = L.marker(
                [52.1794, -95.1817],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a90b0768b7f8724c6496d961337f3081 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4de05ba313f15850d9d54249f7f577b3.setIcon(icon_a90b0768b7f8724c6496d961337f3081);
        
    
        var popup_003dfc8eddcf4b600afebf951cf297a1 = L.popup({"maxWidth": "100%"});

        
            
                var html_33866c3a4627e3ca09c5cce0ad034345 = $(`<div id="html_33866c3a4627e3ca09c5cce0ad034345" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA177, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5685" target="_blank">More Info</a></div>`)[0];
                popup_003dfc8eddcf4b600afebf951cf297a1.setContent(html_33866c3a4627e3ca09c5cce0ad034345);
            
        

        marker_4de05ba313f15850d9d54249f7f577b3.bindPopup(popup_003dfc8eddcf4b600afebf951cf297a1)
        ;

        
    
    
            var marker_295d30dbe84d147dcc4bd9e4d638c906 = L.marker(
                [55.2847, -100.4111],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_321f1c67a8103ecbae108cb98f22a435 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_295d30dbe84d147dcc4bd9e4d638c906.setIcon(icon_321f1c67a8103ecbae108cb98f22a435);
        
    
        var popup_276a1d42bab7b6536eb9ec66c126a27b = L.popup({"maxWidth": "100%"});

        
            
                var html_c41e56c79e265926ee199a429e945679 = $(`<div id="html_c41e56c79e265926ee199a429e945679" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE069, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5686" target="_blank">More Info</a></div>`)[0];
                popup_276a1d42bab7b6536eb9ec66c126a27b.setContent(html_c41e56c79e265926ee199a429e945679);
            
        

        marker_295d30dbe84d147dcc4bd9e4d638c906.bindPopup(popup_276a1d42bab7b6536eb9ec66c126a27b)
        ;

        
    
    
            var marker_9a65eb09b27a07e523e3bdbd7fa13a5a = L.marker(
                [51.85, -95.2278],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_370e2c5bf256eacbcc77d651e70d94fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9a65eb09b27a07e523e3bdbd7fa13a5a.setIcon(icon_370e2c5bf256eacbcc77d651e70d94fb);
        
    
        var popup_07f753e4c50d4369818b13b1b7fef289 = L.popup({"maxWidth": "100%"});

        
            
                var html_fe9638e392bd5503e5f17289ba2b8db9 = $(`<div id="html_fe9638e392bd5503e5f17289ba2b8db9" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA171, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5764" target="_blank">More Info</a></div>`)[0];
                popup_07f753e4c50d4369818b13b1b7fef289.setContent(html_fe9638e392bd5503e5f17289ba2b8db9);
            
        

        marker_9a65eb09b27a07e523e3bdbd7fa13a5a.bindPopup(popup_07f753e4c50d4369818b13b1b7fef289)
        ;

        
    
    
            var marker_be9d05bfad0d5c8d9f146253cd53876a = L.marker(
                [51.5867, -96.9922],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5f6cf5be04583e51816524b33959687e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_be9d05bfad0d5c8d9f146253cd53876a.setIcon(icon_5f6cf5be04583e51816524b33959687e);
        
    
        var popup_47d7f0e43d9c7afe2e33a1d4ec291f25 = L.popup({"maxWidth": "100%"});

        
            
                var html_9a7cec7a94baba3927eff736b3dad04a = $(`<div id="html_9a7cec7a94baba3927eff736b3dad04a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA175, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5877" target="_blank">More Info</a></div>`)[0];
                popup_47d7f0e43d9c7afe2e33a1d4ec291f25.setContent(html_9a7cec7a94baba3927eff736b3dad04a);
            
        

        marker_be9d05bfad0d5c8d9f146253cd53876a.bindPopup(popup_47d7f0e43d9c7afe2e33a1d4ec291f25)
        ;

        
    
    
            var marker_569edce3aec71e2411259bfde86e02b5 = L.marker(
                [62.06172, 32.99343],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_75dd4a1d71039bed92e659e939b5d910 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_569edce3aec71e2411259bfde86e02b5.setIcon(icon_75dd4a1d71039bed92e659e939b5d910);
        
    
        var popup_360a2b7bec5f3b2d7edf3ab1f36ff7a1 = L.popup({"maxWidth": "100%"});

        
            
                var html_b5c062290eed26ba445bcbf291992202 = $(`<div id="html_b5c062290eed26ba445bcbf291992202" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Karelia Region, Russia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5670" target="_blank">More Info</a></div>`)[0];
                popup_360a2b7bec5f3b2d7edf3ab1f36ff7a1.setContent(html_b5c062290eed26ba445bcbf291992202);
            
        

        marker_569edce3aec71e2411259bfde86e02b5.bindPopup(popup_360a2b7bec5f3b2d7edf3ab1f36ff7a1)
        ;

        
    
    
            var marker_ef3f7088b1f26e1744b03fb47aa04973 = L.marker(
                [47.91946, -117.97914],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_62673d1af228dbc4be059636ee77c36d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ef3f7088b1f26e1744b03fb47aa04973.setIcon(icon_62673d1af228dbc4be059636ee77c36d);
        
    
        var popup_0ddaa364f74e3610b8610517614db517 = L.popup({"maxWidth": "100%"});

        
            
                var html_2a151e5f367e603383fa374a9466d145 = $(`<div id="html_2a151e5f367e603383fa374a9466d145" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Stevens County (Sherwood Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5669" target="_blank">More Info</a></div>`)[0];
                popup_0ddaa364f74e3610b8610517614db517.setContent(html_2a151e5f367e603383fa374a9466d145);
            
        

        marker_ef3f7088b1f26e1744b03fb47aa04973.bindPopup(popup_0ddaa364f74e3610b8610517614db517)
        ;

        
    
    
            var marker_4bc32adb297f912932126014ecadcf72 = L.marker(
                [52.3678, -95.6856],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_11aeb11459b56c9cba4761b630144623 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4bc32adb297f912932126014ecadcf72.setIcon(icon_11aeb11459b56c9cba4761b630144623);
        
    
        var popup_f860e9da3866d3e1b8a9953eb1bc5b92 = L.popup({"maxWidth": "100%"});

        
            
                var html_2f2239525b7684ac32ec77761cd46a62 = $(`<div id="html_2f2239525b7684ac32ec77761cd46a62" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA168, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5684" target="_blank">More Info</a></div>`)[0];
                popup_f860e9da3866d3e1b8a9953eb1bc5b92.setContent(html_2f2239525b7684ac32ec77761cd46a62);
            
        

        marker_4bc32adb297f912932126014ecadcf72.bindPopup(popup_f860e9da3866d3e1b8a9953eb1bc5b92)
        ;

        
    
    
            var marker_6c4be3594d3ab8b47edc651b55137c21 = L.marker(
                [48.46294, -118.13894],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_32042b84208974564f160d4d0aaa00af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6c4be3594d3ab8b47edc651b55137c21.setIcon(icon_32042b84208974564f160d4d0aaa00af);
        
    
        var popup_17cefccdfaeb5813188f80dcddff3c79 = L.popup({"maxWidth": "100%"});

        
            
                var html_f87741409e22ca3b8e0c1af6ffee56a0 = $(`<div id="html_f87741409e22ca3b8e0c1af6ffee56a0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Stevens County (Goddard Road Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5662" target="_blank">More Info</a></div>`)[0];
                popup_17cefccdfaeb5813188f80dcddff3c79.setContent(html_f87741409e22ca3b8e0c1af6ffee56a0);
            
        

        marker_6c4be3594d3ab8b47edc651b55137c21.bindPopup(popup_17cefccdfaeb5813188f80dcddff3c79)
        ;

        
    
    
            var marker_8c92d33836baaa28eba53c4a3ca3fd17 = L.marker(
                [50.94242, -118.46305],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e54030a49aed6acd67406bbb5dd540b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8c92d33836baaa28eba53c4a3ca3fd17.setIcon(icon_e54030a49aed6acd67406bbb5dd540b4);
        
    
        var popup_b24751b8e01bc3b251647eaf1b3984a0 = L.popup({"maxWidth": "100%"});

        
            
                var html_6a3a300e961d65605832cc58d353cbf3 = $(`<div id="html_6a3a300e961d65605832cc58d353cbf3" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Three Valley Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5664" target="_blank">More Info</a></div>`)[0];
                popup_b24751b8e01bc3b251647eaf1b3984a0.setContent(html_6a3a300e961d65605832cc58d353cbf3);
            
        

        marker_8c92d33836baaa28eba53c4a3ca3fd17.bindPopup(popup_b24751b8e01bc3b251647eaf1b3984a0)
        ;

        
    
    
            var marker_e2e18c085ae8d2f67920df836c23dec9 = L.marker(
                [42.71299, 2.822],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_a2f4135cb0e8a4333179b62bb78bf2e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e2e18c085ae8d2f67920df836c23dec9.setIcon(icon_a2f4135cb0e8a4333179b62bb78bf2e1);
        
    
        var popup_65f3552b4994590878a975c355b00b78 = L.popup({"maxWidth": "100%"});

        
            
                var html_6863293812ab53ba4aac12454cedb983 = $(`<div id="html_6863293812ab53ba4aac12454cedb983" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Pyrenees-Orientales Department, France</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5646" target="_blank">More Info</a></div>`)[0];
                popup_65f3552b4994590878a975c355b00b78.setContent(html_6863293812ab53ba4aac12454cedb983);
            
        

        marker_e2e18c085ae8d2f67920df836c23dec9.bindPopup(popup_65f3552b4994590878a975c355b00b78)
        ;

        
    
    
            var marker_dac95dece7a89d15798405c1d37c15dc = L.marker(
                [45.03283, -109.21818],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_76b7ffad5b6970d811899d887f6cecad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_dac95dece7a89d15798405c1d37c15dc.setIcon(icon_76b7ffad5b6970d811899d887f6cecad);
        
    
        var popup_fc4c495183d34d2d87f663e601e0030f = L.popup({"maxWidth": "100%"});

        
            
                var html_4124504674c1007451a6b7c146f6e15f = $(`<div id="html_4124504674c1007451a6b7c146f6e15f" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Carbon County (Robertson Draw Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5647" target="_blank">More Info</a></div>`)[0];
                popup_fc4c495183d34d2d87f663e601e0030f.setContent(html_4124504674c1007451a6b7c146f6e15f);
            
        

        marker_dac95dece7a89d15798405c1d37c15dc.bindPopup(popup_fc4c495183d34d2d87f663e601e0030f)
        ;

        
    
    
            var marker_8e82ad0246aa4453d4dc5b5ae087eb02 = L.marker(
                [46.81666, -113.3085],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b93528368069a12fe110f97e6193b3bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8e82ad0246aa4453d4dc5b5ae087eb02.setIcon(icon_b93528368069a12fe110f97e6193b3bf);
        
    
        var popup_6a8d27f50a57d0d5b909426b783d314e = L.popup({"maxWidth": "100%"});

        
            
                var html_bfa2f5be3044f0874d5af67587bb5575 = $(`<div id="html_bfa2f5be3044f0874d5af67587bb5575" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Granite County (Anderson Hill Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5648" target="_blank">More Info</a></div>`)[0];
                popup_6a8d27f50a57d0d5b909426b783d314e.setContent(html_bfa2f5be3044f0874d5af67587bb5575);
            
        

        marker_8e82ad0246aa4453d4dc5b5ae087eb02.bindPopup(popup_6a8d27f50a57d0d5b909426b783d314e)
        ;

        
    
    
            var marker_4baeb1564daae33c46113c182acab8b0 = L.marker(
                [54.9514, -97.6342],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_60ed3ab49888ad8e62dd856bccbb5b31 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4baeb1564daae33c46113c182acab8b0.setIcon(icon_60ed3ab49888ad8e62dd856bccbb5b31);
        
    
        var popup_72bdeb2d7c603b71a09e5ddd330ef647 = L.popup({"maxWidth": "100%"});

        
            
                var html_27b5cb6c7db30961cdce102efa33af35 = $(`<div id="html_27b5cb6c7db30961cdce102efa33af35" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO086, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5740" target="_blank">More Info</a></div>`)[0];
                popup_72bdeb2d7c603b71a09e5ddd330ef647.setContent(html_27b5cb6c7db30961cdce102efa33af35);
            
        

        marker_4baeb1564daae33c46113c182acab8b0.bindPopup(popup_72bdeb2d7c603b71a09e5ddd330ef647)
        ;

        
    
    
            var marker_911631a87e017f75a6aea70ad45f4632 = L.marker(
                [54.9883, -95.5306],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2f2531df1cc3fcd116bcbe5add8c7fcc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_911631a87e017f75a6aea70ad45f4632.setIcon(icon_2f2531df1cc3fcd116bcbe5add8c7fcc);
        
    
        var popup_f8b5a6f830ebc4be8165731d3e2ed552 = L.popup({"maxWidth": "100%"});

        
            
                var html_4247fc2701a83452af46a05f5add2146 = $(`<div id="html_4247fc2701a83452af46a05f5add2146" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO088, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5789" target="_blank">More Info</a></div>`)[0];
                popup_f8b5a6f830ebc4be8165731d3e2ed552.setContent(html_4247fc2701a83452af46a05f5add2146);
            
        

        marker_911631a87e017f75a6aea70ad45f4632.bindPopup(popup_f8b5a6f830ebc4be8165731d3e2ed552)
        ;

        
    
    
            var marker_6a71edaa2b87bfd8aedae0163158e47d = L.marker(
                [47.63211, -116.02637],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_62b8b2d3dcc12d639a47d387a8caf0f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6a71edaa2b87bfd8aedae0163158e47d.setIcon(icon_62b8b2d3dcc12d639a47d387a8caf0f1);
        
    
        var popup_7005956329dd6688eed277d60aea9580 = L.popup({"maxWidth": "100%"});

        
            
                var html_e79377f3bfb2501082e95ca2c6f00afe = $(`<div id="html_e79377f3bfb2501082e95ca2c6f00afe" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Shoshone County (Character Complex), Idaho, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5632" target="_blank">More Info</a></div>`)[0];
                popup_7005956329dd6688eed277d60aea9580.setContent(html_e79377f3bfb2501082e95ca2c6f00afe);
            
        

        marker_6a71edaa2b87bfd8aedae0163158e47d.bindPopup(popup_7005956329dd6688eed277d60aea9580)
        ;

        
    
    
            var marker_037b41978d89f0dec0df9da5b3532be8 = L.marker(
                [45.1798, -113.45966],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ecd12d14848657d39e0f397292480014 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_037b41978d89f0dec0df9da5b3532be8.setIcon(icon_ecd12d14848657d39e0f397292480014);
        
    
        var popup_94e4268c2b865a562f72be9ec73fd3a6 = L.popup({"maxWidth": "100%"});

        
            
                var html_af1e6105bee3e6aa15fa7adecc7465c7 = $(`<div id="html_af1e6105bee3e6aa15fa7adecc7465c7" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Beaver County (Black Mountain Fire), Montana, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5631" target="_blank">More Info</a></div>`)[0];
                popup_94e4268c2b865a562f72be9ec73fd3a6.setContent(html_af1e6105bee3e6aa15fa7adecc7465c7);
            
        

        marker_037b41978d89f0dec0df9da5b3532be8.bindPopup(popup_94e4268c2b865a562f72be9ec73fd3a6)
        ;

        
    
    
            var marker_d3b8aeabbe339e174ca514403c2996e6 = L.marker(
                [51.71611, -96.30854],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ba46e9a5ec98345106ecabc376d1453a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_d3b8aeabbe339e174ca514403c2996e6.setIcon(icon_ba46e9a5ec98345106ecabc376d1453a);
        
    
        var popup_98e9b87186a5877dbd5f767f4890ea0f = L.popup({"maxWidth": "100%"});

        
            
                var html_0e6f227367251c6cc86a190c7b82887e = $(`<div id="html_0e6f227367251c6cc86a190c7b82887e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - SE of Berens River, Manitoba - Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5663" target="_blank">More Info</a></div>`)[0];
                popup_98e9b87186a5877dbd5f767f4890ea0f.setContent(html_0e6f227367251c6cc86a190c7b82887e);
            
        

        marker_d3b8aeabbe339e174ca514403c2996e6.bindPopup(popup_98e9b87186a5877dbd5f767f4890ea0f)
        ;

        
    
    
            var marker_2031173b5421fcede5fb538eee9bb421 = L.marker(
                [51.6619, -96.635],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_59e6d5caf7a280ba7d9afd0eb84fdacc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2031173b5421fcede5fb538eee9bb421.setIcon(icon_59e6d5caf7a280ba7d9afd0eb84fdacc);
        
    
        var popup_007dc169e660beaa861824fa152bd301 = L.popup({"maxWidth": "100%"});

        
            
                var html_6c923d87cb0fea4547765a1093892c67 = $(`<div id="html_6c923d87cb0fea4547765a1093892c67" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA158, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5675" target="_blank">More Info</a></div>`)[0];
                popup_007dc169e660beaa861824fa152bd301.setContent(html_6c923d87cb0fea4547765a1093892c67);
            
        

        marker_2031173b5421fcede5fb538eee9bb421.bindPopup(popup_007dc169e660beaa861824fa152bd301)
        ;

        
    
    
            var marker_1491207ea9d3d036eef4f623f2343072 = L.marker(
                [57.2164, -101.6169],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0f86aa1798e4db188b135ea094448eca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1491207ea9d3d036eef4f623f2343072.setIcon(icon_0f86aa1798e4db188b135ea094448eca);
        
    
        var popup_c44ef8ef14009c7dd981e053fbf48e1f = L.popup({"maxWidth": "100%"});

        
            
                var html_82c5b362e1811830d5d909de1279a851 = $(`<div id="html_82c5b362e1811830d5d909de1279a851" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO084, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5836" target="_blank">More Info</a></div>`)[0];
                popup_c44ef8ef14009c7dd981e053fbf48e1f.setContent(html_82c5b362e1811830d5d909de1279a851);
            
        

        marker_1491207ea9d3d036eef4f623f2343072.bindPopup(popup_c44ef8ef14009c7dd981e053fbf48e1f)
        ;

        
    
    
            var marker_31a92fd873e50f6eb0e45bd29ebba6be = L.marker(
                [45.17826, -114.37901],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_74a381086cbd7d1791f30bf7899dbde3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_31a92fd873e50f6eb0e45bd29ebba6be.setIcon(icon_74a381086cbd7d1791f30bf7899dbde3);
        
    
        var popup_61137d858c1bf2de9ebe4ea4102179d1 = L.popup({"maxWidth": "100%"});

        
            
                var html_74d64e911e3020462e98a9c26cee5493 = $(`<div id="html_74d64e911e3020462e98a9c26cee5493" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Lemhi County (Mud Lick Fire), Idaho, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5645" target="_blank">More Info</a></div>`)[0];
                popup_61137d858c1bf2de9ebe4ea4102179d1.setContent(html_74d64e911e3020462e98a9c26cee5493);
            
        

        marker_31a92fd873e50f6eb0e45bd29ebba6be.bindPopup(popup_61137d858c1bf2de9ebe4ea4102179d1)
        ;

        
    
    
            var marker_1c696d69b54a7e9f3479759ecc63ff09 = L.marker(
                [51.9061, -95.5411],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e6eefa4ba3f354ecdbcf60dc9539033e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1c696d69b54a7e9f3479759ecc63ff09.setIcon(icon_e6eefa4ba3f354ecdbcf60dc9539033e);
        
    
        var popup_796ea0a2454b615c5f8db6e2e3e4133c = L.popup({"maxWidth": "100%"});

        
            
                var html_b2c504554bcdb5c53b33a29ccbb2156a = $(`<div id="html_b2c504554bcdb5c53b33a29ccbb2156a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA151, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5728" target="_blank">More Info</a></div>`)[0];
                popup_796ea0a2454b615c5f8db6e2e3e4133c.setContent(html_b2c504554bcdb5c53b33a29ccbb2156a);
            
        

        marker_1c696d69b54a7e9f3479759ecc63ff09.bindPopup(popup_796ea0a2454b615c5f8db6e2e3e4133c)
        ;

        
    
    
            var marker_ebe71d84310282028d4637a6de45422c = L.marker(
                [50.0664, -95.2328],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9a8047bee790ceecc7f1d4c7198f3f82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ebe71d84310282028d4637a6de45422c.setIcon(icon_9a8047bee790ceecc7f1d4c7198f3f82);
        
    
        var popup_6d0289e358cdec31089897fde8d6a2b5 = L.popup({"maxWidth": "100%"});

        
            
                var html_a72565f83a58ad882600142d4dfeae77 = $(`<div id="html_a72565f83a58ad882600142d4dfeae77" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA153, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5739" target="_blank">More Info</a></div>`)[0];
                popup_6d0289e358cdec31089897fde8d6a2b5.setContent(html_a72565f83a58ad882600142d4dfeae77);
            
        

        marker_ebe71d84310282028d4637a6de45422c.bindPopup(popup_6d0289e358cdec31089897fde8d6a2b5)
        ;

        
    
    
            var marker_f86cbc28110497ae131aa404664164b5 = L.marker(
                [38.670339768, -119.830586901],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4ca2beb45ba7a967c1af264ed00afbcb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_f86cbc28110497ae131aa404664164b5.setIcon(icon_4ca2beb45ba7a967c1af264ed00afbcb);
        
    
        var popup_3f039740cddfb19981fec4e1f47269bf = L.popup({"maxWidth": "100%"});

        
            
                var html_017b3e835c54878627172095087ab01d = $(`<div id="html_017b3e835c54878627172095087ab01d" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - S of Carson City, Nevada - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5600" target="_blank">More Info</a></div>`)[0];
                popup_3f039740cddfb19981fec4e1f47269bf.setContent(html_017b3e835c54878627172095087ab01d);
            
        

        marker_f86cbc28110497ae131aa404664164b5.bindPopup(popup_3f039740cddfb19981fec4e1f47269bf)
        ;

        
    
    
            var marker_8a811bc9186be0bf526de92a2dd04528 = L.marker(
                [57.7175, -94.5611],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5137a11f2d70f95a8e56cd36f70b4a2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8a811bc9186be0bf526de92a2dd04528.setIcon(icon_5137a11f2d70f95a8e56cd36f70b4a2c);
        
    
        var popup_dcf7d3b4884d7e5e208ae4d1cca6c1f2 = L.popup({"maxWidth": "100%"});

        
            
                var html_18b32d93f3d18fb1b52aec1e9d3f0140 = $(`<div id="html_18b32d93f3d18fb1b52aec1e9d3f0140" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO083, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5625" target="_blank">More Info</a></div>`)[0];
                popup_dcf7d3b4884d7e5e208ae4d1cca6c1f2.setContent(html_18b32d93f3d18fb1b52aec1e9d3f0140);
            
        

        marker_8a811bc9186be0bf526de92a2dd04528.bindPopup(popup_dcf7d3b4884d7e5e208ae4d1cca6c1f2)
        ;

        
    
    
            var marker_7fe3c9f879aa7344194c495bd6c7baa2 = L.marker(
                [56.9311, -101.6903],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_82def48d6309da87078c183816c371e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7fe3c9f879aa7344194c495bd6c7baa2.setIcon(icon_82def48d6309da87078c183816c371e2);
        
    
        var popup_038c2b5180498df2e2fbb0b7de8a2546 = L.popup({"maxWidth": "100%"});

        
            
                var html_c629a0e1ce513a93f1097b299ee049f3 = $(`<div id="html_c629a0e1ce513a93f1097b299ee049f3" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO077, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5834" target="_blank">More Info</a></div>`)[0];
                popup_038c2b5180498df2e2fbb0b7de8a2546.setContent(html_c629a0e1ce513a93f1097b299ee049f3);
            
        

        marker_7fe3c9f879aa7344194c495bd6c7baa2.bindPopup(popup_038c2b5180498df2e2fbb0b7de8a2546)
        ;

        
    
    
            var marker_51e0bdd8e3163eb8741922d1717ed4e8 = L.marker(
                [56.4281, -98.0678],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_be8118f4a72c41cd8937312b5c1a94c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_51e0bdd8e3163eb8741922d1717ed4e8.setIcon(icon_be8118f4a72c41cd8937312b5c1a94c9);
        
    
        var popup_8ff4a39cd77a2ec983b4920294a091fd = L.popup({"maxWidth": "100%"});

        
            
                var html_c0b7ef2ffa54ed1e633ab34d3baa780a = $(`<div id="html_c0b7ef2ffa54ed1e633ab34d3baa780a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO079, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5835" target="_blank">More Info</a></div>`)[0];
                popup_8ff4a39cd77a2ec983b4920294a091fd.setContent(html_c0b7ef2ffa54ed1e633ab34d3baa780a);
            
        

        marker_51e0bdd8e3163eb8741922d1717ed4e8.bindPopup(popup_8ff4a39cd77a2ec983b4920294a091fd)
        ;

        
    
    
            var marker_207aada49e9f61a8abb3ea87394b94fd = L.marker(
                [56.0403, -101.5875],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_09a8ed373c6cc3ea522d79096edd3173 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_207aada49e9f61a8abb3ea87394b94fd.setIcon(icon_09a8ed373c6cc3ea522d79096edd3173);
        
    
        var popup_c29f2356bbef9264b4e1c3ffe64e8792 = L.popup({"maxWidth": "100%"});

        
            
                var html_2743c9e3068d04aab1e543e64ee17a43 = $(`<div id="html_2743c9e3068d04aab1e543e64ee17a43" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO073, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5613" target="_blank">More Info</a></div>`)[0];
                popup_c29f2356bbef9264b4e1c3ffe64e8792.setContent(html_2743c9e3068d04aab1e543e64ee17a43);
            
        

        marker_207aada49e9f61a8abb3ea87394b94fd.bindPopup(popup_c29f2356bbef9264b4e1c3ffe64e8792)
        ;

        
    
    
            var marker_32872430a0a721d107fb0bd4a597c5f2 = L.marker(
                [55.6261, -100.9611],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bac58ce8a6280167a871997b6d562c29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_32872430a0a721d107fb0bd4a597c5f2.setIcon(icon_bac58ce8a6280167a871997b6d562c29);
        
    
        var popup_94d33d8f963ee04502c87dcdc797909e = L.popup({"maxWidth": "100%"});

        
            
                var html_b70133a61a4f9af835b3d1250bd85022 = $(`<div id="html_b70133a61a4f9af835b3d1250bd85022" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE064, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5614" target="_blank">More Info</a></div>`)[0];
                popup_94d33d8f963ee04502c87dcdc797909e.setContent(html_b70133a61a4f9af835b3d1250bd85022);
            
        

        marker_32872430a0a721d107fb0bd4a597c5f2.bindPopup(popup_94d33d8f963ee04502c87dcdc797909e)
        ;

        
    
    
            var marker_067502821d06dbb4e5a96b97a9cef2ec = L.marker(
                [51.6989, -96.5444],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7f15fb93c33325f5dd56739a39d797a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_067502821d06dbb4e5a96b97a9cef2ec.setIcon(icon_7f15fb93c33325f5dd56739a39d797a3);
        
    
        var popup_9a64ca078414b06c660b49b9ffa40a12 = L.popup({"maxWidth": "100%"});

        
            
                var html_2d50f7ecf97f192c4c9e9e53bdc20026 = $(`<div id="html_2d50f7ecf97f192c4c9e9e53bdc20026" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA145, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5618" target="_blank">More Info</a></div>`)[0];
                popup_9a64ca078414b06c660b49b9ffa40a12.setContent(html_2d50f7ecf97f192c4c9e9e53bdc20026);
            
        

        marker_067502821d06dbb4e5a96b97a9cef2ec.bindPopup(popup_9a64ca078414b06c660b49b9ffa40a12)
        ;

        
    
    
            var marker_c60c30203465c1c54661708c1e61adf6 = L.marker(
                [55.0983, -101.1478],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_64f86834b119541e9cc7f5878fed79b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c60c30203465c1c54661708c1e61adf6.setIcon(icon_64f86834b119541e9cc7f5878fed79b9);
        
    
        var popup_5b34d3efba42cb24e842f5cf468839da = L.popup({"maxWidth": "100%"});

        
            
                var html_a47926ed85bf92341187f0c4fe06b94c = $(`<div id="html_a47926ed85bf92341187f0c4fe06b94c" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE062, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5619" target="_blank">More Info</a></div>`)[0];
                popup_5b34d3efba42cb24e842f5cf468839da.setContent(html_a47926ed85bf92341187f0c4fe06b94c);
            
        

        marker_c60c30203465c1c54661708c1e61adf6.bindPopup(popup_5b34d3efba42cb24e842f5cf468839da)
        ;

        
    
    
            var marker_6a624889c6c3492e0d3929471672187d = L.marker(
                [51.8814, -96.5489],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_7d5fdd34f842abc2c3ebe83a2744a1cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6a624889c6c3492e0d3929471672187d.setIcon(icon_7d5fdd34f842abc2c3ebe83a2744a1cf);
        
    
        var popup_b76fa081ab523159a1e878e99b8a1752 = L.popup({"maxWidth": "100%"});

        
            
                var html_f5788b5e514de86eac891cb1fb9e7ef2 = $(`<div id="html_f5788b5e514de86eac891cb1fb9e7ef2" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA150, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5715" target="_blank">More Info</a></div>`)[0];
                popup_b76fa081ab523159a1e878e99b8a1752.setContent(html_f5788b5e514de86eac891cb1fb9e7ef2);
            
        

        marker_6a624889c6c3492e0d3929471672187d.bindPopup(popup_b76fa081ab523159a1e878e99b8a1752)
        ;

        
    
    
            var marker_04b42dda313102633dd6ab38367a3ec6 = L.marker(
                [54.0622, -98.3178],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1be0f1de7fb8221ea8d6a1bc9a2166d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_04b42dda313102633dd6ab38367a3ec6.setIcon(icon_1be0f1de7fb8221ea8d6a1bc9a2166d1);
        
    
        var popup_63fda16566cb1706f2a9e18246dc1781 = L.popup({"maxWidth": "100%"});

        
            
                var html_ba5a4535af376e829d8950373bf92df5 = $(`<div id="html_ba5a4535af376e829d8950373bf92df5" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO074, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5806" target="_blank">More Info</a></div>`)[0];
                popup_63fda16566cb1706f2a9e18246dc1781.setContent(html_ba5a4535af376e829d8950373bf92df5);
            
        

        marker_04b42dda313102633dd6ab38367a3ec6.bindPopup(popup_63fda16566cb1706f2a9e18246dc1781)
        ;

        
    
    
            var marker_5d597b830abd05769d6e02b03f2e9a68 = L.marker(
                [43.62011, -121.46825],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5ebc39699070a72fcc2d6f4a7c3dcd8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5d597b830abd05769d6e02b03f2e9a68.setIcon(icon_5ebc39699070a72fcc2d6f4a7c3dcd8e);
        
    
        var popup_69d3e480cc956832f2284c996e39be1b = L.popup({"maxWidth": "100%"});

        
            
                var html_28308aa115f0b0f9a6937e5336664581 = $(`<div id="html_28308aa115f0b0f9a6937e5336664581" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Deschutes County (Darlene Fire), Oregon, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5595" target="_blank">More Info</a></div>`)[0];
                popup_69d3e480cc956832f2284c996e39be1b.setContent(html_28308aa115f0b0f9a6937e5336664581);
            
        

        marker_5d597b830abd05769d6e02b03f2e9a68.bindPopup(popup_69d3e480cc956832f2284c996e39be1b)
        ;

        
    
    
            var marker_6e23f54e73dfda365a9ab4d37a2b800c = L.marker(
                [45.69798, -121.27131],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f2bb1fdc7447e0fe7f45cb618bd385b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6e23f54e73dfda365a9ab4d37a2b800c.setIcon(icon_f2bb1fdc7447e0fe7f45cb618bd385b2);
        
    
        var popup_8f7f4b424defedd3006262d754d44e70 = L.popup({"maxWidth": "100%"});

        
            
                var html_adc097a44981c7f1d4b7dcb5d80bd72f = $(`<div id="html_adc097a44981c7f1d4b7dcb5d80bd72f" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Klickitat County (Lyle Hill Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5596" target="_blank">More Info</a></div>`)[0];
                popup_8f7f4b424defedd3006262d754d44e70.setContent(html_adc097a44981c7f1d4b7dcb5d80bd72f);
            
        

        marker_6e23f54e73dfda365a9ab4d37a2b800c.bindPopup(popup_8f7f4b424defedd3006262d754d44e70)
        ;

        
    
    
            var marker_fcb6379b63aadbb5b9e81f2b131b6c05 = L.marker(
                [53.04, -99.8561],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_99e284ce286d1141548ed3d688e1f132 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_fcb6379b63aadbb5b9e81f2b131b6c05.setIcon(icon_99e284ce286d1141548ed3d688e1f132);
        
    
        var popup_391cba97ca5bb70f5705556686a3095c = L.popup({"maxWidth": "100%"});

        
            
                var html_5e485feb3f2b0eb0dea479ea6cd84104 = $(`<div id="html_5e485feb3f2b0eb0dea479ea6cd84104" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE058, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5676" target="_blank">More Info</a></div>`)[0];
                popup_391cba97ca5bb70f5705556686a3095c.setContent(html_5e485feb3f2b0eb0dea479ea6cd84104);
            
        

        marker_fcb6379b63aadbb5b9e81f2b131b6c05.bindPopup(popup_391cba97ca5bb70f5705556686a3095c)
        ;

        
    
    
            var marker_35705ebfa64b6cdb45502536ce2635e4 = L.marker(
                [54.49261, -124.99338],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_afc40ea834a8ee1d3a30cb2e84da500c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_35705ebfa64b6cdb45502536ce2635e4.setIcon(icon_afc40ea834a8ee1d3a30cb2e84da500c);
        
    
        var popup_0310058ac917d20d9b01f2accb8d35c9 = L.popup({"maxWidth": "100%"});

        
            
                var html_77901e8f89d4772504d2682150cbc066 = $(`<div id="html_77901e8f89d4772504d2682150cbc066" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Camsell Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5577" target="_blank">More Info</a></div>`)[0];
                popup_0310058ac917d20d9b01f2accb8d35c9.setContent(html_77901e8f89d4772504d2682150cbc066);
            
        

        marker_35705ebfa64b6cdb45502536ce2635e4.bindPopup(popup_0310058ac917d20d9b01f2accb8d35c9)
        ;

        
    
    
            var marker_660f59a19803175d3c27235a3499d927 = L.marker(
                [48.57827, -120.522],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2017c2d0263866ff167237ca050eb3b0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_660f59a19803175d3c27235a3499d927.setIcon(icon_2017c2d0263866ff167237ca050eb3b0);
        
    
        var popup_6081536193963dfbd0dcc133e0f1e00e = L.popup({"maxWidth": "100%"});

        
            
                var html_ece6b5294d432bbfe6c22bd1f91aac0d = $(`<div id="html_ece6b5294d432bbfe6c22bd1f91aac0d" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Okanogan County (Cedar Creek/Varden/Delancy Fires), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5579" target="_blank">More Info</a></div>`)[0];
                popup_6081536193963dfbd0dcc133e0f1e00e.setContent(html_ece6b5294d432bbfe6c22bd1f91aac0d);
            
        

        marker_660f59a19803175d3c27235a3499d927.bindPopup(popup_6081536193963dfbd0dcc133e0f1e00e)
        ;

        
    
    
            var marker_c2e3f121cd41d686119c74bca1f27f02 = L.marker(
                [51.5628, -96.4683],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5243f64c5ea86a77563a2d9ab55f0377 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c2e3f121cd41d686119c74bca1f27f02.setIcon(icon_5243f64c5ea86a77563a2d9ab55f0377);
        
    
        var popup_f6063e19cdcb80331cbc54b670e6edfc = L.popup({"maxWidth": "100%"});

        
            
                var html_a2b6d7df7f48e247a203adac589af562 = $(`<div id="html_a2b6d7df7f48e247a203adac589af562" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA137, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5617" target="_blank">More Info</a></div>`)[0];
                popup_f6063e19cdcb80331cbc54b670e6edfc.setContent(html_a2b6d7df7f48e247a203adac589af562);
            
        

        marker_c2e3f121cd41d686119c74bca1f27f02.bindPopup(popup_f6063e19cdcb80331cbc54b670e6edfc)
        ;

        
    
    
            var marker_7e19fbf69f9d4201ae31b27bca70e9ad = L.marker(
                [51.5967, -96.1503],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1f496ff77043419970b656127421689b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_7e19fbf69f9d4201ae31b27bca70e9ad.setIcon(icon_1f496ff77043419970b656127421689b);
        
    
        var popup_272a9bcb5497d6fdaeded5f688e4def3 = L.popup({"maxWidth": "100%"});

        
            
                var html_87680bcd53de28b9b892efe60e700ab0 = $(`<div id="html_87680bcd53de28b9b892efe60e700ab0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA134, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5635" target="_blank">More Info</a></div>`)[0];
                popup_272a9bcb5497d6fdaeded5f688e4def3.setContent(html_87680bcd53de28b9b892efe60e700ab0);
            
        

        marker_7e19fbf69f9d4201ae31b27bca70e9ad.bindPopup(popup_272a9bcb5497d6fdaeded5f688e4def3)
        ;

        
    
    
            var marker_818ef80493e527c6603fa09c157409ca = L.marker(
                [51.5567, -96.3456],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_04be454852fc3fd053e2f0cff1585514 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_818ef80493e527c6603fa09c157409ca.setIcon(icon_04be454852fc3fd053e2f0cff1585514);
        
    
        var popup_e22f128bfc4c4facea056c91fbdba0d6 = L.popup({"maxWidth": "100%"});

        
            
                var html_08803a71f2a4be48fbe7478dfebabd24 = $(`<div id="html_08803a71f2a4be48fbe7478dfebabd24" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA136, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5636" target="_blank">More Info</a></div>`)[0];
                popup_e22f128bfc4c4facea056c91fbdba0d6.setContent(html_08803a71f2a4be48fbe7478dfebabd24);
            
        

        marker_818ef80493e527c6603fa09c157409ca.bindPopup(popup_e22f128bfc4c4facea056c91fbdba0d6)
        ;

        
    
    
            var marker_1a2f62ccc9de5ae2c36503d35c7498c7 = L.marker(
                [52.0486, -96.0306],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_db1e5566cc60de6ab1b52256a1943982 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1a2f62ccc9de5ae2c36503d35c7498c7.setIcon(icon_db1e5566cc60de6ab1b52256a1943982);
        
    
        var popup_d1f31142ec22c7f3e93418222674dfde = L.popup({"maxWidth": "100%"});

        
            
                var html_093726278efd144a32ec559a0d6c9e64 = $(`<div id="html_093726278efd144a32ec559a0d6c9e64" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA140, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5637" target="_blank">More Info</a></div>`)[0];
                popup_d1f31142ec22c7f3e93418222674dfde.setContent(html_093726278efd144a32ec559a0d6c9e64);
            
        

        marker_1a2f62ccc9de5ae2c36503d35c7498c7.bindPopup(popup_d1f31142ec22c7f3e93418222674dfde)
        ;

        
    
    
            var marker_c6d1d5db745d4cf5028e9b1d556e0b69 = L.marker(
                [55.4947, -99.9256],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ca82a2386e4df189e0c662e227ab0d1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c6d1d5db745d4cf5028e9b1d556e0b69.setIcon(icon_ca82a2386e4df189e0c662e227ab0d1f);
        
    
        var popup_3ccd5e4d8a2d3c0a033d7476ece907fa = L.popup({"maxWidth": "100%"});

        
            
                var html_33bf7d6d92ed6796b49b95b03165c66a = $(`<div id="html_33bf7d6d92ed6796b49b95b03165c66a" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE056, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5692" target="_blank">More Info</a></div>`)[0];
                popup_3ccd5e4d8a2d3c0a033d7476ece907fa.setContent(html_33bf7d6d92ed6796b49b95b03165c66a);
            
        

        marker_c6d1d5db745d4cf5028e9b1d556e0b69.bindPopup(popup_3ccd5e4d8a2d3c0a033d7476ece907fa)
        ;

        
    
    
            var marker_3700e53d7fad164976e69386d5cc0306 = L.marker(
                [51.4697, -95.9489],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ba4f89651232d94bf41841c5285ed425 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3700e53d7fad164976e69386d5cc0306.setIcon(icon_ba4f89651232d94bf41841c5285ed425);
        
    
        var popup_51164ed2eb79e93cc6245daa31fa5a27 = L.popup({"maxWidth": "100%"});

        
            
                var html_057b4a00a30cd6d254685ecf31a85f9e = $(`<div id="html_057b4a00a30cd6d254685ecf31a85f9e" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA133, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5714" target="_blank">More Info</a></div>`)[0];
                popup_51164ed2eb79e93cc6245daa31fa5a27.setContent(html_057b4a00a30cd6d254685ecf31a85f9e);
            
        

        marker_3700e53d7fad164976e69386d5cc0306.bindPopup(popup_51164ed2eb79e93cc6245daa31fa5a27)
        ;

        
    
    
            var marker_a8eaeab48bc783cfd3630e74cc1a2d46 = L.marker(
                [56.3928, -96.7706],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_59f2f48524f6cde38af0225831de4043 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a8eaeab48bc783cfd3630e74cc1a2d46.setIcon(icon_59f2f48524f6cde38af0225831de4043);
        
    
        var popup_562559d8bf41ff48f58837a1ee2c774f = L.popup({"maxWidth": "100%"});

        
            
                var html_134d6fd346ddde21c88fe732aff94215 = $(`<div id="html_134d6fd346ddde21c88fe732aff94215" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO063, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5833" target="_blank">More Info</a></div>`)[0];
                popup_562559d8bf41ff48f58837a1ee2c774f.setContent(html_134d6fd346ddde21c88fe732aff94215);
            
        

        marker_a8eaeab48bc783cfd3630e74cc1a2d46.bindPopup(popup_562559d8bf41ff48f58837a1ee2c774f)
        ;

        
    
    
            var marker_def6dc5e0269641852d3e5716b3b3d67 = L.marker(
                [48.139651026, -118.910256697],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b03d9a1856b6eef5b12021b14e04024d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_def6dc5e0269641852d3e5716b3b3d67.setIcon(icon_b03d9a1856b6eef5b12021b14e04024d);
        
    
        var popup_98b4a5f0ccffe729d0e20d7316a78e9d = L.popup({"maxWidth": "100%"});

        
            
                var html_07431f244019116ba924e60de8e2a67f = $(`<div id="html_07431f244019116ba924e60de8e2a67f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - NW of Spokane, Washington - United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5540" target="_blank">More Info</a></div>`)[0];
                popup_98b4a5f0ccffe729d0e20d7316a78e9d.setContent(html_07431f244019116ba924e60de8e2a67f);
            
        

        marker_def6dc5e0269641852d3e5716b3b3d67.bindPopup(popup_98b4a5f0ccffe729d0e20d7316a78e9d)
        ;

        
    
    
            var marker_64fd3f86010bab23f5b6909301ee84ab = L.marker(
                [55.7997, -100.2364],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_63fbb5d92e6a95eccfe325df87b6c964 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_64fd3f86010bab23f5b6909301ee84ab.setIcon(icon_63fbb5d92e6a95eccfe325df87b6c964);
        
    
        var popup_c4f81062ce9b4732eb7cc936203c2dee = L.popup({"maxWidth": "100%"});

        
            
                var html_bad63cafd2541bf645710d6ff2a25580 = $(`<div id="html_bad63cafd2541bf645710d6ff2a25580" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE049, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5567" target="_blank">More Info</a></div>`)[0];
                popup_c4f81062ce9b4732eb7cc936203c2dee.setContent(html_bad63cafd2541bf645710d6ff2a25580);
            
        

        marker_64fd3f86010bab23f5b6909301ee84ab.bindPopup(popup_c4f81062ce9b4732eb7cc936203c2dee)
        ;

        
    
    
            var marker_b37ce3dc8764ef0ea689eab8a1e688ec = L.marker(
                [55.3128, -100.1764],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9c09123b75b864bd4269bb983479b5b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_b37ce3dc8764ef0ea689eab8a1e688ec.setIcon(icon_9c09123b75b864bd4269bb983479b5b9);
        
    
        var popup_945c991d256745475a0e65b5d5028b4a = L.popup({"maxWidth": "100%"});

        
            
                var html_93706ec2661ffd011a5b6fb2e3c0079b = $(`<div id="html_93706ec2661ffd011a5b6fb2e3c0079b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE055, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5573" target="_blank">More Info</a></div>`)[0];
                popup_945c991d256745475a0e65b5d5028b4a.setContent(html_93706ec2661ffd011a5b6fb2e3c0079b);
            
        

        marker_b37ce3dc8764ef0ea689eab8a1e688ec.bindPopup(popup_945c991d256745475a0e65b5d5028b4a)
        ;

        
    
    
            var marker_98420a89b1cafdd0307e8d1e16092cfd = L.marker(
                [55.5531, -101.9572],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ce9a930d595481cdb8fe3741ef323e26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_98420a89b1cafdd0307e8d1e16092cfd.setIcon(icon_ce9a930d595481cdb8fe3741ef323e26);
        
    
        var popup_72409bbce1815f13a7652d28b658da30 = L.popup({"maxWidth": "100%"});

        
            
                var html_8879093941f8c5fd8ed016ada804cd8f = $(`<div id="html_8879093941f8c5fd8ed016ada804cd8f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE053, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5642" target="_blank">More Info</a></div>`)[0];
                popup_72409bbce1815f13a7652d28b658da30.setContent(html_8879093941f8c5fd8ed016ada804cd8f);
            
        

        marker_98420a89b1cafdd0307e8d1e16092cfd.bindPopup(popup_72409bbce1815f13a7652d28b658da30)
        ;

        
    
    
            var marker_0b408c3107161412c803ddf9865394e8 = L.marker(
                [55.3128, -100.1756],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_af85fb78d607708bc45c2eb4e9fae71f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_0b408c3107161412c803ddf9865394e8.setIcon(icon_af85fb78d607708bc45c2eb4e9fae71f);
        
    
        var popup_54ceadeaa752d7c149347455e5a6d22c = L.popup({"maxWidth": "100%"});

        
            
                var html_431832e318e705bf322d7951d464f7d6 = $(`<div id="html_431832e318e705bf322d7951d464f7d6" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE054, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5643" target="_blank">More Info</a></div>`)[0];
                popup_54ceadeaa752d7c149347455e5a6d22c.setContent(html_431832e318e705bf322d7951d464f7d6);
            
        

        marker_0b408c3107161412c803ddf9865394e8.bindPopup(popup_54ceadeaa752d7c149347455e5a6d22c)
        ;

        
    
    
            var marker_98cb324dce10ebc934688aca7e15104f = L.marker(
                [55.5333, -99.1333],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_326d10e49f1e818451edb8718fd59526 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_98cb324dce10ebc934688aca7e15104f.setIcon(icon_326d10e49f1e818451edb8718fd59526);
        
    
        var popup_9924e644e058d35ea158935e8b6a3515 = L.popup({"maxWidth": "100%"});

        
            
                var html_dd02b1eafa883e693629f6494e79d574 = $(`<div id="html_dd02b1eafa883e693629f6494e79d574" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO054, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5690" target="_blank">More Info</a></div>`)[0];
                popup_9924e644e058d35ea158935e8b6a3515.setContent(html_dd02b1eafa883e693629f6494e79d574);
            
        

        marker_98cb324dce10ebc934688aca7e15104f.bindPopup(popup_9924e644e058d35ea158935e8b6a3515)
        ;

        
    
    
            var marker_4bef29fca4bd939b107962e4a3763886 = L.marker(
                [-46.54211, -71.72344],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c1caecdc0594beaa7d977e5aeedbea44 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4bef29fca4bd939b107962e4a3763886.setIcon(icon_c1caecdc0594beaa7d977e5aeedbea44);
        
    
        var popup_b18744d1ca55190d8c000569e3363767 = L.popup({"maxWidth": "100%"});

        
            
                var html_7ee304626a64d0bdc7caa664e46fea3f = $(`<div id="html_7ee304626a64d0bdc7caa664e46fea3f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Chile Chico Commune (Cypress Fire), Chile</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5541" target="_blank">More Info</a></div>`)[0];
                popup_b18744d1ca55190d8c000569e3363767.setContent(html_7ee304626a64d0bdc7caa664e46fea3f);
            
        

        marker_4bef29fca4bd939b107962e4a3763886.bindPopup(popup_b18744d1ca55190d8c000569e3363767)
        ;

        
    
    
            var marker_8de9bbc733766ba3e7b33df5aa7021e5 = L.marker(
                [50.26015, -119.20598],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c881de003da409d31aa0e0cfa1970a6e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8de9bbc733766ba3e7b33df5aa7021e5.setIcon(icon_c881de003da409d31aa0e0cfa1970a6e);
        
    
        var popup_7f43f98031415675143a2c58dd2f1417 = L.popup({"maxWidth": "100%"});

        
            
                var html_a69311a3c55b0cb2734f1b7eae78d993 = $(`<div id="html_a69311a3c55b0cb2734f1b7eae78d993" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Becker Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5544" target="_blank">More Info</a></div>`)[0];
                popup_7f43f98031415675143a2c58dd2f1417.setContent(html_a69311a3c55b0cb2734f1b7eae78d993);
            
        

        marker_8de9bbc733766ba3e7b33df5aa7021e5.bindPopup(popup_7f43f98031415675143a2c58dd2f1417)
        ;

        
    
    
            var marker_93ea28707dae64cb062be34bcade971c = L.marker(
                [35.43096, -114.08793],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0cb2633aed579f4aa4969d8b0c206b39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_93ea28707dae64cb062be34bcade971c.setIcon(icon_0cb2633aed579f4aa4969d8b0c206b39);
        
    
        var popup_d4d807222266f6e2996a070e800d4142 = L.popup({"maxWidth": "100%"});

        
            
                var html_3659ef912f208c38d6a09d370849ce46 = $(`<div id="html_3659ef912f208c38d6a09d370849ce46" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Mohave County (Elements Fire), Arizona, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5549" target="_blank">More Info</a></div>`)[0];
                popup_d4d807222266f6e2996a070e800d4142.setContent(html_3659ef912f208c38d6a09d370849ce46);
            
        

        marker_93ea28707dae64cb062be34bcade971c.bindPopup(popup_d4d807222266f6e2996a070e800d4142)
        ;

        
    
    
            var marker_71578dee56445898787f910b9cfa2d14 = L.marker(
                [37.33621, -119.84447],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1344252881270b5ac5ad9689db506106 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_71578dee56445898787f910b9cfa2d14.setIcon(icon_1344252881270b5ac5ad9689db506106);
        
    
        var popup_6dc3030b646a7f970b39bb95039e74fb = L.popup({"maxWidth": "100%"});

        
            
                var html_7327f02423d3972b55d661e50c5a500b = $(`<div id="html_7327f02423d3972b55d661e50c5a500b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Mariposa County (River Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5539" target="_blank">More Info</a></div>`)[0];
                popup_6dc3030b646a7f970b39bb95039e74fb.setContent(html_7327f02423d3972b55d661e50c5a500b);
            
        

        marker_71578dee56445898787f910b9cfa2d14.bindPopup(popup_6dc3030b646a7f970b39bb95039e74fb)
        ;

        
    
    
            var marker_1483560fec5a3468d8fc9ddd24e17064 = L.marker(
                [54.045, -94.4486],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_61a8d91c68bcc078df41ab445bb60ace = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1483560fec5a3468d8fc9ddd24e17064.setIcon(icon_61a8d91c68bcc078df41ab445bb60ace);
        
    
        var popup_d01a96a6a586c64ae092d7f6868ceb58 = L.popup({"maxWidth": "100%"});

        
            
                var html_795092ab313d030f02017e43c17ba007 = $(`<div id="html_795092ab313d030f02017e43c17ba007" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO033, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5563" target="_blank">More Info</a></div>`)[0];
                popup_d01a96a6a586c64ae092d7f6868ceb58.setContent(html_795092ab313d030f02017e43c17ba007);
            
        

        marker_1483560fec5a3468d8fc9ddd24e17064.bindPopup(popup_d01a96a6a586c64ae092d7f6868ceb58)
        ;

        
    
    
            var marker_9d5e4f1831fff039e83fc7b3abe0c696 = L.marker(
                [55.7236, -100.172],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0f29718ed8f4d9e402ec784e463c89f6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9d5e4f1831fff039e83fc7b3abe0c696.setIcon(icon_0f29718ed8f4d9e402ec784e463c89f6);
        
    
        var popup_07720670a5ea8654d4295e95319fd834 = L.popup({"maxWidth": "100%"});

        
            
                var html_0e2ec6447c35d54049771ae3cfd53c11 = $(`<div id="html_0e2ec6447c35d54049771ae3cfd53c11" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE048, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5566" target="_blank">More Info</a></div>`)[0];
                popup_07720670a5ea8654d4295e95319fd834.setContent(html_0e2ec6447c35d54049771ae3cfd53c11);
            
        

        marker_9d5e4f1831fff039e83fc7b3abe0c696.bindPopup(popup_07720670a5ea8654d4295e95319fd834)
        ;

        
    
    
            var marker_8d8a166b99cef89e9188bfceb1345bb3 = L.marker(
                [55.6108, -101.7236],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_90ea591d65ed15d3967fcf7c0ceadb77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8d8a166b99cef89e9188bfceb1345bb3.setIcon(icon_90ea591d65ed15d3967fcf7c0ceadb77);
        
    
        var popup_6f170a7008db07440383a3e49adc6237 = L.popup({"maxWidth": "100%"});

        
            
                var html_82ebfa3b70fc87ba662f1a42d661e1a0 = $(`<div id="html_82ebfa3b70fc87ba662f1a42d661e1a0" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE046, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5640" target="_blank">More Info</a></div>`)[0];
                popup_6f170a7008db07440383a3e49adc6237.setContent(html_82ebfa3b70fc87ba662f1a42d661e1a0);
            
        

        marker_8d8a166b99cef89e9188bfceb1345bb3.bindPopup(popup_6f170a7008db07440383a3e49adc6237)
        ;

        
    
    
            var marker_626791bfe73373dccc11c3177ad71eb1 = L.marker(
                [55.0469, -99.5756],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e6416ddb9715c55bb217f3e322a9a5e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_626791bfe73373dccc11c3177ad71eb1.setIcon(icon_e6416ddb9715c55bb217f3e322a9a5e9);
        
    
        var popup_ce52387872377f7b5c4e210ff83c77d5 = L.popup({"maxWidth": "100%"});

        
            
                var html_25990f8551fee6c09313c78ca2332d19 = $(`<div id="html_25990f8551fee6c09313c78ca2332d19" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE047, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5641" target="_blank">More Info</a></div>`)[0];
                popup_ce52387872377f7b5c4e210ff83c77d5.setContent(html_25990f8551fee6c09313c78ca2332d19);
            
        

        marker_626791bfe73373dccc11c3177ad71eb1.bindPopup(popup_ce52387872377f7b5c4e210ff83c77d5)
        ;

        
    
    
            var marker_e7ac773eef8d3cb2eeaabc5a56849f70 = L.marker(
                [51.3367, -95.1706],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_18e76e439d745f82c10ed19e19a2bbb5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e7ac773eef8d3cb2eeaabc5a56849f70.setIcon(icon_18e76e439d745f82c10ed19e19a2bbb5);
        
    
        var popup_659f8ec81760af17b7b27d917466b7d1 = L.popup({"maxWidth": "100%"});

        
            
                var html_a4d1ef042380a463adf10404cf8d3da7 = $(`<div id="html_a4d1ef042380a463adf10404cf8d3da7" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA119, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5659" target="_blank">More Info</a></div>`)[0];
                popup_659f8ec81760af17b7b27d917466b7d1.setContent(html_a4d1ef042380a463adf10404cf8d3da7);
            
        

        marker_e7ac773eef8d3cb2eeaabc5a56849f70.bindPopup(popup_659f8ec81760af17b7b27d917466b7d1)
        ;

        
    
    
            var marker_ed776bfea74f9e5d734c6be8c674b562 = L.marker(
                [56.3528, -96.1697],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_43b53661fd8c541c05a2da5855c2dd4d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ed776bfea74f9e5d734c6be8c674b562.setIcon(icon_43b53661fd8c541c05a2da5855c2dd4d);
        
    
        var popup_346ede5d0a89bd4e15eed2c3e708db14 = L.popup({"maxWidth": "100%"});

        
            
                var html_0a5410243172f2cbc4a5c841f06a9c6c = $(`<div id="html_0a5410243172f2cbc4a5c841f06a9c6c" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO045, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5716" target="_blank">More Info</a></div>`)[0];
                popup_346ede5d0a89bd4e15eed2c3e708db14.setContent(html_0a5410243172f2cbc4a5c841f06a9c6c);
            
        

        marker_ed776bfea74f9e5d734c6be8c674b562.bindPopup(popup_346ede5d0a89bd4e15eed2c3e708db14)
        ;

        
    
    
            var marker_4c1c0258d2fe0c20865258635c618661 = L.marker(
                [55.1775, -100.1897],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e9037dfd7d217ad5b9aaf2d82dece3d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_4c1c0258d2fe0c20865258635c618661.setIcon(icon_e9037dfd7d217ad5b9aaf2d82dece3d5);
        
    
        var popup_5695722c5183d2b3e728ad26a9ff7be6 = L.popup({"maxWidth": "100%"});

        
            
                var html_0e330597857884db443a005b0d6ab3cc = $(`<div id="html_0e330597857884db443a005b0d6ab3cc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE032, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5538" target="_blank">More Info</a></div>`)[0];
                popup_5695722c5183d2b3e728ad26a9ff7be6.setContent(html_0e330597857884db443a005b0d6ab3cc);
            
        

        marker_4c1c0258d2fe0c20865258635c618661.bindPopup(popup_5695722c5183d2b3e728ad26a9ff7be6)
        ;

        
    
    
            var marker_8defc404c1f397b529cf5b4b9c19fcf1 = L.marker(
                [55.1133, -101.7436],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_6b6be6d6a094a487f030e7c0513ccde4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8defc404c1f397b529cf5b4b9c19fcf1.setIcon(icon_6b6be6d6a094a487f030e7c0513ccde4);
        
    
        var popup_73ff2adae68cfa44c9a6f63c14eb7128 = L.popup({"maxWidth": "100%"});

        
            
                var html_9fd862af467ada5199cad6e68df5a3fe = $(`<div id="html_9fd862af467ada5199cad6e68df5a3fe" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE038, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5565" target="_blank">More Info</a></div>`)[0];
                popup_73ff2adae68cfa44c9a6f63c14eb7128.setContent(html_9fd862af467ada5199cad6e68df5a3fe);
            
        

        marker_8defc404c1f397b529cf5b4b9c19fcf1.bindPopup(popup_73ff2adae68cfa44c9a6f63c14eb7128)
        ;

        
    
    
            var marker_f3f5a21bb8e9715a19a55be67073c821 = L.marker(
                [55.2594, -100.1031],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f6c581d928cb6ae50fc17bcfcbd100b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_f3f5a21bb8e9715a19a55be67073c821.setIcon(icon_f6c581d928cb6ae50fc17bcfcbd100b7);
        
    
        var popup_1940f9adf5864a0cf1f8bf5f4641a454 = L.popup({"maxWidth": "100%"});

        
            
                var html_8d1d007e1328e4c886f097eeb107eb57 = $(`<div id="html_8d1d007e1328e4c886f097eeb107eb57" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE033, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5638" target="_blank">More Info</a></div>`)[0];
                popup_1940f9adf5864a0cf1f8bf5f4641a454.setContent(html_8d1d007e1328e4c886f097eeb107eb57);
            
        

        marker_f3f5a21bb8e9715a19a55be67073c821.bindPopup(popup_1940f9adf5864a0cf1f8bf5f4641a454)
        ;

        
    
    
            var marker_2a209b1d728b3d9d8185a4d268867896 = L.marker(
                [54.4378, -100.0547],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_592d21befbb2daebc033b414394c2faf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2a209b1d728b3d9d8185a4d268867896.setIcon(icon_592d21befbb2daebc033b414394c2faf);
        
    
        var popup_f78794f4a68287ab19540972012d8021 = L.popup({"maxWidth": "100%"});

        
            
                var html_2979818c20226c68ac2807e063a35b89 = $(`<div id="html_2979818c20226c68ac2807e063a35b89" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE042, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5639" target="_blank">More Info</a></div>`)[0];
                popup_f78794f4a68287ab19540972012d8021.setContent(html_2979818c20226c68ac2807e063a35b89);
            
        

        marker_2a209b1d728b3d9d8185a4d268867896.bindPopup(popup_f78794f4a68287ab19540972012d8021)
        ;

        
    
    
            var marker_70342cd81efe55213193ff3739181935 = L.marker(
                [51.8658, -95.8317],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_efcbe75ef3dc988e3f29820d44ec6a6a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_70342cd81efe55213193ff3739181935.setIcon(icon_efcbe75ef3dc988e3f29820d44ec6a6a);
        
    
        var popup_11b939d89551641a2db30164b2ebd86e = L.popup({"maxWidth": "100%"});

        
            
                var html_81860d91c38aaf5a57d4840a2d9b7eb9 = $(`<div id="html_81860d91c38aaf5a57d4840a2d9b7eb9" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA116, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5658" target="_blank">More Info</a></div>`)[0];
                popup_11b939d89551641a2db30164b2ebd86e.setContent(html_81860d91c38aaf5a57d4840a2d9b7eb9);
            
        

        marker_70342cd81efe55213193ff3739181935.bindPopup(popup_11b939d89551641a2db30164b2ebd86e)
        ;

        
    
    
            var marker_a6f11d0c47c91d10b97d956295b5183c = L.marker(
                [54.7394, -99.6025],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_99c41d5bca2fe9f6e0c65303a24fda79 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a6f11d0c47c91d10b97d956295b5183c.setIcon(icon_99c41d5bca2fe9f6e0c65303a24fda79);
        
    
        var popup_41fd582d42776ba76953149783813333 = L.popup({"maxWidth": "100%"});

        
            
                var html_b0c4fdb95ae773951b01f58aef620151 = $(`<div id="html_b0c4fdb95ae773951b01f58aef620151" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE037, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5691" target="_blank">More Info</a></div>`)[0];
                popup_41fd582d42776ba76953149783813333.setContent(html_b0c4fdb95ae773951b01f58aef620151);
            
        

        marker_a6f11d0c47c91d10b97d956295b5183c.bindPopup(popup_41fd582d42776ba76953149783813333)
        ;

        
    
    
            var marker_56e2e872126419c50caa47b02cefa9e1 = L.marker(
                [54.2069, -97.2069],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0e56cb63cb971263b30eb6299ea5f8d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_56e2e872126419c50caa47b02cefa9e1.setIcon(icon_0e56cb63cb971263b30eb6299ea5f8d5);
        
    
        var popup_36e38f80f2720831dac7a33a38d31114 = L.popup({"maxWidth": "100%"});

        
            
                var html_f6d6f94908a4c633f449b82a95e3493c = $(`<div id="html_f6d6f94908a4c633f449b82a95e3493c" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO031, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5805" target="_blank">More Info</a></div>`)[0];
                popup_36e38f80f2720831dac7a33a38d31114.setContent(html_f6d6f94908a4c633f449b82a95e3493c);
            
        

        marker_56e2e872126419c50caa47b02cefa9e1.bindPopup(popup_36e38f80f2720831dac7a33a38d31114)
        ;

        
    
    
            var marker_3a528f5cdd74c2f59a2eb329a684ec2d = L.marker(
                [54.6961, -99.6403],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b3633c0aa502888b8ce9e463919b327f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_3a528f5cdd74c2f59a2eb329a684ec2d.setIcon(icon_b3633c0aa502888b8ce9e463919b327f);
        
    
        var popup_9214613ff4aa49f9d065d9e4d0728500 = L.popup({"maxWidth": "100%"});

        
            
                var html_b259a0b8875b4202b84981e9c936b09d = $(`<div id="html_b259a0b8875b4202b84981e9c936b09d" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE036, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5892" target="_blank">More Info</a></div>`)[0];
                popup_9214613ff4aa49f9d065d9e4d0728500.setContent(html_b259a0b8875b4202b84981e9c936b09d);
            
        

        marker_3a528f5cdd74c2f59a2eb329a684ec2d.bindPopup(popup_9214613ff4aa49f9d065d9e4d0728500)
        ;

        
    
    
            var marker_c41982521933df6760962a75f85debf1 = L.marker(
                [53.0706, -95.175],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9603304c1b91001b73788f339690793b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_c41982521933df6760962a75f85debf1.setIcon(icon_9603304c1b91001b73788f339690793b);
        
    
        var popup_82d68ee251f8568dcdc94efdb77857df = L.popup({"maxWidth": "100%"});

        
            
                var html_100c30db696fc5ae0a3bc89bb2266160 = $(`<div id="html_100c30db696fc5ae0a3bc89bb2266160" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO020, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5847" target="_blank">More Info</a></div>`)[0];
                popup_82d68ee251f8568dcdc94efdb77857df.setContent(html_100c30db696fc5ae0a3bc89bb2266160);
            
        

        marker_c41982521933df6760962a75f85debf1.bindPopup(popup_82d68ee251f8568dcdc94efdb77857df)
        ;

        
    
    
            var marker_1e782df7b23d8b87e121ed663abb7d04 = L.marker(
                [55.7856, -100.9508],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_22ac6ea2db6e8b37fc66ac476fdc6fad = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1e782df7b23d8b87e121ed663abb7d04.setIcon(icon_22ac6ea2db6e8b37fc66ac476fdc6fad);
        
    
        var popup_a70b77c68ea677e0115cc4ae2953f637 = L.popup({"maxWidth": "100%"});

        
            
                var html_9632b5e14100bdca8366c97f566ea34b = $(`<div id="html_9632b5e14100bdca8366c97f566ea34b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-NO015, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5532" target="_blank">More Info</a></div>`)[0];
                popup_a70b77c68ea677e0115cc4ae2953f637.setContent(html_9632b5e14100bdca8366c97f566ea34b);
            
        

        marker_1e782df7b23d8b87e121ed663abb7d04.bindPopup(popup_a70b77c68ea677e0115cc4ae2953f637)
        ;

        
    
    
            var marker_19003582b93155732797a8e50839eda0 = L.marker(
                [54.415, -100.9069],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_309bb4b83509ef8b259e2e4adf1651a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_19003582b93155732797a8e50839eda0.setIcon(icon_309bb4b83509ef8b259e2e4adf1651a2);
        
    
        var popup_8a3ad5f684cc7998732f41d8fdc26382 = L.popup({"maxWidth": "100%"});

        
            
                var html_e10c3de339955f996e5bcf8f2314b691 = $(`<div id="html_e10c3de339955f996e5bcf8f2314b691" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE029, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5564" target="_blank">More Info</a></div>`)[0];
                popup_8a3ad5f684cc7998732f41d8fdc26382.setContent(html_e10c3de339955f996e5bcf8f2314b691);
            
        

        marker_19003582b93155732797a8e50839eda0.bindPopup(popup_8a3ad5f684cc7998732f41d8fdc26382)
        ;

        
    
    
            var marker_054f4c8ef06ab7e90d6e48a9ae14af3d = L.marker(
                [39.25635, -123.23517],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_3a017b5f1959ade2f90fe272120da1b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_054f4c8ef06ab7e90d6e48a9ae14af3d.setIcon(icon_3a017b5f1959ade2f90fe272120da1b7);
        
    
        var popup_c183bda29116fb10250e5506fb3e7792 = L.popup({"maxWidth": "100%"});

        
            
                var html_e2c0dfb204dc2d3703e2b075d5efe3ec = $(`<div id="html_e2c0dfb204dc2d3703e2b075d5efe3ec" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Mendocino County (Broiler Fire), California, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5506" target="_blank">More Info</a></div>`)[0];
                popup_c183bda29116fb10250e5506fb3e7792.setContent(html_e2c0dfb204dc2d3703e2b075d5efe3ec);
            
        

        marker_054f4c8ef06ab7e90d6e48a9ae14af3d.bindPopup(popup_c183bda29116fb10250e5506fb3e7792)
        ;

        
    
    
            var marker_e7497a4994e6efca0bcbb2ad08618b24 = L.marker(
                [46.2923, -117.35373],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_608375e973f8771e05e545dff012b5bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e7497a4994e6efca0bcbb2ad08618b24.setIcon(icon_608375e973f8771e05e545dff012b5bc);
        
    
        var popup_e60cd449344f5f755ff08f33a9fbc198 = L.popup({"maxWidth": "100%"});

        
            
                var html_bc5f125c044b74219778d98e4fd094ce = $(`<div id="html_bc5f125c044b74219778d98e4fd094ce" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - Asotin County (Dry Gulch Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5504" target="_blank">More Info</a></div>`)[0];
                popup_e60cd449344f5f755ff08f33a9fbc198.setContent(html_bc5f125c044b74219778d98e4fd094ce);
            
        

        marker_e7497a4994e6efca0bcbb2ad08618b24.bindPopup(popup_e60cd449344f5f755ff08f33a9fbc198)
        ;

        
    
    
            var marker_e500087f640137a3ab69c0692db2ac35 = L.marker(
                [50.40543, -120.30386],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_40e3e6bb01e862658a4274915ab20903 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_e500087f640137a3ab69c0692db2ac35.setIcon(icon_40e3e6bb01e862658a4274915ab20903);
        
    
        var popup_0a50fc2dcb17908b88fbcf76efa051b9 = L.popup({"maxWidth": "100%"});

        
            
                var html_0bcf7e6bdc806f69508354fb850fad47 = $(`<div id="html_0bcf7e6bdc806f69508354fb850fad47" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Napier Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5507" target="_blank">More Info</a></div>`)[0];
                popup_0a50fc2dcb17908b88fbcf76efa051b9.setContent(html_0bcf7e6bdc806f69508354fb850fad47);
            
        

        marker_e500087f640137a3ab69c0692db2ac35.bindPopup(popup_0a50fc2dcb17908b88fbcf76efa051b9)
        ;

        
    
    
            var marker_ab256af9a3fcc13a1cf524cacd9d13ef = L.marker(
                [54.40331, -126.14659],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_186ddfdc1620282c7e84c7afe8fd7310 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_ab256af9a3fcc13a1cf524cacd9d13ef.setIcon(icon_186ddfdc1620282c7e84c7afe8fd7310);
        
    
        var popup_7c1f779ecfb08cb4b306cb29dff03775 = L.popup({"maxWidth": "100%"});

        
            
                var html_1e7c6837663169132fffccf9c1721c4c = $(`<div id="html_1e7c6837663169132fffccf9c1721c4c" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Bulkley Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5508" target="_blank">More Info</a></div>`)[0];
                popup_7c1f779ecfb08cb4b306cb29dff03775.setContent(html_1e7c6837663169132fffccf9c1721c4c);
            
        

        marker_ab256af9a3fcc13a1cf524cacd9d13ef.bindPopup(popup_7c1f779ecfb08cb4b306cb29dff03775)
        ;

        
    
    
            var marker_828f567bc9b3b44ead42599cb38ad927 = L.marker(
                [50.7411, -95.1589],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c2fb457ec05514b9065379e689471ec7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_828f567bc9b3b44ead42599cb38ad927.setIcon(icon_c2fb457ec05514b9065379e689471ec7);
        
    
        var popup_57d7e0a670bb5a3390c7b728b4ef0455 = L.popup({"maxWidth": "100%"});

        
            
                var html_bf01423103df97b0e442a7550c8e1a33 = $(`<div id="html_bf01423103df97b0e442a7550c8e1a33" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA112, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5521" target="_blank">More Info</a></div>`)[0];
                popup_57d7e0a670bb5a3390c7b728b4ef0455.setContent(html_bf01423103df97b0e442a7550c8e1a33);
            
        

        marker_828f567bc9b3b44ead42599cb38ad927.bindPopup(popup_57d7e0a670bb5a3390c7b728b4ef0455)
        ;

        
    
    
            var marker_91d795059c6bae50e2ecf1d57fe0e10d = L.marker(
                [53.9006, -99.9169],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_8697958cb956c8b9a6b2a5504303da07 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_91d795059c6bae50e2ecf1d57fe0e10d.setIcon(icon_8697958cb956c8b9a6b2a5504303da07);
        
    
        var popup_4d48ddfe6cfc60834f1ce5d89dcfb304 = L.popup({"maxWidth": "100%"});

        
            
                var html_42326117e984a91e30441717090af5dc = $(`<div id="html_42326117e984a91e30441717090af5dc" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE024, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5537" target="_blank">More Info</a></div>`)[0];
                popup_4d48ddfe6cfc60834f1ce5d89dcfb304.setContent(html_42326117e984a91e30441717090af5dc);
            
        

        marker_91d795059c6bae50e2ecf1d57fe0e10d.bindPopup(popup_4d48ddfe6cfc60834f1ce5d89dcfb304)
        ;

        
    
    
            var marker_1fbfa9bb7d49e989ab9761be0decd96d = L.marker(
                [51.44457, -122.2539],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c009222e0576455f0060b243647b5359 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1fbfa9bb7d49e989ab9761be0decd96d.setIcon(icon_c009222e0576455f0060b243647b5359);
        
    
        var popup_7b95c614109e27a861c065575d4091a3 = L.popup({"maxWidth": "100%"});

        
            
                var html_5e41c2fc9a3a1624ee31853e2cf9a5e9 = $(`<div id="html_5e41c2fc9a3a1624ee31853e2cf9a5e9" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Churn Creek Protected Area Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5488" target="_blank">More Info</a></div>`)[0];
                popup_7b95c614109e27a861c065575d4091a3.setContent(html_5e41c2fc9a3a1624ee31853e2cf9a5e9);
            
        

        marker_1fbfa9bb7d49e989ab9761be0decd96d.bindPopup(popup_7b95c614109e27a861c065575d4091a3)
        ;

        
    
    
            var marker_5661a7589d2c60b469afba5c52231830 = L.marker(
                [51.48792, -121.09244],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cc41d14d219b80daf08b6abb400ff594 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5661a7589d2c60b469afba5c52231830.setIcon(icon_cc41d14d219b80daf08b6abb400ff594);
        
    
        var popup_0f6e7980f5e08f4f9f6b9125998f4163 = L.popup({"maxWidth": "100%"});

        
            
                var html_ed0cbff6c7b00c4faa637f5893dfff41 = $(`<div id="html_ed0cbff6c7b00c4faa637f5893dfff41" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Si Lake Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5490" target="_blank">More Info</a></div>`)[0];
                popup_0f6e7980f5e08f4f9f6b9125998f4163.setContent(html_ed0cbff6c7b00c4faa637f5893dfff41);
            
        

        marker_5661a7589d2c60b469afba5c52231830.bindPopup(popup_0f6e7980f5e08f4f9f6b9125998f4163)
        ;

        
    
    
            var marker_9436ffe27eae07e91369aed1f6768862 = L.marker(
                [47.54926, -117.5498],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b276ebb9c031bb1948488af9b58099fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_9436ffe27eae07e91369aed1f6768862.setIcon(icon_b276ebb9c031bb1948488af9b58099fa);
        
    
        var popup_c059cee9a85faa9d2ed81612eb832cd5 = L.popup({"maxWidth": "100%"});

        
            
                var html_7cd071aa84e98e3403c706c66fc3d655 = $(`<div id="html_7cd071aa84e98e3403c706c66fc3d655" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Spokane County (Andrus Fire), Washington, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5492" target="_blank">More Info</a></div>`)[0];
                popup_c059cee9a85faa9d2ed81612eb832cd5.setContent(html_7cd071aa84e98e3403c706c66fc3d655);
            
        

        marker_9436ffe27eae07e91369aed1f6768862.bindPopup(popup_c059cee9a85faa9d2ed81612eb832cd5)
        ;

        
    
    
            var marker_77dc6542d6f3ff143dc35a95e11e6d19 = L.marker(
                [52.1158, -100.5422],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e25ac1d2d8e786926c74fed5ab1fc98e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_77dc6542d6f3ff143dc35a95e11e6d19.setIcon(icon_e25ac1d2d8e786926c74fed5ab1fc98e);
        
    
        var popup_1de75da122f359d5817f3bf65e703e31 = L.popup({"maxWidth": "100%"});

        
            
                var html_7082bcbeaf97c95cb19fcd38ce331c4f = $(`<div id="html_7082bcbeaf97c95cb19fcd38ce331c4f" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-WE022, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5510" target="_blank">More Info</a></div>`)[0];
                popup_1de75da122f359d5817f3bf65e703e31.setContent(html_7082bcbeaf97c95cb19fcd38ce331c4f);
            
        

        marker_77dc6542d6f3ff143dc35a95e11e6d19.bindPopup(popup_1de75da122f359d5817f3bf65e703e31)
        ;

        
    
    
            var marker_6dcdd9e9c97449024726898a78c06608 = L.marker(
                [45.57376, -121.11953],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2d9206f70157deb6cd689263dd77e589 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_6dcdd9e9c97449024726898a78c06608.setIcon(icon_2d9206f70157deb6cd689263dd77e589);
        
    
        var popup_2abf3f23e4c17987587e3c3e46bc965b = L.popup({"maxWidth": "100%"});

        
            
                var html_b68946c91dedb99f255cffaa0b58e671 = $(`<div id="html_b68946c91dedb99f255cffaa0b58e671" style="width: 100.0%; height: 100.0%;"><strong>Wildfire - Wasco County (Sunset Fire), Oregon, United States</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5469" target="_blank">More Info</a></div>`)[0];
                popup_2abf3f23e4c17987587e3c3e46bc965b.setContent(html_b68946c91dedb99f255cffaa0b58e671);
            
        

        marker_6dcdd9e9c97449024726898a78c06608.bindPopup(popup_2abf3f23e4c17987587e3c3e46bc965b)
        ;

        
    
    
            var marker_a202886f66a1aadd1b79cf6fb03f8b7d = L.marker(
                [49.27913, -117.67113],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_55090cc4196a2f7c2a38ab7ff8fa440a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_a202886f66a1aadd1b79cf6fb03f8b7d.setIcon(icon_55090cc4196a2f7c2a38ab7ff8fa440a);
        
    
        var popup_a9dbaad7afff5a8119419207bd4b7139 = L.popup({"maxWidth": "100%"});

        
            
                var html_037444db2e96d73a7505d63e673f4d9e = $(`<div id="html_037444db2e96d73a7505d63e673f4d9e" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (Merry Creek Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5471" target="_blank">More Info</a></div>`)[0];
                popup_a9dbaad7afff5a8119419207bd4b7139.setContent(html_037444db2e96d73a7505d63e673f4d9e);
            
        

        marker_a202886f66a1aadd1b79cf6fb03f8b7d.bindPopup(popup_a9dbaad7afff5a8119419207bd4b7139)
        ;

        
    
    
            var marker_2c02bca76d3e5d193b7df8bc5647d8a5 = L.marker(
                [57.48322, -123.03998],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4a228af056ada6e07d48c661e9070f29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_2c02bca76d3e5d193b7df8bc5647d8a5.setIcon(icon_4a228af056ada6e07d48c661e9070f29);
        
    
        var popup_db7c89444afa863e08830590f5668096 = L.popup({"maxWidth": "100%"});

        
            
                var html_60830af9b354b9457eddc6aa851b4509 = $(`<div id="html_60830af9b354b9457eddc6aa851b4509" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (G80997  Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5472" target="_blank">More Info</a></div>`)[0];
                popup_db7c89444afa863e08830590f5668096.setContent(html_60830af9b354b9457eddc6aa851b4509);
            
        

        marker_2c02bca76d3e5d193b7df8bc5647d8a5.bindPopup(popup_db7c89444afa863e08830590f5668096)
        ;

        
    
    
            var marker_8c9c440e7949c5c7464768972dbfae81 = L.marker(
                [51.58945, -120.87633],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_237d4e79d83674160a7950e21ae549fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_8c9c440e7949c5c7464768972dbfae81.setIcon(icon_237d4e79d83674160a7950e21ae549fa);
        
    
        var popup_3c36e10e0790e0e5c5868a7816737c86 = L.popup({"maxWidth": "100%"});

        
            
                var html_82b4c2f5cbb054882dee74cf5d000895 = $(`<div id="html_82b4c2f5cbb054882dee74cf5d000895" style="width: 100.0%; height: 100.0%;"><strong>Wildfires - British Columbia (C41102  Fire), Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5468" target="_blank">More Info</a></div>`)[0];
                popup_3c36e10e0790e0e5c5868a7816737c86.setContent(html_82b4c2f5cbb054882dee74cf5d000895);
            
        

        marker_8c9c440e7949c5c7464768972dbfae81.bindPopup(popup_3c36e10e0790e0e5c5868a7816737c86)
        ;

        
    
    
            var marker_1087eb29c84dae478161789e3312aab4 = L.marker(
                [52.8214, -95.5394],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_57c27387db22bdcf0e2d18582a2d1d04 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_1087eb29c84dae478161789e3312aab4.setIcon(icon_57c27387db22bdcf0e2d18582a2d1d04);
        
    
        var popup_59417dd82b82973167b7ad2deb3021ee = L.popup({"maxWidth": "100%"});

        
            
                var html_1e375df882dbc80f41ab6a5104b89eca = $(`<div id="html_1e375df882dbc80f41ab6a5104b89eca" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA101, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5519" target="_blank">More Info</a></div>`)[0];
                popup_59417dd82b82973167b7ad2deb3021ee.setContent(html_1e375df882dbc80f41ab6a5104b89eca);
            
        

        marker_1087eb29c84dae478161789e3312aab4.bindPopup(popup_59417dd82b82973167b7ad2deb3021ee)
        ;

        
    
    
            var marker_5c152654683c6202fd669599164928dd = L.marker(
                [52.7642, -95.4881],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9587e5b4a3b438f93b919a66032ae9f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_5c152654683c6202fd669599164928dd.setIcon(icon_9587e5b4a3b438f93b919a66032ae9f9);
        
    
        var popup_3f93e67c812f188c0df4b242e19ab5c6 = L.popup({"maxWidth": "100%"});

        
            
                var html_bf96cc25ab593751462ae9ad87be900b = $(`<div id="html_bf96cc25ab593751462ae9ad87be900b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA102, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5520" target="_blank">More Info</a></div>`)[0];
                popup_3f93e67c812f188c0df4b242e19ab5c6.setContent(html_bf96cc25ab593751462ae9ad87be900b);
            
        

        marker_5c152654683c6202fd669599164928dd.bindPopup(popup_3f93e67c812f188c0df4b242e19ab5c6)
        ;

        
    
    
            var marker_f33f5123bc6e7930ee493343d22a9842 = L.marker(
                [52.7189, -96.7283],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_5cad08c108dc5eabdc570b8e4f06dc0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
            );
            marker_f33f5123bc6e7930ee493343d22a9842.setIcon(icon_5cad08c108dc5eabdc570b8e4f06dc0c);
        
    
        var popup_8de336ede335312a9452e2e80d34026e = L.popup({"maxWidth": "100%"});

        
            
                var html_7b3efb130e11e14afd52f4e1e85bad8b = $(`<div id="html_7b3efb130e11e14afd52f4e1e85bad8b" style="width: 100.0%; height: 100.0%;"><strong>Wildfire MB-EA091, Manitoba, Canada</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5481" target="_blank">More Info</a></div>`)[0];
                popup_8de336ede335312a9452e2e80d34026e.setContent(html_7b3efb130e11e14afd52f4e1e85bad8b);
            
        

        marker_f33f5123bc6e7930ee493343d22a9842.bindPopup(popup_8de336ede335312a9452e2e80d34026e)
        ;

        
    
    
            var marker_cabd374482056fc5be7b1f755db348cc = L.marker(
                [-69.77, 21.67],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2a96953d766c8c9b2fc17d0d3f49e0b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_cabd374482056fc5be7b1f755db348cc.setIcon(icon_2a96953d766c8c9b2fc17d0d3f49e0b9);
        
    
        var popup_2eef8f7510c8da858464824a3a7f8f62 = L.popup({"maxWidth": "100%"});

        
            
                var html_b78dd1241e1b67607a491341ac52dd29 = $(`<div id="html_b78dd1241e1b67607a491341ac52dd29" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D29A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5387" target="_blank">More Info</a></div>`)[0];
                popup_2eef8f7510c8da858464824a3a7f8f62.setContent(html_b78dd1241e1b67607a491341ac52dd29);
            
        

        marker_cabd374482056fc5be7b1f755db348cc.bindPopup(popup_2eef8f7510c8da858464824a3a7f8f62)
        ;

        
    
    
            var marker_5786e47522d5c15d9f7a620cb5a66fd7 = L.marker(
                [-69.96, 22.16],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_470f9acae9e2067f3547f46d2815d620 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_5786e47522d5c15d9f7a620cb5a66fd7.setIcon(icon_470f9acae9e2067f3547f46d2815d620);
        
    
        var popup_0fb2572809dac355067eeb82b7f3bf76 = L.popup({"maxWidth": "100%"});

        
            
                var html_b62be6e147685bc58ae16b9ef565764f = $(`<div id="html_b62be6e147685bc58ae16b9ef565764f" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D29B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5388" target="_blank">More Info</a></div>`)[0];
                popup_0fb2572809dac355067eeb82b7f3bf76.setContent(html_b62be6e147685bc58ae16b9ef565764f);
            
        

        marker_5786e47522d5c15d9f7a620cb5a66fd7.bindPopup(popup_0fb2572809dac355067eeb82b7f3bf76)
        ;

        
    
    
            var marker_8a4693b00d4e4727a17ff4bea287c8a5 = L.marker(
                [-69.77, 22.15],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_be1503cb382945d3940755711cc8a174 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_8a4693b00d4e4727a17ff4bea287c8a5.setIcon(icon_be1503cb382945d3940755711cc8a174);
        
    
        var popup_bc725a0611958defeeeb633ab90fbe09 = L.popup({"maxWidth": "100%"});

        
            
                var html_4b8d35e9efdf465307447d2711bea8ea = $(`<div id="html_4b8d35e9efdf465307447d2711bea8ea" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D29C</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5389" target="_blank">More Info</a></div>`)[0];
                popup_bc725a0611958defeeeb633ab90fbe09.setContent(html_4b8d35e9efdf465307447d2711bea8ea);
            
        

        marker_8a4693b00d4e4727a17ff4bea287c8a5.bindPopup(popup_bc725a0611958defeeeb633ab90fbe09)
        ;

        
    
    
            var marker_dfa9d053c74ebe57ec00549a95a28714 = L.marker(
                [-69.46, 18.59],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ad9c3bb15cc780155e342c3c4a3a40ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_dfa9d053c74ebe57ec00549a95a28714.setIcon(icon_ad9c3bb15cc780155e342c3c4a3a40ec);
        
    
        var popup_5687e77f0d54bbd37e5491d999e22f04 = L.popup({"maxWidth": "100%"});

        
            
                var html_a6ec6003bee7f355f63f44708fcb8939 = $(`<div id="html_a6ec6003bee7f355f63f44708fcb8939" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D30A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5390" target="_blank">More Info</a></div>`)[0];
                popup_5687e77f0d54bbd37e5491d999e22f04.setContent(html_a6ec6003bee7f355f63f44708fcb8939);
            
        

        marker_dfa9d053c74ebe57ec00549a95a28714.bindPopup(popup_5687e77f0d54bbd37e5491d999e22f04)
        ;

        
    
    
            var marker_aa9ba9dc7c5cfb8cd119f61f91152b77 = L.marker(
                [-69.79, 19.7],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0f84e7f244214b47d565673e67d1e615 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_aa9ba9dc7c5cfb8cd119f61f91152b77.setIcon(icon_0f84e7f244214b47d565673e67d1e615);
        
    
        var popup_4ec65c6e8e698069a3b0c72d996a8a02 = L.popup({"maxWidth": "100%"});

        
            
                var html_8d00ecc25f03e62c3d1d83a0c783c73b = $(`<div id="html_8d00ecc25f03e62c3d1d83a0c783c73b" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D30B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5391" target="_blank">More Info</a></div>`)[0];
                popup_4ec65c6e8e698069a3b0c72d996a8a02.setContent(html_8d00ecc25f03e62c3d1d83a0c783c73b);
            
        

        marker_aa9ba9dc7c5cfb8cd119f61f91152b77.bindPopup(popup_4ec65c6e8e698069a3b0c72d996a8a02)
        ;

        
    
    
            var marker_fae24dfd3b754d66b474e9ec957686f8 = L.marker(
                [-75.1, -59.43],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_9de603d7c0ed24eb757fb47859d91a18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_fae24dfd3b754d66b474e9ec957686f8.setIcon(icon_9de603d7c0ed24eb757fb47859d91a18);
        
    
        var popup_17a834f5e627d087045fe9cf35cb8ee9 = L.popup({"maxWidth": "100%"});

        
            
                var html_ac40632a43319ef1af7f1afed50a6cfe = $(`<div id="html_ac40632a43319ef1af7f1afed50a6cfe" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5357" target="_blank">More Info</a></div>`)[0];
                popup_17a834f5e627d087045fe9cf35cb8ee9.setContent(html_ac40632a43319ef1af7f1afed50a6cfe);
            
        

        marker_fae24dfd3b754d66b474e9ec957686f8.bindPopup(popup_17a834f5e627d087045fe9cf35cb8ee9)
        ;

        
    
    
            var marker_33bce1c311230f53ad29fd3b9ccb0011 = L.marker(
                [-75.09, -57.49],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f9bda84c4bdcd0d8dca77ae78ee45f94 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_33bce1c311230f53ad29fd3b9ccb0011.setIcon(icon_f9bda84c4bdcd0d8dca77ae78ee45f94);
        
    
        var popup_6981a5442548053acdeaf613a9f99fd3 = L.popup({"maxWidth": "100%"});

        
            
                var html_4a59c4c44bd78baea947d69c129e3f03 = $(`<div id="html_4a59c4c44bd78baea947d69c129e3f03" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5358" target="_blank">More Info</a></div>`)[0];
                popup_6981a5442548053acdeaf613a9f99fd3.setContent(html_4a59c4c44bd78baea947d69c129e3f03);
            
        

        marker_33bce1c311230f53ad29fd3b9ccb0011.bindPopup(popup_6981a5442548053acdeaf613a9f99fd3)
        ;

        
    
    
            var marker_b85b021e993288fa5472fb3f559c28f9 = L.marker(
                [-75.57, -57.04],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ac75f3b9375ff8c52edc01765b8bbce0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_b85b021e993288fa5472fb3f559c28f9.setIcon(icon_ac75f3b9375ff8c52edc01765b8bbce0);
        
    
        var popup_a9930f3b017f9735d5523459dd42534c = L.popup({"maxWidth": "100%"});

        
            
                var html_9788745556edf39c1818e665bc3fc9c7 = $(`<div id="html_9788745556edf39c1818e665bc3fc9c7" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A76C</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5359" target="_blank">More Info</a></div>`)[0];
                popup_a9930f3b017f9735d5523459dd42534c.setContent(html_9788745556edf39c1818e665bc3fc9c7);
            
        

        marker_b85b021e993288fa5472fb3f559c28f9.bindPopup(popup_a9930f3b017f9735d5523459dd42534c)
        ;

        
    
    
            var marker_7cbaa9d8c2a7d80c136c5f29d398b51b = L.marker(
                [-7.54, 110.446],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_99994a0579123f4411c715e76af7ff48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_7cbaa9d8c2a7d80c136c5f29d398b51b.setIcon(icon_99994a0579123f4411c715e76af7ff48);
        
    
        var popup_b5f50396c888484dd3e2e97c67526a2c = L.popup({"maxWidth": "100%"});

        
            
                var html_0ef09c197bc6aa7baa917c948eb4be61 = $(`<div id="html_0ef09c197bc6aa7baa917c948eb4be61" style="width: 100.0%; height: 100.0%;"><strong>Merapi Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_5202" target="_blank">More Info</a></div>`)[0];
                popup_b5f50396c888484dd3e2e97c67526a2c.setContent(html_0ef09c197bc6aa7baa917c948eb4be61);
            
        

        marker_7cbaa9d8c2a7d80c136c5f29d398b51b.bindPopup(popup_b5f50396c888484dd3e2e97c67526a2c)
        ;

        
    
    
            var marker_10bb9219f67d58d0cd5027664a0f38b9 = L.marker(
                [29.63, 129.71],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_355e462f38965b422141d05f91310833 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_10bb9219f67d58d0cd5027664a0f38b9.setIcon(icon_355e462f38965b422141d05f91310833);
        
    
        var popup_21fe191400988b5a18728d157965a3d7 = L.popup({"maxWidth": "100%"});

        
            
                var html_3feea5d5f327fbb8059ed4251c8609e3 = $(`<div id="html_3feea5d5f327fbb8059ed4251c8609e3" style="width: 100.0%; height: 100.0%;"><strong>Suwanosejima Volcano, Japan</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4768" target="_blank">More Info</a></div>`)[0];
                popup_21fe191400988b5a18728d157965a3d7.setContent(html_3feea5d5f327fbb8059ed4251c8609e3);
            
        

        marker_10bb9219f67d58d0cd5027664a0f38b9.bindPopup(popup_21fe191400988b5a18728d157965a3d7)
        ;

        
    
    
            var marker_11eda545bb7c741801b1f3dfc9864197 = L.marker(
                [14.757, -91.552],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b8b52e588a7ac28996072ac29531c6ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_11eda545bb7c741801b1f3dfc9864197.setIcon(icon_b8b52e588a7ac28996072ac29531c6ba);
        
    
        var popup_e208977b7d3c4fa86905fd21e054595f = L.popup({"maxWidth": "100%"});

        
            
                var html_2ceb1425ba7b9f8787d45fef1263bb2c = $(`<div id="html_2ceb1425ba7b9f8787d45fef1263bb2c" style="width: 100.0%; height: 100.0%;"><strong>Santa Maria Volcano, Guatemala</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4624" target="_blank">More Info</a></div>`)[0];
                popup_e208977b7d3c4fa86905fd21e054595f.setContent(html_2ceb1425ba7b9f8787d45fef1263bb2c);
            
        

        marker_11eda545bb7c741801b1f3dfc9864197.bindPopup(popup_e208977b7d3c4fa86905fd21e054595f)
        ;

        
    
    
            var marker_72cda731b7621b9a7da1438319ad9b09 = L.marker(
                [-8.108, 112.922],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_947ce5d4a8dedac87a3849da72ebf453 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_72cda731b7621b9a7da1438319ad9b09.setIcon(icon_947ce5d4a8dedac87a3849da72ebf453);
        
    
        var popup_453fcc9b2d43b4e2f9f0d1ebed8fb755 = L.popup({"maxWidth": "100%"});

        
            
                var html_7152789df6fe51e4315c8374bb12a179 = $(`<div id="html_7152789df6fe51e4315c8374bb12a179" style="width: 100.0%; height: 100.0%;"><strong>Semeru Volcano, Indonesia</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4561" target="_blank">More Info</a></div>`)[0];
                popup_453fcc9b2d43b4e2f9f0d1ebed8fb755.setContent(html_7152789df6fe51e4315c8374bb12a179);
            
        

        marker_72cda731b7621b9a7da1438319ad9b09.bindPopup(popup_453fcc9b2d43b4e2f9f0d1ebed8fb755)
        ;

        
    
    
            var marker_20d4f254a03f9d496dc391ad12208050 = L.marker(
                [-68.55, 72.21],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_afe72cd47437b4e281586bfdaee76b77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_20d4f254a03f9d496dc391ad12208050.setIcon(icon_afe72cd47437b4e281586bfdaee76b77);
        
    
        var popup_8cb9e3819c116f22d8fc9c213a57f709 = L.popup({"maxWidth": "100%"});

        
            
                var html_53bc5626ae317e79d07c41869f220a45 = $(`<div id="html_53bc5626ae317e79d07c41869f220a45" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D28</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4440" target="_blank">More Info</a></div>`)[0];
                popup_8cb9e3819c116f22d8fc9c213a57f709.setContent(html_53bc5626ae317e79d07c41869f220a45);
            
        

        marker_20d4f254a03f9d496dc391ad12208050.bindPopup(popup_8cb9e3819c116f22d8fc9c213a57f709)
        ;

        
    
    
            var marker_bb27e0da58e3059d59746447ab6b2873 = L.marker(
                [-74.27, -130.28],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_d27721c5ec63e9ad7054da9db2dbd1f7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_bb27e0da58e3059d59746447ab6b2873.setIcon(icon_d27721c5ec63e9ad7054da9db2dbd1f7);
        
    
        var popup_9a94fbe702f66d034741bbead085d0ed = L.popup({"maxWidth": "100%"});

        
            
                var html_9a83901c963f14b58a696037189adf2c = $(`<div id="html_9a83901c963f14b58a696037189adf2c" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B47</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4431" target="_blank">More Info</a></div>`)[0];
                popup_9a94fbe702f66d034741bbead085d0ed.setContent(html_9a83901c963f14b58a696037189adf2c);
            
        

        marker_bb27e0da58e3059d59746447ab6b2873.bindPopup(popup_9a94fbe702f66d034741bbead085d0ed)
        ;

        
    
    
            var marker_33b587aab859a512f48a26ad1e42ad97 = L.marker(
                [-0.07, -77.65],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_cacb323d6fc447ae8631e0cfb414b896 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_33b587aab859a512f48a26ad1e42ad97.setIcon(icon_cacb323d6fc447ae8631e0cfb414b896);
        
    
        var popup_a26a9138b59786571233322a7259d52d = L.popup({"maxWidth": "100%"});

        
            
                var html_e908cd51012ce723e6900025b1cfbe21 = $(`<div id="html_e908cd51012ce723e6900025b1cfbe21" style="width: 100.0%; height: 100.0%;"><strong>Reventador Volcano, Ecuador</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4269" target="_blank">More Info</a></div>`)[0];
                popup_a26a9138b59786571233322a7259d52d.setContent(html_e908cd51012ce723e6900025b1cfbe21);
            
        

        marker_33b587aab859a512f48a26ad1e42ad97.bindPopup(popup_a26a9138b59786571233322a7259d52d)
        ;

        
    
    
            var marker_d7e2eaba5d92eea1e3f8b1bf0ff6f026 = L.marker(
                [-2.005, -78.341],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1454bdd6691f1b7ffc885b0631422deb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_d7e2eaba5d92eea1e3f8b1bf0ff6f026.setIcon(icon_1454bdd6691f1b7ffc885b0631422deb);
        
    
        var popup_1b0b97e15c3339fe65c4b0312d4c4b2b = L.popup({"maxWidth": "100%"});

        
            
                var html_f1d5c9d6c951655f47338dfdb315f967 = $(`<div id="html_f1d5c9d6c951655f47338dfdb315f967" style="width: 100.0%; height: 100.0%;"><strong>Sangay Volcano, Ecuador</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4156" target="_blank">More Info</a></div>`)[0];
                popup_1b0b97e15c3339fe65c4b0312d4c4b2b.setContent(html_f1d5c9d6c951655f47338dfdb315f967);
            
        

        marker_d7e2eaba5d92eea1e3f8b1bf0ff6f026.bindPopup(popup_1b0b97e15c3339fe65c4b0312d4c4b2b)
        ;

        
    
    
            var marker_84b9945b77f0c24e8315d0e5c98ac8cc = L.marker(
                [-77.0, -155.05],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_0edd35e8ec4c167b228d546b7e246d48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_84b9945b77f0c24e8315d0e5c98ac8cc.setIcon(icon_0edd35e8ec4c167b228d546b7e246d48);
        
    
        var popup_519924226676039c5fcd8de41d850ad9 = L.popup({"maxWidth": "100%"});

        
            
                var html_8472b188d029c49c9eeed64926792ce4 = $(`<div id="html_8472b188d029c49c9eeed64926792ce4" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B38</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4129" target="_blank">More Info</a></div>`)[0];
                popup_519924226676039c5fcd8de41d850ad9.setContent(html_8472b188d029c49c9eeed64926792ce4);
            
        

        marker_84b9945b77f0c24e8315d0e5c98ac8cc.bindPopup(popup_519924226676039c5fcd8de41d850ad9)
        ;

        
    
    
            var marker_2854fd4484b670f7a5d49dde96f901a9 = L.marker(
                [-65.55, 117.66],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_42c01bda7932854449030f684644fd2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_2854fd4484b670f7a5d49dde96f901a9.setIcon(icon_42c01bda7932854449030f684644fd2a);
        
    
        var popup_480fe710dda179a931e22bd252131569 = L.popup({"maxWidth": "100%"});

        
            
                var html_4e709359e53b0b0dcc2c631e84e58196 = $(`<div id="html_4e709359e53b0b0dcc2c631e84e58196" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B39</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4130" target="_blank">More Info</a></div>`)[0];
                popup_480fe710dda179a931e22bd252131569.setContent(html_4e709359e53b0b0dcc2c631e84e58196);
            
        

        marker_2854fd4484b670f7a5d49dde96f901a9.bindPopup(popup_480fe710dda179a931e22bd252131569)
        ;

        
    
    
            var marker_534848af44874e82485e59304b1c6307 = L.marker(
                [-74.7, -109.37],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_376c8ba155a356a6b62f87e514f9bdaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_534848af44874e82485e59304b1c6307.setIcon(icon_376c8ba155a356a6b62f87e514f9bdaa);
        
    
        var popup_59948e12959537c7c267f60faeeb27f5 = L.popup({"maxWidth": "100%"});

        
            
                var html_d538b16da86d65eb791992a11f79bbf7 = $(`<div id="html_d538b16da86d65eb791992a11f79bbf7" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B45</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4132" target="_blank">More Info</a></div>`)[0];
                popup_59948e12959537c7c267f60faeeb27f5.setContent(html_d538b16da86d65eb791992a11f79bbf7);
            
        

        marker_534848af44874e82485e59304b1c6307.bindPopup(popup_59948e12959537c7c267f60faeeb27f5)
        ;

        
    
    
            var marker_d2164bc1452d5fa67703063ab88708fd = L.marker(
                [-65.47, 113.9],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ab12c7dde1b6a51ca999e11048d89815 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_d2164bc1452d5fa67703063ab88708fd.setIcon(icon_ab12c7dde1b6a51ca999e11048d89815);
        
    
        var popup_63876f85d1ce86023104f7ebcc0bbb87 = L.popup({"maxWidth": "100%"});

        
            
                var html_f26fb93ccaf9a515d4131e0c3772d121 = $(`<div id="html_f26fb93ccaf9a515d4131e0c3772d121" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C18B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4133" target="_blank">More Info</a></div>`)[0];
                popup_63876f85d1ce86023104f7ebcc0bbb87.setContent(html_f26fb93ccaf9a515d4131e0c3772d121);
            
        

        marker_d2164bc1452d5fa67703063ab88708fd.bindPopup(popup_63876f85d1ce86023104f7ebcc0bbb87)
        ;

        
    
    
            var marker_048d643bec1390fdb4317fcb43510d11 = L.marker(
                [-64.84, 96.02],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_c9c5efa39469f41d19bd87be9d7dffdf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_048d643bec1390fdb4317fcb43510d11.setIcon(icon_c9c5efa39469f41d19bd87be9d7dffdf);
        
    
        var popup_ba1867e0103c8d8c37a32a91f2193ff5 = L.popup({"maxWidth": "100%"});

        
            
                var html_1079a6bce3f96fab6e66e7b0f9b0379b = $(`<div id="html_1079a6bce3f96fab6e66e7b0f9b0379b" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C24</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4134" target="_blank">More Info</a></div>`)[0];
                popup_ba1867e0103c8d8c37a32a91f2193ff5.setContent(html_1079a6bce3f96fab6e66e7b0f9b0379b);
            
        

        marker_048d643bec1390fdb4317fcb43510d11.bindPopup(popup_ba1867e0103c8d8c37a32a91f2193ff5)
        ;

        
    
    
            var marker_fcf9753195753cf06d90b14858a9695c = L.marker(
                [-66.1, 142.85],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_aab0db420bf3fdcc03a91e1a55d63408 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_fcf9753195753cf06d90b14858a9695c.setIcon(icon_aab0db420bf3fdcc03a91e1a55d63408);
        
    
        var popup_cd7d6892ea7a9c35fd30bf3d72219347 = L.popup({"maxWidth": "100%"});

        
            
                var html_6f3dd09fe2e8b7a2392437cf72ee814a = $(`<div id="html_6f3dd09fe2e8b7a2392437cf72ee814a" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C29</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4135" target="_blank">More Info</a></div>`)[0];
                popup_cd7d6892ea7a9c35fd30bf3d72219347.setContent(html_6f3dd09fe2e8b7a2392437cf72ee814a);
            
        

        marker_fcf9753195753cf06d90b14858a9695c.bindPopup(popup_cd7d6892ea7a9c35fd30bf3d72219347)
        ;

        
    
    
            var marker_65db4f093b3b48366a982c4964afe90e = L.marker(
                [-64.78, 96.3],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_6ce39f472742b127a03e84d8b3a33cac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_65db4f093b3b48366a982c4964afe90e.setIcon(icon_6ce39f472742b127a03e84d8b3a33cac);
        
    
        var popup_df3c9d491ea9317ea59a0db3b17ef832 = L.popup({"maxWidth": "100%"});

        
            
                var html_f0d0d68e88911dd141a39e0a738a4337 = $(`<div id="html_f0d0d68e88911dd141a39e0a738a4337" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C30</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4136" target="_blank">More Info</a></div>`)[0];
                popup_df3c9d491ea9317ea59a0db3b17ef832.setContent(html_f0d0d68e88911dd141a39e0a738a4337);
            
        

        marker_65db4f093b3b48366a982c4964afe90e.bindPopup(popup_df3c9d491ea9317ea59a0db3b17ef832)
        ;

        
    
    
            var marker_c427a3a38d4d9a0471a35e4f85318ef4 = L.marker(
                [-64.69, 96.52],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_29c45980f556ae7b0597b4ddba2d6679 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_c427a3a38d4d9a0471a35e4f85318ef4.setIcon(icon_29c45980f556ae7b0597b4ddba2d6679);
        
    
        var popup_23b360ee10ff69423fafd296376104ba = L.popup({"maxWidth": "100%"});

        
            
                var html_2d6dfc48fe3ba1a330e1b0b63d176a98 = $(`<div id="html_2d6dfc48fe3ba1a330e1b0b63d176a98" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C31</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4137" target="_blank">More Info</a></div>`)[0];
                popup_23b360ee10ff69423fafd296376104ba.setContent(html_2d6dfc48fe3ba1a330e1b0b63d176a98);
            
        

        marker_c427a3a38d4d9a0471a35e4f85318ef4.bindPopup(popup_23b360ee10ff69423fafd296376104ba)
        ;

        
    
    
            var marker_0c66cfaa689ea04682ff372cb8511696 = L.marker(
                [-68.1, 153.54],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_312244dbe5ecb10c97d0d58df43880c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_0c66cfaa689ea04682ff372cb8511696.setIcon(icon_312244dbe5ecb10c97d0d58df43880c4);
        
    
        var popup_cfc8176823d6c54915d2895c75d6dd55 = L.popup({"maxWidth": "100%"});

        
            
                var html_4143c6c0b9f9865dab13bf744a90ba7f = $(`<div id="html_4143c6c0b9f9865dab13bf744a90ba7f" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C33</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4139" target="_blank">More Info</a></div>`)[0];
                popup_cfc8176823d6c54915d2895c75d6dd55.setContent(html_4143c6c0b9f9865dab13bf744a90ba7f);
            
        

        marker_0c66cfaa689ea04682ff372cb8511696.bindPopup(popup_cfc8176823d6c54915d2895c75d6dd55)
        ;

        
    
    
            var marker_669e034ae5e8636f62fefd7bcb069f16 = L.marker(
                [-68.26, 148.2],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_57029358392bb01938be24cfe95ee896 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_669e034ae5e8636f62fefd7bcb069f16.setIcon(icon_57029358392bb01938be24cfe95ee896);
        
    
        var popup_d0847d3b34fbfeec3372cc09c0c267cb = L.popup({"maxWidth": "100%"});

        
            
                var html_922ceea9b5b527476bad13d38a399042 = $(`<div id="html_922ceea9b5b527476bad13d38a399042" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C35</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4140" target="_blank">More Info</a></div>`)[0];
                popup_d0847d3b34fbfeec3372cc09c0c267cb.setContent(html_922ceea9b5b527476bad13d38a399042);
            
        

        marker_669e034ae5e8636f62fefd7bcb069f16.bindPopup(popup_d0847d3b34fbfeec3372cc09c0c267cb)
        ;

        
    
    
            var marker_3cc02d3358df77c81dcbfd3dfee4d115 = L.marker(
                [-69.43, 74.65],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_36223c2fa2b9f2e2f8baedb32f0af612 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_3cc02d3358df77c81dcbfd3dfee4d115.setIcon(icon_36223c2fa2b9f2e2f8baedb32f0af612);
        
    
        var popup_dda714604d7491f61d14e1db3219b9f0 = L.popup({"maxWidth": "100%"});

        
            
                var html_16b00bdeac98ad620f66f52b294aa263 = $(`<div id="html_16b00bdeac98ad620f66f52b294aa263" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D23</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4143" target="_blank">More Info</a></div>`)[0];
                popup_dda714604d7491f61d14e1db3219b9f0.setContent(html_16b00bdeac98ad620f66f52b294aa263);
            
        

        marker_3cc02d3358df77c81dcbfd3dfee4d115.bindPopup(popup_dda714604d7491f61d14e1db3219b9f0)
        ;

        
    
    
            var marker_cc06daf6fb1a27e66cdc5a0a502f3f13 = L.marker(
                [-67.27, 81.86],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_f1cb035f582f73a96e826feceed8a04a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_cc06daf6fb1a27e66cdc5a0a502f3f13.setIcon(icon_f1cb035f582f73a96e826feceed8a04a);
        
    
        var popup_38d3daae91cbcc35886623b53a5bb4f4 = L.popup({"maxWidth": "100%"});

        
            
                var html_dc41a9ec3ee4add04a95e5a05baf9c71 = $(`<div id="html_dc41a9ec3ee4add04a95e5a05baf9c71" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D27</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4145" target="_blank">More Info</a></div>`)[0];
                popup_38d3daae91cbcc35886623b53a5bb4f4.setContent(html_dc41a9ec3ee4add04a95e5a05baf9c71);
            
        

        marker_cc06daf6fb1a27e66cdc5a0a502f3f13.bindPopup(popup_38d3daae91cbcc35886623b53a5bb4f4)
        ;

        
    
    
            var marker_680ca90be64024a6588c9607c4352288 = L.marker(
                [-67.97, 41.71],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_b0aa2032631e89c1cecaeae269c8731b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_680ca90be64024a6588c9607c4352288.setIcon(icon_b0aa2032631e89c1cecaeae269c8731b);
        
    
        var popup_6a6c3fd477f7adf0ca31c68eb771abe6 = L.popup({"maxWidth": "100%"});

        
            
                var html_dccc86e4657333b0c0a4123f61507500 = $(`<div id="html_dccc86e4657333b0c0a4123f61507500" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B09G</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4122" target="_blank">More Info</a></div>`)[0];
                popup_6a6c3fd477f7adf0ca31c68eb771abe6.setContent(html_dccc86e4657333b0c0a4123f61507500);
            
        

        marker_680ca90be64024a6588c9607c4352288.bindPopup(popup_6a6c3fd477f7adf0ca31c68eb771abe6)
        ;

        
    
    
            var marker_06a8b8379016a3683832e44073f72133 = L.marker(
                [-65.98, 51.31],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_42327d815ffc534fea14504ecf9a8e85 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_06a8b8379016a3683832e44073f72133.setIcon(icon_42327d815ffc534fea14504ecf9a8e85);
        
    
        var popup_ee29ab97fb92d94cc18f5688d42c6267 = L.popup({"maxWidth": "100%"});

        
            
                var html_64e6a082f643c8af58bd25a607fcb4c5 = $(`<div id="html_64e6a082f643c8af58bd25a607fcb4c5" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B15AB</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4125" target="_blank">More Info</a></div>`)[0];
                popup_ee29ab97fb92d94cc18f5688d42c6267.setContent(html_64e6a082f643c8af58bd25a607fcb4c5);
            
        

        marker_06a8b8379016a3683832e44073f72133.bindPopup(popup_ee29ab97fb92d94cc18f5688d42c6267)
        ;

        
    
    
            var marker_02c7a11afb8d0c8e0af3be5b7bed3c79 = L.marker(
                [-74.54, -108.91],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_2dffd0a7994c14207691a8e8fb044c34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_02c7a11afb8d0c8e0af3be5b7bed3c79.setIcon(icon_2dffd0a7994c14207691a8e8fb044c34);
        
    
        var popup_76e9f95bc9fe1e3ddd8dda5b81478817 = L.popup({"maxWidth": "100%"});

        
            
                var html_ccf6b38242ae3aa0d191a708b91f53e9 = $(`<div id="html_ccf6b38242ae3aa0d191a708b91f53e9" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B29</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4127" target="_blank">More Info</a></div>`)[0];
                popup_76e9f95bc9fe1e3ddd8dda5b81478817.setContent(html_ccf6b38242ae3aa0d191a708b91f53e9);
            
        

        marker_02c7a11afb8d0c8e0af3be5b7bed3c79.bindPopup(popup_76e9f95bc9fe1e3ddd8dda5b81478817)
        ;

        
    
    
            var marker_26d38e8853ba3ac542a3e98414853bec = L.marker(
                [-68.13, 147.83],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_bfc4a6d5857765ad7b80109bc0812ad5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_26d38e8853ba3ac542a3e98414853bec.setIcon(icon_bfc4a6d5857765ad7b80109bc0812ad5);
        
    
        var popup_1f760d33585085d6d898289cddecdb54 = L.popup({"maxWidth": "100%"});

        
            
                var html_f27f96c84dc21885362ed523ac6661b1 = $(`<div id="html_f27f96c84dc21885362ed523ac6661b1" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C36</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4089" target="_blank">More Info</a></div>`)[0];
                popup_1f760d33585085d6d898289cddecdb54.setContent(html_f27f96c84dc21885362ed523ac6661b1);
            
        

        marker_26d38e8853ba3ac542a3e98414853bec.bindPopup(popup_1f760d33585085d6d898289cddecdb54)
        ;

        
    
    
            var marker_9ba5af16a6bd4ca7a76d893608a6be9f = L.marker(
                [-75.04, -101.27],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_486991dcba47dc45efd94b52d79672c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_9ba5af16a6bd4ca7a76d893608a6be9f.setIcon(icon_486991dcba47dc45efd94b52d79672c5);
        
    
        var popup_198b326076de7267cd45d69f7d7ea6b2 = L.popup({"maxWidth": "100%"});

        
            
                var html_6dc26612dbf7faa83166f8842844eb56 = $(`<div id="html_6dc26612dbf7faa83166f8842844eb56" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B46</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_4031" target="_blank">More Info</a></div>`)[0];
                popup_198b326076de7267cd45d69f7d7ea6b2.setContent(html_6dc26612dbf7faa83166f8842844eb56);
            
        

        marker_9ba5af16a6bd4ca7a76d893608a6be9f.bindPopup(popup_198b326076de7267cd45d69f7d7ea6b2)
        ;

        
    
    
            var marker_35efd232ecc64c189004fa330a0c4b6e = L.marker(
                [-15.78, -71.85],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_1e216ee2eb133288b2478288fb771c01 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_35efd232ecc64c189004fa330a0c4b6e.setIcon(icon_1e216ee2eb133288b2478288fb771c01);
        
    
        var popup_ced2849a7a8053a284172d09f44eff44 = L.popup({"maxWidth": "100%"});

        
            
                var html_a31fb2ed0472ca3dd3163fa0f92ce1b2 = $(`<div id="html_a31fb2ed0472ca3dd3163fa0f92ce1b2" style="width: 100.0%; height: 100.0%;"><strong>Sabancaya Volcano, Peru</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2654" target="_blank">More Info</a></div>`)[0];
                popup_ced2849a7a8053a284172d09f44eff44.setContent(html_a31fb2ed0472ca3dd3163fa0f92ce1b2);
            
        

        marker_35efd232ecc64c189004fa330a0c4b6e.bindPopup(popup_ced2849a7a8053a284172d09f44eff44)
        ;

        
    
    
            var marker_3c29700257c1b3e687db99b44843979f = L.marker(
                [-67.0, 81.633],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_568bf9620c59899a049971e156768168 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_3c29700257c1b3e687db99b44843979f.setIcon(icon_568bf9620c59899a049971e156768168);
        
    
        var popup_a589d3439f78bf1fd6462a9abbc7c888 = L.popup({"maxWidth": "100%"});

        
            
                var html_5ac2151e7e78eaa9fe3236fa7e65f5b3 = $(`<div id="html_5ac2151e7e78eaa9fe3236fa7e65f5b3" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D15B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2871" target="_blank">More Info</a></div>`)[0];
                popup_a589d3439f78bf1fd6462a9abbc7c888.setContent(html_5ac2151e7e78eaa9fe3236fa7e65f5b3);
            
        

        marker_3c29700257c1b3e687db99b44843979f.bindPopup(popup_a589d3439f78bf1fd6462a9abbc7c888)
        ;

        
    
    
            var marker_6288d8be8ba7a765ecd541fd6f394c8e = L.marker(
                [-66.7, 81.9167],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_eeb5664583b01c06445d7c82beca16b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_6288d8be8ba7a765ecd541fd6f394c8e.setIcon(icon_eeb5664583b01c06445d7c82beca16b2);
        
    
        var popup_8b17b528e3a984a77dd0471d00a4c4a8 = L.popup({"maxWidth": "100%"});

        
            
                var html_5bd0799a8e1442b61380177a0cdcd0d4 = $(`<div id="html_5bd0799a8e1442b61380177a0cdcd0d4" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D15A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2870" target="_blank">More Info</a></div>`)[0];
                popup_8b17b528e3a984a77dd0471d00a4c4a8.setContent(html_5bd0799a8e1442b61380177a0cdcd0d4);
            
        

        marker_6288d8be8ba7a765ecd541fd6f394c8e.bindPopup(popup_8b17b528e3a984a77dd0471d00a4c4a8)
        ;

        
    
    
            var marker_f658f143b376a31b8b407cce7fa9188c = L.marker(
                [-75.8853, -41.4727],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_af9e989da4f4cf5b88f1182109a48f34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_f658f143b376a31b8b407cce7fa9188c.setIcon(icon_af9e989da4f4cf5b88f1182109a48f34);
        
    
        var popup_cb766b921982ecfb1cabb8f9aa8ca7b1 = L.popup({"maxWidth": "100%"});

        
            
                var html_57dceebcea591a26e07d43b95c8fb5cd = $(`<div id="html_57dceebcea591a26e07d43b95c8fb5cd" style="width: 100.0%; height: 100.0%;"><strong>Iceberg A23A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2734" target="_blank">More Info</a></div>`)[0];
                popup_cb766b921982ecfb1cabb8f9aa8ca7b1.setContent(html_57dceebcea591a26e07d43b95c8fb5cd);
            
        

        marker_f658f143b376a31b8b407cce7fa9188c.bindPopup(popup_cb766b921982ecfb1cabb8f9aa8ca7b1)
        ;

        
    
    
            var marker_5213058d4a1bcd90fde867ebfc11c1eb = L.marker(
                [-74.2006, -108.5265],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_91698fc6c4f6a91e8b8284e829193814 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_5213058d4a1bcd90fde867ebfc11c1eb.setIcon(icon_91698fc6c4f6a91e8b8284e829193814);
        
    
        var popup_29b7754550e895df24b78fa35af014a7 = L.popup({"maxWidth": "100%"});

        
            
                var html_0e71527c97b953a97b5ba060a8ce4ab1 = $(`<div id="html_0e71527c97b953a97b5ba060a8ce4ab1" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B22A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2736" target="_blank">More Info</a></div>`)[0];
                popup_29b7754550e895df24b78fa35af014a7.setContent(html_0e71527c97b953a97b5ba060a8ce4ab1);
            
        

        marker_5213058d4a1bcd90fde867ebfc11c1eb.bindPopup(popup_29b7754550e895df24b78fa35af014a7)
        ;

        
    
    
            var marker_0a8267fe13d1870108999c0bf9bd79ba = L.marker(
                [-67.6323, 146.7084],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_34528f397b1bf2cfbb32b4b8f9234d50 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_0a8267fe13d1870108999c0bf9bd79ba.setIcon(icon_34528f397b1bf2cfbb32b4b8f9234d50);
        
    
        var popup_643e0b46d71030e094174e60553fb9dc = L.popup({"maxWidth": "100%"});

        
            
                var html_ebdf3791a6656c95fb23ccc0ec67ade9 = $(`<div id="html_ebdf3791a6656c95fb23ccc0ec67ade9" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C15</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2876" target="_blank">More Info</a></div>`)[0];
                popup_643e0b46d71030e094174e60553fb9dc.setContent(html_ebdf3791a6656c95fb23ccc0ec67ade9);
            
        

        marker_0a8267fe13d1870108999c0bf9bd79ba.bindPopup(popup_643e0b46d71030e094174e60553fb9dc)
        ;

        
    
    
            var marker_769f0b2c495b476f709ab56afdc16575 = L.marker(
                [-66.366, 143.3638],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_e887cf4d7122debae84712f1a75012d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_769f0b2c495b476f709ab56afdc16575.setIcon(icon_e887cf4d7122debae84712f1a75012d5);
        
    
        var popup_bf7c8fc1066b4d8c7086946909f5da48 = L.popup({"maxWidth": "100%"});

        
            
                var html_24108da93c33d1ad882df2a2d1f01f3e = $(`<div id="html_24108da93c33d1ad882df2a2d1f01f3e" style="width: 100.0%; height: 100.0%;"><strong>Iceberg B09B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2878" target="_blank">More Info</a></div>`)[0];
                popup_bf7c8fc1066b4d8c7086946909f5da48.setContent(html_24108da93c33d1ad882df2a2d1f01f3e);
            
        

        marker_769f0b2c495b476f709ab56afdc16575.bindPopup(popup_bf7c8fc1066b4d8c7086946909f5da48)
        ;

        
    
    
            var marker_d975a9c438b5f55938b09e39fc32068d = L.marker(
                [-69.2625, 36.9008],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_da6106fde297ac227b4c425194e60c8f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_d975a9c438b5f55938b09e39fc32068d.setIcon(icon_da6106fde297ac227b4c425194e60c8f);
        
    
        var popup_10b8984e829485562dc742c6765343dd = L.popup({"maxWidth": "100%"});

        
            
                var html_4baa8e8c78f64dc739dad420a556e7bb = $(`<div id="html_4baa8e8c78f64dc739dad420a556e7bb" style="width: 100.0%; height: 100.0%;"><strong>Iceberg D20A</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2879" target="_blank">More Info</a></div>`)[0];
                popup_10b8984e829485562dc742c6765343dd.setContent(html_4baa8e8c78f64dc739dad420a556e7bb);
            
        

        marker_d975a9c438b5f55938b09e39fc32068d.bindPopup(popup_10b8984e829485562dc742c6765343dd)
        ;

        
    
    
            var marker_f62376951c64815da4e16ea3a955898c = L.marker(
                [-64.9955, 96.18],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_ef579c3b948a2ae6b588ef9bf5766cea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkblue", "prefix": "glyphicon"}
            );
            marker_f62376951c64815da4e16ea3a955898c.setIcon(icon_ef579c3b948a2ae6b588ef9bf5766cea);
        
    
        var popup_7f5d3a2a9433cb8022274f9cc952dac1 = L.popup({"maxWidth": "100%"});

        
            
                var html_ac65b4700604a2ed58efad67856521fb = $(`<div id="html_ac65b4700604a2ed58efad67856521fb" style="width: 100.0%; height: 100.0%;"><strong>Iceberg C21B</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_2997" target="_blank">More Info</a></div>`)[0];
                popup_7f5d3a2a9433cb8022274f9cc952dac1.setContent(html_ac65b4700604a2ed58efad67856521fb);
            
        

        marker_f62376951c64815da4e16ea3a955898c.bindPopup(popup_7f5d3a2a9433cb8022274f9cc952dac1)
        ;

        
    
    
            var marker_47fa6baeb107fb1a3a2e419a9ce104cc = L.marker(
                [14.473, -90.88],
                {}
            ).addTo(map_0a1222ec25c27c4539778c2f24934c3c);
        
    
            var icon_4e3f1e570ba8f5d35cd3f563724f707c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            marker_47fa6baeb107fb1a3a2e419a9ce104cc.setIcon(icon_4e3f1e570ba8f5d35cd3f563724f707c);
        
    
        var popup_98436d119e05daf1b1097f1bfe59653a = L.popup({"maxWidth": "100%"});

        
            
                var html_ecbaecfe0bc216b7a646a2b9a8c27293 = $(`<div id="html_ecbaecfe0bc216b7a646a2b9a8c27293" style="width: 100.0%; height: 100.0%;"><strong>Fuego Volcano, Guatemala</strong><br><br><a href="https://eonet.gsfc.nasa.gov/api/v2.1/events/EONET_980" target="_blank">More Info</a></div>`)[0];
                popup_98436d119e05daf1b1097f1bfe59653a.setContent(html_ecbaecfe0bc216b7a646a2b9a8c27293);
            
        

        marker_47fa6baeb107fb1a3a2e419a9ce104cc.bindPopup(popup_98436d119e05daf1b1097f1bfe59653a)
        ;

        
    
</script>
</html>