<?php 
namespace App\Models;

use CodeIgniter\Model;

class Tanggapan extends Model{
    protected $table      = 'undefined';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFileds = ['id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'];
}