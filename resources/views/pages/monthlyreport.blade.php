@extends('layout.app')

@section('pages')

<div class="table-container">
    <div class="filters">
        <form action="{{ route('report.filter') }}" method="post">
            @csrf
            <label for="select-year">Select Year</label>
            <select id="select-year" name="year">
                <option value="" disabled selected>Select a Year</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>
            @error('year')
                <p class="color">{{ $message }}</p>
            @enderror

            <label for="select-month">Select Month</label>
            <select id="select-month" name="month">
                <option value="" disabled selected>Select a Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            @error('month')
                <p class="color">{{ $message }}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>


 
    <!-- Table  -->
    <div class="table-container">
        <h1>Monthly Income &amp; Expenses</h1>

  
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th> Date </th>
                    <th> Type </th>
                    <th>Category</th>
                    <th>Amount</th>
                </tr>
            </thead>
            @if(isset($income) && $income->isNotEmpty())
                @foreach($income as $item)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($item->custom_date)->format('d-m-Y') }}</td>
                    <td style="color:green;">Income</td>
                    <td>{{ ucfirst($item->category) }}</td>
                    <td>${{ number_format($item->amount, 2) }}</td>
                </tr>
                @endforeach
                
            @else
                <tr>
                    <td colspan="4" style="text-align: center;">No income records found.</td>
                </tr>
            @endif


            <thead>
                <tr>
                    <th> Date </th>
                    <th> Type </th>
                    <th>Category</th>
                    <th>Amount</th>
                </tr>
            </thead>
            @if(isset($expense) && $expense->isNotEmpty())
                @foreach($expense as $item)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($item->custom_date)->format('d-m-Y') }}</td>
                    <td style="color:red;">Expense</td>
                    <td>{{ ucfirst($item->category) }}</td>
                    <td>${{ number_format($item->amount, 2) }}</td>
                </tr>
                @endforeach
                
            @else
                <tr>
                    <td colspan="4" style="text-align: center;">No expense records found.</td>
                </tr>
            @endif

        </table>

    </div>


</div>

@endsection
