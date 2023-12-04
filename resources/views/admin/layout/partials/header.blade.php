<header>
    <div class="top-bar-title">
        <h1>@yield('title')</h1>
    </div>
    <span>{{trans_choice('admin/user-area.welcome', 'M')}}</span>
    <div class="top-bar-hamburguer">
        <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
        </svg>
        </button>
    </div>
</header>