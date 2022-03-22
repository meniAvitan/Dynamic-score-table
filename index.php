<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body dir="rtl">
    <div id="message"></div>

</body>


<div class="numOfScoreTable">
    <form>
        <div class="mb-3">
            <label for="rows" class="form-label">מספר שורות</label>
            <input type="text" id="rows" class="form-control" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="numOfCols" class="form-label">מספר עמודות</label>
            <input type="text" class="form-control" id="cols">
        </div>
        <button type="button" class="btn btn-primary" id="create_btn">צרי לוח</button>
        <div id="numOfBoxes" class="form-text"></div>
    </form>
</div>

<div id="myDiv"></div>
<div class="table_container">
    <table class="table table-bordered border-primary" id="tab"></table>
</div>



<div dir="ltr" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-text" id="numOfBox">מספר תא: </div>
                <!-- <form action="" method="post">
                    <div style="margin: 10px;"> Name: <input type="text" name="name" value="" /></div>
                    <div style="margin: 10px;"> type: <input type="text" name="type" value="" /></div>

                    <div style="margin: 10px;"><input type="button" onclick="submitForm();" name="save_contact" value="Save" /></div>
                </form> -->
                <form action="" id="contactForm" method="post">

                    <div class="mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="select" onchange="copyTextValue()" aria-label="Floating label select example">
                              <option selected>פיתחי בחירה</option>
                              <option value="רינה">רינה</option>
                              <option value="חוי">חוי</option>
                              <option value="תרצה">תרצה</option>
                              <option value="הילדה">הילדה</option>
                              <option value="נורית">נורית</option>
                              <option value="תמר">תמר</option>
                              <option value="הדס">הדס</option>
                              <option value="ציפי">ציפי</option>
                            </select>
                            <label for="floatingSelect">בחירת שם סוכנת</label>
                        </div>
                        <input type="text" class="form-control" name="name" id="destination" hidden>


                    </div>

                    <div class="mb-3">

                        <label for="floatingSelect">סוג העסקה</label>

                        <div class="form-floating">
                            <select class="form-select" id="select_2" onchange="copyTextValue2()" aria-label="Floating label select example">
                            <option selected>פיתחי בחירה</option>
                            <option value="קניה">קניה</option>
                            <option value="מכירה">מכירה</option>
                            <option value="השכרה">השכרה</option>
                        </select>
                            <label for="floatingSelect">בחירת סוג עסקה</label>
                        </div>
                        <input type="text" class="form-control" name="type" id="destination_2" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="numOfCols" class="form-label">מספר עסקאות הסוכנת</label>
                        <input type="number" class="form-control" name="num">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div><input class="btn btn-primary" id="submitTransaction" type="button" onclick="submitForm();" name="save_contact" value="Save" /></div>
            </div>
        </div>
    </div>
</div>

<?php
    $color = "nononononono";
?>
<script type="text/javascript">var color = "<?= $color ?>";</script>
<script type="text/javascript" src="./ajax.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</body>

</html>