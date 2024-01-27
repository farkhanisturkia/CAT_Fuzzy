@php
    use App\Enums\UserRoles;
    use App\Enums\Mapel;
@endphp

@csrf
@if (isset($user))
    <input type="hidden" name="id" value="{{ $user->id }}">
@endif
<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class="form-control-label">Nama</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="name" placeholder="Masukan nama" class="form-control" value="{{ old('name', $user->name ?? '') }}">
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Username</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="username" placeholder="Masukan username" class="form-control" value="{{ old('username', $user->username ?? '') }}">
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Email</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="email" placeholder="Masukan email" class="form-control" value="{{ old('email', $user->email ?? '') }}">
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label" value="{{ old('role', $user->role ?? '') }}">Role</label>
    </div>
    <div class="col-12 col-md-9">
        <select required name="role" class="form-control">
            <option selected="selected">-- Select role --</option>
            @foreach(UserRoles::create_user_dropdown() as $role)
                <option value="{{ $role->value }}" {{ old('role', $user->role->value ?? '') == $role->value ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
</div>
{{-- <div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label" value="{{ old('mapel', $user->mapel ?? '') }}">Mapel</label>
    </div>
    <div class="col-12 col-md-9">
        <select required name="mapel" class="form-control">
            <option selected="selected">-- Select mapel if teacher --</option>
            @foreach(Mapel::create_mapel_dropdown() as $mapel)
                <option value="{{ $mapel->value }}" {{ old('mapel', $user->mapel->value ?? '') == $mapel->value ? 'selected' : '' }}>{{ $mapel->name }}</option>
            @endforeach
        </select>
    </div>
</div> --}}
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">mapel</label>
    </div>
    <div class="col-12 col-md-9">
        <select required  name="mapel_id" id="select" class="form-control" value="{{ old('mapel_id', $user->mapel_id ?? '') }}">
            <option selected="selected">-- Select mapel if teacher --</option>
            <option value="1" {{ old('mapel', $user->mapel_id ?? '') == '1' ? 'selected' : '' }}>Matematika</option>
            <option value="2" {{ old('mapel', $user->mapel_id ?? '') == '2' ? 'selected' : '' }}>Ipa</option>
            <option value="3" {{ old('mapel', $user->mapel_id ?? '') == '3' ? 'selected' : '' }}>Ips</option>
        </select>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Password</label>
    </div>
    <div class="col-12 col-md-9">
        <input {{ !isset($user) ? 'required' : ''}} type="password" name="password" placeholder="6 Karakter" class="form-control">
    </div>
</div>
