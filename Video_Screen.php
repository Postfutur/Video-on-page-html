<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SCREEN CAMERA</title>
    <link href="./Css/Video_Screen.css" rel="stylesheet">
    <script type="text/javascript" src="Js/Video_Screen.js"></script>

</head>

<body>
    <!-- Ideally these elements aren't created until it's confirmed that the
    client supports video/camera, but for the sake of illustrating the
    elements involved, they are created with markup (not JavaScript) -->
    <video id="video" width="100%" height="900px" autoplay="">
    </video>
    <div id="filter">
        <canvas id="canvas" width="100%" height="900px"></canvas>
    </div>
    <!-- Comment bellow line if needed to snapshot -->
    <div>
        <button id="snap">
            Snapshot
        </button>
    </div>
</body>

</html>