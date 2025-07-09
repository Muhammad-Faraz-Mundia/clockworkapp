<?php
// index.php: The main content page, where header and footer are included
include('header.php');
?>

    <!-- Hero Section -->
    <section class="hero-inner-banner pricing">
        <div class="container"> 
            <div class="hero-inner-content">
                <div class="hero-text fade-in">
                    <h2>Pricing</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section fade-in">
        <div class="container">
            <h2 class="section-title">How much does it cost?</h2>
            <div class="pricing-cards">

                <!-- Bronze Plan -->
                <div class="pricing-card">
                <h3>Bronze</h3>
                <div class="price">£69<span>/month</span></div>
                <ul class="features">
                    <li class="off">Enquiries</li>
                    <li class="off">Deposits</li>
                    <li class="off">Landlords</li>
                    <li class="off">Property Management</li>
                    <li class="off">Accounts</li>
                    <li class="off">Keys</li>
                    <li class="off">Inspections</li>
                    <li class="off">Maintenance</li>
                    <li class="off">Portal Feeds*</li>
                    <li class="on">Portal Leads*</li>
                    <li class="on">Setup Cost: <strong> £0 </strong> </li>
                </ul>
                <button class="btnmain">Contact Us</button>
                </div>

                <!-- Silver Plan -->
                <div class="pricing-card active">
                <h3>Silver</h3>
                <div class="price">£199<span>/month</span></div>
                <ul class="features">
                    <li class="on">Enquiries</li>
                    <li class="on">Deposits</li>
                    <li class="on">Landlords</li>
                    <li class="on">Property Management</li>
                    <li class="on">Accounts</li>
                    <li class="on">Keys</li>
                    <li class="on">Inspections</li>
                    <li class="on">Maintenance</li>
                    <li class="off">Portal Feeds*</li>
                    <li class="on">Portal Leads*</li>
                    <li class="on">Setup Cost: <strong> £450 </strong></li>
                </ul>
                <button class="btnmain">Contact Us</button>
                </div>

                <!-- Gold Plan -->
                <div class="pricing-card">
                <h3>Gold</h3>
                <div class="price">£249<span>/month</span></div>
                <ul class="features">
                    <li class="on">Enquiries</li>
                    <li class="on">Deposits</li>
                    <li class="on">Landlords</li>
                    <li class="on">Property Management</li>
                    <li class="on">Accounts</li>
                    <li class="on">Keys</li>
                    <li class="on">Inspections</li>
                    <li class="on">Maintenance</li>
                    <li class="on">Portal Feeds*</li>
                    <li class="on">Portal Leads*</li>
                    <li class="on">Setup Cost: <strong> £450 </strong></li>
                </ul>
                <button class="btnmain">Contact Us</button>
                </div>

            </div>
            <p class="disclaimer section-subtitle">*Please note: 3rd party portal subscriptions are your responsibility and are not included.</p>


        </div>
    </section>


    <section class="faq-section fade-in">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-grid">

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>What is Clockwork Applications?</h4>
                    <p>The Clockwork Applications suite has been created alongside property management companies to solve real operational problems with practical software tools.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>Is your software tailored for letting agents?</h4>
                    <p>Yes, we specialize in features that streamline lettings, inspections, maintenance tracking, landlord reports, and more — all developed with real-world agency input.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>Do I need to install anything?</h4>
                    <p>No. Clockwork Applications is entirely cloud-based — all you need is a browser. It works from desktop, tablet, or mobile with no local installation needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>Is training or support included?</h4>
                    <p>Yes, we offer full onboarding support and training sessions. Our support team is UK-based and available to help with any questions during and after setup.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>Can I import my data from another system?</h4>
                    <p>Yes. We offer a full data migration service and can help you transition seamlessly from your previous provider.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-icon">?</div>
                    <div>
                    <h4>Are there contracts or setup fees?</h4>
                    <p>We operate monthly rolling contracts. Bronze has no setup fee, while Silver and Gold tiers include a one-off setup cost as listed in our pricing table.</p>
                    </div>
                </div>

            </div>
        </div>
        </section>







<?php
// Include the footer section
include('footer.php');
?>