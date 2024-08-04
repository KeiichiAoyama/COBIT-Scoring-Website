@extends('main')
@section('content')
  <div class="page-wrapper mt-5" id="main-wrapper">
    <div class="body-wrapper">
      <div class="container">
        <div class="row">
          <div class="col">
            <button class="btn btn-outline-primary">Back</button>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg align-items-strech">
            <div class="card w-100">
              <div class="card-body p-5">
                <div class="d-sm-flex d-block align-items-center justify-content-center">
                  <div class="mb-3 mb-sm-0">
                    <div class="row">
                      <div class="col text-center">
                        <img
                        src="{{ asset('images/google.png')}}"
                        alt=""
                        style="width: 100px" />
                        <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName }}</h3>
                      </div>
                      <div class="col">
                        <h3>{{ $governancePracticeCompany->governancePracticeId }}</h3>
                        <h4 class="fw-lighter">{{ $governancePracticeCompany->governancePractice->governancePracticeName }}</h4>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <a href="{{ url('/'. $governancePracticeCompany->companyId . '/' . $domainId . '/' . $governancePracticeCompany->governancePractice->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId . '/audit/' . $activitiesCompany->activitiesId)}}" class="btn btn-primary w-100">Start</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection