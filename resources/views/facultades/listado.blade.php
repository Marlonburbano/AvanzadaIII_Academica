
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')

<button type="button" id="boton1" class="btn">Registrar </button> <br><br>
<style type="text/css">
 #boton1{
    margin-left: 53%
 }

 .btn {
  --border-color: linear-gradient(-45deg, #ffae00, #7e03aa, #00fffb);
  --border-width: .125em;
  --curve-size: .5em;
  --blur: 30px;
  --bg: #080312;
  --color: #afffff;
  color: var(--color);
    /* use position: relative; so that BG is only for .btn */
  position: relative;
  isolation: isolate;
  display: inline-grid;
  place-content: center;
  padding: .5em 1.5em;
  font-size: 17px;
  border: 0;
  text-transform: uppercase;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, .6);
  clip-path: polygon(
            /* Top-left */
            0% var(--curve-size),

            var(--curve-size) 0,
            /* top-right */
            100% 0,
            100% calc(100% - var(--curve-size)),

            /* bottom-right 1 */
            calc(100% - var(--curve-size)) 100%,
            /* bottom-right 2 */
            0 100%);
  transition: color 250ms;
}

.btn::after,
.btn::before {
  content: '';
  position: absolute;
  inset: 0;
}

.btn::before {
  background: var(--border-color);
  background-size: 300% 300%;
  animation: move-bg7234 5s ease infinite;
  z-index: -2;
}

@keyframes move-bg7234 {
  0% {
    background-position: 31% 0%
  }

  50% {
    background-position: 70% 100%
  }

  100% {
    background-position: 31% 0%
  }
}

.btn::after {
  background: var(--bg);
  z-index: -1;
  clip-path: polygon(
            /* Top-left */
            var(--border-width)
            calc(var(--curve-size) + var(--border-width) * .5),

            calc(var(--curve-size) + var(--border-width) * .5) var(--border-width),

            /* top-right */
            calc(100% - var(--border-width))
            var(--border-width),

            calc(100% - var(--border-width))
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),

            /* bottom-right 1 */
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) calc(100% - var(--border-width)),
            /* bottom-right 2 */
            var(--border-width) calc(100% - var(--border-width)));
  transition: clip-path 500ms;
}

.btn:where(:hover, :focus)::after {
  clip-path: polygon(
                /* Top-left */
                calc(100% - var(--border-width))

                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),

                calc(100% - var(--border-width))

                var(--border-width),

                /* top-right */
                calc(100% - var(--border-width))

                 var(--border-width),

                calc(100% - var(--border-width))

                calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),

                /* bottom-right 1 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * .5))
                calc(100% - var(--border-width)),

                /* bottom-right 2 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
                calc(100% - var(--border-width)));
  transition: 200ms;
}

.btn:where(:hover, :focus) {
  color: #fff;
}

   </style>


</td>
<table class="table" border="2">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">codigo</th>
        <th scope="col">nombre</th>
        <th scope="col">opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>200</td>
        <td>Ingenieria</td>
        <td>
            <button type="button" class="btn btn-success">editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>

        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>300</td>
        <td>Derecho</td>
        <td>
            <button type="button" class="btn btn-success">editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>

    </tbody>
  </table>

@stop













@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

