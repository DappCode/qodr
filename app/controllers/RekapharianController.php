<?php

class RekapharianController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if (!$this->session->has('auth')) {
            $this->response->redirect('login');
        }
    }

    // RAB
    public function getAjaxRabAction()
    {
        $viewRab = new KeuRab();
        $json_data = $viewRab->getDataRab();
        die(json_encode($json_data));
    }

    public function viewRabAction()
    {
        
        if ($this->request->isPost()) {
            $id = $this->request->getPost('id');
            $periode  = $this->request->getPost('periode');
            $nama_barang  = $this->request->getPost('nama_barang');
            $akun_id = $this->request->getPost('akun_id');
            $jml_barang = $this->request->getPost('jml_barang');
            $harga_satuan = $this->request->getPost('harga_satuan');
            $satuan_barang_id = $this->request->getPost('satuan_barang_id');
            $total_harga = $this->request->getPost('total_harga');
            $keterangan = $this->request->getPost('keterangan');
            $cabang_id = $this->request->getPost('cabang_id');

            $viewRab = KeuRab::findFirst("id='$id'");

            $viewRab->assign(array(
                'id' => $id,
                'periode' => $periode,
                'nama_barang' => $nama_barang,
                'akun_id' => $akun_id,
                'jml_barang' => $jml_barang,
                'harga_satuan' => $harga_satuan,
                'satuan_barang_id' => $satuan_barang_id,
                'total_harga' => $total_harga,
                'keterangan' => $keterangan,
                'cabang_id' => $cabang_id,
            ));

            if ($viewRab->save()) {
                $notif['title']="Sukses";
                $notif['text']="Data telah berhasil di simpan!";
                $notif['type']="success";
            }else{
                $pesan_eror = $viewRab->getMessages();
                $data_pesan_eror ='';
                foreach ($pesan_eror as $pesanError) {
                    $data_pesan_eror="$pesanError";
                }
                $notif['title']="Error";
                $notif['text']="Data tidak berhasil di simpan!";
                $notif['type']="error";
            }
            echo json_encode($notif);
            die();
        }
    }
    // /RAB


    // Pengluaran

    public function getAjaxPengeluaranAction()
    {
        $user = new ViewPengeluaranPerhari();
        $json_data = $user->getDataPengeluaran();
        die(json_encode($json_data));
    }

    public function getDataPengeluaranPerhariAction($hari)
    {
        $keu_harian = KeuHarian::find("tanggal='$hari'");
        die(json_encode($keu_harian));
    }

    // /Pengeluaran


    // Pemasukan
    public function getAjaxPemasukanAction()
    {
        if($this->request->isPost()) {
            $bulan = $this->request->getpost('bulan');
            $dataPemasukanPerhari = new ViewPemasukanPerhari();
            $json_data = $dataPemasukanPerhari->getDataPemasukan($bulan);
            die(json_encode($json_data));
        } else {
            $dataPemasukanPerhari = new ViewPemasukanPerhari();
            $json_data = $dataPemasukanPerhari->getDataPemasukan($bulan);
            die(json_encode($json_data));
        }

        $user = new ViewPemasukanPerhari();
        $json_data = $user->getDataPemasukan($bulan);
        die(json_encode($json_data));
    }

    public function getDataPemasukanPerhariAction($hari)
    {
        $keu_harian = KeuHarian::find("tanggal='$hari' AND debit!='0'");
        die(json_encode($keu_harian));
        
    }
    // /Pemasukan


    // Penghasilan
    public function getAjaxPenghasilanAction()
    {
        $user = new ViewPerkiraanPemasukanTanggal();
        $json_data = $user->getDataPenghasilan();
        die(json_encode($json_data));
    }

    public function getDataPenghasilanPerhariAction($tanggal_cair)
    {
        $tanggal_cair = str_replace(' ','',$tanggal_cair);
        $keu_perkiraan_pemasukan = KeuPerkiraanPemasukan::find("tgl_perkiraan='$tanggal_cair'");
        die(json_encode($keu_perkiraan_pemasukan));
    }
    // /Penghasilan
}

