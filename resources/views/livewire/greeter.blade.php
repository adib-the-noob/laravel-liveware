<div>
    <div>
        Hello, {{ $name}}!
    </div>
    <div class="mt-2">
        <button 
            class="bg-slate-400 text-black font-medium rounded-md p-2" 
            wire:click="changeName('ADIB[changed]')"
        >
            Change Name!
        </button>
    </div>
</div>