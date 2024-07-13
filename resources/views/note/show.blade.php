<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-btns">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                <button class="note-delete-btn">Delete</button>
            </div>
        </div>
        <div class="note">
            <div class="note-body">{{ $note->note }}</div>
        </div>
    </div>
</x-layout>
