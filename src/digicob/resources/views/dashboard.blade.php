<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digicob</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .circle {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-color: #44cb9a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-align: center;
            margin: 2px auto;
        }

        .btn-round {
            border-radius: 40px;
        }

        .btn-orange {
            background-color: orange;
            border-color: orange;
            color: white;
            border-radius: 4px;
        }

        .btn-orange:hover {
            background-color: darkorange;
            border-color: darkorange;
        }
    </style>
</head>

<body>

    <div class="sidebar d-flex flex-column p-3">
        <h4 class="border-bottom pb-2">Digicob</h4>
        <div class="my-3 w-100">
            <button class="btn btn-orange w-100">+ New Company</button>
        </div>
        <ul class="nav nav-pills flex-column mb-auto">
            @foreach ($userCompanyList as $userCompany)
                        @php
                            $output = $userCompany;
                            if (is_array($output))
                                $output = implode(',', $output);

                            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
                            $company = $userCompany->company->first();
                        @endphp
                        <li>
                            <a href="#" class="nav-link">{{ $company->companyName }}</a>
                        </li>
            @endforeach
        </ul>
    </div>

    <!-- Page content -->
    <div class="content">

        <!-- Company List -->
        <div class="body-wrapper">
            <div class="container">
                <!--  Header -->
                <div class="row">
                    <div class="col-lg align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Company List</h5>
                                    </div>
                                </div>

                                <!-- Company content -->

                                <div class="row">
                                    <a href="company-detail.html">
                                        <div class="card w-100">
                                            <div class="card-body">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div
                                                                class="d-sm-flex d-block align-items-center justify-content-between">
                                                                <div class="mb-3 mb-sm-0">
                                                                    <h3>Company A</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-2 p-1">
                                                                <button class="btn btn-danger btn-round w-100">
                                                                    EDM | Level 2
                                                                </button>
                                                            </div>
                                                            <div class="col-2 p-1">
                                                                <button class="btn btn-danger btn-round w-100">
                                                                    EDM | Level 2
                                                                </button>
                                                            </div>
                                                            <div class="col-2 p-1">
                                                                <button class="btn btn-danger btn-round w-100">
                                                                    EDM | Level 2
                                                                </button>
                                                            </div>
                                                            <div class="col-2 p-1">
                                                                <button class="btn btn-danger btn-round w-100">
                                                                    EDM | Level 2
                                                                </button>
                                                            </div>
                                                            <div class="col-2 p-1">
                                                                <button class="btn btn-danger btn-round w-100">
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
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">
                        Design and Developed by
                        <a href="https://adminmart.com/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
