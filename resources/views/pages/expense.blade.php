
@extends('layout.app')

    @section('pages')


    <div class="container my-5">
        <h2 class="text-center mb-4"> All Expense List </h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Amount</th>
                        <th>Expense Title</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                @if(isset($expenselist) && $expenselist->isNotEmpty())
   
                @foreach ($expenselist as $expense)
                    <tr>
                        <td>{{  $count++ }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->category }}</td>
                        <td>{{ $expense->custom_date }}</td>
                    </tr>
                @endforeach

                @else
                    <tr>
                        <td colspan="4" style="text-align: center;">No expense records found.</td>
                    </tr>
                @endif  
                </tbody>
            </table>
        </div>
    </div>



@endsection 