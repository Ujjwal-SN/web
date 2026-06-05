<?php include 'layout/header.php'; ?>
  <?php include 'layout/navbar.php'; ?>
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
                    <div class="gallery-item"><img src="images/img-001.webp" alt="Property showcase 1"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-002.webp" alt="Property showcase 2"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-003.webp" alt="Property showcase 3"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-004.webp" alt="Property showcase 4"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-005.webp" alt="Property showcase 5"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-006.webp" alt="Property showcase 6"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-007.webp" alt="Property showcase 7"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-008.webp" alt="Property showcase 8"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-009.webp" alt="Property showcase 9"  width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-10.webp"  alt="Property showcase 10" width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-1001.webp" alt="Property showcase 11" width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                    <div class="gallery-item"><img src="images/img-1002.webp" alt="Property showcase 12" width="400" height="260" loading="lazy"><div class="gallery-overlay"></div></div>
                </div>
            </div>
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
   <?php include 'layout/footer.php'; ?>
