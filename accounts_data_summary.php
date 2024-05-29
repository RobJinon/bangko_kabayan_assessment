<?php
    if (isset($_POST['exportBtn'])){
        echo "<script>console.log('exporting...')</script>";

        // select needed data from database to export
        $sql = "SELECT acct_master.IDNo, id_master.ClntName, SUM(CASE WHEN acct_master.AccTyp='LN' THEN acct_master.Balance ELSE 0 END) as TotalBalance, SUM(CASE WHEN acct_master.AccTyp='SA' THEN acct_master.Balance ELSE 0 END) as TotalSavingsBalance FROM acct_master LEFT JOIN id_master ON acct_master.IDNo=id_master.IDNo GROUP BY IDNo";

        $data = $conn->query($sql);
        ob_end_clean(); // cleans the contents of the output buffer because the function will include html code if this is skipped

        if ($data -> num_rows > 0){
            $delimiter = ',';
            $filename = "accounts_data_summary.csv";

            //  sets the http headers to download the csv file
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="' . $filename . '";');

            // file pointer
            $f = fopen('php://output', 'w');

            // set column headers
            $fields = array('IDNo', 'ClntName', 'TotalLoanBalance', 'TotalSavingsBalance');
            fputcsv($f, $fields, $delimiter);

            while ($row = $data -> fetch_assoc()){
                $lineData = array($row['IDNo'], $row['ClntName'], $row['TotalBalance'], $row['TotalSavingsBalance']);
                fputcsv($f, $lineData, $delimiter);
            }

            fpassthru($f);
            fclose($f);
            exit();
        }
        
    }



?>



<div class="flex flex-col w-1/2 p-5 items-center">
    <div class='flex justify-between w-full pl-3'>
        <h1 class='text-center text-xl font-semibold my-3'>ACCOUNTS DATA SUMMARY</h1>
        <form method='post'>
            <button type='submit' name='exportBtn' class='btn btn-sm my-3 bg-blue-500 text-white w-auto'>Export data</button>
        </form>
    </div>

    <table class="table table-xs text-center bg-gray-100 text-slate-800">
        <!-- Table Headers -->
        <thead>
            <tr class='text-white bg-rose-600'>
                <th>ID No</th>
                <th>Client Name</th>
                <th>Total Loan Balance</th>
                <th>Savings Balance</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                // selecting data from database, summarizing the data, then display to table
                $sql = "SELECT acct_master.IDNo, id_master.ClntName, SUM(CASE WHEN acct_master.AccTyp='LN' THEN acct_master.Balance ELSE 0 END) as TotalBalance, SUM(CASE WHEN acct_master.AccTyp='SA' THEN acct_master.Balance ELSE 0 END) as TotalSavingsBalance FROM acct_master LEFT JOIN id_master ON acct_master.IDNo=id_master.IDNo GROUP BY IDNo";
                $data = $conn->query($sql);


                if ($data -> num_rows > 0){
                    $highestBalance = 0;
                    $highBalClnt = "";
                    while ($row = $data -> fetch_assoc()){
                        if ($highestBalance < $row['TotalBalance']){
                            $highestBalance = $row['TotalBalance'];
                            $highBalClnt = $row['ClntName'];
                        }
                        echo "<tr><td>" . $row['IDNo'] . "</td>" .
                                "<td>" . $row['ClntName'] . "</td>" . 
                                "<td>" . $row['TotalBalance'] . "</td>" .
                                "<td>" . $row['TotalSavingsBalance'] . "</td>" .
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