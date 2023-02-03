<?php
if(isset($_POST['import_file']) && $_FILES['import']['type'] == 'text/csv'){
    echo "<html><body><center><table border='1'>\n\n";
    echo "
    <thead>
        <tr>
            <th>Item</th>
            <th>URL</th>
            <th>Status</th>
        </tr>
    </thead>";
    $csv_file = fopen($_FILES['import']['name'], 'r');

    while(($data = fgetcsv($csv_file)) !== false) {
        
        foreach ($data as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key+1 . "</td>";
            echo "<td>" . $value . "</td>";

            //get http response
            $curl = curl_init($value);
            curl_setopt($curl, CURLOPT_NOBODY, true);
            $result = curl_exec($curl);
            if($result !== false){
                $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            }
            else{
                $status_code = '404';
            }

            echo "<td>" . $status_code . "</td>";
            echo "</tr>";
        }
        
    }

    fclose($file);

    echo "\n</table></center></body></html>";

}
else{
    echo "<script>alert('Invalid file format') </script>";
}
?>