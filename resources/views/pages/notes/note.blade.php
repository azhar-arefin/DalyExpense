
@extends('layout.app')

    @section('pages')
    <style>
        .main-note{
            text-align: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .containerar {
            display: inline-block;
            margin-top: 50px;
            background-color: #aaa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4caf50;
        }

        .note-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .note-form input, .note-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .note-form button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .note-form button:hover {
            background-color: #45a049;
        }

        .notes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .note {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .note h2 {
            margin: 0 0 0.5rem;
            font-size: 1.2rem;
            color: #333;
        }

        .note p {
            color: #666;
            font-size: 1rem;
        }

        .note .delete {
            margin-top: 1rem;
            display: inline-block;
            background: #ff5252;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .note .delete:hover {
            background: #ff3b3b;
        }

    </style>
</head>
<body>
<div class="main-note">
    <div class="containerar">
        <h1>Notes</h1>
        <form class="note-form">
            <input type="text" id="note-title" placeholder="Note Title" required>
            <textarea id="note-content" rows="4" placeholder="Write your note here..." required></textarea>
            <button type="button" id="add-note">Add Note</button>
        </form>

        <div class="notes" id="notes-container">
            <!-- Notes will appear here -->
        </div>
    </div>
</div>
<script>
    const notesContainer = document.getElementById('notes-container');
    const noteTitle = document.getElementById('note-title');
    const noteContent = document.getElementById('note-content');
    const addNoteButton = document.getElementById('add-note');

    function createNoteElement(title, content) {
        const noteDiv = document.createElement('div');
        noteDiv.classList.add('note');

        const noteTitle = document.createElement('h2');
        noteTitle.textContent = title;
        noteDiv.appendChild(noteTitle);

        const noteContent = document.createElement('p');
        noteContent.textContent = content;
        noteDiv.appendChild(noteContent);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.classList.add('delete');
        deleteButton.addEventListener('click', () => {
            notesContainer.removeChild(noteDiv);
        });
        noteDiv.appendChild(deleteButton);

        return noteDiv;
    }

    addNoteButton.addEventListener('click', () => {
        const title = noteTitle.value.trim();
        const content = noteContent.value.trim();

        if (title && content) {
            const noteElement = createNoteElement(title, content);
            notesContainer.appendChild(noteElement);

            noteTitle.value = '';
            noteContent.value = '';
        } else {
            alert('Please fill out both the title and content fields.');
        }
    });
</script>

@endsection
