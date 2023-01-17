<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Simulator</title>
</head>

<body>
    <main class="row font-monospace w-100">
        <form class="col p-5 text-center" method="post">
            <h2 class="mb-5">Group stage</h2>
            <table class="table table-primary table-striped-columns">
                <tbody>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="60px"></td>
                        <td class="w-50">
                            <div class="input-group">
                                <input type="number" value="<?php if (isset($_POST['REAL-MADRID-S-M1-C']))
                                    echo $_POST['REAL-MADRID-S-M1-C']; ?>"
                                    name="REAL-MADRID-S-M1-C" aria-label="REAL-MADRID-S" class="form-control">
                                <input type="number" value="<?php if (isset($_POST['FC-BARCELONA-S-M1-C']))
                                    echo $_POST['FC-BARCELONA-S-M1-C']; ?>"
                                    name="FC-BARCELONA-S-M1-C" aria-label="FC-BARCELONA-S" class="form-control">
                            </div>
                        </td>
                        <td><img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M1-Ch"
                                    value="<?php if (isset($_POST['LIVERPOOL-FC-S-M1-Ch']))
                                        echo $_POST['LIVERPOOL-FC-S-M1-Ch']; ?>" aria-label="LIVERPOOL-FC-S-M1"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M1-Lv"
                                    value="<?php if (isset($_POST['CHELSEA-FC-S-M1-Lv']))
                                        echo $_POST['CHELSEA-FC-S-M1-Lv']; ?>" aria-label="CHELSEA-FC-S-M1"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="FC-BARCELONA-S-M2-Lv"
                                    value="<?php if (isset($_POST['FC-BARCELONA-S-M2-Lv']))
                                        echo $_POST['FC-BARCELONA-S-M2-Lv']; ?>" aria-label="FC-BARCELONA-S-M2"
                                    class="form-control">
                                <input type="number" name="LIVERPOOL-FC-S-M2-Br"
                                    value="<?php if (isset($_POST['LIVERPOOL-FC-S-M2-Br']))
                                        echo $_POST['LIVERPOOL-FC-S-M2-Br']; ?>" aria-label="LIVERPOOL-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="REAL-MADRID-S-M2-Ch"
                                    value="<?php if (isset($_POST['REAL-MADRID-S-M2-Ch']))
                                        echo $_POST['REAL-MADRID-S-M2-Ch']; ?>" aria-label="REAL-MADRID-S-M2"
                                    class="form-control">
                                <input type="number" name="CHELSEA-FC-S-M2-Rm"
                                    value="<?php if (isset($_POST['CHELSEA-FC-S-M2-Rm']))
                                        echo $_POST['CHELSEA-FC-S-M2-Rm']; ?>" aria-label="CHELSEA-FC-S-M2"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="60px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="LIVERPOOL-FC-S-M3-Rm"
                                    value="<?php if (isset($_POST['LIVERPOOL-FC-S-M3-Rm']))
                                        echo $_POST['LIVERPOOL-FC-S-M3-Rm']; ?>" aria-label="LIVERPOOL-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="REAL-MADRID-S-M3-Lv"
                                    value="<?php if (isset($_POST['REAL-MADRID-S-M3-Lv']))
                                        echo $_POST['REAL-MADRID-S-M3-Lv']; ?>" aria-label="REAL-MADRID-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                    <tr>
                        <td><img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" name="CHELSEA-FC-S-M3-Fb"
                                    value="<?php if (isset($_POST['CHELSEA-FC-S-M3-Fb']))
                                        echo $_POST['CHELSEA-FC-S-M3-Fb']; ?>" aria-label="CHELSEA-FC-S-M3"
                                    class="form-control">
                                <input type="number" name="FC-BARCELONA-S-M3-Ch"
                                    value="<?php if (isset($_POST['FC-BARCELONA-S-M3-Ch']))
                                        echo $_POST['FC-BARCELONA-S-M3-Ch']; ?>" aria-label="FC-BARCELONA-S-M3"
                                    class="form-control">
                            </div>
                        </td>
                        <td> <img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Simulate" name="submit" class="btn btn-outline-primary btn-lg mt-2">
        </form>
        <?php
        /*
        To Simulate result and standing :
        * using post method to get the value from input.
        * calculate point and goals => using functions
        * stor the values in array in specific order for standing table
        * create row for each team with the correct order => sort by points or goals => conditions
        */

        # input values
        if (isset($_POST['submit'])) {
            // for the First team => Real madrid
            $madrid_M1 = $_POST["REAL-MADRID-S-M1-C"];
            $madrid_M2 = $_POST["REAL-MADRID-S-M2-Ch"];
            $madrid_M3 = $_POST["REAL-MADRID-S-M3-Lv"];
            // for the Second team => Barcelona
            $barcelona_M1 = $_POST["FC-BARCELONA-S-M1-C"];
            $barcelona_M2 = $_POST["FC-BARCELONA-S-M2-Lv"];
            $barcelona_M3 = $_POST["FC-BARCELONA-S-M3-Ch"];
            // for the Third team => Liverpool
            $LIVERPOOL_M1 = $_POST['LIVERPOOL-FC-S-M1-Ch'];
            $LIVERPOOL_M2 = $_POST['LIVERPOOL-FC-S-M2-Br'];
            $LIVERPOOL_M3 = $_POST['LIVERPOOL-FC-S-M3-Rm'];
            // for the forth team => chelsea
            $CHELSEA_M1 = $_POST['CHELSEA-FC-S-M1-Lv'];
            $CHELSEA_M2 = $_POST['CHELSEA-FC-S-M2-Rm'];
            $CHELSEA_M3 = $_POST['CHELSEA-FC-S-M3-Fb'];

            $result = standing($madrid_M1, $madrid_M2, $madrid_M3, $barcelona_M1, $barcelona_M2, $barcelona_M3, $LIVERPOOL_M1, $LIVERPOOL_M2, $LIVERPOOL_M3, $CHELSEA_M1, $CHELSEA_M2, $CHELSEA_M3);
            var_dump($result);
        }

        function standing($madrid_M1, $madrid_M2, $madrid_M3, $barcelona_M1, $barcelona_M2, $barcelona_M3, $LIVERPOOL_M1, $LIVERPOOL_M2, $LIVERPOOL_M3, $CHELSEA_M1, $CHELSEA_M2, $CHELSEA_M3)
        {
            $madrid_points = 0;
            $chelsea_points = 0;
            $liverpool_points = 0;
            $barcelona_points = 0;

            $madrid_goals = 0;
            $chelsea_goals = 0;
            $liverpool_goals = 0;
            $barcelona_goals = 0;

            // match 1 => madrid vs barcelona
            if ($madrid_M1 > $barcelona_M1) {
                $madrid_points += 3;
                $madrid_goals += $madrid_M1;
            } elseif ($madrid_M1 < $barcelona_M1) {
                $barcelona_points += 3;
                $barcelona_goals += $barcelona_M1;
            } else {
                $madrid_points += 1;
                $barcelona_points += 1;
                $madrid_goals += $madrid_M1;
                $barcelona_goals += $barcelona_M1;
            }

            // match 2 => madrid vs chelsea
            if ($madrid_M2 > $CHELSEA_M2) {
                $madrid_points += 3;
                $madrid_goals += $madrid_M2;
            } elseif ($madrid_M2 < $CHELSEA_M2) {
                $chelsea_points += 3;
                $chelsea_goals += $CHELSEA_M2;
            } else {
                $madrid_points += 1;
                $chelsea_points += 1;
                $madrid_goals += $madrid_M2;
                $chelsea_goals += $CHELSEA_M2;
            }

            // match 3 => madrid vs liverpool
            if ($madrid_M3 > $LIVERPOOL_M3) {
                $madrid_points += 3;
                $madrid_goals += $madrid_M2;
            } elseif ($madrid_M3 < $LIVERPOOL_M3) {
                $liverpool_points += 3;
                $liverpool_goals += $LIVERPOOL_M3;
            } else {
                $madrid_points += 1;
                $liverpool_points += 1;
                $madrid_goals += $madrid_M3;
                $liverpool_goals += $LIVERPOOL_M3;
            }

            // match 4 => liverpool vs chelsea
            if ($LIVERPOOL_M1 > $CHELSEA_M1) {
                $liverpool_points += 3;
                $chelsea_goals += $CHELSEA_M1;
            } elseif ($LIVERPOOL_M1 < $CHELSEA_M1) {
                $liverpool_points += 3;
                $liverpool_goals += $LIVERPOOL_M1;
            } else {
                $chelsea_points += 1;
                $liverpool_points += 1;
                $chelsea_goals += $CHELSEA_M1;
                $liverpool_goals += $LIVERPOOL_M3;
            }

            // match 5 => liverpool vs barcelona
            if ($LIVERPOOL_M2 > $barcelona_M2) {
                $liverpool_points += 3;
                $liverpool_goals += $LIVERPOOL_M2;
            } elseif ($LIVERPOOL_M2 < $barcelona_M2) {
                $barcelona_points += 3;
                $barcelona_goals += $LIVERPOOL_M2;
            } else {
                $barcelona_points += 1;
                $liverpool_points += 1;
                $barcelona_goals += $barcelona_M2;
                $liverpool_goals += $LIVERPOOL_M2;
            }

            // match 6 => barcelona vs chelsea
            if ($barcelona_M3 > $CHELSEA_M3) {
                $barcelona_points += 3;
                $barcelona_goals += $barcelona_M3;
            } elseif ($barcelona_M3 < $CHELSEA_M3) {
                $chelsea_points += 3;
                $chelsea_goals += $CHELSEA_M3;
            } else {
                $chelsea_points += 1;
                $barcelona_points += 1;
                $chelsea_goals += $CHELSEA_M3;
                $barcelona_goals += $barcelona_M3;
            }

            $standings = array();
            array_push($standings, array("name" => "Real madrid", "points" => $madrid_points, "goals" => $madrid_goals));
            array_push($standings, array("name" => "FC barcelona", "points" => $barcelona_points, "goals" => $barcelona_goals));
            array_push($standings, array("name" => "chelsea FC", "points" => $chelsea_points, "goals" => $chelsea_goals));
            array_push($standings, array("name" => "Liverpool FC", "points" => $liverpool_points, "goals" => $liverpool_goals));
            return $standings;
        }



        // $result = array(F
        //     $real_madrid = array()
        // )
        ?>
        <section class="col p-5 text-center">
            <h2 class="mb-5">Standings</h2>
            <table class="table table-info table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TEAMS</th>
                        <th scope="col">Pts</th>
                        <th scope="col">MP</th>
                        <th scope="col">W</th>
                        <th scope="col">D</th>
                        <th scope="col">L</th>
                        <th scope="col">GF</th>
                        <th scope="col">GA</th>
                        <th scope="col">+/-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td><img src="IMG/REAL-MADRID.png" alt="logo" width="50px" height="60px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td><img src="IMG/FC-BARCELONA.png" alt="logo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td><img src="IMG/CHELSEA-FC.png" alt="logo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td><img src="IMG/LIVERPOOL-FC.svg" alt="logo" width="50px" height="50px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>