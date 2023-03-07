<?php 
namespace App\Controllers;


use App\Models\petugas;
class Petugascontroller extends BaseController{

    protected $petugass;

    function __construct()
    {
       $this->petugass = new Petugas();
    }

    public function index()
    {
        $data['petugas'] = $this->petugass->findAll();
        return view('Petugas_view', $data);
    }

    public function simpan()
    {
        $this->petugass->insert([
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
              
        ]);
        return redirect('petugas');
    }

      public function edit($id)
      {
        $data= array(
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        );
        $this->petugass->update($id,$data);
        session()->setFlashdata("message", "Data Berhasil Disimpan");
        return redirect('petugas');
      }


      public function delete($id)
      {
        $this->petugass->delete($id);
        session()->setFlashdata("message", "Data Berhasil Dihapus");
        return redirect('petugas');
      }
}