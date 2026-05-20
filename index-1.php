<?php include_once ('elements/header.php');?>

<!-- HERO -->
<section class="hero" style="padding-top: 0; padding-left: 0; padding-right: 0;">
  <div class="hero-left">
    <div class="hero-eyebrow">
      <span class="hero-eyebrow-line"></span>
      <span class="label">SEBI Registered Investment Advisor</span>
    </div>

    <h1 class="hero-title">
      Your Wealth,<br>
      <em>Our Devotion.</em>
    </h1>

    <p class="hero-sub">
      Precision-driven research. Disciplined portfolio strategies. Expert guidance crafted for every stage of your
      financial journey.
    </p>

    <div class="hero-actions">
      <a href="#contact" class="btn-primary">Start Your Journey</a>
      <a href="#services" class="btn-ghost">Explore Services →</a>
    </div>

    <div class="hero-badges">
      <div class="hero-badge">
        <div class="hero-badge-num">15+</div>
        <div class="hero-badge-label">Years of Experience</div>
      </div>
      <div class="hero-badge">
        <div class="hero-badge-num">4,200+</div>
        <div class="hero-badge-label">Clients Served</div>
      </div>
      <div class="hero-badge">
        <div class="hero-badge-num">98%</div>
        <div class="hero-badge-label">Client Retention</div>
      </div>
    </div>
  </div>

  <div class="hero-right">
    <div class="hero-deco"></div>
    <div class="hero-grid-lines"></div>
    <div class="hero-right-inner">

      <!-- Animated Stock Chart -->
      <div class="hero-chart">
        <svg class="chart-svg" viewBox="0 0 380 160" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="chartGrad" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#b89a5a" stop-opacity="0.2" />
              <stop offset="100%" stop-color="#b89a5a" stop-opacity="0" />
            </linearGradient>
          </defs>
          <path
            d="M0 140 L40 120 L80 125 L120 100 L160 85 L200 90 L240 60 L280 45 L320 30 L360 20 L380 15 L380 160 L0 160 Z"
            fill="url(#chartGrad)" />
          <path d="M0 140 L40 120 L80 125 L120 100 L160 85 L200 90 L240 60 L280 45 L320 30 L360 20 L380 15"
            fill="none" stroke="#b89a5a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="2s" begin="0.5s" fill="freeze" />
          </path>
          <!-- Grid lines -->
          <line x1="0" y1="40" x2="380" y2="40" stroke="rgba(255,255,255,0.05)" stroke-width="1" />
          <line x1="0" y1="80" x2="380" y2="80" stroke="rgba(255,255,255,0.05)" stroke-width="1" />
          <line x1="0" y1="120" x2="380" y2="120" stroke="rgba(255,255,255,0.05)" stroke-width="1" />
          <!-- Dot at end -->
          <circle cx="380" cy="15" r="5" fill="#b89a5a" opacity="0">
            <animate attributeName="opacity" from="0" to="1" dur="0.3s" begin="2.3s" fill="freeze" />
          </circle>
          <circle cx="380" cy="15" r="10" fill="none" stroke="#b89a5a" stroke-width="1" opacity="0">
            <animate attributeName="opacity" from="0" to="0.4" dur="0.3s" begin="2.3s" fill="freeze" />
            <animate attributeName="r" from="5" to="16" dur="1s" begin="2.3s" repeatCount="indefinite" />
            <animate attributeName="opacity" from="0.4" to="0" dur="1s" begin="2.3s" repeatCount="indefinite" />
          </circle>
          <!-- Labels -->
          <text x="0" y="156" fill="rgba(255,255,255,0.25)" font-size="10"
            font-family="DM Sans, sans-serif">Jan</text>
          <text x="80" y="156" fill="rgba(255,255,255,0.25)" font-size="10"
            font-family="DM Sans, sans-serif">Mar</text>
          <text x="160" y="156" fill="rgba(255,255,255,0.25)" font-size="10"
            font-family="DM Sans, sans-serif">May</text>
          <text x="240" y="156" fill="rgba(255,255,255,0.25)" font-size="10"
            font-family="DM Sans, sans-serif">Jul</text>
          <text x="320" y="156" fill="rgba(255,255,255,0.25)" font-size="10"
            font-family="DM Sans, sans-serif">Sep</text>
          <text x="355" y="20" fill="#b89a5a" font-size="11" font-family="DM Sans, sans-serif"
            font-weight="500">+42%</text>
        </svg>
      </div>

      <!-- Enquiry Form -->
      <div class="enquiry-card">
        <h3>Free Consultation</h3>
        <div class="sub">SEBI Reg. No. INH000XXXXXX · No obligation</div>

        <div class="form-field">
          <input type="text" placeholder="Full Name" autocomplete="name">
        </div>
        <div class="form-field">
          <input type="tel" placeholder="+91 Mobile Number" autocomplete="tel">
        </div>
        <div class="form-field">
          <input type="email" placeholder="Email Address" autocomplete="email">
        </div>
        <div class="form-field">
          <select>
            <option value="" disabled selected>Select Service</option>
            <option>Equity Advisory</option>
            <option>F&O Strategies</option>
            <option>Commodity (MCX)</option>
            <option>Currency</option>
            <option>Portfolio Management</option>
          </select>
        </div>
        <button class="form-submit" onclick="handleFormSubmit(this)">Request Callback →</button>
      </div>

    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar">
  <div class="trust-item">
    <div class="trust-icon">🏛️</div>
    <div><strong>SEBI Registered</strong>
      <p>INH000XXXXXX · Perpetual Validity</p>
    </div>
  </div>
  <div class="trust-divider"></div>
  <div class="trust-item">
    <div class="trust-icon">🏆</div>
    <div><strong>Award Winning Research</strong>
      <p>Recognised for market accuracy</p>
    </div>
  </div>
  <div class="trust-divider"></div>
  <div class="trust-item">
    <div class="trust-icon">🔒</div>
    <div><strong>Risk-Managed Calls</strong>
      <p>SL & Target defined on every call</p>
    </div>
  </div>
  <div class="trust-divider"></div>
  <div class="trust-item">
    <div class="trust-icon">📊</div>
    <div><strong>Technical + Fundamental</strong>
      <p>360° stock research approach</p>
    </div>
  </div>
  <div class="trust-divider"></div>
  <div class="trust-item">
    <div class="trust-icon">📱</div>
    <div><strong>Daily Alerts</strong>
      <p>SMS, WhatsApp & App notifications</p>
    </div>
  </div>
