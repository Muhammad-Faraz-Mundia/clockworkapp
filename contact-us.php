<?php
// index.php: The main content page, where header and footer are included
include('header.php');
?>

    <!-- Hero Section -->
    <section class="hero-inner-banner contact">
        <div class="container"> 
            <div class="hero-inner-content">
                <div class="hero-text fade-in">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section fade-in">
        <div class="container">
            <div class="contact-form">
                <h3 class="section-title">Contact</h3>
                <p class="section-subtitle">Please call us on <strong ><a style="color:#ff6600;" href="tel:01223 625695">01223 625695</a></strong> or fill in the form below and we will get back to you within 24 hours (usually within 1 hour during working hours).</p>
                <form>
                    <label>Enquiry Type *</label>
                    <select name="enquiry_type" required>
                        <option value="">Select Enquiry Type</option>
                        <option value="website_support">Website Enquiry/Support Request</option>
                        <option value="property_management">Property Management</option>
                        <option value="inspection_maintenance">Inspection & Maintenance</option>
                        <option value="financial_accounts">Financial Accounts</option>
                        <option value="property_leads">Property Leads</option>
                    </select>


                    <label>Name *</label>
                    <input type="text" required>

                    <label>Company *</label>
                    <input type="text" required>

                    <label>Email *</label>
                    <input type="email" required>

                    <label>Tel No *</label>
                    <input type="tel" placeholder="e.g. 0123 456 7890" required>

                    <label>Message</label>
                    <textarea rows="5"></textarea>

                    <div style="margin-bottom:5px" class="g-recaptcha" data-sitekey="6Ld0-norAAAAACT_UV6MazcAzpss-2jop9_3hkTz"></div>

                    <button type="submit" class="btnmain">SUBMIT</button>
                </form>
            </div>

            <div class="contact-details">
                <h3>Telephone</h3>
                <p><em>Mon – Fri: 9:00am – 5:30pm</em><br>01223 625695</p>
                <h3>Email Us</h3>
                <p><a href="mailto:phil@clockworkapplications.co.uk">phil@clockworkapplications.co.uk</a></p>
                <h3>Office</h3>
                <p>The House<br>29–31 Monson Road<br>Trent Bridge<br>London<br>Uk</p>

                <div class="map-container">
                    <h3>Find Us</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79449.97448616878!2d-0.205291687154648!3d51.516670447861934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760349331f38dd%3A0xa8bf49dde1d56467!2sTower%20of%20London!5e0!3m2!1sen!2s!4v1751898336145!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </div>
    </section>





<?php
// Include the footer section
include('footer.php');
?>