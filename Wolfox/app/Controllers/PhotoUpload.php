<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Files\UploadedFile;
use App\Models\ImageModel;
use App\Models\BatchModel;

class Photoupload extends BaseController
{
    public function index()
    {
        $BatchModel = new BatchModel();

        // Fetch all batch data
        $data['BatchData'] = $BatchModel->findAll();

        echo view('/Admin/Header');
        echo view('/Admin/photoupload/photoupload', $data);
        echo view('/Admin/Footer');
    }

    public function save()
    {
        $files = $this->request->getFiles();
        $date = $this->request->getVar('date');
        $Category = $this->request->getVar('Category');
        $imageModel = new ImageModel();
        $BatchTime = $this->request->getVar('BatchTime');
        $savedFiles = [];


        if ($files) {
            foreach ($files['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $extension = $file->getExtension();
                    $fileSize = $file->getSize();

                    $imageModel->insert([
                        'file_name' => 'temp',
                        'file_path' => '',
                        'batch' => $BatchTime,
                        'date' => $date,
                        'Category' => $Category,

                    ]);

                    $insertedId = $imageModel->getInsertID();

                    $newName = 'image' . $insertedId . '.' . $extension;
                    $uploadDir = 'uploads/photo/' . $BatchTime;
                    $filePath = $uploadDir . '/' . $newName;


                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }


                    $file->move($uploadDir, $newName);


                    if ($fileSize > (3 * 1024 * 1024)) {
                        \Config\Services::image()
                            ->withFile($filePath)
                            ->resize(1200, 800, true, 'height')
                            ->save($filePath, 70);
                    }


                    $imageModel->update($insertedId, [
                        'file_name' => $newName,
                        'file_path' => $filePath
                    ]);


                    $savedFiles[] = $filePath;
                }
            }
        }

        session()->setFlashdata('success', '<b style="color:green;">Photo Upload Successfully!</b>');
        return redirect()->to(base_url('/Admin/photoupload/list'));
    }




    public function list()
    {
        $imageModel = new ImageModel();
        $data['image'] = $imageModel
            ->select('images.*, batch.*')
            ->join('batch', 'images.batch = batch.batchid', 'left')
            ->orderBy('id', 'DESC')
            ->where('photostatus', 0)



            ->findAll();

        //print_r($data['image'] );exit;
        echo view('/Admin/Header');
        echo view('/Admin/photoupload/list', $data);
        echo view('/Admin/Footer');
    }

    public function photolist()
    {
        $imageModel = new ImageModel();
        $data['image'] = $imageModel
            ->select('images.*, batch.*')
            ->join('batch', 'images.batch = batch.batchid', 'left')
            ->where('photostatus !=', 0)

            ->findAll();

        //print_r($data['image'] );exit;
        echo view('/Admin/Header');
        echo view('/Admin/photoupload/photolist', $data);
        echo view('/Admin/Footer');
    }



    public function verifyPhotos()
    {

        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $remark = $this->request->getVar('remark');

        $ImageData = [
            'photostatus' => $status,
            'photoremark' => $remark,
        ];

        // print_r($ImageData);
        //exit;

        $ImageModel = new ImageModel();

        $update = $ImageModel->update($id, $ImageData);

        if ($update) {
            session()->setFlashdata('update', '<b style="color:green;"> Photo Status Updated Successfully!</b>');
            return redirect()->to(base_url('/Admin/photoupload/photolist'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/photoupload/photolist'));
        }
    }


    public function delete($id = null)
    {

        $imageModel = new ImageModel();
        $image = $imageModel->find($id);

        if ($id) {
            $status = $imageModel->where('id', $id)->delete($id);

            if ($status) {

                session()->setFlashdata('success', '<b style="color:green;">Photo Delete Successfully!</b>');
                return redirect()->to(base_url('/Admin/photoupload/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/ClientMaster/Add'));
            }
        }
    }
}
