console.log('test');
//* NAVIGATION MENU BURGER

const menuBurger = document.querySelector('.menu-burger');
const nav = document.querySelector('nav');

menuBurger.addEventListener('click', () => {
    menuBurger.classList.toggle('open');
    nav.classList.toggle('open');
    nav.classList.toggle('fade-in-up');

    
});

nav.addEventListener('click', () => {
    menuBurger.classList.remove('open');
    nav.classList.remove('open');
});

//* ANIMATION FADE-IN SECTIONS ET TITRES 

const sectionObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
            observer.unobserve(entry.target);

            // Récupération des titres h2/h3 et de chaque mot des titres
            console.log(entry.target);
            const heading = entry.target.querySelector('h2, h3');

            if (heading && heading.textContent) {
                const words = heading.textContent.split(' ');
                heading.textContent = ' ';

                // Itération sur chaque mot pour créer une span
                words.forEach((word) => {
                    const span = document.createElement('span');
                    span.classList.add('animate-title');
                    span.textContent = word;
                    heading.appendChild(span);
                });

                // Création d'une nodeList des spans qui ont la classe d'animation
                const spans = heading.querySelectorAll('.animate-title');

                // Itération sur chaque span et définition d'un délai par rapport à l'index pour déclencher l'animation
                spans.forEach((span, index) => {
                    const delay = (index === 0) ? 400 : index * 500; // Délai de 500 millisecondes pour chaque span à partir du deuxième span

                    setTimeout(function () {
                        span.classList.add('visible');
                    }, delay);
                });
            }
        }
    });
}, {
    rootMargin: '-50px 0px -50px 0px'
});

// Sélection des sections à animer
const sections = document.querySelectorAll('.story, #characters, #place, #studio, footer');

// Itération sur chaque section et ajout de l'observateur d'intersection
for (let i = 0; i < sections.length; i++) {
    const section = sections[i];
    sectionObserver.observe(section);
}

//*  BANNER HERO
// animation logo
gsap.registerPlugin(ScrollTrigger);

gsap.to(".logo-container", {
    y: 450,
    ease: "none",
    scrollTrigger: {
      trigger: ".banner",
      // start: "top bottom", // the default values
      // end: "bottom top",
      scrub: true,
      onEnter: () => console.log('Animation triggered'), 
    }, 
  });
  
// Animation de flottement du logo 
function animateFloating() {
    gsap.to('#logo', {
      y: '+=20',
      x: '+=20',
      duration: 1.5,
      ease: 'sine.inOut',
      yoyo: true,
      repeat: -1
    });
  }  

  // Appel de la fonction d'animation de flottement au chargement de la page
  animateFloating();
  
 
// parallaxe video
document.addEventListener('DOMContentLoaded', function () {
    //const banner = document.querySelector('.banner');
    const video = document.querySelector('.banner video');
  
    new simpleParallax(video, {
      orientation: 'up',
      scale: 1.12,
      overflow: false,
      transition: 'linear'
    });
  
});
 
  // parallaxe logo

 



//*  SECTION LIEU 

//  Modification du dom et ajout conteneur + img pour nuages

const lieu = document.querySelector('#place');

// Ajoute les propriétés CSS: background, position
lieu.style.backgroundImage = "url('wp-content/themes/foce-child/assets/images/without_cloud_place.png')";

// Crée le conteneur "clouds"
let cloudsContainer = document.createElement('div');
cloudsContainer.style.width = '100%';
cloudsContainer.style.minHeight = '699px';
cloudsContainer.style.position = 'relative';
cloudsContainer.id = 'clouds-container';

// Crée les éléments img pour les nuages + propriétés CSS
let cloud1 = document.createElement('img');
cloud1.src = 'wp-content/themes/foce-child/assets/images/big_cloud.png';
cloud1.style.position = 'absolute';
cloud1.style.top = '70px';
cloud1.style.right = 0;
cloud1.style.filter = 'blur(15px)';
cloud1.classList.add('clouds');

let cloud2 = document.createElement('img');
cloud2.src = 'wp-content/themes/foce-child/assets/images/little_cloud.png';
cloud2.style.position = 'absolute';
cloud2.style.top = '35%';
//cloud2.style.left = '56%';
cloud2.style.filter = 'blur(15px)';
cloud2.classList.add('clouds');

// Ajoute les images au conteneur "clouds"
cloudsContainer.appendChild(cloud1);
cloudsContainer.appendChild(cloud2);

// Ajoute le conteneur "clouds" au conteneur "#place"
lieu.appendChild(cloudsContainer);


//* Animation au scroll des nuages avec le plugin scroll trigger de gsap

gsap.registerPlugin(ScrollTrigger);

// Fonction pour activer les positions de départ et d'arrivée dès le premier chargement de la page
function activateScrollTrigger() {
    gsap.to('.clouds', {
        x: -300, // Déplacer les images de 300 pixels vers la gauche
        duration: 1,
        scrollTrigger: {
            trigger: '#clouds-container', // L'élément qui déclenche l'animation
            start: 'top center', // Point de départ de l'animation
            end: 'bottom center', // Point de fin de l'animation
            scrub: true, // Définir à true pour lier le mouvement à la position de défilement
            //markers: true, // Ajouter un marqueur de débogage
            onEnter: () => console.log('Animation triggered'), // Fonction à exécuter lorsque l'animation démarre
        },
    });
}

// Appeler la fonction pour activer ScrollTrigger une fois que la page est complètement chargée
window.addEventListener('load', () => {
    activateScrollTrigger();

    // Rafraîchir ScrollTrigger après un court délai pour garantir l'activation des positions de départ et d'arrivée dès le premier chargement
    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 100);
});