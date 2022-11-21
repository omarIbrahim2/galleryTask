@extends('layout')

@section('main')

<main id="main" data-aos="fade" data-aos-delay="1500">

    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Gallery Single</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

            <a class="cta-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" href="contact.html">Add New Image</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-8.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-9.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-10.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-11.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-12.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/gallery-13.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>



      </div>
    </section><!-- End Gallery Single Section -->


    <section id="gallery" class="gallery">
        <div class="container-fluid">
      
          <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <form>
                    <a href="gallery-single.html" class="details-link"><i class="fa-solid fa-trash mr-2"></i></a>
                  <span class="details-link"><i class="fa-regular fa-pen-to-square"></i>
                    <input type="file" name="gallery-image" class="gallery-image-input">
                  </span>
                  </form>
                </div>
                <div class="gallery-name">
                  image name
                </div>
              </div>
            </div>
      
            <!-- End Gallery Item -->
      
      
          </div>
      
        </div>
      </section><!-- End Gallery Section -->

  </main><!-- End #main -->
    
@endsection





<div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 style="color: darkgrey" class="modal-title fs-5" id="exampleModalLabel">Add Image</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action=""  enctype="multipart/form-data">
            <div class="input-group mb-3">
            <input type="text"class="form-control" placeholder="name">
          </div>
            <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
            </div>
          </form>
  
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
  
  </div>