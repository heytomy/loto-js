// Fonction pour générer une grille de loto
function genererGrilleLoto() {
  // Tableau des nombres possibles pour une grille de loto
  var nombres = [];
  for (var i = 1; i <= 49; i++) {
    nombres.push(i);
  }

  // Mélange aléatoirement les éléments du tableau
  nombres.sort(() => Math.random() - 0.5);

  // Prend les premiers 5 nombres du tableau mélangé comme nombres de la grille
  var grille = nombres.slice(0, 5);

  // Tri les nombres de la grille dans l'ordre croissant
  grille.sort((a, b) => a - b);

  // Retourne la grille générée
  return grille;
}

// Référence au bouton "Générer une nouvelle grille"
var genererGrilleButton = document.getElementById("generer-grille-button");

// Ajoute un gestionnaire d'évènement pour générer une nouvelle grille lorsque le bouton est cliqué
genererGrilleButton.addEventListener("click", function () {
  // Génère une grille de loto
  var grille = genererGrilleLoto();

  // Affiche la grille dans le conteneur
  var grilleContainer = document.getElementById("grille-container");
  grilleContainer.innerHTML =
    "Voici votre grille de loto : " + grille.join(", ");
});
