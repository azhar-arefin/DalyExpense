
@extends('layout.app')

    @section('pages')


    <div class="container my-5">
        <h2 class="text-center mb-4"> All Income List </h2>
        <div class="table-container">
            <table>
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Amount</th>
                        <th>Income Title</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                @if(isset($incomelist) && $incomelist->isNotEmpty())
             
                @foreach ($incomelist as $income)
                    <tr>
                        <td>{{  $count++ }}</td>
                        <td>{{ $income->amount }}</td>
                        <td>{{ $income->category }}</td>
                        <td>{{ $income->custom_date }}</td>
                    </tr>
                @endforeach


                @else
                    <tr>
                        <td colspan="4" style="text-align: center;">No income records found.</td>
                    </tr>
                @endif  

                </tbody>
            </table>
        </div>
    </div>



@endsection 