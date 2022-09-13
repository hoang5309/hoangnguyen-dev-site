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
    $(document).on("click", "#sendEmailBtn", function(){
        $("#cardLoading").animate({height:80},200);
        $("#cardLoading").show()
        $.ajax({
            type: 'POST',
            data: {
                subject: $("#emailSubject").val(),
                emailList: JSON.stringify(taggedEmp)
            },
            url: 'sendEmail.php',
            success: function (data) {
                var jsondata = JSON.parse(data);
                if(parseInt(jsondata['status']) == 1){

                }
            },
        })
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
                    $(thisID).text($(this).val())
                })
                $('.a-email-edit').on("keyup", function(e) {
                    var thisID = '#'+ $(this).attr('id') + 'LINK'
                    $(thisID).attr("href", $(this).val())
                })
            },
        })
    }
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
})