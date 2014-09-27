<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
date_default_timezone_set('America/Sao_Paulo');

require_once 'autoload.php'; //autoload
require_once 'util/clientes.php'; //array de clientes

//ordeno o array de clientes
if(isset($_POST['ordem'])){
    if($_POST['ordem'] == "asc")
        ksort($clientes);
    elseif($_POST['ordem'] == "desc")
        krsort($clientes);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POO - Fase03</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="container-fluid">
    <h1>Clientes cadastrados no sistema</h1>


    <form method="post" action="" class="form-horizontal">
        <fieldset>
            <label>Ordenar registros de forma:</label>
            <select name="ordem">
                <option value="asc" <?php if(isset($_POST['ordem']) and $_POST['ordem'] == "asc"){ echo "selected";  }else null; ?>>Ascendente</option>
                <option value="desc" <?php if(isset($_POST['ordem']) and $_POST['ordem'] == "desc"){ echo "selected";  }else null; ?> >Descendente</option>
            </select>
            <button type="submit" class="btn btn-warning" name="submit"><i class="icon-retweet icon-white"></i> Classificar</button>
        </fieldset>
    </form>
    <hr/>
    <div class="accordion" id="accordion2">        
        <?php foreach ($clientes as $key => $val) { ?>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo '#collapse'.$key;?>">
                    <?php
                        $tipo = $val->getTipo();
                        if($tipo == "PF"){
                            $descricao = "Pessoa Física";
                            $celular = '<strong>Celular: </strong>'.$val->getCelular().'<br/>';
                        }else{
                            $descricao = "Pessoa Jurídica";
                            $celular = "";
                        }
                        echo '<h4>Registro [ID: '.$key.'] </h4> <strong>Nome: </strong>'.$val->getNome(). ' - ' .$descricao;
                    ?>
                </a>
            </div>
            <div id="<?php echo 'collapse'.$key;?>" class="accordion-body collapse">
                <div class="accordion-inner">
                    <?php
                        echo '<strong>CPF: </strong>'.$val->getcpfcnpj().'<br/>';
                        echo '<strong>Endereço: </strong>'.$val->getEndereco().'<br/>';
                        echo '<strong>EMail: </strong>'.$val->getEmail().'<br/>';
                        echo '<strong>Grau de Importância: </strong>'.$val->getGrauImportancia().' estrela(s).<br/>';

                        echo '<strong>Tipo: </strong>'.$descricao.'<br/>';

                        if(isset($celular))
                            echo $celular;

                        if(!is_null($val->getEnderecoCobranca()) and !is_null($val->getCidadeCobranca())){
                            echo '--------------------------------------------------------------------------------<br/>';
                            echo '<strong>Endereço de Cobrança: </strong>'. $val->getEnderecoCobranca() .'<br/>';
                            echo '<strong>Cidade de Cobrança: </strong>'. $val->getCidadeCobranca() .'<br/>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
