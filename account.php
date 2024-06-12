<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<?php
if (!isset($_SESSION["userID"])) {
    header("Location: entry.php");
    exit;
}
?>

<div class="comment">
    <div class="comment-text">Личный кабинет</div>
</div>

<div class="account">
    <div class="profile">
        <div class="name-girl">
            <img src="img/profile.png" alt="Фото">
            <div class="name-girl-text"><?= $_SESSION["name"] ?> <br> <?= $_SESSION["surname"] ?></div>
        </div>
        <div class="text-acc">
            <div class="zag-acc">Почта:</div>
            <div class="podz-acc"><?= $_SESSION["email"] ?></div>
            <div class="zag-acc">Дата рождения:</div>
            <div class="podz-acc">24 октября 2000</div>
            <div class="zag-acc">Номер телефона:</div>
            <div class="podz-acc">не указано</div>
        </div>
        <button class="acc-btn"><a class="izma" href="">Изменить</a></button>
    </div>
    <div id="courses" class="courses">
        <div class="my-courses">Мои курсы</div>
        <?php
        require_once "backend/course.php";
        $coursesData = getCourseListByUserID($_SESSION["userID"]);
        foreach ($coursesData as $row): ?>
            <form id="course-form<?php echo $row["ID"] ?>" class="course" action="active_course.php">
                <input type="hidden" name="courseID" value="<?php echo $row["ID"] ?>">
                <div class="course-card"
                     style="background: url('img/card<?php echo $row["ID"] ?>.png') no-repeat center;">
                    <div class="course-nazv"><?php echo $row["name"] ?></div>
                    <button type="submit" class="course-btn">Продолжить</button>
                    <button type="button" id="remove-button" class="myRemoveButton"
                            onclick="removeCourse(<?php echo $row["ID"] ?>);">&times;
                    </button>
                </div>
            </form>
        <?php endforeach ?>
        <button class="show-more-btn2" id="show-more-btn2">Показать еще</button>
    </div>
</div>

<dialog id="dialog" class="modal1">
    <div class="modal-content1">
        <span id="modal-close" class="close">&times;</span>
        <p>Вы уверены, что хотите удалить данный курс?</p>
        <button id="modal-remove" class="modal-btn">Удалить</button>
    </div>
</dialog>
</body>

<?php include "footer.php" ?>

<script>
    function removeCourse(courseID) {
        document.getElementById("dialog").showModal();

        document.getElementById("modal-remove").onclick = function () {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'backend/course.php', true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("courseIDToDelete=" + encodeURIComponent(courseID));
            document.getElementById("dialog").close();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById(`course-form${courseID}`).remove();
                    // $( "#courses" ).load(location.href + " #courses");
                    // $("#courses").load(" #courses > *");
                    location.reload();
                } else {
                    console.error("Ошибка: " + xhr.status);
                }
            };
        }

        document.getElementById("modal-close").onclick = function () {
            document.getElementById("dialog").close();
        }
    }
</script>

<script>
    const courses = document.querySelectorAll('.course');
    const showMoreBtn = document.getElementById('show-more-btn2');
    let currentIndex = 0;

    function showCourses(startIndex, endIndex) {
        for (let i = startIndex; i < endIndex; i++) {
            if (courses[i]) {
                courses[i].style.display = 'block';
            }
        }
        currentIndex = endIndex;
        if (currentIndex >= courses.length) {
            showMoreBtn.style.display = 'none';
        }
    }

    showCourses(0, 2);

    showMoreBtn.addEventListener('click', function () {
        showCourses(currentIndex, currentIndex + 2);
    });
</script>

</html>