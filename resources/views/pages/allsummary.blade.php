
@extends('layout.report')

@section('style')

    @page {
        margin: 0;
    } 
    
    .table-container {
            margin: 20px auto;
            width: 90%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .summary {
            margin-top: 20px;
        }
        .summary h3 {
            margin-bottom: 10px;
        }
        .btn-primary {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background-color:rgb(37, 51, 66);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

@endsection


    @section('pages')



    <div class="table-container"> 
        <a href="{{ route('summary-report.pdf') }}" class="btn btn-primary">Download PDF</a>
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
            <p><strong>Total Income:</strong> $ {{ $suminc }}</p>
            <p><strong>Total Expenses:</strong> $ {{ $sumexp }}</p>
            <p><strong>Net Balance:</strong> $ {{ $balance }}</p>
        </div>
    </div>




@endsection