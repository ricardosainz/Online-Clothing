<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OC: IniciarSesion</title>
    <link rel="stylesheet" href="../css/styleinreg.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Iniciar sesion</h2>
    </div>
    <form id="form" class="form">
        <div class="form-control">
            <label for="username">Usuario</label>
            <input type="text" placeholder="Usuario" id="username" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" placeholder="Contraseña" id="password"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <button>Enviar</button>
    </form>
</div>
</body>
</html>
