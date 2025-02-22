
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CEP do pokémon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            "use strict";

            async function pesquisar() {
                const cep = document.getElementById("pesquisa").value;
                const url = document.getElementById("url").value.replace("XXXX", cep);
                const resultado = await fetch(url);
                let json;
                if (resultado.status === 200) {
                    json = await resultado.json();
                } else {
                    json = { ok: `O resultado foi um erro ${resultado.status}.` };
                }
                document.getElementById("resultado-ok"            ).value = json.ok === true ? "Sim." : json.ok === false ? "Não encontrado." : json.ok;
                document.getElementById("resultado-cep"           ).value = json.ok ? json.cep               : "";
                document.getElementById("resultado-logradouro"    ).value = json.ok ? json.logradouro        : "";
                document.getElementById("resultado-bairro"        ).value = json.ok ? json.bairro            : "";
                document.getElementById("resultado-cidade"        ).value = json.ok ? json.cidade            : "";
                document.getElementById("resultado-uf"            ).value = json.ok ? json.uf                : "";
                document.getElementById("resultado-pokemon"       ).value = json.ok ? json.pokemon           : "";
                document.getElementById("resultado-numero-pokemon").value = json.ok ? json["numero-pokemon"] : "";
                document.getElementById("resultado-foto-pokemon"  ).src   = json.ok ? json["foto-pokemon"]   : "https://cdn-icons-png.flaticon.com/256/4467/4467515.png";
            }
        </script>
    </head>
    <body>
        <h1 class="testefw-titulo">ADO 4</h1>
        <address class="testefw-versao">Versão 1º semestre 2023</address>

        <p>
            <label for="url">URL de pesquisa (coloque com XXXX o lugar onde é CEP):</label>
            <input type="text" id="url" value="request.php?cep=XXXX">
        </p>
        <p>
            <label for="pesquisa">CEP a pesquisar:</label>
            <input type="text" id="pesquisa">
        </p>
        <p>
            <label for="botao-pesquisar">&nbsp;</label>
            <button type="button" id="botao-cpesquisarep" onclick="pesquisar();">Pesquisar</button>
        </p>
        <p>
            <label for="resultado-ok">Ok?</label>
            <input type="text" id="resultado-ok" readonly>
        </p>
        <p>
            <label for="resultado-cep">CEP resultante:</label>
            <input type="text" id="resultado-cep" readonly>
        </p>
        <p>
            <label for="resultado-logradouro">Logradouro:</label>
            <input type="text" id="resultado-logradouro" readonly>
        </p>
        <p>
            <label for="resultado-bairro">Bairro:</label>
            <input type="text" id="resultado-bairro" readonly>
        </p>
        <p>
            <label for="resultado-cidade">Cidade:</label>
            <input type="text" id="resultado-cidade" readonly>
        </p>
        <p>
            <label for="resultado-uf">UF:</label>
            <input type="text" id="resultado-uf" readonly>
        </p>
        <p>
            <label for="resultado-pokemon">Pokémon:</label>
            <input type="text" id="resultado-pokemon" readonly>
        </p>
        <p>
            <label for="resultado-numero-pokemon">Número do pokémon:</label>
            <input type="text" id="resultado-numero-pokemon" readonly>
        </p>
        <p>
            <label for="resultado-foto-pokemon">Foto:</label>
            <img id="resultado-foto-pokemon" src="https://cdn-icons-png.flaticon.com/256/4467/4467515.png" height="256" style="border: 1px solid black;">
        </p>
    </body>
</html>
