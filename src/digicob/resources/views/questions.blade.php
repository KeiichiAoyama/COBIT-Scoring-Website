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
                            <div class="d-sm-flex d-block align-items-center justify-content-between">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('images/google.png')}}" alt="" style="width: 100px" />
                                        <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName }}</h3>
                                    </div>
                                    <div class="col">
                                        <h4 id="activitiesQuestion">
                                            {{ $activitiesCompany->activities->activitiesQuestion }}
                                        </h4>
                                        <form id="saveAuditForm">
                                            @csrf
                                            <input type="hidden" name="domainId"
                                                value="{{ request()->route('domain_id') }}">
                                            <input type="hidden" name="governanceObjectId"
                                                value="{{ request()->route('gov_obj_id') }}">
                                            <input type="hidden" name="governancePracticeId"
                                                value="{{ request()->route('gov_prac_id') }}">
                                            <input type="hidden" id="activitiesCompanyId" name="activitiesCompanyId"
                                                value="{{ $activitiesCompany->activitiesCompanyId }}" required />

                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="text" class="form-control" id="activitiesCompanyScore"
                                                        name="activitiesCompanyScore" value="" required />
                                                </div>
                                                <h5 class="col">%</h5>
                                            </div>

                                            <div id="additional-fields" style="display: none;">
                                                <label class="form-label"
                                                    for="activitiesCompanyFindings">Findings</label>
                                                <input class="form-control" type="text" name="activitiesCompanyFindings"
                                                    id="activitiesCompanyFindings" />
                                                <label class="form-label" for="activitiesCompanyImpact">Impact</label>
                                                <input class="form-control" type="text" name="activitiesCompanyImpact"
                                                    id="activitiesCompanyImpact" />
                                                <label class="form-label" for="recommendation">Recommendation</label>
                                                <input class="form-control" type="text"
                                                    name="activitiesCompanyRecommendations"
                                                    id="activitiesCompanyRecommendations" />
                                                <label class="form-label" for="response">Response</label>
                                                <input class="form-control" type="text" name="activitiesCompanyResponse"
                                                    id="activitiesCompanyResponse" />
                                                <div class="row g-3 mt-1">
                                                    <div class="col-4">
                                                        <label class="form-label"
                                                            for="activitiesCompanyStatus">Status</label>
                                                        <input class="form-control" type="text"
                                                            name="activitiesCompanyStatus"
                                                            id="activitiesCompanyStatus" />
                                                    </div>
                                                    <div class="col-4">
                                                        <label class="form-label"
                                                            for="activitiesCompanyDeadline">Deadline</label>
                                                        <input class="form-control" type="date"
                                                            name="activitiesCompanyDeadline"
                                                            id="activitiesCompanyDeadline" />
                                                    </div>
                                                    <div class="col-4">
                                                        <label class="form-label"
                                                            for="activitiesCompanyPersonInCharge">PIC</label>
                                                        <input class="form-control" type="text"
                                                            name="activitiesCompanyPersonInCharge"
                                                            id="activitiesCompanyPersonInCharge" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="row d-sm-flex d-block align-items-center justify-content-end mt-5">
                                                <div class="col-2">
                                                    <button type="button" id="nextButton"
                                                        class="btn btn-primary w-100">Next</button>
                                                </div>
                                            </div>
                                        </form>
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scoreInput = document.getElementById('activitiesCompanyScore');
        const activityId = document.getElementById('activitiesCompanyId');
        const additionalFields = document.getElementById('additional-fields');
        const nextButton = document.getElementById('nextButton');
        const activitiesQuestion = document.getElementById('activitiesQuestion');
        const form = document.getElementById('saveAuditForm');

        scoreInput.addEventListener('input', function () {
            const score = parseFloat(scoreInput.value);
            additionalFields.style.display = !isNaN(score) && score < 85 ? 'block' : 'none';
        });

        nextButton.addEventListener('click', function () {
            const formData = new FormData(form);
            axios.post('{{ url('/save-audit-next') }}', formData)
                .then(response => {
                    console.log(response.data);
                    if (response.data.activitiesCompany) {
                        activitiesQuestion.textContent = response.data.activitiesCompany.activities.activitiesQuestion;
                        activityId.value = response.data.activitiesCompany.activitiesCompanyId;
                    }
                    if (response.data.redirect) {
                        window.location.href = response.data.redirect;
                    }

                    scoreInput.value = null;
                })
                .catch(error => {
                    console.error('There was an error!', error);
                });
        });
    });
</script>
@endsection
