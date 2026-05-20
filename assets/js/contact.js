function toggleCheck(label) {
    const cb = label.querySelector('input[type="checkbox"]');
    setTimeout(() => { label.classList.toggle('checked', cb.checked); }, 0);
}

function submitForm(btn) {
    const firstName = document.getElementById('firstName').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const email = document.getElementById('email').value.trim();
    const consent = document.getElementById('consent').checked;
    const anyService = [...document.querySelectorAll('#serviceCheckboxes input[type="checkbox"]')].some(c => c.checked);

    if (!firstName || !mobile || !email) {
        alert('Please fill in your name, mobile number, and email address.'); return;
    }
    if (!anyService) {
        alert('Please select at least one service of interest.'); return;
    }
    if (!consent) {
        alert('Please accept the terms and conditions to proceed.'); return;
    }

    btn.textContent = 'Sending…';
    btn.disabled = true;

    setTimeout(() => {
        document.getElementById('successBanner').classList.add('show');
        btn.textContent = '✓ Submitted';
        btn.style.background = '#166534';
        window.scrollTo({ top: document.getElementById('contact-form').offsetTop - 80, behavior: 'smooth' });
    }, 1400);
}