const _token = $("#_token").val();
console.log(_token);

const DeletarAluno = (id) =>{
    $.ajax({
        type: "delete",
        url: `/alunos/destroy/${id}`,
        data: {
            _token
        },
        success: function (response) {
            alert("Aluno deletado!")
            $(`#tr-aluno-${id}`).remove();
        }
    });
}
const DeletarLivro = (id) =>{
    $.ajax({
        type: "delete",
        url: `/livros/destroy/${id}`,
        data: {
            _token
        },
        success: function (response) {
            alert("Livro deletado!")
            $(`#tr-livro-${id}`).remove();
        }
    });
}