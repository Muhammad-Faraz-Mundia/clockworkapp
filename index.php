<?php
// index.php: The main content page, where header and footer are included
include('header.php');
?>

    <!-- Hero Section -->
    <section class="hero-banner">
        <div class="hero-content">
            <div class="hero-text fade-in">
                <h2>Introducing a new Property Management platform</h2>
                <p>
                    The Clockwork Applications suite of software has been created in conjunction with property management companies, from the ground up, providing a complete online solution to modern property management With an easy to use cloud-based interface, you can manage your property portfolio anywhere, any time
                </p>
                <img src="assets/goog.png" alt="Google 5-star Reviews" class="reviews">
            </div>
            <div class="hero-image">
                <!-- <img src="assets/hero-tablet.png" alt="Tablet showing features"> -->
            </div>
        </div>
    </section>




   <!-- Dashboard Section -->
    <section id="dashboard" class="features fade-in">
        <div class="container">
            <h3 class="section-title">Dashboard</h3>
            <p class="section-subtitle">
                <strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry.
            </p>
            <div class="feature-cards">
                <div class="feature-card">
                    <h4>
                        <i class="fa-solid fa-gears"></i>
                    </h4>
                         <h2> Heading 1 </h2>
                    <p>The dashboard is the beating heart for controlling your business</p>
                </div>
                <div class="feature-card">
                    <h4>
                        <i class="fa-solid fa-sliders"></i>
                    </h4>
                    <h2> Heading 2 </h2>
                    <p>It provides at a glance a management overview of all of your current portfolio.</p>
                </div>
                <div class="feature-card">
                    <h4>
                        <i class="fa-regular fa-images"></i>
                    </h4>
                         <h2> Heading 3</h2>
                    <p>These include: rents due, upcoming inspections, landlord payments. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enquire Section -->
    <section id="enquire" class="enquire fade-in">
        <div class="container">
            <h3 class="section-title">Enquiries</h3>
            <p class="section-subtitle">Applicants' details are seamlessly imported from Rightmove and Zoopla enquiries (where applicable)</p>
            
            <div class="enquire_card">
                <p class="section-subtitle"> <i class="fa-regular fa-circle-check"></i> Search for properties based upon applicants' requirements</p>
                <p class="section-subtitle"> <i class="fa-regular fa-circle-check"></i> Properties can be automatically searched for and assigned to applicants</p>
                <p class="section-subtitle"> <i class="fa-regular fa-circle-check"></i> All applicants are then progressed through to tenancy</p>
            </div>
            
            <a href="#learn-more" class="cta-button btnmain">Contact Us</a>
            
            <img src="assets/enquire-main.jpg" class="enquire-main-img" alt="enquire-main"/>
        </div>
    </section>

 
    <!-- Tenants Section -->
    <section id="tenants" class="tenants-reporting fade-in">
        <div class="container tenants-container ">
            <div class="tenants-image">
                <img src="assets/tenants-main.jpg" class="tenant-main-image" alt="tenant-main-image">
            </div>
            <div class="tenants-content">
                <h3 class="section-title">Tenants</h3>
                <p class="section-subtitle">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <a href="#learn-more" class="tenants-btn">Learn More</a>
            </div>
        </div>
    </section>


    <!-- Landlord Section -->
    <section id="landlords" class="landlords-section fade-in">
        <div class="container">
            <div class="landlords-grid">
            
            <!-- Left Side: Text + Icons -->
            <div class="landlords-text">
                <h3 class="section-title">Landlords</h3>
                <p class="section-subtitle">
                    A powerful suite of tools designed to support landlords in managing properties, tenants, and finances with ease and efficiency.
                </p>

                <div class="landlords-features">
                    <div class="feature-item">
                    <i class="fas fa-id-card"></i>
                    <span>Landlord details at your fingertips</span>
                    </div>
                    <div class="feature-item">
                    <i class="fas fa-comments"></i>
                    <span>Communication is made simple with integrated email and SMS facilities</span>
                    </div>
                    <div class="feature-item">
                    <i class="fas fa-file-alt"></i>
                    <span>All documents are available for landlords to view and download on a dedicated landlord portal</span>
                    </div>
                    <div class="feature-item">
                    <i class="fas fa-sync-alt"></i>
                    <span>Maintenance updates are always real-time</span>
                    </div>
                </div>

                <a href="#" class="btnmain">LEARN MORE</a>
            </div>


            <!-- Right Side: Image -->
            <div class="landlords-image">
                <img src="assets/landlord-main.jpg" alt="Landlord" />
            </div>

            </div>
        </div>
    </section>


    <section class="property-management fade-in">
        <div class="container">
            <h3 class="section-title">Property Management</h3>
             <p class="section-subtitle">
            </p>
            <div class="checklist-grid three-columns">

                <!-- Column 1: Property Management -->
                <div class="column1 column" id="properties">
                    <h3 class="section-title">Property Management</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-calendar-check"></i> Easily keep track of key milestone dates and events such as boiler servicing, EPC renewals and marketing status</li>
                        <li><i class="fas fa-calendar-alt"></i> The easy to use calendar highlights all anniversary dates, for example services due and certifications</li>
                        <li><i class="fas fa-map-marker-alt"></i> Each property has a location pin which enables multiple property visits to be efficiently scheduled — saving time and money</li>
                    </ul>
                </div>

                <!-- Column 2: Portal Feeds -->
                <div class="column1 column" id="portal-feeds">
                    <h3 class="section-title">Portal Feeds</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-share-square"></i> Portal feeds are included within your account subscription. This includes sending to your own website if required</li>
                        <li><i class="fas fa-external-link-alt"></i> No charge for sending to external property portals (e.g. Rightmove or Zoopla, account required)</li>
                    </ul>
                </div>

                <!-- Column 3: Property Leads -->
                <div class="column1 column" id="property-leads">
                    <h3 class="section-title">Property Leads</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-envelope-open-text"></i> Email leads from your Rightmove or Zoopla accounts are automatically imported into the system</li>
                        <li><i class="fas fa-user-plus"></i> New applicant accounts are automatically created</li>
                        <li><i class="fas fa-history"></i> All emails are recorded for each applicant to build up a full communication history</li>
                    </ul>
                </div>

                <!-- Column 4: Financial Accounts -->
                <div class="column column4" id="financial-accounts">
                    <h3 class="section-title">Financial Accounts</h3>
                    <ul class="checklist">
                    <li><i class="fas fa-university"></i> Straightforward reconciliation of all client money accounts</li>
                    <li><i class="fas fa-receipt"></i> Rent invoices are automatically loaded onto tenant and landlord portals</li>
                    <li><i class="fas fa-file-invoice-dollar"></i> Year end accounts are generated for landlords and all agency generated income</li>
                    </ul>
                </div>

                <!-- Column 5: Key Management -->
                <div class="column column5" id="key-management">
                    <h3 class="section-title">Key Management</h3>
                    <ul class="checklist">
                    <li><i class="fas fa-key"></i> Use our easy book in and out system to keep track of keys</li>
                    <li><i class="fas fa-id-badge"></i> Electronic key fobs can be provided (at a small extra cost) to utilise the quick key scan facility</li>
                    <li><i class="fas fa-history"></i> All key history is logged</li>
                    </ul>
                </div>

                <!-- Column 6: Inspections & Maintenance -->
                <div class="column column6" id="inspections-maintenance">
                    <h3 class="section-title">Inspections & Maintenance</h3>
                    <ul class="checklist">
                    <li><i class="fas fa-clipboard-check"></i> Regular property inspections are scheduled with an area location pin to ensure operator time efficiency</li>
                    <li><i class="fas fa-file-alt"></i> Reports are generated on-site with options to automatically email tenant and landlord</li>
                    <li><i class="fas fa-camera"></i> All inspections have the ability to immediately attach photos and schedule maintenance</li>
                    <li><i class="fas fa-tools"></i> Tenants can also report maintenance issues via the tenant login portal</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>



    


    <!-- Deposit Section -->

    <section id="deposits" class="deposits-section fade-in">
        <div class="container">
            <div class="deposits-grid">
            <!-- Left image side -->
            <div class="deposits-image">
                <img src="assets/deposit-main.jpg" alt="deposit main" />
            </div>

            <!-- Right content side -->
            <div class="deposits-text">
                <h3 class="section-title">Deposits</h3>
                <p class="section-subtitle">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <ul class="deposits-list">
                <li>
                    <span class="check-icon">✔</span>
                    Downloadable data for regular checks for client money protection
                </li>
                <li>
                    <span class="check-icon">✔</span>
                    Full audit trail showing agency retained deposits used for repairs and supplier invoices
                </li>
                </ul>
                <a href="#" class="btnmain">CONTACT US</a>
            </div>
            </div>
        </div>
    </section>

    <!-- Google Review Section -->

    <section id="google-review" class="google-review fade-in"> 
        <div class="container heading-container"> 
            <div class="section-title">Don't just take our word for it...</div>
        </div>

        <div class="container swiper-container">
                  <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text section-subtitle">
                    Having worked in the Lettings Industry for over 40 years and owning my business for 17, I can honestly say this software is unlike anything else. It’s fast, intuitive, and extremely efficient.
                    </p>
                    <div class="author">
                    <strong>Susan S.</strong>
                    <span>Oct 3, 2024</span>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text section-subtitle">
                    The transformation in productivity is incredible. Document prep that took over an hour is now done in minutes. Massive thanks to the support team!
                    </p>
                    <div class="author">
                    <strong>James L.</strong>
                    <span>Sep 12, 2024</span>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text section-subtitle">
                    Amazing user experience and unmatched support. We’re so happy we switched — our whole team is saving time daily!
                    </p>
                    <div class="author">
                    <strong>Emma W.</strong>
                    <span>Aug 20, 2024</span>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text section-subtitle">
                    A must-have tool for any agency. The system is logical and easy to use, and the results speak for themselves.
                    </p>
                    <div class="author">
                    <strong>Mark T.</strong>
                    <span>Jul 10, 2024</span>
                    </div>
                </div>
                </div>

               <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>




<?php
// Include the footer section
include('footer.php');
?>
