<h1>Student Registration Form</h1>
<form method="POST" action="disp.php">
    <label>First Name:</label><input type="text" name="fname" required><br><br>
    <label>Last Name:</label><input type="text" name="lname" required><br><br>
    <label>Address:</label><textarea name="address" required></textarea><br><br>
    <label>E-Mail:</label><input type="email" name="email" required><br><br>
    <label>Mobile:</label><input type="tel" pattern="[6-9][0-9]{9}" name="mobile" required><br><br>
    <label>City:</label><input type="text" name="city" required><br><br>
    State: <input type="text" name="state" required><br><br>
    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female<br><br>
    Hobbies: <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Writing"> Writing
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br><br>
    Blood Group: <select name="blood_group" required>
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>