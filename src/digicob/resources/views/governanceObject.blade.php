@extends('main')
@section('content')
<div class="page-wrapper mt-5" id="main-wrapper">
    <div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/' . $governanceObjectCompany->companyId . '/' . $governanceObjectCompany->domainCompany->domainId) }}"
                        class="btn btn-outline-primary">Back</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Home</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg align-items-strech">
                    <div class="card w-100">
                        <div class="card-body p-5">
                            <div class="d-sm-flex d-block align-items-center justify-content-between">
                                <div class="mb-3 mb-sm-0">
                                    <div class="row">
                                        <h3 class="fw-semibold text-start" style="margin-bottom: 40px;">Governance
                                            Object</h3>
                                        <div class="col-2">
                                            @php
                                                $img = ($userCompany->company->companyLogo) ? $userCompany->company->companyLogo : 'images/google.png';
                                            @endphp
                                            <img src="{{ asset($img)}}" alt="logo" style="width: 100px" />
                                            <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName}}</h3>
                                        </div>
                                        <div class="col-5">
                                            <h4 class="fw-normal"><i class="ti ti-address-book"></i> Address</h4>
                                            <p> {{ $userCompany->company->companyAddress}} </p>
                                            <h4 class="fw-normal"><i class="ti ti-building-skyscraper"></i> Industry
                                            </h4>
                                            <p> {{ $userCompany->company->companyIndustry}} </p>
                                        </div>
                                        <div class="col-4">
                                            <h4>{{$governanceObjectCompany->governanceObjectId}}</h4>
                                            <p>{{$governanceObjectCompany->governanceObject->governanceObjectName}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-sm-0">
                                    @php
                                        $score = $governanceObjectCompany->governanceObjectCompanyScore;
                                    @endphp
                                    <div class="circle-utama">{{ number_format($score, 2) }}%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($governancePracticeCompanyList as $governancePractice)
                        <div class="row">
                            <div class="col-lg align-items-strech">
                                <a
                                    href="{{ url('/' . $governanceObjectCompany->companyId . '/' . $governanceObjectCompany->domainCompany->domainId . '/' . $governanceObjectCompany->governanceObjectId . '/' . $governancePractice->governancePracticeId)}}">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div
                                                            class="d-sm-flex d-block align-items-center justify-content-between">
                                                            <div class="mb-3 mb-sm-0">
                                                                <h3>{{ $governancePractice->governancePracticeId}} |
                                                                    {{ $governancePractice->governancePractice->governancePracticeName}}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center justify-content-center">
                                                    <div class="circle">
                                                        {{ $governancePractice->governancePracticeCompanyScore ?? '0'}}%
                                                    </div>
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
    </div>
</div>
@endsection
