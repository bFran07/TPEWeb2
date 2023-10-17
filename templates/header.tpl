<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c59d1be4df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./css/images/steam_icon_logo.ico"/>
    <link href="css/style.css" rel="stylesheet">
    <title>Steamcito</title>
</head>
<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <a href="home" class="text-decoration-none"><h5 class="text-white h4">HOME</h5></a>
    {if $isAdmin}
    <span class="text-muted"><a href="adminPanel" class="text-decoration-none text-success admin-panel">ADMIN PANEL <i class="fa-solid fa-screwdriver-wrench"></i></a></span>
    {/if}
    {if $isLogged}
      <p class="text-white">
         <a href="logout"> 
            Logout
          </a>
      </p>
    {else}
      <p class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Login
      </p>
    {/if}
  </div>
  <div class="b-line"></div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="login" method="POST">
            <div class="mb-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
            <div class="py-4 text-center">
                <p class="fw-bold">O</p>
                <a href="signUp">Registrarse</a>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>