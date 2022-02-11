<style scoped>
    header {
        text-align: center;
    }

    header nav {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    header nav ul {
        display: flex;
        list-style: none;
        padding: 0;
    }

    ul li {
        padding: 0 1em;
    }

    li a {
        text-decoration: none;
        color: blue;
    }

    li a:hover {
        cursor: pointer;
        color: red;
    }

</style>

<header>
    <h2>
        My Men&ugrave;
    </h2>
    <nav>
        <ul>
            <li><a href="{{ route('welcome') }}">Welcome!</a></li>
            <li><a href="{{ route('andrea') }}">Andrea</a></li>
            <li><a href="{{ route('simone') }}">Simone</a></li>
            <li><a href="{{ route('lenticchie') }}">Lenticchie</a></li>
        </ul>
    </nav>
</header>
