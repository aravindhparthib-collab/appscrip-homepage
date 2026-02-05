<?php
/**
 * Front Page Template
 */

get_header();
?>
<main>
  <section class="hero">
    <div class="container">
      <h1 class="hero-title">
        Smarter Products.<span class="hero-code" aria-hidden="true">&lt;/&gt;</span>
        <span class="hero-line">
          <span class="hero-box">Faster</span> Launches. <span class="hero-ai">AI
            <span class="hero-ai-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" aria-hidden="true">
                <path d="M32 8l5.8 13.6L52 27.4l-13.6 5.8L32 47l-5.8-13.8L12 27.4l14.2-5.8L32 8z" />
                <path d="M51 42l2.4 5.8L59 50l-5.6 2.3L51 58l-2.3-5.7L43 50l5.7-2.2L51 42z" />
              </svg>
            </span>
          </span> at the Core.
        </span>
      </h1>
      <p class="sub">Don’t just build an app. Build an advantage with ready-made solutions and custom AI agents.</p>

      <div class="ctas">
        <a class="btn btn-primary" href="#">✨ Get Started</a>
        <a class="btn btn-secondary" href="#">Learn More</a>
      </div>

      <div class="partners hero-badges" aria-hidden="true">
        <img class="hero-badge" src="<?php echo get_template_directory_uri(); ?>/assets/images/Goodfirms.webp" alt="GoodFirms" width="150" height="150" loading="lazy" />
        <img class="hero-badge" src="<?php echo get_template_directory_uri(); ?>/assets/images/Clutch.jpg" alt="Clutch" width="150" height="150" loading="lazy" />
        <img class="hero-badge" src="<?php echo get_template_directory_uri(); ?>/assets/images/Smart-reviews.webp" alt="Smart Reviews" width="150" height="150" loading="lazy" />
      </div>
    </div>
  </section>

  <!-- Partner logos strip (small icons) -->
<section class="partner-logos">
    <div class="wrap">
        <p class="partner-logos-title">Partnered with 100+ businesses</p>
        <div class="logos">
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Jio.webp" alt="Jio" width="200" height="200" loading="lazy" />
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Glance.webp" alt="Glance" width="200" height="200" loading="lazy" />
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Hugo.webp" alt="Hugo" width="200" height="200" loading="lazy" />
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Yummy.webp" alt="Yummy" width="200" height="200" loading="lazy" />
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/siemens.webp" alt="Siemens" width="200" height="200" loading="lazy" />
            <img class="partner-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Rapido.webp" alt="Rapido" width="200" height="200" loading="lazy" />
        </div>
    </div>
