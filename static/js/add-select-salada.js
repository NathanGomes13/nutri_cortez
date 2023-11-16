let numSelects7 = 0;
let maxSelects7 = 4;

const adicionarSelectBtn7 = document.getElementById("adicionarSelectBtn-Salada");
document.getElementById("adicionarSelectBtn-Salada").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects7 < maxSelects7) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_salada[]");
        novoSelect.setAttribute("data-tabela", "pratos_salada");
        novoSelect.classList.add("select_salada");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-salada_box").removeChild(novoSelect);
            document.getElementById("montar-salada_box").removeChild(btnExcluir);
            numSelects7--;
            adicionarSelectBtn7.disabled = false;
            atualizarSelectsSalada();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_salada.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-salada_box").appendChild(novoSelect);
                document.getElementById("montar-salada_box").appendChild(btnExcluir);
                numSelects7++;

                if (numSelects7 >= maxSelects7) {
                    adicionarSelectBtn7.disabled = true;
                }
                atualizarSelectsSalada();
            }
        };
        xhr.send();
    }
});