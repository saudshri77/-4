<?php 
  
                   include './inc/db.php';
        
                   include './inc/form.php';


                   
$sql ='SELECT * FROM users ORDER BY RAND() LIMIT 1 ';

$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);
mysqli_close($conn);

          


   
?>








<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meat http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">






<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع سعود</h1>
      <p class="lead fw-normal"> باقي على فتح التسجيل</p>
      <h3 id="demo"></h3>

      <p class="lead fw-normal"> للسحب على ربح نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>


<!--

  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
   الرابح سيحصل على نسخة مجانية من برنامج كامتازيا
  </a>
  <a href="#" class="list-group-item list-group-item-action">تابع البث المباشر على الفيسبوك بالتاريخ المذكور اعلاه</a>
  <a href="#" class="list-group-item list-group-item-action">البث المباشر مدته ساعة عبارة عن اسئلة واجوبة حرة</a>
  <a href="#" class="list-group-item list-group-item-action">سيتم فتح صفحة التسجيل هنا حيث تقوم بتسجيل اسمك وايميلك</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</a>
</div>
-->


<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3> الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text"  name="firstName" class="form-control" id="exampleInputEmail1"  >
    <div id="emailHelp" class="form-text error"><?php echo $errors ['firstNameError']?> </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1"  >
    <div id="emailHelp" class="form-text error"><?php echo $errors ['lastNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الاكتروني</label>
    <input type="textS"  name="email" class="form-control" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text error"><?php echo $errors ['emailError']?></div>
  </div>

  <button type="submit"  name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <?php  foreach($users as $user) : ?>
        <h5 class="modal-title" id="exampleModalLabel">الرابح في المسابقة</h5>
        <?php endforeach ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       الرابح
      </div>
      <div class="modal-footer">
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button">اختيار الرابح</button>
</div>
<div class="row">
  
    

 



</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" > </script>
    

<script src="./Js/script.js"></script>

    
</body>

</html>