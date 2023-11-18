$(document).ready(function(){

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

   $(".allexed").on("click",function(){
    var shortdes = $(".shortdes").val();
    var html = $(".html").val();
    var css = $(".css").val();
    var bootstrap = $(".bootstrap").val();
    var js = $(".js").val();
    var jquery = $(".jquery").val();
    var ajax = $(".ajax").val();
    var php = $(".php").val();
    var php_oop = $(".php_oop").val();
    var laravel = $(".laravel").val();
    var restapi = $(".restapi").val();
    var webdevdes = $(".webdevdes").val();
    var exyear = $(".exyear").val();
    var excompany = $(".excompany").val();
    var degree = $(".degree").val();
    var degyear = $(".degyear").val();
    var instiute = $(".instiute").val();
    $.ajax({
      url: "/admin/dashboard/skill",
      method: "POST",
      data: {
         shortdes: shortdes,
          html: html,
          css: css,
          bootstrap: bootstrap,
          js: js,
          jquery: jquery,
          ajax: ajax,
          php: php,
          php_oop: php_oop,
          laravel: laravel,
          restapi: restapi,
          webdevdes: webdevdes,
          exyear: exyear,
          excompany: excompany,
          degree: degree,
          degyear: degyear,
          instiute: instiute,
      },
      success: function (res) {
         alert(res.msg)
        },
  });
   });
show();

   function show(){
    $.ajax({
      url: "/admin/dashboard/skill/show",
      method: "GET",
      dataType: "json",
      success: function (res) {
          let tablee = "";
          let count = 1;
          $.each(res.allDataa, function (index, val) {
             tablee += `
                  <tr>
                     <td>${count}</td>
                  <td>${val.shortdes}</td>
                      <td>${val.html}</td>
                      <td>${val.css}</td>
                      <td>${val.bootstrap}</td>
                      <td>${val.js}</td>
                      <td>${val.jquery}</td>
                      <td>${val.ajax}</td>
                      <td>${val.php}</td>
                      <td>${val.php_oop}</td>
                      <td>${val.laravel}</td>
                      <td>${val.restapi}</td>
                      <td>${val.webdevdes}</td>
                      <td>${val.exyear}</td>
                       <td>${val.excompany}</td>
                      <td>${val.degree}</td>
                      <td>${val.degyear}</td>
                      <td>${val.instiute}</td>
                      <td>
                          <button value="${val.id}" class="btn btn-sm btn-info updatebutton">Edit</button>
                          <button value="${val.id}" class="btn btn-sm btn-danger" id="deleteedubutton">Delete</button>
                      </td>
                   </tr>
              `;
              count++;
          });

          $(".skilldata").html(tablee);

      }
  });
   }

   $(document).on("click","#deleteedubutton",function(){
    var id = $(this).val();
        $.ajax({
            url:"/admin/dashboard/skill/delete/" +id,
            type:"GET",
            success:function(res){
             alert(res.msg);
             show();
            }
        });
   });
   $(document).on("click",".updatebutton",function(){
       var id = $(this).val();
       $('#eduedit').modal('show');

       $.ajax({
        url:"/admin/dashboard/skill/edit/" +id,
        type:"GET",
        success:function(res){
            $(".shortdes").val(res.editData.shortdes);
            $(".html").val(res.editData.html);
            $(".css").val(res.editData.css);
            $(".bootstrap").val(res.editData.bootstrap);
            $(".js").val(res.editData.js);
            $(".jquery").val(res.editData.jquery);
            $(".ajax").val(res.editData.ajax);
            $(".php").val(res.editData.php);
            $(".php_oop").val(res.editData.php_oop);
            $(".laravel").val(res.editData.laravel);
            $(".restapi").val(res.editData.restapi);
            $(".webdevdes").val(res.editData.webdevdes);
            $(".exyear").val(res.editData.exyear);
            $(".excompany").val(res.editData.excompany);
            $(".degree").val(res.editData.degree);
            $(".degyear").val(res.editData.degyear);
            $(".instiute").val(res.editData.instiute);
            $(".updateskill").val(res.editData.id);
         }
       });

   });

   $(document).on("click",".updateskill",function(){
     var id = $(this).val();
     var shortdes = $(".shortdes").val();
     var html = $(".html").val();
     var css = $(".css").val();
     var bootstrap = $(".bootstrap").val();
     var js = $(".js").val();
     var jquery = $(".jquery").val();
     var ajax = $(".ajax").val();
     var php = $(".php").val();
     var php_oop = $(".php_oop").val();
     var laravel = $(".laravel").val();
     var restapi = $(".restapi").val();
     var webdevdes = $(".webdevdes").val();
     var exyear = $(".exyear").val();
     var excompany = $(".excompany").val();
     var degree = $(".degree").val();
     var degyear = $(".degyear").val();
     var instiute = $(".instiute").val();
     $.ajax({
        url:"/admin/dashboard/skill/update/" +id,
        type:"POST",
        data: {
            shortdes: shortdes,
            html: html,
            css: css,
            bootstrap: bootstrap,
            js: js,
            jquery: jquery,
            ajax: ajax,
            php: php,
            php_oop: php_oop,
            laravel: laravel,
            restapi: restapi,
            webdevdes: webdevdes,
            exyear: exyear,
            excompany: excompany,
            degree: degree,
            degyear: degyear,
            instiute: instiute,
        },
        success:function(res){
            $('#eduedit').modal('hide');
            show();
            alert(res.msg)
        }

     });
   })

});
