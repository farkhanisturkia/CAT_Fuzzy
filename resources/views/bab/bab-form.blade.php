@csrf
@if (isset($bab))
    <input type="hidden" name="id" value="{{ $bab->id }}">
@endif
<input type="hidden" name="mapel_id" value="{{ Auth::user()->mapel_id }}">
<div class="row form-group">
    <div class="col col-md-3">
        <label class="form-control-label">Bab</label>
    </div>
    <div class="col-12 col-md-9">
        <textarea required type="textarea" name="nama" placeholder="Masukan nama bab" class="form-control">{{ old('bab', $bab->nama ?? '') }}</textarea>
    </div>
</div>