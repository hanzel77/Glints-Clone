@extends('layouts.mainUser')

@push('script')
  <script src="{{asset('js/explore.js')}}"></script>
@endpush

@section('title', 'Explore')

@section('content')
  <nav class="navbar navbar-expand-lg position-fixed" style="top:63px; z-index: 2;">
   <div class="container-fluid bgNavbar" style="border: 1px solid rgb(183, 183, 183)">

     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ">
        <li class="nav-item flex-container" style="margin-left: 85px;">
            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI hoverNav" width="1em"
              height="1em" fill="currentColor" viewBox="0 0 100 100">
              <path
                d="M65.02 83.54v3.812c0 3.035-2.228 5.559-5.128 5.989l-.94 3.464A4.311 4.311 0 0 1 54.79 100h-9.318a4.311 4.311 0 0 1-4.162-3.195l-.913-3.464a6.075 6.075 0 0 1-5.156-6.015v-3.813a3.667 3.667 0 0 1 3.679-3.68h22.422a3.707 3.707 0 0 1 3.679 3.706zm17.267-51.397a31.988 31.988 0 0 1-9.023 22.315 29.482 29.482 0 0 0-7.894 16.004 5.316 5.316 0 0 1-5.263 4.485H40.155c-2.604 0-4.86-1.88-5.236-4.458-.94-5.988-3.706-11.68-7.948-16.058-5.478-5.693-8.889-13.426-8.97-21.938A32.056 32.056 0 0 1 49.93 0c17.857-.134 32.357 14.312 32.357 32.142zM53.769 12.675a3.627 3.627 0 0 0-3.625-3.625c-12.781 0-23.2 10.392-23.2 23.2a3.627 3.627 0 0 0 3.625 3.626 3.627 3.627 0 0 0 3.625-3.625c0-8.808 7.17-15.95 15.95-15.95a3.61 3.61 0 0 0 3.626-3.626zM15.453 37.984a2.766 2.766 0 0 1-2.778 2.777H2.942a2.78 2.78 0 0 1-2.777-2.777 2.78 2.78 0 0 1 2.777-2.778h9.733a2.78 2.78 0 0 1 2.778 2.778zm82.222-2.769a2.78 2.78 0 0 1 2.778 2.778 2.78 2.78 0 0 1-2.778 2.778h-9.733a2.78 2.78 0 0 1-2.777-2.778 2.78 2.78 0 0 1 2.777-2.778h9.733zM21.11 61.111a2.745 2.745 0 0 1 3.91 0 2.77 2.77 0 0 1 0 3.93l-6.893 6.893a2.774 2.774 0 0 1-1.955.803 2.77 2.77 0 0 1-1.955-4.733l6.893-6.893zm64.12-45.432c-.72 0-1.42-.267-1.976-.802a2.77 2.77 0 0 1 0-3.93l6.893-6.894a2.77 2.77 0 0 1 3.93 0 2.77 2.77 0 0 1 0 3.93l-6.893 6.894a2.774 2.774 0 0 1-1.955.802zm-74.12-.823L4.198 7.963a2.77 2.77 0 0 1 0-3.93 2.77 2.77 0 0 1 3.93 0l6.893 6.893a2.77 2.77 0 0 1-1.955 4.732c-.7 0-1.42-.267-1.955-.802zm67.074 46.255l6.873 6.893a2.77 2.77 0 0 1-1.955 4.733c-.7 0-1.42-.268-1.955-.803l-6.893-6.893a2.77 2.77 0 0 1 0-3.93 2.77 2.77 0 0 1 3.93 0z">
              </path>
            </svg>
            <a class="nav-link active hoverNav" aria-current="page" href="/opportunities">FOR YOU</a>
          </li>


          <li class="nav-item flex-container ms-2 activeNav">
            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100">
              <path
                d="M45.982 46.205c1.19-1.19 2.53-1.785 4.018-1.785s2.79.558 3.906 1.674C55.022 47.21 55.58 48.512 55.58 50s-.558 2.79-1.674 3.906C52.79 55.022 51.488 55.58 50 55.58s-2.79-.558-3.906-1.674C44.978 52.79 44.42 51.488 44.42 50s.52-2.753 1.562-3.795zm-31.25-31.473C24.554 4.911 36.31 0 50 0c13.69 0 25.446 4.91 35.268 14.732C95.089 24.554 100 36.31 100 50c0 13.69-4.91 25.446-14.732 35.268C75.446 95.089 63.69 100 50 100c-13.69 0-25.446-4.91-35.268-14.732C4.911 75.446 0 63.69 0 50c0-13.69 4.91-25.446 14.732-35.268zm46.206 46.206L79.91 20.089 39.062 39.063 20.09 79.91l40.849-18.974z">
              </path>
            </svg>
            <a class="nav-link active" aria-current="page" style="color: #007acc;" href="/explore">EKSPLOR</a>
          </li>

         
          <li class="nav-item flex-container ms-1 hoverNav">
            
            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI hoverNav"
            width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100">
            <polygon points="12 0 12 100 50 71.6603516 88 100 88 0"></polygon>
          </svg>
          <a class="nav-link active hoverNav" aria-current="page" href="/user/bookmarks">BOOKMARK</a>
        </li>
       


       </ul>
     </div>
   </div>
    </nav>
  @if($job_vacancies->isEmpty())
    <div class="container-fluid" style="height: 400px; padding-top: 200px">
      <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <span class="fs-3">
            Tidak Ada Lowongan Yang Tersedia
          </span>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-4">
        <button class="btn btn-primary col-3" onclick="location.href = '/explore'">Balik</button>
      </div>
    </div>
  @else
  <div class="container-fluid" style="padding-top:150px;">
    <div class="row g-0">
      <!--Filter Starts-->

      <div class="col-md-3 d-none d-md-block position-sticky filter" style="top:150px">
        <div class="container">
          <div class="row">
            <form action="/explore" name="sorting" method="GET">
              <div class="col-12">
                <div class="row border rounded" style="user-select: none;">
                  <div class="col-12 ps-4 parts my-3">
                    <div class="row">
                      <div class="col-10">
                        Tampilkan Berdasarkan
                      </div>
                      <div class="col-2">
                        <img src="{{asset('img/arrow.png')}}" alt="" class="img-fluid me-3 w-50 arrow">
                      </div>
                    </div>
                    <div class="row my-3 drop g-0" id="side1_show">
                      <div class="col-5">
                        <input type="radio" {{old('time') == 'oldest' ? 'checked' : ''}} class="side1" name="time" id="palingtua" onchange="document.forms['sorting'].submit()" value="oldest">
                        <label class="border rounded-pill px-2 py-1 btn btn-radio" for="palingtua">Paling Tua</label>
                      </div>
                      <div class="col-5">
                        <input type="radio" {{old('time') == 'newest' ? 'checked' : ''}} class="side1" name="time" id="palingbaru" onchange="document.forms['sorting'].submit()" value="newest">
                        <label class="border rounded-pill px-2 py-1 btn btn-radio" for="palingbaru">Paling Baru</label>
                      </div>
                    </div>
                  </div>
                  <hr class="mx-auto" style="width:90%;">
                  <div class="col-12 ps-4 parts mb-3">
                    <div class="row">
                      <div class="col-10">
                        Tipe Pekerjaan
                      </div>
                      <div class="col-2">
                        <img src="{{asset('img/arrow.png')}}" alt="" class="img-fluid me-3 w-50 arrow">
                      </div>
                    </div>
                    <div class="row drop mt-2">
                     <div class="form-check ms-4">
                      <input class="form-check-input" type="checkbox" name="type[]" value="magang" id="magang" onchange="document.forms['sorting'].submit()" {{ in_array('magang', old('type', [])) ? 'checked' : '' }}>
                      <label class="form-check-label" for="magang">
                        Magang
                      </label>
                    </div>
                    <div class="form-check ms-4">
                      <input class="form-check-input" type="checkbox" name="type[]" value="fulltime" id="fulltime" onchange="document.forms['sorting'].submit()" {{ in_array('fulltime', old('type', [])) ? 'checked' : '' }}>
                      <label class="form-check-label" for="fulltime">
                        Full-time
                      </label>
                    </div>
                    <div class="form-check ms-4">
                      <input class="form-check-input" type="checkbox" name="type[]" value="parttime" id="parttime" onchange="document.forms['sorting'].submit()" {{ in_array('parttime', old('type', [])) ? 'checked' : '' }}>
                      <label class="form-check-label" for="parttime">
                        Part-time
                      </label>
                    </div>
                    <div class="form-check ms-4">
                      <input class="form-check-input" type="checkbox" name="type[]" value="Project" id="Project" onchange="document.forms['sorting'].submit()" {{ in_array('Project', old('type', [])) ? 'checked' : '' }}>
                      <label class="form-check-label" for="Project">
                        Project
                      </label>
                    </div>
                    </div>
                  </div>
                  <hr class="mx-auto" style="width:90%;">
                  <div class="col-12 px-4 mb-3">
                    <div class="form-check form-switch">
                      <input class="form-check-input" name="remote" {{old('remote') == 'true' ? 'checked' : ''}} type="checkbox" value="true" role="switch" id="flexSwitchCheckDefault" onchange="document.forms['sorting'].submit()">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Hanya Pekerjaan Remote</label>
                    </div>
                  </div>
                  <hr class="mx-auto" style="width:90%;">
                  <div class="col-12 ps-4 parts mb-3">
                    <div class="row">
                      <div class="col-10">
                        Kota
                      </div>
                      <div class="col-2">
                        <img src="{{asset('img/arrow.png')}}" alt="" class="img-fluid me-3 w-50 arrow">
                      </div>
                    </div>
                    <div class="row drop mt-2">
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="checkbox" name="city[]" value="jakarta" id="jakarta" onchange="document.forms['sorting'].submit()" {{ in_array('jakarta', old('city', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="jakarta">
                          Jakarta, Indonesia
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="checkbox" name="city[]" value="tangerang" id="tangerang" onchange="document.forms['sorting'].submit()" {{ in_array('tangerang', old('city', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tangerang">
                          Tangerang, Indonesia
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="checkbox" name="city[]" value="bandung" id="bandung" onchange="document.forms['sorting'].submit()" {{ in_array('bandung', old('city', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="bandung">
                          Bandung, Indonesia
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="checkbox" name="city[]" value="surabaya" id="surabaya" onchange="document.forms['sorting'].submit()" {{ in_array('surabaya', old('city', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="surabaya">
                          Surabaya, Indonesia
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="checkbox" name="city[]" value="yogyakarta" id="yogyakarta" onchange="document.forms['sorting'].submit()" {{ in_array('yogyakarta', old('city', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="yogyakarta">
                          Yogyakarta, Indonesia
                        </label>
                      </div>
                    </div>
                  </div>
                  <hr class="mx-auto" style="width:90%;">
                  <div class="col-12 ps-4 parts mb-3">
                    <div class="row">
                      <div class="col-10">
                        Pengalaman
                      </div>
                      <div class="col-2">
                        <img src="{{asset('img/arrow.png')}}" alt="" class="img-fluid me-3 w-50 arrow">
                      </div>
                    </div>
                    <div class="row drop mt-2">
                      <div class="form-check ms-4">
                        <input class="form-check-input" name="experience[]" type="checkbox" value="<1" id="<1" onchange="document.forms['sorting'].submit()" {{ in_array('<1', old('experience', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="<1">
                          Kurang Dari Setahun
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" name="experience[]" type="checkbox" value="1-3" id="1-3" onchange="document.forms['sorting'].submit()" {{ in_array('1-3', old('experience', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="1-3">
                          1 - 3 Tahun
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" name="experience[]" type="checkbox" value="3-5" id="3-5" onchange="document.forms['sorting'].submit()" {{ in_array('3-5', old('experience', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="3-5">
                          3 - 5 Tahun
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" name="experience[]" type="checkbox" value="5-10" id="5-10" onchange="document.forms['sorting'].submit()" {{ in_array('5-10', old('experience', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="5-10">
                          5 - 10 Tahun
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" name="experience[]" type="checkbox" value=">10" id=">10" onchange="document.forms['sorting'].submit()" {{ in_array('>10', old('experience', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for=">10">
                          Lebih dari 10 Tahun
                        </label>
                      </div>
                    </div>
                  </div>
                  <hr class="mx-auto" style="width:90%;">
                  <div class="col-12 ps-4 parts mb-3">
                    <div class="row">
                      <div class="col-10">
                        Terakhir Diperbarui
                      </div>
                      <div class="col-2">
                        <img src="{{asset('img/arrow.png')}}" alt="" class="img-fluid me-3 w-50 arrow">
                      </div>
                    </div>
                    <div class="row drop">
                      <div class="form-check ms-4 mt-2">
                        <input class="form-check-input" type="radio" name="diperbarui" {{old('diperbarui') == '24-jam-terakhir' ? 'checked' : ''}} id="24-jam-terakhir" value="24-jam-terakhir" onchange="document.forms['sorting'].submit()">
                        <label class="form-check-label" for="24-jam-terakhir">
                          24 Jam Terakhir
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="diperbarui" {{old('diperbarui') == 'seminggu-terakhi' ? 'checked' : ''}} id="seminggu-terakhir" value="seminggu-terakhir" onchange="document.forms['sorting'].submit()">
                        <label class="form-check-label" for="seminggu-terakhir">
                          Seminggu Terakhir
                        </label>
                      </div>
                      <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="diperbarui" {{old('diperbarui') == 'sebulan-terakhir' ? 'checked' : ''}} id="sebulan-terakhir" value="sebulan-terakhir" onchange="document.forms['sorting'].submit()">
                        <label class="form-check-label" for="sebulan-terakhir">
                          Sebulan Terakhir
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Filter Ends-->

      <!--Jobs Start-->
      <div class="col-md-9 col-12">
        <div class="container">
          <div class="row w-100 ms-2">
            @foreach($job_vacancies as $job_vacancy)
            <div class="card mb-4 mx-2 cardStyle" onclick="location.href = '/job-detail/{{$job_vacancy->job_vacancy_id}}'" style="max-width: 500px;">
              <div class="row g-0">
                <div class="col-12 pt-3 d-flex">
                  <div class="container-fluid">
                    <div class="row w-100">
                      <div class="col-3">
                        <img src="{{asset('storage/'.$job_vacancy->Company->logo_company)}}" style="width: 80px;" alt="...">
                      </div>
                      <div class="col-9 d-flex justify-content-between">
                        <div>
                          <h5 class="card-title title">{{$job_vacancy->job_name}}</h5>
                          <a href="/companies/detail/{{$job_vacancy->company_id}}">{{$job_vacancy->company->company_name}}</a>
                        </div>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-heart heart" viewBox="0 0 16 16">
                          <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg> --}}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">

                  <div class="card-body d-flex">
                    <div>
                      <div>
                        <svg data-testid="icon-svg"
                          class="IconStyle_VerticalCenteredSvg-sc-x7d280-0 fElmtI CardJobLocation_LocationIcon-sc-11onppa-0 frqDl"
                          width="1em" height="1em" fill="#646464" viewBox="0 0 100 100">
                          <path
                            d="M24.491 10.268C31.485 3.423 39.893 0 49.714 0c9.822 0 18.23 3.423 25.224 10.268 6.994 6.845 10.49 15.104 10.49 24.777 0 7.738-2.976 17.038-8.928 27.901-5.952 10.864-11.905 19.792-17.857 26.786L49.714 100c-1.041-1.042-2.343-2.493-3.906-4.353-1.562-1.86-4.39-5.468-8.482-10.826-4.092-5.357-7.701-10.565-10.826-15.625-3.125-5.06-5.99-10.788-8.594-17.187C15.302 45.61 14 39.955 14 35.045c0-9.673 3.497-17.932 10.491-24.777zm16.072 33.705c2.53 2.381 5.58 3.572 9.151 3.572 3.572 0 6.585-1.228 9.04-3.683 2.456-2.456 3.684-5.395 3.684-8.817 0-3.423-1.228-6.362-3.684-8.817-2.455-2.456-5.468-3.683-9.04-3.683-3.571 0-6.585 1.227-9.04 3.683-2.455 2.455-3.683 5.394-3.683 8.817 0 3.422 1.19 6.398 3.571 8.928z">
                          </path>
                        </svg>
                        <span>{{$job_vacancy->city}}, {{$job_vacancy->country}}</span>
                      </div>

                      <div class="">
                        <svg data-testid="icon-svg"
                          class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI currency-icon" width="1em"
                          height="1em" fill="#7b7b7b" viewBox="0 0 100 100">
                          <path
                            d="M78.0608911,60.8349609 C77.5722412,59.2007812 76.979375,57.7785156 76.2830835,56.5707031 C75.5871875,55.3617187 74.5905078,54.1824219 73.2910669,53.0289062 C71.993208,51.8759766 70.8256689,50.9474609 69.7904272,50.2416016 C68.7557788,49.5351562 67.3345215,48.7453125 65.5274463,47.8710937 C63.7219531,46.9970703 62.2914014,46.3466797 61.2383618,45.9189453 C60.183938,45.4917969 58.6586621,44.90625 56.6635229,44.1626953 C54.8946143,43.4939453 53.5775732,42.9826172 52.7110156,42.6296875 C51.8454468,42.2763672 50.7071753,41.7748047 49.2956079,41.1238281 C47.8846338,40.4738281 46.8306055,39.8972656 46.1341162,39.3957031 C45.4378247,38.8941406 44.6946655,38.2808594 43.9040454,37.5560547 C43.1134253,36.83125 42.5583301,36.0597656 42.2381665,35.2419922 C41.9187939,34.4240234 41.7586133,33.5316406 41.7586133,32.5650391 C41.7586133,30.0376953 42.8873926,27.9738281 45.1457422,26.3757812 C47.4042896,24.7777344 50.3217529,23.9783203 53.8977368,23.9783203 C55.4777905,23.9783203 57.0886938,24.1917969 58.7249097,24.6197266 C60.3611255,25.0476562 61.7633984,25.5296875 62.9303442,26.0691406 C64.0982788,26.6085937 65.1987793,27.2035156 66.2342188,27.8537109 C67.2694604,28.5044922 68.0031274,28.9966797 68.4364063,29.33125 C68.8692896,29.6660156 69.1435742,29.8888672 69.2553052,30.0005859 C69.7453394,30.3722656 70.2521826,30.5021484 70.7791968,30.3910156 C71.3435864,30.3539062 71.7768652,30.0560547 72.0786377,29.4990234 L76.6526855,21.3576172 C77.1041577,20.6144531 77.0108179,19.9080078 76.3704907,19.2384766 C76.1442603,19.0154297 75.8630542,18.7554687 75.5219287,18.4578125 C75.184165,18.1601562 74.4499048,17.6212891 73.3197412,16.8402344 C72.1907642,16.0597656 70.9957373,15.3626953 69.7356494,14.7492187 C68.4741772,14.1363281 66.8363794,13.5132812 64.8224536,12.8816406 C62.8097144,12.2490234 60.729541,11.821875 58.5835156,11.5990234 L58.5835156,1.784375 C58.5835156,1.26425781 58.414436,0.836523437 58.0766724,0.501757812 C57.7381177,0.167773437 57.3050366,0 56.7772314,0 L49.1546094,0 C48.6653662,0 48.2419751,0.176367187 47.884436,0.5296875 C47.526897,0.883007812 47.3481274,1.30097656 47.3481274,1.784375 L47.3481274,11.8216797 C41.4384497,12.9365234 36.6393579,15.4273437 32.9506543,19.2935547 C29.2623462,23.1599609 27.4175,27.6574219 27.4175,32.7880859 C27.4175,34.3121094 27.5780762,35.7619141 27.898042,37.1367187 C28.2176123,38.5126953 28.6131201,39.7488281 29.0837744,40.8453125 C29.5540332,41.9425781 30.2224414,43.0203125 31.0880103,44.0800781 C31.9535791,45.1394531 32.772478,46.0503906 33.543916,46.8121094 C34.3157495,47.5736328 35.3227124,48.3638672 36.5644092,49.1814453 C37.806897,49.9998047 38.8702197,50.6601562 39.7549707,51.1617187 C40.6399194,51.6617187 41.8159619,52.2398437 43.2834937,52.8888672 C44.7514209,53.5398437 45.90927,54.0318359 46.75625,54.3671875 C47.60323,54.7013672 48.7604858,55.1666016 50.2290063,55.7601562 C52.2613232,56.5408203 53.7672192,57.1451172 54.7457056,57.5728516 C55.7249829,58.0005859 56.9666797,58.5953125 58.4731689,59.3574219 C59.9782739,60.11875 61.0787744,60.8160156 61.7756592,61.4482422 C62.4719507,62.0804687 63.1021924,62.8611328 63.6671753,63.7902344 C64.2321582,64.7193359 64.515144,65.7044922 64.515144,66.7458984 C64.515144,69.6828125 63.3576904,71.95 61.0421899,73.5472656 C58.7276782,75.1462891 56.0449487,75.9455078 52.9965723,75.9455078 C51.6051758,75.9455078 50.2114063,75.7976562 48.8192188,75.5003906 C43.9259961,74.5326172 39.352937,72.2091797 35.099646,68.5291016 L34.9867285,68.4175781 C34.6477783,68.0097656 34.1959106,67.8421875 33.6319165,67.9169922 C33.0295581,67.9912109 32.5964771,68.2144531 32.3332666,68.5869141 L26.5177197,76.1142578 C25.9529346,76.8576172 25.9911011,77.6195312 26.630835,78.4001953 C26.8192944,78.6234375 27.1485547,78.9587891 27.6188135,79.4041016 C28.0902588,79.8511719 28.9655176,80.5470703 30.2445898,81.496875 C31.5240576,82.4453125 32.9168384,83.3363281 34.4227344,84.1738281 C35.9284326,85.0099609 37.8383398,85.8367187 40.1536426,86.6548828 C42.4689453,87.4716797 44.8678979,88.0476562 47.3522803,88.3820312 L47.3522803,98.1404297 C47.3522803,98.6244141 47.5312476,99.0421875 47.8885889,99.3957031 C48.2463257,99.7494141 48.669519,99.9251953 49.1587622,99.9251953 L56.7813843,99.9251953 C57.3091895,99.9251953 57.7422705,99.7582031 58.0806274,99.4240234 C58.4189844,99.0898437 58.5874707,98.6621094 58.5874707,98.140625 L58.5874707,88.3822266 C64.5732837,87.4158203 69.4382275,84.8785156 73.1828955,80.7705078 C76.927959,76.6625 78.801084,71.7646484 78.801084,66.0773437 C78.7991064,64.2189453 78.5548804,62.4716797 78.0608911,60.8349609 Z">
                          </path>
                        </svg>
                        <span>{{number_format($job_vacancy->estimated_salary, 0, ',', '.')}}</span>
                      </div>

                      <div class="">
                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI"
                          width="1em" height="1em" fill="#7b7b7b" viewBox="0 0 100 100">
                          <path
                            d="M37.4726562,59.9636719 L37.4726562,68.8853516 C37.4726562,69.8521484 37.8257812,70.6894531 38.5320313,71.3945313 C39.1841346,72.0473558 39.9467409,72.3982942 40.8209256,72.4484219 L41.0417969,72.4546875 L58.8857422,72.4546875 C59.8523437,72.4546875 60.6892578,72.1017578 61.3957031,71.3945313 C62.0470853,70.7435096 62.3985785,69.979988 62.4488,69.106117 L62.4550781,68.8853516 L62.4550781,59.9636719 L99.9271484,59.9636719 L99.9271484,86.7300781 C99.9271484,89.1832031 99.0542969,91.2832031 97.3064453,93.0302734 C95.6386009,94.6981179 93.6488261,95.5699457 91.3378006,95.6457568 L91.0054688,95.6511719 L8.92226563,95.6511719 C6.46855469,95.6511719 4.36777344,94.7775391 2.62070312,93.0302734 C0.95267223,91.3626154 0.0811918905,89.373383 0.0054127499,87.0624064 L0,86.7300781 L0,59.9636719 L37.4726562,59.9636719 Z M57.1019531,59.9636719 L57.1019531,67.1013672 L42.8253906,67.1013672 L42.8253906,59.9636719 L57.1019531,59.9636719 Z M66.0236328,5 C67.5101562,5 68.7748047,5.52070312 69.8148437,6.56113281 C70.8560547,7.60214844 71.3761719,8.86582031 71.3761719,10.3529297 L71.3761719,10.3529297 L71.3761719,21.2753906 L91.0052734,21.2753906 C93.4583984,21.2753906 95.5591797,22.1486328 97.30625,23.8960938 C99.0542969,25.6433594 99.9269531,27.7429688 99.9269531,30.1966797 L99.9269531,30.1966797 L99.9269531,51.6099609 L0,51.6099609 L0,30.1966797 C0,27.7429688 0.873242188,25.6433594 2.62070313,23.8960938 C4.36796875,22.1486328 6.46875,21.2753906 8.92226563,21.2753906 L8.92226563,21.2753906 L28.5509766,21.2753906 L28.5509766,10.3529297 C28.5509766,8.865625 29.0710938,7.6015625 30.1123047,6.56113281 C31.1535156,5.52070312 32.4173828,5 33.9041016,5 L33.9041016,5 Z M64.2390625,12.1373047 L35.6884766,12.1373047 L35.6884766,21.2753906 L64.2390625,21.2753906 L64.2390625,12.1373047 Z">
                          </path>
                        </svg>
                        <span>{{$job_vacancy->job_experience}} Tahun</span>
                      </div>
                      <div class="mt-4">
                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI"
                          width="12px" height="12px" fill="#777777" viewBox="0 0 100 100">
                          <path
                            d="M49.571 0c27.334 0 49.572 22.238 49.572 49.571 0 27.334-22.238 49.572-49.572 49.572C22.238 99.143 0 76.905 0 49.57 0 22.238 22.238 0 49.571 0zm0 88.595c21.518 0 39.025-17.505 39.025-39.024 0-21.518-17.507-39.023-39.025-39.023-21.517 0-39.024 17.505-39.024 39.023 0 21.519 17.507 39.024 39.024 39.024zM75.406 48.04a4.082 4.082 0 0 1 0 8.163h-26.36a4.082 4.082 0 0 1-4.08-4.082V21.255a4.082 4.082 0 0 1 8.163 0v26.786h22.277z">
                          </path>
                        </svg>
                        <span><small class="text-muted">Last Updated: {{$job_vacancy->updated_at->format('d M Y g:i A')}}</small></span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </div>
      <!--Jobs End-->

      <!--Pagination Starts-->
      <div class="col-12 d-flex justify-content-center">
       {{ $job_vacancies->links() }}
      </div>
    </div>
  </div>
  @endif
  @include('partials.footer')

@endsection
