<?php
namespace julo;
class select
{

   require_once 'include/db.php';

   protected $pdo;

    public function __construct()
    {
        $this->pdo = $pdo;
    }

    public function get()
    {
        $sql = "SELECT
    `id`,
    `username`,
    `starsscore`

FROM
  `users`
  ORDER BY
  starsscore DESC
";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $data = [];
        while($row = $stmt->fetchObject()){
            $data[] = $row;
        }

        return $data;
    }
}
