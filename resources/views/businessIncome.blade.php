<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Income</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ URL::asset('css/business-casual.min.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

<!--header-->
    <img src="images/logo.png" alt="logo" width="110" height="100" style="float:left; margin-top:-2.2% ;padding-left:0.5%">
    <h1 class="site-heading text-center text-white d-none d-lg-block">
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
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/menu">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/fmMenu">Menu</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/fmChartsIncome">Charts</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/incomeSummary">Reports</a>
              </li>
            </ul>
            
          </div>
        </div>
        <a href="/signOut" class="btn btn-primary" style="float:right" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a>
        <!--Search Bar-->
        <div class="col-md-2 float-right">
            <form action="/searchIncome" method="GET">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="search" name="searchBar" placeholder="Receipt Number" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
      </nav><br>
    <br>
  <!--/header-->

    <div class="container-lg pt-5">
    <h1>Manage Your Income Here!</h1>

    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
    
    <form method="POST" action="/saveIncome">
        {{csrf_field()}} <!--protect from cross site request forger attacks-->
        <div class="form-group">
            <p>Receipt Number</p>
            <input type="text" name="receiptNumber" placeholder="Receipt Number*" class="form-control" >
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                Amount &nbsp;
                <input type="text" name="incomeAmount" placeholder="Income Amount*" class="form-control">
                &nbsp;&nbsp; Discount Given &nbsp;
                <input type="text" name="dis_given" placeholder="If any" class="form-control">
            </div>          
            <br>
            <p>Description</p>
            <textarea placeholder="Note regarding the income received" name="description" class="form-control"></textarea>
            <br>
            <div class="input-group">
                <p>Expense Category</p> &nbsp;
                <select name="category" class="form-control">
                    <option value="hidden" disabled selected>Select category*</option>
                    <option value="Interest Income">Interest Income</option>    
                    <option value="Delivery Income">Delivery Income</option>    
                    <option value="Commission Income">Commission Income</option>    
                    <option value="Other">Other</option>
                </select>
                &nbsp;&nbsp; <p>Transaction Date</p> &nbsp;
                <input type="date" name="transactionDate" class="form-control" placeholder="Date">
            </div>
            <br>
            <input type="submit" name="submitBtn" value="Add" class="btn btn-outline-primary">
            <input type="reset" name="submitBtn" value="Clear" class="btn btn-outline-warning">
        </div>
    </form>

    <br>
    <a href="/incomeHistory" class="btn btn-success">Delete/Update History</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/viewAllSales" class="btn btn-success">Sales Details</a>
    <br>
    <br>

    <table class="table table-dark">
        <tr>
            <th>Payment Number</th>
            <th>Category</th>
            <th>Description</th>
            <th>Date of Transaction</th>
            <th>Amount in LKR</th>
            <th>Discount</th>
            <th>Action</th>
        </tr>
        @foreach($Income as $income)
        <tr>
            <td>{{$income->receipt_number}}</td>
            <td>{{$income->category}}</td>
            <td>{{$income->description}}</td>
            <td>{{$income->date_of_transaction}}</td>
            <td>{{$income->amount}}</td>
            <td>{{$income->discount_given}}</td>
            <td><a href="/updateIncomeView/{{$income->id}}" class="btn btn-outline-primary">Edit</a>
            <a href="/deleteIncome/{{$income->id}}" class="btn btn-outline-warning" onclick="return confirm('Do you really want to delete?')">Delete</a></td>
        </tr>
        @endforeach
    </table>
    {{$Income->links()}}
    <br>
    <a href="/fmMenu" class="btn btn-success">Back</a>   
    </div>
    <br>
    <br>

    <!--Footer-->
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