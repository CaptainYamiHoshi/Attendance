<?php
    $conn = new mysqli('localhost', 'root', '', 'student_attendance_db');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link rel="stylesheet" href="teacher_homepage.css">
    <script src="teacher_homepage.js" defer></script>
</head>
<body>
    <nav id="navbar">
        <h3>Attendance System</h3>
        
        <div class="user-info">
            <span class="professor-name">Professor</span>
            <a href="">SIGN OUT</a>
        </div>
    </nav>

    <div class="main">
            <aside class="sidebar">
                <h3>Subjects</h3>
                <ul class="options">
                    <li>IT - Elective</li>
                    <ul class="sub_options">
                        <li><a href=""><span>Section A</span></a></li>
                        <li><a href=""><span>Section B</span></a></li>
                        <li><a href=""><span>Section C</span></a></li>
                    </ul>
                </ul>
            </aside>
    
            <main>
                <h3 id="subject_title">
                    IT Elective 2 - LAB
                </h3>

                <div class="attendance" id="section_a">
                    <div class="attendance-head">
                        <h2>Section A</h2>         
                        <div class="options">
                            <button id="set_attendance">SET ATTENDANCE
                                <img src="Assets/add_attendance.svg" alt="">
                            </button>
                            <button id="edit">EDIT STUDENT LIST
                                <img src="Assets/edit.svg" alt="">
                            </button>
                            <button id="table_expander">
                                <img src="Assets/table_adjust.svg" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="student_table">
                        <div>
                            <table>
                                <tr>
                                    <th>School ID</th>
                                    <th>Name</th>
                                    <th>Attendance Status</th>
                                </tr>
                                <tr>
                                    <td>202300001</td>
                                    <td>John Doe</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300002</td>
                                    <td>Jane Smith</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300003</td>
                                    <td>Michael Johnson</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300004</td>
                                    <td>Emily Brown</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300005</td>
                                    <td>Daniel White</td>
                                    <td>Absent</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="attendance" id="section_b">
                    <div class="attendance-head">
                        <h2>Section B</h2>         
                        <div class="options">
                            <button id="set_attendance">SET ATTENDANCE
                                <img src="Assets/add_attendance.svg" alt="">
                            </button>
                            <button id="edit">EDIT STUDENT LIST
                                <img src="Assets/edit.svg" alt="">
                            </button>
                            <button id="table_expander">
                                <img src="Assets/table_adjust.svg" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="student_table open">
                        <div>
                            <table>
                                <tr>
                                    <th>School ID</th>
                                    <th>Name</th>
                                    <th>Attendance Status</th>
                                </tr>
                                <tr>
                                    <td>202300001</td>
                                    <td>John Doe</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300002</td>
                                    <td>Jane Smith</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300003</td>
                                    <td>Michael Johnson</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300004</td>
                                    <td>Emily Brown</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300005</td>
                                    <td>Daniel White</td>
                                    <td>Absent</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="attendance" id="section_c">
                    <div class="attendance-head">
                        <h2>Section C</h2>         
                        <div class="options">
                            <button id="set_attendance">SET ATTENDANCE
                                <img src="Assets/add_attendance.svg" alt="">
                            </button>
                            <button id="edit">EDIT STUDENT LIST
                                <img src="Assets/edit.svg" alt="">
                            </button>
                            <button id="table_expander">
                                <img src="Assets/table_adjust.svg" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="student_table open">
                        <div>
                            <table>
                                <tr>
                                    <th>School ID</th>
                                    <th>Name</th>
                                    <th>Attendance Status</th>
                                </tr>
                                <tr>
                                    <td>202300001</td>
                                    <td>John Doe</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300002</td>
                                    <td>Jane Smith</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300003</td>
                                    <td>Michael Johnson</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300004</td>
                                    <td>Emily Brown</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>202300005</td>
                                    <td>Daniel White</td>
                                    <td>Absent</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
    </div>
</body>
</html>

