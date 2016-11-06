<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Courses List</title>
</head>
<body>
<h2>Courses List</h2>
<!--Add all data for this view into the table data cells (td's)-->
<table>
    <thead>
        <tr>
            <th>Course</th>
        </tr>
    </thead>
    <?php foreach ($courses as $course) { ?>
    <tr>
        <td>
            <!--Show prefix, course number, title and credits formatted according to the screenshot-->        
            <!-- "Prefix CourseNumber - Name (Credits)" -->
            <?php
              echo "$course[Prefix] $course[CourseNumber] - $course[Name]  (".number_format($course["Credits"], 2).")";
            ?>
        </td>
        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="course_id" value="<?php echo $course["CourseId"] ?>"/>
                <input type="submit" value="edit" name="action"/>
            </form>
        </td>
        <td>
            <form action="index.php" method="post">
                
                <input type="hidden" name="course_id" value="<?php echo $course["CourseId"] ?>" />
                <input type="submit" value="delete" name="action" />
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
    <p><a href="index.php?action=addform">Add Course</a></p>
</body>
</html>