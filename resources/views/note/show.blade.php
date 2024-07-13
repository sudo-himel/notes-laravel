<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-btns">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-btn">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">{{ $note->note }}</div>
        </div>
    </div>
</x-app-layout>
