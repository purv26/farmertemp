...
    <head>
       ...
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
              
        <link rel="stylesheet" href="style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
  <script>
    $(document).ready(function () {
        
        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
    </script>
  
  
  
  <style>
 
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa!important;
}
p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
.navbar {
    padding: 15px 10px;
    background: #eaecf8!important;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}
.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}
.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
}
#sidebar.active {
    left: 0;
}
#dismiss {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: #7386D5;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
#dismiss:hover {
    background: #fff;
    color: #7386D5;
}
.overlay {
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    opacity: 0;
    transition: all 0.5s ease-in-out;
}
.overlay.active {
    display: block;
    opacity: 1;
}
#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}
#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}
#sidebar ul p {
    color: #fff;
    padding: 10px;
}
#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    color: #fff;
    text-decoration: none;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}
ul.CTAs {
    padding: 20px;
}
ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}


  </style>
                
    </head>
    <body>
       
    <div class="wrapper">
    <form action="{{url('Dashboard1')}}" method="POST">
    @csrf
  <!-- Sidebar  -->
  <nav id="sidebar">
      <div id="dismiss">
          <i class="fas fa-arrow-left"></i>
      </div>
      <div class="sidebar-header">
         
      </div>
      <ul class="list-unstyled components">
          <p>Farmer Dashboard</p>
          <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Farmer</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#"> 1</a>
                  </li>
                  <li>
                      <a href="#">2</a>
                  </li>
                  <li>
                      <a href="#"> 3</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#">About</a>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Traders</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                  <li>
                      <a href="#"> 1</a>
                  </li>
                  <li>
                      <a href="#"> 2</a>
                  </li>
                  <li>
                      <a href="#"> 3</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#">Suppliers</a>
          </li>
          <li>
              <a href="#">Contact</a>
          </li>
      </ul>
      
  </nav>
  <!-- Page Content  -->
  <div id="content">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fas fa-align-left"></i>
                  <span>Toggle Sidebar</span>
              </button>
              <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-align-justify"></i>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             
</div>
<div>
              <label class="my-1 me-2" for="category">Category</label>
<select class="form-select" id="category" aria-label="Default select example">
    <option selected> select Category</option>
  
</select>
</div> 
<div class="mb-3">

<a href="{{ url('categoryadd') }}">Add</a>
               
          </div>

      </nav>
      <table class="table table-striped">
      <thead >
                        
                        <tr>
                            <th>Image</th>
                            <th>CityName</th>
                            <th>Harvest</th>
                            <th>Demand</th>
                            <th>Difference</th>
                        </tr>
</thead>
<tbody>
                        <tr>
                            <td><img src="https://pngimg.com/uploads/tomato/tomato_PNG12530.png" alt="" style="width:65px;height:75px;"></td>
                            <td>Mumbai
                            <td>28,000 kg</td>
                            <td>28,500 kg</td>
                            <td><span class="badge badge-pill  badge-danger">500 kg</span></td>
                         

                            
                        </tr>
                        <tr>
                            <td><img src="https://gotrade.world/assets/images/vegetables/007-06-bhindi%20(lady%20finger%20okra).jpg" alt="" style="width:65px;height:75px;"></td>
                            <td>Satara</td>
                            <td>18,500 kg</td>
                            <td>17,500  kg</td>
                            <td><span class="badge badge-pill  badge-success">1000 kg</span></td>
                            
                        </tr>
                        <tr>
                            <td><img src="https://img2.pngio.com/download-free-png-bitter-melon-dlpngcom-bitter-melon-png-700_350.png" alt="" style="width:65px;height: 75px;"></td>
                            <td>pune</td>
                            <td>31,500 kg</td>
                            <td>29,500 kg</td>
                            <td><span class="badge badge-pill  badge-success">2000 kg</span></td>
                            
                        </tr>
                        <tr>
                            <td><img src="https://webstockreview.net/images/peas-clipart-legume-4.png" alt="" style="width:65px;height: 75px;"></td>
                            <td>Nagpur</td>
                            <td>43,300 kg</td>
                            <td>50,000 kg</td>
                            <td><span class="badge badge-pill  badge-danger">6700 kg</span></td>
                            
                            
                        </tr>
                        <tr>
                            <td><img src="https://th.bing.com/th/id/OIP.s0cPuuDjU8KNz4duZ4nJhAHaHa?pid=ImgDet&rs=1" alt="" style="width:65px;height:75px"></td>
                            <td>Nashik</td>
                            <td>40,500 kg</td>
                            <td>41,500 kg</td>
                            <td><span class="badge badge-pill  badge-danger">1500 kg</span></td>
                           
                        </tr>
                        <tr>
                            <td><img src="https://th.bing.com/th/id/R.bf01749a6b81d3130ffc371c72e9baff?rik=sQpBU37PC4RUmA&riu=http%3a%2f%2fpngimg.com%2fuploads%2fcauliflower%2fcauliflower_PNG12679.png&ehk=jN9WGtghH4s1%2fl0Ap6pzQkMXURiZqKDgn8hI9bKoPHA%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="" style="width:50px;height:60px"></td>
                            <td>Ratanagiri</td>
                            <td>30,000 kg</td>
                            <td>29,000 kg</td>
                            <td><span class="badge badge-pill  badge-success">1000 kg</span></td>
                            
                        </tr>
                        </tbody>
                    </table>

     
<div class="overlay"></div>
        
    </body>
</html>