<?php 
    require_once("../../router.php");
    ViewController::getHead();
?>

<body>
    <div class="title-container"><h1>Exercicio 04 | Login</h1></div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">FORMULARIO DE LOGIN</h5>
                <form method="POST" action="../../security/controladores/verificador-acesso.php">
                    <div class=" mb-3">
                        <label class="form-label">Usuário</label>
                        <input type="text" class="form-control" name="txtUsuario" required>
                    </div>        
                    <div class=" mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" name="txtSenha" required>
                    </div>         
                    <button type="submit" class="btn btn-primary" id="btnEnviar">Logar</button>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            <a class="btn btn-dark" href="../../index.php">Voltar</a>
        </div>
    </div>
</body>
</html>