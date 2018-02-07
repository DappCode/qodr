<?php

class RekapbulananController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

     // Pemasukan
     public function getAjaxPemasukanAction()
     {
         $pemasukan = new ViewPemasukanPerbulan();
         $json_data = $pemasukan->getDataPemasukan();
         die(json_encode($json_data));
     }

     // /Pemasukan


     // Pengeluaran
     public function getAjaxPengeluaranAction()
     {
         $pengeluaran = new ViewPengeluaranPerbulan();
         $json_data = $pengeluaran->getDataPengeluaran();
         die(json_encode($json_data));
     }

     // /Pengeluaran

     // Perkiraan Pemasukkan 
    public function getAjaxPenghasilanAction()
    {
        $penghasilan = new ViewPerkiraanPemasukanBulan();
        $json_data = $penghasilan->getDataPenghasilan();
        die(json_encode($json_data));
    }
    //  /Perkiraan Pemasukan
}

