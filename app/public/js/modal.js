// Selectionner l'id validationDelete
const modal = document.getElementById("validationDelete");
// Selectionner l'id myBtn
const btn = document.getElementById("myBtn");
// Selectionner l'élément <span> pour fermer la modal
const span = document.getElementsByClassName("close")[0];
// Fonction permettant d'ouvrir/afficher la modal
btn.onclick = function() {
  modal.style.display = "block";
}
// Fonction permettant de fermer la modal
span.onclick = function() {
  modal.style.display = "none";
}