

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  -->
    <title>Consulta de livros</title>
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
        <form action="">
            <fieldset>
                <legend><b>Consulta de livros</b></legend>
                <br><br>
	<form action="{{books}}" method="get">
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Digite o nome do livro</label>
            <br><br>
        <button id="submit">Buscar</button>
	    <br><br>
    </div>
    <a class="nav-link" href="cadastearLivro.blade.php" style="color:white;"><h7>Cadastrar livro</h7></a>
            </fieldset>
        </form>
    </div>
    <fieldset>
        <table class=""><!--Classe bts-table table-striped--->
            <thead>
              
              <tr>
                <th>#</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>ISBN</th>
                <th>Data de cadastro</th>
                <th>Data da última devolução</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->amount}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->created_at}}</td>
                <td>{{$book->updated_at}}</td>
                <td>
                  <a href="{{route('books/{id}', ['id' => $book->id]) }}">Alterar</a> |
                  <a href="{{route('books/{id}', ['id' => $book->id]) }}" onclick=" return confirm('Deseja mesmo apagar o livro selecionado?')">Remover</a>
                </td>
              </tr>
              
  
            </tbody>
          </table>
    </fieldset>
</body>
</html>