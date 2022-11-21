@extends('layout')



@section('main')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>I'm <span>Omar Ibrahem</span> a Professional backend developer from Cairo</h2>
          <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p>
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started">Add New Album</button>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="row gy-4 justify-content-center">
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="fa-solid fa-trash mr-2"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="fa-regular fa-pen-to-square"></i></a>
          </div>
          <div class="gallery-name">
            album name
          </div>
        </div>
      </div>

      <!-- End Gallery Item -->


    </div>

  </div>
</section><!-- End Gallery Section -->


@endsection


<div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="color: darkgrey" class="modal-title fs-5" id="exampleModalLabel">Add Album</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        
        <form id="addAlbum" action="{{url('create')}}" method="POST">
          <p id="name-error" style="color: red"></p>
          <input name="name" id="name"  type="text" class="form-control" placeholder="name"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="submitAdd" type="button" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

</div>

@section('scripts')
    
  <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
     });
    function createAlbum(){
   
       let formData = new FormData($('#addAlbum')[0]);
         let Aname = $("#name").val();
      $.ajax({
        type: 'POST',
        url : "{{url('create')}}",
        
        data: formData,
        processData: false,
        contentType:false,
        cache:false,
      

        success : function(data){
          toastr.info(data.message)
          $("#name").text('');
          
        },
        
        error : function(reject){
          let response = $.parseJSON(reject.responseText);
           
          $.each(response.errors , function(key , val){
            $("#" + key + "-error").text(val[0])
          })
           
        }

      })

    }
   
    $("#name-error").text('');

    $('#submitAdd').click(function(e){
      e.preventDefault();
       // alert("ok");
        createAlbum();
        $("#exampleModal").modal('hide');
    })

  </script>

@endsection