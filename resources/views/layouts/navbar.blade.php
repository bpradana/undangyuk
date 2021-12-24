<nav>
    <a href="/" class="brand-logo center"><b>UndangYuk!</b></a>
    <div class="container">
        
        <div class="nav-wrapper">
            
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/designs">Designs</a>
                </li>
                @auth
                    <li>
                        <a href='/transactions'>Transactions</a>
                    </li>
                    <li>
                        <a href='/messages'>Messages</a>
                    </li>
                    <li id="nav-mobile" class="right hide-on-med-and-down">
                        <a href='/profile'>{{ auth()->user()->name }}</a>
                    </li>
                    <li id="nav-mobile" class="right hide-on-med-and-down">
                        <form action="/logout" method="post">
                            @csrf
                            <button class="btn pink accent-4" type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li id="nav-mobile" class="right hide-on-med-and-down">
                        <a href="/login" class="waves-effect waves-light btn pink accent-4">Log in</a>
                    </li>
                @endauth
            </ul>
            
        </div>
    </div>
</nav>