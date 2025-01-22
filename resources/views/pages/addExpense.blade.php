
@extends('layout.app')

    @section('pages')

    <div class="containers">
        <h1>Add Expense</h1>
        <form action="{{ route('addexpense.submit') }}" method="POST">
            @csrf

            <div class="form-group" style="position: relative;">
                <label for="amount">Amount</label>
                <span style="position: absolute; top: 65%; left: 10px; transform: translateY(-50%); font-size: 16px; color: #555;">$</span>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" 
                    value="{{ old('amount') }}" 
                    style="padding-left: 30px; width: 100%; box-sizing: border-box;">
                @error('amount')
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
                    <option value="education" {{ old('category') == 'education' ? 'selected' : '' }}>Education</option>
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
                <label for="date">
                    <i class="fas fa-question-circle"></i> Another Date <span>(optional)</span>
                </label>
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