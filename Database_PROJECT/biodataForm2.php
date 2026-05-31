<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Data Form</title>
</head>

<body>
    <form action="form_submit.php" method="POST" enctype="multipart/form-data">
        <table width="800" border="1" cellpadding="30" cellspacing="5" align="center">
            <tr>
                <td>
                    <h2 align="center"><u>BIO-DATA</u></h2>
                    <table width="100%" cellpadding="4">
                        <tr>
                            <td width="40%">Name</td>
                            <td width="5%">:</td>
                            <td><input type="text" size="47" name="name" required></td>
                        </tr>
                        <tr>
                            <td>Father's Name</td>
                            <td>:</td>
                            <td><input type="text" size="47" name="father_name" required></td>
                        </tr>
                        <tr>
                            <td>Mother's Name</td>
                            <td>:</td>
                            <td><input type="text" size="47" name="mother_name" required></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>
                                <select name="birth_day" required>
                                    <option value="">DAY</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                </select>
                                <select name="birth_month" required>
                                    <option value="">MONTH</option>
                                    <option value="jan">JAN</option>
                                    <option value="feb">FEB</option>
                                    <option value="mar">MAR</option>
                                    <option value="apr">APR</option>
                                    <option value="may">MAY</option>
                                    <option value="jun">JUN</option>
                                    <option value="jul">JUL</option>
                                    <option value="aug">AUG</option>
                                    <option value="sep">SEP</option>
                                    <option value="oct">OCT</option>
                                    <option value="nov">NOV</option>
                                    <option value="dec">DEC</option>
                                </select>
                                <select name="birth_year" required>
                                   <option value="">YEAR</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="gender" value="male" id="male" required>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="female" id="female" required>
                                <label for="female">Female</label>
                                <input type="radio" name="gender" value="other" id="other" required>
                                <label for="other">Other</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Contact No</td>
                            <td>:</td>
                            <td><input type="text" size="47" name="contact" required></td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>:</td>
                            <td><input type="text" size="47" name="nationality" required></td>
                        </tr>
                        <tr>
                            <td>Email ID</td>
                            <td>:</td>
                            <td><input type="email" size="47" name="email" required></td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>:</td>
                            <td><input type="text" size="47" name="religion" required></td>
                        </tr>
                        <tr>
                            <td>Marital Status</td>
                            <td>:</td>
                            <td><input type="text"center size="47" name="marital_status" required></td>
                        </tr>
                        <tr>
                            <td>
                                Upload Photo
                            </td>
                            <td>:</td>
                            <td>
                                <input type="file" size="47" name="file" accept=".jpg, .jpeg, .png" required>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Address</td>
                            <td valign="top">:</td>
                            <td>
                                <textarea name="address" rows="4" cols="60" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <u>Educational Qualifications</u>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" border="1" cellpadding="4" cellspacing="0">
                        <tr>
                            <th>Name of Exam</th>
                            <th>Year of Passing</th>
                            <th>Board/University</th>
                            <th>Percentage</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="exam1"></td>
                            <td><input type="text" name="year1"></td>
                            <td><input type="text" name="board1"></td>
                            <td><input type="text" name="percentage1"></td>
                            <td><input type="text" name="grade1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="exam2"></td>
                            <td><input type="text" name="year2"></td>
                            <td><input type="text" name="board2"></td>
                            <td><input type="text" name="percentage2"></td>
                            <td><input type="text" name="grade2"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="exam3"></td>
                            <td><input type="text" name="year3"></td>
                            <td><input type="text" name="board3"></td>
                            <td><input type="text" name="percentage3"></td>
                            <td><input type="text" name="grade3"></td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" cellpadding="4">
                        <tr>
                            <td width="40%" valign="top">Experience</td>
                            <td width="5%" valign="top">:</td>
                            <td valign="top">
                                <textarea name="experience" rows="4" cols="60" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" valign="top">Computer Knowledge</td>
                            <td width="5%" valign="top">:</td>
                            <td valign="top">
                                <textarea name="computer_knowledge" rows="4" cols="60" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" valign="top">Declaration</td>
                            <td width="5%" valign="top">:</td>
                            <td valign="top">
                                <textarea name="declaration" rows="2" cols="60" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Place
                            </td>
                            <td>:</td>
                            <td><input type="text" size="47" name="place" required></td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td>:</td>
                            <td><input type="date" name="date" required></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <button type="submit" name="submit">Submit</button>
                        &nbsp;&nbsp;
                        <button type="reset">Reset</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>
 
</body>

</html>