<?php include("controladores/verificador-permanencia.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dev. Watch</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">Dev. Watch</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="cadastro-produto.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Produto</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li>
                    <a href="controladores/logout.php">
                        <i class='bx bx-log-out bx-flip-horizontal'></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>   
                <li class="mode">
                    <a href="#">
                        <i class='bx bx-moon change-theme'></i>  
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle"><span class="switch"></span></div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
            
            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cadastro de Produto</span>
                </div>

                <div class="activity-data">
                    <form class="row g-3" action="" method="POST">
                        <div class="col-md-6">
                            <label class="form-label data-form">Nome</label>
                            <input type="text" class="form-control" name="txtNome" minlength="3" maxlength="50" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label data-form">Preço</label>
                            <input type="number" class="form-control" name="txtPreco" placeholder="R$00.000,00" min="1" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label data-form">Categoria</label>
                            <select class="form-select" name="slCategoria" required>
                                <option selected value="Null">Nenhuma</option>
                                <option value="Aquat">Aquat</option>
                                <option value="Metal">Metal</option>
                                <option value="Porto">Porto</option>
                                <option value="Aviador">Aviador</option>
                                <option value="Vintage">Vintage</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label data-form">Descrição</label>
                            <textarea type="text" class="form-control" name="txtDescricao" rows="3" minlength="10" maxlength="300" required></textarea>
                        </div>

                        <div class="col-12 col-md-8">
                            <label class="form-label data-form">Imagem</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label data-form">Quantidade</label>
                            <input type="number" class="form-control" name="txtQuantidade" placeholder="1" min="1" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>
</html>