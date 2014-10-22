<div class="inner-nav desktop-nav">
    <ul class="clearlist scroll-nav local-scroll">
        @if(Auth::guest())
           <li><a href="/auth/register">Opret Bruger</a></li>
           <li><a href="/auth/login">Log ind</a></li>
        @else
           <li><a href="/dashboard">Dashboard</a></li>
           <li><a href="/auth/logout">Log ud</a></li>
        @endif
    </ul>
</div>