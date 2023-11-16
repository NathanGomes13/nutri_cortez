let numSelects4 = 0;
let maxSelects4 = 9;

const adicionarSelectBtn4 = document.getElementById("adicionarSelectBtn-Montar");

document.getElementById("adicionarSelectBtn-Montar").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects4 < maxSelects4) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_montar_almoco[]");
        novoSelect.setAttribute("data-tabela", "pratos_opcoes_separadas");
        novoSelect.classList.add("select_montar_almoco");
        novoSelect.classList.add("select_all_almocos");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-almoco_box").removeChild(novoSelect);
            document.getElementById("montar-almoco_box").removeChild(btnExcluir);
            numSelects4--;
            adicionarSelectBtn4.disabled = false;
            atualizarSelectsAlmocoMontar();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_montar.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-almoco_box").appendChild(novoSelect);
                document.getElementById("montar-almoco_box").appendChild(btnExcluir);
                numSelects4++;

                if (numSelects4 >= maxSelects4) {
                    adicionarSelectBtn4.disabled = true;
                }
                atualizarSelectsAlmocoMontar();
            }
        };
        xhr.send();
    }
});