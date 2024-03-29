<?php
function redirect($url)
{
    header('location:' . DOM . $url);
    return true;
}
function uploadImage($file)
{
    $filename = $file['image']['name'];
    $array = [];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext != 'jpg') {
        $array['msg'] = 'Invalid image form';
    } else {
        if ($_FILES['image']['size'] <= UPLOAD_IMAGE_SIZE) {
            $imgname = md5(date("Y-m-d H:i:s") . $filename) . '.' . $ext;
            $array['src'] = START_PAFF . $imgname;
            $array['name'] = $imgname;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $array['src'])) {
                $array['msg'] = 'upload file';
            }
        } else {
            $array['msg'] = 'Invalid image size';
        }
    }
    return $array;
}