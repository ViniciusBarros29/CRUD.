<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Marcas</title>
    <body style="background-color:lightgray;">
    <script>
        function validaPagina(){
    		var objNome = document.getElementById("descricao");
    		if (objNome.value == ""){
    			alert("Informe a descrição da marca");
    			objNome.focus();
    			return false;
    		}
    		return true;
    	} 
    </script>
</head>
<body>
    
    <center> 
        <h1>VOTAÇÃO PARA REPRESENTANTE DE TURMA</h1>
        <BR>
        <img src="https://cecom.ifc.edu.br/wp-content/uploads/sites/17/2015/10/Logo_IFC_vertical.png">
        <br>
        <hr>
        <h2> Caso deseje se candidatar sem uma equipe definida insira seu nome</h2>
    <form method="post" action="acao.php">
        Insira seu Nome: <input name="descricao" id="descricao" type="text">
        <button name="acao" value="salvar" id="acao" type="submit" onclick="return validaPagina();">
                     Salvar
                </button>
    </form> 
    <hr>
    <h2> Caso não, acesse o link abaixo para realizar o seu voto.
    <h2>
<button>
<a href="candidatos.php">Votar</a>
</br>
    </h3>
    </button>
    <hr>
    <b>
    <h4><i>O meu ideal político é a democracia, para que todo o homem seja respeitado como indivíduo e nenhum venerado.</i></h4>
    <h5>                                                                                                        Albert Einstein</h5>
    <hr>
    </b>
    </center>
</body>
</html>