<div>
    <h2>Type Lists</h2>
    <table class="table-auto w-full">
        <thead>
            <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Firename</th>
            <th>Serial Number</th>
            <th>Building</th>
            <th>Floor</th>
            <th>Room</th>
            <th>Installation Date</th>
            <th>Expiration Date</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fireLists as $fireList)
                <tr>
                <td>{{ $fireList->id }}</td>
                <td>{{ $fireList->type }}</td>
                <td>{{ $fireList->firename }}</td>
                <td>{{ $fireList->serial_number }}</td>
                <td>{{ $fireList->firebuilding->building }}</td>
                <td>{{ $fireList->firefloor->floor }}</td>
                <td>{{ $fireList->fireroom->room }}</td>
                <td>{{ $fireList->installation_date }}</td>
                <td>{{ $fireList->expiration_date }}</td>
                <td>{{ $fireList->description }}</td>
                <td>{{ $fireList->status }}</td>
                
                
                    <td>
                        <button wire:click="update({{ $fireList->id }})">Edit</button>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for Edit -->
    @if($fireListId)
    <div class="modal" tabindex="-1" role="dialog" style="display: block; ">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">{{ $fireListId ? 'Edit' : 'Add' }} fire List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="resetInput">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form wire:submit.prevent="save">
            <!-- Input fields for editing fire list fields -->
            <select wire:model="type" placeholder="Type">
            <option value="">Select Type</option>
            <option value="CO2">CO2</option>
            <option value="Water">Water &Form</option>
            <option value="Dry Chemical">Dry Chemical</option>
            <option value="Wet Chemical">Wet Chemical</option>
            </select>
            <input type="text" wire:model="firename" placeholder="Firename">
            <input type="text" wire:model="serial_number" placeholder="Serial Number" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            <input type="date" wire:model="installation_date" placeholder="Installation_date">
            <input type="date" wire:model="expiration_date" placeholder="expiration_date">
            <input type="text" wire:model="description" placeholder="description">
            <select wire:model="status" placeholder="status">
            <option value="">Select Type</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            <option value="Refill">Refill</option>

            <button type="submit">{{ $fireListId ? 'Update' : 'Save' }}</button>
            @if($fireListId)
                <button type="button" wire:click="remove">Remove</button>
            @endif
        </form>
    </div>
</div>

        </div>
    </div>
    @endif
</div>
