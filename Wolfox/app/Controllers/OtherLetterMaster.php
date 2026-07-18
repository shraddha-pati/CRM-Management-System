<?php

namespace App\Controllers;

use App\Models\OtherLetterModel;

class OtherLetterMaster extends BaseController
{
    public function add()
    {
        echo view('/Student/Header');
        echo view('/Student/otherletter');
       
    }

    public function save()
    {

        $Name = $this->request->getvar('Name'); 

        $Image = $this->request->getFile('Image');
        //print_r($Image);
       /// exit;



        if ($Image->isvalid()) {
            $img_ext = $Image->getClientExtension();
            //exit;



            $letters = [
                'name' => $Name,
                'Image' => 'letter.' . $img_ext
            ];
            //print_r($letters);
            //exit;

            $OtherLetterModel = new OtherLetterModel();

            $OtherLetterModel->insert($letters);
            $letters = $OtherLetterModel->getInsertID();

            if (!is_dir('uploads/otherletter/' . $letters)) {
                mkdir('./uploads/otherletter/' . $letters, 0777, TRUE);
            }
            $Image->move("./uploads/otherletter/" . $letters, 'letter.' . $img_ext);


            if ($letters) {
                session()->setFlashdata('success', '<b style="color:green;">Letter added Successfully!</b>');
                return redirect()->to(base_url('/student/OtherLetter/Add'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/student/OtherLetter/Add'));
            }

           
        }
    }

    // public function list()
    // {
    //     $OtherLetterModel = new OtherLetterModel();
    //     $data['letterdata'] = $OtherLetterModel->findall();

    //     echo view('/Student/OtherLetter/otherletterlist', $data);
    // }

    // public function delete($id = null)
    // {

    //     $OtherLetterModel = new OtherLetterModel();
    //     if ($id) {
    //         $data = $OtherLetterModel->where('id', $id)->delete($id);
    //         if ($data) {
    //             echo '<script type="text/javascript">';
    //             echo 'alert("letter Deleted Successfully!");';
    //             echo 'window.location.href = "' . base_url('/student/OtherLetter/list') . '"';
    //             echo '</script>';
    //         } else {
    //             echo '<script type="text/javascript">';
    //             echo 'alert("Error Occured!");';
    //             echo 'window.location.href = "' . base_url('/student/OtherLetter/list') . '"';
    //             echo '</script>';
    //         }
    //     }
    // }
}
