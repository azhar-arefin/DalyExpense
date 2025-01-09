   <!-- =============== Navigation ================ -->
   <div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">Brand Name</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li>
                <a href="{{route('addIncome')}}">
                    <span class="icon">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </span>
                    <span class="title">Add Income</span>
                </a>
            </li>

            <li>
                <a href="{{route('addexpense')}}">
                    <span class="icon">
                        <ion-icon name="cash-outline"></ion-icon>
                    </span>
                    <span class="title">Add Expense</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">All Summary</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="list-outline"></ion-icon>
                    </span>
                    <span class="title">Income List</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="list-outline"></ion-icon>
                    </span>
                    <span class="title">Expense List</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Monthly Report</span>
                </a>
            </li>

            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>

    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="{{asset('imgs/customer01.jpg')}}" alt="">
            </div>
        </div>