</div>

<!-- WHY US -->
<section id="about">
  <div class="section-header reveal">
    <span class="label">Why Choose Us</span>
    <h2>Counsel built on<br>conviction, not commission.</h2>
  </div>

  <div class="why-grid">
    <div class="why-card reveal">
      <div class="why-num">01</div>
      <h3>Research-First Philosophy</h3>
      <p>Every recommendation is backed by rigorous technical & fundamental analysis of equities, commodities, and
        currency markets — never mere speculation.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-num">02</div>
      <h3>15 Years of Proven Track Record</h3>
      <p>Over a decade and a half of navigating bull and bear markets, delivering consistent, risk-adjusted returns to
        our growing client base across India.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-num">03</div>
      <h3>SEBI Registered &amp; Regulated</h3>
      <p>Full regulatory compliance ensures your interests are protected. We operate under SEBI's stringent guidelines
        with complete transparency.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-num">04</div>
      <h3>Defined Risk on Every Call</h3>
      <p>No open-ended recommendations. Each call comes with a precise stop-loss, target, and rationale — so you
        always know your risk before you trade.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-num">05</div>
      <h3>Dedicated Relationship Manager</h3>
      <p>You get a dedicated expert who understands your portfolio, risk appetite, and financial goals — not a generic
        call centre.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-num">06</div>
      <h3>Multi-Segment Coverage</h3>
      <p>Equity, F&O, MCX, NCDEX, Currency, and FOREX — comprehensive coverage across all major market segments on one
        platform.</p>
    </div>
  </div>
</section>

