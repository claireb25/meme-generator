<?php
$data = $_POST['save'];

$newName_m = uniqid();
$memeURL = "assets/medias/memes/".$newName_m.".jpg";

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);
file_put_contents($memeURL,$data);

require("models/model.php");

$title = $_POST['memeTitle'];
$id_picture = $_POST['id_picture'];
$result = addMeme($title, $memeURL, $newName_m, $id_picture);
if ($result == "true") {
    echo json_encode("true");
}

else {
    echo json_encode("false");
}




  
//header('Location: /meme-generator/edit-meme/'.$nom."&".$idImg); 