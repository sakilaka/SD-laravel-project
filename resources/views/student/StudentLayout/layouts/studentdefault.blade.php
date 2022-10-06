<!DOCTYPE html>
<html lang="en">
   <head>
   @include('student.StudentLayout.includes.header')

   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('student.StudentLayout.includes.sidebar')

            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('student.StudentLayout.includes.topbar')

               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                    @yield('student')

                  <!-- footer -->
                  @include('student.StudentLayout.includes.footer')

               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>

   </body>
</html>