<div class="w-1/2 p-5">
    <h1 class='text-center text-xl font-semibold my-3'>ACCOUNTS DATA</h1>
    <table class="table table-xs text-center bg-gray-100 text-slate-800">
        <!-- Table Headers -->
        <thead>
            <tr class='text-white bg-blue-600'>
                <th>ID No</th>
                <th>Account Type</th>
                <th>Account No</th>
                <th>Balance</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                // selecting data from database and display to table
                $sql = "SELECT * from acct_master";
                $data = $conn->query($sql);

                if ($data -> num_rows > 0){
                    while ($row = $data -> fetch_assoc()){
                        echo "<tr><td>" . $row['IDNo'] . "</td>" .
                                "<td>" . $row['AccTyp'] . "</td>" . 
                                "<td>" . $row['AcctNo'] . "</td>" . 
                                "<td>" . $row['Balance'] . "</td>" . 
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