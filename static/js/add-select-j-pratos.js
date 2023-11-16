let numSelects5 = 0;
let maxSelects5 = 2;

const adicionarSelectBtn5 = document.getElementById("adicionarSelectBtn-J-Pratos");

document.getElementById("adicionarSelectBtn-J-Pratos").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects5 < maxSelects5) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_janta[]");
        novoSelect.setAttribute("data-tabela", "pratos_almoco_e_janta");
        novoSelect.classList.add("select_janta");
        novoSelect.classList.add("select_all_jantas");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-j-pratos_box").removeChild(novoSelect);
            document.getElementById("montar-j-pratos_box").removeChild(btnExcluir);
            numSelects5--;
            adicionarSelectBtn5.disabled = false;
            atualizarSelectsJanta();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_pratos.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-j-pratos_box").appendChild(novoSelect);
                document.getElementById("montar-j-pratos_box").appendChild(btnExcluir);
                numSelects5++;

                if (numSelects5 >= maxSelects5) {
                    adicionarSelectBtn5.disabled = true;
                }
                atualizarSelectsJanta();
            }
        };
        xhr.send();
    }
});