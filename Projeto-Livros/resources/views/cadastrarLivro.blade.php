<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="{{action('books'@store')}}"  method="POST">
            <fieldset>
                <legend><b>Cadastro de livros</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do livro</label>
                    <br><br>
                <div class="inputBox">
                    <input type="number"  id="nome" class="inputUser" title="Digite o ISBN !" required>
                    <label for="nome" class="labelInput">ISBN</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text"  id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Autor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text"  id="nome" class="inputUser"  title="Digite mais de um genêro se quiser !" required>
                    <label for="nome" class="labelInput">Digite o genêro</label>
                </div>
                <br><br>
                <input id="submit" type="submit" value="cadastrar" name="submit"  title="Clique para cadastrar o livro!"/>
                <br><br>
                <a class="nav-link" href="home.blade.php" style="color:white;"><h7>Voltar</h7></a>
            </fieldset>
        </form>
        
    </div>
</body>
</html>