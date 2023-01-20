<?php

namespace App\Models;

use CodeIgniter\Model;

class NeracaModel extends Model
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

    public function filterbytanggal($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->select('*');
    $builder->join('tb_akun', 'tb_akun.no_akun = tb_ju.no_akun');
    $builder->orderBy('id_ju', 'ASC');
    $builder->where('month(tb_ju.created_at)', $bulan); 
    $builder->where('year(tb_ju.created_at)', $tahun); 
    $query = $builder->get();
    return $query;  
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

    public function sumPemasukandebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 4101);
    $query = $builder->get();
    return $query->getRow()->total;  
     
 
    }
    
    public function sumPemasukandebitbybulan($bulan,$tahun)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_ju');
        $builder->selectsum('total');
        $builder->where('keterangan', 'debit'); 
        $builder->where('no_akun', 4101);
        $builder->where('month(created_at)', $bulan); 
        $builder->where('year(created_at)', $tahun);  
        $query = $builder->get();
        return $query->getRow()->total;  
    }

    public function sumPemasukankredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit');
    $builder->where('no_akun', 4101);
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPemasukankreditbybulan($bulan,$tahun)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_ju');
        $builder->selectsum('total');
        $builder->where('keterangan', 'kredit');
        $builder->where('no_akun', 4101);
        $builder->where('month(created_at)', $bulan); 
        $builder->where('year(created_at)', $tahun);  
        $query = $builder->get();
        return $query->getRow()->total;
    }

    public function sumPeralatandebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 2101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPeralatandebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 2101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPeralatankredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 2101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPeralatankreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 2101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPersediaandebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 2102);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPersediaandebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 2102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPersediaankredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 2102);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPersediaankreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 2102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumIklandebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5103);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumIklandebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5103);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumIklankredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5103);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumIklankreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5103);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumGajidebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumGajidebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumGajikredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumGajikreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumListrikdebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5102);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumlistrikdebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 5102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumListrikkredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5102);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumlistrikkreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 5102);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPiutangdebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 3101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPiutangdebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('no_akun', 3101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumPiutangkredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 3101);
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumPiutangkreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_pengeluaran');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit'); 
    $builder->where('no_akun', 3101);
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }
 
    public function sumdebit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumdebitbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'debit'); 
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;  
    }

    public function sumkredit()
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit');
    $query = $builder->get();
    return $query->getRow()->total;
    }

    public function sumkreditbybulan($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->selectsum('total');
    $builder->where('keterangan', 'kredit');
    $builder->where('month(created_at)', $bulan); 
    $builder->where('year(created_at)', $tahun); 
    $query = $builder->get();
    return $query->getRow()->total;
    }
    
}