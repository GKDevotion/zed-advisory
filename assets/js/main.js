// Wealth Advisory — Shared JS

// Navbar scroll effect
const navbar = document.getElementById('mainNav');
if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    });
}

// Scroll reveal
const reveals = document.querySelectorAll('.reveal');
if (reveals.length) {
    const obs = new IntersectionObserver((entries) => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) {
                e.target.style.transitionDelay = ((i % 4) * 0.1) + 's';
                e.target.classList.add('visible');
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });
    reveals.forEach(el => obs.observe(el));
}

// FAQ toggle
function toggleFaq(btn) {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

// Form submit feedback
function handleSubmit(btn, msg) {
    const orig = btn.textContent;
    btn.textContent = 'Sending…';
    btn.disabled = true;
    setTimeout(() => {
        btn.textContent = msg || '✓ Sent — We\'ll be in touch!';
        btn.style.background = '#166534';
    }, 1300);
}

// Counter animation
function animateCount(el, target, suffix, prefix) {
    let start = 0;
    const dur = 1800, step = 14;
    const inc = target / (dur / step);
    const t = setInterval(() => {
        start = Math.min(start + inc, target);
        const val = target >= 100 ? Math.round(start).toLocaleString('en-IN') : Math.round(start);
        el.innerHTML = (prefix || '') + val + '<span class="accent">' + (suffix || '') + '</span>';
        if (start >= target) clearInterval(t);
    }, step);
}

// Trigger counters on viewport entry
document.querySelectorAll('[data-count]').forEach(el => {
    const io = new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting) {
            animateCount(el, +el.dataset.count, el.dataset.suffix || '', el.dataset.prefix || '');
            io.disconnect();
        }
    }, { threshold: 0.3 });
    io.observe(el);
});

// Back to top
const backTop = document.querySelector('.back-top');
if (backTop) {
    window.addEventListener('scroll', () => {
        backTop.classList.toggle('visible', window.scrollY > 400);
    });
}

// Highlight active nav link based on current page
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.nav-link[data-page]').forEach(link => {
    if (link.dataset.page === currentPage) link.classList.add('active');
});

// Custom toggler animation
const toggler = document.querySelector('.navbar-toggler');
if (toggler) {
    toggler.addEventListener('click', () => {
        toggler.classList.toggle('open');
    });
}