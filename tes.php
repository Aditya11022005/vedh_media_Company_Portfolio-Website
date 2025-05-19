<?php
// Your testimonials data (same as before)
$testimonials_data = [
    [
        'image' => 'https://via.placeholder.com/90/CCCCCC/FFFFFF?text=User1',
        'name' => 'Saul Goodman',
        'title' => 'Ceo & Founder',
        'stars' => 5,
        'quote' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
    ],
    [
        'image' => 'https://via.placeholder.com/90/007BFF/FFFFFF?text=User2',
        'name' => 'Sara Wilsson',
        'title' => 'Designer',
        'stars' => 5,
        'quote' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'
    ],
    [
        'image' => 'https://via.placeholder.com/90/28A745/FFFFFF?text=User3',
        'name' => 'Jena Karlis',
        'title' => 'Store Owner',
        'stars' => 4,
        'quote' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.'
    ],
    [
        'image' => 'https://via.placeholder.com/90/FFC107/000000?text=User4',
        'name' => 'Matt Brandon',
        'title' => 'Freelancer',
        'stars' => 5,
        'quote' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Testimonials Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
       


        .testimonials {
            padding: 60px 0;
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1200px; /* Max width for the section */
            margin: 0 auto; /* Center the section */
        }

        .testimonials .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #807347
            margin-bottom: 40px;
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            margin: 10px auto 0;
        }


        /* --- Testimonial Item CSS --- */
        .testimonials .testimonial-item {
            background-color: var(--surface-color);
            box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.08); /* Softer shadow */
            padding: 35px; /* Slightly more padding */
            border-radius: 8px; /* Rounded corners */
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            text-align: center; /* Center align content */
        }

        .testimonials .testimonial-item .testimonial-img-wrap {
            margin-bottom: 15px;
            position: relative; /* For potential badge or effects */
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 100px; /* Larger image */
            height: 100px;
            object-fit: cover;
            border-radius: 50%; /* Perfect circle */
            border: 5px solid var(--background-color); /* Border matches page background */
            margin: 0 auto 10px auto; /* Center image */
            display: block;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Shadow for image */
        }

        .testimonials .testimonial-item h3 {
            font-size: 20px;
            font-weight: 600; /* Slightly less bold */
            margin: 0 0 5px 0;
            color: var(--default-color);
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color: var(--text-muted-color);
            margin: 0 0 15px 0;
            font-weight: 400;
        }

        .testimonials .testimonial-item .stars {
            margin: 0 auto 15px auto; /* Center stars */
        }

        .testimonials .testimonial-item .stars i {
            color: #ffc107;
            margin: 0 2px; /* Slightly more space */
            font-size: 16px; /* Slightly larger stars */
        }

        .testimonials .testimonial-item .quote-icon-left,
        .testimonials .testimonial-item .quote-icon-right {
            color: color-mix(in srgb, var(--accent-color), transparent 70%); /* More transparent */
            font-size: 30px; /* Larger quote icons */
            line-height: 1;
        }

        .testimonials .testimonial-item .quote-icon-left {
            margin-right: 8px;
        }

        .testimonials .testimonial-item .quote-icon-right {
            margin-left: 8px;
            transform: scaleX(-1); /* Simpler way to flip for right quote */
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            color: var(--default-color);
            line-height: 1.7; /* Improved readability */
            margin: 0; /* Let quote icons handle spacing */
            padding: 0;
            flex-grow: 1;
            font-size: 16px; /* Slightly larger text */
            opacity: 0.9;
        }

        .testimonial-content {
            display: flex;
            align-items: center; /* Vertically align quote icons with text */
            justify-content: center; /* Center the quote block */
        }


        /* --- Swiper Customizations --- */
        .swiper { /* Swiper 8+ uses .swiper by default */
            width: 100%;
            padding-top: 20px;
            padding-bottom: 60px; /* More space for pagination */
        }

        .swiper-slide {
            height: auto; /* Let content define height */
            /* Add a subtle transition for the slide itself if needed */
             transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .swiper-slide .testimonial-item {
             height: 100%;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: var(--accent-color);
            opacity: 0.4;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 25px; /* Elongate active bullet */
            border-radius: 5px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--accent-color);
            width: 44px;
            height: 44px;
            background-color: rgba(255,255,255,0.8);
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: var(--accent-color);
            color: white;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px !important;
            font-weight: bold;
        }

        /* --- Animation for content within the active slide --- */
        .testimonial-item > * {
            opacity: 0;
            transform: translateY(30px) scale(0.95); /* Start slightly scaled down */
            transition: opacity 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .testimonial-item p, .testimonial-item .testimonial-content { /* Target the wrapper for p */
            opacity: 0;
            transform: translateY(30px) scale(0.95);
            transition: opacity 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }


        .swiper-slide-active .testimonial-item > *,
        .swiper-slide-active .testimonial-item p, /* Target p directly */
        .swiper-slide-active .testimonial-item .testimonial-content { /* Target the wrapper for p */
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Stagger animation for elements inside the testimonial item */
        .swiper-slide-active .testimonial-item .testimonial-img-wrap { transition-delay: 0.1s; }
        .swiper-slide-active .testimonial-item h3 { transition-delay: 0.2s; }
        .swiper-slide-active .testimonial-item h4 { transition-delay: 0.3s; }
        .swiper-slide-active .testimonial-item .stars { transition-delay: 0.4s; }
        .swiper-slide-active .testimonial-item .testimonial-content { transition-delay: 0.5s; } /* Animate the quote block */

    </style>
</head>
<body>

<section class="testimonials">
    <div class="container">
        <h2 class="section-title">Kind Words From Our Clients</h2>

        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials_data as $testimonial): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-img-wrap">
                                <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" class="testimonial-img" alt="<?php echo htmlspecialchars($testimonial['name']); ?>">
                            </div>
                            <h3><?php echo htmlspecialchars($testimonial['name']); ?></h3>
                            <h4><?php echo htmlspecialchars($testimonial['title']); ?></h4>
                            <div class="stars">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <?php if ($i < $testimonial['stars']): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php else: ?>
                                        <i class="bi bi-star"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                            <div class="testimonial-content"> <!-- Wrapper for quote icons and paragraph -->
                                <i class="bi bi-quote quote-icon-left"></i>
                                <p><?php echo htmlspecialchars($testimonial['quote']); ?></p>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const testimonialsSlider = new Swiper('.testimonials-slider', {
      speed: 800, // Slower, smoother transition
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      grabCursor: true, // Shows a grab cursor on hover
      effect: 'fade', // Use the fade effect
      fadeEffect: {
        crossFade: true // Allows content to overlap slightly during fade
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // No breakpoints for slidesPerView with fade effect, it's typically one at a time.
      // If you want multiple items with fade, it's more complex.
      // Consider breakpoints for OTHER effects if you use them.
      on: {
        init: function () {
          // Manually trigger animation for the first slide
          // This might be needed if animations don't fire on load for the very first active slide
          const activeSlide = this.slides[this.activeIndex];
          if (activeSlide) {
            const item = activeSlide.querySelector('.testimonial-item');
            if (item) {
              Array.from(item.children).forEach(child => {
                child.style.opacity = '1';
                child.style.transform = 'translateY(0) scale(1)';
              });
              // Also animate the p tag if it's not a direct child
              const pTag = item.querySelector('p');
              if (pTag) {
                pTag.style.opacity = '1';
                pTag.style.transform = 'translateY(0) scale(1)';
              }
              const contentBlock = item.querySelector('.testimonial-content');
              if (contentBlock) {
                 contentBlock.style.opacity = '1';
                 contentBlock.style.transform = 'translateY(0) scale(1)';
              }
            }
          }
        },
        slideChangeTransitionStart: function() {
          // Reset animations on all slides before transition
          this.slides.forEach(slide => {
            const item = slide.querySelector('.testimonial-item');
            if (item) {
              Array.from(item.children).forEach(child => {
                child.style.opacity = '0';
                child.style.transform = 'translateY(30px) scale(0.95)';
              });
              // Also animate the p tag if it's not a direct child
              const pTag = item.querySelector('p');
              if (pTag) {
                pTag.style.opacity = '0';
                pTag.style.transform = 'translateY(30px) scale(0.95)';
              }
              const contentBlock = item.querySelector('.testimonial-content');
              if (contentBlock) {
                 contentBlock.style.opacity = '0';
                 contentBlock.style.transform = 'translateY(30px) scale(0.95)';
              }
            }
          });
        },
        slideChangeTransitionEnd: function() {
          // Animate in the new active slide's content
          // This is largely handled by CSS :.swiper-slide-active now, but explicit control can be useful
        }
      }
    });
  });
</script>

</body>
</html>