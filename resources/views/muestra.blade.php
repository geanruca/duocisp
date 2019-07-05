<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Instituto de Salud Pública</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .m-t-md{
                margin-top: 120px;
            }
            .m-t-lul{
                margin-top:10px;
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref m-t-lul">
            <div class="content">
                <div class="links">
                    <a href="http://proyectoduoc.test/">Inicio</a>
                    <a href="http://proyectoduoc.test/muestras">Ingreso de Muestras</a>
                    <a href="http://proyectoduoc.test/loginE">Intranet</a>
                </div>
            </div>
        </div>
<div class="content row flex-center position-ref m-t-md">
<div class="col-sm-1 " ></div>
<div class="card " style="width: 18rem;">
  <img src="http://lorempixel.com/output/nature-q-c-200-200-10.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ingreso de muestra</h5>
        <p class="card-text"></p>
        <a href="http://proyectoduoc.test/particulares" class="btn btn-primary">Particular</a>
        <a href="http://proyectoduoc.test/empresas" class="btn btn-primary">Empresa</a>
  </div>
</div>

    </body>
</html>