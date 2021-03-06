<?php
class KeuHarian extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=11, nullable=false)
     */
    public $id;
    /**
     *
     * @var string
     * @Column(type="string", length=3, nullable=false)
     */
    public $cabang_id;
    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal;
    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=false)
     */
    public $nama_barang;
    /**
     *
     * @var string
     * @Column(type="string", length=3, nullable=false)
     */
    public $akun_id;
    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=false)
     */
    public $jml_barang;
    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $harga_satuan;
    /**
     *
     * @var string
     * @Column(type="string", length=8, nullable=false)
     */
    public $satuan_barang_id;
    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $total_harga;
    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $debit;
    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $kredit;
    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $keterangan;
    /**
     *
     * @var string
     * @Column(type="string", length=16, nullable=false)
     */
    public $pelaku;
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("qodr");
    }
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'keu_harian';
    }
    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return KeuHarian[]|KeuHarian
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }
    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return KeuHarian
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    public function getDataKeuHarian()
    {
        $requestData = $_REQUEST;
        // echo "<pre>".print_r($_REQUEST)."</pre>";
        $requestData = strtoupper($_REQUEST['search']['value']);
        $columns = array(
            0 => 'cabang_id',
            1 => 'tanggal',
            2 => 'nama_barang',
            3 => 'akun_id',
            4 => 'jml_barang',
            5 => 'harga_satuan',
            6 => 'satuan_barang_id',
            7 => 'total_harga',
            8 => 'debit',
            9 => 'kredit',
            10 => 'keterangan',
            11 => 'pelaku',
        );
        $sql = "SELECT * FROM KeuHarian";
        $query = $this->modelsManager->executeQuery($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;
        $no = $_REQUEST['start']+1;
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        if(!empty($requestSearch)) {
            //function mencari data user
            $sql = "SELECT * FROM KeuHarian WHERE cabang_id LIKE '%".$requestSearch."%'";
            $sql.= "OR tanggal LIKE '%".$requestSearch."%'";
            $sql.= "OR nama_barang LIKE '%".$requestSearch."%'";
            $sql.= "OR akun_id LIKE '%".$requestSearch."%'";
            $sql.= "OR jml_barang LIKE '%".$requestSearch."%'";
            $sql.= "OR harga_satuan LIKE '%".$requestSearch."%'";
            $sql.= "OR satuan_barang_id LIKE '%".$requestSearch."%'";
            $sql.= "OR total_harga LIKE '%".$requestSearch."%'";
            $sql.= "OR debit LIKE '%".$requestSearch."%'";
            $sql.= "OR kredit LIKE '%".$requestSearch."%'";
            $sql.= "OR keterangan LIKE '%".$requestSearch."%'";
            $sql.= "OR pelaku LIKE '%".$requestSearch."%'";
            $query = $this->modelsManager->executeQuery($sql);
            $totalFiltered = count($query);
            
            $sql.=" ORDER BY ". $columns[$_REQUEST['order'][0]['column']]."   ".$_REQUEST['order'][0]['dir']."   LIMIT ".$_REQUEST['start']." ,".$_REQUEST['length']."   "; 
            $query = $this->modelManager->executeQuery(sql);
        } else {
            //function menampilkan seluruh data
            $sql = "SELECT * FROM KeuHarian limit $start,$length";
            $query = $this->modelsManager->executeQuery($sql);
        }
        $data = array();
        foreach($query as $key => $value) {
            $dataKeuHarian = array();
            $dataKeuHarian[] = $no;
            $dataKeuHarian[] = $value->cabang_id;
            $dataKeuHarian[] = $value->tanggal;
            $dataKeuHarian[] = $value->nama_barang;
            $dataKeuHarian[] = $value->akun_id;
            $dataKeuHarian[] = $value->jml_barang;
            $dataKeuHarian[] = $value->harga_satuan;
            $dataKeuHarian[] = $value->satuan_barang_id;
            $dataKeuHarian[] = $value->total_harga;
            $dataKeuHarian[] = $value->debit;
            $dataKeuHarian[] = $value->kredit;
            $dataKeuHarian[] = $value->keterangan;
            $dataKeuHarian[] = $value->pelaku;
            $dataKeuHarian[] = '
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default" onclick="return send_data_edit(\''.$value->id.'\');">Edit</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" onclick="return send_data_delete(\''.$value->id.'\');">Delete</button>
            </div>
            ';
            $data[] = $dataKeuHarian;
            $no++;
        }
        $json_data = array(
                "draw" => intval($_REQUEST['draw']),
                "recordsTotal" => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data" => $data,
        );
        return $json_data;
    }
}