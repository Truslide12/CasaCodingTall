<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sidebar">
    <div class="container sidebar-sticky">
        <div class="nav-content d-flex"> 
            <!-- Logo Start -->
            <div class="logo position-relative">
                <a href="/">
                    <img src="{{secure_asset('/images/casacodinglogowhite.png')}}" style="width:35px">
                </a>
            </div>
            <!-- Logo End -->

            <!-- Language Switch Start -->
            <!-- <div class="language-switch-container">
                <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">EN</a>
                    <a href="#" class="dropdown-item active">ES</a>
                    <a href="#" class="dropdown-item">JP</a>
                </div>
            </div> -->
            <!-- Language Switch End -->

            <!-- User Menu Start -->
            <div class="user-container d-flex">
                <a href="/about" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="profile" alt="profile" src="{{secure_asset('/images/CSAheadshot1.jpg')}}" />
                    <div class="name">Carlos Aragon</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end user-menu wide">
                    <div class="row mb-0 ms-0 me-0">
                        <div class="col-12 ps-1 mb-0 align-middle">
                            <div class="text-medium text-primary">Welcome to CasaCoding!</div>
                        </div>
                    </div>

                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-3 pt-3">
                            <div class="separator-light"></div>
                        </div>
                        <div class="col-12 ps-1 pe-1">
                            <span class="align-middle">We look forward to helping you build your dream!</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Menu End -->

            <!-- Icons Menu Start -->
            <ul class="list-unstyled list-inline text-center menu-icons">
                <!-- <li class="list-inline-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                        <i data-acorn-icon="search" data-acorn-size="18"></i>
                    </a>
                </li> -->
                <li class="list-inline-item">
                    <a href="/about">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="//github.com/Truslide12?tab=repositories">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                        <!-- <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i> -->
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="//www.linkedin.com/in/carlos-s-aragon/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                    </a>
                </li>
                <!-- <li class="list-inline-item">
                    <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                        <div class="position-relative d-inline-flex">
                            <i data-acorn-icon="bell" data-acorn-size="18"></i>
                            <span class="position-absolute notification-dot rounded-xl"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                        <div class="scroll">
                            <ul class="list-unstyled border-last-none">
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="/img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">Joisse Kaycee just sent a new comment!</a>
                                    </div>
                                </li>
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="/img/profile/profile-2.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">New order received! It is total $147,20.</a>
                                    </div>
                                </li>
                                <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="/img/profile/profile-3.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">3 items just added to wish list by a user!</a>
                                    </div>
                                </li>
                                <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                                    <img src="/img/profile/profile-6.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                    <div class="align-self-center">
                                        <a href="#">Kirby Peters just sent a new message!</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> -->
            </ul>
            <!-- Icons Menu End -->

            <!-- Menu Start -->
            <div class="menu-container flex-grow-1">
                <ul id="menu" class="menu">
                    <li>
                        <a href="#work">
                            <i data-acorn-icon="quiz" class="icon" data-acorn-size="18"></i>
                            <span class="label">Work</span>
                        </a>
                        <ul id="work">
                            <li>
                                <a href="//zingreturns.com">
                                    <span class="label">ZingReturns</span>
                                </a>
                            </li>
                            <li>
                                <a href="/mhs">
                                    <span class="label">MHS America</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#courses">
                            <i data-acorn-icon="whiteboard" class="icon" data-acorn-size="18"></i>
                            <span class="label">Projects</span>
                        </a>
                        <ul id="courses">
                            <li>
                                <a href="//rumrunner.casacoding.com">
                                    <span class="label">RumRunner</span>
                                </a>
                            </li>
                            <li>
                                <a href="//myrolodex.casacoding.com">
                                    <span class="label">MyRolodex</span>
                                </a>
                            </li>
                            <li>
                                <a href="//gameranker.casacoding.com">
                                    <span class="label">Game Ranker</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="//rumrunner.casacoding.com">
                                    <span class="label">Rum Runner</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="/about">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="icon" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                            </svg>
                            <span class="label">About</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="/contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="icon" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                            <span class="label">Contact</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Scrollspy Mobile Button Start -->
                <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                    <i data-acorn-icon="menu-dropdown"></i>
                </a>
                <!-- Scrollspy Mobile Button End -->

                <!-- Scrollspy Mobile Dropdown Start -->
                <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                <!-- Scrollspy Mobile Dropdown End -->

                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-acorn-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>
</nav>