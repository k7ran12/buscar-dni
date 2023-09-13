
<html lang="es">
<head>
</head>
<body>   
</body>  
<meta name=robots content=noindex />
<style>body{margin:0;padding:0}</style>
<script src="../assets/js/jwplayer.js"></script>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
</script>
<div id="player"></div>
<script>
var playerInstance = jwplayer("player");

    playerInstance.setup({
        playlist: [{
            "sources": [
                {
                    "default": false,
                    "type": "dash",
                    "file": 'https://1011-vos.dtvott.com/DASH/manifest.mpd',
                    "drm": {
                        "clearkey": { "keyId": 'b9fc5a15382b35818904ecbeed545fd0', "key": '8b4d83e2c382780ca615ce6cd6754d79'}
                    },
                    "label": "0"
                }
            ]
        }],
        width: "100%",
        height: "100%",
        aspectratio: "16:9",
        autostart: false,
        cast: {},
        sharing: {}
    });
</script>
</html>
