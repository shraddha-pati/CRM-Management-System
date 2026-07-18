<?php

namespace App\Controllers;

use App\Models\DocumentModel;

class DocumentMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/Header');
        echo view('/Admin/Document/add');
        echo view('/Admin/Footer');
    }
    public function save()
    {
        // Get form data
        $filename = $this->request->getVar('filename');

        // Insert project data without file first to get ID
        $DocumentModel = new DocumentModel();
        $DocumentArray = [
            'filename' => $filename,
        ];
        //print_r($DocumentArray);exit;
        $insertedId = $DocumentModel->insert($DocumentArray);  // Insert project data and get ID

        if ($insertedId) {

            $file = $this->request->getFile('file');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $extension = $file->getExtension();


                $folderPath = 'uploads/Document/' . $insertedId;


                if (!is_dir($folderPath)) {
                    mkdir($folderPath, 0777, true);
                }

                $newName = ($filename) . '.' . $extension;

                $file->move($folderPath, $newName);

                $filePath =  $newName;
                $DocumentModel->update($insertedId, ['file' => $filePath]);
            }

            echo '<script type="text/javascript">';
            echo 'alert("Document Added Successfully!");';
            echo 'window.location.href = "' . base_url('/Admin/Document/list') . '";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Document Not Added Successfully!");';
            echo 'window.location.href = "' . base_url('/Admin/Document/add') . '";';
            echo '</script>';
        }
    }

    public function list(){
        $DocumentModel = new DocumentModel();
        $data['DocumentData'] = $DocumentModel
        ->orderBy('id','DESC')
        ->findAll();
        
        echo view('/Admin/Header');
        echo view('/Admin/Document/list', $data);
        echo view('/Admin/Footer');
    }
    public function delete($id = null)
    {
        $DocumentModel = new DocumentModel();
        $image = $DocumentModel->find($id);

        if ($id) {
            $status = $DocumentModel->where('id', $id)->delete($id);
            if ($status) {
                echo '<script type="text/javascript">'; 
                echo 'alert("Document Deleted Successfully!");'; 
                echo 'window.location.href = "' . base_url('/Admin/Document/list') . '";';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Error Occured!");'; 
                echo 'window.location.href = "' . base_url('/Admin/Document/list') . '";';
                echo '</script>';
            }
        }
    }
}
