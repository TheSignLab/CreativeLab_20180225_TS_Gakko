  var admissionSwiper

  function updateTab(k) {
      $(".admissions .s1 tab").removeClass("active");
      $($(".admissions .s1 tab")[k]).addClass("active");
      admissionSwiper.slideTo(k);
  }

  $(document).ready(function () {
      admissionSwiper = new Swiper('.swiper-container', {

          loop: false,
          allowTouchMove: false

      });
  });


  $(document).ready(function () {

      // process the form
      $('#formAdmissionsbtn').click(function (event) {

          var f_name = $('#formAdmissions input[name=name]').val();
          var f_email = $('#formAdmissions input[name=email]').val();
          var f_phone = $('#formAdmissions input[name=phone]').val();
          var f_msg = $('#formAdmissions textarea').val();

          var isOkToSubmit = handlerForm(f_name, f_email, f_phone, f_msg);

         

          if (isOkToSubmit) {
              // get the form data
              // there are many ways to get this data using jQuery (you can use the class or id also)
              var formData = {
                  'name': f_name,
                  'email': f_email,
                  'phone': f_phone,
                  'msg': f_msg
              };

              // process the form
              $.ajax({
                      type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                      url: 'http://dev.colegiotecnologicodesuba.edu.co/php/processFormAdmissions.php', // the url where we want to POST
                      data: formData, // our data object
                      encode: true
                  })
                  // using the done promise callback
                  .done(function (data) {

                      // log data to the console so we can see
                      console.log(data);

                      // here we will handle errors and validation messages
                  });

              // stop the form from submitting the normal way and refreshing the page
              event.preventDefault();
          }

      });

  });

  function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }

  function handlerForm(f_name, f_email, f_phone, f_msg) {
      var isNameOk, isEmailOk, isPhoneOk, isMsgOk;

      if (f_name) {
          isNameOk = true;
      } else {
          isNameOk = false;
          $(".warning-form-label.name").fadeIn();
          $("input[name='name']").addClass("warning-input");
          setTimeout(function () {
              $(".warning-form-label.name").fadeOut();
              $("input[name='name']").removeClass("warning-input");
          }, 2000);
      }
      if (validateEmail(f_email)) {
          isEmailOk = true;
      } else {
          isEmailOk = false;
          $(".warning-form-label.email").fadeIn();
          $("input[name='email']").addClass("warning-input");
          setTimeout(function () {
              $(".warning-form-label.email").fadeOut();
              $("input[name='email']").removeClass("warning-input");
          }, 2000);
      }
      if (!isNaN(f_phone) && f_phone) {
          isPhoneOk = true;
      } else {
          isPhoneOk = false;
          $(".warning-form-label.phone").fadeIn();
          $("input[name='phone']").addClass("warning-input");
          setTimeout(function () {
              $(".warning-form-label.phone").fadeOut();
              $("input[name='phone']").removeClass("warning-input");
          }, 2000);
      }
      if (f_msg) {
          isMsgOk = true;
      } else {
          isMsgOk = false;
          $(".warning-form-label.msg").fadeIn();
         $("#formAdmissions textarea").addClass("warning-input");
          setTimeout(function () {
              $(".warning-form-label.msg").fadeOut();
              $("#formAdmissions textarea").removeClass("warning-input");
          }, 2000);
      }

      var isok = false;
      if (isNameOk == true && isEmailOk == true && isPhoneOk == true && isMsgOk == true) {
          isok = true;
      }
      return isok;

  }
