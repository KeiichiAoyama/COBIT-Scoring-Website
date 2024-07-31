@extends('main')
@section('content')
  <div class="page-wrapper mt-5" id="main-wrapper">
    <div class="body-wrapper">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg align-items-strech">
            <div class="card w-100">
              <div class="card-body p-5">
                <div class="d-sm-flex d-block align-items-center justify-content-between">
                  <div class="mb-3 mb-sm-0">
                    <div class="row">
                      <div class="col-2">
                        <img
                        src="{{ asset('images/google.png')}}"
                        alt=""
                        style="width: 100px" />
                        <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName}}</h3>
                      </div>
                      <div class="col-5">
                        <h4 class="fw-normal"><i class="ti ti-address-book"></i> Address</h4>
                        <p> {{ $userCompany->company->companyAddress}} </p>
                        <h4 class="fw-normal"><i class="ti ti-building-skyscraper"></i> Industry</h4>
                        <p> {{ $userCompany->company->companyIndustry}} </p>
                      </div>
                      <div class="col-4">
                        <h4>{{ $governancePracticeCompany->governancePracticeId }}</h4>
                        <p>{{ $governancePracticeCompany->governancePractice->governancePracticeName }}</p>
                        <h4>{{ $governancePracticeCompany->governancePracticeCompanyLevel ?? 'Level' }}</h4>
                        <a href="{{ url('/'. $governancePracticeCompany->companyId. '/' . $domainId . '/' . $governancePracticeCompany->governancePractice->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId . '/audit')}}" class="btn btn-primary w-100 mt-4">
                          Audit Now
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="mb-sm-0">
                    @php
                      $score = $governancePracticeCompany->governancePracticeCompanyScore;
                      $percentScore = $score * 100;
                    @endphp
                    <div class="circle-utama">{{ number_format($percentScore, 2) }}%</div>
                  </div>
                </div>
              </div>
            </div>
            @foreach($activitiesCompanyList as $activitiesCompany)
            <div class="row">
              <div class="col-lg align-items-strech">
                  <div class="card w-100">
                    <div class="card-body">
                      <div class="row d-flex align-items-center">
                        <div class="col-10">
                          <div class="row">
                            <div class="d-sm-flex d-block align-items-center justify-content-between">
                              <div class="mb-3 mb-sm-0 w-75">
                                <h4>{{ $activitiesCompany->activities->activitiesName}}</h4>
                              </div>
                              <h3>Level 2</h3>
                            </div>
                          </div>
                          <hr />
                          <div class="row">
                            <div class="col-2 p-1">
                              <button
                              class="btn btn-danger btn-round w-100">
                              EDM | Level 2
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-center">
                          <div class="circle">90%</div>
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
    </div>
  </div>
@endsection
