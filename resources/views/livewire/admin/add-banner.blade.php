<div class="intro-y box">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">Upload Banner Image </h2>
    </div>
    <div id="single-file-upload" class="p-5">
        <div class="preview">
            <form wire:submit.prevent="save">
                <input wire:model="photo" type="file" class="form-control mb-4">
                @error('photo') <span class="text-danger block">{{ $message }}</span> @enderror

                @if ($photo)
                    Photo Preview:
                    <img src="{{ $photo->temporaryUrl() }}" class="mt-4">
                @endif

                <button type="submit" class="btn btn-primary w-24 mr-1 mt-4">Add</button>
            </form>
        </div>
    </div>
</div>
