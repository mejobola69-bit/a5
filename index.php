<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern Jacket Journal - Contemporary urban outerwear & tailored jacket atelier featuring weatherproof shells, Italian wool blazers, and technical insulated parkas.">
    <title>Modern Jacket Journal | Urban Outerwear & Tailored Atelier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Top Announcement Bar -->
    <div class="top-bar">
        Architectural Outerwear Curation | 20,000mm Waterproof Shells &bull; <span>Code: JOURNAL2026</span>
    </div>

    <!-- Header Navigation (Sleek Compact Logo: 1.35rem) -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">ModernJacket<span>Journal</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="blog/index.html">Journal</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Architectural Jacket Fitting Studio & Outerwear Journal Hero -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <span class="hero-tag">Architectural Outerwear &bull; 2026 Collection</span>
                <h1>Mastering <span>Weatherproof Precision</span> & Tailored Elegance</h1>
                <p>Discover technical 3-layer waterproof shells, 800-fill goose down parkas, and unconstructed Italian wool blazers built for urban climate resistance.</p>
                <div class="hero-btns">
                    <a href="collections.html" class="btn btn-primary">Explore Outerwear Vault</a>
                    <a href="#calibrator" class="btn btn-secondary">Membrane Calibrator</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="img/hero_jacket.jpg" alt="Modern Urban Outerwear Shell Jacket" loading="lazy">
                <div class="badge-overlay">
                    <h4>20K/20K Breathable Membrane</h4>
                    <p>Fully Taped Seams &bull; PFC-Free DWR Coating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Insulation & Waterproofing Membrane Calibrator -->
    <section class="calibrator-section" id="calibrator">
        <div class="calibrator-card">
            <div class="calibrator-text">
                <h2>Membrane & Insulation Calibrator</h2>
                <p>Select target weather extremes, shell breathability ratings, and fill power loft density for optimized technical jacket performance.</p>
                <div class="calibrator-controls">
                    <div class="input-group">
                        <label for="membrane-select">Selected Technical Membrane</label>
                        <select id="membrane-select">
                            <option value="3layer">3-Layer StormProof (20,000mm Hydrostatic)</option>
                            <option value="wool">Loro Piana Storm System Wool Blazer</option>
                            <option value="expedition">Sub-Zero Expedition Arctic Down Shell</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="fill-slider">Down Insulation Loft Target (<span id="fill-val">800 Fill Power</span>)</label>
                        <input type="range" id="fill-slider" min="600" max="950" step="50" value="800">
                    </div>
                </div>
            </div>
            <div class="calibrator-preview-box">
                <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--amber-glow);">Warmth Loft Rating</p>
                <div class="rating-gauge" id="rating-gauge">800FP</div>
                <p style="font-size: 0.85rem; color: #A1A1AA;">Ethically Sourced Goose Down</p>
            </div>
        </div>
    </section>

    <!-- Outerwear Vault Catalog Section -->
    <section class="catalog">
        <div class="section-header">
            <span class="section-tag">Outerwear Vault</span>
            <h2>Curated Outerwear Masterpieces</h2>
            <p>Precision-engineered weather shells, tailored structured blazers, and urban tactical parkas.</p>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket1.jpg" alt="Weatherproof 3-Layer Shell Jacket" loading="lazy">
                    <span class="product-tag">Tech Shell</span>
                </div>
                <div class="product-info">
                    <h3>Weatherproof 3-Layer Shell Jacket</h3>
                    <p>20,000mm hydrostatic head protection with YKK AquaGuard waterproof zippers.</p>
                    <div class="product-bottom">
                        <span class="price">$480</span>
                        <a href="collections.html" class="read-more">View Garment Detail &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket2.jpg" alt="Tailored Italian Wool Oversized Blazer" loading="lazy">
                    <span class="product-tag">Wool Blazer</span>
                </div>
                <div class="product-info">
                    <h3>Tailored Italian Wool Oversized Blazer</h3>
                    <p>Virgin Merino wool woven in Biella, Italy with unconstructed natural shoulders.</p>
                    <div class="product-bottom">
                        <span class="price">$620</span>
                        <a href="collections.html" class="read-more">View Garment Detail &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-img">
                    <img src="img/jacket3.jpg" alt="Tactical 800-Fill Goose Down Parka" loading="lazy">
                    <span class="product-tag">Arctic Down</span>
                </div>
                <div class="product-info">
                    <h3>Tactical 800-Fill Goose Down Parka</h3>
                    <p>Arctic-grade insulated parka rated for -25°C with removable fleece hood liner.</p>
                    <div class="product-bottom">
                        <span class="price">$750</span>
                        <a href="collections.html" class="read-more">View Garment Detail &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Benchmarks Section -->
    <section class="benchmarks">
        <div class="benchmarks-container">
            <div class="benchmark-card">
                <div class="benchmark-icon">&starf;</div>
                <h4>Fully Taped Micro-Seams</h4>
                <p>13mm ultra-thin seam tape sealing every needle perforation against rain penetration.</p>
            </div>
            <div class="benchmark-card">
                <div class="benchmark-icon">&check;</div>
                <h4>800-Fill Responsible Down</h4>
                <p>RDS certified goose down providing lightweight thermal efficiency without bulk.</p>
            </div>
            <div class="benchmark-card">
                <div class="benchmark-icon">&infin;</div>
                <h4>Recycled Technical Nylon</h4>
                <p>High-tenacity ripstop nylon woven from post-consumer recycled ocean plastics.</p>
            </div>
        </div>
    </section>

    <!-- Journal Section -->
    <section class="blog-section">
        <div class="section-header">
            <span class="section-tag">Atelier Journal</span>
            <h2>Modern Outerwear Journal</h2>
            <p>Masterclass articles on garment waterproofing ratings, down loft science, and wool blazer preservation.</p>
        </div>
        <div class="blog-grid">
            <div class="blog-card">
                <img src="img/craft.jpg" alt="The evolution of urban weatherproof jacket design" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Garment Architecture &bull; July 2026</div>
                    <h3>The Evolution of Urban Weatherproof Jacket Design</h3>
                    <p>Merging high-altitude mountain engineering with sleek metropolitan tailoring.</p>
                    <a href="blog/the-evolution-of-urban-weatherproof-jacket-design.html" class="read-more">Read Journal Article &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="img/journal1.jpg" alt="Understanding waterproofing ratings" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Membrane Science &bull; July 2026</div>
                    <h3>Understanding Waterproofing Ratings: From 10K to 30K Membranes</h3>
                    <p>Decoding hydrostatic head water pressure tests and breathability vapor transport.</p>
                    <a href="blog/understanding-waterproofing-ratings-from-10k-to-30k-membranes.html" class="read-more">Read Journal Article &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="img/journal2.jpg" alt="Down fill power cold weather warmth" loading="lazy">
                <div class="blog-card-content">
                    <div class="blog-meta">Insulation Tech &bull; July 2026</div>
                    <h3>How Down Fill Power Defines Cold-Weather Warmth-to-Weight Ratio</h3>
                    <p>Comparing 600FP vs 850FP goose down loft expansion in freezing climates.</p>
                    <a href="blog/how-down-fill-power-defines-cold-weather-warmth-to-weight-ratio.html" class="read-more">Read Journal Article &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Sleek Compact Logo: 1.35rem) -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 2rem; display: inline-block;">ModernJacket<span>Journal</span></a>
                <p>Modern Jacket Journal is a contemporary urban outerwear & tailored jacket atelier featuring weatherproof shells, Italian wool blazers, and technical insulated parkas.</p>
            </div>
            <div class="footer-col">
                <h4>Atelier Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="blog/index.html">Atelier Journal</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance & Legal</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Atelier Headquarters</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@modernjacketjournal.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Modern Jacket Journal. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
