<?php

        $increment = 0; 
        foreach ($request->file('detail_image') as $detail_image) {
            $filesName = time().$increment.'.'.$detail_image->getClientOriginalExtension();
            $detail_image->move(public_path('../Apartment photoes'), $filesName);
           
            $increment++;
        }
?>