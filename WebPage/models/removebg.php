<?php
require_once '../vendor/autoload.php';

function removebg($img){
$client = new GuzzleHttp\Client();
$res = $client->post('https://api.remove.bg/v1.0/removebg', [
    'multipart' => [
        [
            'name'     => 'image_file',
            'contents' => fopen(''.$img.'', 'r')
        ],
        [
            'name'     => 'size',
            'contents' => 'auto'
        ]
    ],
    'headers' => [
        'X-Api-Key' => '7oFSA1aAQZfM38GJdydBhnTU'
    ]
]);
$fp = fopen("out.png", "wb");
fwrite($fp, $res->getBody());
$img= $res->getbody();
 echo '<img src="data:image/png;base64,'.base64_encode($img).'" height="200" width="200" alt="mon image" title="image"/>';
return base64_encode($img);
fclose($fp);
}
$img = removebg("../assets/img/contenu/1601861657.jpeg");
?>