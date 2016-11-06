<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Edit Course</title>
</head>
<body>
    <h2>Edit Course</h2>
    <div style="color:red"><?php if (is($error)) echo $error; ?></div>
    <form action="index.php" method="post">
        <input type="hidden" name="course_id" value="<?php echo $course["CourseId"] ?>" />
        <input type="hidden" name="action" value="update" />
        <table>
            <tr>
                <td>Prefix</td>
                <td><input type="text" name="prefix" maxlength="10" value="<?php echo $prefix; ?>" /></td>
            </tr>
            <tr>
                <td>Course Number</td>
                <td>
<input type="number" name="course_number" value="<?php echo $courseNumber; ?>" /></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
<input type="text" name="name" maxlength="30" value="<?php echo $name; ?>" /></td>
            </tr>
            <tr>
                <td>Credits</td>
                <td>
<input type="number" step=".25" name="credits" value="<?php echo $credits; ?>" /></td>
            </tr>
        </table>
        <input type="submit" value="Save Changes" />
    </form>
</body>
</html>