<?php include 'layout/header.php'; ?>
  <?php include 'layout/navbar.php'; ?>
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