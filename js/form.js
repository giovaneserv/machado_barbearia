/* a linha abaixo serve para quando o link para o JS estiver no topo do HTML */
document.addEventListener('DOMContentLoaded', function () {
    function handleForm(event) {
        event.preventDefault();

        let cliente = {
            nome: document.querySelector("#nome").value,
            sobrenome: document.querySelector("#sobrenome").value,
            celular: document.querySelector("#celular").value,
            dia: document.querySelector("#dia").value,
            mes: document.querySelector("#mes").value,
            ano: document.querySelector("#ano").value
        };
        mostrarCliente(cliente);

    } 
});