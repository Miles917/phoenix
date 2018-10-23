<?php
/**
 * Created by PhpStorm.
 * User: miles
 * Date: 10/22/18
 * Time: 8:17 PM
 */

namespace App\Http\Controllers;


class FileController
{
    public function getIndex()
    {
        //return View::Make('apps.fileCabinet.index');
        return view('listFiles');
    }


    public function postNewFile()
    {
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new FileCabinetUploadHandler();

    }


    public function getAllFilesJson()
    {
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new FileCabinetUploadHandler();

    }


    public function deleteCompanyFile()
    {
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new FileCabinetUploadHandler();

    }


    public function getCompanyFiles()
    {
        $fileArray = array();
        $dir = public_path() . '/uploads/';
        if (is_dir($dir))
        {
            if ($handle = opendir($dir))
            {
                while (false !== ($entry = readdir($handle)))
                {
                    if ($entry != "." && $entry != "..")
                    {
                        $stringExplode = explode(".", $entry);
                        if (isset($stringExplode[1]))
                        {
                            $dailyFile = new stdClass();
                            $stringExplode = explode(".", $entry);
                            $dailyFile->fileName = $entry;
                            $dailyFile->fullDirectory = $dir . $entry;
                            $dailyFile->urlLink = '/uploads/' . $entry;
                            $dailyFile->thumbNail = '/uploads/thumbnail/' . $entry;
                            $dailyFile->fileType = $stringExplode[1];
                            $dailyFile->locationUpload = Session::get('location_id');
                            $fileArray[] = $dailyFile;
                        }
                        else
                        {
                            //folder
                        }
                    }
                }
                closedir($handle);
            }
        }
        else
        {
            $fileArray = null;
        }
        return $fileArray;
    }


    public function getFileCabinetTable()
    {
        $dataTableArray = array();
        $allDocArray = $this->getCompanyFiles();
        //Construct blank Data Table
        if (empty($allDocArray))
        {
            $dataTableArray['data'][] = array('thumbnail' => 'none', 'fileName' => 'none', 'uploadLocation' => 'none', 'fileType' => 'none', 'Select' => 'none',);
        }
        else
        {
            foreach ($allDocArray as $document)
            {
                $createSelect = '<a href="' . asset($document->urlLink) . '" target="_blank" class="btn btn-primary btn-sm" role="button">Select</a>';
                if ($document->fileType == 'pdf')
                {
                    $createThumb = '<a href="' . asset($document->urlLink) . '" download="' . $document->fileName . '"><img src="' . asset("uploads/pdfLogo.jpg") . '" width="75px" height="75px"></a>';
                }
                else
                {
                    $createThumb = '<a href="' . asset($document->urlLink) . '" download="' . $document->fileName . '" data-gallery=""><img src="' . asset($document->thumbNail) . '"></a>';
                }
                $dataTableArray['data'][] = array('thumbnail' => $createThumb, 'fileName' => $document->fileName, 'uploadLocation' => $document->locationUpload, 'fileType' => $document->fileType, 'Select' => $createSelect);
            }
        }
        return json_encode($dataTableArray);
    }



}






