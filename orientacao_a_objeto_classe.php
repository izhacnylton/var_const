<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 

    //definindo uma classe

    class Carro {

    //objetos

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidade = 10;

    //metodos; funcoes
    public function acelerar(){
        $this -> velocidade >=10;
        echo "o carro acxlerou. A velocidade é igual: " . $this->velocidade. "Km/h";
    }

    //segundo metodo
    public function frear(){
        if($this -> velocidade >= 10){
            $this -> velocidade <10;

        }
        echo "o carro acxlerou. A velocidade é igual: " . $this->velocidade. "Km/h";
    }

    }
    
    
    ?>

</body>
</html>