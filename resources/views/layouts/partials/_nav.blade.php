<div class="inner-nav desktop-nav">
    <ul class="clearlist scroll-nav local-scroll">
        @if(Auth::guest())
           <li><a href="/auth/register">Opret Bruger</a></li>
           <li><a href="/bruger/login">Log ind</a></li>
        @else
           <li><a href="#" class="mn-has-sub">{{ Auth::check() ? "" . Auth::user()->firstName : ""}}
           <i class="fa fa-caret-down fa-lg"></i>
           </a>
                <ul class="mn-sub">
                    <li><a href="/dashboard"><i class="icon-list"></i> Dashboard</a></li>
                    <li><a href="#"><i class="icon-user"></i> Profil</a></li>
                    <li><a href="/auth/logout"><i class="icon-logout"></i> Log ud</a></li>
                </ul>
           </li>
        @endif
    </ul>
</div>