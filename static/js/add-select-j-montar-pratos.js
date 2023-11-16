let numSelects6 = 0;
let maxSelects6 = 9;

const adicionarSelectBtn6 = document.getElementById("adicionarSelectBtn-J-Montar");

document.getElementById("adicionarSelectBtn-J-Montar").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects6 < maxSelects6) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_montar_janta[]");
        novoSelect.setAttribute("data-tabela", "pratos_opcoes_separadas");
        novoSelect.classList.add("select_montar_janta");
        novoSelect.classList.add("select_all_jantas");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-janta_box").removeChild(novoSelect);
            document.getElementById("montar-janta_box").removeChild(btnExcluir);
            numSelects6--;
            adicionarSelectBtn6.disabled = false;
            atualizarSelectsJantaMontar();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_montar.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-janta_box").appendChild(novoSelect);
                document.getElementById("montar-janta_box").appendChild(btnExcluir);
                numSelects6++;

                if (numSelects6 >= maxSelects6) {
                    adicionarSelectBtn6.disabled = true;
                }
                atualizarSelectsJantaMontar();
            }
        };
        xhr.send();
    }
});