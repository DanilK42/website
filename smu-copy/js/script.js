document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const burger = document.querySelector('.header__burger');
    const nav = document.querySelector('.header__nav');
    const body = document.body;
    
    burger.addEventListener('click', function() {
        this.classList.toggle('active');
        nav.classList.toggle('active');
        body.classList.toggle('no-scroll');
    });
    
    // Back to top button
    const backToTop = document.createElement('button');
    backToTop.className = 'back-to-top';
    backToTop.innerHTML = '↑';
    document.body.appendChild(backToTop);
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (nav.classList.contains('active')) {
                burger.classList.remove('active');
                nav.classList.remove('active');
                body.classList.remove('no-scroll');
            }
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Load more button functionality
    const loadMoreBtn = document.querySelector('.load-more .btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Here would be AJAX request to load more news
            alert('Загружаем дополнительные новости...');
        });
    }

   
   
   document.addEventListener('DOMContentLoaded', function() {
    // Элементы слайдера
    const track = document.getElementById('partnersSliderTrack');
    const prevBtn = document.getElementById('partnersPrevBtn');
    const nextBtn = document.getElementById('partnersNextBtn');
    const slides = document.querySelectorAll('.slider-slide');
    
    // Проверяем, существуют ли элементы
    if (!track || !prevBtn || !nextBtn || slides.length === 0) {
        console.error('Не найдены элементы слайдера');
        return;
    }

    // Функция для прокрутки
    const scrollToSlide = (direction) => {
        const slideWidth = slides[0].offsetWidth + 20; // Ширина слайда + отступ
        track.scrollBy({
            left: direction * slideWidth,
            behavior: 'smooth'
        });
    };

    // Обработчики для кнопок
    prevBtn.addEventListener('click', () => scrollToSlide(-1));
    nextBtn.addEventListener('click', () => scrollToSlide(1));

    // Перетаскивание мышкой
    let isDragging = false;
    let startX = 0;
    let scrollLeft = 0;

    const startDrag = (e) => {
        isDragging = true;
        startX = e.pageX || e.touches[0].pageX;
        scrollLeft = track.scrollLeft;
        track.style.cursor = 'grabbing';
        track.style.scrollBehavior = 'auto';
    };

    const duringDrag = (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX || e.touches[0].pageX;
        const walk = (x - startX) * 2;
        track.scrollLeft = scrollLeft - walk;
    };

    const endDrag = () => {
        isDragging = false;
        track.style.cursor = 'grab';
        track.style.scrollBehavior = 'smooth';
    };

    // События для мыши
    track.addEventListener('mousedown', startDrag);
    track.addEventListener('mousemove', duringDrag);
    track.addEventListener('mouseup', endDrag);
    track.addEventListener('mouseleave', endDrag);

    // События для тач-устройств
    track.addEventListener('touchstart', startDrag, {passive: false});
    track.addEventListener('touchmove', duringDrag, {passive: false});
    track.addEventListener('touchend', endDrag);
});
});