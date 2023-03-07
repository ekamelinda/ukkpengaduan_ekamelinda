<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pengaduan extends Model{
    protected $table      = 'tbpengaduan';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_pengaduan';
     protected $allowedFileds = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
}