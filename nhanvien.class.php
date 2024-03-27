<?php
IDEA:
require_once("/config/db.nhanvien.php");
class nhanvien 
{
    public $MaNhanvien ;
    public $TenNhanVien;
    public $Phai;
    public $NoiSinh;
    public $MaPhong;
    public $Luong;
    public function __construct($ma,$ten,$phai,$noisinh,$maphong,$luong)

    {
        $this->MaNhanvien=$ma;
        $this->TenNhanVien =$ten;
        $this->Phai =$phai;
        $this ->NoiSinh=$noisinh;
        $this ->MaPhong =$maphong;
        $this->Luong =$luong;
    }

    public function save(){
        $db = new db();
        $sql ="INSERT INTO nhanvien(MaNhanVien,TenNhanVien,Phai,NoiSinh,MaPhong,Luong) VALUES
        ('$this->TenNhanVien','MaNhanVien','Phai','NoiSinh','MaPhong','Luong')";
    $result =$db->query_execute($sql)   ;
    return $result;
}
    


}

?>