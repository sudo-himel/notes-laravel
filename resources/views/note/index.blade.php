<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">New Note</a>
        <div class="notes">
            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note->note, 50) }}
                </div>
                <div class="note-btns">
                    <a href="{{ route('note.show', $note) }}" class="note-view-btn">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="note-delete-btn">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
