<!DOCTYPE html>

<!-- 

----- [ Bangko Kabayan Assessment Test ] -----
by Jon Robien E. Jinon

 -->

<html data-theme='halloween'>
    
    <?php
        // import HTML head and database connector 
        include "./head.php"; 
        include "./db_conn.php";

    ?>


    <body class="w-screen min-h-screen">
        <div class="flex w-full h-full">
            <!-- Display Accounts Data and Clients Data from database -->
            <?php include "./accounts_data.php"; ?>
            <?php include "./client_data.php"; ?>
        </div>

        <div class="flex w-full h-full">
            <!-- Display Summarized Accounts Data -->
            <?php include "./accounts_data_summary.php"; ?>
            
            <!-- Card that displays the client with the highest loan balance -->
            <div class="w-1/2 p-5">
                <h1 class='text-center text-xl font-semibold my-3'>Client with highest loan balance</h1>
                <div class="card bg-violet-700 text-white">
                    <div class="card-body text-center items-center">
                        <p class='text-5xl text-center my-3'><?php echo $highBalClnt; ?></p>
                        <p>Balance: <?php echo $highestBalance; ?></p>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>