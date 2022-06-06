
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/roles.css')}}">
    <script src="https://kit.fontawesome.com/ca2912634d.js" crossorigin="anonymous"></script>
    <title>SmartLog | Roles</title>
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
            <div class="me-3 roleText fw-bold">Roles | </div>
            <div>
                <img src="{{asset('./assets/Dashboard.png"')}} alt="Dashboard logo">
            </div>

            <div class="ms-3 roleText">/ Roles</div>
        </div>
        <div class="topRight">
         <div class="me-5 announcementBtn">
             <img src="{{asset('./assets/Announcement.png')}}" alt="Announcement logo">
         </div>
 
         <div class="profile">
             <span class="logoImg">
                 <img src="{{asset('./assets/smart1.png')}}" alt="">
             </span>
 
             <span class="ms-3">
                 <img src="{{asset('./assets/Vector.png')}}" alt="">
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
<!-- 
    <main class="containerWrapper container-fluid">

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
                        <a href="./authRegistration.html">
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
  
           <div class="col-10 contents">

            <div class="rolesPermissionWrapper mb-5">
                <div class="roles">
                    <span><i class="fa-solid fa-user-check"></i></span>
                   <span> Roles</span>
                  </div>
                <div class="permission">
                    <span><i class="fa-solid fa-shield-halved"></i></span>
                   <span> Permission</span>
                  </div>
             </div>

             <div class="createRoleContainer ms-3 mt-5 p-4">
                 <h1>Role Details</h1>
                 <p>A general role information</p>

                 <form>

                    <div class="mb-3">
                      <label for="" class="form-label">Name</label>
                      <input type="email" class="form-control" placeholder="Role Name">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Display Name</label>
                      <input type="password" class="form-control" id="" placeholder="Display Name">
                    </div>

                    <div class="mb-3">
                        <label for="floatingTextarea">Description</label>
                        <textarea class="form-control"  id="floatingTextarea"></textarea>
                    </div>

                  </form>
             </div>

             <div class="ms-3 mt-5">
                <button type="submit" class="createRoleBtn">Create Role</button>
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
        <div class="rolesPermissionWrapper">
            <a class="roles" href="./roles.html">
                <div>
                    <span><i class="fa-solid fa-user-check"></i></span>
                    <span> Roles</span>
                 </div>
            </a>

            <a class="permission" href="./permission.html">
                 <div>
                   <span><i class="fa-solid fa-shield-halved"></i></span>
                   <span> Permission</span>
                 </div>
            </a>
         </div>

         <div class="createRoleContainer ms-3 mt-5 p-4">
             <h1>Role Details</h1>
             <p>A general role information</p>

             <form method="POST" action="{{route('store-role')}}">

            

                <div class="mb-3">
                    @include('includes.messages')

                </div>   

                <div class="mb-3">
                  <label for="" class="form-label">Name</label>
                  <input type="name" name="name" class="form-control" placeholder="Role Name">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Display Name</label>
                  <input type="text" name="display_name" class="form-control" id="" placeholder="Display Name">
                </div>

                <div class="mb-3">
                    <label for="floatingTextarea">Description</label>
                    <textarea class="form-control" name="description" id="floatingTextarea"></textarea>
                </div>
                  
                @csrf
               
                <div class="ms-3 mt-5">
                    <button type="submit" class="createRoleBtn">Create Role</button>
                 </div>
              </form>
         </div>

        
    </div>
    
    <script src="./script.js"></script>
</body>
</html>




