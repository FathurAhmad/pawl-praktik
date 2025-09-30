<div>
    <label for="angkatan">Angkatan</label>
    <input type="number" id="angkatan" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}">
    @error('angkatan')
        <div>
            {{ $message }}
        </div>
    @enderror
</div>