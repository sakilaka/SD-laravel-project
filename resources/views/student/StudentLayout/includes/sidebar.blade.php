<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('Student/images/logo/logo_icon.png') }}" alt="#" /></a>
         </div>
      </div>
      <div class="sidebar_user_info">
         <div class="icon_setting"></div>
         <div class="user_profle_side">
            <div class="user_img"><img class="img-responsive" src="{{ asset('Student/images/layout_img/user_img.jpg') }}" alt="#" /></div>
            <div class="user_info">
               <h6>{{Session::get('username') }}</h6>
               <p><span class="online_animation"></span> Online</p>
            </div>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>General</h4>
      <ul class="list-unstyled components">
         <li class="active">
            <a href="{{ url('StudentDashboard') }}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>

         </li>
         <li class="active">
            <a href="{{ url('view-enroll') }}"><i class="fa fa-dashboard yellow_color"></i> <span>View Enrollment</span></a>

         </li>





      </ul>
   </div>
</nav>