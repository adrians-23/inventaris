<table border="1">
    <tr>
        <td>kode: </td>
        <td><img src="DNS1D::getBarcodePNG('4445645656', 'C39');" width="400px" height="250px"></td>
        <td>{{$barang->kode}}</td>
    </tr>

    <tr>
        <td>Nama Barang: </td>
        <td>{{$barang->nama}}</td>
    </tr>

    <tr>
        <td>Lokasi: </td>
        <td>{{$barang->tempat->nama}}</td>
    </tr>

    <tr>
        <td>Stok: </td>
        <td>{{$barang->stok}}</td>
    </tr>

    <tr>
        <td>Keterangan: </td>
        <td>{{$barang->keterangan}}</td>
    </tr>
</table>