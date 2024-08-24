<div class="page-wrapper">
    <div class="flex justify-between gap-2 md:flex-row">
        <input type="searc" class="input input-bordered" placeholder="Pencarian" wire:model.live.debounce.300ms="search">
        <button class="btn btn-primary" wire:click="$dispatch('createCustomer')">
            <x-tabler-plus class="size-5" />
            <span>Tambah Customer</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Kontak</th>
                <th>Keterangan</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($customers as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->contact }}</td>
                        <td class="whitespace-normal w-80">
                            <div class="line-clamp-2">
                                {{ $item->desc }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('editCustomer', {customer: {{ $item->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('deleteCustomer', {customer: {{ $item->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @livewire('customer.actions')
</div>
