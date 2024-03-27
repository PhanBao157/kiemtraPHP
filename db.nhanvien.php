<?php 
IDEA:
class db {
protected static $connection;
public function connect(){
if(isset (self::$connection)){
    $congig = parse_ini_file("congig.ini");
    self::$connection = new mysqli("localhost",$congig["username"],$congig["password"],$congig["datacbasename"]);
}
if (self::$connection==false){
    return false;
}
return self::$connection;


}
public function query_execute($queryString){
    $connection =$this->connect();
    $result =$connection->query($queryString);
    $connection->close();
    return $result;
}
public function select_to_array($queryString){
    $row =array();
    $result =$this->query_execute($queryString);
    if($result==false) return false;
    while($item= $result->fetch_assoc()){
        $row[] =$item;
    }
    return $row;
}

}


?>