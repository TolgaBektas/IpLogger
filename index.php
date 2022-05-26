<?php
$ch = curl_init('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR'] . '?lang=en');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
$result = curl_exec($ch);
$data = json_decode($result);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ip logger</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="card mt-5" style="width: 18rem;">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Your ip: <?php echo $data->query ?></li>
                        <li class="list-group-item">Your country: <?php echo $data->country ?></li>
                        <li class="list-group-item">Your city: <?php echo $data->regionName ?></li>
                        <li class="list-group-item">Your zip code: <?php echo $data->zip ?></li>
                        <li class="list-group-item">Your time zone: <?php echo $data->timezone ?></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>