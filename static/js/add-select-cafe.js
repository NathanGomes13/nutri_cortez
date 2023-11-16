let numSelects = 0;
let maxSelects = 4;

const adicionarSelectBtn = document.getElementById("adicionarSelectBtn-Cafe");

document.getElementById("adicionarSelectBtn-Cafe").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects < maxSelects) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_cafe_da_manha[]");
        novoSelect.setAttribute("data-tabela", "pratos_cafe_da_manha");
        novoSelect.classList.add("select_cafe_da_manha");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-cafe_box").removeChild(novoSelect);
            document.getElementById("montar-cafe_box").removeChild(btnExcluir);
            numSelects--;
            adicionarSelectBtn.disabled = false;
            atualizarSelectsCafeDaManha();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        // Aumenta um select
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_cafe.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-cafe_box").appendChild(novoSelect);
                document.getElementById("montar-cafe_box").appendChild(btnExcluir);
                numSelects++;

                if (numSelects >= maxSelects) {
                    adicionarSelectBtn.disabled = true;
                }
                atualizarSelectsCafeDaManha();
            }
        };
        xhr.send();
    }
});