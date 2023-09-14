<script>
    $( document ).ready(function() {

        var token = 'Bearer {{ \Illuminate\Support\Facades\Session::get("MultihplicAuth") }}';

    });

    function alterSituation(id, situation) {

        if(situation == 'aprove') {
            var status = 'active';
        } else {
            var status = 'inactive';
        }

        var data = {'situation': situation, 'status': status};
        var route = 'provider/update/' + id;

        gsPost(route, data, function(success){
            console.log(success);
            if(success.return === 'success'){
                console.log(success);
                var html =  '<div class="alert alert-success alert-dismissible fade show" role="alert">\n' +
                    '  <strong>Sucesso!</strong> Situação do fornecedor foi alterada com sucesso!\n' +
                    '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '    <span aria-hidden="true">&times;</span>\n' +
                    '  </button>\n' +
                    '</div>'
                $('#alert').html(html);

                $('#lnh' + id).fadeOut();

            } else {
                var html =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">\n' +
                    '  <strong>Erro!</strong> Algo deu errado, contate o administrador!\n' +
                    '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '    <span aria-hidden="true">&times;</span>\n' +
                    '  </button>\n' +
                    '</div>'
                $('#alert').html(html);
            }
        });
    }

    function alterStatus(id, status) {

        var data = {'status': status};
        var route = 'provider/update/' + id;

        gsPost(route, data, function(success){
            console.log(success);
            if(success.return === 'success'){
                console.log(success);
                var html =  '<div class="alert alert-success alert-dismissible fade show" role="alert">\n' +
                    '  <strong>Sucesso!</strong> Situação do fornecedor foi alterada com sucesso!\n' +
                    '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '    <span aria-hidden="true">&times;</span>\n' +
                    '  </button>\n' +
                    '</div>'
                $('#alert').html(html);

                var htmlStatus = $('#status' + id);
                var buttonStatus = $('#button' + id);
                if(success.status == 'active'){
                    htmlStatus.html('Ativo');
                    htmlStatus.removeClass('badge-danger');
                    htmlStatus.addClass('badge-success');

                    buttonStatus.attr('onclick', "alterStatus('"+id+"', 'inactive')").html('<i class="icon-close2"></i> Inativar Cadastro');

                } else {
                    htmlStatus.html('Inativo');
                    htmlStatus.removeClass('badge-success');
                    htmlStatus.addClass('badge-danger');

                    buttonStatus.attr('onclick', "alterStatus('"+id+"', 'active')").html('<i class="icon-close2"></i> Ativar Cadastro');
                }
            } else {
                var html =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">\n' +
                    '  <strong>Erro!</strong> Algo deu errado, contate o administrador!\n' +
                    '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '    <span aria-hidden="true">&times;</span>\n' +
                    '  </button>\n' +
                    '</div>'
                $('#alert').html(html);
            }
        });
    }

</script>
