
@extends('layout.app')

    @section('pages')

    <div class="containers">
        <h1>Add Expense</h1>
        <form action="#" method="POST">
            

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
            </div>

            <div class="form-group">
                <label for="expense-title">Expense Title</label>
                <input type="text" id="expense-title" name="expense-title" placeholder="Enter expense title" required>
            </div>
            
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="food">Food</option>
                    <option value="transport">Transport</option>
                    <option value="bills">Bills</option>
                    <option value="shopping">Shopping</option>
                    <option value="others">Others</option>
                </select>
            </div>


            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>

           
           

            <button type="submit" class="btn-submit">
                <ion-icon name="add-circle-outline"></ion-icon> Add Expense
            </button>
        </form>
    </div>

    
    @endsection 