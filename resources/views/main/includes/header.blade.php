<header class="header box">
	<div class="header__left">
		<div class="header__photo">
			<img class="header__photo-img" src="{!! asset(Info::where('key','PROFILE_IMAGE')->value('value')) !!}" alt="Aditya Chamim Pratama">
		</div>
		<div class="header__base-info">
			<h4 class="title titl--h4">{!! Info::where('key','FIRST_NAME')->value('value') !!} <span class="weight--500">{!! Info::where('key','LAST_NAME')->value('value') !!}</span></h4>
			<div class="status">{!! Info::where('key','HEADLINE')->value('value') !!}</div>
			<ul class="header__social">
				<li><a target="_blank" href="{!! Info::where('key','LINK_FACEBOOK')->value('value') !!}"><i class="font-icon icon-facebook1"></i></a></li>
				<li><a target="_blank" href="{!! Info::where('key','LINK_TWITTER')->value('value') !!}"><i class="font-icon icon-twitter1"></i></a></li>
				<li><a target="_blank" href="{!! Info::where('key','LINK_INSTAGRAM')->value('value') !!}"><i class="font-icon icon-instagram1"></i></a></li>
				<li><a target="_blank" href="{!! Info::where('key','LINK_LINKEDIN')->value('value') !!}"><i class="font-icon icon-linkedin1"></i></a></li>
				<li><a target="_blank" href="{!! Info::where('key','LINK_GITHUB')->value('value') !!}"><i class="font-icon icon-github1"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="header__right">
		<ul class="header__contact">
			<li><span class="overhead">Email</span><a href="mailto:{!! Info::where('key','EMAIL')->value('value') !!}">{!! Info::where('key','EMAIL')->value('value') !!}</a></li>
			<li><span class="overhead">Phone</span>{!! Info::where('key','PHONE_NUMBER')->value('value') !!}</li>
		</ul>
		<ul class="header__contact">
			<li><span class="overhead">Birthday</span>{!! Info::where('key','BIRTHDAY')->value('value') !!}</li>
			<li><span class="overhead">Location</span>{!! Info::where('key','ADDRESS')->value('value') !!}</li>
		</ul>
	</div>
</header>