<?php 

class Login {

    public $nome;
    public $email;
    public $senha;
    public $registros;
    public $condicao = 0;
    public $email_cadastrado = 0;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}

class Conexao {

    private $host = 'localhost';
    private $dbname = 'login';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->pass"
            );
            return $conexao;

        } catch (PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}

class Bd {

    public $conexao;
    public $login;

    public function __construct($conexao, $login) {
        $this->conexao = $conexao->conectar();
        $this->login = $login;
    }

    public function getEmails() {

        $query = '
            select
                email, senha
            from
                tb_cadastro 
        ';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getNomeUser() {
        $query = '
            select
                nome
            from
                tb_cadastro
            where
                email = :email

        ';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $this->login->__get('email'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function registro() {
        $query = '
            insert into
                tb_cadastro(email, senha)
            values
                (:email, :senha)
        ';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $_GET['email_cad']);
        $stmt->bindValue(':senha', $_GET['senha1']);
        $stmt->execute();
    }

}

$conexao = new Conexao();
$login = new Login();
$bd = new Bd($conexao, $login);


$login->__set('registros', $bd->getEmails());



if ($_GET['control'] == 1) {

    foreach($login->__get('registros') as $registros) {
        if ($_GET['email_cad'] == $registros->email) {
            $login->__set('email_cadastrado', 1);
            break; 
        } else {
            $login->__set('email_cadastrado', 0);
        }
    }

    if ($login->__get('email_cadastrado') == 0) {
        $bd->registro();
    
    }

}  else {
    foreach ($login->__get('registros') as $value) {
        if ($value->email == $_GET['email'] && $value->senha == $_GET['senha']) {
    
            $login->__set('email', $_GET['email']);
            $login->__set('senha', $_GET['senha']);
            $login->__set('condicao', 1);
            break;
        } 
    }
}

echo json_encode($login);

?>