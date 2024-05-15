<div>
    <h2>Type Lists</h2>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typeLists as $typeList)
                <tr>
                    <td>{{ $typeList->id }}</td>
                    <td>{{ $typeList->description }}</td>
                    <td>
                        <button wire:click="edit({{ $typeList->id }})">Edit</button>
                        <button wire:click="delete({{ $typeList->id }})" onclick="return confirm('Are you sure?')">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for Edit -->
    @if($typeListId)
    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $typeListId ? 'Edit' : 'Add' }} Type List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="resetInput">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <input type="text" wire:model="description" placeholder="Description">
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                        <button type="submit">{{ $typeListId ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
