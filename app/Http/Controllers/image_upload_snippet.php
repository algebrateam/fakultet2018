<?php

  try {
  
            if (Input::hasFile('slika')) {
                // Ovo istoradi, alteranativa je dolje...
                /*
                  $request->file('photo')->move(
                  base_path() . '/public/slike-studenata/', 'maja.jpg'
                  );
                 */
                $imageName = $student->mbrStud;
                $imageExtension = $request->photo->getClientOriginalExtension();
                $request->photo->move(public_path('slike-studenata'), $imageName . "." . $imageExtension);
// RESIZE SLIKE I KREIRANJE THUMBNAILA
                // Get new sizes
                $filename = public_path('slike-studenata') . DIRECTORY_SEPARATOR . $imageName . "." . $imageExtension; //'test.jpg';
                list($width, $height) = getimagesize($filename);
// generate thumbnail
                $newwidth = 100;
                $newheight = $height * ($newwidth / $width);
// Load
                $thumb = imagecreatetruecolor($newwidth, $newheight);
                $source = imagecreatefromjpeg($filename);
// Resize
                imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                imagejpeg($thumb, public_path('slike-studenata') . DIRECTORY_SEPARATOR . 'thumb_' . $imageName . "." . $imageExtension, 75);
           
                $newwidth = 400;
                $newheight = $height * ($newwidth / $width);
// Load
                $thumb = imagecreatetruecolor($newwidth, $newheight);
                $source = imagecreatefromjpeg($filename);
// Resize
                imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
//Sacuvaj resizanu sliku
                imagejpeg($thumb, public_path('slike-studenata') . DIRECTORY_SEPARATOR . $imageName . "." . $imageExtension, 75);
                
            }
            if (file_exists(public_path('slike-studenata' . DIRECTORY_SEPARATOR . $student->mbrStud . ".jpg"))) {
                $student->slikaStud = 1;
            } else {
                $student->slikaStud = 0;
            }
            $student->save();
            } catch (Exception $e) {
            // Ukoliko upload ne odradi javi poruku
            Session::flash('message', 'Student je kreiran ali nije uspio upload slike: '.$e->getMessage());
            return Redirect::to('studenti');
}