<!-- Start Hero Section -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <?php $i = 0;
    foreach ($banner as $key => $row): ?>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key; ?>" class="<?= ($key == 0) ? 'active' : ''; ?>"></button>
    <?php $i++;
    endforeach; ?>
  </div>

  <div class="carousel-inner">
    <?php $i = 0;
    foreach ($banner as $row): ?>
      <div class="carousel-item <?= ($i == 0) ? 'active' : ''; ?>">
        <img src="<?= base_url('uploads/banner/' . $row->image); ?>" alt="Slide <?= $i + 1; ?>" class="d-block" style="width:100%">
      </div>
    <?php $i++;
    endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- End Hero Section -->

<!-- Start We Help Section -->
<div class="we-help-section" id="about">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="imgs-grid h-100">
          <div class="grid grid-1">
            <img
              src="<?php echo base_url() ?>assets/web/images/peps-shop-photo.jpg"
              alt=""
              class="h-100"
              style="object-fit: cover;" />
          </div>

        </div>
      </div>
      <div class="col-lg-6 ps-lg-5">
        <h2 class="section-title mb-4">
          Peps Dream Makers: India’s Top Spring Mattress for Unmatched
          Comfort
        </h2>
        <p>
          Peps Dream Makers, India's top-selling spring mattress brand, is
          committed to delivering unparalleled comfort and support for your
          sleep. Based in Madurai, we combine cutting-edge technology with
          premium materials to create mattresses that not only ensure
          restful nights but also enhance your overall well-being. Our
          spring mattresses are designed to provide the perfect balance of
          firmness and comfort, catering to the diverse needs of our
          customers. Trusted across the nation, Peps Dream Makers is your
          go-to choice for quality sleep solutions.
        </p>

        <ul class="list-unstyled custom-list my-4">
          <li>Superior Spring Technology</li>
          <li>Long-lasting Durability</li>
          <li>Tailored Comfort Options</li>
          <li>Nationwide Trust</li>
        </ul>
        <p><a herf="#" class="btn">Explore</a></p>
      </div>
    </div>
  </div>
</div>
<!-- End We Help Section -->




<!-- Start Blog Section -->
<div class="blog-section position-relative" id="products">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <h2 class="section-title">Our Products</h2>
      </div>
      <div class="col-md-6 text-start text-md-end">
        <a href="<?php echo base_url() ?>assets/web/images/South Price List 2024.pdf" class="more" id="setCatalogue" download>Download Catalogue →</a>
      </div>
    </div>

    <!-- Testimonial navigation -->
    <div id="testimonial-nav">
      <span class="prev" data-controls="prev">
        <span class="fa fa-chevron-left"></span>
      </span>
      <span class="next" data-controls="next">
        <span class="fa fa-chevron-right"></span>
      </span>
    </div>

    <!-- Blog items (product entries) -->
    <div class="blog-item row">
      <!-- Blog post 1 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/vivah_mattress.jpg" alt="Vivah mattress" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Vivah mattress</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 2 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Spine_Gaurd_mattress.jpg" alt="Spine Gaurd mattress" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Spine Gaurd mattress</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 3 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Carousel_Et_mattress.jpg" alt="Carousel Et mattress" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Carousel Et mattress</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 4 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Zenimo.jpg" alt="Zenimo" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Zenimo</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 5 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Double_ducker.jpg" alt="Double ducker" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Double ducker</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 6 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Organica.jpg" alt="Organica" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Organica</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 7 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Crystal.jpg" alt="Crystal" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Crystal</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 8 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Crown_top.jpg" alt="Crown top" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Crown top</a></h3>
          </div>
        </div>
      </div>

      <!-- Blog post 9 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/Tartania.jpg" alt="Tartania" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Tartania</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Blog Section -->

