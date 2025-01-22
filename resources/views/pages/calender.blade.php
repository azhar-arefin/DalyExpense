@extends('layout.app')

    @section('pages')


    <title>Responsive Calendar</title>
    <style>
        .cal-main{
            text-align: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .calendar {
            display: inline-block;
            margin-top: 50px;
            background-color: #aaa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4caf50;
            color: white;
            padding: 15px;
            font-size: 1.5em;
        }

        .calendar-header button {
            background: none;
            border: none;
            color: white;
            font-size: 1em;
            cursor: pointer;
        }

        .calendar-header button:hover {
            text-decoration: underline;
        }

        .calendar-body {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
            background-color:rgb(4, 5, 5);
        }

        .day-name, .day {
            background-color: white;
            text-align: center;
            padding: 15px;
            font-size: 1em;
            background-color: #2c6060;
        }

        .day-name {
            font-weight: bold;
            background-color: #2c6060;
        }

        .day {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .day:hover {
            background-color: #f1f1f1;
        }

        .day.inactive {
            color: #aaa;
        }

        .day.today {
            background-color: #4caf50;
            color: white;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .calendar-header {
                font-size: 1.2em;
            }

            .day-name, .day {
                padding: 10px;
                font-size: 0.9em;
            }
        }
    </style>

<div class="cal-main">
    <div class="calendar">
        <div class="calendar-header">
            <button id="prev-month">&lt;</button>
            <div id="month-year">January 2025</div>
            <button id="next-month">&gt;</button>
        </div>
        <div class="calendar-body">
            <div class="day-name">Sun</div>
            <div class="day-name">Mon</div>
            <div class="day-name">Tue</div>
            <div class="day-name">Wed</div>
            <div class="day-name">Thu</div>
            <div class="day-name">Fri</div>
            <div class="day-name">Sat</div>
            <!-- Days will be dynamically inserted here -->
        </div>
    </div>
</div>


<script>
    const calendarBody = document.querySelector('.calendar-body');
    const monthYear = document.getElementById('month-year');
    const prevMonthBtn = document.getElementById('prev-month');
    const nextMonthBtn = document.getElementById('next-month');

    let currentDate = new Date();

    function generateCalendar(date) {
        calendarBody.innerHTML = '<div class="day-name">Sun</div>' +
                                 '<div class="day-name">Mon</div>' +
                                 '<div class="day-name">Tue</div>' +
                                 '<div class="day-name">Wed</div>' +
                                 '<div class="day-name">Thu</div>' +
                                 '<div class="day-name">Fri</div>' +
                                 '<div class="day-name">Sat</div>';

        const year = date.getFullYear();
        const month = date.getMonth();

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        monthYear.textContent = date.toLocaleDateString('default', {
            month: 'long',
            year: 'numeric'
        });

        // Add blank days for the first week
        for (let i = 0; i < firstDay; i++) {
            const blankDay = document.createElement('div');
            blankDay.classList.add('day', 'inactive');
            calendarBody.appendChild(blankDay);
        }

        // Add actual days
        for (let day = 1; day <= daysInMonth; day++) {
            const dayDiv = document.createElement('div');
            dayDiv.textContent = day;
            dayDiv.classList.add('day');

            if (
                day === new Date().getDate() &&
                month === new Date().getMonth() &&
                year === new Date().getFullYear()
            ) {
                dayDiv.classList.add('today');
            }

            calendarBody.appendChild(dayDiv);
        }
    }

    function changeMonth(offset) {
        currentDate.setMonth(currentDate.getMonth() + offset);
        generateCalendar(currentDate);
    }

    prevMonthBtn.addEventListener('click', () => changeMonth(-1));
    nextMonthBtn.addEventListener('click', () => changeMonth(1));

    generateCalendar(currentDate);
</script>




@endsection    