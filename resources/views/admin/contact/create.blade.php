@extends('admin.main')

@section('judul', 'Tambah Kontak')

@section('konten')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="number" name="nomor_telepon" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Status Publish</label>
          <select name="status_publish" class="form-control" required>
            <option value="1">Publish</option>
            <option value="0">Unpublish</option>
          </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>
@endsection
