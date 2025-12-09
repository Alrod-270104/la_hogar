document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    const currentPath = window.location.pathname.replace(/\/$/, ""); // Remove trailing slash
    const indexPage = '/index.html';

    document.querySelectorAll('.nav-link').forEach(link => {
        const linkPath = new URL(link.href).pathname.replace(/\/$/, "");
        if (linkPath === currentPath || (currentPath === '' && linkPath === indexPage)) {
            link.classList.add('nav-active');
            link.setAttribute('aria-current', 'page');
        }
    });
     document.querySelectorAll('.mobile-nav-link').forEach(link => {
        const linkPath = new URL(link.href).pathname.replace(/\/$/, "");
        if (linkPath === currentPath || (currentPath === '' && linkPath === indexPage)) {
            link.classList.add('mobile-nav-active');
            link.setAttribute('aria-current', 'page');
        }
    });

    const currentYearSpan = document.getElementById('current-year');
    if(currentYearSpan) {
        currentYearSpan.textContent = new Date().getFullYear();
    }

    
    // Initialize Home Hero Carousel if present
    if (document.getElementById('hero-carousel')) {
        initHeroCarousel();
    }

    if (document.querySelector('.menu-container')) {
        initMenuTabs();
        initWhatsAppOrdering();
        initFeaturedScroll(); // Initialize scroll logic
    }
});

function initHeroCarousel() {
    const carouselContainer = document.getElementById('hero-carousel');
    if (!carouselContainer) return;

    const images = [
        "https://picsum.photos/1920/1080?random=10",
        "https://picsum.photos/1920/1080?random=11",
        "https://picsum.photos/1920/1080?random=12",
        "https://picsum.photos/1920/1080?random=13",
    ];
    let currentIndex = 0;
    const dotsContainer = document.getElementById('carousel-dots');

    // 1. Create Image Elements for Background
    images.forEach((src, index) => {
        const img = document.createElement('img');
        img.src = src;
        img.className = 'hero-bg-img';
        if (index === 0) img.classList.add('active');
        img.alt = "Background Visual";
        // Prepend to ensure they are behind the gradient overlay
        carouselContainer.insertBefore(img, carouselContainer.firstChild);

        // 2. Create Dots
        if (dotsContainer) {
            const dot = document.createElement('button');
            dot.className = 'hero-dot';
            if (index === 0) dot.classList.add('active');
            dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            dot.addEventListener('click', () => showSlide(index));
            dotsContainer.appendChild(dot);
        }
    });
    
    const slides = carouselContainer.querySelectorAll('.hero-bg-img');
    const dots = dotsContainer ? dotsContainer.querySelectorAll('.hero-dot') : [];

    function showSlide(index) {
        if (index >= images.length) {
            index = 0;
        } else if (index < 0) {
            index = images.length - 1;
        }

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentIndex = index;
    }

    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');

    if (prevBtn) prevBtn.addEventListener('click', () => showSlide(currentIndex - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => showSlide(currentIndex + 1));

    // Auto-play
    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 6000); // Slower for background
}

function initMenuTabs() {
    const cafeTab = document.getElementById('cafe-tab');
    const restaurantTab = document.getElementById('restaurant-tab');
    const cafeContent = document.getElementById('cafe-content');
    const restaurantContent = document.getElementById('restaurant-content');

    if (!cafeTab || !restaurantTab || !cafeContent || !restaurantContent) return;
    
    cafeTab.addEventListener('click', () => {
        setActiveTab('cafe');
    });

    restaurantTab.addEventListener('click', () => {
        setActiveTab('restaurant');
    });

    function setActiveTab(tab) {
        const isCafe = tab === 'cafe';

        cafeTab.classList.toggle('active', isCafe);
        restaurantTab.classList.toggle('active', !isCafe);

        cafeContent.classList.toggle('hidden', !isCafe);
        restaurantContent.classList.toggle('hidden', isCafe);
    }
}

