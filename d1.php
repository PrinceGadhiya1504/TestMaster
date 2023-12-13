<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mx-2">
        <div class="row mt-5 mx-4">
            <div class="bg-light rounded h-100 p-4 mx-6">
                <h3 class="mb-4"></h3>
                </a></u>
                <table class="table table-light table-bordered">
                    <thead class="table-primary" style="text-align: center;">
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Test</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <?php

                    $conn = mysqli_connect("localhost", "root", "", "myDb");

                    session_start();

                    $id = $_SESSION['id'];

                    $test = "SELECT u.name, q.qname, t.status from user u, question q, test t WHERE t.userid = u.id and q.id = t.testid and t.userid = $id order by u.name";
                    $testEx = mysqli_query($conn, $test);

                    while($row = mysqli_fetch_assoc($testEx)){
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['qname'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }

                    // $sql = "SELECT * FROM user";
                    // $result = mysqli_query($conn, $sql);

                    // $testid = "SELECT * FROM test WHERE userid = $id";
                    // $r1 = mysqli_query($conn, $testid);

                    // while ($row = mysqli_fetch_assoc($r1)) {
                    //     $tid = $row['testid'];
                    //     $tesname = "SELECT 'qname' FROM question WHERE id = $tid";
                    //     $tname = mysqli_query($conn, $tesname);

                    //     echo "<tr>";
                    //     echo "<td>" . $row['userid'] . "</td>";
                    //     echo "<td>" . $tid . "</td>";
                    //     echo "<td>" . $row['status'] . "</td>";
                    //     echo "</tr>";
                    // }


                    ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>