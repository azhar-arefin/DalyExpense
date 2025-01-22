   <!-- =============== Navigation ================ -->
   <div class="container">
    <div class="navigation">
        <ul>
        @if (Route::has('login'))
            @auth
            <li>
                <a href="{{route('/')}}">
                    <span class="icon">
                        <img src="{{asset('imgs/daily-expense.png')}}" alt="" Style="width:30px">
                    </span>
                    <span class="title">DalyExpense</span>
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
                <a href="{{route('addincome')}}">
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
                <a href="{{route('summary-report')}}">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">All Summary</span>
                </a>
            </li>

            <li>
                <a href="{{route('incomelist')}}">
                    <span class="icon">
                        <ion-icon name="list-outline"></ion-icon>
                    </span>
                    <span class="title">Income List</span>
                </a>
            </li>
            <li>
                <a href="{{route('expenselist')}}">
                    <span class="icon">
                        <ion-icon name="list-outline"></ion-icon>
                    </span>
                    <span class="title">Expense List</span>
                </a>
            </li>

            <li>
                <a href="{{route('monthlyreport')}}">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Monthly Report</span>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
            @else    
                <li>
                    <a href="{{route('/login')}}">
                        <span class="icon">
                            <ion-icon name="list-outline"></ion-icon>
                        </span>
                        <span class="title">Log-in</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('/registration')}}">
                        <span class="icon">
                            <ion-icon name="bar-chart-outline"></ion-icon>
                        </span>
                        <span class="title">Registration</span>
                    </a>
                </li>
            
                @endauth   
        @endif
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
            <a href="{{route('profile')}}">
            <img src="{{asset('imgs/customer01.jpg')}}" alt="">
            </a>
            </div>
        </div>

        
       
        