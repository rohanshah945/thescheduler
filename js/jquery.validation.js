$(function() {
   $("#formFaculty").validate({
      rules: {
          facultyId: {
              required : true,
              emai : true
          },
          password : "required",
          confirmPassword : {
              required: true,
              equalTo : "#password",
          },
      },
   });
});