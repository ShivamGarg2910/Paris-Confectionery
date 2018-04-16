<?php
class client{
    public function __construct()
    {
        $params=array('location' => 'http://10.4.82.15/Project/get_db.php',
        'uri' => 'urn://10.4.82.15/Project/get_db.php',
        'trace' => 1);
        //Create SOAP Client
        $this->instance=new SoapClient(NULL, $params);
        //set the header
        //$auth_params = new stdClass();
        //$auth_params->username = 'gaurav';
        //$auth_params->password = 'root';
        //SOAP Obeject Authentication
        //$header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        //$header = new SoapHeader('codev','authenticate',$header_params,false);
        //$this->instance->__setSoapHeaders(array($header));
    }
    public function getName()
    {
		$id_array=array('id'=>"1");
        return $this->instance->__soapCall('getStudentName',$id_array);
    }
}
$client = new client;
?>