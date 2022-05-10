<?php

// class Conta 
// {
//     var $name;
//     var $number;

//     public function setNumber(String $number)
//     {
//         $this->number = $number;
//     }
    
//     public function getNumber() 
//     {
//         return $this->$number;
//     }
//     public function setName(String $name)
//     {
//         $this->name = $name;
//     }
// }

// class ContaPF extends Conta
// {
//     var $cpf;

//     public function setCpf(String $cpf)
//     {
//         $this->cpf = $cpf;
//     }
    
//     public function getCpf() 
//     {
//         return $this->$cpf;
//     }

//     public function get()
//     {
//         return "Nome: {$this->name} | Conta: {$this->number} | CPF: {$this->cpf} <hr>";
//     }
// }

// class ContaPJ extends Conta
// {

//     var $cnpj;

//     public function setCnpj(String $cnpj)
//     {
//         $this->cnpj = $cnpj;
//     }
    
//     public function getCnpj() 
//     {
//         return $this->$cnpj;
//     }

//     public function get()
//     {
//         return "Nome: {$this->name} | Conta: {$this->number} | CNPJ: {$this->cnpj} <hr>";
//     }
// }

// echo "<pre>";
// $sidy = new ContaPF;

// $sidy->setName('Sidgley Guedes');
// $sidy->setNumber('123456');
// $sidy->setCpf('08413496900');

// echo $sidy->get();

// $econet = new ContaPJ;

// $econet->setName('Econet');
// $econet->setNumber('654121');
// $econet->setCnpj('1242544000.1/14');

// echo $econet->get();


// abstract class Conta
// {
//     var $name;
//     var $number;

//     public function setName(String $name)
//     {
//         $this->name = $name;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }
   
//     public function setNumber(String $number)
//     {
//         $this->number = $number;
//     }

//     public function getNumber()
//     {
//         return $this->number;
//     }

//     abstract public function get() : String;
    
    
// }

// class ContaPF extends Conta
// {
//     var $cpf;
    

//     public function setCpf(String $cpf)
//     {
//         $this->cpf = $cpf;
//     }

//     public function getCpf()
//     {
//         return $this->cpf;
//     }

//     public function get() : String
//     {
//         return "Nome: {$this->name} | Conta: {$this->number} | CPF: {$this->cpf} <hr>";
//     }

// }

// class ContaPJ extends Conta
// {
//     var $cnpj;

//     public function setName(String $name)
//     {
//         $this->name = strtoupper($name);
//     }

//     public function setCnpj(String $cnpj)
//     {
//         $this->cnpj = $cnpj;
//     }

//     public function getCnpj()
//     {
//         return $this->cnpj;
//     }

//     public function get() : String
//     {
//         return "Nome: {$this->name} | Conta: {$this->number} | CNPJ: {$this->cnpj} <hr>";

//     }

// }

// echo "<pre>";

// $sidy = new ContaPF;

// $sidy->setName('Sidy Guedes');
// $sidy->setNumber('1234560');
// $sidy->setCpf('08413496900');

// $econet = new ContaPJ;

// $econet->setName('econet');
// $econet->setNumber('458758');
// $econet->setCnpj('124588000.1/12');


// echo $sidy->get();
// echo $econet->get();



// $thalita = new ContaPJ;

// $thalita->setName('Thalita Faller');
// $thalita->setNumber('123456');
// $thalita->setCnpj('12450001/12');

// echo $thalita->get();

// class People 
// {
//     private $name;

//     public function setName(String $name)
//     {
//         $this->name = $name;
//     }

//     public function getName() : String
//     {
//         return $this->name;
//     }
// }

// $carlos = new People;

// $carlos->setName('Cared');
// echo $carlos->getName();


// class Escola
// {
//     const PID = '15165651';
//     private static $saldo = 0.0;

//     static public function getSaldo() : float
//     {
//         return self::$saldo;
//     }
    
//     static public function addSaldo(float $saldo)
//     {
//         self::$saldo += $saldo;
//     }
// }

// class Aluno
// {
//     public $name;
//     private $saldo = 0.0;

//     public function addSaldo(float $saldo)
//     {
//         $this->saldo = $saldo;
//     }
    
//     public function getSaldo(): float
//     {
//         return $this->saldo;
//     }

