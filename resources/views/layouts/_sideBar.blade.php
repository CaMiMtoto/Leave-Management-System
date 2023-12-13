<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Main-->
    <div
        class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
        id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true"
        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
        data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
        <!--begin::Sidebar menu-->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
             class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
            <!--begin:Menu item-->
            <div class="menu-item here">
                <!--begin:Menu link-->
                <a href="" class="menu-link active">
                    <div class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="icon icon-tabler icon-tabler-dashboard" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none"
                                  d="M0 0h24v24H0z"
                                  fill="none"/>
                            <path
                                d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                            <path
                                d="M13.45 11.55l2.05 -2.05"/>
                            <path
                                d="M6.4 20a9 9 0 1 1 11.2 0z"/>
                        </svg>
                    </div>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item here">
                <!--begin:Menu link-->
                <a href="" class="menu-link">
                    <div class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"/>
                        </svg>
                    </div>
                    <span class="menu-title">Employees</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->


            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
										<span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-door-exit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 12v.01" /><path d="M3 21h18" /><path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5" /><path d="M14 7h7m-3 -3l3 3l-3 3" /></svg>
										</span>
										<span class="menu-title">
                                            Leave Requests
                                        </span>
										<span class="menu-arrow"></span>
									</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">All Requests</span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Pending Requests</span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">My Requests</span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Approved Requests</span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Rejected Requests</span>
                        </a>
                        <!--end:Menu link-->

                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
										<span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hierarchy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M6.5 17.5l5.5 -4.5l5.5 4.5" /><path d="M12 7l0 6" /></svg>
										</span>
										<span class="menu-title">
                                            Approval Workflows
                                        </span>
										<span class="menu-arrow"></span>
									</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Manage Workflows</span>
                        </a>
                        <!--end:Menu link-->
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Create Workflows</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
										<span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="icon icon-tabler icon-tabler-settings-2" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                      d="M0 0h24v24H0z"
                                                                                                      fill="none"/><path
                                                    d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"/><path
                                                    d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/></svg>
										</span>
										<span class="menu-title">
                                            Settings
                                        </span>
										<span class="menu-arrow"></span>
									</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Users</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end::Sidebar menu-->
        <!--begin::Footer-->
        <div
            class="app-sidebar-project-default app-sidebar-project-minimize text-center min-h-lg-400px flex-column-auto d-flex flex-column justify-content-end"
            id="kt_app_sidebar_footer">
            <!--begin::Title-->
            <h2 class="fw-bold text-gray-800">Welcome to Saul</h2>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="fw-semibold text-gray-700 fs-7 lh-2 px-7 mb-1">Join the movement make a
                difference.
            </div>
            <!--end::Description-->
            <!--begin::Illustration-->
            <img class="mx-auto h-150px h-lg-175px mb-4" src="assets/media/misc/saul-welcome.png" alt=""/>
            <!--end::Illustration-->
            <div class="text-center mb-lg-5 pb-lg-3">
                <a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_create_account">Get Started</a>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Main-->
</div>
