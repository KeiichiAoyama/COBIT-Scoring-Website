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
                        <img src="{{ asset('images/google.png')}}" alt="logo" style="width: 100px"/>
                          <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName}}</h3>
                      </div>
                      <div class="col-5">
                        <h4 class="fw-normal"> <i class="ti ti-address-book"></i> </h4>
                        <p> {{ $userCompany->company->companyAddress}} </p>
                        <h4 class="fw-normal"> <i class="ti ti-building-skyscraper"></i> </h4>
                        <p> {{ $userCompany->company->companyIndustry}} </p>
                      </div>
                    </div>
                  </div>
                  <div class="mb-sm-0">
                    @php
                        $score = $userCompany->userCompanyScore;
                        $percentScore = $score * 100;
                    @endphp
                    <div class="circle-utama">{{ number_format($percentScore, 2) }}%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @foreach($domainCompanyList as $domainCompany)
          <div class="row">
            <div class="col-lg align-items-strech">
              <a href="{{ url('/' . $domainCompany->companyId . '/'. $domainCompany->domainId) }}">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="row d-flex align-items-center">
                      <div class="col-10">
                        <div class="row">
                          <div class="d-sm-flex d-block align-items-center justify-content-between">
                            <div class="mb-3 mb-sm-0">
                              <h3>{{$domainCompany->domain->domainName}}</h3>
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="row">
                          @foreach($governanceObjectCompanyList as $govObject)
                            <div class="col-2 p-1">
                              <a href="{{ url('/' . $domainCompany->companyId . '/'. $domainCompany->domainId) . '/'. $govObject->governanceObjectId}}"
                              class="btn btn-danger btn-round w-100">
                              {{$govObject->governanceObjectId}}
                              </a>
                            </div>
                          @endforeach
                        </div>
                      </div>
                      <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="circle">{{ $domainCompany->domainCompanyScore ?? '0' }}%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
