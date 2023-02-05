<?= $this->extend('template/index') ?>
<?= $this->section('main') ?>
<div class="pt-5 mt-5">
  <div class="container">
    <div class="row  ">
      <div class="col-lg-4 mx-auto">
        <div class="card rounded-4 shadow-sm border-0 mb-3">
          <div class="card-body d-flex">
            <img src="/img/pp.jpg" class="rounded-circle me-3 object-fit-cover" alt="..." width="50px" height="50px">
            <div>
              <h5 class="card-title font-weight-bold mb-2">New spicy meals</h5>
              <p class="card-text text-muted " style="font-size: 0.9rem;">07/24/2018</p>
            </div>
            <!-- <form action="#" method="post" class="ms-auto"> -->
            <div id="toggle" as="button" class="ms-auto" style="cursor: pointer;">
              <div class="dropstart ">
                <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu bg-primary mt-4 border-0 shadow-sm">
                  <li><a class="mx-3 text-light" href="#"><i class="bi bi-trash3-fill me-2"></i>Delete</a></li>

                </ul>
              </div>
            </div>
            <!-- </form> -->
          </div>
          <img src="/img/pp.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <!-- <h5 class="card-title">Card title</h5> -->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn text-white bg-primary">Go somewhere</a> -->
          </div>
          <div class="card-body">
            <div class="d-flex ">

              <a href="#" class="d-inline-flex ">

                <i class="bi bi-chat-square-fill fs-5"></i>
                <span class="ms-2">
                  Comments
                </span>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<?= $this->endSection() ?>