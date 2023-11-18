$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".add-service").on("click", function () {
        var web = $(".web").val();
        var start = $(".start").val();
        var desc = $(".desc").val();

        $.ajax({
            url: "/admin/dashboard/servive",
            method: "POST",
            data: {
                web: web,
                start: start,
                desc: desc,
            },
            success: function (res) {

                $('#exampleModal').modal('hide');
                show();
                 $(".web").val('');
                $(".start").val('');
               $(".desc").val('');

            }
        });
    });
    show();

    function show() {

        $.ajax({
            url: "/admin/dashboard/show",
            method: "GET",
            dataType: "json",
            success: function (res) {
                let tableHtml = "";
                let count = 1;
                $.each(res.allData, function (index, val) {
                    tableHtml += `
                        <tr>
                            <td>${count}</td>
                            <td>${val.design}</td>
                            <td>${val.start}</td>
                            <td>${val.design_des}</td>
                            <td>
                                <button value="${val.id}" class="btn btn-sm btn-info update-button">Edit</button>
                                <button value="${val.id}" class="btn btn-sm btn-danger delete-button">Delete</button>
                            </td>
                         </tr>
                    `;
                    count++;
                });

                $(".allData").html(tableHtml);

            }
        });
    }


    $(document).on("click", ".delete-button", function () {
        var id = $(this).val();
        $('#delete').modal('show');
        var id = $(".delete-service").val(id);
    });
    $(document).on("click", ".delete-service", function () {
        var id = $(this).val();

        $.ajax({
            url: "/admin/dashboard/servive/delete/" + id,
            type: "GET",
            success: function (res) {
                 $('#delete').modal('hide');
                show();
            }
        });

    });

    $(document).on("click", ".update-button", function(){
        var id = $(this).val();
        $('#edit').modal('show');
         $.ajax({
            url: "/admin/dashboard/servive/edit/"+id,
            type: "GET",
            success: function (res) {
                $(".webv").val(res.allDataservice.design);
                $(".startv").val(res.allDataservice.start);
                $(".descv").val(res.allDataservice.design_des);
                $(".updateservice").val(res.allDataservice.id);
            }
        });
    });
    $(document).on("click", ".updateservice", function () {
        var id = $(this).val();
         var web = $(".webv").val();
         var start = $(".startv").val();
         var desc = $(".descv").val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

         $.ajax({
            url: "/admin/dashboard/servive/update/" + id,
            type: "post",
            data: {
                web: web,
                start: start,
                desc: desc,
            },
            success: function (res) {
                $('#edit').modal('hide');
                show();
              }
        });
    });


});
