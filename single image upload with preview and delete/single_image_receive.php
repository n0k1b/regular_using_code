<?php
$image = time() . '.' . request()->image->getClientOriginalExtension();

$request->image->move(public_path('../image/product_image') , $image);
 $image = "image/product_image/" . $image;

 ?>