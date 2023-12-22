<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <title>Apply Form</title>

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

            // Define variables and set to empty values
            // Program gap year
            $programGapYearErr = "";
            // A) MAKLUMAT PERIBADI
            $studNameErr = $studIcNumErr = $studGenderErr = $studMailAddErr = $studHomeAddErr = $studBirthDateErr = $studAgeErr = $studEmailAddErr =
            $studReligionErr = $studRaceErr = $homePhoneNoErr = $studIdErr = $studPhoneNoErr = $studDisabilityErr = $studMaritalErr = "";
            // B) MAKLUMAT WARIS
            $parentNameErr = $parentHomeAddErr = $parentPhoneNoErr = $parentRelationErr = "";
            // C) MAKLUMAT PENGAJIAN
            $academicCgpaErr = $academicYearErr = $academicProgNameErr = $academicUniNameErr = "";
            // D) KEMAHIRAN
            $skillMalayComErr = $skillMalayWriteErr = $skillEngComErr = $skillEngWriteErr = $skillOtherComErr = $skillOtherWriteErr =
            $skillIctErr = $skillCompErr = "";
            // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
            $s1CourseNameErr = $s2CourseNameErr = $s3CourseNameErr = $s4CourseNameErr = $s5CourseNameErr = $wholeCourseNameErr =
            $s1GradeValueErr = $s2GradeValueErr = $s3GradeValueErr = $s4GradeValueErr = $s5GradeValueErr = $cocuRecogErr =
            $anthropoMetricsHeightErr = $anthropoMetricsWeightErr = $anthropoMetricsChestErr = $anthropoMetricsChestInhaleErr = "";

            // Define all input variables
            // Program gap year
            $programGapYear = "";
            // A) MAKLUMAT PERIBADI
            $studName = $studIcNum = $studGender = $studMailAdd = $studHomeAdd = $studBirthDate = $studAge = $studEmailAdd =
            $studReligion = $studRace = $homePhoneNo = $studId = $studPhoneNo = $studDisability = $studMarital = "";
            // B) MAKLUMAT WARIS
            $parentName = $parentHomeAdd = $parentPhoneNo = $parentRelation = "";
            // C) MAKLUMAT PENGAJIAN
            $academicCgpa = $academicYear = $academicProgName = $academicUniName = "";
            // D) KEMAHIRAN
            $skillMalayCom = $skillMalayWrite = $skillEngCom = $skillEngWrite = $skillOtherCom = $skillOtherWrite =
            $skillIct = $skillComp = $skillOther1 = $skillOther2 = $skillOther3 = "";
            // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
            $s1CourseName = $s2CourseName = $s3CourseName = $s4CourseName = $s5CourseName =
            $s1GradeValue = $s2GradeValue = $s3GradeValue = $s4GradeValue = $s5GradeValue = $cocuRecog = $cocuRecogOther =
            $anthropoMetricsHeight = $anthropoMetricsWeight = $anthropoMetricsChest = $anthropoMetricsChestInhale = "";

            # !!! MOST IMPORTANT PART !!! #
            // Uncomment for super-duper instant input testings
            /*
            // A) MAKLUMAT PERIBADI
            $programGapYear = "uitmATM";
            $studName = "Ya`qub Qamar Ad-din Dibiazah @ Dibiyazah";
            $studIcNum = "021225-10-1387";
            $studGender = "male";
            $studMailAdd = "UniStorage UiTM-Arau, Lot 6, Anjung Siswa, UiTM Kampus Arau, 02600 Arau, Perlis";
            $studHomeAdd = "Cengal 3, UiTM Kampus Arau, 02600 Arau, Perlis";
            $studBirthDate = "2002-12-25";
            $studAge = "20";
            $studEmailAdd = "2021614276@student.uitm.edu.my";
            $studReligion = "Islam";
            $studRace = "Malay";
            $homePhoneNo = "(+60) 4234-4239";
            $studId = "2021614276";
            $studPhoneNo = "(+60) 19 792-0812";
            $studDisability = "tiada";
            $studMarital = "bujang";

            // B) MAKLUMAT WARIS
            $parentName = "Khaleed I.S. Kashimiri";
            $parentHomeAdd = "No.42, Jalan Kenangan 5, Taman Warisan Emas, 11200 Bandar Ciro-ciro, Land of Dawn";
            $parentPhoneNo = "(+60) 19-314-1345";
            $parentRelation = "father";
            
            // C) MAKLUMAT PENGAJIAN
            $academicCgpa = "3.88";
            $academicYear = "2021 - 2024";
            $academicProgName = "Bachelor of Information Technology (Hons.)"; 
            $academicUniName = "Universiti Teknologi MARA";

            // D) KEMAHIRAN
            $skillMalayCom = "malayComFluent";
            $skillMalayWrite = "malayWriteMid";
            $skillEngCom = "engComMid";
            $skillEngWrite = "engWriteMid";
            $skillOtherCom = "otherComMid";
            $skillOtherWrite = "otherWriteWorse";
            $skillIct = "ictPro";
            $skillComp = "compPro";
            $skillOther1 = "Table Normalization";
            $skillOther2 = "ERD Data Modelling";
            $skillOther3 = "SQL Coding";

            // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
            $s1CourseName = "Kesatria Pemula I";
            $s1GradeValue = "3.67";
            $s2CourseName = "Kesatria Pemula II";
            $s2GradeValue = "3.83";
            $s3CourseName = "Kesatria Pemula III";
            $s3GradeValue = "3.66";
            $s4CourseName = "Kesatria Agong I";
            $s4GradeValue = "3.58";
            $s5CourseName = "Kesatria Agong II";
            $s5GradeValue = "3.85";
            $cocuRecog = "cocuElse";
            $cocuRecogOther = "Inspektor (Polis Diraja Malaysia)";
            $anthropoMetricsHeight = "182.4";
            $anthropoMetricsWeight = "68.9";
            $anthropoMetricsChest = "90.3";
            $anthropoMetricsChestInhale = "95.0";
            */

            // Check whether form is submitted or not
            if ($_SERVER ["REQUEST_METHOD"] == "POST")
            {
                // A) MAKLUMAT PERIBADI
                // Validate program gap year
                if (empty ($_POST ["programGapYear"]))
                {
                    $programGapYearErr = "Program gap year is required";
                }
                else
                {
                    $programGapYear = $_POST ["programGapYear"];
                }

                // Validate student name
                if (empty ($_POST ["studName"]))
                {
                    $studNameErr = "Student name is required";
                }
                else
                {
                    $studName = test_input ($_POST ["studName"]);

                    // Check if input only contains letters, whitespaces, dots, hypens, back ticks and at sign
                    if (!preg_match ("/^[a-zA-Z\s\.\-`@]+$/", $studName))
                    {
                        $studNameErr = "Invalid format, please provide a valid student name";
                    }
                    // Check if the input contains "Bin" or "Binti"
                    else if (stripos (strtolower ($studName), "Bin") != false || stripos (strtolower ($studName), "Binti") != false)
                    {
                        $studNameErr = "Please provide a name without Bin / Binti";
                    }
                }

                // Validate student ic number
                if (empty ($_POST ["studIcNum"]))
                {
                    $studIcNumErr = "IC number is required";
                }
                else
                {
                    $studIcNum = test_input ($_POST ["studIcNum"]);

                    // Check if input is a valid identity card number
                    if (!preg_match ("/^\d{6}\s*-\s*\d{2}\s*-\s*\d{4}$/", $studIcNum))
                    {
                        $studIcNumErr = "Invalid format, please provide a valid IC number";
                    }
                    else
                    {
                        // Extract the last digit from the identity card number
                        $lastDigitIc = substr ($studIcNum, -1);

                        // Check identity card number with student name (male)
                        if (stripos (strtolower ($studName), "Bin") != false || stripos (strtolower ($studName), "A/L") != false)
                        {
                            // Check if the last digit is odd
                            if ($lastDigitIc % 2 == 0)
                            {
                                $studIcNumErr = "IC number does not match with the student name (male)";
                            }
                        }
                        // Check identity card number with student name (female)
                        else if (stripos (strtolower ($studName), "Binti") != false || stripos (strtolower ($studName), "A/P") != false)
                        {
                            // Check if the last digit is even
                            if ($lastDigitIc % 2 != 0)
                            {
                                $studIcNumErr = "IC number does not match with the student name (female)";
                            }
                        }
                    }
                }

                // Validate student gender
                if (empty($_POST ["studGender"]))
                {
                    $studGenderErr = "Gender is required";
                }
                else
                {
                    $studGender = $_POST ["studGender"];

                    // Extract the last digit from the identity card number
                        $lastDigitIc = substr ($studIcNum, -1);

                    // Check if the last digit is odd and gender is male
                    if ($lastDigitIc % 2 != 0 && $studGender != "male")
                    {
                        $studGenderErr = "Gender does not match with the student name and student IC number provided (male)";
                    }

                    // Check if the last digit is even and gender is female
                    if ($lastDigitIc % 2 == 0 && $studGender != "female")
                    {
                        $studGenderErr = "Gender does not match with the student name and student IC number provided (female)";
                    }
                }

                // Validate student mailing address
                if (empty ($_POST ["studMailAdd"]))
                {
                    $studMailAddErr = "Mailing address is required";
                }
                else
                {
                    $studMailAdd = test_input ($_POST ["studMailAdd"]);

                    // Check if input only contains letters, numbers, whitespace, commas, dots, hyphens, and slashes
                    if (!preg_match ("/^[a-zA-Z0-9\s,.\/-]*$/", $studMailAdd))
                    {
                        $studMailAddErr = "Invalid format, please provide a valid mailing address";
                    }
                }
                
                // Validate student home address
                if (empty ($_POST["studHomeAdd"]))
                {
                    $studHomeAddErr = "";
                }
                else
                {
                    $studHomeAdd = test_input ($_POST ["studHomeAdd"]);

                    // Check if input only contains letters, numbers, white spaces, commas, dots, hyphens, and slashes
                    if (!preg_match("/^[a-zA-Z0-9\s,.\/-]*$/", $studHomeAdd))
                    {
                        $studHomeAddErr = "Invalid format, please provide a valid home address";
                    }
                    if ($studHomeAdd == $studMailAdd)
                    {
                        $studHomeAdd = "";
                        $studHomeAddErr = "Home address is only required if it is different from the mailing address, redundant address has been removed";
                    }
                }

                // Validate student birth date
                if (empty ($_POST ["studBirthDate"]))
                {
                    $studBirthDateErr = "Birth date is required";
                }
                else
                {
                    $studBirthDate = test_input ($_POST ["studBirthDate"]);

                    // Check if the date is a valid format (YYYY-MM-DD)
                    if (!preg_match ("/^\d{4}-\d{2}-\d{2}$/", $studBirthDate))
                    {
                        $studBirthDateErr = "Invalid date format. Please use YYYY-MM-DD";
                    }
                    else
                    {
                        // Check if the date is a valid date
                        $dateArray = explode ("-", $studBirthDate);
                        $year = (int) $dateArray [0];
                        $month = (int) $dateArray [1];
                        $day = (int) $dateArray [2];

                        if (!checkdate ($month, $day, $year))
                        {
                            $studBirthDateErr = "Invalid format, please provide a valid birth date";
                        }
                        else
                        {
                            // Extract the birthday year, month, and day from the IC number
                            $icYear = (int) substr ($studIcNum, 0, 2);
                            $icMonth = (int) substr ($studIcNum, 2, 2);
                            $icDay = (int) substr ($studIcNum, 4, 2);

                            // Determine the century for the IC year
                            $currentYear = date ('Y');
                            $currentCentury = substr ($currentYear, 0, 2);

                            if ($icYear <= ($currentCentury - 1) % 100)
                            {
                                // If IC year is less than the current century (Born in the 1900s)
                                $icYear = (int) '20' . substr ($studIcNum, 0, 2);
                            }
                            else
                            {
                                // If IC year is greater than or equal to the current century (Born in the 2000s)
                                $icYear = (int) '19' . substr ($studIcNum, 0, 2);
                            }

                            // Extract the birth year, month, and day from the birth date
                            $birthYear = (int) $dateArray [0];
                            $birthMonth = (int) $dateArray [1];
                            $birthDay = (int) $dateArray [2];
                
                            // Check if the birth year, month, and day match the corresponding parts of the IC number
                            if ($birthYear != $icYear || $birthMonth != $icMonth || $birthDay != $icDay)
                            {
                                $studBirthDateErr = "Birth date does not match the IC number";
                                /*
                                Debugging Purposes
                                . "<br>
                                IC Year : " . $icYear . "<br>
                                IC Month : " . $icMonth . "<br>
                                IC Day : " . $icDay . "<br>
                                Birth Year : " . $birthYear . "<br>
                                Birth Month : " . $birthMonth . "<br>
                                Birth Day : " . $birthDay;
                                */
                            }
                        }
                    }
                }

                // Validate student age
                if (empty ($_POST ["studAge"]))
                {
                    $studAgeErr = "Age is required";
                }
                else
                {
                    $studAge = test_input ($_POST ["studAge"]);

                    // Check if input only contains numbers
                    if (!preg_match ("/^[0-9]+$/", $studAge))
                    {
                        $studAgeErr = "Invalid format, please provide a valid age";
                    }

                    else
                    {
                        // Calculate age from other inputs
                        $currentDate = new DateTime ();
                        $birthDate = new DateTime ($_POST ["studBirthDate"]);
                        $ageDerived = $birthDate -> diff ($currentDate) -> y;

                        // Check if age input match with the calculated age
                        if ($studAge != $ageDerived)
                        {
                            $studAgeErr = "Age does not match with the IC number and birthdate";
                            /*
                            Debugging Purposes
                            . "<br>
                            Student Age : $studAge<br>
                            Calculated Age : $ageDerived";
                            */
                        }
                    }
                }

                // Validate student email address
                if (empty ($_POST ["studEmailAdd"]))
                {
                    $studEmailAddErr = "Email address is required";
                }
                else
                {
                    $studEmailAdd = test_input ($_POST ["studEmailAdd"]);

                    // Check if the email address is valid
                    if (!filter_var ($studEmailAdd, FILTER_VALIDATE_EMAIL))
                    {
                        $studEmailAddErr = "Invalid format, please provide a valid email address";
                    }
                }

                // Validate student religion
                if (empty ($_POST ["studReligion"]))
                {
                    $studReligionErr = "Religion is required";
                }
                else
                {
                    $studReligion = test_input ($_POST ["studReligion"]);

                    // Check if input only contains letters and white spaces
                    if (!preg_match ("/^[a-zA-Z\s]*$/", $studReligion))
                    {
                        $studReligionErr = "Invalid format, please provide a valid religion";
                    }
                }

                // Validate student race
                if (empty ($_POST ["studRace"]))
                {
                    $studRaceErr = "Race is required";
                }
                else
                {
                    $studRace = test_input ($_POST ["studRace"]);

                    // Check if input only contains letters and white spaces
                    if (!preg_match ("/^[a-zA-Z\s]*$/", $studRace))
                    {
                        $studRaceErr = "Invalid format, please provide a valid race";
                    }
                }

                // Validate home phone number
                if (empty ($_POST ["homePhoneNo"]))
                {
                    $homePhoneNoErr = "Home phone number is required";
                }
                else
                {
                    $homePhoneNo = test_input ($_POST ["homePhoneNo"]);

                    // Check if input only contains numbers, white spaces, parantheses, hypens and plus sign
                    if (!preg_match ("/^[0-9\s\(\)\+\-]+$/", $homePhoneNo))
                    {
                        $homePhoneNoErr = "Invalid format, please provide a valid home phone number";
                    }
                }

                // Validate student ID
                if (empty ($_POST ["studId"]))
                {
                    $studIdErr = "Student ID is required";
                }
                else
                {
                    $studId = test_input ($_POST ["studId"]);

                    // Check if input only contains numbers and white spaces
                    if (!preg_match("/^[0-9\s]+$/", $studId))
                    {
                        $studIdErr = "Invalid format, please provide a valid student ID";
                    }
                }

                // Validate student phone number
                if (empty ($_POST ["studPhoneNo"]))
                {
                    $studPhoneNoErr = "Phone number is required";
                }
                else
                {
                    $studPhoneNo = test_input ($_POST ["studPhoneNo"]);

                    // Check if input only contains numbers, white spaces, parantheses, hypens and plus sign
                    if (!preg_match ("/^[0-9\s\(\)\+\-]+$/", $studPhoneNo))
                    {
                        $studPhoneNoErr = "Invalid format, please provide a valid personal phone number";
                    }
                }

                // Validate student disability status
                if (empty ($_POST ["studDisability"]))
                {
                    $studDisabilityErr = "Disability status is required";
                }
                else
                {
                    $studDisability = $_POST ["studDisability"];
                }

                // Validate student marital status
                if (empty ($_POST ["studMarital"]))
                {
                    $studMaritalErr = "Marital status is required";
                }
                else
                {
                    $studMarital = $_POST ["studMarital"];
                }

                // B) MAKLUMAT WARIS
                // Validate parent name
                if (empty ($_POST ["parentName"]))
                {
                    $parentNameErr = "Parent name is required";
                }
                else
                {
                    $parentName = test_input ($_POST ["parentName"]);
                    
                    // Check if input only contains letters, whitespaces, dots, hypens, back ticks and at sign
                    if (!preg_match ("/^[a-zA-Z\s\.\-`@]+$/", $parentName))
                    {
                        $parentNameErr = "Invalid format, please provide a valid parent name";
                    }
                }

                // Validate parent home address
                if (empty ($_POST ["parentHomeAdd"]))
                {
                    $parentHomeAddErr = "Parent home address is required";
                }
                else
                {
                    $parentHomeAdd = test_input ($_POST ["parentHomeAdd"]);

                    // Check if input only contains letters, numbers, whitespace, commas, dots, hyphens, and slashes
                    if (!preg_match ("/^[a-zA-Z0-9\s,.\/-]*$/", $parentHomeAdd))
                    {
                        $parentHomeAddErr = "Invalid format, please provide a valid parent home address";
                    }
                }

                // Validate parent phone number
                if (empty($_POST ["parentPhoneNo"]))
                {
                    $parentPhoneNoErr = "Parent phone number is required";
                }
                else
                {
                    $parentPhoneNo = test_input ($_POST ["parentPhoneNo"]);

                    // Check if input only contains numbers, white spaces, parantheses, hypens and plus sign
                    if (!preg_match ("/^[0-9\s\(\)\+\-]+$/", $parentPhoneNo))
                    {
                        $parentPhoneNoErr = "Invalid format, please provide a valid parent phone number";
                    }
                }

                // Validate parent relation
                if (empty ($_POST ["parentRelation"]))
                {
                    $parentRelationErr = "Parent relation is required";
                }
                else
                {
                    $parentRelation = $_POST ["parentRelation"];
                }


                // C) MAKLUMAT PENGAJIAN
                // Validate academic CGPA
                if (empty ($_POST ["academicCgpa"]))
                {
                    $academicCgpaErr = "Academic CGPA is required";
                }
                else
                {
                    $academicCgpa = test_input ($_POST ["academicCgpa"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $academicCgpa))
                    {
                        $academicCgpaErr = "Invalid format, please provide a valid CGPA value";
                    }
                    else if ($academicCgpa > 4.0)
                    {
                        $academicCgpaErr = "Invalid cgpa, please provide a valid CGPA value (maximum is 4.0)";
                    }
                }

                // Validate academic year
                if (empty ($_POST ["academicYear"]))
                {
                    $academicYearErr = "Academic year is required";
                }
                else
                {
                    $academicYear = test_input ($_POST ["academicYear"]);

                    // Check if input only contains numbers, white spaces and hypens
                    if (!preg_match ("/^[0-9\s.-]+$/", $academicYear))
                    {
                        $academicYearErr = "Invalid format, please provide a valid range of academic year";
                    }
                }

                // Validate academic program name
                if (empty ($_POST ["academicProgName"]))
                {
                    $academicProgNameErr = "Academic program name is required";
                }
                else
                {
                    $academicProgName = test_input ($_POST ["academicProgName"]);

                    // Check if input only contains letters, white spaces, dots and parantheses
                    if (!preg_match ("/^[a-zA-Z\s.()]+$/", $academicProgName))
                    {
                        $academicProgNameErr = "Invalid format, please provide a valid academic program name";
                    }
                }

                // Validate academic university name
                if (empty ($_POST ["academicUniName"]))
                {
                    $academicUniNameErr = "Academic university name is required";
                }
                else
                {
                    $academicUniName = test_input ($_POST ["academicUniName"]);

                    // Check if input only contains letters, white spaces and backticks
                    if (!preg_match ("/^[a-zA-Z\s`]+$/", $academicUniName))
                    {
                        $academicUniNameErr = "Invalid format, please provide a valid academic university name";
                    }
                }
                
                // D) KEMAHIRAN
                // Validate skill language
                // Malay language
                if (empty ($_POST ["skillMalayCom"]))
                {
                    $skillMalayComErr = "Malay language's communication skill expertise is required";
                }
                else
                {
                    $skillMalayCom = test_input ($_POST ["skillMalayCom"]);
                }
                
                if (empty ($_POST ["skillMalayWrite"]))
                {
                    $skillMalayWriteErr = "Malay language's writing skill expertise is required";
                }
                else
                {
                    $skillMalayWrite = test_input ($_POST ["skillMalayWrite"]);
                }

                // English language
                if (empty ($_POST ["skillEngCom"]))
                {
                    $skillEngComErr = "English language's communication skill expertise is required";
                }
                else
                {
                    $skillEngCom = test_input ($_POST ["skillEngCom"]);
                }
                
                if (empty ($_POST ["skillEngWrite"]))
                {
                    $skillEngWriteErr = "English language's writing skill expertise is required";
                }
                else
                {
                    $skillEngWrite = test_input ($_POST ["skillEngWrite"]);
                }

                // Other language
                if (empty ($_POST ["skillOtherCom"]))
                {
                    $skillOtherComErr = "Other languages' communication skill expertise is required";
                }
                else
                {
                    $skillOtherCom = test_input ($_POST ["skillOtherCom"]);
                }
                
                if (empty ($_POST ["skillOtherWrite"]))
                {
                    $skillOtherWriteErr = "Other languages' writing skill expertise is required";
                }
                else
                {
                    $skillOtherWrite = test_input ($_POST ["skillOtherWrite"]);
                }

                // Validate skill ict
                if (empty ($_POST ["skillIct"]))
                {
                    $skillIctErr = "ICT skill is required";
                }
                else
                {
                    $skillIct = test_input ($_POST ["skillIct"]);
                }

                // Validate skill computer
                if (empty ($_POST ["skillComp"]))
                {
                    $skillCompErr = "Computer skill is required";
                }
                else
                {
                    $skillComp = test_input ($_POST ["skillComp"]);
                }

                // Validate other skills
                if (empty ($_POST ["skillOther1"]))
                {
                    $skillOther1 = "";
                }
                else
                {
                    $skillOther1 = test_input ($_POST ["skillOther1"]);
                }

                if (empty ($_POST ["skillOther2"]))
                {
                    $skillOther2 = "";
                }
                else
                {
                    $skillOther2 = test_input ($_POST ["skillOther2"]);
                }

                if (empty ($_POST ["skillOther3"]))
                {
                    $skillOther3 = "";
                }
                else
                {
                    $skillOther3 = test_input ($_POST ["skillOther3"]);
                }

                // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
                // Validate course semester 1
                if (empty ($_POST ["s1CourseName"]))
                {
                    $s1CourseNameErr = "Course name for semester one is required";
                }
                else
                {
                    $s1CourseName = test_input ($_POST ["s1CourseName"]);

                    // Check if input only contains letters, numbers and whitespace
                    if (!preg_match ("/^[a-zA-Z0-9\s]*$/", $s1CourseName))
                    {
                        $s1CourseNameErr = "Invalid format, please provide a valid semester one course name";
                    }
                }

                // Validate course semester 2
                if (empty ($_POST ["s2CourseName"]))
                {
                    $s2CourseNameErr = "Course name for semester two is required";
                }
                else
                {
                    $s2CourseName = test_input ($_POST ["s2CourseName"]);

                    // Check if input only contains letters, numbers and whitespace
                    if (!preg_match ("/^[a-zA-Z0-9\s]*$/", $s2CourseName))
                    {
                        $s2CourseNameErr = "Invalid format, please provide a valid semester two course name";
                    }
                }

                // Validate course semester 3
                if (empty ($_POST ["s3CourseName"]))
                {
                    $s3CourseNameErr = "Course name for semester three is required";
                }
                else
                {
                    $s3CourseName = test_input ($_POST ["s3CourseName"]);

                    // Check if input only contains letters, numbers and whitespace
                    if (!preg_match ("/^[a-zA-Z0-9\s]*$/", $s3CourseName))
                    {
                        $s3CourseNameErr = "Invalid format, please provide a valid semester three course name";
                    }
                }

                // Validate course semester 4
                if (empty ($_POST ["s4CourseName"]))
                {
                    $s4CourseNameErr = "Course name for semester four is required";
                }
                else
                {
                    $s4CourseName = test_input ($_POST ["s4CourseName"]);

                    // Check if input only contains letters, numbers and whitespace
                    if (!preg_match ("/^[a-zA-Z0-9\s]*$/", $s4CourseName))
                    {
                        $s4CourseNameErr = "Invalid format, please provide a valid semester four course name";
                    }
                }

                // Validate course semester 5
                if (empty ($_POST ["s5CourseName"]))
                {
                    $s5CourseNameErr = "Course name for semester five is required";
                }
                else
                {
                    $s5CourseName = test_input ($_POST ["s5CourseName"]);

                    // Check if input only contains letters, numbers and whitespace
                    if (!preg_match ("/^[a-zA-Z0-9\s]*$/", $s5CourseName))
                    {
                        $s5CourseNameErr = "Invalid format, please provide a valid semester five course name";
                    }
                }

                // Validate whole course
                // Store course names into an array
                $courseNames = array ($s1CourseName, $s2CourseName, $s3CourseName, $s4CourseName, $s5CourseName);

                // Check for duplicate course names
                if (count ($courseNames) != count (array_unique ($courseNames)))
                {
                    // Check if all course name are null (default redundant)
                    if (array_filter ($courseNames, 'strlen') == array())
                    {
                        $wholeCourseNameErr = "";
                    }
                    else
                    {
                        $wholeCourseNameErr = "Course names are redundant, please provide vary course names";
                    }
                }

                // Validate grade value semester 1
                if (empty ($_POST ["s1GradeValue"]))
                {
                    $s1GradeValueErr = "Grade value for semester one is required";
                }
                else
                {
                    $s1GradeValue = test_input ($_POST ["s1GradeValue"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $s1GradeValue))
                    {
                        $s1GradeValueErr = "Invalid format, please provide a valid semester one grade value";
                    }
                    else if ($s1GradeValue > 4.0)
                    {
                        $s1GradeValueErr = "Invalid grade, please provide a valid grade value (maximum is 4.0)";
                    }
                }

                // Validate grade value semester 2
                if (empty ($_POST ["s2GradeValue"]))
                {
                    $s2GradeValueErr = "Grade value for semester two is required";
                }
                else
                {
                    $s2GradeValue = test_input ($_POST ["s2GradeValue"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $s2GradeValue))
                    {
                        $s2GradeValueErr = "Invalid format, please provide a valid semester two grade value";
                    }
                    else if ($s2GradeValue > 4.0)
                    {
                        $s2GradeValueErr = "Invalid grade, please provide a valid grade value (maximum is 4.0)";
                    }
                }

                // Validate grade value semester 3
                if (empty ($_POST ["s3GradeValue"]))
                {
                    $s3GradeValueErr = "Grade value for semester three is required";
                }
                else
                {
                    $s3GradeValue = test_input ($_POST ["s3GradeValue"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $s3GradeValue))
                    {
                        $s3GradeValueErr = "Invalid format, please provide a valid semester three grade value";
                    }
                    else if ($s3GradeValue > 4.0)
                    {
                        $s3GradeValueErr = "Invalid grade, please provide a valid grade value (maximum is 4.0)";
                    }
                }

                // Validate grade value semester 4
                if (empty ($_POST ["s4GradeValue"]))
                {
                    $s4GradeValueErr = "Grade value for semester four is required";
                }
                else
                {
                    $s4GradeValue = test_input ($_POST ["s4GradeValue"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $s4GradeValue))
                    {
                        $s4GradeValueErr = "Invalid format, please provide a valid semester four grade value";
                    }
                    else if ($s4GradeValue > 4.0)
                    {
                        $s4GradeValueErr = "Invalid grade, please provide a valid grade value (maximum is 4.0)";
                    }
                }

                // Validate grade value semester 5
                if (empty ($_POST ["s5GradeValue"]))
                {
                    $s5GradeValueErr = "Grade value for semester five is required";
                }
                else
                {
                    $s5GradeValue = test_input ($_POST ["s5GradeValue"]);

                    // Check if input only contains numbers, white spaces and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $s5GradeValue))
                    {
                        $s5GradeValueErr = "Invalid format, please provide a valid semester five grade value";
                    }
                    else if ($s5GradeValue > 4.0)
                    {
                        $s5GradeValueErr = "Invalid grade, please provide a valid grade value (maximum is 4.0)";
                    }
                }

                // Validate cocuriculum recognition
                if (empty ($_POST ["cocuRecog"]))
                {
                    $cocuRecogErr = "Cocuriculum recognition is required, please choose one";
                }
                else
                {
                    $cocuRecog = $_POST ["cocuRecog"];
                }

                // Validate other cocuriculum recognition
                if (empty ($_POST ["cocuRecogOther"]))
                {
                    $cocuRecogOther = "";
                }
                else
                {
                    $cocuRecogOther = test_input ($_POST ["cocuRecogOther"]);
                }

                // Validate anthropometrics height measurement
                if (empty ($_POST ["anthropoMetricsHeight"]))
                {
                    $anthropoMetricsHeightErr = "Height measurement is required";
                }
                else
                {
                    $anthropoMetricsHeight = test_input ($_POST ["anthropoMetricsHeight"]);

                    // Check if input only contains numbers, white spaces, and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $anthropoMetricsHeight))
                    {
                        $anthropoMetricsHeightErr = "Invalid format, please provide a valid value for height measurement";
                    }

                    // Limit for height measurement
                    else if ($anthropoMetricsHeight >= 300.0)
                    {
                        $anthropoMetricsHeightErr = "Non-existent height, please provide a legit value for height measurement";
                    }
                }

                // Validate anthropometrics weight measurement
                if (empty ($_POST ["anthropoMetricsWeight"]))
                {
                    $anthropoMetricsWeightErr = "Weight measurement is required";
                }
                else
                {
                    $anthropoMetricsWeight = test_input ($_POST ["anthropoMetricsWeight"]);

                    // Check if input only contains numbers, white spaces, and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $anthropoMetricsWeight))
                    {
                        $anthropoMetricsWeightErr = "Invalid format, please provide a valid value for weight measurement";
                    }

                    // Limit for weight measurement
                    else if ($anthropoMetricsWeight >= 300.0)
                    {
                        $anthropoMetricsWeightErr = "Non-existent weight, please provide a legit value for weight measurement";
                    }
                }

                // Validate anthropometrics chest normal measurement
                if (empty ($_POST ["anthropoMetricsChest"]))
                {
                    $anthropoMetricsChestErr = "Chest measurement is required";
                }
                else
                {
                    $anthropoMetricsChest = test_input ($_POST ["anthropoMetricsChest"]);

                    // Check if input only contains numbers, white spaces, and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $anthropoMetricsChest))
                    {
                        $anthropoMetricsChestErr = "Invalid format, please provide a valid value for chest measurement";
                    }

                    // Limit for chest measurement
                    else if ($anthropoMetricsChest >= 200.0)
                    {
                        $anthropoMetricsChestErr = "Non-existent measurement, please provide a legit value for chest normal measurement";
                    }
                }

                // Validate anthropometrics chest inhale measurement
                if (empty ($_POST ["anthropoMetricsChestInhale"]))
                {
                    $anthropoMetricsChestInhaleErr = "Chest inhale measurement is required";
                }
                else
                {
                    $anthropoMetricsChestInhale = test_input ($_POST ["anthropoMetricsChestInhale"]);

                    // Check if input only contains numbers, white spaces, and dots
                    if (!preg_match ("/^[0-9\s.]+$/", $anthropoMetricsChestInhale))
                    {
                        $anthropoMetricsChestInhaleErr = "Invalid format, please provide a valid value for chest inhale measurement";
                    }

                    // Limit for chest inhale measurement
                    else if ($anthropoMetricsChestInhale >= 200.0)
                    {
                        $anthropoMetricsChestInhaleErr = "Non-existent measurement, please provide a legit value for chest inhale measurement";
                    }
                }
            }

            // Validate inputs format
            function test_input ($data)
            {
                $data = trim ($data);
                $data = stripslashes ($data);
                $data = htmlspecialchars ($data);

                return $data;
            }

            // Redirect to formRead.php after clicking submit button
            if (isset ($_POST ['submit']))
            {
                // Display outputs after validate and process form data
                if (
                    // Program gap year
                    empty ($programGapYearErr) &&

                    // A) MAKLUMAT PERIBADI
                    empty ($studNameErr) && empty ($studIcNumErr) && empty ($studGenderErr) && empty ($studMailAddErr) &&
                    empty ($studHomeAddErr) && empty ($studBirthDateErr) && empty ($studAgeErr) && empty ($studEmailAddErr) &&
                    empty ($studReligionErr) && empty ($studRaceErr) && empty ($homePhoneNoErr) && empty ($studIdErr) &&
                    empty ($studPhoneNoErr) && empty ($studDisabilityErr) && empty ($studMaritalErr) &&
                    
                    // B) MAKLUMAT WARIS
                    empty ($parentNameErr) && empty ($parentHomeAddErr) && empty ($parentPhoneNoErr) && empty ($parentRelationErr) &&

                    // C) MAKLUMAT PENGAJIAN
                    empty ($academicCgpaErr) && empty ($academicYearErr) && empty ($academicProgNameErr) && empty ($academicUniNameErr) &&

                    // D) KEMAHIRAN
                    empty ($skillMalayComErr) && empty ($skillMalayWriteErr) && empty ($skillEngCompErr) && empty ($skillEngWriteErr) &&
                    empty ($skillOtherComErr) && empty ($skillOtherWriteErr) && empty ($skillIctErr) && empty ($skillCompErr) &&

                    // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
                    empty ($s1CourseNameErr) && empty ($s2CourseNameErr) && empty ($s3CourseNameErr) && empty ($s4CourseNameErr) &&
                    empty ($s5CourseNameErr) && empty ($wholeCourseNameErr) && empty ($s1GradeValueErr) && empty ($s2GradeValueErr) &&
                    empty ($s3GradeValueErr) && empty ($s4GradeValueErr) && empty ($s5GradeValueErr) && empty ($cocuRecogErr) && empty ($anthropoMetricsHeightErr) &&
                    empty ($anthropoMetricsWeightErr) && empty ($anthropoMetricsChestErr) && empty ($anthropoMetricsChestInhaleErr)
                    )
                {
                    session_start ();

                    // Set values in session
                    // Program gap year
                    $_SESSION ['programGapYear'] = $programGapYear;

                    // A) MAKLUMAT PERIBADI
                    $_SESSION ['studName'] = $studName;
                    $_SESSION ['studIcNum'] = $studIcNum;
                    $_SESSION ['studGender'] = $studGender;
                    $_SESSION ['studMailAdd'] = $studMailAdd;
                    $_SESSION ['studHomeAdd'] = $studHomeAdd;
                    $_SESSION ['studBirthDate'] = $studBirthDate;
                    $_SESSION ['studAge'] = $studAge;
                    $_SESSION ['studEmailAdd'] = $studEmailAdd;
                    $_SESSION ['studReligion'] = $studReligion;
                    $_SESSION ['studRace'] = $studRace;
                    $_SESSION ['homePhoneNo'] = $homePhoneNo;
                    $_SESSION ['studId'] = $studId;
                    $_SESSION ['studPhoneNo'] = $studPhoneNo;
                    $_SESSION ['studDisability'] = $studDisability;
                    $_SESSION ['studMarital'] = $studMarital;

                    // B) MAKLUMAT WARIS
                    $_SESSION ['parentName'] = $parentName;
                    $_SESSION ['parentHomeAdd'] = $parentHomeAdd;
                    $_SESSION ['parentPhoneNo'] = $parentPhoneNo;
                    $_SESSION ['parentRelation'] = $parentRelation;

                    // C) MAKLUMAT PENGAJIAN
                    $_SESSION ['academicCgpa'] = $academicCgpa;
                    $_SESSION ['academicYear'] = $academicYear;
                    $_SESSION ['academicProgName'] = $academicProgName;
                    $_SESSION ['academicUniName'] = $academicUniName;

                    // D) KEMAHIRAN
                    $_SESSION ['skillMalayCom'] = $skillMalayCom;
                    $_SESSION ['skillMalayWrite'] = $skillMalayWrite;
                    $_SESSION ['skillEngCom'] = $skillEngCom;
                    $_SESSION ['skillEngWrite'] = $skillEngWrite;
                    $_SESSION ['skillOtherCom'] = $skillOtherCom;
                    $_SESSION ['skillOtherWrite'] = $skillOtherWrite;
                    $_SESSION ['skillIct'] = $skillIct;
                    $_SESSION ['skillComp'] = $skillComp;
                    $_SESSION ['skillOther1'] = $skillOther1;
                    $_SESSION ['skillOther2'] = $skillOther2;
                    $_SESSION ['skillOther3'] = $skillOther3;

                    // E) KURSUS KOKURIKULUM DIIKUTI SEMASA PENGAJIAN
                    $_SESSION ['s1CourseName'] = $s1CourseName;
                    $_SESSION ['s2CourseName'] = $s2CourseName;
                    $_SESSION ['s3CourseName'] = $s3CourseName;
                    $_SESSION ['s4CourseName'] = $s4CourseName;
                    $_SESSION ['s5CourseName'] = $s5CourseName;
                    $_SESSION ['s1GradeValue'] = $s1GradeValue;
                    $_SESSION ['s2GradeValue'] = $s2GradeValue;
                    $_SESSION ['s3GradeValue'] = $s3GradeValue;
                    $_SESSION ['s4GradeValue'] = $s4GradeValue;
                    $_SESSION ['s5GradeValue'] = $s5GradeValue;
                    $_SESSION ['cocuRecog'] = $cocuRecog;
                    $_SESSION ['cocuRecogOther'] = $cocuRecogOther;
                    $_SESSION ['anthropoMetricsHeight'] = $anthropoMetricsHeight;
                    $_SESSION ['anthropoMetricsWeight'] = $anthropoMetricsWeight;
                    $_SESSION ['anthropoMetricsChest'] = $anthropoMetricsChest;
                    $_SESSION ['anthropoMetricsChestInhale'] = $anthropoMetricsChestInhale;

                    // Redirect to formRead.php using Absolute URL
                    // echo '<script>window.location.href = "http://localhost/ICT600/Assignment/php/formRead.php";</script>';
                    header ("Location: formRead.php");
                    exit ();
                }
                // Display feedback message for fail form submission
                else
                {
                    echo '<script src = "../js/script.js"></script>';
                    echo '<script>handleFormFail ();</script>';
                }
            }
        ?>

        <div class = "outer">
            <h2 class = "header2">Permohonan Program Gap Year</h2>
            <p class = "header2">Kesukarelawanan Khidmat Negara<p>
            <p><span class = "error"></span></p>

            <form method = "post" action = "<?php echo htmlspecialchars ($_SERVER ["PHP_SELF"]); ?>">
                <p class = "header2">Sila Pilih Program Yang Akan Disertai
                <br>

                UiTM | 
                <input type = "radio" name = "programGapYear"
                <?php if (isset ($programGapYear) && $programGapYear == "uitmATM") echo "checked"; ?> value = "uitmATM"> Angkatan Tentera Malaysia | 
                <input type = "radio" name = "programGapYear"
                <?php if (isset ($programGapYear) && $programGapYear == "uitmAPAM") echo "checked"; ?> value = "uitmAPAM"> Angkatan Pertahanan Awam Malaysia
                <br>

                UKM | 
                <input type = "radio" name = "programGapYear"
                <?php if (isset ($programGapYear) && $programGapYear == "ukmPDRM") echo "checked"; ?> value = "ukmPDRM"> Polis Diraja Malaysia
                <br>
                <span class = "error">* <?php echo $programGapYearErr; ?></span>
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
                                <input class = "inputLong" type = "text" name = "studName" maxlength = "45"
                                placeholder = "Example : Ya`qub Qamar Ad-din Dibiazah @ Dibiyazah" value = "<?php echo $studName; ?>">
                                <span class = "error">* <?php echo $studNameErr;?></span>
                                <br><br>

                                Kad Pengenalan :
                                <input class = "inputMedium" type = "text" name = "studIcNum" maxlength = "14"
                                placeholder = "Example : 021225-10-1387" value = "<?php echo $studIcNum; ?>">
                                <span class = "error">* <?php echo $studIcNumErr;?></span>
                                <br><br>

                                Jantina :
                                Lelaki <input type = "radio" name = "studGender"
                                <?php if (isset ($studGender) && $studGender == "male") echo "checked";?> value = "male">
                                Perempuan <input type = "radio" name = "studGender"
                                <?php if (isset ($studGender) && $studGender == "female") echo "checked";?> value = "female">
                                <span class = "error">* <?php echo $studGenderErr;?></span>
                                <br><br>

                                Alamat Surat Menyurat :
                                <textarea name = "studMailAdd" rows = "3" cols = "40" maxlength = "150"
                                placeholder = "Example : UniStorage UiTM-Arau, Lot 6, Anjung Siswa, UiTM Kampus Arau, 02600 Arau, Perlis"><?php echo $studMailAdd; ?></textarea>
                                <span class = "error">* <?php echo $studMailAddErr;?></span>
                                <br><br>

                                Alamat Tetap (jika berbeza) :
                                <textarea name = "studHomeAdd" rows = "3" cols = "40" maxlength = "150"
                                placeholder = "Example : Cengal 3, UiTM Kampus Arau, 02600 Arau, Perlis"><?php echo $studHomeAdd; ?></textarea>
                                <span class = "error">* <?php echo $studHomeAddErr;?></span>
                                <br><br>

                                Tarikh Lahir :
                                <input type = "date" name = "studBirthDate" min = "1950-01-01" max = "2006-01-01"
                                value = "<?php echo $studBirthDate; ?>">
                                <span class = "error">* <?php echo $studBirthDateErr;?></span>
                                <br><br>

                                Umur :
                                <input class = "inputShort" type = "text" name = "studAge" maxlength = "2"
                                placeholder = "Example : 20" value = "<?php echo $studAge; ?>">
                                <span class = "error">* <?php echo $studAgeErr;?></span>
                                <br><br>

                                Alamat E-mail :
                                <input class = "inputLong" type = "text" name = "studEmailAdd" maxlength = "50"
                                placeholder = "Example : 2021614276@student.uitm.edu.my" value = "<?php echo $studEmailAdd; ?>">
                                <span class = "error">* <?php echo $studEmailAddErr;?></span>
                                <br><br>

                                Agama :
                                <input class = "inputShort" type = "text" name = "studReligion" maxlength = "20"
                                placeholder = "Example : Islam" value = "<?php echo $studReligion; ?>">
                                <span class = "error">* <?php echo $studReligionErr;?></span>
                                <br><br>

                                Bangsa :
                                <input class = "inputShort" type = "text" name = "studRace" maxlength = "20"
                                placeholder = "Example : Malay" value = "<?php echo $studRace; ?>">
                                <span class = "error">* <?php echo $studRaceErr;?></span>
                                <br><br>

                                No. Telefon Rumah :
                                <input class = "inputMedium" type = "text" name = "homePhoneNo" maxlength = "20"
                                placeholder = "Example : (+60) 4234-4239" value = "<?php echo $homePhoneNo; ?>">
                                <span class = "error">* <?php echo $homePhoneNoErr;?></span>
                                <br><br>

                                No. Matrik Pelajar :
                                <input class = "inputMedium" type = "text" name = "studId" maxlength = "10"
                                placeholder = "Example : 2021614276" value = "<?php echo $studId; ?>">
                                <span class = "error">* <?php echo $studIdErr;?></span>
                                <br><br>

                                No. Telefon Bimbit :
                                <input class = "inputLong" type = "text" name = "studPhoneNo" maxlength = "20"
                                placeholder = "Example : (+60) 19 792-0812" value = "<?php echo $studPhoneNo; ?>">
                                <span class = "error">* <?php echo $studPhoneNoErr;?></span>
                                <br><br>

                                Kecacatan Anggota :
                                Ada <input type = "radio" name = "studDisability"
                                <?php if (isset ($studDisability) && $studDisability == "ada") echo "checked"; ?> value = "ada">
                                Tiada <input type = "radio" name = "studDisability"
                                <?php if (isset ($studDisability) && $studDisability  == "tiada") echo "checked"; ?> value = "tiada">
                                <span class = "error">* <?php echo $studDisabilityErr;?></span>
                                <br><br>

                                Taraf Perkahwinan :
                                Bujang <input type = "radio" name = "studMarital"
                                <?php if (isset ($studMarital) && $studMarital  == "bujang") echo "checked";?> value = "bujang">
                                Berkahwin <input type = "radio" name = "studMarital"
                                <?php if (isset ($studMarital) && $studMarital  == "kahwin") echo "checked";?> value = "kahwin">
                                <span class = "error">* <?php echo $studMaritalErr;?></span>
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
                                <input class = "inputLong" type = "text" name = "parentName" maxlength = "45"
                                placeholder = "Example : Khaleed I.S. Kashimiri" value = "<?php echo $parentName; ?>">
                                <span class = "error">* <?php echo $parentNameErr;?></span>
                                <br><br>

                                Alamat Rumah Waris :
                                <textarea name = "parentHomeAdd" rows = "3" cols = "40" maxlength = "150"
                                placeholder = "Example : No.42, Jalan Kenangan 5, Taman Warisan Emas, 11200 Bandar Ciro-ciro, Land of Dawn"><?php echo $parentHomeAdd; ?></textarea>
                                <span class = "error">* <?php echo $parentHomeAddErr;?></span>
                                <br><br>

                                No. Telefon Waris :
                                <input class = "inputLong" type = "text" name = "parentPhoneNo" maxlength = "20"
                                placeholder = "Example : (+60) 19-314-1345" value = "<?php echo $parentPhoneNo; ?>">
                                <span class = "error">* <?php echo $parentPhoneNoErr;?></span>
                                <br><br>

                                Hubungan :
                                <select name = "parentRelation">
                                    <option value = "" selected disabled>Select parent relation with the student</option>
                                    <option value = "mother" <?php if ($parentRelation == 'mother') echo 'selected'?>>Ibu Kandung</option>
                                    <option value = "stepmother" <?php if ($parentRelation == 'stepmother') echo 'selected'?>>Ibu Tiri</option>
                                    <option value = "father" <?php if ($parentRelation == 'father') echo 'selected'?>>Bapa Kandung</option>
                                    <option value = "stepfather" <?php if ($parentRelation == 'stepfather') echo 'selected'?>>Bapa Tiri</option>
                                    <option value = "grandmother" <?php if ($parentRelation == 'grandmother') echo 'selected'?>>Nenek</option>
                                    <option value = "grandfather" <?php if ($parentRelation == 'grandfather') echo 'selected'?>>Datuk</option>
                                    <option value = "aunt" <?php if ($parentRelation == 'aunt') echo 'selected'?>>Ibu Saudara</option>
                                    <option value = "uncle" <?php if ($parentRelation == 'uncle') echo 'selected'?>>Bapa Saudara</option>
                                    <option value = "guardian" <?php if ($parentRelation == 'guardian') echo 'selected'?>>Waris / Penjaga</option>
                                </select>
                                <span class="error">* <?php echo $parentRelationErr;?></span>
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
                                <input class = "inputShort" type = "text" name = "academicCgpa" maxlength = "4"
                                placeholder = "Example : 3.88" value = "<?php echo $academicCgpa; ?>">
                                <span class = "error">* <?php echo $academicCgpaErr;?></span>
                                <br><br>

                                Tahun Pengajian :
                                <input class = "inputMedium" type = "text" name = "academicYear" maxlength = "15"
                                placeholder = "Example : 2021 - 2024" value = "<?php echo $academicYear; ?>">
                                <span class = "error">* <?php echo $academicYearErr;?></span>
                                <br><br>

                                Nama Bidang Pengajian :
                                <input class = "inputLong" type = "text" name = "academicProgName" maxlength = "100"
                                placeholder = "Example : Bachelor of Information Technology (Hons.)" value = "<?php echo $academicProgName; ?>">
                                <span class = "error">* <?php echo $academicProgNameErr;?></span>
                                <br><br>

                                Nama Universiti :
                                <input class = "inputLong" type = "text" name = "academicUniName"  maxlength = "100"
                                placeholder = "Example : Taylor`s University" value = "<?php echo $academicUniName; ?>">
                                <span class = "error">* <?php echo $academicUniNameErr;?></span>
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
                                <span class = "error">* <?php echo $skillMalayComErr; ?></span>
                                <span class = "error">* <?php echo $skillMalayWriteErr; ?></span>
                                <span class = "error">* <?php echo $skillEngComErr; ?></span>
                                <span class = "error">* <?php echo $skillEngWriteErr; ?></span>
                                <span class = "error">* <?php echo $skillOtherComErr; ?></span>
                                <span class = "error">* <?php echo $skillOtherWriteErr; ?></span>

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
                                        <td><input type = "radio" name = "skillMalayCom"
                                        <?php if (isset ($skillMalayCom) && $skillMalayCom == "malayComFluent") echo "checked"; ?>  value = "malayComFluent"></td>
                                        <td><input type = "radio" name = "skillMalayCom"
                                        <?php if (isset ($skillMalayCom) && $skillMalayCom == "malayComMid") echo "checked"; ?>  value = "malayComMid"></td>
                                        <td><input type = "radio" name = "skillMalayCom"
                                        <?php if (isset ($skillMalayCom) && $skillMalayCom == "malayComWorse") echo "checked"; ?>  value = "malayComWorse"></td>
                                        <td><input type = "radio" name = "skillMalayWrite"
                                        <?php if (isset ($skillMalayWrite) && $skillMalayWrite == "malayWriteFluent") echo "checked"; ?> value = "malayWriteFluent"></td>
                                        <td><input type = "radio" name = "skillMalayWrite"
                                        <?php if (isset ($skillMalayWrite) && $skillMalayWrite == "malayWriteMid") echo "checked"; ?> value = "malayWriteMid"></td>
                                        <td><input type = "radio" name = "skillMalayWrite"
                                        <?php if (isset ($skillMalayWrite) && $skillMalayWrite == "malayWriteWorse") echo "checked"; ?> value = "malayWriteWorse"></td>
                                    </tr>

                                    <tr>
                                        <td>Inggeris</td>
                                        <td><input type = "radio" name = "skillEngCom"
                                        <?php if (isset ($skillEngCom) && $skillEngCom == "engComFluent") echo "checked"; ?>  value = "engComFluent"></td>
                                        <td><input type = "radio" name = "skillEngCom"
                                        <?php if (isset ($skillEngCom) && $skillEngCom == "engComMid") echo "checked"; ?>  value = "engComMid"></td>
                                        <td><input type = "radio" name = "skillEngCom"
                                        <?php if (isset ($skillEngCom) && $skillEngCom == "engComWorse") echo "checked"; ?>  value = "engComWorse"></td>
                                        <td><input type = "radio" name = "skillEngWrite"
                                        <?php if (isset ($skillEngWrite) && $skillEngWrite == "engWriteFluent") echo "checked"; ?> value = "engWriteFluent"></td>
                                        <td><input type = "radio" name = "skillEngWrite"
                                        <?php if (isset ($skillEngWrite) && $skillEngWrite == "engWriteMid") echo "checked"; ?> value = "engWriteMid"></td>
                                        <td><input type = "radio" name = "skillEngWrite"
                                        <?php if (isset ($skillEngWrite) && $skillEngWrite == "engWriteWorse") echo "checked"; ?> value = "engWriteWorse"></td>
                                    </tr>

                                    <tr>
                                        <td>Lain-Lain</td>
                                        <td><input type = "radio" name = "skillOtherCom"
                                        <?php if (isset ($skillOtherCom) && $skillOtherCom == "otherComFluent") echo "checked"; ?> value = "otherComFluent"></td>
                                        <td><input type = "radio" name = "skillOtherCom"
                                        <?php if (isset ($skillOtherCom) && $skillOtherCom == "otherComMid") echo "checked"; ?> value = "otherComMid"></td>
                                        <td><input type = "radio" name = "skillOtherCom"
                                        <?php if (isset ($skillOtherCom) && $skillOtherCom == "otherComWorse") echo "checked"; ?> value = "otherComWorse"></td>
                                        <td><input type = "radio" name = "skillOtherWrite"
                                        <?php if (isset ($skillOtherWrite) && $skillOtherWrite == "otherWriteFluent") echo "checked"; ?> value = "otherWriteFluent"></td>
                                        <td><input type = "radio" name = "skillOtherWrite"
                                        <?php if (isset ($skillOtherWrite) && $skillOtherWrite == "otherWriteMid") echo "checked"; ?> value = "otherWriteMid"></td>
                                        <td><input type = "radio" name = "skillOtherWrite"
                                        <?php if (isset ($skillOtherWrite) && $skillOtherWrite == "otherWriteWorse") echo "checked"; ?> value = "otherWriteWorse"></td>
                                    </tr>
                                </table>
                                <br><br>

                                Kemahiran ICT / Komputer :
                                <span class = "error">* <?php echo $skillIctErr; ?></span>
                                <span class = "error">* <?php echo $skillCompErr; ?></span>
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
                                        <td><input type = "radio" name = "skillIct"
                                        <?php if (isset ($skillIct) && $skillIct == "ictPro") echo "checked"; ?> value = "ictPro"></td>
                                        <td><input type = "radio" name = "skillIct"
                                        <?php if (isset ($skillIct) && $skillIct == "ictMid") echo "checked"; ?> value = "ictMid"></td>
                                        <td><input type = "radio" name = "skillIct"
                                        <?php if (isset ($skillIct) && $skillIct == "ictWorse") echo "checked"; ?> value = "ictWorse"></td>
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
                                        <td><input type = "radio" name = "skillComp"
                                        <?php if (isset ($skillComp) && $skillComp == "compPro") echo "checked"; ?> value = "compPro"></td>
                                        <td><input type = "radio" name = "skillComp"
                                        <?php if (isset ($skillComp) && $skillComp == "compMid") echo "checked"; ?> value = "compMid"></td>
                                        <td><input type = "radio" name = "skillComp"
                                        <?php if (isset ($skillComp) && $skillComp == "compWorse") echo "checked"; ?> value = "compWorse"></td>
                                    </tr>
                                </table>
                                <br><br>

                                Lain-Lain Kemahiran
                                <br><br>
                                <table>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input class = "inputLong" type = "text" name = "skillOther1" maxlength = "45"
                                            placeholder = "Example : Table Normalization" value = "<?php echo $skillOther1; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input class = "inputLong" type = "text" name = "skillOther2" maxlength = "45"
                                            placeholder = "Example : ERD Data Modelling" value = "<?php echo $skillOther2; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input class = "inputLong" type = "text" name = "skillOther3" maxlength = "45"
                                            placeholder = "Example : SQL Coding" value = "<?php echo $skillOther3; ?>">
                                        </td>
                                    </tr>
                                </table>
                                <br>
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
                                <span class = "error">* <?php echo $s1CourseNameErr; ?></span>
                                <span class = "error">* <?php echo $s2CourseNameErr; ?></span>
                                <span class = "error">* <?php echo $s3CourseNameErr; ?></span>
                                <span class = "error">* <?php echo $s4CourseNameErr; ?></span>
                                <span class = "error">* <?php echo $s5CourseNameErr; ?></span>
                                <span class = "error">* <?php echo $wholeCourseNameErr; ?></span>
                                <span class = "error">* <?php echo $s1GradeValueErr; ?></span>
                                <span class = "error">* <?php echo $s2GradeValueErr; ?></span>
                                <span class = "error">* <?php echo $s3GradeValueErr; ?></span>
                                <span class = "error">* <?php echo $s4GradeValueErr; ?></span>
                                <span class = "error">* <?php echo $s5GradeValueErr; ?></span>
                                <br><br>
                                <table>
                                    <tr>
                                        <th>Semester</th>
                                        <th>Nama Kursus Kokurikulum</th>
                                        <th>Nilai Gred</th>
                                    </tr>
                                    <tr>
                                        <th>Semester 01</th>
                                        <td><input class = "inputLong" type = "text" name = "s1CourseName" maxlength = "20"
                                        placeholder = "Example : Kesatria Pemula I" value = "<?php echo $s1CourseName; ?>"></td>
                                        <td><input class = "inputShort" type = "text" name = "s1GradeValue" maxlength = "4"
                                        placeholder = "Example : 3.67" value = "<?php echo $s1GradeValue; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Semester 02</th>
                                        <td><input class = "inputLong" type = "text" name = "s2CourseName" maxlength = "20"
                                        placeholder = "Example : Kesatria Pemula II" value = "<?php echo $s2CourseName; ?>"></td>
                                        <td><input class = "inputShort" type = "text" name = "s2GradeValue" maxlength = "4"
                                        placeholder = "Example : 3.83" value = "<?php echo $s2GradeValue; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Semester 03</th>
                                        <td><input class = "inputLong" type = "text" name = "s3CourseName" maxlength = "20"
                                        placeholder = "Example : Kesatria Pemula III" value = "<?php echo $s3CourseName; ?>"></td>
                                        <td><input class = "inputShort" type = "text" name = "s3GradeValue" maxlength = "4"
                                        placeholder = "Example : 3.66" value = "<?php echo $s3GradeValue; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Semester 04</th>
                                        <td><input class = "inputLong" type = "text" name = "s4CourseName" maxlength = "20"
                                        placeholder = "Example : Kesatria Agong I" value = "<?php echo $s4CourseName; ?>"></td>
                                        <td><input class = "inputShort" type = "text" name = "s4GradeValue" maxlength = "4"
                                        placeholder = "Example : 3.58" value = "<?php echo $s4GradeValue; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Semester 05</th>
                                        <td><input class = "inputLong" type = "text" name = "s5CourseName" maxlength = "20"
                                        placeholder = "Example : Kesatria Agong II" value = "<?php echo $s5CourseName; ?>"></td>
                                        <td><input class = "inputShort" type = "text" name = "s5GradeValue" maxlength = "4"
                                        placeholder = "Example : 3.85" value = "<?php echo $s5GradeValue; ?>"></td>
                                    </tr>
                                </table>
                                <br><br>

                                Pengiktirafan Kokurikulum Badan Beruniform :
                                <span class = "error">* <?php echo $cocuRecogErr; ?></span>
                                <br><br>
                                <table>
                                    <tr>
                                        <th rowspan = "3">ATM</th>
                                        <td>Leftenan Muda (Palapes Darat)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog == "atmLtLand") echo "checked"; ?> value = "atmLtLand"></td>
                                    </tr>
                                    <tr>
                                        <td>Leftenan Muda (Palapes Laut)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "atmLtSea") echo "checked"; ?> value = "atmLtSea"></td>
                                    </tr>
                                    <tr>
                                        <td>Leftenan Muda (Palapes Udara)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "atmLtAir") echo "checked"; ?> value = "atmLtAir"></td>
                                    </tr>
                                    <tr>
                                        <th>PDRM</th>
                                        <td>Inspektor (Sukarelawan Polis)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "pdrmVolun") echo "checked"; ?> value = "pdrmVolun"></td>
                                    </tr>
                                    <tr>
                                        <th>APM</th>
                                        <td>Leftenan Muda (Pertahanan Awam)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "apmLt") echo "checked"; ?> value = "apmLt"></td>
                                    </tr>
                                    <tr>
                                        <th>UiTM</th>
                                        <td>Leftenan Muda (Kesatria)</td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "uitmKnight") echo "checked"; ?> value = "uitmKnight"></td>
                                    </tr>
                                    <tr>
                                        <td>Lain-Lain (Nyatakan)</td>
                                        <td><input class = "inputLong" type = "text" name = "cocuRecogOther" value = "<?php echo $cocuRecogOther; ?>"></td>
                                        <td><input type = "radio" name = "cocuRecog"
                                        <?php if (isset ($cocuRecog) && $cocuRecog  == "cocuElse") echo "checked"; ?> value = "cocuElse"></td>
                                    </tr>
                                </table>
                                <br><br>

                                Maklumat Fizikal (Khas bagi ATM) :
                                <span class = "error">* <?php echo $anthropoMetricsHeightErr; ?></span>
                                <span class = "error">* <?php echo $anthropoMetricsWeightErr; ?></span>
                                <span class = "error">* <?php echo $anthropoMetricsChestErr; ?></span>
                                <span class = "error">* <?php echo $anthropoMetricsChestInhaleErr; ?></span>
                                <br><br>
                                <table>
                                    <tr>
                                        <th colspan = "2">Ukuran</th>
                                    </tr>
                                    <tr>
                                        <th>Ketinggian (cm)</th>
                                        <td><input class = "inputShort" type = "text" name = "anthropoMetricsHeight" maxlength = "6"
                                        placeholder = "182.4" value = "<?php echo $anthropoMetricsHeight; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Berat (kg)</th>
                                        <td><input class = "inputShort" type = "text" name = "anthropoMetricsWeight" maxlength = "6"
                                        placeholder = "68.9" value = "<?php echo $anthropoMetricsWeight; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Dada (Biasa) (cm)</th>
                                        <td><input class = "inputShort" type = "text" name = "anthropoMetricsChest" maxlength = "6"
                                        placeholder = "90.3" value = "<?php echo $anthropoMetricsChest; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Dada (Tarik Nafas) (cm)</th>
                                        <td><input class = "inputShort" type = "text" name = "anthropoMetricsChestInhale"  maxlength = "6"
                                        placeholder = "95.0" value = "<?php echo $anthropoMetricsChestInhale; ?>"></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <input id = "formSubmit" class = "submit" type = "submit" name = "submit" value = "Submit">
            </form>
        </div>

        <?php
            // Insert footer reference
            include ('footer.php');
        ?>
    </body>
</html>