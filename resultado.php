<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
    <title>Resultado</title>
</head>
<body>
    <section>

    

    <div class="container">
        <h1>Confira o seu resultado</h1>
        
    
        <table class="table">
            <thead class="table-dark">
            <tr>
                <td>Questão</td>
                <td>Resposta do gabarito</td>
                <td>Sua Resposta</td>
                <td>Resultado</td>
            </tr>   
            </thead>


        <?php

        $quantidadedeQuestoes = $_POST["quantidade"];

        $gabarito = [];
        $respostas = [];
        $certo = 0;
        $errado = 0;

        for($i=1; $i<=$quantidadedeQuestoes; $i++){
            $numerodaquestao = $i;
            $gabarito[$i] = $_POST['gabarito'.$i];
            $resposta[$i] = $_POST['resposta'.$i];
            if ($gabarito[$i] == $resposta[$i]) {
                $certoerrado = "Certo";
                $certo++;
                $classe = "bg-success";
            }
            else{
                $certoerrado = "Errado";
                $errado++;
                $classe = "bg-danger";
            }
            echo "<tr class='{$classe}'>
                    <td>{$i}</td>
                    <td>{$gabarito[$i]}</td>
                    <td>{$resposta[$i]}</td>
                    <td>{$certoerrado}</td>
                    </tr>
               
            
            "
            
            ;
        }?>


        </table>
        <?php

        echo "<h4 class='result'> Certas= {$certo} </h4>";
        echo "<h4 class='result'>Erradas= {$errado} </h4>";
        ?>
        </div>

        

        



        

    </div>

    <div class="chartBox">
        <canvas class="pie-chart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </div>   

    <script>
        
        
        

        var ctx = document.getElementsByClassName("pie-chart");

        var chartGraph = new Chart(ctx, {
            type: 'doughnut',
            data: {
                    labels: [
                        'Certas',
                        'Erradas',
                    ],
                    datasets: [{
                        label: 'Porcentagem',
                        data: [<?php echo round((($certo/($quantidadedeQuestoes))*100), 2) ?> , <?php echo round((($errado/($quantidadedeQuestoes))*100), 2) ?>],
                        backgroundColor: [
                        'rgb(0,100,0)',
                        'rgb(139,0,0)',
                        ],
                        hoverOffset: 3
                    }]
                    },
            

        })


    </script>

        <div class=botaoimpressao>
            
            
            <button class="btn btn-primary" onClick="window.print()" >Imprimir meu resultado</button>
            
        </div>

    </section>

    <footer class="rodape">
      <p>Desenvolvido por <a href="https://github.com/crisrodrigues95">Cristhian Araujo Rodrigues</a></p>  
    </footer>

    

    

   


</body>
</html>