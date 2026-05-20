<!-- ===== CONSULTATION MODAL ===== -->
<style>
    .modal-overlay {
        position: fixed; inset: 0; z-index: 9999;
        background: rgba(10,10,10,0.72);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        display: flex; align-items: center; justify-content: center;
        padding: 1rem;
        opacity: 0; visibility: hidden;
        transition: opacity 0.35s ease, visibility 0.35s ease;
    }
    .modal-overlay.open { opacity: 1; visibility: visible; }
    .modal-overlay.open .modal-box { transform: translateY(0) scale(1); opacity: 1; }

    .modal-box {
        background: #fff;
        border-radius: 16px;
        width: 100%; max-width: 620px;
        max-height: 92vh;
        overflow-y: auto;
        box-shadow: 0 24px 80px rgba(0,0,0,0.3);
        transform: translateY(32px) scale(0.97);
        opacity: 0;
        transition: transform 0.38s cubic-bezier(.22,.9,.36,1), opacity 0.38s ease;
        position: relative;
        scrollbar-width: thin;
        scrollbar-color: #e83226 #f5f5f5;
    }
    .modal-box::-webkit-scrollbar { width: 5px; }
    .modal-box::-webkit-scrollbar-track { background: #f5f5f5; border-radius: 10px; }
    .modal-box::-webkit-scrollbar-thumb { background: #E8321A; border-radius: 10px; }

    /* Header */
    .modal-header-custom {
        background: var(--ink, #111);
        border-radius: 16px 16px 0 0;
        padding: 1.5rem 2rem;
        position: relative;
        overflow: hidden;
    }
    .modal-header-custom::before {
        content: '';
        position: absolute; inset: 0;
        background: radial-gradient(circle at 90% 10%, rgba(232,50,26,0.18) 0%, transparent 60%);
    }
    .modal-header-custom::after {
        content: '';
        position: absolute; inset: 0;
        background-image: linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
                            linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
        background-size: 36px 36px;
    }
    .modal-header-inner { position: relative; z-index: 1; display: flex; align-items: flex-start; justify-content: space-between; gap: 1rem; }
    .modal-badge {
        display: inline-flex; align-items: center; gap: 6px;
        background: rgba(232,50,26,0.18); border: 1px solid rgba(232,50,26,0.35);
        color: #ff8c7a; font-size: 11px; font-weight: 600;
        letter-spacing: 0.12em; text-transform: uppercase;
        padding: 4px 12px; border-radius: 20px; margin-bottom: 0.75rem;
    }
    .modal-badge-dot { width: 6px; height: 6px; background: #E8321A; border-radius: 50%; animation: pulse-dot 1.4s infinite; }
    .modal-title-text { font-size: 1.7rem; font-weight: 600; color: #fff; line-height: 1.2; margin-bottom: 0.3rem; }
    .modal-sub-text { font-size: 13px; color: rgba(255,255,255,0.5); margin: 0; }
    .modal-close-btn {
        width: 36px; height: 36px; flex-shrink: 0;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        cursor: pointer; color: rgba(255,255,255,0.6); font-size: 18px;
        transition: background 0.2s, color 0.2s;
        line-height: 1;
    }
    .modal-close-btn:hover { background: #E8321A; color: #fff; border-color: #E8321A; }

    /* Progress Bar */
    .modal-progress-wrap { padding: 1.25rem 2rem 0; }
    .modal-progress-steps { display: flex; align-items: center; gap: 0; margin-bottom: 0.5rem; }
    .progress-step-item {
        flex: 1; display: flex; align-items: center; flex-direction: column; gap: 6px;
        position: relative;
    }
    .progress-step-item:not(:last-child)::after {
        content: '';
        position: absolute; top: 14px; left: calc(50% + 16px); right: calc(-50% + 16px);
        height: 2px; background: #e5e7eb;
        transition: background 0.4s;
    }
    .progress-step-item.done:not(:last-child)::after { background: #E8321A; }
    .step-dot {
        width: 28px; height: 28px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 12px; font-weight: 600;
        background: #f3f4f6; color: #9ca3af;
        border: 2px solid #e5e7eb;
        transition: background 0.3s, color 0.3s, border-color 0.3s;
        position: relative; z-index: 1;
    }
    .progress-step-item.active .step-dot { background: #E8321A; color: #fff; border-color: #E8321A; }
    .progress-step-item.done .step-dot { background: #E8321A; color: #fff; border-color: #E8321A; }
    .step-label { font-size: 10px; color: #9ca3af; font-weight: 500; letter-spacing: 0.06em; text-transform: uppercase; white-space: nowrap; }
    .progress-step-item.active .step-label { color: #E8321A; }
    .progress-step-item.done .step-label { color: #E8321A; }

    /* Body */
    .modal-body-custom { padding: 0.5rem 2rem; }

    /* Field group */
    .modal-section-title {
        font-size: 10px; font-weight: 700; letter-spacing: 0.18em;
        text-transform: uppercase; color: #9ca3af;
        margin-bottom: 1rem; display: flex; align-items: center; gap: 8px;
    }
    .modal-section-title::after { content: ''; flex: 1; height: 1px; background: #f3f4f6; }

    .mfield label {
        font-size: 12px; font-weight: 600; color: #374151;
        margin-bottom: 0.4rem; display: block; letter-spacing: 0.02em;
    }
    .mfield label .req { color: #E8321A; }
    .mfield input, .mfield select, .mfield textarea {
        width: 100%;
        background: #fafafa;
        border: 1.5px solid #e5e7eb;
        border-radius: 8px;
        padding: 11px 14px;
        font-size: 14px; color: #111;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    }
    .mfield input:focus, .mfield select:focus, .mfield textarea:focus {
        border-color: #E8321A;
        box-shadow: 0 0 0 3px rgba(232,50,26,0.1);
        background: #fff;
    }
    .mfield input.error, .mfield select.error, .mfield textarea.error {
        border-color: #ef4444;
        box-shadow: 0 0 0 3px rgba(239,68,68,0.1);
        background: #fff8f8;
    }
    .mfield input::placeholder, .mfield textarea::placeholder { color: #c0c4cc; }
    .mfield textarea { height: 90px; resize: none; }
    .mfield .field-error {
        font-size: 11px; color: #ef4444; margin-top: 5px;
        display: flex; align-items: center; gap: 4px;
        opacity: 0; transform: translateY(-4px);
        transition: opacity 0.2s, transform 0.2s;
    }
    .mfield .field-error.show { opacity: 1; transform: none; }

    /* Phone row */
    .phone-row { display: flex; gap: 8px; }
    .phone-prefix {
        background: #f3f4f6; border: 1.5px solid #e5e7eb; border-radius: 8px;
        padding: 11px 12px; font-size: 13px; color: #6b7280;
        white-space: nowrap; display: flex; align-items: center; gap: 5px;
    }

    /* Service pills */
    .service-pills { display: flex; flex-wrap: wrap; gap: 8px; }
    .service-pill {
        display: flex; align-items: center; gap: 6px;
        background: #f9fafb; border: 1.5px solid #e5e7eb;
        border-radius: 8px; padding: 7px 13px;
        font-size: 13px; color: #374151;
        cursor: pointer; transition: all 0.18s;
        user-select: none;
    }
    .service-pill:hover { border-color: #E8321A; background: #fff5f4; color: #E8321A; }
    .service-pill.selected { border-color: #E8321A; background: #fff0ee; color: #E8321A; font-weight: 500; }
    .service-pill input { display: none; }
    .service-pills.error-pills .service-pill:not(.selected) { border-color: #ef4444; }

    /* Risk slider */
    .risk-labels { display: flex; justify-content: space-between; margin-top: 4px; }
    .risk-labels span { font-size: 11px; color: #9ca3af; }
    input[type=range] {
        width: 100%; accent-color: #E8321A;
        height: 4px; cursor: pointer;
    }
    .risk-value {
        text-align: center; font-size: 13px; font-weight: 600;
        color: #E8321A; margin-top: 6px;
    }

    /* Nav buttons */
    .modal-footer-custom {
        padding: 1rem;
        display: flex; align-items: center; justify-content: space-between; gap: 1rem;
    }
    .btn-modal-back {
        background: transparent; border: 1.5px solid #e5e7eb;
        border-radius: 8px; padding: 11px 22px;
        font-size: 13px;
        font-weight: 500; color: #6b7280; cursor: pointer;
        transition: border-color 0.2s, color 0.2s;
    }
    .btn-modal-back:hover { border-color: #374151; color: #374151; }
    .btn-modal-next {
        background: #E8321A; color: #fff; border: none;
        border-radius: 8px; padding: 12px 28px;
        font-size: 13px;
        font-weight: 600; letter-spacing: 0.06em;
        cursor: pointer; transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
        display: flex; align-items: center; gap: 8px;
        box-shadow: 0 4px 14px rgba(232,50,26,0.3);
    }
    .btn-modal-next:hover { background: #C02010; transform: translateY(-1px); box-shadow: 0 6px 20px rgba(232,50,26,0.4); }
    .btn-modal-next:disabled { background: #ccc; box-shadow: none; cursor: not-allowed; transform: none; }

    /* Step panels */
    .step-panel { display: none; }
    .step-panel.active { display: block; animation: fadeStepIn 0.3s ease; }
    @keyframes fadeStepIn { from { opacity:0; transform:translateX(12px); } to { opacity:1; transform:none; } }

    /* Success step */
    .success-step {
        text-align: center; padding: 2rem 1rem;
    }
    .success-icon-wrap {
        width: 80px; height: 80px;
        background: #f0fdf4; border: 2px solid #86efac;
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        font-size: 2.2rem; margin: 0 auto 1.5rem;
        animation: pop-in 0.5s cubic-bezier(.22,.9,.36,1);
    }
    @keyframes pop-in { from { transform: scale(0.5); opacity: 0; } to { transform: scale(1); opacity: 1; } }
    .success-step h3 { font-size: 1.6rem; color: #111; margin-bottom: 0.5rem; }
    .success-step p { font-size: 14px; color: #6b7280; max-width: 360px; margin: 0 auto 1.5rem; line-height: 1.7; }
    .success-summary {
        background: #fafafa; border: 1px solid #e5e7eb;
        border-radius: 10px; padding: 1.25rem; margin-bottom: 1.5rem;
        text-align: left; font-size: 13px;
    }
    .summary-row { display: flex; gap: 8px; padding: 0.3rem 0; }
    .summary-label { color: #9ca3af; width: 110px; flex-shrink: 0; }
    .summary-value { color: #111; font-weight: 500; }

    /* Consent */
    .consent-box {
        background: #fff8f7; border: 1.5px solid rgba(232,50,26,0.2);
        border-radius: 8px; padding: 1rem 1.25rem;
        display: flex; align-items: flex-start; gap: 10px; margin-top: 0.5rem;
    }
    .consent-box input[type=checkbox] { accent-color: #E8321A; width: 16px; height: 16px; flex-shrink: 0; margin-top: 2px; }
    .consent-box label { font-size: 12px; color: #6b7280; line-height: 1.6; cursor: pointer; }
    .consent-box label a { color: #E8321A; text-decoration: none; }
    .consent-box.error { border-color: #ef4444; background: #fff8f8; }

    @media (max-width: 575px) {
    .modal-box { border-radius: 14px; }
    .modal-header-custom { padding: 1.5rem 1.25rem 1.25rem; }
    .modal-body-custom { padding: 1.25rem; }
    .modal-footer-custom { padding: 0 1.25rem 1.5rem; }
    .modal-progress-wrap { padding: 1rem 1.25rem 0; }
    .modal-title-text { font-size: 1.35rem; }
    }
</style>

<!-- MODAL MARKUP -->
<div class="modal-overlay" id="consultModal" onclick="handleOverlayClick(event)">
  <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="modalTitle">

    <!-- Header -->
    <div class="modal-header-custom">
      <div class="modal-header-inner">
        <div>
          <div class="modal-badge"><span class="modal-badge-dot"></span> SEBI Registered · Free · No Obligation</div>
          <div class="modal-title-text" id="modalTitle">Book Your Free Consultation Today.</div>
          <p class="modal-sub-text">Takes less than 2 minutes · Our advisor calls you back within 24 hrs</p>
        </div>
        <button class="modal-close-btn" onclick="closeConsultModal()" aria-label="Close modal">✕</button>
      </div>
    </div>

    <!-- Progress Steps -->
    <div class="modal-progress-wrap">
      <div class="modal-progress-steps">
        <div class="progress-step-item active" id="ps1">
          <div class="step-dot" id="sd1">1</div>
          <div class="step-label">Personal</div>
        </div>
        <div class="progress-step-item" id="ps2">
          <div class="step-dot" id="sd2">2</div>
          <div class="step-label">Services</div>
        </div>
        <div class="progress-step-item" id="ps3">
          <div class="step-dot" id="sd3">3</div>
          <div class="step-label">Profile</div>
        </div>
        <div class="progress-step-item" id="ps4">
          <div class="step-dot" id="sd4">✓</div>
          <div class="step-label">Confirm</div>
        </div>
      </div>
    </div>

    <!-- STEP 1: Personal Details -->
    <div class="modal-body-custom">
      <div class="step-panel active" id="step1">
        <div class="modal-section-title">Personal Details</div>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="mfield">
              <label>First Name <span class="req">*</span></label>
              <input type="text" id="m_fname" placeholder="e.g. Rajesh" autocomplete="given-name">
              <div class="field-error" id="err_fname">⚠ Please enter your first name</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>Last Name <span class="req">*</span></label>
              <input type="text" id="m_lname" placeholder="e.g. Desai" autocomplete="family-name">
              <div class="field-error" id="err_lname">⚠ Please enter your last name</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>Mobile Number <span class="req">*</span></label>
              <div class="phone-row">
                <span class="phone-prefix">🇮🇳 +91</span>
                <input type="tel" id="m_mobile" placeholder="98XXX XXXXX" maxlength="10" autocomplete="tel" style="flex:1;">
              </div>
              <div class="field-error" id="err_mobile">⚠ Please enter a valid 10-digit mobile number</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>Email Address <span class="req">*</span></label>
              <input type="email" id="m_email" placeholder="rajesh@example.com" autocomplete="email">
              <div class="field-error" id="err_email">⚠ Please enter a valid email address</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>City / Location</label>
              <input type="text" id="m_city" placeholder="Surat, Gujarat" autocomplete="address-level2">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>Best Time to Call</label>
              <select id="m_calltime">
                <option value="" disabled selected>Select time slot</option>
                <option>Morning (9am – 12pm)</option>
                <option>Afternoon (12pm – 3pm)</option>
                <option>Evening (3pm – 6pm)</option>
                <option>Any time</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- STEP 2: Services -->
      <div class="step-panel" id="step2">
        <div class="modal-section-title">Services of Interest</div>
        <p style="font-size:13px;color:#6b7280;margin-bottom:1rem;">Select one or more services you'd like to know about. <span style="color:#E8321A;">*</span></p>
        <div class="service-pills" id="m_services">
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="Equity Advisory"><span>📈 Equity Advisory</span>
          </label>
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="F&O Strategies"><span>⚡ F&amp;O Strategies</span>
          </label>
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="MCX Commodity"><span>🥇 MCX Commodity</span>
          </label>
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="Currency & FOREX"><span>🌐 Currency &amp; FOREX</span>
          </label>
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="Portfolio Management"><span>🎯 Portfolio Mgmt</span>
          </label>
          <label class="service-pill" onclick="togglePill(this)">
            <input type="checkbox" value="Research Reports"><span>📚 Research Reports</span>
          </label>
        </div>
        <div class="field-error" id="err_services" style="margin-top:10px;">⚠ Please select at least one service</div>

        <div style="margin-top:1.5rem;">
          <div class="modal-section-title">Experience Level</div>
          <div class="mfield">
            <label>How long have you been investing?</label>
            <select id="m_experience">
              <option value="" disabled selected>Select your experience</option>
              <option value="beginner">Beginner — Just getting started</option>
              <option value="intermediate">Intermediate — 1–3 years of experience</option>
              <option value="experienced">Experienced — 3–7 years</option>
              <option value="expert">Expert — 7+ years</option>
            </select>
          </div>
        </div>
      </div>

      <!-- STEP 3: Investment Profile -->
      <div class="step-panel" id="step3">
        <div class="modal-section-title">Investment Profile</div>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="mfield">
              <label>Investment Horizon <span class="req">*</span></label>
              <select id="m_horizon">
                <option value="" disabled selected>Select horizon</option>
                <option value="short">Short-term (under 3 months)</option>
                <option value="medium">Medium-term (3–12 months)</option>
                <option value="long">Long-term (1+ years)</option>
                <option value="mix">Mix of all horizons</option>
              </select>
              <div class="field-error" id="err_horizon">⚠ Please select your investment horizon</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mfield">
              <label>Approx. Investment Size <span class="req">*</span></label>
              <select id="m_invest">
                <option value="" disabled selected>Select range</option>
                <option value="u1l">Under ₹1 Lakh</option>
                <option value="1l5l">₹1L – ₹5L</option>
                <option value="5l25l">₹5L – ₹25L</option>
                <option value="25l1c">₹25L – ₹1 Crore</option>
                <option value="1c+">Above ₹1 Crore</option>
              </select>
              <div class="field-error" id="err_invest">⚠ Please select an investment range</div>
            </div>
          </div>
          <div class="col-12">
            <div class="mfield">
              <label>Risk Appetite</label>
              <input type="range" id="m_risk" min="1" max="5" value="3" oninput="updateRiskLabel(this.value)">
              <div class="risk-labels">
                <span>🟢 Conservative</span>
                <span>🟡 Moderate</span>
                <span>🔴 Aggressive</span>
              </div>
              <div class="risk-value" id="riskLabel">Moderate</div>
            </div>
          </div>
          <div class="col-12">
            <div class="mfield">
              <label>Your Message / Goals</label>
              <textarea id="m_message" placeholder="Tell us about your investment goals, current portfolio, or any specific questions for our advisors…"></textarea>
            </div>
          </div>
        </div>

        <!-- Consent -->
        <div class="consent-box" id="consentBox">
          <input type="checkbox" id="m_consent">
          <label for="m_consent">
            I agree to the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy</a>. By submitting, I authorise Devotion Advisory (SEBI Reg. No. INH000XXXXXX) to contact me via call, SMS, or WhatsApp. I understand this is not a solicitation to trade. <span style="color:#E8321A;">*</span>
          </label>
        </div>
        <div class="field-error d-none" id="err_consent" style="margin-top:8px;">⚠ Please accept the terms and conditions</div>
      </div>

      <!-- STEP 4: Success -->
      <div class="step-panel" id="step4">
        <div class="success-step">
          <div class="success-icon-wrap">✅</div>
          <h3>You're All Set!</h3>
          <p>Thank you for reaching out. Our advisor will call you at your preferred time. Here's a summary of your enquiry:</p>
          <div class="success-summary" id="successSummary">
            <!-- Filled by JS -->
          </div>
          <p style="font-size:13px;color:#9ca3af;margin-bottom:1.5rem;">Expect a call within <strong style="color:#111;">24 business hours</strong>. For faster response, WhatsApp us directly.</p>
          <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;">
            <a href="https://wa.me/91XXXXXXXXXX?text=Hi+Devotion+Advisory%2C+I+just+submitted+a+consultation+request." target="_blank" style="background:#25D366;color:#fff;border:none;padding:11px 22px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">💬 WhatsApp Us</a>
            <button onclick="closeConsultModal()" style="background:#f3f4f6;color:#374151;border:none;padding:11px 22px;border-radius:8px;font-size:13px;font-weight:500;cursor:pointer;">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer nav -->
    <div class="modal-footer-custom" id="modalFooter">
      <button class="btn-modal-back" id="btnBack" onclick="modalBack()" style="visibility:hidden;">← Back</button>
      <div style="font-size:12px;color:#9ca3af;" id="stepCount">Step 1 of 3</div>
      <button class="btn-modal-next" id="btnNext" onclick="modalNext()">Continue →</button>
    </div>

  </div>
</div>