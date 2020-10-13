<?php
    $buku = array(array('judul'=>'Sherlock Holmes',
				  		'pengarang'=>'Arthur Cona Doyle',
				  		'harga'=>50000,
				  		'stok'=>20),
				  array('judul'=>'Arsene Lupin',
				  		'pengarang'=>'Maurice LeBlanc',
				  		'harga'=>250000,
				  		'stok'=>50),
				  array('judul'=>'Games Of Throne',
				  		'pengarang'=>'George R.R.Martin',
				  		'harga'=>125000,
				  		'stok'=>60),
                );
     $pembelian = array(array('judul'=>'Sherlock Holmes',
                             'jumlah'=>5),
                       array('judul'=>'Arsene Lupin',
                             'jumlah'=>2),
                       array('judul'=>'Game Of Throne',
                             'jumlah'=>4),
                    );
    $total = 0;
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Harga</th>
          <th>Stok</th>
          </thead>";
    
    for($i=0;$i<count($buku);$i++){
        echo "<tr>";
        echo "<td>".$buku[$i]['judul']."</td>";
        echo "<td>".$buku[$i]['pengarang']."</td>";  
        echo "<td>".$buku[$i]['harga']."</td>";  
        echo "<td>".$buku[$i]['stok']."</td>";  
        echo "</tr>";
    }
    echo "</table";
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
          <th>Jumlah</th>
          <th>Harga</th>
          </thead>";
          
    for($i=0;$i<count($pembelian);$i++){
        echo "<tr>";
        echo "<td>".$pembelian[$i]['judul']."</td>";
        echo "<td>".$pembelian[$i]['jumlah']."</td>";
        for($x=0;$x<count($buku);$x++){
            if($pembelian[$i]['judul']==$buku[$x]['judul']){
                $harga = $buku[$x]['harga']*$pembelian[$i]['jumlah'];
                break;
            }
        }
        $total = $total + $harga;
        echo "<td>".$harga."</td>";  
        echo "</tr>";
    }
    echo "</table>";
    echo "Total Harga = Rp$total";
?>