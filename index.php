<?php include 'layout/header.php'; ?>
 <?php include 'layout/navbar.php'; ?>
    <!-- Hero -->
    <section class="hero" id="home">
        <div class="container hero-inner">
            <div class="hero-left">
                <p class="hero-subtitle">Welcome to Nexus Property</p>
                <h1>Simple Steps,<br>to Your Dream Home</h1>
                <p class="hero-desc">Discover the finest luxury properties handpicked for discerning buyers. We bring you premium residences that redefine modern living with elegance and sophistication.</p>
                <div class="hero-buttons">
                    <a href="properties.php" class="btn-primary">Explore Properties</a>
                    <a href="contact.php" class="btn-outline">Contact Us</a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-num">500+</span>
                        <span class="stat-label">Properties Sold</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">99%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-right">
                <div class="hero-carousel owl-carousel" aria-label="Hero image slideshow">
                    <div class="hero-slide"><img src="images/newhero1.webp" alt="Luxury Villa" width="600" height="480" fetchpriority="high"></div>
                    <div class="hero-slide"><img src="images/newhero2.webp" alt="Premium Interior" width="600" height="480"></div>
                    <div class="hero-slide"><img src="images/newhero3.webp" alt="Luxury Estate" width="600" height="480"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <section class="features" aria-label="Key features">
        <div class="container features-grid">
            <div class="feature-card">
                <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <h3>Premium Locations</h3>
                <p>Handpicked prime locations in the most sought-after neighbourhoods.</p>
            </div>
            <div class="feature-card">
                <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M6 3h12l4 6-10 12L2 9z"/><path d="M11 3 8 9l4 12 4-12-3-6"/><path d="M2 9h20"/></svg>
                <h3>Luxury Amenities</h3>
                <p>World-class amenities designed for an elevated lifestyle experience.</p>
            </div>
            <div class="feature-card">
                <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <h3>Trust &amp; Transparency</h3>
                <p>RERA registered projects with complete legal clarity and documentation.</p>
            </div>
            <div class="feature-card">
                <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                <h3>Dedicated Support</h3>
                <p>Personalised assistance from expert advisors at every step.</p>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="container about-inner">
            <div class="about-image">
                <img src="images/newabout.webp" alt="Luxury Property exterior view" width="600" height="500" loading="lazy">
            </div>
            <div class="about-content">
                <p class="section-subtitle">About Nexus Property</p>
                <h2>We Turn Dreams<br>Into Addresses</h2>
                <p class="about-desc">Nexus Property is committed to delivering the best real estate solutions with a focus on trust, transparency, and customer satisfaction. Our experienced team has successfully completed numerous projects, helping hundreds of clients find their dream properties and investments.
