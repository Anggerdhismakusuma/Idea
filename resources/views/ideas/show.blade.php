<x-layout title="Ideas">
    <div class="mt-6 card bg-neutral p-6 text-white">
        <h2 class="font-bold">Your Idea</h2>

        <div class="mt-6">
            {{ $idea->description }}
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-soft">Edit</a>
        </div>
        
    </div>

</x-layout>