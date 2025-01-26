<div>
    <div class="bg-yellow-300 rounded p-2">
        Hello, {{ $name}}!
    </div>
    <form wire:submit="changeName(document.querySelector('#newName').value)">
    <div class="mt-2">
    <input
        id="newName"    
        type="text" 
        class="w-full p-4 border rounded-md bg-red-300 text-black m-2"
        wire:model.live.debounce="name"
        >
    </div>
    <div class="mt-2 mx-2 my-2">
        <button 
            type="submit"
            class="bg-slate-400 text-black font-medium rounded-md p-2 m-4" 
        >
            Change Name!
        </button>
    </div>
    </form>
</div>