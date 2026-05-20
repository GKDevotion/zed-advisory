// ---- MODAL STATE ----
let currentStep = 1;
const totalSteps = 3;

const riskLabels = { 1:'Conservative',2:'Somewhat Conservative',3:'Moderate',4:'Somewhat Aggressive',5:'Aggressive' };

function openConsultModal(e) {
  if (e) e.preventDefault();
  currentStep = 1;
  resetModal();
  document.getElementById('consultModal').classList.add('open');
  document.body.style.overflow = 'hidden';
  setTimeout(() => document.getElementById('m_fname').focus(), 400);
}

function closeConsultModal() {
  document.getElementById('consultModal').classList.remove('open');
  document.body.style.overflow = '';
}

function handleOverlayClick(e) {
  if (e.target === document.getElementById('consultModal')) closeConsultModal();
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeConsultModal(); });

function resetModal() {
  showStep(1);
  // Clear all fields
  ['m_fname','m_lname','m_mobile','m_email','m_city','m_horizon','m_invest','m_message'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.value = '';
  });
  document.getElementById('m_calltime').value = '';
  document.getElementById('m_experience').value = '';
  document.getElementById('m_risk').value = 3;
  document.getElementById('riskLabel').textContent = 'Moderate';
  document.getElementById('m_consent').checked = false;
  document.querySelectorAll('.service-pill').forEach(p => { p.classList.remove('selected'); p.querySelector('input').checked = false; });
  clearAllErrors();
}

function showStep(n) {
  currentStep = n;
  // Panels
  document.querySelectorAll('.step-panel').forEach((p,i) => {
    p.classList.toggle('active', i + 1 === n);
  });
  // Progress dots
  for (let i = 1; i <= 4; i++) {
    const ps = document.getElementById('ps' + i);
    const sd = document.getElementById('sd' + i);
    ps.classList.remove('active','done');
    if (i < n) { ps.classList.add('done'); sd.textContent = '✓'; }
    else if (i === n) { ps.classList.add('active'); sd.textContent = i; }
    else { sd.textContent = i; }
  }
  // Footer
  const btnBack = document.getElementById('btnBack');
  const btnNext = document.getElementById('btnNext');
  const stepCount = document.getElementById('stepCount');
  const footer = document.getElementById('modalFooter');

  if (n === 4) {
    footer.style.display = 'none';
  } else {
    footer.style.display = 'flex';
    btnBack.style.visibility = n > 1 ? 'visible' : 'hidden';
    btnNext.textContent = n === totalSteps ? 'Submit Enquiry →' : 'Continue →';
    stepCount.textContent = 'Step ' + n + ' of ' + totalSteps;
  }
  // Scroll modal to top
  document.querySelector('.modal-box').scrollTo({ top: 0, behavior: 'smooth' });
}

function modalBack() {
  clearAllErrors();
  showStep(currentStep - 1);
}

function modalNext() {
  if (validateStep(currentStep)) {
    if (currentStep < totalSteps) {
      showStep(currentStep + 1);
    } else {
      submitConsultation();
    }
  }
}

// ---- VALIDATION ----
function validateStep(step) {
  clearAllErrors();
  let valid = true;

  if (step === 1) {
    if (!val('m_fname')) { showErr('m_fname','err_fname'); valid = false; }
    if (!val('m_lname')) { showErr('m_lname','err_lname'); valid = false; }
    const mob = document.getElementById('m_mobile').value.trim();
    if (!mob || !/^[6-9]\d{9}$/.test(mob)) { showErr('m_mobile','err_mobile'); valid = false; }
    const email = document.getElementById('m_email').value.trim();
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showErr('m_email','err_email'); valid = false; }
  }

  if (step === 2) {
    const any = [...document.querySelectorAll('#m_services input')].some(c => c.checked);
    if (!any) {
      document.getElementById('err_services').classList.add('show');
      document.getElementById('m_services').classList.add('error-pills');
      valid = false;
    }
  }

  if (step === 3) {
    if (!document.getElementById('m_horizon').value) { showErr('m_horizon','err_horizon'); valid = false; }
    if (!document.getElementById('m_invest').value) { showErr('m_invest','err_invest'); valid = false; }
    if (!document.getElementById('m_consent').checked) {
      document.getElementById('consentBox').classList.add('error');
      document.getElementById('err_consent').classList.add('show');
      valid = false;
    }
  }

  return valid;
}

function val(id) { return document.getElementById(id).value.trim() !== ''; }

function showErr(fieldId, errId) {
  document.getElementById(fieldId).classList.add('error');
  document.getElementById(errId).classList.add('show');
  document.getElementById(fieldId).addEventListener('input', function clearOnType() {
    this.classList.remove('error');
    document.getElementById(errId).classList.remove('show');
    this.removeEventListener('input', clearOnType);
  });
}

function clearAllErrors() {
  document.querySelectorAll('.field-error').forEach(e => e.classList.remove('show'));
  document.querySelectorAll('.mfield input,.mfield select,.mfield textarea').forEach(e => e.classList.remove('error'));
  document.getElementById('m_services').classList.remove('error-pills');
  document.getElementById('consentBox').classList.remove('error');
}

// ---- SUBMISSION ----
function submitConsultation() {
  const btn = document.getElementById('btnNext');
  btn.disabled = true;
  btn.textContent = 'Submitting…';

  const services = [...document.querySelectorAll('#m_services input:checked')].map(c => c.value).join(', ') || '—';
  const name = document.getElementById('m_fname').value.trim() + ' ' + document.getElementById('m_lname').value.trim();
  const mobile = '+91 ' + document.getElementById('m_mobile').value.trim();
  const email = document.getElementById('m_email').value.trim();
  const city = document.getElementById('m_city').value.trim() || '—';
  const callTime = document.getElementById('m_calltime').value || 'Any time';
  const horizon = document.getElementById('m_horizon').options[document.getElementById('m_horizon').selectedIndex].text;
  const invest = document.getElementById('m_invest').options[document.getElementById('m_invest').selectedIndex].text;
  const risk = document.getElementById('riskLabel').textContent;

  document.getElementById('successSummary').innerHTML = `
    <div class="summary-row"><span class="summary-label">Name</span><span class="summary-value">${name}</span></div>
    <div class="summary-row"><span class="summary-label">Mobile</span><span class="summary-value">${mobile}</span></div>
    <div class="summary-row"><span class="summary-label">Email</span><span class="summary-value">${email}</span></div>
    <div class="summary-row"><span class="summary-label">City</span><span class="summary-value">${city}</span></div>
    <div class="summary-row"><span class="summary-label">Best Call Time</span><span class="summary-value">${callTime}</span></div>
    <div class="summary-row"><span class="summary-label">Services</span><span class="summary-value">${services}</span></div>
    <div class="summary-row"><span class="summary-label">Horizon</span><span class="summary-value">${horizon}</span></div>
    <div class="summary-row"><span class="summary-label">Investment</span><span class="summary-value">${invest}</span></div>
    <div class="summary-row"><span class="summary-label">Risk Profile</span><span class="summary-value">${risk}</span></div>
  `;

  setTimeout(() => { showStep(4); }, 1000);
}

// ---- HELPERS ----
function togglePill(label) {
  setTimeout(() => {
    const cb = label.querySelector('input');
    label.classList.toggle('selected', cb.checked);
    document.getElementById('m_services').classList.remove('error-pills');
    document.getElementById('err_services').classList.remove('show');
  }, 0);
}

function updateRiskLabel(v) {
  document.getElementById('riskLabel').textContent = riskLabels[v];
}