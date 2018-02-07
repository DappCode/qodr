<?php
class Helpers
{
    public function dataSatuanBarang($selected = null)
    {
        $dataSatuanBarang = RefSatuanBarang::find();
        $satuanBarang = '<option value="">Pilih Satuan Barang</option>';
        foreach ($dataSatuanBarang as $key => $value) {
            if ($selected == $value->id) {
                $satuanBarang .= '<option value="'.$value->id.'" selected>'.$value->id.' ('.$value->nama.')'.'</option>'; 
            }else{
                $satuanBarang .= '<option value="'.$value->id.'">'.$value->id.' ('.$value->nama.')'.'</option>'; 
            }
        }
        return $satuanBarang;
    }
    public function dataAkun($selected = null)
    {
        $dataRefAkun = RefAkun::find();
       
        $dataAkun = '<option value="">Pilih Data Akun</option>';
        foreach ($dataRefAkun as $key => $value) {
            if ($selected == $value->id) {
                $dataAkun .= '<option value="'.$value->id.'" selected>'.$value->id.' ('.$value->nama.')'.'</option>'; 
            }else{
                $dataAkun .= '<option value="'.$value->id.'" >'.$value->id.' ('.$value->nama.')'.'</option>'; 
            }
        }
        return $dataAkun;
    }

    public function bulan()
    {
        $bulan = array("Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        for ($i=0; $i<=12; $i++) { 
            echo "<option value=".($i+1)."> $bulan[$i] </option>";
        }
    }
    
    public function dataBulan($selected =  null)
    {
       $Bulan = ViewPengeluaranPerhari::find([
          'columns' => 'DATE_FORMAT(Hari, "%Y-%m") AS Bulan',
          'group' => 'Bulan'
       ]);
       $dataBulan = '<option value="">- Pilih Bulan -</option>';
       foreach ($Bulan as $key => $value) {
          if ($selected == date("m", strtotime($value->Bulan))) {
             $dataBulan.='<option value="'.date("m", strtotime($value->Bulan)).'" selected>'.date('F', strtotime($value->Bulan)).'</option>';
          } else {
             $dataBulan.='<option value="'.date('m',strtotime($value->Bulan)).'" >'.date('F',strtotime($value->Bulan)).'</option>';
             
          }
       }
       return $dataBulan;
    }
}
