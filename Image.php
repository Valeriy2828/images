<?php

imagecreatefrompng('image1.png');
echo hash_file('md5', 'image1.png')." - first image."."<br>";

imagecreatefrompng('image2.png'); 	
echo hash_file('md5', 'image2.png')." - second image."."<br>";

echo "They are different.";



