<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search ROL Items</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">


</head>

<body>
<link href="{{ URL::asset('css/business-casual.min.css') }}" rel="stylesheet" type="text/css" >
<link href="css/business-casual.min.css" rel="stylesheet">
<img src="{{ asset('images/logo.png') }}" alt="logo" width="110" height="100" style="float:left; margin-top:-2.2% ;padding-left:0.5%">
<h1 class="site-heading text-center text-white d-none d-lg-block">
    <!--<span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>-->
    <span class="site-heading-lower" style="color:#e6a756">Ranjith Motors & Auto Parts</span>
</h1>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" >
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ">
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/menu">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/subStockMenu">Menu</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/itemsReports">Reports</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/itemsCharts">Charts</a>
                </li>
            </ul>

        </div>

    </div>
    <a href="/signOut" onclick="return confirm('Are you sure you want to sign out?')" class="btn btn-primary">Sign Out</a>

</nav>
<br/>

<div class="col-md-12">
    <h1 align="center">Search ROL Items Results</h1>
    <br/>

    <div class="container">
    </div>

    <div class="table-responsive">
    <table class="table table-dark table-striped">
        <tr>
            <th>Stock ID</th>
            <th>Stock Description</th>
            <th>Stock Type</th>
            <th>Stock Quantity</th>
            <th>Last Stock Quantity</th>
            <th>Maximum Capacity</th>
            <th>Department</th>
            <th>Line No</th>
            <th>Item No</th>
            <th>Item Description</th>
            <th>Main Category</th>
            <th>Sub Category</th>
            <th>Brand</th>
            <th>Country</th>
            <th>Quality</th>
            <th>Warranty</th>
            <th>Vehicle Model No</th>
            <th>Vehicle Model</th>
            <th>Vehicle Class</th>
            <th>Year</th>
            <th>Cost</th>
            <th>Selling Price</th>
            <th>Quantity</th>
        </tr>

        @foreach( $stockItems as $stockItem)
            <tr>
                <td>{{$stockItem->stock_id}}</td>
                <td>{{$stockItem->stock_description}}</td>
                <td>{{$stockItem->stock_type}}</td>
                <td>{{$stockItem->st_quantity}}</td>
                <td>{{$stockItem->last_inserted_quantity}}</td>
                <td>{{$stockItem->rol}}</td>
                <td>{{$stockItem->department}}</td>
                <td>{{$stockItem->line_no}}</td>
                <td>{{$stockItem->item_no}}</td>
                <td>{{$stockItem->item_description}}</td>
                <td>{{$stockItem->m_category}}</td>
                <td>{{$stockItem->s_category}}</td>
                <td>{{$stockItem->brand}}</td>
                <td>{{$stockItem->country}}</td>
                <td>{{$stockItem->quality}}</td>
                <td>{{$stockItem->warranty}}</td>
                <td>{{$stockItem->v_model_no}}</td>
                <td>{{$stockItem->v_model_name}}</td>
                <td>{{$stockItem->v_class}}</td>
                <td>{{$stockItem->year}}</td>
                <td>{{$stockItem->cost}}</td>
                <td>{{$stockItem->selling_price}}</td>
                <td>{{$stockItem->quantity}}</td>


            </tr>
        @endforeach

    </table>
    </div>
    <br>
    <div>
        <a href="/reorderItems/rol" class="btn btn-primary" style = "float:left">Back</a>
    </div>
    <br><br>
</div>
<br><br><br>
<footer class="footer text-faded text-center py-5">
    <div style = "text-align: left; margin-top:-2.2%; padding-left:0.5%;color:#e6a756">
        <h3 class="m-0 small"> 2020 Ranjith Motors And Auto Parts</h3>
        <h3 class="m-0 small"> Colombo Road,</h3>
        <h3 class="m-0 small"> Dambokka,</h3>
        <h3 class="m-0 small"> Kurunegala,Srilanka</h3>
        <h3 class="m-0 small"> 600000</h3>
    </div>

    <div class="container" style = "margin-top:-2.5%;color:#e6a756">
        <p class="m-0 small">&copy; 2020 Ranjith Motors All Rights Reserved</p>
    </div>

    <div style = "text-align: right; margin-top:-3.5%; padding-right:1%;color:#e6a756">
        <h3 class="m-0 small"> +94 372231201</h3>
        <h3 class="m-0 small"> +94 372222902</h3><br>
        <h3 class="m-0 small"> E: info@ranjithmotors.com</h3>
    </div>

</footer>
</body>
</html>
