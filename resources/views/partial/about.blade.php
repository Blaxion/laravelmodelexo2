<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$aboutSections[0]->span_one}}</span>
                <span class="section-heading-lower">{{$aboutSections[0]->span_two}}</span>
              </h2>
              <p>{{$aboutSections[0]->para_one}}</p>
              <p class="mb-0">{!!$aboutSections[0]->para_two!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>