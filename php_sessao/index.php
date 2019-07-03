

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" id="form-login" method="POST">

        <label for="">
            Email
            <input type="text" placeholder="Email" name="email">
        </label>
        <br />

        <label for="">
            Senha
            <input type="text" placeholder="Senha" name="senha">
        </label>

        <br />

        <input type="submit" value="Enviar" id="">

    </form>

    <div id="carregando" >
        <div id="1379907588516">
            <div style="position: relative; top: 250px; left: 40%; width: 50%;">
                <img src="" alt="">
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>
    <script>
        
        $(function(){
            $("#form-login").on('submit', function(e){
                
                $("#carregando").css("display", "block");

                $.post("validarLogin.php", $("#form-login").serialize(), function(data){
                    $("#carregando").css("display", "none");

                    if(data == "encontrado") {
                        document.location.href = "logado.php";
                    } else {
                        alert("Usuário Inválido");
                    }

                })
            })
        })

    </script>
</body>
</html>