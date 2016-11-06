<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Add Course</title>
</head>
<body>
    <h2>Add Course</h2>

    <form action="index.php" method="post">
    <table>
        <tr>
            <td>Prefix</td>
            <td><input type="text" name="prefix" maxlength="10" value="" /></td>
        </tr>
        <tr>
            <td>Course Number</td>
            <td><input type="number" name="course_number" value="" /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" maxlength="30" value="" /></td>
        </tr>
        <tr>
            <td>Credits</td>
            <td><input type="number" step=".25" name="credits" value="" /></td>
        </tr>
    </table>
    <input type="submit" value="add" name="action" />
</form>
</body>
</html>