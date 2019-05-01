<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<title>Agregar noticia</title>
</head>
<body class="bg-light">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal">Noticas de Misiones</h5>
<nav class="my-2 my-md-0 mr-md-3">
<a class="p-2 text-dark" href="/Emi">Agregar noticias</a>
<a class="p-2 text-dark" href="/Emi/noticias.php">Ver Nonticias</a>

</div>
    <div class="co  ntainer">
  <div class="py-5 text-center">
<img src="http://www.cgepm.gov.ar:8888/seguridadvial/wp-content/uploads/2017/04/misiones-vertical-color.png" class="rounded mx-auto d-block" alt="200" width="200">
    <h2>Agrega tu Noticia</h2>
    <p class="lead">Agregue la noticia que usted le parece relevante para los demás </p>
  </div>
    </div>
    <div class="container-fluid">
      <h4 class="mb-3">Danos tu noticia</h4>
      <form class="needs-validation" novalidate action="noticias.php" method="post">
        <div class="row">
          <div class="container-fluid ">
            <label for="firstName">Titulo de Noticia</label>

<input type="text"class="form-control" name="titulo" id="titulo"placeholder="Titulo de Noticia ">
            </div>
          </div>

          </div>
        </div>

        <div class="container-fluid"  >
          <label for="conte">Contenido</label>

            <textarea   class="container-fluid" name="contenido"  id "contenido"placeholder="Ingrese contenido de noticia" ></textarea>

          </div>


        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar Noticia</button>
      </form>
    </div>
  </div>
