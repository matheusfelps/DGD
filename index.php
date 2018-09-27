<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
     <div>Cadastrar</div>
    <form action="cadastrar.php" method="post" >
    <div>
    <label for="nome">usuario:</label>
    <input type="text" id="nome" required name="nome" min="5" max="9" /> 
    </div>   
    <div>
    <label for="email">Email:</label>
    <input type="text" id="email" required name="email" /> 
    </div>   
    <div>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" required name="senha" min="5" max="9" /> 
    </div>   
    <div>
    <label for="nome">Confirmar senha:</label>
    <input type="password" id="confirmar" required name="confirmar" min="5" max="9" /> 
    </div>   
    <button type="submit">Cadastrar</button>
    </form>
    <div>
    <br>
    <div>Login</div>
    <form action="login.php" method="post" >
    <div>
    <label for="nome">usuario:</label>
    <input type="text" id="nome" required name="nome" min="5" max="9" /> 
    </div>   
    <div>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" required name="senha" min="5" max="9" /> 
    </div>   
    <button type="submit">Entrar</button>
    </form>
    </div>


</body>
</html>