<br>
We believe in building long-term relationships and providing value-driven services to all our clients.</p>
                <div class="about-points">
                    <div class="about-point">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <span>Trusted by 500+ clients</span>
                    </div>
                    <div class="about-point">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <span>25+ years of experience</span>
                    </div>
                    <div class="about-point">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <span>Wide range of residential and commercial projects</span>
                    </div>
                    <div class="about-point">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <span>Post-Sale Customer Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Properties -->
    <section class="properties" id="properties">
        <div class="container">
            <p class="section-subtitle text-center">Our Portfolio</p>
            <h2 class="section-title text-center">Featured Properties</h2>
            <div class="properties-grid">
                <div class="property-card">
                    <div class="property-img">
                        <img src="images/pro-001.webp" alt="Rampur Srishti Kunj property" width="300" height="220" loading="lazy">
                        <span class="property-type">Villa</span>
                    </div>
                    <div class="property-info">
                        <h3>Rampur Srishti Kunj</h3>
                        <p class="property-location"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Pari Chawk - 20 min</p>
                        <div class="property-bottom">
                            <span class="property-price">₹3.5 Cr</span>
                            <a href="properties2.php" class="btn-small">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="property-img">
                        <img src="images/pro-002.webp" alt="Welcome Society property" width="300" height="220" loading="lazy">
                        <span class="property-type">Apartment</span>
                    </div>
                    <div class="property-info">
                        <h3>Welcome Society, (U.P)</h3>
                        <p class="property-location"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Jewar International Airport - 20 min</p>
                        <div class="property-bottom">
                            <span class="property-price">₹1.8 Cr</span>
                            <a href="properties2.php" class="btn-small">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="property-img">
                        <img src="images/property3.webp" alt="Royal Orchid Villas property" width="300" height="220" loading="lazy">
                        <span class="property-type">Penthouse</span>
                    </div>
                    <div class="property-info">
                        <h3>Royal Orchid Villas</h3>
                        <p class="property-location"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Whitefield, Bangalore</p>
                        <div class="property-bottom">
                            <span class="property-price">₹2.9 Cr</span>
                            <a href="contact.php" class="btn-small">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="property-img">
                        <img src="images/property4.webp" alt="Azure Bay Residences property" width="300" height="220" loading="lazy">
                        <span class="property-type">Luxury Flat</span>
                    </div>
                    <div class="property-info">
                        <h3>Azure Bay Residences</h3>
                        <p class="property-location"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Bandra West, Mumbai</p>
                        <div class="property-bottom">
                            <span class="property-price">₹5.2 Cr</span>
                            <a href="contact.php" class="btn-small">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team" id="team">
        <div class="container">
            <p class="section-subtitle text-center">Our Experts</p>
            <h2 class="section-title text-center">Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-img"><img src="images/mohd_anjum.webp" alt="Mohd Anjum" width="130" height="130" loading="lazy"></div>
                    <h3>Mohd Anjum</h3>
                    <p class="team-role">MD</p>
                </div>
                <div class="team-card">
                    <div class="team-img"><img src="images/shazia_aftab.webp" alt="Shazia Aftab" width="130" height="130" loading="lazy"></div>
                    <h3>Shazia Aftab</h3>
                    <p class="team-role">CEO</p>
                </div>
                <div class="team-card">
                    <div class="team-img"><img src="images/zeba_wahid.webp" alt="Zeba Wahid" width="130" height="130" loading="lazy"></div>
                    <h3>Zeba Wahid</h3>
                    <p class="team-role">Advisor</p>
                </div>
                <div class="team-card">
                    <div class="team-img"><img src="images/mohd_shakeel.webp" alt="Mohd Shakeel" width="130" height="130" loading="lazy"></div>
                    <h3>Mohd Shakeel</h3>
                    <p class="team-role">Accounts/Admin</p>
                </div>
                <div class="team-card">
                    <div class="team-img"><img src="images/mahi.webp" alt="Mahi" width="130" height="130" loading="lazy"></div>
                    <h3>Mahi</h3>
                    <p class="team-role">HR</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
    <section class="blog" id="blog">
        <div class="container">
            <p class="section-subtitle text-center">Latest Insights</p>
            <h2 class="section-title text-center">From Our Blog</h2>
            <div class="blog-grid">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="images/newblog1.webp" alt="Top 5 luxury localities to invest in 2026" width="400" height="220" loading="lazy">
                        <span class="blog-date">May 20, 2026</span>
                    </div>
                    <div class="blog-content">
                        <h3>Top 5 Luxury Localities to Invest in 2026</h3>
                        <p>Explore the most promising luxury real estate destinations that offer excellent returns and premium lifestyle.</p>
                        <a href="blog1.php" class="btn-small">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="images/newblog2.webp" alt="How to choose the perfect luxury home" width="400" height="220" loading="lazy">
                        <span class="blog-date">May 12, 2026</span>
                    </div>
                    <div class="blog-content">
                        <h3>How to Choose the Perfect Luxury Home</h3>
                        <p>A comprehensive guide to finding your dream luxury property with expert tips on location, design and value.</p>
                        <a href="blog2.php" class="btn-small">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="images/newblog3.webp" alt="Understanding RERA and your rights" width="400" height="220" loading="lazy">
                        <span class="blog-date">Apr 28, 2026</span>
                    </div>
                    <div class="blog-content">
                        <h3>Understanding RERA and Your Rights</h3>
                        <p>Everything you need to know about RERA registration and how it protects your investment in real estate.</p>
                        <a href="blog3.php" class="btn-small">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <p class="section-subtitle text-center light">Our Showcase</p>
            <h2 class="section-title text-center light">Gallery &amp; Videos</h2>
            <div class="gallery-tabs">
                <button class="gallery-tab active" data-tab="images"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg> Images</button>
                <button class="gallery-tab" data-tab="videos"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg> Videos</button>
            </div>
            <!-- Images Tab -->
            <div class="gallery-panel active" id="gallery-images">
                <div class="gallery-grid owl-carousel" aria-label="Gallery slideshow">
                    <div class="gallery-item">
                        <img src="images/img-001.webp" alt="Property showcase 1" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-002.webp" alt="Property showcase 2" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-003.webp" alt="Property showcase 3" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-004.webp" alt="Property showcase 4" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-005.webp" alt="Property showcase 5" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-006.webp" alt="Property showcase 6" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-007.webp" alt="Property showcase 7" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-008.webp" alt="Property showcase 8" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-009.webp" alt="Property showcase 9" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-10.webp" alt="Property showcase 10" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-1001.webp" alt="Property showcase 11" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/img-1002.webp" alt="Property showcase 12" width="400" height="260" loading="lazy">
                        <div class="gallery-overlay"><svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></div>
                    </div>
                </div>
            </div>
            <!-- Videos Tab -->
            <div class="gallery-panel" id="gallery-videos">
                <div class="gallery-videos-grid">
                    <div class="gallery-item">
                        <video controls preload="metadata" playsinline poster="images/vd-001-thumb.webp">
                            <source src="images/vd-001.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="gallery-item">
                        <video controls preload="metadata" playsinline poster="images/vd-002-thumb.webp">
                            <source src="images/vd-002.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container contact-inner">
            <div class="contact-info">
                <p class="section-subtitle">Get In Touch</p>
                <h2>Let's Find Your<br>Dream Home</h2>
                <p class="contact-desc">Reach out to our team of experts for personalised assistance with finding your perfect luxury property.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <strong>Our Office</strong>
                            <p>320 A-B Third floor,
                            Living Style Mall,
                            Jasola, New Delhi - 110025</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor" class="icon" aria-hidden="true"><path d="M6.62 10.79a15.15 15.15 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.11-.27 11.72 11.72 0 0 0 3.67.58 1 1 0 0 1 1 1v3.5a1 1 0 0 1-1 1A16 16 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.72 11.72 0 0 0 .58 3.67 1 1 0 0 1-.27 1.11z"/></svg>
                        <div>
                            <strong>Phone</strong>
                            <p>+91 98108 90055</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <div>
                            <strong>Email</strong>
                            <p>info@nexusproperty.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrap">
                <form class="contact-form" id="contactForm">
                    <h3>Book a Free Consultation</h3>
                    <label for="cf-name" class="sr-only">Your Full Name</label>
                    <input type="text" id="cf-name" placeholder="Your Full Name" required autocomplete="name">
                    <label for="cf-email" class="sr-only">Email Address</label>
                    <input type="email" id="cf-email" placeholder="Email Address" required autocomplete="email">
                    <label for="cf-phone" class="sr-only">Phone Number</label>
                    <input type="tel" id="cf-phone" placeholder="Phone Number" required autocomplete="tel">
                    <label for="cf-property" class="sr-only">Select Property Type</label>
                    <select id="cf-property">
                        <option value="">Select Property Type</option>
                        <option value="Villa">Villa</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="Luxury Flat">Luxury Flat</option>
                    </select>
                    <label for="cf-message" class="sr-only">Your Message</label>
                    <textarea rows="4" id="cf-message" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn-primary full-width">Send Message</button>
                </form>
            </div>
        </div>
    </section>
<?php include 'layout/footer.php'; ?>