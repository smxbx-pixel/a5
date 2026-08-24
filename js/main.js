/* PoshCarryLane - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Handbag Silhouette & Leather Grain Selector Explorer
  const bagButtons = document.querySelectorAll('.bag-btn');
  const bagDisplay = document.getElementById('bag-detail');

  if (bagButtons.length > 0 && bagDisplay) {
    bagButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        bagButtons.forEach(b => b.classList.remove('active-bag'));
        this.classList.add('active-bag');
        const bagName = this.getAttribute('data-bag');
        const description = this.getAttribute('data-desc');
        const durability = this.getAttribute('data-durability');

        bagDisplay.innerHTML = `
          <div class="bag-card" style="border-left: 4px solid var(--accent-plum); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-plum); font-size: 1.5rem; margin-bottom: 0.5rem;">${bagName} Atelier Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-gold); font-size: 0.95rem;">Empirical Leather Durability Score: ${durability}</strong>
          </div>
        `;
      });
    });
  }

  // Handbag Matcher & Occasion Diagnostic Quiz
  const occasionQuizButtons = document.querySelectorAll('.occasion-quiz-btn');
  const occasionQuizResult = document.getElementById('occasion-quiz-result');

  if (occasionQuizButtons.length > 0 && occasionQuizResult) {
    occasionQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        occasionQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        occasionQuizResult.innerHTML = `
          <div class="bag-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-plum);">
            <h4 style="color: var(--accent-plum); margin-bottom: 0.5rem;">Your Curated Luxury Handbag Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
