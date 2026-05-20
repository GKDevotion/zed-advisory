if( $("#navbar").length > 0 ){
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    });
}

// Scroll reveal
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            entry.target.style.transitionDelay = (i % 3) * 0.1 + 's';
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.12 });
reveals.forEach(el => observer.observe(el));

// FAQ toggle
function toggleFaq(btn) {
    const item = btn.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

// Form submit
function handleFormSubmit(btn) {
    const original = btn.textContent;
    btn.textContent = 'Sending…';
    btn.disabled = true;
    setTimeout(() => {
        btn.textContent = '✓ Submitted — We\'ll call you shortly';
        btn.style.background = '#4a7c59';
        btn.style.color = '#fff';
    }, 1200);
}

// Counter animation for metrics
function animateCounter(el, target, suffix = '') {
    let start = 0;
    const duration = 1800;
    const step = 16;
    const increment = target / (duration / step);
    const timer = setInterval(() => {
        start = Math.min(start + increment, target);
        const display = target > 100 ? Math.round(start).toLocaleString('en-IN') : Math.round(start);
        el.querySelector('.metric-num').innerHTML = display + '<span>' + suffix + '</span>';
        if (start >= target) clearInterval(timer);
    }, step);
}

if( $("#metrics").length > 0 ){
    // Trigger counter when metrics section visible
    const metricsSection = document.getElementById('metrics');
    let countersStarted = false;
    const metricsObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !countersStarted) {
            countersStarted = true;
            const cards = document.querySelectorAll('.metric-card');
            const data = [
                { target: 15, suffix: '+' },
                { target: 4200, suffix: '+' },
                { target: 82, suffix: '%' },
                { target: 6, suffix: '' }
            ];
            cards.forEach((card, i) => animateCounter(card, data[i].target, data[i].suffix));
        }
    }, { threshold: 0.3 });
    metricsObserver.observe(metricsSection);
}