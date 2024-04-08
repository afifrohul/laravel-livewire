<div>
    <x-flash-message/>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-2">
                    <label for="body" class="form-label">Body</label>
                    <textarea placeholder="what's on your mind?" wire:model="form.body" class="form-control" id="body" rows="3"></textarea>
                    @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="flex justify-content-end">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>