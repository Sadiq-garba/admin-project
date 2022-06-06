
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
                <img src="./assets/Dashboard.png" alt="Dashboard logo">
            </div>

            <div class="ms-3 roleText">/ Roles</div>
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
  
           <div class="col-10 contents">

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
              

             <div class="topHeader mt-5">
                <a href="./addRoles.html">
                    <div class="addRoles">
                        <span><i class="fa-solid fa-plus"></i></span>
                        <span>Add Roles</span>
                     </div>
                </a>
             </div>

            <div class="table-responsive ms-3 mt-3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">User</th>
                        <th scope="col">Dispaly Name</th>
                        <th scope="col">x of users with this role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       <td>Admin</td>
                       <td>Admin</td>
                       <td>144</td>
                       <td>
                        <div class="action">
                            <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                        </div>
                       </td>
                      </tr>

                      <tr>
                        <td>User</td>
                        <td>User</td>
                        <td>4123</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                         </div>
                     </td>
                      </tr>

                      <tr>
                        <td>Advanced</td>
                        <td>Advanced</td>
                        <td>2</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>144</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>144</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>144</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>144</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>144</td>
                        <td>
                         <div class="action">
                             <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                             <span><i class="delete fa-solid fa-basket-shopping"></i></span>
                         </div>
                        </td>
                      </tr>

                     
                    </tbody>
                  </table>
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
           
          <div class="topHeader mt-5">
             <a href="{{url('create-role')}}">
                 <div class="addRoles">
                     <span><i class="fa-solid fa-plus"></i></span>
                     <span>Add Roles</span>
                  </div>
             </a>
          </div>

         <div class="table-responsive ms-3 mt-3">
             <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">User</th>
                     <th scope="col">Dispaly Name</th>
                     <th scope="col">x of users with this role</th>
                     <th scope="col">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                     @if(count($post) > 0)
                     @foreach($post as $posts)
                   <tr>
                    <td>{{$posts->name}}</td>
                    <td>{{$posts->display_name}}</td>
                    <td>144</td>
                    <td>
                     <div class="action">
                         <span><i class="edit fa-solid fa-pen-to-square"></i></span>
                     </div>
                    </td>
                </tr>
                   @endforeach
                   @endif

              
                  
                
            


                  

                  
                 </tbody>
               </table>
         </div>

    </div>
    
    <script src="{{asset('./script.js')}}"></script>
</body>
</html>