//     public function novaCompra(float $valor)
//     {   
//         if ($this->saldo >= $valor) {
//             $this->saldo -= $valor;
//             Escola::addSaldo($valor);
//             return true;
//         }else{

//             return "saldo insuficiente";
//         }
        
//     }
// }   

// echo "<pre>";

// $aluno01 = new Aluno;

// $aluno01->name = 'Sidy';
// $aluno01->addSaldo(150.0);
// echo "Nome: ". $aluno01->name . " | Saldo: R$".$aluno01->getSaldo()."<hr>";

// $aluno01->novaCompra(50.0);
// echo "Nome: ". $aluno01->name . " | Saldo: R$".$aluno01->getSaldo()."<hr>";

// $aluno01->novaCompra(25.70);
// echo "Nome: ". $aluno01->name . " | Saldo: R$".$aluno01->getSaldo()."<hr>";

// $response = $aluno01->novaCompra(25.70);
// echo "Nome: ". $aluno01->name . " | Saldo: R$".$aluno01->getSaldo()."<hr>";

// echo Escola::getSaldo();


// class Category 
// {
//     public $name;
// }

// class Post 
// {
//     public $title;
//     public $content;
//     private $category;

//     public function setCategory($category)
//     {
//         $this->category = $category;
//     }

//     public function getCategory()
//     {
//         return $this->category;
//     }
// }

// $php = new Category;

// $php->name = 'PHP';

// $post01 = new Post;

// $post01->title = "PHP é legal";
// $post01->content = ".....";
// $post01->setCategory($php);

// echo $post01->getCategory()->name;


// class Kart 
// {
//     private $items = [];

//     public function add(Product $product)
//     {
//         array_push($this->items, $product);
//     }

//     public function getAll() : array
//     {
//         return $this->items;
//     }

// }

// class Product
// {
//     public $name;
// }

// $p1 = new Product;
// $p2 = new Product;
// $p3 = new Product;

// $p1->name = "Celular";
// $p2->name = "TV";
// $p3->name = "Radio";


// $carrinho = new Kart;

// $carrinho->add($p1);
// $carrinho->add($p2);
// $carrinho->add($p3);

// echo "<pre>";
//  print_r($carrinho->getAll());




// class Endereco 
// {
//     public $rua;
//     public $bairro;
// }

// class User
// {
//     public $name;
//     private $endereco;

//     public function setEndereco($rua, $bairro)
//     {
//         $endereco = new Endereco;
//         $endereco->rua = $rua;
//         $endereco->bairro = $bairro;
        
//         $this->endereco = $endereco;
//     }

//     public function getEndereco(): String
//     {
//        return " | Rua: {$this->endereco->rua} | Bairro: {$this->endereco->bairro}";
//     }
// }


// $carlos = new User;

// $carlos->name = 'Carlos';
// $carlos->setEndereco('Rua Chile', 'Centro');

// echo 'Nome: '.$carlos->name. $carlos->getEndereco();



// class MyClass
// {
//     private $name; 
//     private $cpf;

//     public function __set($key, $value)
//     {
//         $this->$key = $value;
//     }
//     public function __get($key)
//     {
//         return $this->$key;
//     }
// }





// $obj = new MyClass;

// $obj->name = 'Sidu';

// echo $obj->name;

// class Str 
// {
//     public function __call($name, $arguments)
//     {
//         return strtoupper($arguments[0]);
//     }

//     static public function __callStatic($name, $arguments)
//     {
//         return strtoupper($arguments[0]);
//     }

//     public function __toString()
//     {
//         return '__toString';
//     }
// }

// $obj = new Str;

// echo "<pre>";
// echo $obj->upper('Valor');
// echo "<hr>";
// echo Str::upper('Value');
// echo "<hr>";
// echo $obj;

// class myClass 
// {

//     public $name;
//     public $email;

//     public function method1() : void 
//     {

//     }
//     protected function method2() : void 
//     {
        
//     }
//     private function method3() : void 
//     {
        
//     }

// }

// $obj = new MyClass;
// $methods = get_class_methods($obj);
// echo "<br>";
// $vars = get_class_vars('MyClass');

//$vars = get_object_vars($obj);

//var_dump($vars);




