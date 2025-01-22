@extends('layout.app')

    @section('pages')

  <title>Calculator</title>
  <style>
    .cal-main{
        text-align: center;
        font-family: Arial, sans-serif;
        color: white;
    }
   
    h1 {
      color: white;
    }
    .calculator {
      display: inline-block;
      margin-top: 50px;
      background-color: #333;
      padding: 20px;
    }
    .button {
      width: 50px;
      height: 50px;
      font-size: 20px;
      margin: 5px;
      background-color: white;
      color: black;
      border: none;
      cursor: pointer;
    }
    .button:hover {
      background-color: #ccc;
    }
    .display {
      background-color: white;
      color: black;
      width: 200px;
      height: 50px;
      margin: 10px;
      text-align: right;
      padding: 5px;
      font-size: 20px;
      border: none;
    }
  </style>

    <div class="cal-main"> 
        <h1>Calculator</h1>
        <div class="calculator">
            <input type="text" class="display" id="display" readonly>
            <div>
            <button class="button" onclick="appendToDisplay('7')">7</button>
            <button class="button" onclick="appendToDisplay('8')">8</button>
            <button class="button" onclick="appendToDisplay('9')">9</button>
            <button class="button" onclick="appendToDisplay('/')">/</button>
            </div>
            <div>
            <button class="button" onclick="appendToDisplay('4')">4</button>
            <button class="button" onclick="appendToDisplay('5')">5</button>
            <button class="button" onclick="appendToDisplay('6')">6</button>
            <button class="button" onclick="appendToDisplay('*')">*</button>
            </div>
            <div>
            <button class="button" onclick="appendToDisplay('1')">1</button>
            <button class="button" onclick="appendToDisplay('2')">2</button>
            <button class="button" onclick="appendToDisplay('3')">3</button>
            <button class="button" onclick="appendToDisplay('-')">-</button>
            </div>
            <div>
            <button class="button" onclick="appendToDisplay('0')">0</button>
            <button class="button" onclick="appendToDisplay('.')">.</button>
            <button class="button" onclick="calculate()">=</button>
            <button class="button" onclick="appendToDisplay('+')">+</button>
            </div>
            <div>
            <button class="button" onclick="clearDisplay()">C</button>
            </div>
        </div>

    </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function appendToDisplay(value) {
      $('#display').val($('#display').val() + value);
    }

    function calculate() {
      var expression = $('#display').val();
      var result = eval(expression);
      $('#display').val(result);
    }

    function clearDisplay() {
      $('#display').val('');
    }
  </script>
@endsection