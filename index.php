<html>
 <head>
  <title>Cacule seu Salário</title>
  <link rel="stylesheet" href="index.css">
 </head>
 <body>
     <main>
     <?php
     echo "<h1> Calcular Salário </h1> ";
     echo "<hr>"
     ?>
        <div>
            <p>Insira a valor de um salario para servir de base para os calculos. </p>
            <h4>
            <form action="index.php" method="post">
                <label for="salario" > Salario: </label>
                <input type="number" step="0.01"name="salario" required>
                <br/>
                <br/>
                <br/>
                OPÇÕES:
                <br/>
                <input type="radio" name="opcao" value="imposto"required> Imposto
                <br/>
                <input type="radio" name="opcao" value="novo_salario" required> Novo Salário
                <br/>
                <input type="radio" name="opcao" value="classificacao" required> Classificação
                <br/>
                <br/>
                <input type="submit" value="Calcular">
            </form>
            </h4>
            <br/>
        </div>

        <?php
        $salarioInserido = $_POST["salario"];
        $opcao = $_POST["opcao"];
        echo ("<h3> Salário: R$ $salarioInserido</h3>");

        switch ($opcao){
            case "imposto":
                if($salarioInserido < 500){
                    $valorDoImposto = ($salarioInserido * 5)/100;
                }elseif($salarioInserido >= 500 && $salarioInserido < 850){
                    $valorDoImposto = ($salarioInserido * 10)/100;
                }elseif($salarioInserido > 850){
                    $valorDoImposto = ($salarioInserido * 15)/100;
                }
                echo ("
                    <h3> O valor do imposto sobre o seu salário é: R$ $valorDoImposto </h3>
                ");
                break;
            case "novo_salario":
                if($salarioInserido > 1500){
                    $novoSalario = $salarioInserido + 25;
                }
                elseif($salarioInserido >= 750 && $salarioInserido <= 1500){
                    $novoSalario = $salarioInserido + 50;
                }
                elseif($salarioInserido >= 450 && $salarioInserido < 750){
                    $novoSalario = $salarioInserido + 75;
                }
                elseif($salarioInserido < 450){
                    $novoSalario = $salarioInserido + 100;
                };
                echo ("
                <h3> Seu novo salário é: R$ $novoSalario </h3>
                ");
                break;
            case "classificacao":
                if($salarioInserido <= 700){
                    echo "<h3> Mal Remunerado </h3>";
                }else{
                    echo "<h3> Bem Remunerado </h3>";
                }
                    
                break;
            default:
                echo "<h3> Você ainda não inseriu um valor para salário. </h3>";
        }
        
        ?>
        </main>
 </body>
</html>