<?php
$action = isset( $_GET['action'] ) ? $_GET['action'] : FALSE;

if( $action === 'render' )
{

    $image_file = 'house.jpg';
    $scale = 0.7;

    header('Content-Type: image/jpeg');

    $image = imagecreatefromjpeg($image_file);

    list($original_width, $original_height) = getimagesize($image_file);
    $new_width = $original_width * $scale;
    $new_height = $original_height * $scale;
    $new_image = imagescale($image, $new_width, $new_height);
    $new_image = imagerotate($new_image, 90, 0);
    imagestring($new_image, 5,5,5,'Copyright Author', 255);

    imagejpeg($new_image, null, 100);


    die('');

}

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Curso PHP Intermedio</title>
    <link href=
    "http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" rel=
    "stylesheet">
    <link href=
    'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="row">
        <div class="medium-5 large-3 columns"></div>
    </div>
    <div class="row column">
        <p class="lead">Manejo de imágenes</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <table>
          <thead>
            <tr>
              <th width="200">Acción</th>
              <th>Encabezado</th>
              <th width="150">Resultado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./index.php?action=render">Visualización</a></td>
              <td>Content-type: image/format</td>
              <td>Muestra imagen</td>
            </tr>
          </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js">
    </script> 
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js">
    </script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="https://intercom.zurb.com/scripts/zcom.js" type=
    "text/javascript">
    </script>
</body>
</html>