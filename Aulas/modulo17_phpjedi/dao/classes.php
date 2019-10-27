<?php

class Database
{
    protected $db;

    public function __construct()
    {
        try {
            $this -> db = new PDO("mysql:dbname=jedi_dao;host=localhost", "root", "");
            $this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e -> getMessage());
        }
    }
}

class UsuarioDAO extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(array $fields = [], array $where = []): array
    {
        $usuarios = [];
        $valores = [];

        if (count($fields) == 0) {
            $fields = ['*'];
        }

        $sql = "SELECT ".implode(',', $fields)." FROM usuario";

        if (count($where) > 0) {
            $tabelas = array_keys($where);
            $valores = array_values($where);
            $comp = [];

            foreach ($tabelas as $tabela) {
                $comp[] = "{$tabela} = ?";
            }

            $sql .= implode(" AND ", $comp);
        }

        $sql = $this -> db -> prepare($sql);
        $sql -> execute($valores);

        if ($sql -> rowCount() > 0) {
            foreach ($sql -> fetchAll() as $item) {
                $usuarios[] = new Usuario($item);
            }
        }

        return $usuarios;
    }

    public function insert(Usuario $usuario)
    {
        $fields = [
            'name' => $usuario -> getName(),
            'email' => $usuario -> getEmail(),
            'pass' => $usuario -> getPass()
        ];

        if (count($fields) > 0) {
            $questionMarks = [];

            for ($i = 0; $i < count(array_keys($fields)); $i++) {
                $questionMarks[] = '?';
            }

            $sql = "INSERT INTO usuario 
            (".implode(',', array_keys($fields)).") 
            VALUES 
            (".implode(',', $questionMarks).")";

            $sql = $this -> db -> prepare($sql);
            $sql -> execute(array_values($fields));
        }
    }
}
    
class Usuario
{
    private $name;
    private $email;
    private $pass;
    private $id;

    public function __construct(array $array)
    {
        $this -> name = $array['name'] ?? '';
        $this -> email = $array['email'] ?? '';
        $this -> pass = $array['pass'] ?? '';
        $this -> id = $array['id'] ?? '';
    }

    public function getName() { return $this -> name; }
    public function getEmail() { return $this -> email; }
    public function getPass() { return $this -> pass; }
    public function getId() { return $this -> id; }
}