<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://omdbapi.com', [
    'query' => [
        'apikey' => '9312c74f',
        's' => 'harry potter'
    ]
]);

$result = json_decode($response->getBody()->getContents(), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie</title>
</head>
<body>
    <?php foreach($result['Search'] as $movie) : ?>
    <ul>
        <li>Title : <?= $movie['Title']; ?></li>
        <li>Year : <?= $movie['Year']; ?></li>
        <li>
            <img src="<?= $movie['Poster']; ?>" width="80">
        </li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>