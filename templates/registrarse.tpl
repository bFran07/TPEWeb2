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
    <div class="card text-center m-auto" style="width: 40rem;">
        <div class="card-header">
            Cree su usuario
        </div>
        <div class="card-body">
            <form action="sendSignUp" method="POST">
                <div class="mb-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
                
                            
                        


{include file="footer.tpl"}