<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheets -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <title><?= SITE_TITLE ?></title>
</head>
<body>
    <div class="container">
        <div class="map-wrapper">
            <input type="text" name="search" id="search" placeholder="میخوای کجا بری؟">
            <span class="search-icon"><i class="fas fa-search"></i></span>
            <!-- map container -->
            <div class="map-wrapper" id="map-wrapper"></div>
        </div>
    </div>
    <!-- javascript -->
    <script src="<?= BASE_URL ?>assets/js/app.js"></script>
</body>
</html>