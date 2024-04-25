$(function () {
    "use strict"
    $(document).on("change", ".main_img", function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#main_img img").attr('src', e.target.result).width(80).height(80);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $(document).on("change", ".multi_img", function (e) {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            var data = $(this)[0].files; //this file data           
            $.each(data, function (index, file) { //loop though each file
                if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function (file) { //trigger function on successful read
                        return function (e) {
                            var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(80)
                                .height(80); //create image element 
                            $('#multi_img').append(img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });

    $(document).on("change", ".parent", function () {
        let dis = $(this);
        let type = dis.data('type'); let id = dis.val(); let child = dis.data('child');
        $.ajax({
            type: 'GET',
            url: '/ajax/get/ddl/' + type + '/' + id,
            success: function (res) {
                $("." + child).empty();
                $.map(res, function (obj) {
                    $("." + child).append("<option value='" + obj.id + "'>" + obj.name + "</option>");
                    $("." + child).trigger('chosen:updated');
                });
            },
            error: function (err) {
                console.log(err)
            }
        });
    })
})