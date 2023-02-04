<nav class="navbar navbar-expand-lg fixed-top bg-primary fw-semibold navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Twitter</a>
    <button id="navToggle" class="bg-primary d-lg-none border-0 outline-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon text-white"></span> -->
      <span id="hamburger">
        <i class="bi fs-2 bi-text-right text-white"></i>
      </span>
      <span id="close" class="d-none">

        <i class="bi fs-3 bi-x-lg text-white "></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link text-light" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Post <i class="bi bi-plus  fw-bold"></i></a>
        <!-- <a class="nav-link" href="#">Pricing</a> -->
        <button type="button" class="btn btn-dark fw-semibold"><i class=" bi bi-box-arrow-in-right me-2"></i>Login </button>
      </div>
    </div>
  </div>
</nav>
<script>
  const navToggle = document.getElementById('navToggle')
  const hamburger = document.getElementById('hamburger')
  const close = document.getElementById('close')

  navToggle.addEventListener('click', () => {
    hamburger.classList.toggle('d-none')
    close.classList.toggle('d-none')
  })
</script>