@extends ('template.main')
@section ('body')
<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset($homeSections[0]->img)}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$homeSections[0]->span_one}}</span>
            <span class="section-heading-lower">{{$homeSections[0]->span_two}}</span>
          </h2>
          <p class="mb-3">{{$homeSections[0]->para_one}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$homeSections[0]->anchor}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{$homeSections[1]->span_one}}</span>
              <span class="section-heading-lower">{{$homeSections[1]->span_two}}</span>
            </h2>
            <p class="mb-0">{{$homeSections[1]->para_one}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection