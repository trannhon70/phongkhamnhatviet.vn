
<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php 
  class khoa 
  {
      private $db;
      private $fm;
      public function __construct()
      {
          $this->db = new Database();
          $this->fm = new Format();
      }

      //thêm danh mục 
      public function getAllKhoa(){

        $query = "SELECT * FROM `admin_khoa` WHERE 1";
        $result = $this->db->select($query);
        return $result;
        
      }
      
      public function getAllChiTietKhoaAndBenh() {
        // Step 1: Get all departments (khoa)
        $queryKhoa = "SELECT * FROM `admin_khoa` WHERE 1";
        $resultKhoa = $this->db->select($queryKhoa);
    
        $data = [];
        if ($resultKhoa) {
            while ($rowKhoa = $resultKhoa->fetch_assoc()) {
                // Step 2: For each department, get the list of diseases (benh)
                $idKhoa = $rowKhoa['id'];
                $danhSachBenh = $this->getDanhSachBenhByIdKhoa($idKhoa);
                
                // Step 3: Add the department and its diseases to the data array
                $rowKhoa['danhSachBenh'] = $danhSachBenh;
                $data[] = $rowKhoa;
            }
        }
        
        return $data;
    }
    
    public function getDanhSachBenhByIdKhoa($idKhoa) {
        // Sanitize the input to prevent SQL injection
        $idKhoa = intval($idKhoa);
    
        $queryBenh = "SELECT * FROM `admin_benh` WHERE id_khoa = '$idKhoa' AND hidden = '0'";
        $resultBenh = $this->db->select($queryBenh);
    
        $data = [];
        if ($resultBenh) {
            while ($row = $resultBenh->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return $data;
    }
    
  }
  
?>