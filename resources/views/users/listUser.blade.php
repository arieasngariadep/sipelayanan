<div>
    <table>


    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($listUser as $user) {
            echo 
            "
            <tr>
                <td>$no</td>    
                <td>$user->NIP</td>    
                <td>$user->nama</td>    
                <td>$user->jenis_kelamin</td>    
                <td>$user->posisi</td>    
            </tr>
            ";
            $no++;
        }    
        ?>
    </tbody>
</table>
</div>