<!-- METRICS -->
<section class="metrics" id="metrics">
  <div class="section-header reveal" style="text-align: center;">
    <span class="label">Our Impact</span>
    <h2>Numbers that speak for<br>decades of devotion.</h2>
  </div>
  <div class="metrics-grid">
    <div class="metric-card reveal">
      <div class="metric-num">15<span>+</span></div>
      <div class="metric-label">Years of Advisory Experience</div>
    </div>
    <div class="metric-card reveal">
      <div class="metric-num">4,200<span>+</span></div>
      <div class="metric-label">Satisfied Clients</div>
    </div>
    <div class="metric-card reveal">
      <div class="metric-num">82<span>%</span></div>
      <div class="metric-label">Accuracy Rate (Last 12 Months)</div>
    </div>
    <div class="metric-card reveal">
      <div class="metric-num">6<span></span></div>
      <div class="metric-label">Market Segments Covered</div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
  <div class="section-header reveal">
    <span class="label">Our Services</span>
    <h2 style="color: var(--cream);">Expertise across every<br>market segment.</h2>
  </div>

  <div class="services-grid">
    <div class="service-card reveal">
      <div class="service-icon">📈</div>
      <h3>Equity Advisory</h3>
      <p>Cash market stock recommendations with long-term and short-term calls, supported by fundamental screening and
        technical timing.</p>
      <span class="service-tag">NSE · BSE</span>
    </div>
    <div class="service-card reveal">
      <div class="service-icon">⚡</div>
      <h3>F&O Strategies</h3>
      <p>Futures and options advisory with defined risk-reward setups. Positional, swing, and intraday calls for
        active traders.</p>
      <span class="service-tag">Index · Stock Options</span>
    </div>
    <div class="service-card reveal">
      <div class="service-icon">🥇</div>
      <h3>MCX Commodity</h3>
      <p>Gold, silver, crude oil, and base metals advisory. Expert guidance on commodity cycles with macro and
        seasonal insights.</p>
      <span class="service-tag">MCX · NCDEX</span>
    </div>
    <div class="service-card reveal">
      <div class="service-icon">🌐</div>
      <h3>Currency &amp; FOREX</h3>
      <p>USD/INR, EUR/INR, and cross-currency pairs. Currency derivatives advisory for businesses and traders managing
        forex exposure.</p>
      <span class="service-tag">CDS · FOREX</span>
    </div>
    <div class="service-card reveal">
      <div class="service-icon">🎯</div>
      <h3>Portfolio Management</h3>
      <p>Holistic portfolio review, asset allocation, rebalancing, and long-term wealth creation strategies tailored
        to your goals.</p>
      <span class="service-tag">Long-term · Wealth</span>
    </div>
    <div class="service-card reveal">
      <div class="service-icon">📚</div>
      <h3>Research Reports</h3>
      <p>In-depth sector reports, earnings previews, IPO analysis, and quarterly reviews to keep you ahead of market
        movements.</p>
      <span class="service-tag">Fundamental · Technical</span>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process" style="background: var(--white);">
  <div class="section-header reveal" style="text-align: center;">
    <span class="label">How It Works</span>
    <h2>Your journey to financial<br>clarity in four steps.</h2>
  </div>

  <div class="process-steps">
    <div class="process-step reveal">
      <div class="step-num">01</div>
      <h4>Free Consultation</h4>
      <p>Share your financial goals, risk tolerance, and investment horizon with our advisor.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">02</div>
      <h4>Portfolio Analysis</h4>
      <p>We review your existing holdings and identify opportunities and gaps in your strategy.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">03</div>
      <h4>Tailored Plan</h4>
      <p>A personalised advisory plan is crafted with specific recommendations for your profile.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">04</div>
      <h4>Ongoing Guidance</h4>
      <p>Continuous monitoring, alerts, and portfolio reviews to keep you on track.</p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="section-header reveal">
    <span class="label">Client Speak</span>
    <h2>Trusted by investors<br>across India.</h2>
  </div>

  <div class="testimonials-grid">
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Devotion Advisory has completely transformed how I approach the market. Their daily
        calls are precise and the team is always available to explain the rationale. Truly reliable advisors.</p>
      <div class="testimonial-author">
        <div class="author-avatar">HM</div>
        <div>
          <div class="author-name">Hasmukh Mehta</div>
          <div class="author-loc">Thane, Maharashtra</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">I've been with them for 3 years now. Their F&O calls have a remarkable accuracy and
        they always define the stop-loss upfront. No hidden charges, no surprises — very professional.</p>
      <div class="testimonial-author">
        <div class="author-avatar">RP</div>
        <div>
          <div class="author-name">Rekha Patel</div>
          <div class="author-loc">Ahmedabad, Gujarat</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">As a working professional, I don't have time to track the markets. Devotion Advisory
        handles everything — research, alerts, and reviews. My portfolio is up 38% this year alone.</p>
      <div class="testimonial-author">
        <div class="author-avatar">AS</div>
        <div>
          <div class="author-name">Amit Sharma</div>
          <div class="author-loc">Pune, Maharashtra</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">The commodity advisory is exceptional. Their MCX gold and crude oil calls have saved
        me significant losses during volatile sessions. Highly recommended for serious traders.</p>
      <div class="testimonial-author">
        <div class="author-avatar">KJ</div>
        <div>
          <div class="author-name">Kiran Joshi</div>
          <div class="author-loc">Rajkot, Gujarat</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">What sets them apart is their transparency. They share both winning and losing
        trades openly, and the risk management they teach is invaluable. Real advisors who care about clients.</p>
      <div class="testimonial-author">
        <div class="author-avatar">NS</div>
        <div>
          <div class="author-name">Nisha Soni</div>
          <div class="author-loc">Surat, Gujarat</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Switched from two other advisory firms before finding Devotion. The difference in
        quality of research and client service is night and day. This is what a real advisory should look like.</p>
      <div class="testimonial-author">
        <div class="author-avatar">VD</div>
        <div>
          <div class="author-name">Vivek Desai</div>
          <div class="author-loc">Mumbai, Maharashtra</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="section-header reveal">
    <span class="label">Frequently Asked</span>
    <h2>Questions we hear<br>most often.</h2>
  </div>

  <div class="faq-list">
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        Why should I hire a SEBI registered investment advisor?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        SEBI registration ensures your advisor operates under strict regulatory oversight, is obligated to act in your
        best interest, and follows a code of conduct that protects you legally. Unregistered advisors carry
        significant legal and financial risk for clients.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        What is a Stock Advisory Company?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        A stock advisory company provides research-based buy/sell recommendations on equities, derivatives,
        commodities, and currencies. A SEBI-registered advisor like Devotion Advisory is legally authorised to provide
        personalised investment advice tailored to your financial goals.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        Are share market advisory services worth the money?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        Absolutely, when you choose a credible, SEBI-registered advisor. Quality advisory not only helps you identify
        profitable opportunities but also prevents costly mistakes, manages downside risk, and compounds your wealth
        systematically over time.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        What if I lose money following your advice?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        All market investments carry inherent risk. We define a stop-loss with every call to limit downside. Our job
        is to give you high-probability setups backed by research — but no advisor can guarantee profits. We aim for
        consistency and risk-adjusted returns over time, not quick riches.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        How do I receive trading calls and alerts?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        We deliver calls via SMS, WhatsApp, and our dedicated client portal. Each alert includes the stock/instrument,
        entry price, stop-loss, and target — so you have everything you need to act immediately with full context.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        Is Devotion Advisory suitable for beginners?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        Yes. We work with both first-time investors and seasoned traders. For beginners, we offer education-first
        onboarding to help you understand each recommendation. Our advisory grows with you as your experience and
        portfolio expand.
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">
        What factors should I consider when choosing an advisory company?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        Look for SEBI registration, a verifiable track record, defined risk management on every call, transparent fee
        structure (no commission-based conflicts), client reviews, and dedicated support. Devotion Advisory checks
        every box — we'd be happy to show you our historical performance report.
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="section-header reveal">
    <span class="label">Get In Touch</span>
    <h2>Begin your advisory<br>relationship today.</h2>
  </div>

  <div class="contact-grid">
    <div class="reveal">
      <p class="contact-intro">
        Whether you're starting your investment journey or looking to elevate an existing portfolio, our advisors are
        ready to craft a strategy built around you.
      </p>
      <div class="contact-details">
        <div class="contact-detail">
          <div class="contact-detail-icon">📞</div>
          <div class="contact-detail-text">
            <strong>Call Us</strong>
            <span>+91 XXXXX XXXXX</span>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">✉️</div>
          <div class="contact-detail-text">
            <strong>Email</strong>
            <span>info@devotionadvisory.com</span>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">📍</div>
          <div class="contact-detail-text">
            <strong>Office</strong>
            <span>Devotion House, Surat, Gujarat — 395 001</span>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-detail-icon">🏛️</div>
          <div class="contact-detail-text">
            <strong>SEBI Registration</strong>
            <span>INH000XXXXXX · Non-Individual · Perpetual</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form reveal">
      <div class="form-row">
        <div class="form-field"><input type="text" placeholder="First Name"></div>
        <div class="form-field"><input type="text" placeholder="Last Name"></div>
      </div>
      <div class="form-field"><input type="tel" placeholder="+91 Mobile Number"></div>
      <div class="form-field"><input type="email" placeholder="Email Address"></div>
      <div class="form-field"><textarea
          placeholder="Tell us about your investment goals and what you're looking for…"></textarea></div>
      <button class="form-submit" style="background: var(--red); color: var(--ink);"
        onclick="handleFormSubmit(this)">
        Send Message →
      </button>
    </div>
  </div>
</section>

<?php include_once ('elements/footer.php');?>