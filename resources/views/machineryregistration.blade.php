<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="/css/business-casual.min.css" rel="stylesheet">

    <title>Machinary Registration</title>

    <img src="/images/logo.png" alt="logo" width="110" height="100" style="float:left; margin-top:-2.2% ;padding-left:0.5%">
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
                </a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/subResourceMenu">Menu
                  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
              </li>
            </ul>
            
          </div>
        </div>
        <div class="col-md-4 float-right">
            <form action="/searchMachineReg" method="GET">
                
                <div class="input-group">
                    <input type="search" name="searchBar" placeholder="Machinery Model Number" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>&nbsp;&nbsp;
                    </span>

            </form>
            <a href="/signOut" class="btn btn-primary" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a>
        </div>
      </div>
      </nav><br>

</head>
<body>

<div class = "vehiregcontainer">
        <!--dfh -->
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link  {{request () -> is('/vehicleregistration') ? 'active' : null }}"  href="{{url('/vehicleregistration')}}" role="tab">Vehicle Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active {{request () -> is('/machineryregistration') ? 'active' : null }}" href="{{url('/machineryregistration')}}" role="tab">Machinery Registration</a>
            </li>
            
        </ul><!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane {{request() ->is('/vehicleregistration') ? 'active' : null }}" id="{{url('/vehicleregistration')}}" role="tabpanel">
                <p>Local Suppliers</p>
            </div>
            <div class="tab-pane {{request() ->is('/machineryregistration') ? 'active' : null }}" id="{{url('/machineryregistration')}}" role="tabpanel">
                <p>Foreign Suppliers</p>
            </div>
            
        </div>
        </div>

        <!--dfs-->
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach

        <form  method="post" action="/saveMachinery">
        {{csrf_field()}}

                <div class = "vehiregdetailscontainer">
                    <div class="col-md-6">
                        <div class = "vehicaldetailscontainer">
                            Model &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder = "Type asset model" name="model" class ="form-control" style="width:50%" size="30" pattern="[0-9A-Za-z#_-^{10}]"><br><br>
                            Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="type" name="assettype" class ="form-control" style="width:50%">
                                <option value="Heavy Machinery">Heavy Machinery</option>
                                <option value="Tools">Tools</option>
                            </select><br><br>

                            Model No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder = "Type vehical register no" name="mrchmodelno" class ="form-control" style="width:50%" size="30" pattern="[0-9A-Za-z#_-^{10}]"><br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class = "insuarancedetailscontainer">
                            Insurance No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" placeholder = "Type Insurance number" name="insuno" class ="form-control" style="width:50%" size="30" pattern="[0-9A-Za-z#_-^{10}]"><br><br>
                            Insurance Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="type" name="insutype" class ="form-control" style="width:50%">
                                <option value="None">None</option>
                                <option value="Full Insurance">Full Insurance</option>
                                <option value="Third Party">Third Party</option>
                            </select><br><br>
                            Insurance Renew Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="date" placeholder = "Type Insuarance Renew Date" name="insurewdate" class ="form-control" style="width:40%" size="30" pattern="[0-9A-Za-z#_-^{10}]"><br><br>
                        </div>
                    </div>
                </div>
                    <div class = btncontainer >
                            <input type="submit" value="Add" name="save" onclick="" id="addasset" class="btn btn-primary">  
                            <a href=""><input type="button" value="Clear" name="back" onclick="window.location.reload()" id="back" class="btn btn-warning"></a>
                            <a href="/subResourceMenu" class="btn btn-dark">Back</a>  
                    </div><br>
        </form>
        <div class="registrationvehitableconatainer">
        <h5>Registered Machinery Table</h5><br>
            <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">

									<tr>
										<th>Register No</th>
										<th>Model</th>
										<th>Type</th>
										<th>Model No</th>
                    <th>Insurance No</th>
                    <th>Insurance Type</th>
                    <th>Insurance Renew Date</th>
									</tr>

                                    @foreach($machineryregistration as $machinery)
                                    <tr>
                                        <td>{{$machinery->id}}</td>
                                        <td>{{$machinery->model}}</td>
                                        <td>{{$machinery->type}}</td>
                                        <td>{{$machinery->model_no}}</td>
                                        <td>{{$machinery->insu_no}}</td>
                                        <td>{{$machinery->insu_type}}</td>
                                        <td>{{$machinery->insu_rew_date}}</td>
                                        <td><a href="/editmachinery/{{$machinery->id}}" class="btn btn-success">Edit</a></td>
                                        <td><a href="/deletemachinery/{{$machinery->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
                                    </tr>
                                @endforeach  
					
            </table>
        </div>
        
    </div>

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