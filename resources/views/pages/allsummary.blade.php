
@extends('layout.app')

    @section('pages')

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Amount</th>
                </tr>
            </thead>

            <tbody>
            @if(isset($income) && $income->isNotEmpty())
            @foreach($income as $item)
                <tr>
                    <td data-label="Date">{{$item->custom_date}}</td>
                    <td data-label="Category">{{$item->category}}</td>
                    <td data-label="Type" style="color:green;">Income</td>
                    <td data-label="Amount">{{$item->amount}}</td>
                </tr>
            @endforeach
                
            @else
                <tr>
                    <td colspan="4" style="text-align: center;">No income records found.</td>
                </tr>
            @endif
            </tbody>

            <tbody>
            @if(isset($expense) && $expense->isNotEmpty())
            @foreach($expense as $item)
                <tr>
                    <td data-label="Date">{{$item->custom_date}}</td>
                    <td data-label="Category">{{$item->category}}</td>
                    <td data-label="Type" style="color:red;">Expense</td>
                    <td data-label="Amount">{{$item->amount}}</td>
                </tr>
            @endforeach
                
            @else
                <tr>
                    <td colspan="4" style="text-align: center;">No income records found.</td>
                </tr>
            @endif
            </tbody>




        </table>

        <div class="summary">
            <h3>Summary</h3>
            <p><strong>Total Income:</strong> $ {{$suminc }}</p>
            <p><strong>Total Expenses:</strong> $ {{ $sumexp}}</p>
            <p><strong>Net Balance:</strong> $ {{$balence }}</p>
        </div>
    </div>




@endsection