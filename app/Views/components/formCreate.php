<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <div class="d-flex flex-column ">
              <img src="/img/pp.jpg" class="mb-2 d-none" id="img-preview" width="100%" height="100%" alt="">
              <div class="w-100">
                <input onchange="prevImg()" class="form-control" type="file" id="formFile">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" anme="body" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn text-light bg-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const prevImg = () => {
    const imgPreview = document.getElementById('img-preview')
    const formFile = document.getElementById('formFile')
    const fileImg = new FileReader()

    fileImg.readAsDataURL(formFile.files[0])

    fileImg.onload = (e) => {
      imgPreview.classList.remove('d-none')
      imgPreview.src = e.target.result
    }

  }
</script>