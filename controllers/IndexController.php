<?php

class IndexController extends Controller
{
    public function index()
    {
        $this->viewRender('index');
    }

    public function upload()
    {
        if (isset($_POST['uploadImage'])) {
            if (!empty($_FILES['image']['name'])) {
                $array = uploadImage($_FILES);
                if (!empty($array['src'])) {
                    $image['original'] = $array['name'];
                    $paff = 'public/upload/' . $array['name'];
                    $sourceImage = imagecreatefromjpeg($paff);
                    $oldWidth = imagesx($sourceImage);
                    $oldHeight = imagesy($sourceImage);
                    $resizedImage = imagecreatetruecolor(200, 100);
                    imagecopyresized($resizedImage, $sourceImage, 0, 0, 10, 20, 200, 100, $oldWidth, $oldHeight);
                    $resizedImagePath1 = 'public/upload/false/'. $array['name'];
                    $resizedImagePath2 = 'false/'. $array['name'];
                    imagejpeg($resizedImage, $resizedImagePath1);
                    $image['new'] = $resizedImagePath2;
                    $this->viewRender('show', $image);
                } else {
                    redirect('');
                }
            } else {
                redirect('');
            }
            unset($_POST);
            unset($_FILES);
        } else {
            redirect('error');
        }
    }
}