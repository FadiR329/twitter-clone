<!DOCTYPE html>
<html>
    <!-- Inspired from project 2, not copy-pasted -->
    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
    </head>
    <!-- Can be considered the post section, where "tweets" will be held -->
    <?php include ('navigation.php');?>
    <body>
        <h2> Recent Posts: </h2>
        <!-- set up table here to list posts -->
        <table>
            <tr>
                <th>Post number:</th>
                <th>Content:</th>
                <th>Image(s):</th>
                <th>Author:</th>
                <th>Likes:</th>
            </tr>
            <?php ?>
            <!-- Add foreach php function to this section -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>
