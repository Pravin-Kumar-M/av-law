  <!-- TOP BAR -->
  <div class="top-bar">
      <div class="container d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3 flex-wrap">
              <span><i class="fa-solid fa-phone"></i><a href="tel:+91 9487950790">+91 9487950790</a></span>
              <span class="d-none d-sm-inline">
                  <i class="fa-solid fa-envelope"></i>
                  <a href="mailto:contact@avlawassociates.com">contact@avlawassociates.com</a>
              </span>
              <span class="d-none d-md-inline"><i class="fa-solid fa-map-marker-alt"></i><span
                      style="color: #ccc;">Puliyur 1st Ln, Trustpuram, Chennai – 600
                      024</span> </span>
          </div>
          <div class="top-social">
              <a href="#"><i class="fab fa-facebook-f" title="facebook"></i></a>
              <a href="https://www.youtube.com/@avnellaimedia" target="_blank"><i class=" fab fa-youtube" title="youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in" title="linkedin"></i></a>
              <a href="#"><i class="fab fa-instagram" title="instagram"></i></a>
              <a href="https://wa.me/919487950790?text=Hello%20I%20need%20legal%20assistance" target="_blank">
                  <i class="fab fa-whatsapp" title="whatsapp"></i>
              </a>
          </div>
      </div>
  </div>

  <!-- HEADER -->
  <header class="main-header">
      <div class="container">
          <div class="d-flex align-items-center justify-content-between gap-2">
              <a href="/" class="flex-shrink-0"><img src="./images/av_law_logos.png" alt="AV Law Associates"
                      class="main-logo"></a>
              <div class="text-center flex-grow-1">
                  <a href="/" class="text-decoration-none">
                      <div class="brand-main">AV Law Associates</div>
                      <div class="brand-sub">Justice &amp; Integrity &amp; Results</div>
                  </a>
              </div>
              <a href="#home" class="btn-consult-header flex-shrink-0"><i class="fas fa-phone-alt me-1"></i> Legal
                  Consultation</a>
          </div>
      </div>
  </header>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg main-nav">
      <div class="container justify-content-center">
          <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse"
              data-bs-target="#navMenu" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navMenu">
              <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About Us</a></li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Practice Areas</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item {{ request()->routeIs('criminal_civil') ? 'active' : '' }}"
                                  href="{{ route('criminal_civil') }}">Criminal &amp; Civil Law</a></li>
                          <li><a class="dropdown-item {{ request()->routeIs('family_child') ? 'active' : '' }}"
                                  href="{{ route('family_child') }}">Family, Child &amp; Divorce</a></li>
                          <li><a class="dropdown-item {{ request()->routeIs('commercial') ? 'active' : '' }}"
                                  href="{{ route('commercial') }}">Commercial, RERA &amp; More</a></li>
                          <li><a class="dropdown-item {{ request()->routeIs('finance') ? 'active' : '' }}"
                                  href="{{ route('finance') }}">Finance, Consumer &amp; Property</a></li>
                          <li><a class="dropdown-item {{ request()->routeIs('corporate') ? 'active' : '' }}"
                                  href="{{ route('corporate') }}">Corporate, EOW &amp; Cheque Bounce</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#judgements">Judgements</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#team">Our Lawyers</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#faq">FAQs</a></li>
              </ul>
          </div>

      </div>
  </nav>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>