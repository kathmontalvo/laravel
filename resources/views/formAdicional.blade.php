<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            .btn{
                width: 100%;
                margin-top: 10px;
                margin-bottom: 10px;
                background-color: none;
                border: none;
                padding: 10px;
                border: 2px solid #ff9800;
                color: #ff9800;
                font-size: 20px;
                font-weight: bold;
            }
            .btn:active{
                background-color: #ff9800;
                color: white;
            }
            .col-12{
                /* margin: auto; */
                margin-top: 10px;
                /* margin-right: 10px;*/
                margin-bottom: 10px; 
                /*margin-left: 10px; */
                /* border: 1px solid #ff9800; */
                padding-left: 15px;
                padding-right: 15px;
                padding-top: 15px;
                padding-bottom: 15px;
            }
            h3, p{
                font-weight: bold;
                color: #333333;
            }
        </style>
    </head>
    <body>
      
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-3">
                <form action="{{route('store_question')}}" method="POST">
                @csrf
                        {{-- <div class="form">
                            <select name="reserva" class="form-control" id="reserva">
                                @foreach($reservas as $reserva)
                                    <option value="{{$reserva->id}}">{{$reserva->apellidos}}</option>
                                @endforeach
                            </select>
                        </div> --}}
                </div>
                <div class="col-12">
                        <h3>Datos personales</h3>
                        <select name="dni" class="form-control" id="">
                            <option value="1">DNI</option>
                            <option value="2">Pasaporte</option>
                            <option value="3">Carnet de extranjeria</option>
                        </select>
                        <p>Número de documento</p>
                        <input type="number" class="form-control" name="number_dni">
                </div>
                <div class="col-12">
                        <h3>Salud</h3>
                        <p>¿Tienes alguna enfermedad, tratamiento, alergia o limitación que debamos tener en cuenta?</p>
                        <select name="salud" class="form-control" id="">
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                            {{-- @if($salud === 'si')
                                $respuesta_salud
                            @else
                                $respuesta_salud === null
                            @endif --}}
                        <input type="text" class="form-control" name="respuesta_salud">
                </div>
                <div class="col-12">
                        <h3>Alimentación</h3>
                        <p>¿Cuál consideras que es tu condición física / salud? </p>
                        <select name="alimentacion" class="form-control" id="">
                            <option value="1">Muy buena</option>
                            <option value="2">Buena</option>
                            <option value="3">Normal</option>
                            <option value="4">No suelo hacer actividad</option>
                        </select>
                </div>
                <div class="col-12">
                        <h3>Calzado</h3>
                        <p>Talla de calzado (Para botas de lluvia)</p>
                        <input type="text" class="form-control" name="calzado">
                </div>
                <div class="col-12">
                        <h3>Transporte</h3>
                        <p>En caso aplique, ¿de dónde te recogemos? (areopuesto: indicar número vuelo y hora de llegada)</p>
                        <input type="text" class="form-control" name="transporte">
                </div>
                <div class="col-12">
                    <button class="btn" type="submit">Enviar</button>
                </div>
                
            </form>
          
      </div>
    </div>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
