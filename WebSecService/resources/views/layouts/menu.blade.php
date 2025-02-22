<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="/">WebSecService</a>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <!-- Dropdown Menu for Math Operations -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('multable*', 'prime', 'even', 'factorial') ? 'active' : '' }}" href="#" id="mathDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Math Operations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="mathDropdown">
                        <!-- Multiplication Table Link -->
                        <li>
                            <a class="dropdown-item {{ request()->is('multable*') ? 'active' : '' }}" href="/multable">Multiplication Table</a>
                        </li>
                        <!-- Prime Numbers Link -->
                        <li>
                            <a class="dropdown-item {{ request()->is('prime') ? 'active' : '' }}" href="/prime">Prime Numbers</a>
                        </li>
                        <!-- Even Numbers Link -->
                                                    <a class="dropdown-item {{ request()->is('even') ? 'active' : '' }}" href="/even">
                                <i class="fas fa-list-ol me-2"></i> Even Numbers
                            </a>
                            <a class="dropdown-item {{ request()->is('factorial') ? 'active' : '' }}" href="/factorial">
                                <i class="fas fa-calculator me-2"></i> Factorial
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>