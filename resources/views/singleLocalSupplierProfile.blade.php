<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Supplier Managment</title>
    <link href="{{ URL::asset('css/business-casual.min.css') }}" rel="stylesheet" type="text/css" >
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
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
                <a class="nav-link text-uppercase text-expanded" href="/subBuyerMenu">Menu</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
              </li>
            </ul>
            
          </div>
        </div>
        <div class="col-md-2.5 float-right">
        <form action="/searchLocalSupPDF" method="get">

  

<div class="input-group">
        <input type="search" name="searchPDF" class="form-control"  placeholder="Search by Name">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Search</button>&nbsp;&nbsp;
        </span>

  
    </form>
    <a href="/signOut" class="btn btn-primary" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a>
    
    </div>
    
    </div>
      </nav><br>
    <div class="container">
    <h2>Local Supplier Profile Report</h2>
    
    <div class="text-center">

    <br><br>
    <ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
		<a class="nav-link active {{request () -> is('/dynamic_pdf_localSupplier') ? 'active' : null }}"  href="{{url('/dynamic_pdf_localSupplier')}}" role="tab">Local Suppliers</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{request () -> is('/dynamic_pdf_foreign_supplier') ? 'active' : null }}" href="{{url('/dynamic_pdf_foreign_supplier')}}" role="tab">Foreign Suppliers</a>
	</li>
	
</ul><!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane {{request() ->is('/dynamic_pdf_localSupplier') ? 'active' : null }}" id="{{url('/dynamic_pdf_localSupplier')}}" role="tabpanel">
		<p>Local Suppliers</p>
	</div>
	<div class="tab-pane {{request() ->is('/dynamic_pdf_foreign_supplier') ? 'active' : null }}" id="{{url('/dynamic_pdf_foreign_supplier')}}" role="tabpanel">
		<p>Foreign Suppliers</p>
	</div>
	
</div>
</div>
   <br>
    <div class="input-group">
                <h1>{{$lSupplier->name}}</h1>
                <div class="col-md-4 float-right">
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
        <a href="/dynamic_pdf_singlelocalSupplier/pdf/{{$lSupplier->reg_no}}" class="btn btn-danger">Convert to PDF</a>
    </div>
    </div>

            <div class="row">
                <div class="col-md-12">

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">

                        {{$error}}

                    </div>
                @endforeach
                

                <form method="post" action="/updateLocalSupData">
                {{csrf_field()}}
               

                <input type="hidden" name="regNo" value="{{$lSupplier->reg_no}}">
                <br>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Local Supplier Name   &nbsp;&nbsp;
                <input type="text" class="form-control" name="localSupName" value="{{$lSupplier->name}}" disabled>
                </div>
                <br>

                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Comapny    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="form-control" name="company" value="{{$lSupplier->company}}" disabled>
                </div>
                <br>

              
              
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               Email Address  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="email" class="form-control" name="email" value="{{$lSupplier->email}}" disabled>
                </div>
               
                <br>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Address    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
                <input type="text" class="form-control" name="address" value="{{$lSupplier->address}}" disabled>
                </div>
                <br>
                
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               District   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
               <input type="text" class="form-control" name="district" value="{{$lSupplier->district}}" disabled>
               </div>

             

                <br>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               Mobile Number   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="phone" class="form-control" name="mobileNumber" value="{{$lSupplier->mobile}}" disabled>
                &nbsp;&nbsp; Land Number  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="phone" class="form-control" name="landNumber" value="{{$lSupplier->land}}" disabled>
                </div>
                <br>
                
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Bank  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="form-control" name="bankName" value="{{$lSupplier->bank_name}}" disabled>
                &nbsp;&nbsp; Account Number  &nbsp;&nbsp;
                <input type="text" class="form-control" name="accNo" value="{{$lSupplier->acc_num}}" disabled>
                </div>
                <br>
               
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Registered Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="form-control" name="bankName" value="{{$lSupplier->created_at}}" disabled>
                &nbsp;&nbsp; Last Data Updated At &nbsp;&nbsp;
                <input type="text" class="form-control" name="accNo" value="{{$lSupplier->updated_at}}" disabled>
                </div>
                <br>
               
                
             
                </form>

                <br><br>
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