window.addEventListener('load', function () {
    document.getElementById('loading').classList.add('hidden');
});

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');

    const revealSections = () => {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop <= windowHeight * 0.8) {
                section.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', revealSections);
    revealSections(); 
});

document.addEventListener('DOMContentLoaded', function () {
    const articles = document.querySelectorAll('.article');

    const showArticles = () => {
        articles.forEach((article, index) => {
            setTimeout(() => {
                article.classList.add('show');
            }, index * 300); 
        });
    };

    const onScroll = () => {
        const sectionTop = document.querySelector('.articlesSection').getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop <= windowHeight * 0.8) { 
            showArticles();
            window.removeEventListener('scroll', onScroll); 
        }
    };

    window.addEventListener('scroll', onScroll);
});


window.addEventListener('scroll', function () {
    var homeImage = document.querySelector('.homeImage');
    var aboutSection = document.querySelector('#about');
    var scrollPosition = window.scrollY;

  
    var parallaxSpeed = scrollPosition * 0.5; 
    homeImage.style.transform = 'translateY(' + parallaxSpeed + 'px)';

    if (scrollPosition >= aboutSection.offsetTop) {
        homeImage.style.display = 'none';
    } else {
        homeImage.style.display = 'block'; 
    }
});

