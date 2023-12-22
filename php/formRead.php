<?php
    session_start ();

    // Check if any required session variable is not set or is empty
    if (
        // Program gap year
        !isset ($_SESSION ['programGapYear']) || empty ($_SESSION ['programGapYear']) ||

        // A) MAKLUMAT PERIBADI
        !isset ($_SESSION ['studName']) || empty ($_SESSION ['studName']) ||
        !isset ($_SESSION ['studIcNum']) || empty ($_SESSION ['studIcNum']) ||
        !isset ($_SESSION ['studGender']) || empty ($_SESSION ['studGender']) ||
        !isset ($_SESSION ['studMailAdd']) || empty ($_SESSION ['studMailAdd']) ||
        //!isset ($_SESSION ['studHomeAdd']) || empty ($_SESSION ['studHomeAdd']) ||
        !isset ($_SESSION ['studBirthDate']) || empty ($_SESSION ['studBirthDate']) ||
        !isset ($_SESSION ['studAge']) || empty ($_SESSION ['studAge']) ||
        !isset ($_SESSION ['studEmailAdd']) || empty ($_SESSION ['studEmailAdd']) ||
        !isset ($_SESSION ['studReligion']) || empty ($_SESSION ['studReligion']) ||
        !isset ($_SESSION ['studRace']) || empty ($_SESSION ['studRace']) ||
        !isset ($_SESSION ['homePhoneNo']) || empty ($_SESSION ['homePhoneNo']) ||
        !isset ($_SESSION ['studId']) || empty ($_SESSION ['studId']) ||
        !isset ($_SESSION ['studPhoneNo']) || empty ($_SESSION ['studPhoneNo']) ||
        !isset ($_SESSION ['studDisability']) || empty ($_SESSION ['studDisability']) ||
        !isset ($_SESSION ['studMarital']) || empty ($_SESSION ['studMarital']) ||
        
        // B) MAKLUMAT WARIS
        !isset ($_SESSION ['parentName']) || empty ($_SESSION ['parentName']) ||
        !isset ($_SESSION ['parentHomeAdd']) || empty ($_SESSION ['parentHomeAdd']) ||
        !isset ($_SESSION ['parentPhoneNo']) || empty ($_SESSION ['parentPhoneNo']) ||
        !isset ($_SESSION ['parentRelation']) || empty ($_SESSION ['parentRelation']) ||

        // C) MAKLUMAT PENGAJIAN
        !isset ($_SESSION ['academicCgpa']) || empty ($_SESSION ['academicCgpa']) ||
        !isset ($_SESSION ['academicYear']) || empty ($_SESSION ['academicYear']) ||
        !isset ($_SESSION ['academicProgName']) || empty ($_SESSION ['academicProgName']) ||
        !isset ($_SESSION ['academicUniName']) || empty ($_SESSION ['academicUniName']) ||

        // D) KEMAHIRAN
        !isset ($_SESSION ['skillMalayCom']) || empty ($_SESSION ['skillMalayCom']) ||
        !isset ($_SESSION ['skillMalayWrite']) || empty ($_SESSION ['skillMalayWrite']) ||
        !isset ($_SESSION ['skillEngCom']) || empty ($_SESSION ['skillEngCom']) ||
        !isset ($_SESSION ['skillEngWrite']) || empty ($_SESSION ['skillEngWrite']) ||
        !isset ($_SESSION ['skillOtherCom']) || empty ($_SESSION ['skillOtherCom']) ||
        !isset ($_SESSION ['skillOtherWrite']) || empty ($_SESSION ['skillOtherWrite']) ||
        !isset ($_SESSION ['skillIct']) || empty ($_SESSION ['skillIct']) ||
        !isset ($_SESSION ['skillComp']) || empty ($_SESSION ['skillComp']) ||
        //!isset ($_SESSION ['skillOther1']) || empty ($_SESSION ['skillOther1']) ||
        //!isset ($_SESSION ['skillOther2']) || empty ($_SESSION ['skillOther2']) ||
        //!isset ($_SESSION ['skillOther3']) || empty ($_SESSION ['skillOther3']) ||

        // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
        !isset ($_SESSION ['s1CourseName']) || empty ($_SESSION ['s1CourseName']) ||
        !isset ($_SESSION ['s2CourseName']) || empty ($_SESSION ['s2CourseName']) ||
        !isset ($_SESSION ['s3CourseName']) || empty ($_SESSION ['s3CourseName']) ||
        !isset ($_SESSION ['s4CourseName']) || empty ($_SESSION ['s4CourseName']) ||
        !isset ($_SESSION ['s5CourseName']) || empty ($_SESSION ['s5CourseName']) ||
        !isset ($_SESSION ['s1GradeValue']) || empty ($_SESSION ['s1GradeValue']) ||
        !isset ($_SESSION ['s2GradeValue']) || empty ($_SESSION ['s2GradeValue']) ||
        !isset ($_SESSION ['s3GradeValue']) || empty ($_SESSION ['s3GradeValue']) ||
        !isset ($_SESSION ['s4GradeValue']) || empty ($_SESSION ['s4GradeValue']) ||
        !isset ($_SESSION ['s5GradeValue']) || empty ($_SESSION ['s5GradeValue']) ||
        !isset ($_SESSION ['cocuRecog']) || empty ($_SESSION ['cocuRecog'])
        //!isset ($_SESSION ['cocuRecogOther']) || empty ($_SESSION ['cocuRecogOther'])
        )
    // Display feedback message for null form submission
    {
        echo '<script src = "../js/script.js"></script>';
        echo '<script>handleFormNull ();</script>';
        var_dump ($_SESSION);
        die ("<br><br> Redirecting...");
    }
    // Display feedback message for successful form submission
    else
    {
        echo '<script src = "../js/script.js"></script>';
        echo '<script>handleFormSuccess ();</script>';
    }
