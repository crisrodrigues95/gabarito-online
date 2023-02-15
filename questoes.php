<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Gabarito</title>
</head>
<body>
    <section class="questoesg">


    <h1 class="text-center">Bacana, coloque agora as respostas do gabarito oficial</h1>



    <form method="POST" action="respostas.php">

        <div class="form-group">
            
        

    <?php


        $quantidadeQuestoes = $_POST['numeroquestoes'];
        echo "<input type='hidden' name='quantidade' value='$quantidadeQuestoes'>";


        for ($i=1; $i<=$quantidadeQuestoes; $i++) {
            echo "

            
            <div class=container> 
                <div class='row'>
                    <div class='col'>
                        <p class='nquestao'><b>$i- </b></p>
                    </div>
                    <div class='col'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='questao{$i}' id='inlineRadio{$i}A' value='A' required>
                            <label class='form-check-label' for='inlineRadio{$i}A'>A</label>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='questao{$i}' id='inlineRadio{$i}B' value='B' required>
                            <label class='form-check-label' for='inlineRadio{$i}B' >B</label>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='questao{$i}' id='inlineRadio{$i}C' value='C' required>
                            <label class='form-check-label' for=''inlineRadio{$i}C'>C</label>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='questao{$i}' id='inlineRadio{$i}D' value='D' required>
                            <label class='form-check-label' for='nlineRadio{$i}D'>D</label>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='questao{$i}' id='inlineRadio{$i}E' value='E' required>
                            <label class='form-check-label' for='inlineRadio{$i}E'>E</label>
                        </div>
                    </div>
                    <hr>
        
            
                </div>
                </div>
            </div>";}


        
        



    ?>
            <div class=text-center>
                <button type="submit" class="btn btn-success questoes">Enviar</button>
            </div>
        </div>

        </div>
    </form>

    </section>

    <footer class="rodape">
      <p>Desenvolvido por <a href="https://github.com/crisrodrigues95">Cristhian Araujo Rodrigues</a></p>  
    </footer>


    

    
</body>
</html>