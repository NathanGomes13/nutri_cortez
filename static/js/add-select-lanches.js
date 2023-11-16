let numSelects2 = 0;
let maxSelects2 = 7;

const adicionarSelectBtn2 = document.getElementById("adicionarSelectBtn-Lanches");

document.getElementById("adicionarSelectBtn-Lanches").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects2 < maxSelects2) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_lanches[]");
        novoSelect.setAttribute("data-tabela", "pratos_lanches");
        novoSelect.classList.add("select_lanches");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-lanches_box").removeChild(novoSelect);
            document.getElementById("montar-lanches_box").removeChild(btnExcluir);
            numSelects2--;
            adicionarSelectBtn2.disabled = false;
            atualizarSelectsLanches();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_lanches.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-lanches_box").appendChild(novoSelect);
                document.getElementById("montar-lanches_box").appendChild(btnExcluir);
                numSelects2++;

                if (numSelects2 >= maxSelects2) {
                    adicionarSelectBtn2.disabled = true;
                }
                atualizarSelectsLanches();
            }
        };
        xhr.send();
    }
});