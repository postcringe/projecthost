<?
    class Data{
        private $mysql;
        private $table;
        public function __construct(string $table){ 
            global $DB_LINK;
            $this->mysql = $DB_LINK;
            $this->table = $table;
        }
        public function GetMysql(){
            return $this->mysql;
        }
        public function GetTables() {
            global $DB_LINK;
            $data = $DB_LINK->query("SHOW tables");
            $tables = array();
            while ($row = $data->fetch_assoc()) $tables[] = $row;
            if (count($tables) > 0) return $tables;
            else return false;
        }
        public function GetData(array $filter = array()){
            if (count($filter) == 0) {
                $data = $this->mysql ->query("SELECT * FROM $this->table ORDER BY `ID`"); 
                if (!$data || $data == false) return false;
                while ($row = $data -> fetch_assoc()) $result[] = $row;
                if (!isset($result)) $result = false;
                return $result;
            }
            else {
                $i = 0;
                foreach ($filter as $item_key => $item) {
                    if ($i == 0) $query = "SELECT * FROM $this->table WHERE `$item_key` LIKE '$item'";
                    else $query .= " AND `$item_key` LIKE '$item'";
                    $i++;
                }
                $data = $this->mysql ->query($query); 
                if (!$data) return false;
                while ($row = $data -> fetch_assoc()) $result[] = $row;
                if (!isset($result)) $result = false;
                return $result;
            }
        }
        public function GetDataRow($id){
            $data = $this->mysql ->query("SELECT * FROM $this->table WHERE `ID` = $id"); 
            $row = $data -> fetch_assoc();
            if (!isset($row)) $row = false;
            return $row;
        }
        public function GetDataPage($limit,$offset, array $filter = array()){
            if (count($filter) == 0) {
                $data = $this->mysql ->query("SELECT * FROM $this->table ORDER BY `ID` LIMIT $limit OFFSET $offset");
                if (!$data || $data == false) return false;
                while ($row = $data -> fetch_assoc()) $result[] = $row;
                if (!isset($result)) $result = false;
                return $result;
            }
            else {
                $i = 0;
                foreach ($filter as $item_key => $item) {
                    if ($i == 0) $query = "SELECT * FROM $this->table WHERE `$item_key` LIKE '$item'";
                    else $query .= " AND `$item_key` LIKE '$item'";
                    $i++;
                }
                $query .= " LIMIT $limit OFFSET $offset";
                $data = $this->mysql ->query($query); 
                if (!$data) return false;
                while ($row = $data -> fetch_assoc()) $result[] = $row;
                if (!isset($result)) $result = false;
                return $result;
            }
        }
        public function GetDataPageSort($limit,$offset,$sort,$desc = NULL){
            return $this->mysql ->query("SELECT * FROM $this->table ORDER BY `$sort` $desc LIMIT $limit OFFSET $offset");
        }

        public function GetString($col,$value){
            return $this->mysql ->query("SELECT * FROM $this->table WHERE `$col` = '$value'"); 
        }
        public function RemoveSeveralData(array $ids) {
            $result= true;
            foreach($ids as $id) {
                if (!$res = RemoveData($id)) $result = false;
            }
            return $result;
        }
        public function RemoveData($id) {
            return $this->mysql->query("DELETE FROM $this->table WHERE `ID` = '$id'");
        }
        public function UpdateData(int $id, array $data) {
            $i = 0;
            foreach ($data as $item_key => $item) {
                if ($i == 0) {
                    $query = "UPDATE $this->table SET `$item_key` = '$item'";
                }
                else {
                    $query .= ", `$item_key` = '$item'";
                }
                $i++;
            }
            $query .= " WHERE `ID` = '$id'";
            global $DB_LINK;
            $result = $DB_LINK->query($query);
            return $result;
        }
        public function AddData(array $data){
            $i = 0;
            foreach ($data as $item_key => $item) {
                if ($i == 0) {
                    $query = "INSERT INTO $this->table (`$item_key`";
                    $values = ") VALUES ('$item'";
                }
                else {
                    $query .= ", `$item_key`";
                    $values .= ", '$item'";
                }
                $i++;
            }
            $query = $query . $values . ")";
            $result = $this->mysql->query($query);
            return $result;
        }
        public function NumRows($table){
            $rows = $this->mysql ->query("SELECT * FROM $table ORDER BY `ID`");
            return $rows -> num_rows;
        }
    }
?>