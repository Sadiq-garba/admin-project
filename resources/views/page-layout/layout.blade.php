<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/dashboard.css')}}">
    <script src="https://kit.fontawesome.com/ca2912634d.js" crossorigin="anonymous"></script>
    <title>SmartLog | Dashboard</title>
</head>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<body>


   <div class="topNav">
       <div class="topLeft">
             <div class="logoImg">
             <img src="./assets/smart1.png" alt="SmartLog logo">
             </div>
             <div class="mt-1 ms-2">SmartLog</div>
        </div>

        <div class="topMiddle">
            <div class="me-3 dashboardText hi">Dashboard | </div>
            <div>
                <img src="./assets/Dashboard.png" alt="Dashboard logo">
            </div>

           <div class="ms-3 dashboardText"> / Dashboard  </div>
       </div>
       <div class="topRight">
        <div class="me-5 announcementBtn">
            <img src="./assets/Announcement.png" alt="Announcement logo">
        </div>

        <div class="profile">
            <span class="logoImg">
                <img src="./assets/smart1.png" alt="">
            </span>

            <span class="ms-3">
                <img src="./assets/Vector.png" alt="">
            </span>
        </div>
       </div>
   </div>
   <div class="sidenav">

    <div class="sideBarBtn my-5">
        <i class="fa-solid fa-bars"></i>
    </div>

    <div class="topSideBar mt-5">
        <div class="smartLog mb-2">
        <img src="./assets/smart.png" alt="">
    </div>
    <div class="smartLogText">Dummytest</div>

    <div class="topIcons mt-2 mb-3">
        <div><img src="./assets/settings.png" alt=""></div>
        <a href="./index.html">
          <div><img src="./assets/logout.png" alt=""></div>
        </a>
    </div>


    </div>

    <div class="sideBarContents">

        <a href="./dashboard.html">
            <div class="navWrapper">
                <div class="icons">
                    <i class="fa-solid fa-table-cells-large"></i>
                </div>
                <div class="sideBarText">Dashboard</div>
            </div>
        </a>

       <a href="./users.html">
        <div class="navWrapper">
            <div class="icons">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="sideBarText">Users</div>
        </div>
       </a>

       <a href="./activityLog.html">
        <div class="navWrapper">
            <div class="icons">
                <i class="fa-solid fa-list"></i>
            </div>
            <div class="sideBarText">Activity log</div>
        </div>
       </a>

       <div class="dropDown">

        <div class="navWrapper">
            <div class="icons">
                <i class="fa-solid fa-users-gear"></i>
            </div>
            <div class="sideBarText">Roles & Permission</div>

            <div class="downIconArrow">
                <i class="fa-solid fa-caret-down"></i>
            </div>

            <div class="upIconArrow">
                <i class="fa-solid fa-caret-up"></i>
            </div>
            
        </div>

        <div class="dropMenu">
            <ul>
                <a href="./roles.html">
                    <li>
                        <span><i class="me-2 fa-solid fa-user-check"></i></span>
                        <span class="sideBarText"> Roles</span>
                    </li>
                </a>
               <a href="./permission.html">
                    <li>
                        <span><i class="me-2 fa-solid fa-shield-halved"></i></span>
                       <span class="sideBarText"> Permission</span>
                    </li>
               </a>
            </ul>
        </div>

       </div>

       <div class="dropDown">

        <div class="navWrapper">
            <div class="icons">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="sideBarText">Settings</div>
            <div class="downIconArrow">
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="upIconArrow">
                <i class="fa-solid fa-caret-up"></i>
            </div>
        </div>

        <div class="dropMenu">
            <ul>
                <a href="./generalSettings.html">
                    <li>
                        <span><i class="me-2 fa-solid fa-box"></i></span>
                       <span class="sideBarText"> General</span>
                    </li>
                </a>
                <a href="./authentication.html">
                    <li>
                        <span><i class="me-2 fa-solid fa-lock"></i></span>
                       <span class="sideBarText"> Auth&Registration</span>
                    </li>
                </a>
                <a href="./notifications.html">
                    <li>
                        <span><i class="me-2 fa-solid fa-bell"></i></span>
                        <span class="sideBarText">Notifications</span>
                    </li>
                </a>
            </ul>
        </div>

       </div>

        <a href="./announcements.html">
            <div class="navWrapper">
                <div class="icons">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="sideBarText">Announcement</div>
            </div>
        </a>
    </div>
   
</div>

<div class="main">

   @yield('content')
    
</div>


<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
         var data = google.visualization.arrayToDataTable([
         ['', ''],
         ['February 2021',  1000],
         ['',  10000],
         ['',  20000],
         ['',  10000],
         ['February 2022',  5000],
    ]);

        var options = {
            title: '',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
        }

</script>
<script src="{{asset('./script.js')}}"></script>

