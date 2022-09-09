$(document).ready(function(){
    var taggedEmp = [];
    getEmailTemplate1(1);
    $(document).on("click", ".clickable", function(){
        if ($(this).attr("value") != "none") {
            var value = $(this).attr("value").split("-");
            if (jQuery.inArray(value[0], taggedEmp) == -1) {
                var html =
                '<span class="badge hn-badge-custom rounded-pill float-end ind-emp" value="' +
                value[0] +
                '">' +
                '<i class="icon zmdi zmdi-close removeTaggedEmp"></i>' +
                value[1] +
                "</span>";
                $("#customerList").append(html);
                console.log(html)
                taggedEmp.push(value[0]+"-"+value[1]);
            }
        }
    })
    $(document).on("click", ".removeTaggedEmp", function () {
        removeItem = $(this).attr("value");
        taggedEmp = jQuery.grep(taggedEmp, function (value) {
          return value != removeItem;
        });
        $(this).parent().remove();
    });
    $(document).on("click", "#createNewContact", function(){
        var name = $("#name").val()
        var email = $("#email").val()
        var combine = email + "-" +name
        var html =    '<tr>'
                    + '<td>'+name+'</td>'
                    + '<td class="text-success">'+email+'</td>'
                    + '<td class="actions">'
                    + '<i class="zmdi zmdi-plus-circle-o clickable" value="'+combine+'"></i>'
                    + '</td>'
                    + '</tr>'
    
        $(html).appendTo('#tableHN').fadeIn('3000');
    })

    function getEmailTemplate1(parm){
        $.ajax({
            type: 'POST',
            data: {
                template: parm
            },
            url: 'getEmailTemplate.php',
            success: function (data) {
                $('#emailDivTemplate').append(data)

                $('.email-edit').on("keyup", function(e) {
                    var thisID = '#'+ $(this).attr('id') + 'txt'
                    console.log($(thisID))
                    console.log($('#templateTitletxt').text())
                    $(thisID).text($(this).val())
                })
            },
        })
    }
})