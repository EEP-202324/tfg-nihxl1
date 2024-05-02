<div class="main p-3">
    <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin: 20px;">NOTICIAS</h2>
        <div class="d-flex">
            <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle-fill"></i>
            </button>
            <button class="btn btn-warning me-2" type="submit">
                <i class="bi bi-pen-fill"></i>
            </button>
            <button class="btn btn-danger" type="submit" style="margin-right: 70px;">
                <i class="bi bi-trash3"></i>
            </button>
        </div>
    </div>
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Noticia 1</h5>
                                <p class="card-text">Descripción de la noticia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir nueva noticia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('Admin/News/addNew'); ?>" method="post">
                        <div class="mb-3">
                            <label for="newsName" class="form-label">TÍTULO</label>
                            <input type="text" class="form-control" id="newsName" name="newsName" placeholder="Introduce el título..">
                        </div>
                        <div class="mb-3">
                            <label for="newsDescription" class="form-label">DESCRIPCIÓN</label>
                            <textarea class="form-control" id="newsDescription" name="newsDescription" rows="3" placeholder="Introduce la noticia.."></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-plus-circle-fill"></i> GUARDAR</button>
                    </form>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
</script>

<style>
    .btn-danger{
        background-color: #71091E;
    }
</style>