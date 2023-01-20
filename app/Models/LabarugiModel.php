<?php

namespace App\Models;

use CodeIgniter\Model;

class LabarugiModel extends Model
{
    protected $table      = 'tb_ju';
    protected $primaryKey = 'id_ju';

    protected $allowedFields = ['nama_akun', 'no_akun'];

    protected $useTimestamps = true;

    public function getJurnalumum($no_trx = false)
    {
        if ($no_trx == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_ju');
            $query   = $builder->get();
            return $query;
        }
        return $this->where(['no_trx' => $no_trx])->first();
    }
    public function joinJurnalumum($no_trx = false)
    {
        if ($no_trx == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_ju');
            $builder->select('*');
            $builder->join('tb_akun', 'tb_akun.no_akun = tb_ju.no_akun');
            $builder->orderBy('created_at', 'ASC');
            $query = $builder->get();
            return $query;
        }
        return $this->where(['no_trx' => $no_trx])->first();
    }

    public function getAkun()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_akun');
        $query   = $builder->get();
        return $query;
    }
  
    public function sumKasdebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 1101);
    $query = $builder->get();
    return $query->getRow()->total; 
     
    }

    public function sumKasdebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 1101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total; 
     
    }

    public function sumKaskredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit');
    $builder->where('no_akun', 1101);
    $query = $builder->get();
    return $query->getRow()->total;
     
    }
 
    public function sumKaskreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit');
    $builder->where('no_akun', 1101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumPemasukan()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pemasukan');
    $builder->selectsum('total');
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }
    
    public function sumPemasukanbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pemasukan');
    $builder->selectsum('total');
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumPeralatan()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 2101);
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumPeralatanbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 2101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }


    public function sumPersediaan()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 2102);
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }
    public function sumPersediaanbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 2102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumBebaniklan()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5103);
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumBebaniklanbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5103);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumBebanGaji()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5101);
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumBebanGajibybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
     
 
    }

    public function sumBebanlistrik()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5102);
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumBebanlistrikbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 5102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPiutang()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 3101);
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPiutangbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('no_akun', 3101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    
 

    // ...
}