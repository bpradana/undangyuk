<nav>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/designs">Designs</a>
        </li>
        @auth
            <li>
                <a>{{ auth()->user()->name }}</a>
            </li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <li>
                <a href="/login">Login</a>
            </li>
        @endauth
    </ul>
</nav>