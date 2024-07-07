<div>
    <label for="title">Title:</label>

    <input type="text" id="title" wire:model.live="title">

    <h1>Title: {{ $title }}</h1>

    <span>Author: {{ $author }}</span>
</div>
