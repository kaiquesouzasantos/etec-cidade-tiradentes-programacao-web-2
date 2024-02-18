<?php
    class ViewController{
        function getHead(){
            echo('
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <meta name="author" content="Kaique Souza Santos">
                <title>Aula 08 | Orientação a Objetos</title>
                <style>
                    h1 {
                        text-align: center;
                        margin-top: 5px;
                        color: #fff;
                    }
    
                    .title-container {
                        padding: 10px;
                        width: 100%;
                        height: 100px;
                        background: rgb(131, 58, 180);
                        background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
                        margin-top: 0;
                        margin-bottom: 35px;
                    }
    
                    .title-container p {
                        text-align: center;
                        color: #fff;
                        margin-bottom: 5px;
                    }
    
                    h5 {
                        text-align: center;
                    }
    
                    img{
                        max-width: 20%; 
                        display: block;
                        margin: 0px auto;
                    }
                </style>
            </head>
            ');
        }
    } 
?>