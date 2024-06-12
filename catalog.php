<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы по макияжу</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php require_once "header.php" ?>

<body>
<div class="comment">
    <div class="comment-text">Курсы по макияжу</div>
</div>

<!-- СПИСОК ВСЕХ КУРСОВ -->
<div class="cards-course">
    <?php
    require_once "backend/course.php";
    $coursesData = getCourseList();
    foreach ($coursesData as $row): ?>
        <form id="card-form<?php echo $row["ID"] ?>" class="card-course" action="inactive_course.php">
            <input type="hidden" name="courseNumber" value="<?php echo $row["ID"] ?>">
            <h3><?php echo $row["name"] ?></h3>
            <div class="photo-doc" onclick="document.forms['card-form<?php echo $row["ID"] ?>'].submit()">
                <img class="popular-img" src="img/<?php echo $row["pictureName"] ?>" alt="">
                <img class="photo-c" src="img/bg-card.png" alt="">
                <div class="description"><?php echo $row["description"] ?></div>
            </div>
            <button type="submit" class="popular-btn">Подробнее</button>
        </form>
    <?php endforeach ?>
</div>
</body>

<?php include "footer.php" ?>

</html>