document.getElementById('pqrs-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Evitar que el formulario se envíe
  
    // Obtener los valores del formulario
    var nombre = document.getElementById('nombre').value;
    var tipo = document.getElementById('tipo').value;
    var mensaje = document.getElementById('mensaje').value;
  
    // Crear un elemento de lista con los valores de la PQRS
    var pqrsItem = document.createElement('li');
    pqrsItem.innerHTML = '<strong>' + nombre + '</strong> - ' + tipo + '<br>' + mensaje;
  
    // Agregar el elemento de lista a la lista de PQRS
    document.getElementById('pqrs-ul').appendChild(pqrsItem);
  
    // Limpiar el formulario
    document.getElementById('nombre').value = '';
    document.getElementById('tipo').value = 'pregunta';
    document.getElementById('mensaje').value = '';
  });
  