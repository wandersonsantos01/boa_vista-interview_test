$("#main_form").submit(function (event) {
    event.preventDefault();

    let method = 'POST',
        url = "http://localhost:8080/api/pessoa",
        params,
        idPessoa = localStorage.getItem('id_pessoa');

    eval('params = {"' + $("#field1").attr('name') + '": "' + $("#field1").val() + '"}');


    if (idPessoa) {
        method = 'PUT';
        url += '/' + idPessoa;
    }

    $.ajax({
        method: method,
        url: url,
        data: params,
        success: function (data) {
            localStorage.setItem('id_pessoa', data.id);
            window.location.href = '/' + $("#next_step").val();
        }
    })
});
