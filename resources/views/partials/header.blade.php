<header class="banner">
 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<div class="container">
		 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
		 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		 aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>
		 </button>
		<a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		 @if (has_nav_menu('primary_navigation'))
		 {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav pull-right']) !!}
		 @endif
		 </div>
	 </div>
 </nav>
</header>