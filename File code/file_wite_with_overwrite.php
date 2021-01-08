$myfile = fopen("userMaskNumbers.txt", "a+") or die("Unable to open file!");
fwrite($myfile,$address."\n");
