<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACIONES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
        
        <form class = "mt-5" action = "ejercicio1.php" method = "POST">
            <h1 class = "text-center">OPERADORES</h1>
            <div class="form-row mt-5">
                <div class="col">
                    <input type="decimal" class="form-control" placeholder="Ingrese Valor1" name = "Valor1">
                </div>
                <select class="form-control" id="exampleFormControlSelect1" name = "operaciones">
                    <option value = "+">+</option>
                    <option value = "-">-</option>
                    <option value = "*">*</option>
                    <option value = "/">/</option>
                </select>
                <div class="col">
                    <input type="decimal" class="form-control" placeholder="Ingrese Valor2" name = "Valor2">
                </div>
            </div>
            <div class = "text-center">
            <button type="submit" class="text-center btn btn-primary col-md-2 mt-5" name = "Resultado">Resultados</button>
            </div>
        </form>
    
    
    </header>

    <main>

        <h2 class="text-center mt-5">RESULTADOS</h2>

        <?php if(isset($_POST["Resultado"])):?>
        <?php ?>
        <?php endif?>
    
    </main>

    <footer>
    
    
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    

</body>
</html>