<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                    <th>Rak</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
		<tbody>
			 @foreach( $buku as $b )
                    <tr>
                        <td >
                        
                        {{ $b->id_buku }} <br>
                        
                        </td>
                        
                        <td>
                        
                            {{ $b->judul_buku }} <br>
                        
                        </td>

                        <td>
                        
                            {{ $b->penulis_buku }} <br>
                        
                        </td>

                        <td>
                        
                            {{ $b->penerbit_buku }} <br>
                        
                        </td>

                        <td>
                        
                            {{ $b->tahun_terbit }} <br>
                        
                        </td>

                        <td>
                        
                            {{ $b->stok_buku }} <br>
                        
                        </td>
                        <td> 
                        @foreach ($rak as $r)
                            @if($b->rak_id_rak == $r->id_rak)
                                {{ $r->nama_rak}}
                            @endif
                        @endforeach
                        </td>
		</tbody>
	</table>
 
</body>
</html>