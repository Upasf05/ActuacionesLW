function ampliar(imagen) {
    const modal = document.getElementById("visor");
    const modalImg = document.getElementById("imgGrande");
    modal.style.display = "block";
    modalImg.src = imagen.src;
    modalImg.alt = imagen.alt;
  }

  function cerrarModal() {
    document.getElementById("visor").style.display = "none";
  }