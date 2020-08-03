<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

	<nav id="compactSidebar">

		<div class="theme-logo">
			<a href="{{ route('manage') }}">
				<img src="{{ asset('assets/manage/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
			</a>
		</div>

		<ul class="menu-categories">

			<li id="menu-dashboard" class="menu">
				<a href="#dashboard" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
								<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
								<polyline points="9 22 9 12 15 12 15 22"></polyline>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Dashboard</span></div>
			</li>

			<li id="menu-user" class="menu">
				<a href="#users" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
								<circle cx="9" cy="7" r="4"></circle>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
								<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Users</span></div>
			</li>

			@if (Auth::user()->admin)
			<li id="menu-about" class="menu">
				<a href="#about" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
								<rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
								<rect x="9" y="9" width="6" height="6"></rect>
								<line x1="9" y1="1" x2="9" y2="4"></line>
								<line x1="15" y1="1" x2="15" y2="4"></line>
								<line x1="9" y1="20" x2="9" y2="23"></line>
								<line x1="15" y1="20" x2="15" y2="23"></line>
								<line x1="20" y1="9" x2="23" y2="9"></line>
								<line x1="20" y1="14" x2="23" y2="14"></line>
								<line x1="1" y1="9" x2="4" y2="9"></line>
								<line x1="1" y1="14" x2="4" y2="14"></line>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>About</span></div>
			</li>

			<li id="menu-resume" class="menu">
				<a href="#resume" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
								<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Resume</span></div>
			</li>

			<li id="menu-portfolio" class="menu">
				<a href="#portfolio" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
								<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
								<polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
								<line x1="12" y1="22.08" x2="12" y2="12"></line>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Portfolio</span></div>
			</li>

			<li id="menu-blog" class="menu">
				<a href="#blog" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
								<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
								<rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Blog</span></div>
			</li>
			@endif

			<li id="menu-info" class="menu">
				<a href="#info" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
								<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
								<line x1="3" y1="9" x2="21" y2="9"></line>
								<line x1="9" y1="21" x2="9" y2="9"></line>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Info</span></div>
			</li>

			<li id="menu-contact" class="menu">
				<a href="#contact" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
								<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
								<polyline points="13 2 13 9 20 9"></polyline>
							</svg>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Contact</span></div>
			</li>

			{{-- <li class="menu">
                <a href="#more" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Extra Elements</span></div>
            </li> --}}
		</ul>

		<div class="external-links">
			<a href="{{ route('about') }}">
				<img class="img-fluid" src="{{ asset('assets/manage/assets/img/logo.png') }}" alt="">
				<div class="tooltip"><span>adityacprtm.com</span></div>
			</a>
		</div>
	</nav>

	<div id="compact_submenuSidebar" class="submenu-sidebar">

		<div class="theme-brand-name">
			<a href="{{ route('manage') }}">Adityacprtm</a>
		</div>

		<div class="submenu" id="dashboard">
			<div class="category-info">
				<h5>Dashboard</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#dashboard">
				<li class="">
					<a href="{{ route('manage') }}">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
							<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
							<path d="M22 12A10 10 0 0 0 12 2v10z"></path>
						</svg> Dashboard
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="users">
			<div class="category-info">
				<h5>Users</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#users">
				@if (Auth::user()->admin)
				<li class="">
					<a href="{{ route('admin.manage.users') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Users List
					</a>
				</li>
				@endif
				<li class="">
					<a href="{{ route('manage.user.profile') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Profile
					</a>
				</li>
				<li class="">
					<a href="{{ route('manage.user.setting') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Account Settings
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="about">
			<div class="category-info">
				<h5>About</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#about">
				<li class="">
					<a href="{{ route('manage.about.me') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> About me
					</a>
				</li>
				<li>
					<a href="{{ route('manage.about.doing') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> What I'am Doing
					</a>
				</li>
				<li>
					<a href="{{ route('manage.about.client') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Client
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="resume">
			<div class="category-info">
				<h5>Resume</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#resume">
				<li>
					<a href="{{ route('manage.resume.education') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Education
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.experience') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Experience
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.skill') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Skills
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.codeskill') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Code Skills
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="portfolio">
			<div class="category-info">
				<h5>Components</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#portfolio">
				<li>
					<a href="{{ route('manage.portfolio.index') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Items Portfolio
					</a>
				</li>
				<li>
					<a href="{{ route('manage.portfolio.category') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Category
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="blog">
			<div class="category-info">
				<h5>Blog</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#blog">
				<li>
					<a href="{{ route('manage.blog') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Blog
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="info">
			<div class="category-info">
				<h5>Info</h5>
				<p>Berisi informasi personal pemilik web.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#info">
				<li>
					<a href="{{ route('manage.info') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span>Info
					</a>
				</li>
			</ul>
		</div>

		<div class="submenu" id="contact">
			<div class="category-info">
				<h5>Contact</h5>
				<p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="submenu-list" data-parent-element="#contact">
				<li>
					<a href="{{route('manage.contact')}}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Contact List
					</a>
				</li>
			</ul>
		</div>

		{{-- <div class="submenu" id="more">
            <div class="category-info">
                <h5>Extra Elements</h5>
                <p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <ul class="submenu-list" data-parent-element="#more">

                <li class="sub-submenu">
                    <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth" aria-expanded="false">
                        <div> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg></span> Authentication</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                        <li>
                            <a href="auth_login.html"> Login </a>
                        </li>
                        <li>
                            <a href="auth_login_boxed.html"> Login Boxed </a>
                        </li>
                        <li>
                            <a href="auth_register.html"> Register </a>
                        </li>
                        <li>
                            <a href="auth_register_boxed.html"> Register Boxed </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen.html"> Unlock </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery.html"> Recover ID </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="dragndrop_dragula.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> Drag and Drop </a>
                </li>
                <li>
                    <a href="charts_apex.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> Charts </a>
                </li>
                <li>
                    <a href="map_jvector.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span> Maps </a>
                </li>
                <li class="sub-submenu">
                    <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit" aria-expanded="false">
                        <div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg></span> Starter Kit</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <ul id="starter-kit" class="collapse" data-parent="#compact_submenuSidebar">
                        <li>
                            <a href="starter_kit_blank_page.html"> Blank Page </a>
                        </li>
                        <li>
                            <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                        </li>
                        <li>
                            <a href="starter_kit_boxed.html"> Boxed </a>
                        </li>
                    </ul>

            </ul>
        </div> --}}

	</div>

</div>
<!--  END SIDEBAR  -->