@extends('template')
@section('main')
<h1>Edit Data</h1>
<form action="{{ route('siswa.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nis</label>
        <input type="number" class="form-control  @error('nis') is-invalid @enderror" name="nis" value="{{$data->nis}}"> 
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat" value="{{$data->alamat}}">
    </div> 
    <div class="mb-3">
        <label class="form-label">Nama Sekolah</label>
        <select class="form-select" aria-label="Default select example" name="sekolah_id">
            @foreach ($sekolah as $item)
                <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)> {{ $item->nama_sekolah }} </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection