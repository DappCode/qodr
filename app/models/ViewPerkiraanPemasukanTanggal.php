<?php

class ViewPerkiraanPemasukanTanggal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=14, nullable=true)
     */
    public $tanggal_cair;

    /**
     *
     * @var double
     * @Column(type="double", length=32, nullable=true)
     */
    public $penghasilan;

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
        return 'view_perkiraan_pemasukan_tanggal';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ViewPerkiraanPemasukanTanggal[]|ViewPerkiraanPemasukanTanggal
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ViewPerkiraanPemasukanTanggal
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getDataPenghasilan()
    {
        $requestData = $_REQUEST;
        $requestSearch = strtoupper($requestData['search']['value']);

        $columns = array(
            0 => 'tanggal_cair',
            1 => 'penghasilan',
            
        );

        $sql = "SELECT * FROM ViewPerkiraanPemasukanTanggal";
        $query = $this->modelsManager->executeQuery($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;  
        $no = $requestData['start']+1;
        $start = $requestData['start'];
        $length = $requestData['length'];
        if (!empty($requestSearch)) {
            //function mencari data user
                $sql = "SELECT * FROM ViewPerkiraanPemasukanTanggal WHERE tanggal_cair LIKE '%".$requestSearch."%'";
                $sql.= "OR penghasilan LIKE '%".$requestSearch."%'";
                $query = $this->modelsManager->executeQuery($sql); 
                $totalFiltered = count($query);
    
                $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
                $query = $this->modelsManager->executeQuery($sql); 
            } else {
            //function menampilkan seluruh data
                $sql = "SELECT * FROM ViewPerkiraanPemasukanTanggal limit $start,$length" ;
                $query = $this->modelsManager->executeQuery($sql); 
            }

        $data = array();
        

        foreach ($query as $key => $value) {
            $dataUser = array();
            $dataUser[] = $no;
            $dataUser[] = $value->tanggal_cair;
            $dataUser[] = $value->penghasilan;
            $dataUser[] = '
            <button id="btn-view" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default" 
            onclick="return send_data_view_penghasilan(\''.$value->tanggal_cair.'\');">View</button>';
          

            $data[] = $dataUser;
            $no++;
        }

                
        $json_data = array(
			"draw"            => intval( $requestData['draw'] ),  
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data
		);
        
        return $json_data; 
    }


    public function getDataGraphic()
    {
       
        $sql = "SELECT * FROM ViewPerkiraanPemasukanTanggal";
        $query = $this->modelsManager->executeQuery($sql);

        $data = array();
        

        foreach ($query as $key => $value) {
            $dataUser = array();
            $tanggal = str_replace(' ','',$value->tanggal_cair);
            $dataUser['tanggal'] = $value->tanggal_cair;
            $dataUser['nominal'] = $value->penghasilan;
            

            $data[] = $dataUser;
        }

        
        return $data; 
    }
}
