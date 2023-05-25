 function changeShirtColor() {
    var colorSelector = document.getElementById("colorSelector");
    var selectedColor = colorSelector.value;
    var shirtImages = document.getElementsByClassName("shirt-img");
  
    // Ocultar todas las imágenes de camisa
    for (var i = 0; i < shirtImages.length; i++) {
      shirtImages[i].classList.remove("show");
    }
  
    // Mostrar la imagen de camisa correspondiente al color seleccionado
    var selectedShirtImage = document.getElementById("shirtImage-" + selectedColor);
    selectedShirtImage.classList.add("show");
  }