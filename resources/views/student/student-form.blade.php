@php
    use App\Enums\kelas;
@endphp

@csrf
@if (isset($student))
    <input type="hidden" name="id" value="{{ $student->id }}">
@endif
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">NISN</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="nisn" placeholder="Masukan NISN" class="form-control" value="{{ old('nisn', $student->nisn ?? '') }}" {{ isset($student) ? 'disabled' : '' }}>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Nama Siswa</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="name" placeholder="Masukan nama lengkap" class="form-control" value="{{ old('name', $student->user->name ?? '') }}" >
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Username</label>
    </div>
    <div class="col-12 col-md-9">
        <input required type="text" name="username" placeholder="Masukan username" class="form-control" value="{{ old('username', $student->user->username ?? '') }}">
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Kelas</label>
    </div>
    <div class="col-12 col-md-9">
        <select required  name="kelas" id="select" class="form-control" value="{{ old('kelas', $student->kelas ?? '') }}">
            <option selected="selected">-- Masukan kelas --</option>
            {{-- @foreach(Kelas::create_kelas_dropdown() as $kelas)
                <option value="{{ $kelas->value }}" {{ old('kelas', $user->kelas->value ?? '') == $kelas->value ? 'selected' : '' }}>{{ $kelas->name }}</option>
            @endforeach --}}
            <option value="7" {{ old('kelas', $student->kelas ?? '') == '7' ? 'selected' : '' }}>7</option>
            <option value="8" {{ old('kelas', $student->kelas ?? '') == '8' ? 'selected' : '' }}>8</option>
            <option value="9" {{ old('kelas', $student->kelas ?? '') == '9' ? 'selected' : '' }}>9</option>
        </select>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Jenis Kelamin</label>
    </div>
    <div class="col-12 col-md-9">
        <select required name="gender" class="form-control" value="{{ old('gender', $student->gender ?? '') }}">
            <option selected="selected">-- Pilih jenis kelamin --</option>
            <option value="Laki-Laki" {{ old('gender', $student->gender ?? '') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ old('gender', $student->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Alamat</label>
    </div>
    <div class="col-12 col-md-9">
        <textarea required type="textarea" name="address" placeholder="Masukan alamat" class="form-control">{{ old('address', $student->address ?? '') }}</textarea>
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Password</label>
    </div>
    <div class="col-12 col-md-9">
        <input {{ !isset($student) ? 'required' : ''}} type="password" name="password" placeholder="6 Karakter" class="form-control">
    </div>
</div>
