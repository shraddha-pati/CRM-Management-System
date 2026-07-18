<?php

namespace App\Controllers;

use App\Models\ClientModel;

class ClientMaster extends BaseController
{
    public function add()
    {
        echo view('/Admin/header');
        echo view('/Admin/ClientMaster/clientmaster');
        echo view('/Admin/footer');
    }


    public function save()
    {

        $FullName = $this->request->getVar('FullName');

        $BusinessName = $this->request->getVar('BusinessName');
        $DomainName = $this->request->getVar('DomainName');
        $City = $this->request->getVar('City');

        $PhoneNo = $this->request->getVar('PhoneNo');
        $Projectname = $this->request->getVar('Projectname');
        $Description = $this->request->getVar('Description');

        $date = $this->request->getVar('date');



        $Client = [

            'fullname' => $FullName,
            'businessname' => $BusinessName,
            'domainname' => $DomainName,

            'city' => $City,

            'phoneNo' => $PhoneNo,
            'projectname' => $Projectname,
            'description' => $Description,

            'date' => $date


        ];

        $ClientModel = new ClientModel();
        $ClientModel->insert($Client); //exit;
        $data = $ClientModel->getInsertId();


        if ($Client) {
            session()->setFlashdata('success', '<b style="color:green;">Client Added Successfully!</b>');
            return redirect()->to(base_url('/Admin/ClientMaster/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/ClientMaster/Add'));
        }
    }

    public function list()
    {
        $ClientModel = new ClientModel();
        $data['clientdata'] = $ClientModel
            ->orderBy('id', 'DESC')
            ->findall();

        echo view('/Admin/header');
        echo view('/Admin/ClientMaster/clientlist', $data);
    }

    public function edit($id = null)


    {
        $ClientModel = new ClientModel();

        $data['clientdata'] = $ClientModel->WHERE('id', $id)->first();

        echo view('/Admin/header');
        echo view('/Admin/ClientMaster/clientedit', $data);
        echo view('/Admin/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');

        $FullName = $this->request->getVar('FullName');

        $BusinessName = $this->request->getVar('BusinessName');
        $DomainName = $this->request->getVar('DomainName');
        $City = $this->request->getVar('City');

        $PhoneNo = $this->request->getVar('PhoneNo');
        $Projectname = $this->request->getVar('Projectname');
        $Description = $this->request->getVar('Description');

        $date = $this->request->getVar('date');


        $Client = [

            'fullname' => $FullName,
            'businessname' => $BusinessName,
            'domainname' => $DomainName,

            'city' => $City,

            'phoneNo' => $PhoneNo,
            'projectname' => $Projectname,
            'description' => $Description,

            'date' => $date



        ];

        $ClientModel = new ClientModel();


        if ($ClientModel->update($id, $Client)) {

            session()->setFlashdata('success', '<b style="color:green;">Client Update Successfully!</b>');
            return redirect()->to(base_url('/Admin/ClientMaster/list'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/Admin/ClientMaster/Add'));
        }
    }

    public function delete($id = null)
    {

        $ClientModel = new ClientModel();
        if ($id) {
            $data = $ClientModel->where('id', $id)->delete($id);
            if ($data) {

                session()->setFlashdata('success', '<b style="color:green;">Client Delete Successfully!</b>');
                return redirect()->to(base_url('/Admin/ClientMaster/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
                return redirect()->to(base_url('/Admin/ClientMaster/Add'));
            }
        }
    }
}
