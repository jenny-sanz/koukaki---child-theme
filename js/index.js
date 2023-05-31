console.log('test');

// Animation parallaxe au scroll des sections et titres de la page

const sectionObserver = new IntersectionObserver(function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('parallax-up');
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

// // Sélection des sections à animer
 const sections = document.querySelectorAll('.story, #characters, #place, #studio, footer');

// Itération sur chaque section et ajout de l'observateur d'intersection
for (let i = 0; i < sections.length; i++) {
  const section = sections[i];
  sectionObserver.observe(section);
}


// parallaxe banner hero

 window.addEventListener('scroll', function () {
   const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
   const body = document.querySelector('body');
  
   if (scrollPosition > 0) {
     body.classList.add('scroll-down');
   } else {
     body.classList.remove('scroll-down');
   }
 });





