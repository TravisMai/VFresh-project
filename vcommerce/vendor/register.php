<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="apple-touch-icon" sizes="57x57" href="../../images/favicons/sheaf-of-rice.png" height="57" width="57">
    <link rel="apple-touch-icon" sizes="60x60" href="../../images/favicons/sheaf-of-rice.png" height="60" width="60">
    <link rel="apple-touch-icon" sizes="72x72" href="../../images/favicons/sheaf-of-rice.png" height="72" width="72">
    <link rel="apple-touch-icon" sizes="76x76" href="../../images/favicons/sheaf-of-rice.png" height="76" width="76">
    <link rel="apple-touch-icon" sizes="114x114" href="../../images/favicons/sheaf-of-rice.png" height="114" width="114">
    <link rel="apple-touch-icon" sizes="120x120" href="../../images/favicons/sheaf-of-rice.png" height="120" width="120">
    <link rel="apple-touch-icon" sizes="144x144" href="../../images/favicons/sheaf-of-rice.png" height="144" width="144">
    <link rel="apple-touch-icon" sizes="152x152" href="../../images/favicons/sheaf-of-rice.png" height="152" width="152">
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicons/sheaf-of-rice.png" height="180" width="180">
    <link rel="icon" type="image/png" href="../../images/favicons/sheaf-of-rice.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../images/favicons/sheaf-of-rice.png" sizes="194x194">
    <link rel="icon" type="image/png" href="../../images/favicons/sheaf-of-rice.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../../images/favicons/sheaf-of-rice.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../../images/favicons/sheaf-of-rice.png" sizes="16x16">
    <link rel="manifest" href="../../images/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../images/favicons/sheaf-of-rice.png">
    <meta name="msapplication-config" content="../../images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#66BB6A">
    <link rel="shortcut icon" href="../../images/favicons/sheaf-of-rice.png">
    <title>Vfresh | Người bán</title>
    <link rel="canonical" href="./">
</head>
 <?php require_once('inc/header.php') ?>
<body class="hold-transition">
  <script>
    start_loader()
  </script>
  <style>
      html,body{
          height: calc(100%);
          width: calc(100%);
      }
      body{
          width:calc(100%);
          height:calc(100%);
          background-image:url('<?= validate_image($_settings->info('cover')) ?>');
          background-repeat: no-repeat;
          background-size:cover;
      }
      #logo-img{
          width:15em;
          height:15em;
          object-fit:scale-down;
          object-position:center center;
      }
      #system_name{
        color:#fff;
        text-shadow: 3px 3px 3px #000;
      }
      #cimg{
          width:200px;
          height:200px;
          object-fit:scale-down;
          object-position:center center
      }
  </style>
  <script>
  </script>
  <div class="d-flex justify-content-center align-items-center flex-row h-80">
        <div class="col-7 h-100 bg-gradient-light px-4">
            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="card card-outline card-primary col-12 rounded-0 shadow">
                    <div class="card-body">
                    <p class="login-box-msg">Đăng ký để bắt đầu</p>

                    <form id="vregister-frm" action="" method="post">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="shop_name" class="control-label">Tên cửa hàng</label>
                                <input type="text" id="shop_name" autofocus name="shop_name" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="shop_owner" class="control-label">Tên chủ sở hữu</label>
                                <input type="text" id="shop_owner" name="shop_owner" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact" class="control-label">Điện thoại #</label>
                                <input type="text" id="contact" name="contact" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="control-label">Email #</label>
                                <input type="text" id="email" name="email" class="form-control form-control-sm form-control-border" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tax_id" class="control-label">Mã số thuế</label>
                                <input type="text" id="tax_id" name="tax_id" class="form-control form-control-sm form-control-border" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="shop_type_id" class="control-label">Thể loại cửa hàng</label>
                                <select type="text" id="shop_type_id" name="shop_type_id" class="form-control form-control-sm form-control-border select2" required>
                                    <option value="" disabled selected></option>
                                    <?php 
                                    $types = $conn->query("SELECT * FROM `shop_type_list` where delete_flag = 0 and `status` = 1 order by `name` asc ");
                                    while($row = $types->fetch_assoc()):
                                    ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username" class="control-label">Tên đăng nhập</label>
                                <input type="text" id="username" name="username" class="form-control form-control-sm form-control-border" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password" class="control-label">Mật khẩu</label>
                                <div class="input-group input-group-sm">
                                    <input type="password" id="password" name="password" class="form-control form-control-sm form-control-border" required>
                                    <div class="input-group-append bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                        <span class="input-group-text bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                            <a href="javascript:void(0)" class="text-reset text-decoration-none pass_view"> <i class="fa fa-eye-slash"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpassword" class="control-label">Xác nhận mật khẩu</label>
                                <div class="input-group input-group-sm">
                                    <input type="password" id="cpassword" class="form-control form-control-sm form-control-border" required>
                                    <div class="input-group-append bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                        <span class="input-group-text bg-transparent border-top-0 border-left-0 border-right-0 rounded-0">
                                            <a href="javascript:void(0)" class="text-reset text-decoration-none pass_view"> <i class="fa fa-eye-slash"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="avatar" class="control-label">Logo cửa hàng</label>
                                <input type="file" id="avatar" name="img" class="form-control form-control-sm form-control-border" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 text-center">
                                <img src="<?= validate_image('') ?>" alt="Shop Logo" id="cimg" class="border border-gray img-thumbnail">
                            </div>
                        </div>
                        <div class="row align-item-end">
                            <div class="col-8">
                                <a href="<?= base_url ?>">Quay về trang chủ</a>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Tạo tài khoản</button>
                            </div>
                            <div class="col-12 text-center">
                            <a href="<?= base_url.'vendor/login.php' ?>">Đã có tài khoản rồi</a>
                            </div>
                        <!-- /.col -->
                        </div>
                    </form>
                    <!-- /.social-auth-links -->

                    <!-- <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p> -->
                    
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            
        </div>
  </div>


