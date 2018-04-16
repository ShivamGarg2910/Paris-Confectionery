<?php
class server
{
    private $conn;
    //SOAP Authentication
    /*public static function authenticate($header_params)
    {
        if($header_params->username=='gaurav' && $header_params->password=='root')
            return true;
        else
        {
            throw new SOAPFault('Wrong user/password combination',401);
            return 0;
        }
    }*/
    public function __construct()
    {
        $this->conn = (is_null($this->conn)) ? self::connect() : $this->conn;
    }
    static function connect()
    {
        echo "working";
        $conn=mysqli_connect("localhost","root","","paris_confectionary_shop");
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $conn;
    }
    public function getStudentName($id_array)
    {
        //$id=$id_array['id'];
        //$sql = "SELECT name FROM students WHERE id = '$id'";
        //$qry = mysqli_query($this->con,$sql);
        //$res = mysqli_fetch_array($qry);
        //return $res['name'];
		$startdate=Date('Y-m-d');
        $sql1="select * from inventory where expiry_date<='$startdate'";
        $sql="delete from inventory where expiry_date<='$startdate'";
        $result1=mysqli_query($conn,$sql1);
        $result=mysqli_query($conn,$sql);
		$res = mysqli_fetch_array($result1);
		//echo $res['tag_id'];
		$arr = array();
		$i = 0;
		while($res=mysqli_fetch_array($result1))
		{
			$arr[$i] = $res['tag_id'];
			$i += 1;
		}
		return $arr;
    }
}
$params = array('uri' => 'urn://10.4.82.15/Project/get_db.php');
$server = new SoapServer(NULL, $params);
$server->setclass('server');
$server->handle();
?>