<!DOCTYPE html>
<html>
<head>
<title>Cargar Persona</title>
</head>
<body>
<from actions="/personas" method="POST"> 
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido">
    <br>
    <label>Dni</label>
    <input type="numeric" name="dni">
    <br>
    <label>Telefono</label>
    <input type="numeric" name="telefono">
    <br>
    <label>Email</label>
    <input type="text" name="email">
    <br>
    <label>Direccion</label>
    <input type="text" name="direccion">
    <br>
    <button>Crear</button>
    <input type="submit" name="crear">
    </from>
</body>
</html>

