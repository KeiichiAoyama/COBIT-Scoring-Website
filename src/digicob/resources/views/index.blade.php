@extends('main')
@section('content')
  <div
  class="page-wrapper"
  id="main-wrapper"
  data-layout="vertical"
  data-navbarbg="skin6"    
  data-sidebartype="full"
  data-sidebar-position="fixed"
  data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div
        class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard')}}" class="text-nowrap logo-img">
            <h1>Digicob</h1>
          </a>
          <div
          class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
          id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="btn btn-primary" href="{{ route('newCompany')}}"><i class="ti ti-plus"></i> New Company</a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Company List</span>
            </li>
            @foreach ($userCompanyList as $userCompany)
            <li class="sidebar-item">
              <a class="sidebar-link" 
              href="{{ url('/'.$userCompany->companyId)}}"
              aria-expanded="false">
                <span class="hide-menu">{{ $userCompany->company->companyName }}</span>
              </a>
            </li>
            @endforeach 
          </ul>
        </nav>
      </div>
    </aside>
    <div class="body-wrapper">
      <div class="container">
        <h3 class="fw-semibold mt-4 mb-3">Company List</h3>
        @foreach ($userCompanyList as $company)
        <div class="row">
          <a href="{{ url('/'.$company->company->companyId)}}">
            <div class="card w-100">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-10">
                    <div class="row">
                      <div class="d-sm-flex d-block align-items-center justify-content-between">
                        <div class="mb-3 mb-sm-0">
                          <h3>{{ $company->company->companyName }}</h3>
                        </div>
                      </div>
                    </div>
                    <hr />
                    <div class="row">
                      @foreach ($domainCompanyList as $domain)
                      <div class="col-2 p-1">
                        <a href="{{ url('/' . $domain->companyId . '/' . $domain->domainId)}}"
                        class="btn btn-danger btn-round w-100"> 
                        {{ $domain->domain->domainAcronym }}
                        </a>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="col-2 d-flex align-items-center justify-content-center">
                    <div class="circle">{{$company->userCompanyScore ?? '0'}}%</div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
