<div class="w-1/2 p-5">
    <h1 class='text-center text-xl font-semibold my-3'>CLIENT DATA</h1>
    <table class="table text-center bg-gray-100 text-slate-800">
        <!-- Table Headers -->
        <thead>
            <tr class='text-white bg-green-600'>
                <th>ID No</th>
                <th>Client Name</th>
            </tr>
        </thead>

        <tbody>
            <?php
                // selecting account holders data from database and display to table
                $sql = "SELECT * from id_master";
                $data = $conn->query($sql);

                if ($data -> num_rows > 0){
                    while ($row = $data -> fetch_assoc()){
                        echo "<tr><td>" . $row['IDNo'] . "</td>" .
                                "<td>" . $row['ClntName'] . "</td>" .
                                "</tr>";
                    }
                }
                else {
                    echo "<p> No data.</p>";
                }
            
            ?>
        </tbody>
    </table>
</div>