</section>

  <!-- Industries / Products section -->
  <section class="industries">
    <div class="wrap">
      <h2 class="section-title">We have pre-built products for the following industries</h2>
      <p class="section-sub">All our pre-built products come with full source code access for our customers and can be customized to help launch your products 75% faster than a usual custom development effort.</p>

      <div class="industry-grid">
        <article class="industry-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/IOT-BANner-e1719827660907.webp" alt="Gen-AI"/></div>
          <h3 class="card-title">Gen-AI</h3>
          <p class="card-description">Create your own custom GPT for your websites and apps, automating engagement, sales, and support through conversational AI. Enterprise grade agents with</p>
          <ul class="card-features">
            <li>Knowledge management module</li>
            <li>Accuracy management module</li>
            <li>Management &amp; reporting module</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="industry-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/super-app.webp" alt="Super App"/></div>
          <h3 class="card-title">Super App</h3>
          <p class="card-description">Roadyo, our all-in-one super app, stands as one of our premier Appscrip products, supporting multiple business models.</p>
          <ul class="card-features">
            <li>Hyperlocal delivery for food &amp; grocery</li>
            <li>Local services like handyman</li>
            <li>Healthcare services for doctor booking and medicine delivery</li>
            <li>Buy &amp; Sell-Re-ecommerce</li>
            <li>Ride share and delivery</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="industry-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/E-commerce.webp" alt="E-commerce"/></div>
          <h3 class="card-title">E‑commerce Marketplace</h3>
          <p class="card-description">Are you considering building an app like Amazon, Etsy, OfferUp, or Alibaba? We have made it super easy for you to launch your Ecommerce Platform is less time</p>
          <ul class="card-features">
            <li>Supports multi vendor subscriptions</li>
            <li>B2B &amp; Reommerce</li>
            <li>Social Commerce</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>
      </div>
    </div>
  </section>

  <!-- More Products section -->
  <section class="products">
    <div class="wrap">
      <div class="product-grid">
        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/taxi-booking.webp" alt="Taxi booking"/></div>
          <h3 class="card-title">Taxi booking</h3>
          <p class="card-description">Our ride-sharing platform lets you start an on-demand taxi booking app like Uber</p>
          <ul class="card-features">
            <li>It comes with support for City rides, Rentals Multi-stop trips, Fleet manager console and corporate trips.</li>
            <li>The product can be further enabled with additional services such as food delivery, grocery delivery, package delivery</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/social-media.webp" alt="Social media"/></div>
          <h3 class="card-title">Social media</h3>
          <p class="card-description">Create solutions like TikTok, BigoLive, Instagram, TikTok Shop with our social media stack for iOS &amp; Android. Our solutions are built to scale and have</p>
          <ul class="card-features">
            <li>Built-in subscription management</li>
            <li>Live stream</li>
            <li>Calling systems</li>
            <li>Chat systems</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/creator-economy.webp" alt="Creator economy"/></div>
          <h3 class="card-title">Creator economy</h3>
          <p class="card-description">Customize our pre-built media content subscription platform to build your own app like patreon, cameo or onlyfans. The creator marketplace supports</p>
          <ul class="card-features">
            <li>Premium chats &amp; 1-1 video calls</li>
            <li>Paid live streams</li>
            <li>Chat systems &amp; Creator subscriptions</li>
            <li>Custom requests or Shoutouts.</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Additional Products section -->
  <section class="products">
    <div class="wrap">
      <div class="product-grid">
        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Hyperlocal-delivery.webp" alt="Hyperlocal Marketplace"/></div>
          <h3 class="card-title">Hyperlocal Marketplace</h3>
          <p class="card-description">Solutions to power the 10-minute delivery economy that has become a rage in 2024.</p>
          <ul class="card-features">
            <li>Grocery delivery</li>
            <li>Food delivery</li>
            <li>Liquor delivery &amp; Meat delivery</li>
            <li>Medicine delivery &amp; Cannabis delivery</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Matchmaking.webp" alt="Online Dating"/></div>
          <h3 class="card-title">Online Dating</h3>
          <p class="card-description">Our people connector stack lets you create digital experiences to help improve how people discover each other and after discovery how they can communicate with each other.</p>
          <ul class="card-features">
            <li>AI based search engine &amp; chat</li>
            <li>Video / audio calls</li>
            <li>Social stream</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Chat-audio.webp" alt="Chat & Audio / Video Call"/></div>
          <h3 class="card-title">Chat &amp; Audio / Video Call</h3>
          <p class="card-description">We have a plug-and-play solution to enable chat and audio / video call experiences in your app.</p>
          <ul class="card-features">
            <li>1-1 video &amp; audio calls</li>
            <li>Group video &amp; audio calls</li>
            <li>Status update</li>
            <li>Public groups</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>
      </div>
    </div>
  </section>

  <!-- More Products section (Professional Service, Healthcare, Transportation) -->
  <section class="products">
    <div class="wrap">
      <div class="product-grid">
        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Professional.webp" alt="Professional Service Marketplace"/></div>
          <h3 class="card-title">Professional Service Marketplace</h3>
          <p class="card-description">Customize our media subscription platform, evolving it into a dynamic services marketplace with on-demand offerings, remote consultations, and tailored professional features.</p>
          <ul class="card-features">
            <li>Premium chats &amp; 1-1 video calls</li>
            <li>Live streams</li>
            <li>Chat systems &amp; Appointment Booking</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/healthcare-platforms.webp" alt="Healthcare Platforms"/></div>
          <h3 class="card-title">Healthcare Platforms</h3>
          <p class="card-description">A powerful SAAS stack built for the patient care space that help you jump-start the development of the next modern health care solution.</p>
          <ul class="card-features">
            <li>Patient care management</li>
            <li>Doctor appointment booking</li>
            <li>Medicine delivery</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>

        <article class="product-card">
          <div class="card-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Transportation.webp" alt="Transportation Management System"/></div>
          <h3 class="card-title">Transportation Management System &amp; Digital Freight Broker</h3>
          <p class="card-description">Our full-featured transportation stack that supports the following business models</p>
          <ul class="card-features">
            <li>Last Mile Delivery- To manage LTL and FTL loads</li>
            <li>Supports multi pickup and multi delivery</li>
            <li>Freight Broker With Load Board</li>
          </ul>
          <a href="#" class="card-cta">Find out more</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Product Demos section -->
  <section class="product-demos">
    <div class="wrap">
      <h2 class="demos-title">Our product demos</h2>
      <p class="demos-subtitle">Watch our demo videos to see our product in action and discover how our solutions can benefit your business.</p>

      <div class="demos-grid">
        <article class="demo-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/dating-app-1.webp" alt="Dating App Demo"/>
          <h3 class="demo-title">Dating App</h3>
        </article>

        <article class="demo-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/content-Creator-Marketplace.webp" alt="Creator Marketplace Demo"/>
          <h3 class="demo-title">Onlyfans like App</h3>
        </article>

        <article class="demo-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/TikTok-like-app.webp" alt="TikTok-like App Demo"/>
          <h3 class="demo-title">Tiktok like App</h3>
        </article>
      </div>

      <div class="demos-cta-wrapper">
        <a href="#" class="btn btn-primary">Watch more videos</a>
      </div>
    </div>
  </section>

  <!-- App Building Process section -->
  <section class="app-process">
    <div class="wrap">
      <h2 class="process-title">Your app building process in 8 steps</h2>

      <div class="process-grid">
        <article class="process-card">
          <div class="step-number">01</div>
          <h3 class="step-title">Choose your base</h3>
          <p class="step-description">Setup a workshop with our CEO or one of our product thinkers to help match your requirements to one of our many mobile & web templates.</p>
        </article>

        <article class="process-card">
          <div class="step-number">02</div>
          <h3 class="step-title">Customize</h3>
          <p class="step-description">Work with our app conjurers to add or remove features from one of our mobile or web template to come up with your own custom product</p>
        </article>

        <article class="process-card">
          <div class="step-number">03</div>
          <h3 class="step-title">Get estimates</h3>
          <p class="step-description">Our sales team comes up with an estimate for your custom needs along with a payment plan for the entire product.</p>
        </article>

        <article class="process-card">
          <div class="step-number">04</div>
          <h3 class="step-title">Get your payment plan</h3>
          <p class="step-description">We offer a flexible payment plan for the pre-existing templates to reduce your upfront cost and a milestone payment plan for your custom requirements if any.</p>
        </article>

        <article class="process-card">
          <div class="step-number">05</div>
          <h3 class="step-title">Product development</h3>
          <p class="step-description">We start customizing the app template that fits best and develop custom code on top of the current code base.</p>
        </article>

        <article class="process-card">
          <div class="step-number">06</div>
          <h3 class="step-title">Test your product</h3>
          <p class="step-description">We set up your template, facilitating testing, add custom features progressively, allowing you to test each as built.</p>
        </article>

        <article class="process-card">
          <div class="step-number">07</div>
          <h3 class="step-title">Release your app</h3>
          <p class="step-description">Once you have confirmed that all your features are tailored to your needs, we help you release your product to the internet or app stores.</p>
        </article>

        <article class="process-card">
          <div class="step-number">08</div>
          <h3 class="step-title">Maintain and grow</h3>
          <p class="step-description">After building and deploying, if issues arise or users report problems, we'll promptly assist. This is the utmost priority in custom builds.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Engineers Section -->
  <section class="engineers">
    <div class="wrap">
      <div class="engineers-header">
        
        <div class="engineers-text">
          <h2>Having trouble finding engineers with a proven record in business-ready product development?</h2>
          <p>If you need skilled engineers for your product development, consider hiring our team for your custom software development requirements.</p>
        </div>
      </div>

      <div class="engineers-content">
        <div class="engineers-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/details-1024x763.webp" alt="Engineers"/>
        </div>
        <!-- <div class="engineers-features">
          <div class="feature-item feature-flex">Flexible pricing and plans</div>
          <div class="feature-item feature-scalable">Scalable architecture</div>
          <div class="feature-item feature-boost">Boost sales and revenue</div>
          <div class="feature-item feature-proven">Proven track record</div>
          <div class="feature-item feature-custom">Customizable to your needs</div>
          <div class="feature-item feature-expert">Expert support and guidance</div>
          <div class="feature-item feature-prebuilt">Pre built solutions</div>
          <div class="feature-item feature-user">User-friendly platform</div>
          <div class="feature-item feature-trusted">Trusted by industry leaders</div>
        </div> -->

        <div class="engineers-cta">
          <h3>Helping organizations scale faster with top vetted developers.</h3>
          <p>Get in touch today!</p>
          <a href="#" class="btn btn-primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Custom Development Section -->
  <section class="custom-dev-cta">
    <div class="custom-dev-content">
      <div class="custom-dev-text">
        <h2>Having trouble managing your custom software development?</h2>
        <p>We at Appscrip can customize our pre-built business ready products to rapidly build out your product.</p>
        <a href="#" class="btn btn-white">Talk to an expert</a>
      </div>
      <div class="custom-dev-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Hire-a-developer-1024x698.webp" alt="Team Members"/>
      </div>
    </div>
  </section>

  
   <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="wrap">
      <h2 class="testimonials-title">Client testimonials</h2>
      <p class="testimonials-sub">See how companies like yours used Appscrip's app platform to help them achieve their business goals</p>

      <div class="testimonials-slider-wrap">
        <button class="testimonials-prev" aria-label="Previous">‹</button>
        <div class="testimonials-slider">
          <article class="testimonial-card">
            <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p class="testimonial-text">Overall, a pleasure experience. Pay a little first, and pay a little during the development of the app as milestones are achieved, which made me feel very confident and comfortable.</p>
            <p class="testimonial-author"><strong>Andrew</strong><span class="testimonial-role">Founder, HunnyBee</span></p>
          </article>

          <article class="testimonial-card">
            <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p class="testimonial-text">Working with Appscrip on a cargo shipping app has been great. Their responsive team and skilled developers made the process smooth and effective.</p>
            <p class="testimonial-author"><strong>Alexi</strong><span class="testimonial-role">Founder, Loadsonar</span></p>
          </article>

          <article class="testimonial-card">
            <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p class="testimonial-text">Appscrip's truck management app has streamlined my freight business with its ease of use and innovation. Their reliability and focus on industry trends set them apart.</p>
            <p class="testimonial-author"><strong>Mlog</strong><span class="testimonial-role">Founder, Marwan</span></p>
          </article>

          <article class="testimonial-card">
            <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p class="testimonial-text">Great support and delivery. The team handled our complex requirements and delivered on time with excellent communication.</p>
            <p class="testimonial-author"><strong>Sara</strong><span class="testimonial-role">CEO, QuickCart</span></p>
          </article>
        </div>
        <button class="testimonials-next" aria-label="Next">›</button>
      </div>
    </div>
  </section>
  <!-- Achievements Section -->
  <section class="achievements">
    <div class="achievements-inner">
      <h2 class="achievements-title">Our achievements</h2>
      <p class="achievements-sub">With the utmost priority of adding value to the projects we undertake, we ensure that our partners stay ahead of the clutter and achieve excellence.</p>

      <div class="achievements-grid">
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/appfirms.webp" alt="Achievement 1" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/clutch.webp" alt="Achievement 2" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/mobile-app.webp" alt="Achievement 3" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/Goodfirms.webp" alt="Achievement 4" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/deloitte-fast-50.webp" alt="Achievement 5" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/deloitte-fast-500.webp" alt="Achievement 5" loading="lazy" />
        </div>
        <div class="achievement-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/New folder/economic-times.webp" alt="Achievement 5" loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <!-- Client Logos Section -->
  <section class="client-logos">
    <div class="wrap">
      <h2 class="client-logos-title">Our pack of successful clients across the globe</h2>

      <div class="logo-grid">
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Jio.webp" alt="Jio" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Glance.webp" alt="Glance" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hugo.webp" alt="Hugo" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/siemens.webp" alt="Siemens" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rapido.webp" alt="Rapido" loading="lazy"/></div>

        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Yummy.webp" alt="Yummy" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Goodfirms.webp" alt="GoodFirms" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Clutch.jpg" alt="Clutch" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Jio.webp" alt="Jio 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Glance.webp" alt="Glance 2" loading="lazy"/></div>

        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hugo.webp" alt="Hugo 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Yummy.webp" alt="Yummy 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/siemens.webp" alt="Siemens 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rapido.webp" alt="Rapido 2" loading="lazy"/></div>

        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Goodfirms.webp" alt="GoodFirms 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Clutch.jpg" alt="Clutch 2" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Jio.webp" alt="Jio 3" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Glance.webp" alt="Glance 3" loading="lazy"/></div>
        <div class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hugo.webp" alt="Hugo 3" loading="lazy"/></div>
      </div>
    </div>
  </section>
  
  <!-- FAQ Section -->
  <section class="faqs">
    <div class="wrap">
      <h2 class="faqs-title">FAQs</h2>
      <div class="faqs-grid">
        <div class="faqs-left">
          <ul class="faq-list">
            <li class="faq-item">
              <button class="faq-q">Can I get a demo of the product? <span class="chev">▾</span></button>
              <div class="faq-a">Yes — we can schedule a demo tailored to your use-case and walk you through the product.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">Can I secure funding for a product developed using Appscrip's pre-built solution? <span class="chev">▾</span></button>
              <div class="faq-a">We provide documentation and case studies to help founders in funding conversations; we do not directly provide funding.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">Can I hire Appscrip to customize their products to build my unique product? <span class="chev">▾</span></button>
              <div class="faq-a">Yes — our teams customize templates and add integrations to meet your product requirements.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">Can I speak with previous clients of Appscrip to verify its legitimacy? <span class="chev">▾</span></button>
              <div class="faq-a">We can share references depending on NDA and client permissions.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">Can I hire Appscrip for the development of my custom software project? <span class="chev">▾</span></button>
              <div class="faq-a">Yes — we provide end-to-end development from product design to deployment and maintenance.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">Will I own the source code and the intellectual property rights (IP rights) if I work with Appscrip to build my software? <span class="chev">▾</span></button>
              <div class="faq-a">Ownership terms are agreed in the contract; typically customers receive source code and IP rights per agreement.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">What kinds of products does Appscrip specialize in building? <span class="chev">▾</span></button>
              <div class="faq-a">We specialize in marketplaces, super apps, social platforms, healthcare and logistics solutions.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">How can Appscrip help me launch faster? <span class="chev">▾</span></button>
              <div class="faq-a">Our pre-built templates and modular services let you skip common foundation work and ship features faster.</div>
            </li>
            <li class="faq-item">
              <button class="faq-q">What are the basic customizations that I will get? <span class="chev">▾</span></button>
              <div class="faq-a">Customizations include branding, workflows, payment providers, integrations, and platform-specific features.</div>
            </li>
          </ul>
        </div>
        <!-- <div class="faqs-right">
          <div class="faq-cta">
            <h3>Still have questions?</h3>
            <p>Contact our team for a one-to-one consultation and we'll guide you through the best approach for your product.</p>
            <a href="#" class="btn btn-primary">Contact Us</a>
          </div>
        </div> -->
      </div>
    </div>
  </section>
