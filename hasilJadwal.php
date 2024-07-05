<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Reservasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Daftar Reservasi Pasien</h1>
            <h2>SEHAT SENTOSA HOSPITAL</h2>
        </div>
    </header>

    <main>
        <section class="reservasi">
            <h2>Reservasi</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Handphone</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = 'reserv.txt';
                    if (file_exists($file)) {
                        $appointments = file($file, FILE_IGNORE_NEW_LINES);
                        if (count($appointments) > 0) {
                            foreach ($appointments as $appointment) {
                                list($name, $email, $phone, $date, $time) = explode(',', $appointment);
                                echo "<tr>
                                        <td>{$name}</td>
                                        <td>{$email}</td>
                                        <td>{$phone}</td>
                                        <td>{$date}</td>
                                        <td>{$time}</td>
                                     </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No appointments found.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No appointments found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
