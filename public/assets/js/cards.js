$('.form-h').submit(function(e) {

    e.preventDefault();
  
    var id = $(this).find(".check-day").attr('id');
    
    var estado = "disable"

    if($(this).find(".check-day").prop('checked')){
        estado = "enable" 
    }else{
        estado = "disable"
    }

    id = id.replace(/^check-/, '');

    var desde = $('#since-' + id).val();
    var hasta = $('#until-' + id).val();
    var button = $(this).find(".btn");

    if(desde == "" || hasta == ""){
        alert('seleccione un horario');
        return "selecione un horario"
    }


    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "/card/add/horarios",
            data: {"id": idCard,"state":estado,"desde":desde,"hasta":hasta,"day":id},
            success: function (data) {
    
                button.html('<i class="fa-solid fa-check text-success"></i>')

            },
            error: function (e) {
    
                button.html('<i class="fa-solid fa-check text-danger"></i>')

                console.log(e);
    
            }
    
        })
    });