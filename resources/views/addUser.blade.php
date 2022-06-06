<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/users.css')}}">
    <script src="https://kit.fontawesome.com/ca2912634d.js" crossorigin="anonymous"></script>
    <title>SmartLog | Users</title>
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
            <div class="me-3 userText">Users | </div>
            <div>
                <img src="./assets/Dashboard.png" alt="Dashboard logo">
            </div>
            <div class="ms-3 userText">
                / Users
            </div>
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

    <section class="popUpWrapper">

        <div class="announcementPopUp p-2">
            <div class="headerPop mb-3">
                <div class="fw-bold">Announcement</div>
                <div class="viewAllAnnouncement fw-bold">View All</div>
            </div>

            <div class="latestAnnouncement mb-3">
                <div class="smartLogLogo">
                    <img src="./assets/smart1.png" alt="">
                </div>
                <div class="details">
                    <div class="name fw-bold">Dummy test</div>
                    <div class="message">This is Akinola</div>
                </div>

                <div class="time mt-3">3days ago</div>
            </div>   

            <div class="latestAnnouncement mb-3">
                <div class="smartLogLogo">
                    <img src="./assets/smart1.png" alt="">
                </div>
                <div class="details">
                    <div class="name fw-bold">Dummy test</div>
                    <div class="message">This is Akinola</div>
                </div>

                <div class="time mt-3">3days ago</div>
            </div>     
            
            <div class="latestAnnouncement mb-3">
                <div class="smartLogLogo">
                    <img src="./assets/smart1.png" alt="">
                </div>
                <div class="details">
                    <div class="name fw-bold">Dummy test</div>
                    <div class="message">This is Akinola</div>
                </div>

                <div class="time mt-3">3days ago</div>
            </div> 

            <div class="latestAnnouncement mb-3">
                <div class="smartLogLogo">
                    <img src="./assets/smart1.png" alt="">
                </div>
                <div class="details">
                    <div class="name fw-bold">Dummy test</div>
                    <div class="message">This is Akinola</div>
                </div>

                <div class="time mt-3">3days ago</div>
            </div> 
        </div>

    <div class="profileInfo p-2">
        <a href="./userDetails.html">
            <div class="mb-2">
                <span><i class="fa-solid fa-user"></i></span>
                <span>My profile</span>
            </div>
        </a>

       <a href="./session.html">
        <div class="mb-2">
            <span><i class="fa-solid fa-arrows-split-up-and-left"></i></span>
           <span> Active session</span>
        </div>
       </a>

        <a href="./index.html">
            <div class="mb-2">
                <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                <span>Logout</span>
            </div>
        </a>
    </div>
    </section>

    <section class="popUpWrapper">
        <div class="profileInfo p-2">
            <div>
                <span><i class="fa-solid fa-user"></i></span>
                <span>My profile</span>
            </div>
            <div>
                <span><i class="fa-solid fa-arrows-split-up-and-left"></i></span>
               <span> Active session</span>
            </div>
            <div>
                <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                <span>Logout</span>
            </div>
        </div>
    </section>

    <!-- <main class="containerWrapper container-fluid">

        <div class="row">

            <div class="col-2 sideBar">
                <div class="topSideBar">
                    <div class="smartLog mb-2">
                        <img src="./assets/smart.png" alt="">
                    </div>
                    <div class="smartLogText">Dummytest</div>
                </div>

                <div class="topIcons mt-2 mb-3">
                    <div><img src="./assets/settings.png" alt=""></div>
                    <a href="./index.html">
                        <div><img src="./assets/logout.png" alt=""></div>
                      </a>
                </div>

                <div class="sideBarContents">

                    <a href="./dashboard.html">
                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/Dashboard.svg" alt="Dashboard icon">
                            </div>
                            <div class="sideBarText">Dashboard</div>
                        </div>
                    </a>

                    <a href="./users.html">
                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/users.png" alt="User Icon">
                            </div>
                            <div class="sideBarText">Users</div>
                        </div>
                    </a>

                    <a href="./activityLog.html">
                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/Activity log.png" alt="Activity Log Icon">
                            </div>
                            <div class="sideBarText">Activity log</div>
                        </div>
                    </a>

                    <div class="dropDown">

                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/Role&Permit.png" alt="Role&Permit Icon">
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
                                    <li>Roles</li>
                                </a>
                                <a href="./permission.html">
                                    <li>Permission</li>
                                </a>
                            </ul>
                        </div>

                    </div>

                    <div class="dropDown">

                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/settings.png" alt="Settings Icon">
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
                                    <li>General</li>
                                </a>
                                <a href="./authentication.html">
                                    <li>Auth&Registration</li>
                                </a>
                                <a href="./notifications.html">
                                    <li>Notifications</li>
                                </a>
                            </ul>
                        </div>

                    </div>

                    <a href="./announcements.html">
                        <div class="navWrapper">
                            <div class="icons">
                                <img src="./assets/Announcement icon.png" alt="Announcement Icon">
                            </div>
                            <div class="sideBarText">Announcement</div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-10 contents mt-3 p-4">

                <div class="formContainer mb-5 p-4">

                    <div>
                        <h1>User details</h1>
                        <p>A general user profile information</p>
                    </div>

                    <form action="">
                        <div class="row g-3 mb-3">
                            <div class="col-lg">
                                <label for="">Role</label>
                                <select class="form-select">
                                    <option selected>Admin</option>
                                    <option value="1">Iopsum</option>
                                    <option value="2">Iopsum</option>
                                    <option value="3">Iopsum</option>
                                </select>
                            </div>
                            <div class="col-lg">
                                <label for="">Date of Birth</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-lg">
                                <label for="">Status</label>
                                <select class="form-select">
                                    <option selected>Active</option>
                                    <option value="1">Iopsum</option>
                                    <option value="2">Iopsum</option>
                                    <option value="3">Iopsum</option>
                                </select>
                            </div>
                            <div class="col-lg">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-lg">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="First name"
                                    aria-label="First name">
                            </div>
                            <div class="col-lg">
                                <label for="">Address</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-lg">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last Name">
                            </div>
                            <div class="col-lg">
                                <label for="">Country</label>
                                <select class="form-select">
                                    <option selected>Ghana</option>
                                    <option value="1">Iopsum</option>
                                    <option value="2">Iopsum</option>
                                    <option value="3">Iopsum</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="loginFormDetails p-4">

                    <div>
                        <h1>Login Details</h1>
                        <p>Details use for Authentication with the Application</p>
                    </div>

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" placeholder="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" placeholder="user name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>

                    </form>

                </div>

                <div class="mt-5">
                    <button type="submit" class="createUser">Create User</button>
                </div>

            </div>

        </div>

        </div>
    </main> -->


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

        @include('includes.messages')
        
        <div class="formContainer mb-5 p-4">
             
            <div>
                <h1>User details</h1>
                <p>A general user profile information</p>
            </div>

          

            <form action="{{ route('store-user') }}" method="POST">
                <div class="row g-3 mb-3">
                    <div class="col-md">
                        <label for="">Role</label>
                        <select class="form-select" name="role"> 
                            <option selected value="admin">Admin</option>
                            <option value="user">User</option>
                            <option value="super-admin">Super Admin</option>
                           
                        </select>
                    </div>
                    <div class="col-md">
                        <label for="">Date of Birth</label>
                        <input type="text" class="form-control" name='date_of_birth' placeholder="Eg: 2022-05-27">
                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md">
                        <label for="">Status</label>
                        <select class="form-select" name="status">
                            <option selected value='active'>Active</option>
                            <option value="banned">Banned</option>
                              <option value="unconfirmed">Unconfirmed</option>
                          
                        </select>
                    </div>
                    <div class="col-md">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="">
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md">
                        <label for="">First Name</label>
                        <input type="text"  name="first_name" class="form-control" placeholder="First name"
                            aria-label="First name">
                            @error('first_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                    </div>
                    <div class="col-md">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last name" aria-label="Last Name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
                    <div class="col-md">
                        <label for="">Country</label>
                        <select class="form-select" name="country">
                            <option value="Nigeria" selected >Nigeria</option>
                            <option value="Ghana"> Ghana</option>
                            
                          
                        </select>
                    </div>
                </div>
                @csrf
                 
                <div class="mt-5">
                    <button type="submit" class="createUser">Create User</button>
                </div>
           
            </form>
           
           
        </div>

            
      



        <div class="loginFormDetails p-4">

            <div>
                <h1>Login Details</h1>
                <p>Details use for Authentication with the Application</p>
            </div>
                 
         
         
         



            <form action="{{route('store-login')}}"  method="POST">
                <div class="mb-3">
                     <label class="form-label">Email</label>
                     <input type="email" name="email" placeholder="email" class="form-control">
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="user name">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                </div>

                <div class="mt-5">
                    <button type="submit" class="createUser">Create</button>
                </div>
                 
                @csrf
             
            </form>

         
        </div>

       

    </div>
        
    <script src="./script.js"></script>
</body>

</html>
