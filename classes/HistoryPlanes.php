<?php

class HistoryPlanes {

    public $json;
    public $error;

    public function __construct($db, $x, $y) {
        $xmin = -16697923;
        $xmax = 3338999;
        
        if ($x > $xmin and $x < $xmax) {
            
            $sql = "SELECT busca_planos(?, ?) AS result;";

            $stmt = $db->prepare($sql);
            
            try {
                $stmt->bindParam(1, $x);
                $stmt->bindParam(2, $y);
                $stmt->execute();
                $this->json = json_encode($stmt->fetch(PDO::FETCH_ASSOC)['result']);//$stmt->fetchAll(PDO::FETCH_ASSOC); //json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
                $db = null;
                return;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
            }
        }
    }

}

?>
