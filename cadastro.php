<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Dados</title>
    <link rel="stylesheet" href="estilo_cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    
</head>
<body>  
    <div class="container">
        <div class="buttonsForm">
          <div class="btnColor"></div>
          <button id="btnSignin">Entrar</button>
          <button id="btnSignup">Cadastrar</button>
        </div>
    
        <form id="signin" action="logar.php" method="POST">
          <input type="email" placeholder="Email" name="email" required />
          <i class="bi bi-envelope-fill"></i>
          <input type="password" placeholder="Senha" required  name="senha"/>
          <i class="bi bi-lock-fill"></i>
          <div class="divCheck">
            <input type="checkbox" />
            <span>Lembrar Senha</span>
          </div>
          <button type="submit">Entrar</button>
        </form>
        <a href="ajuda/ajuda.php" id="ajuda1">Precisa de ajuda?</a>
    
        <form id="signup" method="POST">
          <input type="email" placeholder="Email" required />
          <i class="bi bi-envelope-fill"></i>
          <input type="password" placeholder="Senha" required min="3"/>
          <i class="bi bi-lock-fill"></i>
          <div class="divCheck">
            <input type="checkbox" required />
            <span>Termos</span>
          </div>
          <button type="submit">Cadastrar-se</button>
        </form>
        
    </div>
    
    <script src="index.js"></script>
</body>
</html>