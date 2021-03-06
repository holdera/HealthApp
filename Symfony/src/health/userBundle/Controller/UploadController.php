<?php
//src/health/userBundle/Controller/UploadController.php

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use health\userBundle\Form\Model\Document;

class UploadController extends Controller
{
	public function uploadAction(Request $request)
	{
		if($request->getMethod() == 'POST')
		{
			$image = $request->files->get('img');
			$status = 'success';
			$uploadedURL='';
			$message='';
			if (($image instanceof UploadedFile) && ($image->getError() == '0')) 
			{
                if (($image->getSize() < 2000000000)) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        //Start Uploading File
                        
                      $document = new Document();
                      $document->setFile($image);
                      $document->setSubDirectory('uploads');
                      $document->processFile();
                      $uploadedURL= $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $image->getClientOriginalName();
                    } else {
                        $status = 'failed';
                        $message = 'Invalid File Type';
                    }
                } else {
                    $status = 'failed';
                    $message = 'Size exceeds limit';
                }
            } 
            else 
            {
                $status = 'failed';
                $message = 'File Error';
            }
            return $this->render('healthuserBundle:Recipe:addrecipe.html.twig',array('status'=>$status,'name'=>$message,'uploadedURL'=>$uploadedURL));
        } else {
            return $this->render('healthuserBundle:Recipe:addrecipe.html.twig');
        }
    }

}

?>
