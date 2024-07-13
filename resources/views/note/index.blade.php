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
                    <a href="" class="note-view-btn">View</a>
                    <a href="" class="note-edit-btn">Edit</a>
                    <button class="note-delete-btn">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
