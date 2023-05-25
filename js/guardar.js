function changeShirtColor() {
  var colorSelector = document.getElementById("colorSelector");
  var shirtImage = document.getElementById("shirtImage");

  var color = colorSelector.value;
  var imageUrl = "img/camiseta_Blanca.png" + color + ".jpg";

  shirtImage.src = imageUrl;
}

function showPreview() {
  var imageUploader = document.getElementById("imageUploader");
  var previewImage = document.getElementById("previewImage");

  var file = imageUploader.files[0];

  if (file) {
    var reader = new FileReader();

    reader.onload = function(event) {
      previewImage.src = event.target.result;
    };

    reader.readAsDataURL(file);
  } else {
    previewImage.src = "";
  }
}
var cartItems = [];

function buy() {
var selectedOptions = {
  color: document.getElementById("colorSelector").value,
  size: document.getElementById("sizeSelector").value,
  neck: document.getElementById("neckSelector").value,
  image: document.getElementById("previewImage").src
};

// Enviar los datos de la compra a un servidor o realizar cualquier otra acción necesaria
console.log("Compra realizada:", selectedOptions);
}

function addToCart() {
var selectedOptions = {
  color: document.getElementById("colorSelector").value,
  size: document.getElementById("sizeSelector").value,
  neck: document.getElementById("neckSelector").value,
  image: document.getElementById("previewImage").src
};

cartItems.push(selectedOptions);

// Limpiar las opciones de personalización después de añadir al carrito
clearOptions();

// Mostrar una notificación o
}
