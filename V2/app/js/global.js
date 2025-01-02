document.getElementById('hover').addEventListener('mouseover', () => { 
        document.getElementById('hover').style.transform = "scale(0)"
        document.getElementById('hover').style.opacity = "0.1"
        document.getElementById('hover').style.transition = "all 0.2s"
        setTimeout(function(){
            document.getElementById('hover').style.display = 'none';
            document.getElementById('hover_deux').style.display = 'block'; 
        }, 200)
        setTimeout(function(){
            document.getElementById('hover_deux').style.transition = "all 0.2s"
            document.getElementById('hover_deux').style.transform = "scale(1)"
            document.getElementById('hover_deux').style.opacity = "1"
        }, 300)
})

document.getElementById('hover_deux').addEventListener('mouseout', () => { 
        document.getElementById('hover_deux').style.transform = "scale(0)"
        document.getElementById('hover_deux').style.transition = "all 0.2s"
        document.getElementById('hover_deux').style.opacity = "0.1"
        setTimeout(function(){
            document.getElementById('hover_deux').style.display = 'none';
            document.getElementById('hover').style.display = 'block'; 
        }, 200)
        setTimeout(function(){
            document.getElementById('hover').style.transition = "all 0.2s"
            document.getElementById('hover').style.transform = "scale(1)"
            document.getElementById('hover').style.opacity = "1"
        }, 300)
})

const content = document.getElementById('content');
const slideDownBtn = document.getElementById('slideDownBtn');
const slideUpBtn = document.getElementById('slideUpBtn');

// Fonction pour faire glisser le contenu vers le bas
function slideDown(element) {
  element.classList.add('visible');
  element.classList.remove('hidden');
}

// Fonction pour faire glisser le contenu vers le haut
function slideUp(element) {
  element.classList.remove('visible');
  // Attendre la fin de la transition avant de masquer complètement
  setTimeout(() => {
    if (!element.classList.contains('visible')) {
      element.classList.add('hidden');
    }
  }, 500); // Durée identique à la transition CSS
}

slideDownBtn.addEventListener('click', () => slideDown(content));
slideUpBtn.addEventListener('click', () => slideUp(content));

// FONCTION DES MENUS

// DECLARATION DES VARIABLES CORRESPOND A CHAQUE BLOC
let blocHome = document.getElementById('homeBloc');
document.getElementById('plusSurMoi').addEventListener('click', () => {
      slideUp(content)
});