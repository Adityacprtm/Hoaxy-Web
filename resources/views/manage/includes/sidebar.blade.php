<div class="sidebar-wrapper sidebar-theme">

	<nav id="compactSidebar">
		<div class="theme-logo">
			<a href="{{ route('manage') }}">
				<img src="{{ asset('assets/manage/assets/img/logo.png') }}" class="navbar-logo" alt="logo">
			</a>
		</div>
		<ul class="menu-categories">
			<li id="menu-dashboard" class="menu">
				<a href="#dashboard" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-gem"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Dashboard</span></div>
			</li>
			<li id="menu-user" class="menu">
				<a href="#users" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-user"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Users</span></div>
			</li>
			{{-- @if (Auth::user()->admin) --}}
			<li id="menu-info" class="menu">
				<a href="#info" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-id-badge"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Info</span></div>
			</li>
			<li id="menu-about" class="menu">
				<a href="#about" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-id-card"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>About</span></div>
			</li>
			<li id="menu-resume" class="menu">
				<a href="#resume" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-file"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Resume</span></div>
			</li>
			<li id="menu-portfolio" class="menu">
				<a href="#portfolio" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-images"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Portfolio</span></div>
			</li>
			<li id="menu-blog" class="menu">
				<a href="#blog" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-newspaper"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Blog</span></div>
			</li>
			<li id="menu-contact" class="menu">
				<a href="#contact" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-comments"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Contact</span></div>
			</li>
			<li id="menu-journey" class="menu">
				<a href="#journey" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-flag"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Journey</span></div>
			</li>
			<li id="menu-sidebar" class="menu">
				<a href="#sidebar" data-active="false" class="menu-toggle">
					<div class="base-menu">
						<div class="base-icons">
							<i class="far fa-list-alt"></i>
						</div>
					</div>
				</a>
				<div class="tooltip"><span>Menu Sidebar</span></div>
			</li>
			{{-- @endif --}}
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
				{{-- <p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p> --}}
			</div>
			<ul class="submenu-list" data-parent-element="#dashboard">
				<li class="">
					<a href="{{ route('manage') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Dashboard
					</a>
				</li>
			</ul>
		</div>
		<div class="submenu" id="users">
			<div class="category-info">
				<h5>Users</h5>
			</div>
			<ul class="submenu-list" data-parent-element="#users">
				@if (Auth::user()->admin)
				<li class="">
					<a href="{{ route('admin.manage.users') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Users List
					</a>
				</li>
				@endif
				<li class="">
					<a href="{{ route('manage.user.profile') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Profile
					</a>
				</li>
				<li class="">
					<a href="{{ route('manage.user.setting') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#about">
				<li class="">
					<a href="{{ route('manage.about.me') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> About me
					</a>
				</li>
				<li>
					<a href="{{ route('manage.about.doing') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> What I'am Doing
					</a>
				</li>
				<li>
					<a href="{{ route('manage.about.client') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#resume">
				<li>
					<a href="{{ route('manage.resume.education') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Education
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.nonformal-education') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Nonformal Education
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.experience') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Experience
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.skill') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Skills
					</a>
				</li>
				<li>
					<a href="{{ route('manage.resume.codeskill') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#portfolio">
				<li>
					<a href="{{ route('manage.portfolio.index') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Items Portfolio
					</a>
				</li>
				<li>
					<a href="{{ route('manage.portfolio.category') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#blog">
				<li>
					<a href="{{ route('manage.blog') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#info">
				<li>
					<a href="{{ route('manage.info') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
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
			</div>
			<ul class="submenu-list" data-parent-element="#contact">
				<li>
					<a href="{{route('manage.contact')}}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Contact List
					</a>
				</li>
			</ul>
		</div>
		<div class="submenu" id="journey">
			<div class="category-info">
				<h5>Contact</h5>
			</div>
			<ul class="submenu-list" data-parent-element="#journey">
				<li>
					<a href="{{route('manage.journey')}}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Journey List
					</a>
				</li>
			</ul>
		</div>
		<div class="submenu" id="sidebar">
			<div class="category-info">
				<h5>Sidebar Menu</h5>
			</div>
			<ul class="submenu-list" data-parent-element="#sidebar">
				<li>
					<a href="{{ route('manage.sidebar.index') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Menu
					</a>
				</li>
				<li>
					<a href="{{ route('manage.sidebar.category') }}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
								class="feather feather-circle">
								<circle cx="12" cy="12" r="10"></circle>
							</svg>
						</span> Category
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>