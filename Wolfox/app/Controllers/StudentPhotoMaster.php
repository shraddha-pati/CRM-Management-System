<?php
namespace App\Controllers;
use CodeIgniter\HTTP\Files\UploadedFile;
use App\Models\ImageModel;
use App\Models\BatchModel;
use App\Models\AdmissionModel;

class StudentPhotoMaster extends BaseController
{
    public function index()
    {

        $session=session();
        $studentid=$session->get('id');
    //print_r( $studentid);exit;

       $AdmissionModel = new AdmissionModel();
       $BatchModel = new BatchModel();
       $studentdata=$AdmissionModel->select('batchid')->where('id', $studentid)->first();
     // print_r($studentdata);exit;

       $batchid = $studentdata['batchid'];
       $data['BatchData'] = $BatchModel->where('batchid', $batchid)->findAll();
       
       // $data['BatchData'] = $BatchModel->findAll();
       echo view('/Student/Header',$data);

        echo view('/Student/Photo',$data);
    }

 
    
    
    public function save()
{
    $files = $this->request->getFiles();
    $date = $this->request->getVar('date');
    $Category = $this->request->getVar('Category');
    $imageModel = new ImageModel();
    $batchModel = new BatchModel();
    $session = session();
    $studentid = $session->get('id');
    $BatchTime = $this->request->getVar('BatchTime');


    // if ($BatchTime === "all") {
    //     $batches = $batchModel->findAll();
    // } else {
    //     $batches = [['batchid' => $BatchTime]];
    // }

    if ($files) {
        foreach ($files['images'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $extension = $file->getExtension();
                $fileSize = $file->getSize();

                $newName = 'image_' . uniqid() . '.' . $extension;
                $tempDir = 'uploads/temp'; 
                $filePath = $tempDir . '/' . $newName;

                
                if (!is_dir($tempDir)) {
                    mkdir($tempDir, 0777, true);
                }

                $file->move($tempDir, $newName);

            
                if ($fileSize > (3 * 1024 * 1024)) {
                    \Config\Services::image()
                        ->withFile($filePath)
                        ->resize(1200, 800, true, 'height')
                        ->save($filePath, 70);
                }

                
                // foreach ($batches as $batch) {
                //     $batchid = $batch['batchid'];

                    $batchDir = 'uploads/photo/' . $BatchTime;
                    $batchFilePath = $batchDir . '/' . $newName;

                  
                    if (!is_dir($batchDir)) {
                        mkdir($batchDir, 0777, true);
                    }

                  
                    if (!file_exists($batchFilePath)) {
                        copy($filePath, $batchFilePath);
                    }

                    $imageModel->insert([
                        'studentid' => $studentid,
                        'file_name' => '', 
                        'file_path' => '', 
                        'batch' => $BatchTime,
                        'date' => $date,
                        'Category' => $Category,
                        'photostatus'=>1
                    ]);

                
                    $insertedId = $imageModel->getInsertID();

     
                    $imageModel->update($insertedId, [
                        'file_name' => $newName,
                        'file_path' => $batchFilePath
                    ]);
                // }

                
                unlink($filePath);
            }
        }
    }


    session()->setFlashdata('success', '<b style="color:green;">Photo Added Successfully!</b>');
    return redirect()->to(base_url('/Student/memories'));
    
        // echo '<script type="text/javascript">';
        // echo 'alert("Photo Added Successfully!");';
        // echo 'window.location.href = "' . base_url('/Student/memories') . '"';
        // echo '</script>';
    }


    public function memories()
    {
        $session = session();
        $studentid = $session->get('studentid');  
        $batch = $session->get('batchid'); 
    
        $imageModel = new ImageModel();
        
     
        $image = $imageModel
            ->select('images.*, batch.*')   
            ->join('batch', 'images.batch = batch.batchid', 'left')
            ->whereIn('batch',[$batch,0])
            ->whereIn('photostatus',[0,2]);
    
      
    
        $data['image'] = $image->findAll();
        //print_r( $data['image']);exit;
    
        echo view('/Student/Header', $data);
        echo view('/Student/memories', $data);
    }
    
    
}
?>