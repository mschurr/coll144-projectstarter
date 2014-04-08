{{--
  This is the master layout for our book exchange application.
  --}}


{{-- Let's load any javascript assets that the layout requires. --}}
@script( URL::asset('js/jquery.min.js') )
@script( URL::asset('bookexchange/master.js') )

{{-- Let's load any style assets that the layout requires. --}}
@style( URL::asset('bookexchange/master.css') )

<div class="wrapper">
	<div class="content_wrapper">
    	<div class="content">
            <div class="left">
                @yield('content')
            </div>
            <div class="right">
                
                <div class="title">Book Exchange</div>
                
                @if($user !== null)
                	Welcome, {{{ $user }}}!<br />
                    
                    <ul class="side_navigation">
                    	<li><a href="{{{ URL::to('BookExchange.Home') }}}">Home</a></li>
                    	<li><a href="{{{ URL::to('BookExchange.MyInformation') }}}">My Information</a></li>
                        <li><a href="{{{ URL::to('BookExchange.MyBooks') }}}">My Books</a></li>
                        <li><a href="{{{ URL::to('BookExchange.Browse') }}}">Browse</a></li>
                    	<li><a href="{{{ URL::to('BookExchange.Logout') }}}">Log out</a></li>
                    </ul>
                @else
                	<ul class="side_navigation">
                        <li><a href="{{{ URL::to('BookExchange.Home') }}}">Home</a></li>
                    	<li><a href="{{{ URL::to('BookExchange.Login') }}}">Log in</a></li>
                    </ul>
                @endif
                                                                
            </div>
            
    	</div>
    </div>
    <br />
</div>