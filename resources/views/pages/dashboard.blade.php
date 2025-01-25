@extends('layout.app')

  
    @section('pages')      
 <!-- ======================= Cards ================== -->
        <div class="cardBox">
             <!-- Income Card -->
            <div class="card card-1">
                <div>   
                    <div class="numbers">${{ $suminc }} </div> 
                    <div class="cardName">Income</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>

            <!-- Expense Card -->
            <div class="card card-2">
                <div>
                    <div class="numbers">${{ $sumexp }} </div>
                    <div class="cardName">Expense</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="card-outline"></ion-icon>
                </div>
            </div>

            <!-- Balance Card -->
            <div class="card card-4">
                <div>
                    <div class="numbers">${{$balence}} </div>
                    <div class="cardName">Balance</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
            </div>


            <!-- Monthly Report -->
            <div class="card card-1">
                <div>
                    <div class="cardName"><a href="{{url('monthlyreport')}}">Monthly Report</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="document-text-outline"></ion-icon>
                </div>
            </div>

            <!-- Income List -->
            <div class="card card-2">
                <div>
                    <div class="cardName"><a href="{{url('incomelist')}}">Income List</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="receipt-outline"></ion-icon>
                </div>
            </div>

            <!-- Expense List -->
            <div class="card card-3">
                <div>
                    <div class="cardName"><a href="{{url('expenselist')}}">Expense List</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="list-circle-outline"></ion-icon>
                </div>
            </div>

            <!-- Notes -->
            <div class="card card-4">
                <div>
                    <div class="cardName"><a href="">Notes</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="pencil-outline"></ion-icon>
                </div>
            </div>

            <!-- Calculator -->
            <div class="card card-4">
                <div>
                    <div class="cardName"><a href="{{url('calculator')}}">Calculator</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="calculator-outline"></ion-icon>
                </div>
            </div>

            <!-- Calender -->
            <div class="card card-4">
                <div>
                    <div class="cardName"><a href="{{url('calender')}}">Calender</a></div>
                </div>
                <div class="iconBx">
                    <ion-icon name="calendar-outline"></ion-icon>
                </div>
            </div>

        </div>

           
                <!-- ======================= Cards ================== -->
                <div class="link-container"> 
                    <a href="{{route('addincome')}}" class="deposit">
                        <i class="fas fa-plus-circle"></i> Add Income
                    </a>
                    <a href="{{route('addexpense')}}" class="expense">
                        <i class="fas fa-minus-circle"></i> Add Expense
                    </a>
                </div>


                @endsection               