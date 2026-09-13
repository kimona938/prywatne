<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Firma Przewozowa</title>
</head>

<?php
$polaczenie = mysqli_connect("localhost", "root", "", "przewozy");
?>

<body>
    <header>
        <h1>Firma Przewozowa Półdarmo</h1>
    </header>

    <nav>
        <a href="#">kwerenda1</a>
        <a href="#">kwerenda2</a>
        <a href="#">kwerenda3</a>
        <a href="#">kwerenda4</a>
    </nav>

    <main>
        <section id="lewo">
            <h2>Zadanie do wykonania</h2>
            <table>
                <tr>
                    <th>Zadaine do wykonania</th>
                    <th>Data realizacji</th>
                    <th>Akcja</th>
                </tr>
                <?php
                $zapytanie1 = "SELECT id_zadania, zadanie, data FROM zadania";
                $wynik_zapytania = mysqli_query($polaczenie, $zapytanie1);

                while ($wiersz = mysqli_fetch_row($wynik_zapytania)) {
                    $id_zadania = $wiersz[0];
                    $zadanie = $wiersz[1];
                    $data = $wiersz[2];
                    ?>
                    <tr>
                        <td><?php echo $zadanie; ?></td>
                        <td><?php echo $data; ?></td>
                        <td>
                            <form action="usun.php" method="POST">
                                <input type="hidden" value="<?php echo $id_zadania; ?>" name="id">
                                <button class="baton">Usuń</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

            

            <form action="dodajzadanie.php" method="POST" id="formularz">
                <label for="zadanie">Zadanie do wykonania</label>
                <input type="text" id="zadanie" name="zadanie" value="$zadanie">
                <label for="data">Data realizacji</label>
                <input type="date" id="data" value="$data" name="data">
                <button>Dodaj</button>
            </form>

        </section>

        <section id="prawo">
                <img src="autko.png" alt="auto firmowe">
                <h3>Nasza specialność</h3>
                <ul>
                    <li>Przeprowadzki</li>
                    <li>Przewóz mebli</li>
                    <li>Przesyłki gabarytowe</li>
                    <li>Wynajem pojazdów</li>
                    <li>Zakupy towarów</li>
                </ul>

        </section>

    </main>

    <footer>
        <p>Stronę wykonał: Szymon Michałowski</p>
    </footer>

</body>
</html>