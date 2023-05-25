window.addEventListener("DOMContentLoaded", function () {
  // Muestra la imagen de camisa por defecto al cargar la página
  var camisaPorDefecto = document.getElementById("camisa_por_defecto");
  camisaPorDefecto.style.display = "block";
});

function changeShirtColor() {
  var colorSeleccionado = document.getElementById("colorSelector").value;

  // Oculta todas las imágenes de camisas
  var imagenesCamisa = document.getElementsByClassName("shirt-img");
  for (var i = 0; i < imagenesCamisa.length; i++) {
    imagenesCamisa[i].style.display = "none";
  }

  // Oculta la imagen de camisa por defecto 
  var camisaPorDefecto = document.getElementById("camisa_por_defecto");
  camisaPorDefecto.style.display = "none";

  // Muestra solo la imagen seleccionada
  var imagenSeleccionada = document.getElementById("shirtImage-" + colorSeleccionado);
  imagenSeleccionada.style.display = "block";
}
