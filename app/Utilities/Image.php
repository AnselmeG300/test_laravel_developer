<?php 

namespace App\Utilities;


class Image 
{

    public static function recoveredImage($request)
    {  //dd($request['currentImage']);
        $path="img/products/";
        if(isset($request['currentFile'])) {  
            if(isset($_FILES['currentFile']) and $_FILES['currentFile']['error'] == 0) {

                if($_FILES['currentFile']['size'] <= 8000000) {

                    $infosfichier = pathinfo($_FILES['currentFile']['name']);

                    $extension = $infosfichier['extension'];

                    $extension_authorise = array('jpg', 'png', 'gif', 'jpeg');

                    if(in_array(strtolower($extension), $extension_authorise)) {

                            $tagName = $path.date('y-m-d-h-i-s').'.'.$extension;
                            move_uploaded_file($_FILES['currentFile']['tmp_name'], $tagName); 
                            $request['picture'] =  $tagName ;
                    } else {
                        $request['picture'] = $request['currentFile'];
                    }
                }else {
                    $request['picture'] = $request['currentFile'];
                }
            }else{
                $request['picture'] = $request['currentFile'];
            }
        }else{
            $request['picture'] = null;
        }
    }
}