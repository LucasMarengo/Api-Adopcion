<!DOCTYPE html>
<html>
<head>
<title>Editar Persona</title>
</head>
<body>
<h1><b><u>Edicion De Persona</u></b></h1><br><br>
<from actions="{{ route('EdicionpersonaController@editar', ['id' => $persona->getIdpersona()]) }}" method="POST"> 
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" value="{{ $autor->getNombre() }}" required>
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido" value="{{ $autor->getApellido() }}" required>
    <br>
    <label>Dni</label>
    <input type="numeric" name="dni" value="{{ $autor->getDni() }}" required>
    <br>
    <label>Telefono</label>
    <input type="numeric" name="telefono" value="{{ $autor->getTelefono() }}" required>
    <br>
    <label>Email</label>
    <input type="text" name="email" value="{{ $autor->getEmail() }}" required> 
    <br>
    <label>Direccion</label>
    <input type="text" name="direccion" value="{{ $autor->getDireccion() }}" required>
    <br>
    <button>Editar</button>
    <input type="submit" name="editar">
    </from>
</body>
</html>