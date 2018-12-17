<?php
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo "file is valid, and uploaded\n";

}else{
echo "attack!!";

}

echo "here is more debugging info ";
print_r($_FILES);

print"</pre>"

?>
