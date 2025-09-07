<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>WEB III</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            width: 100%;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #000000, #080808, #0d0d0d, #101820);
            color: #e0f7fa;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            padding: 10px;
            color: #073b6bff;
            text-shadow: 2px 2px 8px #000;
        }
        header {
            width: 100%;
            background: linear-gradient(to right, #000000, #0d1a26);
            color: #FFFFFF;
            box-shadow: 0 4px 10px rgba(0,0,0,0.6);
        }
        .navbar {
            background: linear-gradient(to right, #0a0a0a, #0d1a26, #132c44);
        }
        .navbar .nav-link {
            color: #e0f7fa !important;
        }
        .navbar .nav-link.active {
            color: #072d68ff !important;
            font-weight: bold;
        }
        .conectar {
            width: 100%;
            background: #0d1a26;
            color: #e0f7fa;
            padding: 10px;
            text-align: right;
            box-shadow: inset 0 -2px 5px rgba(0,0,0,0.4);
        }
        .conectar a {
            color: #358aa7ff;
            font-weight: bold;
            text-decoration: none;
            margin-left: 10px;
        }
        .card.dark {
            background: rgba(13, 26, 38, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.6), 0 0 10px rgba(128, 223, 255, 0.3);
            color: #e0f7fa;
            transition: transform 0.3s, box-shadow 0.3s, border 0.3s;
        }
        .card.dark h5 {
            color: #113e4dff;
            font-weight: bold;
        }
        .card.dark:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 25px 8px rgba(128, 223, 255, 0.9);
            border: 2px solid rgba(200, 240, 255, 0.9); 
        }
        .card-img-top {
            height: 250px;
            object-fit: contain;
            background-color: #0d1a26;
            border-radius: 15px 15px 0 0;
        }
        .section-box {
            background: rgba(13, 26, 38, 0.85);
            color: #e0f7fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 90%;
            box-shadow: 0 6px 15px rgba(0,0,0,0.6);
        }
        .section-box h2 {
            color: #80dfff;
            text-shadow: 1px 1px 5px #000;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <?php session_start(); ?>

    <header>
        <h1>CALLEJAS TORRICO CRISTOPHER ANDRE</h1>
    </header>

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">INICIO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="conectar">
        <?php
        if(isset($_SESSION["Usuario"])) {
            echo "Usuario: " . $_SESSION["Usuario"] . " ";
            echo "<a href='salir.php'>Salir</a>";
        } else {
            echo '<a href="login.php">Ingresar</a>';
        }
        ?>
    </div>

    <!-- tarjeta modal -->
    <div class="container mt-4">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card dark h-100 text-center">
                    <img src="./img/cl.png" class="card-img-top" alt="Mi Foto">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <button class="btn btn-primary mt-2" style="color:black;" data-bs-toggle="modal" data-bs-target="#miModal">
                            Ver en grande
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="miModalLabel">Mi Foto</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body text-center">
            <img src="./img/ca.png" class="img-fluid rounded shadow" style="max-height: 500px; object-fit: contain;" alt="Mi Foto Ampliada">
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjetas -->
    <div class="container mt-4">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card dark h-100 text-center">
                    <img src="./img/i1.jpg" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Tarea1-WEB III</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dark h-100 text-center">
                    <img src="./img/i2.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido a mi página web</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dark h-100 text-center">
                    <img src="./img/i3.jpg" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Yo y mi Crush</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card dark p-4">
            <h5>UNA HISTORIA INUSUAL: YO Y MI CRONCH</h5>
            <p class="mb-0">
                Cristopher perdió su vuelo por segundos; Anabel lo perdió por ayudar a un turista a encontrar su terminal.
                Los dos, frustrados, terminaron en el mismo salón de espera mirando las pantallas de vuelos parpadeando.
                Un altavoz falló y anunció destinos mezclados: “Próximo a… ¿Corazón Central?” Ambos rieron al mismo tiempo.
                Para matar la espera se retaron a adivinar historias de las personas que pasaban por el aeropuerto.
                Cuando por fin abordaron sus vuelos, subieron en asientos distintos.
                Minutos después, el avión se retrasó por una tormenta y todo quedó a oscuras.
                Al regresar la luz, una niña comenzó a llorar buscando a su mascota en una caja.
                Cristopher y Anabel, desde filas distintas, corrieron por el pasillo con la misma caja en la mano:
                habían adoptado al mismo gatito del aeropuerto sin saberlo.
                Se miraron sorprendidos y estallaron en risa.
                A veces, perder un vuelo es la única forma de tomar el viaje correcto.
            </p>
        </div>
    </div>
</body>
</html>
