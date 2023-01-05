<<<<<<< HEAD
    <div class="container mt-2">
        <nav class="navbar navbar-expand-sm navbar-dark rounded-4" style="background-color: #2DCDDF;">
=======
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: var(--bs-purple);">
>>>>>>> 81088498dbb225c74f765f155aecd61344ea86e2
            <div class="container-fluid">

                <a class="navbar-brand" href="#">Forum</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav">
<<<<<<< HEAD

=======
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Posts' ? 'active border-bottom' : '' }}"
                                href="/posts">Posts</a>
                        </li>
>>>>>>> 81088498dbb225c74f765f155aecd61344ea86e2
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Posts' ? 'active border-bottom' : '' }}" href="/posts">Posts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'About' ? 'active border-bottom' : '' }}" href="/">About</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto mr-2">
                        @auth
<<<<<<< HEAD
                        <li class="nav-item dropdown mr-4">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><span class="align-text-bottom" data-feather='log-out'></span>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
=======
                            <li class="nav-item dropdown mr-4">
                                <a class="nav-link dropdown-toggle active" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit"><span class="align-text-bottom"
                                                    data-feather='log-out'></span> Logout</button>
                                        </form>
                                    </li>
                                    <hr class="my-0">
                                </ul>
                            </li>
>>>>>>> 81088498dbb225c74f765f155aecd61344ea86e2
                        @else
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Login' ? 'active border-bottom' : '' }}" aria-current="page" href="/login">Login</a>
                        </li>
                        @endauth
                    </ul>

                </div>
            </div>
        </nav>



    </div>