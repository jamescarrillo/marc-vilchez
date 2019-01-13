<?php 
Class Conexion{
    
	#private $host="localhost";
    #private $usuario="root";
    #private $pass="rootroot";
    #private $bd="tramitelic";
    
    private $cn;

    private $host="10.100.19.16";
    private $bd="tramitelic";
    private $usuario="root";
    private $pass="APBaoa15728"; 
    private $lang="charset=utf8";
    
	public function Conectar(){
		try{
            $this->cn = new PDO('mysql:host='.$this->host. ';dbname='.$this->bd.';'.$this->lang,$this->usuario,$this->pass);
            $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->cn;
        }catch(Exception $e){
            die('Error : ' . $e->GetMessage());
            return null;
        }
    }
    
    public function closeCn(){
        $this->cn= null;
    }
}
#$con = new Conexion();
#$con->Conectar();