<!-- jQuery -->
<script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script> -->
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>

<script>
    function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
	        	$('#cimg').attr('src', '<?= validate_image('') ?>');
        }
	}
  $(function(){
    end_loader();
    $('body').height($(window).height())
    $('.select2').select2({
        placeholder:"Chọn thể loại",
        width:'100%'
    })
    $('.select2-selection').addClass("form-border")
    $('.pass_view').click(function(){
        var _el = $(this).closest('.input-group')
        var type = _el.find('input').attr('type')
        if(type == 'password'){
            _el.find('input').attr('type','text').focus()
            $(this).find('i.fa').removeClass('fa-eye-slash').addClass('fa-eye')
        }else{
            _el.find('input').attr('type','password').focus()
            $(this).find('i.fa').addClass('fa-eye-slash').removeClass('fa-eye')

        }
    })

    $('#vregister-frm').submit(function(e){
        e.preventDefault();
        var _this = $(this)
            $('.err-msg').remove();
        var el = $('<div>')
            el.addClass("alert err-msg")
            el.hide()
        if(_this[0].checkValidity() == false){
            _this[0].reportValidity();
            return false;
            }
        if($('#password').val() != $('#cpassword').val()){
            el.addClass('alert-danger').text('Password does not match.')
            _this.append(el)
            el.show('slow')
            $('html,body').scrollTop(0)
            return false;
        }
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Users.php?f=save_vendor",
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            dataType: 'json',
            error:err=>{
                console.error(err)
                el.addClass('alert-danger').text("An error occured");
                _this.prepend(el)
                el.show('.modal')
                end_loader();
            },
            success:function(resp){
                if(typeof resp =='object' && resp.status == 'success'){
                    location.href= './login.php';
                }else if(resp.status == 'failed' && !!resp.msg){
                    el.addClass('alert-danger').text(resp.msg);
                    _this.prepend(el)
                    el.show('.modal')
                }else{
                    el.text("An error occured");
                    console.error(resp)
                }
                $("html, body").scrollTop(0);
                end_loader()

            }
        })
    })
  })
</script>
</body>
</html>