<!-- Start Catalogue Section -->
<div class="catalogue-section position-relative" id="products">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <h2 class="section-title">Catalogue</h2>
      </div>
      <!-- <div class="col-md-6 text-start text-md-end">
        <a href="<?php echo base_url() ?>assets/web/images/South Price List 2024.pdf" class="more" id="setCatalogue" download>Download Catalogue →</a>
      </div> -->
    </div>

    <!-- Testimonial navigation -->
    <div id="testimonial-nav">
      <span class="prev" data-controls="prev">
        <span class="fa fa-chevron-left"></span>
      </span>
      <span class="next" data-controls="next">
        <span class="fa fa-chevron-right"></span>
      </span>
    </div>

    <!-- Catalogue items (product entries) -->
    <div class="catalogue-item row">
      <!-- Catalogue post 1 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/1.jpg" alt="DreamRest Luxury Mattress" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Spring Mattress</a></h3>
            <div class="text-start text-md-start">
              <a href="<?php echo base_url() ?>assets/web/images/spring_mattress.pdf" class="more" id="setCatalogue" download>Download Catalogue →</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Catalogue post 2 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/2.jpg" alt="ComfortPlus Orthopedic Pillow" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Foam Mattress</a></h3>
            <div class="text-start text-md-start">
              <a href="<?php echo base_url() ?>assets/web/images/foam_mattress.pdf" class="more" id="setCatalogue" download>Download Catalogue →</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Catalogue post 3 -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="post-entry">
          <a href="#" class="post-thumbnail">
            <img src="<?php echo base_url() ?>assets/web/images/3.jpg" alt="SleepEase Memory Foam Topper" class="img-fluid">
          </a>
          <div class="post-content-entry">
            <h3><a href="#">Coir Mattress</a></h3>
            <div class="text-start text-md-start">
              <a href="<?php echo base_url() ?>assets/web/images/Coir_mattress.pdf" class="more" id="setCatalogue" download>Download Catalogue →</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- End Catalogue Section -->


<div class="untree_co-section pt-0" id="contact">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-5 mx-auto text-center">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="block">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 pb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.4432292250389!2d78.15564056961834!3d9.952842420306188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5fcc342e2dd%3A0x84fd00b840b76bca!2sThe%20Peps%20Great%20Sleep%20Store%20-%20Madurai!5e0!3m2!1sen!2sin!4v1728549112406!5m2!1sen!2sin"
            width="100%"
            height="100%"
            style="border: 0;border-radius: 18px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 col-lg-6 pb-4">
          <div class="row mb-5">
            <div class="col-lg-12">
              <div
                class="service no-shadow align-items-center link horizontal d-flex active"
                data-aos="fade-left"
                data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                  </svg>
                </div>
                <!-- /.icon -->
                <div class="service-contents">
                  <p>The Peps Great Sleep Store - Madurai
                    120 Feet Rd, Swami Vivekananda Nagar, Kodikulam, Madurai, Tamil Nadu 625007</p>
                </div>
                <!-- /.service-contents-->
              </div>
              <!-- /.service -->
            </div>



            <div class="col-lg-12">
              <div
                class="service no-shadow align-items-center link horizontal d-flex active"
                data-aos="fade-left"
                data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-telephone-fill"
                    viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                  </svg>
                </div>
                <!-- /.icon -->
                <div class="service-contents">
                  <p>+91 9789505559</p>
                </div>
                <!-- /.service-contents-->
              </div>
              <!-- /.service -->
            </div>
          </div>

          <form id="contactForm">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">Full name</label>
                  <input type="text" name="name" class="form-control" id="fname" />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">Mobile Number</label>
                  <input type="number" name="mobile_number" class="form-control" id="lname" />
                  <span class="error text-danger" id="mobile_number_error"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" />
              <span class="error text-danger" id="email_error"></span>
            </div>

            <div class="form-group mb-5">
              <label class="text-black" for="message">Message</label>
              <textarea
                name="message"
                class="form-control"
                id="message"
                cols="30"
                rows="5"></textarea>
            </div>
            <div class="g-recaptcha mb-3" data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>
            <button type="submit" class="btn btn-primary-hover-outline">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    document.querySelectorAll('.error').forEach((span) => {
      span.innerText = '';
    });

    fetch('Web/contact_save', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: "Success",
            text: data.message,
            icon: "success",
            confirmButtonText: "Okay",
            allowOutsideClick: false
          }).then(() => {
            location.reload();
          });
        } else {
          if (data.errors) {
            if (data.errors.name) {
              document.getElementById('name_error').innerText = data.errors.name;
            }
            if (data.errors.email) {
              document.getElementById('email_error').innerText = data.errors.email;
            }
            if (data.errors.mobile_number) {
              document.getElementById('mobile_number_error').innerText = data.errors.mobile_number;
            }
          } else {
            Swal.fire({
              title: "Error",
              text: data.message,
              icon: "error",
              confirmButtonText: "Okay"
            });
          }
        }
      })
      .catch(error => {
        Swal.fire({
          title: "Error",
          text: "Something went wrong!",
          icon: "error",
          confirmButtonText: "Okay"
        });
      });
  });
</script>