<x-layout title="Ideas">
    <form action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Edit Your Idea</label>
            <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="textarea w-full">{{ $idea->description }}</textarea>
            </div>
        </div>
        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit" class="btn btn-soft btn-primary">Update</button>
            <button type="submit" form="delete-idea-form" class="btn btn-soft btn-error">Delete</button>
        </div>
    </form>

    <form action="/ideas/{{ $idea->id }}" method="post" id="delete-idea-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>