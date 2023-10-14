<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TPE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Libre</a>
                        <a class="nav-link" href="#">Libre</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4 bg-white">
                    <h2>Formulario</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Buscar" autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Ejemplo</label>
                            <textarea class="form-control" id="descripcion" placeholder="descripcion" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ejemplo" class="form-label">Ejemplo</label>
                            <input type="number" class="form-control" id="ejemplo" />
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Guardar</button>
                            <button class="btn btn-secondary">Limpiar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-4 bg-white">
                    <h2>Listado de Juegos</h2>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th class="centrado">id</th>
                                <th class="centrado">Nombre</th>
                                <th class="centrado">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="centrado">1</td>
                                <td class="centrado">Day z</td>
                                <td class="centrado">$10 USD</td>
                            </tr>
                            <tr>
                                <td class="centrado">2</td>
                                <td class="centrado">Elder Ring</td>
                                <td class="centrado">$10 USD</td>
                            </tr>
                            <tr>
                                <td class="centrado">3</td>
                                <td class="centrado">Pay Day 3</td>
                                <td class="centrado">$10 USD</td>
                            </tr>
                            <tr>
                                <td class="centrado">4</td>
                                <td class="centrado">Metro Exodus</td>
                                <td class="centrado">$10 USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>