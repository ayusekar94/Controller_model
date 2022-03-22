@extends('layouts.main')

@section('tampil')
    <form action="#" style="width: 1120px; background-color:rgb(248, 222, 222); margin-right: 125px;" class="posisi";>
    <fieldset class="h">
    <table style="width: 800px; margin-top: 70px;">
        <tr>
            <td rowspan="15" width="250px">
            <img src="{{asset('img/ananda.jpg')}}" width="250px" height="420px"/></td>
        </tr>
        <tr>
            <td><b>Nama Lengkap</b></td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td><b>Nama Panggilan</b></td>
            <td>:</td>
            <td><?php echo e($np); ?></td>
        </tr>
        <tr>
            <td><b>Tempat, Tanggal Lahir</b></td>
            <td>:</td>
            <td><?php echo e($ttl); ?></td>
        </tr>
        <tr>
            <td><b>Umur</b></td>
            <td>:</td>
            <td><?php echo e($umur); ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>:</td>
            <td><?php echo e($jk); ?></td>
        </tr>
        <tr>
            <td><b>Gol. Darah</b></td>
            <td>:</td>
            <td><?php echo e($gd); ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>:</td>
            <td><?php echo e($alamat); ?></td>
        </tr>
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>:</td>
            <td><?php echo e($p); ?></td>
        </tr>
        <tr>
            <td><b>Kewarganegaraan</b></td>
            <td>:</td>
            <td><?php echo e($k); ?></td>
        </tr>
    </table>
    </fieldset>
    </form>
@endsection
