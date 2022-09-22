<?php 
    function gerenciaProdutos(){
        require("storage/produtosDefault.php");

        if(isset($_COOKIE['categoriaProduto'])){
            if($_COOKIE['categoriaProduto'] == "Aquat"){$sequencia = ["Aquat", "Porto", "Metal", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Porto"){$sequencia = ["Porto", "Aquat", "Metal", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Metal"){$sequencia = ["Metal", "Aquat", "Porto", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Aviador"){$sequencia = ["Aviador", "Aquat", "Porto", "Metal", "Vintage"];
            }else{$sequencia = ["Vintage", "Aquat", "Porto", "Metal", "Aviador"];}

            foreach($sequencia as $categoria){
                for($produto = 0; $produto < 30; $produto++){
                    if($produtos[$produto]['categoria'] == $categoria){
                        escreveProduto($produtos[$produto]['categoria'],$produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
                    }
                }
            }
        }else{
            shuffle($produtos);
            for($produto = 0; $produto < 30; $produto++){
                escreveProduto($produtos[$produto]['categoria'],$produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
            }
        }
    }

    function gerenciaRecomendados(){
        require("storage/produtosDefault.php");

        if(isset($_COOKIE['categoriaProduto'])){$categoria = $_COOKIE['categoriaProduto'];
        }else{$categoria = "Vintage";}

        $cont = 0;

        for($produto = 0; $produto < 30; $produto++){
            if($produtos[$produto]['categoria'] == $categoria){
                if($cont < 3){
                    escreveRecomendacao($produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
                    $cont++;
                }else{break;}
            }
        }
    }

    function gerenciaLancamentos(){
        require("storage/produtosDefault.php");
    
        $lancamentos = [6, 12, 18, 24, 30];

        foreach($lancamentos as $lancamento){
            for($produto = 0; $produto < 30; $produto++){
                if($produtos[$produto]['id'] == $lancamento){
                    escreveLancamento($produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
                }
            }
        }
    }

    function escreveProduto($categoria, $nome, $preco, $img){
        echo('
        <article class="products__card">
            <span class="featured__tag">'.$categoria.'</span>

            <img src="assets/img/'.$img.'.png" class="products__img">
            <h3 class="products__title">'.$nome.'</h3>
            <span class="products__price">R$'.$preco.'</span>

            <a class="products__button" href="produtoPag.php?categoria='.$categoria.'"><i class="bx bx-shopping-bag"></i></a>
        </article>
        ');
    }

    function escreveRecomendacao($nome, $preco, $img){
        echo('
        <article class="featured__card">
            <span class="featured__tag">Recomendo</span>
            <img src="assets/img/'.$img.'.png" alt="" class="featured__img">

            <div class="featured__data">
                <h3 class="featured__title">'.$nome.'</h3>
                <span class="featured__price">R$'.$preco.'</span>
            </div>

            <button class="button featured__button">+ Carrinho</button>
        </article>
        ');
    }

    function escreveLancamento($nome, $preco, $img){
        echo('
        <article class="new__card swiper-slide">
            <span class="new__tag">Novo</span>
            <img src="assets/img/'.$img.'.png" alt="" class="new__img">

            <div class="new__data">
                <h3 class="new__title">'.$nome.'</h3>
                <span class="new__price">R$'.$preco.'</span>
            </div>

            <button class="button new__button">+ Carrinho</button>
        </article>
        ');
    }

    function escreveAvaliacao($nome, $data, $mensagem){
        echo('
        <div class="testimonial__card swiper-slide">
            <div class="testimonial__quote"><i class="bx bxs-quote-alt-left"></i></div>
            <p class="testimonial__description">'.$mensagem.'</p>
            <h3 class="testimonial__date">'.$data.'</h3>

            <div class="testimonial__perfil">
                <img src="assets/img/icon_avaliacao.png" alt="" class="testimonial__perfil-img">
                <div class="testimonial__perfil-data">
                    <span class="testimonial__perfil-name">'.$nome.'</span>
                </div>
            </div>
        </div>
        ');
    }
?>