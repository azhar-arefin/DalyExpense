
@extends('layout.app')

    @section('pages')

    <div class="containers">
        <h1>Add Income</h1>

        <form action="{{ route('addincome.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount"  value="{{ old('amount') }}">
            @error('amount')
                <p class="color">{{$message}}</p>
            @enderror
            </div>
             

            <div class="form-group">
                <label for="expense-title">Expense Title</label>
                <input type="text" id="expense-title" name="income_title" placeholder="Enter expense title"  value="{{ old('expense') }}">
            @error('income_title')
                <p class="color">{{$message}}</p>
            @enderror
            </div>
            

            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="" disabled selected>Select a category</option>
                    <option value="salary" {{ old('category') == 'salary' ? 'selected' : '' }}>Salary</option>
                    <option value="deposits" {{ old('category') == 'deposits' ? 'selected' : '' }}>Deposits</option>
                    <option value="savings" {{ old('category') == 'savings' ? 'selected' : '' }}>Savings</option>
                </select>
            @error('category')
                <p class="color">{{$message}}</p>
            @enderror
            </div>
            

            <div class="form-group">
                <p>Date: <span id="live-time" name="setDate"></span></p>
            </div>

            <div class="form-group">
                <label for="date">
                    <i class="fas fa-question-circle"></i> Another Date <span>(optional)</span>
                </label>
                <input type="date" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <p  class="color">{{$message}}</p>
            @enderror
            </div> 
            

            <button type="submit" class="btn-submit">
                <ion-icon name="add-circle-outline"></ion-icon> Add Income
            </button>
        </form>
    </div>

    
    @endsection 