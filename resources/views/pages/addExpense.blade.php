
@extends('layout.app')

    @section('pages')

    <div class="containers">
        <h1>Add Expense</h1>
        <form action="{{ route('addexpense.submit') }}" method="POST">
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
                <input type="text" id="expense-title" name="expense-title" placeholder="Enter expense title"  value="{{ old('expense') }}">
            @error('expense')
                <p class="color">{{$message}}</p>
            @enderror
            </div>
            

            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="" disabled selected>Select a category</option>
                    <option value="food" {{ old('category') == 'food' ? 'selected' : '' }}>Food</option>
                    <option value="transport" {{ old('category') == 'transport' ? 'selected' : '' }}>Transport</option>
                    <option value="bills" {{ old('category') == 'bills' ? 'selected' : '' }}>Bills</option>
                    <option value="shopping" {{ old('category') == 'shopping' ? 'selected' : '' }}>Shopping</option>
                    <option value="others" {{ old('category') == 'others' ? 'selected' : '' }}>Others</option>
                </select>
            @error('category')
                <p class="color">{{$message}}</p>
            @enderror
            </div>
            

            <div class="form-group">
                <p>Date: <span id="live-time" name="setDate"></span></p>
            </div>

            <div class="form-group">
                <label for="date">Another Date</label> 
                <input type="date" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <p  class="color">{{$message}}</p>
            @enderror
            </div> 
            

            <button type="submit" class="btn-submit">
                <ion-icon name="add-circle-outline"></ion-icon> Add Expense
            </button>
        </form>
    </div>

    
    @endsection 