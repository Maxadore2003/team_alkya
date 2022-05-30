// on crée la variable pour le carousel d'images
let slideIndex = 0;
// on lance le carousel d'images
showSlides();

// Fonction qui va gérer le carousel d'images
function showSlides() {
    let i;
    // on récupère la liste des éléments de la classe gameImage (les div contenant les images)
    const slides = document.getElementsByClassName("gameImage");
    // on itère dans la liste des images pour les rendres invisibles
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // on incrémente l'ID de l'image courante
    slideIndex++;
    // on vérifie si on a atteint la dernière image
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    // on affiche l'image voulue
    slides[slideIndex - 1].style.display = "block";
    // on recommence avec 8 secondes de délai
    setTimeout(showSlides, 8000);
}

const button = document.querySelector('button');
button.addEventListener('click', showSlides);