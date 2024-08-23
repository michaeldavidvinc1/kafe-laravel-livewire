<div class="page-wrapper">
    <div class="card max-w-lg mx-auto">
        <div class="card-body">
            <h3 class="card-title">Update Profile</h3>
            <form wire:submit="submit">
                <div class="py-4 space-y-2">
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Nama Lengkap</span>
                        </div>
                        <input type="text" placeholder="Type here" @class([
                            'input input-bordered',
                            'input-error' => $errors->first('name'),
                        ]) wire:model="name" />
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="email" placeholder="Type here" @class([
                            'input input-bordered',
                            'input-error' => $errors->first('email'),
                        ]) wire:model="email" />
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Password</span>
                        </div>
                        <input type="password" placeholder="Type here" @class([
                            'input input-bordered',
                            'input-error' => $errors->first('password'),
                        ]) wire:model="password" />
                    </label>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary">
                        <x-tabler-check class="size-5" />
                        <span>Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
