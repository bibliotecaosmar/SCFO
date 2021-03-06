<!DOCTYPE html>
<html lang="pt-br" style="position: relative; min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle Financeiro Orçamentário</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- Formatação de textos -->
    <script>
        function formatar(mascara, documento){
          var i = documento.value.length;
          var saida = mascara.substring(0,1);
          var texto = mascara.substring(i);
          if (texto.substring(0,1) != saida){
                    documento.value += texto.substring(0,1);
          }
        }
    </script>
    
    <script>
        function SomenteNumero(e) {
            var tecla = (window.event) ? event.keyCode : e.which;
            if ((tecla > 47 && tecla < 58 || tecla === 45 || tecla === 46))
                return true;
            else {
                if (tecla === 8 || tecla === 0)
                    return true;
                else
                    return false;
            }
        }
    </script>
    
</head>
<body style="margin-bottom: 150px; background-image: url('/img/money.jpg'); height: 100%; background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    
    @if (!Auth::guest())
    <nav class="navbar navbar-expand-md navbar-dark bg-scfo fixed-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand ">SCFO</a>
            <form class="form-inline">
                <ul class="list-unstyled text-white text-center ml-2 mr-2 pt-2">
                    <li>
                        <p class="mb-0 ">{{ Auth::user()->nome }}</p>
                    </li>
                    <li>{{ Auth::user()->cpf }}</li>
                </ul>
                <a href="{{ url('/logout') }}" class="btn btn-scfo">Sair</a>
            </form>
        </div>
    </nav>               
    @endif
    
    @yield('content')
    
</body>
    <div style="position: absolute;
                bottom: 0;
                width: 100%;">
        <footer class="container-fluid navbar navbar-expand-md navbar-dark text-white bg-scfo ">
        <div class="container">
            <p>CONTATO<br>
            <span>sac.scfo@gmail.com</span></p>
            

        </div>
               
         
    </footer>
    <div id="copyright" class="container-fluid bg-scfo text-scfo text-center p-2"><small>SCFO - 2018 Todos os direitos reservados.</small></div>
    
    </div>
    
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</html>