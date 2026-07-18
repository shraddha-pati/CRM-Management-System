<?php
namespace App\Controllers;
use App\Models\CmsModel;

class CmsMaster extends BaseController
{
    public function list()
    {
        $objcall= new CmsModel();
        $data['companydata']=$objcall->findAll();
        //print_r( $data['companydata']);exit;
        
        echo view('/Admin/header');
        echo view('Admin/company/companylist',$data);
    }

    public function edit($id=null)
    {
        $objcall= new CmsModel();
        $data['companydata']=$objcall->where('id',$id)->first();

        echo view('Admin/header');
        echo view('Admin/company/companyedit',$data);
        echo view('Admin/footer');


    }
    
    public function update()
{
    $id = $this->request->getVar('id');

    $validationRule = $this->validate([
        'name' => 'required',
        'cinno' => 'required',
        'email1' => 'required|valid_email',
        'email2' => 'required|valid_email',
        'phonenum1' => 'required',
        'phonenum2' => 'required',
        'ceoname' => 'required',
        'ctoname' => 'required',
        'address' => 'required',
    ]);

    if (!$validationRule) {
        return redirect()->to(base_url('/Admin/companyedit/edit/') . $id)->with('error', 'Validation Failed');
    }

    $CmsModel = new CmsModel();
    $company = $CmsModel->find($id);

    $companyData = [
        'name' => $this->request->getVar('name'),
        'cinno' => $this->request->getVar('cinno'),
        'email1' => $this->request->getVar('email1'),
        'email2' => $this->request->getVar('email2'),
        'phonenum1' => $this->request->getVar('phonenum1'),
        'phonenum2' => $this->request->getVar('phonenum2'),
        'ceoname' => $this->request->getVar('ceoname'),
        'ctoname' => $this->request->getVar('ctoname'),
        'address' => $this->request->getVar('address')
    ];

    $uploadPath = 'Uploads/CmsMaster/' . $id . '/';
    
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $imageFiles = [
        'logo' => $this->request->getFile('logo'),
        'headerimage' => $this->request->getFile('headerimage'),
        'footerimage' => $this->request->getFile('footerimage'),
        'backgroundimage' => $this->request->getFile('backgroundimage'),
        'companystamp1' => $this->request->getFile('companystamp1'),
        'companystamp2' => $this->request->getFile('companystamp2')
    ];

    foreach ($imageFiles as $key => $image) {
        if ($image->isValid() && !$image->hasMoved()) {
           
            if (!empty($company[$key])) {
                $oldImagePath = $uploadPath . $company[$key];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

          
            $newFileName = $key . '.' . $image->getClientExtension();
            $image->move($uploadPath, $newFileName);

            $companyData[$key] = $newFileName;
           //print_r($companyData[$key]);exit;
        }
    }

    $CmsModel->update($id, $companyData);

    return redirect()->to(base_url('/Admin/companylist/list'))->with('success','<b style="color:green;">Company Updated Successfully!');
}

   
    }

