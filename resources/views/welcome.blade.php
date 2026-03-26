<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <meta name="base-url" content="{{ url('/') }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://school.bauti.dev/porfolio-far/css/home.css">
      <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background-color: #f4f4f4;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">   
                <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                     <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                     <li class="nav-item"><a class="nav-link" href="#videos">Videos</a></li>
                     <li class="nav-item"><a class="nav-link" href="#calculadora">Calculadora</a></li>
                     <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

   
    <div style="padding: 20px;">

<div class="container text-center" id="inicio" style="margin-top: 50px; margin-bottom: 50px;">
    <h1>Portfolio</h1>
    <p>Bienvenido</p>
</div>


<div class="container" id="galeria" style="background-color: white; padding: 30px; border-radius: 5px;">
    <h2 class="text-center">galería</h2>
    <hr>
    <div class="row">
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwI3Rt1vPIyBjcDer9NnCOulhQSrExV-Z2Nod0oddRUrNPaO1s7t6cvvx7RfGwvygM-Zb5KmX4txrUiOtqsW966xiN26aeLZrpw95Xg91c&s=10" alt="foto1" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="https://i.imgur.com/kj7EeW4.jpg">
        </div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyGYu4miPV_C4O87MtvAte-phulHbiewX_cQ&s" alt="foto2" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="{{ asset('public/img/proyecto2.jpg') }}">
        </div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2jCtYdcjWiPRVFp9WfbtXLgqgb_NyVwt7rA&s" alt="foto3" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="{{ asset('public/img/proyecto3.jpg') }}">
        </div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlAe216rT1RXctitZtE5C8eIQR7zN-9-Lg6g&s" alt="foto4" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="{{ asset('public/img/proyecto4.jpg') }}">
        </div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTWoUb06DYsay_79AofZ79pkFiGQZnPWUEGQ&s" alt="foto5" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="{{ asset('public/img/proyecto5.jpg') }}">
        </div>
        <div class="col-md-4" style="margin-bottom: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmh3pic_Mz-Ri4ZHPvqjMnPNJ6--a2jtULEQ&s" alt="foto6" class="img-fluid galeria-img" style="cursor: pointer; height: 200px; width: 100%;" data-full="{{ asset('public/img/proyecto6.jpg') }}">
        </div>
    </div>
</div>


<div class="modal fade" id="modalGaleria">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="imagenPrincipalModal" src="" style="max-width: 100%;">
            </div>
        </div>
    </div>
</div>


<div class="container" id="videos" style="background-color: white; padding: 30px; border-radius: 5px; margin-top: 30px;">
    <h2 class="text-center">Videos</h2>
    <hr>
    <div class="row text-center">
        <div class="col-md-6 mb-3">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 mb-3">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>


<div class="container text-center" id="calculadora" style="background-color: #333; color: white; padding: 30px; border-radius: 5px; margin-top: 30px;">
    <h2>Calculadora </h2>
    <div style="background-color: white; color: black; padding: 20px; width: 300px; margin: 0 auto; border: 1px solid black;">
        <input type="text" id="calc-display" readonly value="0" style="width: 100%; font-size: 24px; text-align: right; margin-bottom: 10px;">
        
        <div>
            <button type="button" onclick="calcNum('7')" style="width: 50px; height: 50px; margin: 2px;">7</button>
            <button type="button" onclick="calcNum('8')" style="width: 50px; height: 50px; margin: 2px;">8</button>
            <button type="button" onclick="calcNum('9')" style="width: 50px; height: 50px; margin: 2px;">9</button>
            <button type="button" onclick="calcOp('/')" style="width: 50px; height: 50px; margin: 2px; color: red;">/</button>
        </div>
        <div>
            <button type="button" onclick="calcNum('4')" style="width: 50px; height: 50px; margin: 2px;">4</button>
            <button type="button" onclick="calcNum('5')" style="width: 50px; height: 50px; margin: 2px;">5</button>
            <button type="button" onclick="calcNum('6')" style="width: 50px; height: 50px; margin: 2px;">6</button>
            <button type="button" onclick="calcOp('*')" style="width: 50px; height: 50px; margin: 2px; color: red;">*</button>
        </div>
        <div>
            <button type="button" onclick="calcNum('1')" style="width: 50px; height: 50px; margin: 2px;">1</button>
            <button type="button" onclick="calcNum('2')" style="width: 50px; height: 50px; margin: 2px;">2</button>
            <button type="button" onclick="calcNum('3')" style="width: 50px; height: 50px; margin: 2px;">3</button>
            <button type="button" onclick="calcOp('-')" style="width: 50px; height: 50px; margin: 2px; color: red;">-</button>
        </div>
        <div>
            <button type="button" onclick="calcClear()" style="width: 50px; height: 50px; margin: 2px;">C</button>
            <button type="button" onclick="calcNum('0')" style="width: 50px; height: 50px; margin: 2px;">0</button>
            <button type="button" onclick="calcEval()" style="width: 50px; height: 50px; margin: 2px;">=</button>
            <button type="button" onclick="calcOp('+')" style="width: 50px; height: 50px; margin: 2px; color: red;">+</button>
        </div>
    </div>
</div>


<section id="contact" class="section-padding bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-5 text-primary mt-5">Contacto</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 p-md-5">
                            <form id="contactForm" novalidate>
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">ingresá tu nombre.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">ingresá un email válido.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-bold">Asunto</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                    <div class="invalid-feedback">ingresá un asunto.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label fw-bold">Mensaje</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    <div class="invalid-feedback">escribí tu mensaje.</div>
                                </div>
                                
                                <div id="formAlert" class="alert d-none mt-3" role="alert"></div>
                                
                                <button type="submit" id="sendBtn" class="btn btn-primary w-100 mt-2">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    <footer style="background-color: black; color: white; text-align: center; padding: 20px; margin-top: 50px;">
        <p>Copyright &copy; 2026 </p>
        <p>
            <a href="#" style="color: white; margin: 0 10px; text-decoration: none;">Instagram</a> |
            <a href="#" style="color: white; margin: 0 10px; text-decoration: none;">X</a> 
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://school.bauti.dev/porfolio-far/js/index.js"></script>
    
  
    
</body>
</html>
