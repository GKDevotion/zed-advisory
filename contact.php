<?php include_once ('elements/header.php');?>

    <style>
        .contact-info-card {
            background: var(--white);
            border: 1px solid var(--border-soft);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
            height: 100%;
        }

        .contact-info-card:hover {
            border-color: var(--red);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        .contact-info-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            background: var(--red-pale);
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: background 0.3s;
        }

        .contact-info-card:hover .contact-info-icon {
            background: var(--red);
        }

        .contact-info-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 0.3rem;
        }

        .contact-info-value {
            font-size: 14px;
            color: var(--ink);
            font-weight: 500;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .contact-info-sub {
            font-size: 12px;
            color: var(--ink-muted);
            margin-top: 2px;
        }

        .map-embed {
            width: 100%;
            height: 380px;
            border: none;
            border-radius: var(--radius-lg);
            filter: grayscale(15%) contrast(1.02);
        }

        .form-section {
            background: var(--white);
            border: 1px solid var(--border-soft);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
        }

        .service-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border: 1.5px solid var(--border-soft);
            border-radius: var(--radius);
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            font-size: 13px;
            user-select: none;
        }

        .service-checkbox:hover {
            border-color: var(--red);
            background: var(--red-pale);
        }

        .service-checkbox input {
            accent-color: var(--red);
            width: 15px;
            height: 15px;
        }

        .service-checkbox.checked {
            border-color: var(--red);
            background: var(--red-pale);
        }

        .success-banner {
            display: none;
            background: #f0fdf4;
            border: 1.5px solid #86efac;
            border-radius: var(--radius-lg);
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
        }

        .success-banner.show {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .whatsapp-btn {
            background: #25D366;
            color: #fff;
            border: none;
            padding: 13px 28px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            border-radius: var(--radius);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, transform 0.15s;
        }

        .whatsapp-btn:hover {
            background: #1da851;
            color: #fff;
            transform: translateY(-2px);
        }

        .office-hours td {
            padding: 0.4rem 0;
            font-size: 14px;
        }

        .office-hours td:first-child {
            color: var(--ink-muted);
            width: 140px;
        }

        .office-hours td:last-child {
            color: var(--ink);
            font-weight: 500;
        }
    </style>

    <!-- PAGE HERO -->
    <div class="page-hero" id="top">
        <div class="container" style="padding-top:2rem;">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb mb-0" style="font-size:12px;letter-spacing:0.06em;">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </nav>
            <div class="row align-items-end g-4">
                <div class="col-lg-6">
                    <span class="section-label">Get In Touch</span>
                    <h1 style="color:#fff;" class="mb-3">Let's Begin Your<br><em
                            style="color:var(--red-light);">Financial Journey.</em></h1>
                    <p style="color:rgba(255,255,255,0.6);font-size:1.05rem;max-width:480px;">Whether you're a
                        first-time investor or a seasoned trader looking to elevate your strategy, our advisors are
                        ready to help. No pressure, no obligation.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-4 reveal">
                            <div
                                style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:10px;padding:1.25rem;text-align:center;">
                                <div style="font-size:1.8rem;margin-bottom:0.3rem;">📞</div>
                                <div
                                    style="color:rgba(255,255,255,0.5);font-size:11px;text-transform:uppercase;letter-spacing:0.1em;">
                                    Call Us</div>
                                <div style="color:#fff;font-size:13px;font-weight:500;margin-top:3px;">Mon–Sat<br>9am –
                                    6pm</div>
                            </div>
                        </div>
                        <div class="col-sm-4 reveal">
                            <div
                                style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:10px;padding:1.25rem;text-align:center;">
                                <div style="font-size:1.8rem;margin-bottom:0.3rem;">💬</div>
                                <div
                                    style="color:rgba(255,255,255,0.5);font-size:11px;text-transform:uppercase;letter-spacing:0.1em;">
                                    WhatsApp</div>
                                <div style="color:#fff;font-size:13px;font-weight:500;margin-top:3px;">
                                    Always<br>Available</div>
                            </div>
                        </div>
                        <div class="col-sm-4 reveal">
                            <div
                                style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:10px;padding:1.25rem;text-align:center;">
                                <div style="font-size:1.8rem;margin-bottom:0.3rem;">✉️</div>
                                <div
                                    style="color:rgba(255,255,255,0.5);font-size:11px;text-transform:uppercase;letter-spacing:0.1em;">
                                    Email Reply</div>
                                <div style="color:#fff;font-size:13px;font-weight:500;margin-top:3px;">Within<br>24
                                    Hours</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT INFO CARDS -->
    <section class="section-pad-sm" style="background:var(--cream);">
        <div class="container">
            <div class="row g-3">
                <div class="col-sm-6 col-lg-3 reveal">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">📞</div>
                        <div>
                            <div class="contact-info-label">Phone</div>
                            <p class="contact-info-value"><a href="tel:+91XXXXXXXXXX"
                                    style="color:inherit;text-decoration:none;">+91 XXXXX XXXXX</a></p>
                            <p class="contact-info-sub">Mon–Sat, 9:00 AM – 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 reveal">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">✉️</div>
                        <div>
                            <div class="contact-info-label">Email</div>
                            <p class="contact-info-value"><a href="mailto:info@devotionadvisory.com"
                                    style="color:inherit;text-decoration:none;">info@devotion<br>advisory.com</a></p>
                            <p class="contact-info-sub">Reply within 24 business hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 reveal">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">📍</div>
                        <div>
                            <div class="contact-info-label">Office Address</div>
                            <p class="contact-info-value">Devotion House, Near Amibika Park, Hanuman Mochi
                                Chowk,<br>Surat, Gujarat — 395 001</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 reveal">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">🏛️</div>
                        <div>
                            <div class="contact-info-label">SEBI Registration</div>
                            <p class="contact-info-value">INH000XXXXXX</p>
                            <p class="contact-info-sub">Non-Individual · Perpetual Validity<br>Compliance: <a
                                    href="mailto:compliance@devotionadvisory.com"
                                    style="color:var(--red);">compliance@devotion<br>advisory.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTACT SECTION -->
    <section class="section-pad" id="contact-form">
        <div class="container">
            <div class="row g-5">

                <!-- LEFT — FORM -->
                <div class="col-lg-7 reveal">
                    <span class="section-label">Send Us a Message</span>
                    <h2 class="mb-2">Book your free<br>consultation today.</h2>
                    <p class="text-soft mb-4">Fill in the form below and one of our advisors will reach out within 24
                        hours — usually much sooner.</p>

                    <!-- Success Banner -->
                    <div class="success-banner" id="successBanner">
                        <span style="font-size:1.5rem;">✅</span>
                        <div>
                            <strong style="color:#166534;display:block;">Message Sent Successfully!</strong>
                            <span style="color:#15803d;font-size:14px;">Thank you for reaching out. Our advisor will
                                contact you within 24 hours.</span>
                        </div>
                    </div>

                    <div class="form-section">
                        <!-- Personal Details -->
                        <h6
                            style="font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--ink-muted);margin-bottom:1rem;">
                            Personal Details</h6>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label-custom">First Name <span
                                        style="color:var(--red);">*</span></label>
                                <input type="text" class="form-control-custom" placeholder="Rajesh" id="firstName">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">Last Name <span
                                        style="color:var(--red);">*</span></label>
                                <input type="text" class="form-control-custom" placeholder="Desai" id="lastName">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">Mobile Number <span
                                        style="color:var(--red);">*</span></label>
                                <div style="display:flex;gap:8px;align-items:center;">
                                    <span
                                        style="background:var(--red-pale);border:1.5px solid var(--border-soft);border-radius:var(--radius);padding:11px 12px;font-size:14px;color:var(--ink-soft);white-space:nowrap;">🇮🇳
                                        +91</span>
                                    <input type="tel" class="form-control-custom" placeholder="98XXX XXXXX" id="mobile"
                                        style="flex:1;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">Email Address <span
                                        style="color:var(--red);">*</span></label>
                                <input type="email" class="form-control-custom" placeholder="rajesh@email.com"
                                    id="email">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">City / Location</label>
                                <input type="text" class="form-control-custom" placeholder="Surat, Gujarat" id="city">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">Best Time to Call</label>
                                <select class="form-control-custom" id="callTime">
                                    <option value="" disabled selected>Select time slot</option>
                                    <option>Morning (9am – 12pm)</option>
                                    <option>Afternoon (12pm – 3pm)</option>
                                    <option>Evening (3pm – 6pm)</option>
                                    <option>Any time</option>
                                </select>
                            </div>
                        </div>

                        <!-- Service Interest -->
                        <h6
                            style="font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--ink-muted);margin-bottom:1rem;">
                            Services of Interest <span style="color:var(--red);">*</span></h6>
                        <div class="row g-2 mb-3" id="serviceCheckboxes">
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="Equity Advisory"> 📈 Equity Advisory
                                </label>
                            </div>
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="F&O Strategies"> ⚡ F&amp;O Strategies
                                </label>
                            </div>
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="MCX Commodity"> 🥇 MCX Commodity
                                </label>
                            </div>
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="Currency FOREX"> 🌐 Currency &amp; FOREX
                                </label>
                            </div>
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="Portfolio Management"> 🎯 Portfolio Mgmt
                                </label>
                            </div>
                            <div class="col-6 col-sm-4">
                                <label class="service-checkbox" onclick="toggleCheck(this)">
                                    <input type="checkbox" value="Research Reports"> 📚 Research Reports
                                </label>
                            </div>
                        </div>

                        <!-- Investment Profile -->
                        <h6
                            style="font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--ink-muted);margin-bottom:1rem;">
                            Investment Profile</h6>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label-custom">Investment Horizon</label>
                                <select class="form-control-custom" id="horizon">
                                    <option value="" disabled selected>Select horizon</option>
                                    <option>Short-term (under 3 months)</option>
                                    <option>Medium-term (3–12 months)</option>
                                    <option>Long-term (1+ years)</option>
                                    <option>Mix of all</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label-custom">Approximate Investment Size</label>
                                <select class="form-control-custom" id="investment">
                                    <option value="" disabled selected>Select range</option>
                                    <option>Under ₹1 Lakh</option>
                                    <option>₹1L – ₹5L</option>
                                    <option>₹5L – ₹25L</option>
                                    <option>₹25L – ₹1 Crore</option>
                                    <option>Above ₹1 Crore</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">Your Message / Questions</label>
                                <textarea class="form-control-custom"
                                    placeholder="Tell us about your investment goals, current portfolio, or any specific questions you have for our advisors…"
                                    id="message"></textarea>
                            </div>
                        </div>

                        <!-- SEBI Consent -->
                        <div
                            style="background:var(--red-pale);border:1px solid var(--border);border-radius:var(--radius);padding:1rem 1.25rem;margin-bottom:1.5rem;display:flex;align-items:flex-start;gap:10px;">
                            <input type="checkbox" id="consent"
                                style="accent-color:var(--red);width:16px;height:16px;flex-shrink:0;margin-top:2px;">
                            <label for="consent"
                                style="font-size:12px;color:var(--ink-soft);line-height:1.6;cursor:pointer;">
                                I agree to the <a href="#" style="color:var(--red);">Terms & Conditions</a> and <a
                                    href="#" style="color:var(--red);">Privacy Policy</a>. By submitting this form, I
                                authorise Devotion Advisory (SEBI Reg. No. INH000XXXXXX) to contact me via call, SMS, or
                                WhatsApp with advisory information. I understand this is not a solicitation to trade.
                                <span style="color:var(--red);">*</span>
                            </label>
                        </div>

                        <div class="d-flex gap-3 flex-wrap">
                            <button class="btn-primary-custom" onclick="submitForm(this)" id="submitBtn">
                                Submit Enquiry →
                            </button>
                            <a href="https://wa.me/91XXXXXXXXXX?text=Hi%20Devotion%20Advisory%2C%20I%20would%20like%20to%20know%20more%20about%20your%20advisory%20services."
                                target="_blank" class="whatsapp-btn">
                                💬 WhatsApp Us
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT — INFO -->
                <div class="col-lg-5">

                    <!-- Quick Contact -->
                    <div class="reveal mb-4">
                        <span class="section-label">Quick Contact</span>
                        <h3 class="mb-3" style="font-size:1.6rem;">Prefer to talk directly?</h3>
                        <p class="text-soft mb-4" style="font-size:14px;">Our advisors are available Monday to Saturday,
                            9 AM to 6 PM. For urgent queries, WhatsApp is the fastest way to reach us.</p>
                        <div class="d-flex flex-column gap-3">
                            <a href="tel:+91XXXXXXXXXX"
                                style="display:flex;align-items:center;gap:12px;background:var(--white);border:1.5px solid var(--border-soft);border-radius:var(--radius-lg);padding:1rem 1.25rem;text-decoration:none;color:var(--ink);transition:border-color 0.2s,box-shadow 0.2s;"
                                onmouseover="this.style.borderColor='var(--red)';this.style.boxShadow='var(--shadow-md)'"
                                onmouseout="this.style.borderColor='var(--border-soft)';this.style.boxShadow='none'">
                                <span style="font-size:1.5rem;">📞</span>
                                <div>
                                    <strong style="font-size:14px;display:block;">Call Us Directly</strong>
                                    <span style="font-size:13px;color:var(--ink-muted);">+91 XXXXX XXXXX</span>
                                </div>
                            </a>
                            <a href="https://wa.me/91XXXXXXXXXX" target="_blank"
                                style="display:flex;align-items:center;gap:12px;background:#f0fdf4;border:1.5px solid #86efac;border-radius:var(--radius-lg);padding:1rem 1.25rem;text-decoration:none;color:var(--ink);transition:border-color 0.2s,box-shadow 0.2s;"
                                onmouseover="this.style.boxShadow='var(--shadow-md)'"
                                onmouseout="this.style.boxShadow='none'">
                                <span style="font-size:1.5rem;">💬</span>
                                <div>
                                    <strong style="font-size:14px;display:block;color:#166534;">WhatsApp Chat</strong>
                                    <span style="font-size:13px;color:#4ade80;">Fastest response — usually &lt;15
                                        min</span>
                                </div>
                            </a>
                            <a href="mailto:info@devotionadvisory.com"
                                style="display:flex;align-items:center;gap:12px;background:var(--white);border:1.5px solid var(--border-soft);border-radius:var(--radius-lg);padding:1rem 1.25rem;text-decoration:none;color:var(--ink);transition:border-color 0.2s,box-shadow 0.2s;"
                                onmouseover="this.style.borderColor='var(--red)';this.style.boxShadow='var(--shadow-md)'"
                                onmouseout="this.style.borderColor='var(--border-soft)';this.style.boxShadow='none'">
                                <span style="font-size:1.5rem;">✉️</span>
                                <div>
                                    <strong style="font-size:14px;display:block;">Email Us</strong>
                                    <span
                                        style="font-size:13px;color:var(--ink-muted);">info@devotionadvisory.com</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="reveal mb-4">
                        <div
                            style="background:var(--white);border:1px solid var(--border-soft);border-radius:var(--radius-lg);padding:1.75rem;">
                            <h6
                                style="font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--ink-muted);margin-bottom:1.25rem;">
                                Office Hours</h6>
                            <table class="office-hours w-100">
                                <tr>
                                    <td>Monday – Friday</td>
                                    <td>9:00 AM – 6:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>9:00 AM – 2:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td style="color:var(--red);">Closed</td>
                                </tr>
                                <tr>
                                    <td>Public Holidays</td>
                                    <td style="color:var(--red);">Closed</td>
                                </tr>
                            </table>
                            <div style="margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border-soft);">
                                <div style="font-size:12px;color:var(--ink-muted);">⚡ WhatsApp support available outside
                                    office hours for urgent queries.</div>
                            </div>
                        </div>
                    </div>

                    <!-- SEBI Compliance -->
                    <div class="reveal">
                        <div style="background:var(--ink);border-radius:var(--radius-lg);padding:1.75rem;">
                            <h6
                                style="font-size:11px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:rgba(255,255,255,0.4);margin-bottom:1rem;">
                                SEBI Compliance Details</h6>
                            <div style="font-size:13px;color:rgba(255,255,255,0.6);line-height:1.8;">
                                <div style="margin-bottom:0.6rem;"><span style="color:rgba(255,255,255,0.35);">Firm
                                        Name:</span><br><span style="color:#fff;">Devotion Advisory (Investment
                                        Advisor)</span></div>
                                <div style="margin-bottom:0.6rem;"><span
                                        style="color:rgba(255,255,255,0.35);">Registration No.:</span><br><span
                                        style="color:var(--red-light);">INH000XXXXXX</span></div>
                                <div style="margin-bottom:0.6rem;"><span
                                        style="color:rgba(255,255,255,0.35);">Registration Type:</span><br><span
                                        style="color:#fff;">Non-Individual · Perpetual</span></div>
                                <div style="margin-bottom:0.6rem;"><span
                                        style="color:rgba(255,255,255,0.35);">Compliance Officer:</span><br><span
                                        style="color:#fff;">[Name] — <a href="mailto:compliance@devotionadvisory.com"
                                            style="color:var(--red-light);">compliance@devotion<br>advisory.com</a></span>
                                </div>
                                <div style="margin-bottom:0.6rem;"><span style="color:rgba(255,255,255,0.35);">Principal
                                        Officer:</span><br><span style="color:#fff;">Rajesh Desai</span></div>
                                <div><span style="color:rgba(255,255,255,0.35);">Grievance Redressal:</span><br><a
                                        href="https://scores.gov.in" target="_blank"
                                        style="color:var(--red-light);">scores.gov.in ↗</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- MAP + OFFICE -->
    <section class="section-pad" style="background:var(--white);">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 reveal">
                    <span class="section-label">Visit Our Office</span>
                    <h2 class="mb-3">Come meet us<br>in Surat.</h2>
                    <p class="text-soft mb-4">We welcome in-person consultations by appointment. Our office is
                        conveniently located in central Surat, Gujarat — easily accessible by road and public transport.
                    </p>
                    <div
                        style="background:var(--red-pale);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;margin-bottom:1.5rem;">
                        <div style="display:flex;gap:10px;margin-bottom:0.75rem;">
                            <span style="font-size:1.3rem;">📍</span>
                            <div>
                                <strong style="display:block;font-size:14px;margin-bottom:2px;">Devotion
                                    Advisory</strong>
                                <span style="font-size:13px;color:var(--ink-soft);line-height:1.7;">Devotion House, Near
                                    Amibika Park Society,<br>Hanuman Mochi Chowk, Rajya Road,<br>Surat, Gujarat — 395
                                    001</span>
                            </div>
                        </div>
                        <div style="display:flex;gap:10px;margin-bottom:0.75rem;">
                            <span style="font-size:1.3rem;">🚇</span>
                            <span style="font-size:13px;color:var(--ink-soft);">5 min walk from Surat Railway
                                Station</span>
                        </div>
                        <div style="display:flex;gap:10px;">
                            <span style="font-size:1.3rem;">🅿️</span>
                            <span style="font-size:13px;color:var(--ink-soft);">Free parking available in the
                                complex</span>
                        </div>
                    </div>
                    <a href="https://maps.google.com" target="_blank" class="btn-primary-custom">Get Directions →</a>
                </div>
                <div class="col-lg-7 reveal">
                    <!-- Placeholder map — replace with actual Google Maps embed -->
                    <div
                        style="background:var(--red-pale);border:1px solid var(--border);border-radius:var(--radius-lg);height:380px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:1rem;text-align:center;overflow:hidden;position:relative;">
                        <div
                            style="position:absolute;inset:0;background-image:linear-gradient(rgba(232,50,26,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(232,50,26,0.04) 1px,transparent 1px);background-size:40px 40px;">
                        </div>
                        <div style="position:relative;z-index:1;">
                            <div style="font-size:3.5rem;margin-bottom:0.5rem;">🗺️</div>
                            <h5 style="font-family:'Playfair Display',serif;margin-bottom:0.3rem;">Devotion Advisory,
                                Surat</h5>
                            <p style="font-size:13px;color:var(--ink-muted);max-width:300px;margin:0 auto 1.25rem;">
                                Devotion House, Hanuman Mochi Chowk,<br>Rajya Road, Surat – 395 001</p>
                            <a href="https://maps.google.com/?q=Surat+Gujarat+Investment+Advisory" target="_blank"
                                class="btn-outline-red" style="font-size:12px;padding:9px 20px;">Open in Google Maps
                                ↗</a>
                        </div>
                        <!-- Replace this entire div with an actual Google Maps iframe: -->
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=YOUR_EMBED_CODE" class="map-embed"></iframe> -->
                    </div>
                    <p style="font-size:11px;color:var(--ink-muted);margin-top:0.75rem;text-align:center;">💡 Replace
                        the map placeholder above with your actual Google Maps embed code.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GRIEVANCE -->
    <section class="section-pad-sm" style="background:var(--red-pale);">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8 reveal">
                    <h5 style="font-family:'Playfair Display',serif;margin-bottom:0.5rem;">Investor Grievance Redressal
                    </h5>
                    <p style="font-size:14px;color:var(--ink-soft);margin:0;line-height:1.7;">For any complaint or
                        grievance against Devotion Advisory, you may contact our Compliance Officer at <a
                            href="mailto:compliance@devotionadvisory.com"
                            style="color:var(--red);">compliance@devotionadvisory.com</a> or raise a complaint directly
                        through the SEBI SCORES portal at <a href="https://scores.gov.in" target="_blank"
                            style="color:var(--red);">scores.gov.in ↗</a>. We are committed to resolving all grievances
                        within 30 days.</p>
                </div>
                <div class="col-lg-4 text-lg-end reveal">
                    <a href="https://scores.gov.in" target="_blank" class="btn-outline-red">Lodge Complaint on SCORES
                        ↗</a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ('elements/footer.php');?>