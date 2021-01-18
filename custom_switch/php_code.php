<?php
 $id = $request->id;
 $status =product::where('id', $id)->first()->status;
 if ($status == 1)
 {
     product::where('id', $id)->update(['status' => 0]);
 }
 else
 {
     product::where('id', $id)->update(['status' => 1]);
 }

?>