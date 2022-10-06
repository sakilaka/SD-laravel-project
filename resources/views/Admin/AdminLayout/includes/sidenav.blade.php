<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('main-dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#insertSession" aria-expanded="false" aria-controls="collapseLayouts">
                        <div>
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Manage Session
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                <div class="collapse" id="insertSession" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('session') }}">Insert Session</a>
                        <a class="nav-link" href="{{ url('sessioninfo') }}">List Session</a>
                        
                    </nav>
                </div>
             </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div>
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Manage Course
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('course') }}">Insert Courses</a>
                        <a class="nav-link" href="{{ url('courseinfo') }}">List Courses</a>
                        
                    </nav>
                </div>
             </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#insert" aria-expanded="false" aria-controls="collapseLayouts">
                    <div>
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Manage Section
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="insert" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('section') }}">Insert Section</a>
                        <a class="nav-link" href="{{ url('sectioninfo') }}">List Section</a>
                        
                    </nav>
                </div>
             </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#assign" aria-expanded="false" aria-controls="collapseLayouts">
                    <div>
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                   Manage Teacher
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="assign" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('assign-teacher') }}">Assign Teacher</a>
                        <a class="nav-link" href="{{ url('view-teacher') }}">List Teacher</a>
                        
                    </nav>
                </div>
             </div>


                   


                <a class="nav-link collapsed mt-5" href="{{ url('sessioninfo') }}" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Registration
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('register') }}">User Registration</a>
                                
                                
                            </nav>
                        </div>                                                     
                    </nav>
                </div>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>