<!-- Consultation / Contact CTA (3-column) -->
  <section class="consultation">
    <div class="wrap">
      <div class="consult-grid">
        <div class="consult-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-2/Hire-a-developer-1024x698.webp" alt="Consultation" loading="lazy" />
        </div>

        <div class="consult-content">
          <h2>Your Idea, Our Expertise.</h2>
          <p>Setup a free 15 min consultation with Rahul, CEO at Appscrip to explore how Appscrip can help accelerate your go to market.</p>
          <a href="#consultForm" class="btn btn-primary">Schedule a free consultation</a>
        </div>

        <div class="consult-form">
          <form id="consultForm" class="contact-form" novalidate>
            <div class="form-row">
              <label for="cf-name">Name</label>
              <input id="cf-name" name="name" type="text" placeholder="Name" required />
            </div>
            <div class="form-row two-up">
              <div>
                <label for="cf-email">Email address</label>
                <input id="cf-email" name="email" type="email" placeholder="Enter email" required />
              </div>
              <div>
                <label for="cf-phone">Phone number</label>
                <input id="cf-phone" name="phone" type="tel" placeholder="Enter phone number" />
              </div>
            </div>
            <div class="form-row">
              <label for="cf-ideas">Your ideas / projects</label>
              <textarea id="cf-ideas" name="ideas" rows="5" placeholder="Write details of your ideas/project"></textarea>
            </div>
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-block">Send</button>
            </div>
            <div class="form-response" aria-live="polite" hidden></div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();