function initFeaturedScroll() {
    const scrollContainer = document.getElementById('auto-scroll-container');
    const btnLeft = document.querySelector('.scroll-btn-left');
    const btnRight = document.querySelector('.scroll-btn-right');

    if (!scrollContainer) return;

    // --- BUTTON LOGIC ---
    if (btnLeft) {
        btnLeft.addEventListener('click', () => {
            stopAutoScroll(); // User took control
            scrollContainer.scrollBy({ left: -200, behavior: 'smooth' });
        });
    }

    if (btnRight) {
        btnRight.addEventListener('click', () => {
            stopAutoScroll(); // User took control
            scrollContainer.scrollBy({ left: 200, behavior: 'smooth' });
        });
    }

    // --- AUTO SCROLL LOGIC ---
    // Start automatic scroll
    let scrollInterval = setInterval(() => {
        // Simple slow drift
        scrollContainer.scrollLeft += 1; 
        
        // Loop back if reached end (optional, or just stop)
        // For now we just let it drift until interaction
    }, 30); // 30ms interval = smooth slow speed

    let isAutoScrolling = true;

    function stopAutoScroll() {
        if (isAutoScrolling) {
            clearInterval(scrollInterval);
            isAutoScrolling = false;
        }
    }

    // Stop auto-scroll on any user interaction
    scrollContainer.addEventListener('mouseenter', stopAutoScroll);
    scrollContainer.addEventListener('touchstart', stopAutoScroll);
    scrollContainer.addEventListener('click', stopAutoScroll);
}

function initWhatsAppOrdering() {
    const menuContainer = document.querySelector('.menu-container');
    const modal = document.getElementById('order-modal');
    
    if (!menuContainer || !modal) return;

    const modalProductName = document.getElementById('modal-product-name');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const modalCancelBtn = document.getElementById('modal-cancel-btn');
    const orderForm = document.getElementById('order-form');
    const quantityInput = document.getElementById('quantity');
    const timeInput = document.getElementById('pickup-time');

    const phoneNumber = '59177510312'; // Numero actualizado desde el footer
    let currentProduct = '';

    function showModal(productName) {
        currentProduct = productName;
        modalProductName.textContent = productName;
        quantityInput.value = '1'; // Reset quantity
        timeInput.value = ''; // Reset time
        modal.classList.remove('hidden');
        timeInput.focus();
    }

    function hideModal() {
        modal.classList.add('hidden');
    }
    
    // Event listener for opening the modal
    menuContainer.addEventListener('click', (e) => {
        const orderButton = e.target.closest('.menu-item-card .btn');
        const featuredItem = e.target.closest('.featured-item');
        
        let productName = '';

        if (orderButton) {
            const card = orderButton.closest('.menu-item-card');
            productName = card.querySelector('.menu-item-title')?.textContent.trim();
        } else if (featuredItem) {
            productName = featuredItem.querySelector('.featured-item-title')?.textContent.trim();
        }

        if (productName) {
            showModal(productName);
        }
    });

    // Event listener for the form submission
    orderForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const quantity = quantityInput.value;
        const pickupTime = timeInput.value;
        
        if (!pickupTime) {
            alert('Por favor, selecciona una hora para recoger tu pedido.');
            timeInput.focus();
            return;
        }

        const message = `¡Hola! Quisiera hacer un pedido:\n\n` +
                        `Producto: *${currentProduct}*\n` +
                        `Cantidad: *${quantity}*\n` +
                        `Hora para recoger: *${pickupTime}*\n\n` +
                        `A nombre de:`;
                        
        const encodedMessage = encodeURIComponent(message);
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
        
        window.open(whatsappUrl, '_blank');
        hideModal();
    });

    // Event listeners for closing the modal
    modalCloseBtn.addEventListener('click', hideModal);
    modalCancelBtn.addEventListener('click', hideModal);
    
    // Also close if the overlay is clicked
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            hideModal();
        }
    });

    // Close with Escape key
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            hideModal();
        }
    });
}