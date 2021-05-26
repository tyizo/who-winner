<?php
include  './db/database.php'; 
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>




<?php include_once './header.php'; ?>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5 ">
        <h1 class="display-4 fw-normal">اربح مع تايزو!</h1>
        <p class="lead fw-normal">باقي على التسجيل</p>
        <h3 id="countdown"></h3>
        <div class="text-center">
            ​<picture>
                <source srcset="./pics/mylogo.jpg" type="image/jpg">
                <img 
                src="./pics/mylogo.jpg" 
                class="img-fluid img-thumbnail" 
                alt="Tyizo Logo"
                style="border-radius: 20px;"
                >
            </picture>
        </div>
        <p class="lead fw-normal">من سوف يكون الرابح في برنامج اربح مع تايزو النسخة الثالثة على التوالي.</p>
        <a class="btn btn-outline-secondary" href="#send">شارك الان</a>
        </div>

<hr>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        ما يميزنا ؟
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>
            مصدقاية كبيرة و برنامج مشهور على كلا الصعيد الأجنبي و العربي
        </strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        هل هنالك غش ؟
    </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>
            لا بالتأكيد لا يوجد و حمايتنا عالية
        </strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        من يدير هذا المشروع ؟
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>
            انه تايزو يتعلم البوستراب و البي اش بي
        </strong>
      </div>
    </div>
  </div>
</div>
<br>
<span class="note text-center">شكرا مقدما لمشاركتك !</span>
<hr>

<div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5 ">    
        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <h3>الرجاء ادخل معلوماتك</h3>
        <div class="mb-3">
            <label 
            for="firstName" 
            class="form-label">الأسم الأول</label>
            <input type="text" class="form-control" id="firstName" 
             name="firstName"
               value="<?php echo $firstName?>">
            <div class="form-text error text-danger"><?php echo $errors['firstNameError'];?></div>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">الأسم الأخير</label>
            <input type="text" class="form-control" id="lastName" 
            name="lastName" value="<?php echo $lastName?>">
            <div class="form-text error text-danger"><?php echo $errors['lastNameError'];?></div>
        </div>
        <div class="mb-3">  
            <label for="email" class="form-label">البريد الألكتروني</label>
            <input type="text" class="form-control" id="email"  name="email" value="<?php echo $email?>">
            <div  class="form-text error text-danger"><?php echo $errors['emailError'];?></div>
        </div>
    <button type="submit" name="submit" class="btn btn-primary" id="send">ارسال</button>
    <br>
    <br>
    <span class="note text-center">لا نشارك اي معلومات من معلوماتك جميعها تكون محمية و لا يراها أحد غيرك.</span>
</form>
</div>
</div>
</div>

<hr>
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" class="btn btn-dark"
    id="winner">
    اختيار الرابح
    </button>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
        <h5 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
    <?php endforeach; ?>      
    </div>
    </div>
  </div>
</div>

<!--
<div id="cards" class="row mb-5 pb-5">
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php //echo htmlspecialchars($user['email']); ?></p>
            </div>
        </div>
    </div>
</div>
      -->

<?php include_once './footer.php' ?> 