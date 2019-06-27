<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="app">
        <form action="#" id="cep_form">
            <input type="text" name="cep">
            <input type="submit">
        </form>
        <table>
            <tr>
                <th>Cep</th>
                <td id="cep"></td>
            </tr>
            <tr>
                <th>Logradouro</th>
                <td id="logradouro"></td>
            </tr>
            <tr>
                <th>Complemento</th>
                <td id="complemento"></td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td id="bairro"></td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td id="cidade"></td>
            </tr>
            <tr>
                <th>Estado</th>
                <td id="estado"></td>
            </tr>
        </table>
    </div>
    <script>
        $('#cep_form').on('submit', (evt) => {
            evt.preventDefault();
            var cep = $('#cep_form > input[name=cep]').val();

            $.ajax({
                url: `https://viacep.com.br/ws/${cep}/json/`,
                crossDomain: true,
                success: (data) => {
                    $('#cep').html(data.cep);
                    $('#logradouro').html(data.logradouro);
                    $('#complemento').html(data.complemento);
                    $('#bairro').html(data.bairro);
                    $('#cidade').html(data.localidade);
                    $('#estado').html(data.uf);
                }
            })
        });
    </script>
</body>
</html>