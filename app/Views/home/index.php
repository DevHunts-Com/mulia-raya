<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hubungkan dengan CDN Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Authentication Page</title>
</head>

<body>
    <div class="container">
        <!-- Tambahkan card dengan informasi endpoint di bawah tombol -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Endpoint Usage</div>
                    <div class="card-body">
                        <h5 class="card-title">Retrieve Data</h5>
                        <p class="card-text">Retrieve data from the server.</p>
                        <hr>
                        <div class="d-flex">
                            <h4>Authenticate</h4>
                            <form action="/api/services/authenticate" class="px-2" method="POST">
                                <button class="btn btn-sm btn-primary">Click me to login!</button>
                            </form>
                        </div>
                        <ul>
                            <li><strong>Endpoint:</strong> <span class="text-primary"> api/services/authenticate </span></li>
                            <li><strong>Method:</strong> POST</li>
                            <li><strong>Parameters / form body:</strong></li>
                            <ul>
                                <hr>
                                <li><code>grant_type / personal account url</code>(required) - string</li>
                                <hr>
                                <li><code>client_id</code> (required) - string</li>
                                <li><code>client_secret</code> (required) - string.</li>
                                <li><code>username</code> (required) - string. </li>
                                <li><code>enddate</code> (required) - string</li>
                            </ul>
                            <li><strong>Response:</strong> JSON object containing the requested data.</li>
                        </ul>
                        <div class="d-flex">
                            <h4>So Invoice</h4>
                            <form action="/api/services/so-invoice" class="px-2 d-flex" method="GET">
                                <input type="text" class="form-control" placeholder="Access Token" name="access_token">
                                <button class="btn btn-sm btn-primary">Go!</button>
                            </form>
                        </div>
                        <ul>
                            <li><strong>Endpoint:</strong> <span class="text-primary"> api/services/so-invoices </span></li>
                            <li><strong>Method:</strong> GET</li>
                            <li><strong>Parameters:</strong></li>
                            <ul>
                                <hr>
                                <li><code>instance_url / personal account url</code> (required) - instance_url can be obtained after login</li>
                                <hr>
                                <li><code>limit</code> (required) - Maximum number of items to retrieve.</li>
                                <li><code>offset</code> (required) - Offset from the beginning of the list.</li>
                                <li><code>startdate</code> (optional) </li>
                                <li><code>enddate</code> (optional)</li>
                            </ul>
                            <li><strong>Response:</strong> JSON object containing the requested data.</li>
                        </ul>
                        <div class="d-flex">
                            <h4>So Return</h4>
                            <form action="/api/services/so-return" class="px-2 d-flex" method="GET">
                            <input type="text" class="form-control" placeholder="Access Token" name="access_token">
                                <button class="btn btn-sm btn-primary">Go!</button>
                            </form>
                        </div>
                        <ul>
                            <li><strong>Endpoint:</strong> <span class="text-primary"> api/services/so-return </span></li>
                            <li><strong>Method:</strong> GET</li>
                            <li><strong>Parameters:</strong></li>
                            <ul>
                                <hr>
                                <li><code>instance_url / personal account url</code> (required) - instance_url can be obtained after login</li>
                                <hr>
                                <li><code>limit</code> (required) - Maximum number of items to retrieve.</li>
                                <li><code>offset</code> (required) - Offset from the beginning of the list.</li>
                                <li><code>startdate</code> (optional) </li>
                                <li><code>enddate</code> (optional)</li>
                            </ul>
                            <li><strong>Response:</strong> JSON object containing the requested data.</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hubungkan dengan script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>