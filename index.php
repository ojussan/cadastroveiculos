<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Veículos</title>
        <link rel="stylesheet" href="_css/estilo.css" 
    </head>    
    <body>
        <div class="container">
           <nav>
               <ul class="menu">
                   <a href="index.php"><li>Cadastro</li></a>
                   <a href="consultas.php"><li>Consultas</li></a>
               </ul>
           </nav> 
           <section>
               <hl> Cadastro de Veículos</hl>
                <hr><br><br> 

                <form method="post" action="processa.php">
                
                    Marca<br>
                    <input type="text" name="Marca" class="campo" maxlength="40" required autofocus><br>
                    Modelo<br>
                    <input type="text" name="Modelo" class="campo" maxlength="40" required><br>
                    Ano<br>
                    <input type="text" name="ano" class="campo" maxlength="4" required><br>
                    Valor de Venda<br>
                    <input type="text" name="valor" class="campo" maxlength="20" required><br>

                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar"  class="btn"
                    <br><br>
                    
                </form>
            </section>
        </div>
    </body>
</html>