?>

<!-- Display values from session -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <title>View Form</title>
        
        <!-- Design accordion items -->
        <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            integrity = "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin = "anonymous">
        <!-- Design navigation bar -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
        <!-- Design page shortcut icon -->
        <link rel = "shortcut icon" href = "../images/icon.png">
        <!-- Design page layout -->
        <link rel = "stylesheet" href = "../css/style.css" type = "text/css">
    </head>

    <body>
        <!-- Design accordion items -->
        <script
            src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity = "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin = "anonymous">
        </script>

        <?php
            // Insert header reference
            include ('header.php');
        ?>

        <div class = "outer">
            <h2 class = "header2">Semak Permohonan Surat</h2>
            <p class = "header2">Kesukarelawanan Khidmat Negara<p>

            <form method = "post" action = "sessionDestroy.php">
                <p class = "header2">Pilihan Program Yang Akan Disertai :
                    <?php echo ($_SESSION ['programGapYear'] == 'uitmATM') ? 'UiTM | Angkatan Tentera Malaysia' : ''; ?>
                    <?php echo ($_SESSION ['programGapYear'] == 'uitmAPAM') ? 'UiTM | Angkatan Pertahanan Awam Malaysia' : ''; ?>
                    <?php echo ($_SESSION ['programGapYear'] == 'ukmPDRM') ? 'UKM | Polis Diraja Malaysia' : ''; ?>
                </p>
                <br>

                <!-- Item Accordion -->
                <div class = "accordion" id = "accordionPanelsStayOpenExample">

                    <!-- 1st Item Accordion -->
                    <div class = "accordion-item">
                        <h2 class = "accordion-header" id = "panelsStayOpen-headingOne">
                            <button class = "accordion-button collapsed" type = "button" data-bs-toggle = "collapse"
                            data-bs-target = "#panelsStayOpen-collapseOne" aria-expanded = "false" aria-controls = "panelsStayOpen-collapseOne">
                                <!-- 1st Item Label -->
                                A : MAKLUMAT PERIBADI
                            </button>
                        </h2>

                        <div id = "panelsStayOpen-collapseOne" class = "accordion-collapse collapse" aria-labelledby = "panelsStayOpen-headingOne">
                            <div class = "accordion-body1">
                                <br>
                                
                                Nama Penuh :
                                <?php echo $_SESSION ['studName']; ?>
                                <br><br>

                                Kad Pengenalan :
                                <?php echo $_SESSION ['studIcNum']; ?>
                                <br><br>

                                Jantina :
                                <?php echo ($_SESSION ['studGender'] == 'male') ? 'Lelaki' : 'Perempuan'; ?>
                                <br><br>

                                Alamat Surat Menyurat :
                                <?php echo $_SESSION ['studMailAdd']; ?>
                                <br><br>

                                Alamat Tetap :
                                <?php echo $_SESSION ['studHomeAdd']; ?>
                                <br><br>

                                Tarikh Lahir :
                                <?php echo date ('d/m/Y', strtotime ($_SESSION ['studBirthDate'])); ?>
                                <br><br>

                                Umur :
                                <?php echo $_SESSION ['studAge']; ?>
                                <br><br>

                                Alamat E-mail :
                                <?php echo $_SESSION ['studEmailAdd']; ?>
                                <br><br>

                                Agama :
                                <?php echo $_SESSION ['studReligion']; ?>
                                <br><br>

                                Bangsa :
                                <?php echo $_SESSION ['studRace']; ?>
                                <br><br>

                                No. Telefon Rumah :
                                <?php echo $_SESSION ['homePhoneNo']; ?>
                                <br><br>

                                No. Matrik :
                                <?php echo $_SESSION ['studId']; ?>
                                <br><br>

                                No. Telefon Bimbit :
                                <?php echo $_SESSION ['studPhoneNo']; ?>
                                <br><br>

                                Kecacatan Anggota :
                                <?php echo ($_SESSION ['studDisability'] == 'ada') ? 'Ada' : 'Tiada'; ?>
                                <br><br>

                                Taraf Perkahwinan :
                                <?php echo ($_SESSION ['studMarital'] == 'bujang') ? 'Bujang' : 'Berkahwin'; ?>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd Item Accordion -->
                    <div class = "accordion-item">
                        <h2 class = "accordion-header" id = "panelsStayOpen-headingTwo">
                            <button class = "accordion-button collapsed" type = "button" data-bs-toggle = "collapse"
                            data-bs-target = "#panelsStayOpen-collapseTwo" aria-expanded = "false" aria-controls = "panelsStayOpen-collapseTwo">
                                <!-- 2nd Item Label -->
                                B : MAKLUMAT WARIS (DIHUBUNGI JIKA BERLAKU KECEMASAN)
                            </button>
                        </h2>

                        <div id = "panelsStayOpen-collapseTwo" class = "accordion-collapse collapse" aria-labelledby = "panelsStayOpen-headingTwo">
                            <div class = "accordion-body2">
                                <br>
                                
                                Nama Waris :
                                <?php echo $_SESSION ['parentName']; ?>
                                <br><br>

                                Alamat Rumah Waris :
                                <?php echo $_SESSION ['parentHomeAdd']; ?>
                                <br><br>

                                No. Telefon Waris :
                                <?php echo $_SESSION ['parentPhoneNo']; ?>
                                <br><br>

                                Hubungan :
                                <?php echo ($_SESSION ['parentRelation'] == 'mother') ? 'Ibu Kandung' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'stepmother') ? 'Ibu Tiri' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'father') ? 'Bapa Kandung' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'stepfather') ? 'Bapa Tiri' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'grandmother') ? 'Nenek' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'grandfather') ? 'Datuk' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'aunt') ? 'Ibu Saudara' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'uncle') ? 'Bapa Saudara' : ''; ?>
                                <?php echo ($_SESSION ['parentRelation'] == 'guardian') ? 'Waris / Penjaga' : ''; ?>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd Item Accordion -->
                    <div class = "accordion-item">
                            <h2 class = "accordion-header" id = "panelsStayOpen-headingThree">
                                <button class = "accordion-button collapsed" type = "button" data-bs-toggle = "collapse"
                                data-bs-target = "#panelsStayOpen-collapseThree" aria-expanded = "false" aria-controls = "panelsStayOpen-collapseThree">
                                    <!-- 3rd Item Label -->
                                    C : MAKLUMAT PENGAJIAN
                                </button>
                            </h2>

                            <div id = "panelsStayOpen-collapseThree" class = "accordion-collapse collapse" aria-labelledby = "panelsStayOpen-headingThree">
                                <div class = "accordion-body3">
                                    <br>

                                    Keputusan Akademik PNGK :
                                    <?php echo $_SESSION ['academicCgpa']; ?>
                                    <br><br>

                                    Tahun Pengajian :
                                    <?php echo $_SESSION ['academicYear']; ?>
                                    <br><br>

                                    Nama Bidang Pengajian :
                                    <?php echo $_SESSION ['academicProgName']; ?>
                                    <br><br>

                                    Nama Universiti :
                                    <?php echo $_SESSION ['academicUniName']; ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>

                        <!-- 4th Item Accordion -->
                        <div class = "accordion-item">
                            <h2 class = "accordion-header" id = "panelsStayOpen-headingFour">
                                <button class = "accordion-button collapsed" type = "button" data-bs-toggle = "collapse"
                                data-bs-target = "#panelsStayOpen-collapseFour" aria-expanded = "false" aria-controls = "panelsStayOpen-collapseFour">
                                    <!-- 4th Item Label -->
                                    D : KEMAHIRAN
                                </button>
                            </h2>

                            <div id = "panelsStayOpen-collapseFour" class = "accordion-collapse collapse" aria-labelledby = "panelsStayOpen-headingFour">
                                <div class = "accordion-body4">
                                    <br>
                                    
                                    Kemahiran Bahasa :
                                    <br><br>
                                    <table>
                                        <tr>
                                            <th rowspan = "2">Bahasa</th>
                                            <th colspan = "3">Komunikasi</th>
                                            <th colspan = "3">Penulisan</th>
                                        </tr>

                                        <tr>
                                            <td>Fasih</td>
                                            <td>Sederhana</td>
                                            <td>Kurang Fasih</td>
                                            <td>Fasih</td>
                                            <td>Sederhana</td>
                                            <td>Kurang Fasih</td>
                                        </tr>

                                        <tr>
                                            <td>Melayu</td>
                                            <td><?php echo ($_SESSION ['skillMalayCom'] == 'malayComFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillMalayCom'] == 'malayComMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillMalayCom'] == 'malayComWorse') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillMalayWrite'] == 'malayWriteFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillMalayWrite'] == 'malayWriteMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillMalayWrite'] == 'malayWriteWorse') ? '✔' : ''; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Inggeris</td>
                                            <td><?php echo ($_SESSION ['skillEngCom'] == 'engComFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillEngCom'] == 'engComMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillEngCom'] == 'engComWorse') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillEngWrite'] == 'engWriteFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillEngWrite'] == 'engWriteMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillEngWrite'] == 'engWriteWorse') ? '✔' : ''; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Lain-lain</td>
                                            <td><?php echo ($_SESSION ['skillOtherCom'] == 'otherComFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillOtherCom'] == 'otherComMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillOtherCom'] == 'otherComWorse') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillOtherWrite'] == 'otherWriteFluent') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillOtherWrite'] == 'otherWriteMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillOtherWrite'] == 'otherWriteWorse') ? '✔' : ''; ?></td>
                                        </tr>
                                    </table>
                                    <br><br>

                                    Kemahiran ICT / Komputer :
                                    <br><br>
                                    <table>
                                        <tr>
                                            <th colspan = "3">Penggunaan ICT</th>
                                        </tr>

                                        <tr>
                                            <td>Mahir</td>
                                            <td>Sederhana</td>
                                            <td>Kurang Mahir</td>
                                        </tr>

                                        <tr>
                                            <td><?php echo ($_SESSION ['skillIct'] == 'ictPro') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillIct'] == 'ictMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillIct'] == 'ictWorse') ? '✔' : ''; ?></td>
                                        </tr>
                                    </table>
                                    <br><br>

                                    <table>
                                        <tr>
                                            <th colspan = "3">Penggunaan Komputer</th>
                                        </tr>

                                        <tr>
                                            <td>Mahir</td>
                                            <td>Sederhana</td>
                                            <td>Kurang Mahir</td>
                                        </tr>

                                        <tr>
                                        <td><?php echo ($_SESSION ['skillComp'] == 'compPro') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillComp'] == 'compMid') ? '✔' : ''; ?></td>
                                            <td><?php echo ($_SESSION ['skillComp'] == 'compWorse') ? '✔' : ''; ?></td>
                                        </tr>
                                    </table>
                                    <br><br>

                                    Lain-lain Kemahiran :
                                    <br><br>
                                    <ol>
                                        <li><?php echo $_SESSION ['skillOther1']; ?></li>
                                        <li><?php echo $_SESSION ['skillOther2']; ?></li>
                                        <li><?php echo $_SESSION ['skillOther3']; ?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <!-- 5th Item Accordion -->
                        <div class = "accordion-item">
                            <h2 class = "accordion-header" id = "panelsStayOpen-headingFive">
                                <button class = "accordion-button collapsed" type = "button" data-bs-toggle = "collapse"
                                data-bs-target = "#panelsStayOpen-collapseFive" aria-expanded = "false" aria-controls = "panelsStayOpen-collapseFive">
                                    <!-- 5th Item Label -->
                                    E : KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
                                </button>
                            </h2>

                            <div id = "panelsStayOpen-collapseFive" class = "accordion-collapse collapse" aria-labelledby = "panelsStayOpen-headingFive">
                                <div class = "accordion-body5">
                                    <br>
                                    Kursus Diikuti Semasa Pengajian
                                    <br><br>
                                    <?php
                                        for ($semester = 1; $semester <= 5; $semester++)
                                        {
                                            ?>
                                                <ul>
                                                    <li>Semester <?php echo $semester; ?>
                                                        <ul>
                                                            <li>
                                                                Nama Kursus Kokurikulum:
                                                                <?php echo $_SESSION ["s{$semester}CourseName"]; ?>
                                                            </li>
                                                            <li>
                                                                Nilai Gred:
                                                                <?php echo $_SESSION ["s{$semester}GradeValue"]; ?>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            <?php
                                        }
                                    ?>
                                    <br>

                                    Pengiktirafan Kokurikulum Badan Beruniform :
                                    <br><br>
                                    <table>
                                        <tr>
                                            <th rowspan = "3">ATM</th>
                                            <td>Leftenan Muda (Palapes Darat)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'atmLtLand') ? '✔' : ''; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Leftenan Muda (Palapes Laut)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'atmLtSea') ? '✔' : ''; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Leftenan Muda (Palapes Udara)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'atmLtAir') ? '✔' : ''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>PDRM</th>
                                            <td>Inspektor (Sukarelawan Polis)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'pdrmVolun') ? '✔' : ''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>APM</th>
                                            <td>Leftenan Muda (Pertahanan Awam)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'apmLt') ? '✔' : ''; ?></td>
                                        </tr>
                                        <tr>
                                            <th>UiTM</th>
                                            <td>Leftenan Muda (Kesatria)</td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'uitmKnight') ? '✔' : ''; ?></td>

                                        <tr>
                                            <td>Lain-Lain (Nyatakan)</td>
                                            <td><?php echo $_SESSION ['cocuRecogOther']; ?></td>
                                            <td><?php echo ($_SESSION ['cocuRecog'] == 'cocuElse') ? '✔' : ''; ?></td>
                                        </tr>
                                    </table>
                                    <br><br>

                                    Maklumat Fizikal (Khas bagi ATM) :
                                    <br><br>
                                    <table>
                                        <tr>
                                            <th colspan = "2">Ukuran</th>
                                        </tr>
                                        <tr>
                                            <th>Ketinggian (cm)</th>
                                            <td><?php echo $_SESSION ['anthropoMetricsHeight']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Berat (kg)</th>
                                            <td><?php echo $_SESSION ['anthropoMetricsWeight']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Dada (Biasa) (cm)</th>
                                            <td><?php echo $_SESSION ['anthropoMetricsChest']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Dada (Tarik Nafas) (cm)</th>
                                            <td><?php echo $_SESSION ['anthropoMetricsChestInhale']; ?></td>
                                        </tr>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <input class = "submit" type = "submit" name = "submit" value = "New Form">
            </form>
            <br>
        </div>

        <?php
            
            // Debugging Purposes
            // var_dump ($_SESSION);
            // echo "<pre>";
            // print_r ($_SESSION);
            // echo "</pre>";

            // Insert footer reference
            include ('footer.php');
        ?>
    </body>
</html>