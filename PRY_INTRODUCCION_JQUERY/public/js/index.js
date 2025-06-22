let tareaAEditar = null;

function agregarTarea() {
  const texto = $("#taskInput").val().trim();

  if (texto !== "") {
    const nuevaFila = `
      <tr>
        <td ondblclick="marcarCompletado(this)">${texto}</td>
        <td>
          <button class="btn btn-sm btn-warning me-1" onclick="editarTarea(this)">Editar</button>
          <button class="btn btn-sm btn-danger" onclick="eliminarTarea(this)">Eliminar</button>
        </td>
      </tr>
    `;
    $("#taskList").append(nuevaFila);
    $("#taskInput").val("");

    $("#msg").hide().removeClass("d-none").fadeIn();
    setTimeout(() => {
      $("#msg").fadeOut();
    }, 2000);
  }
}

function marcarCompletado(elemento) {
  $(elemento).toggleClass("completed");
}

function eliminarTarea(btn) {
  $(btn).closest("tr").remove();
}

function editarTarea(btn) {
  tareaAEditar = $(btn).closest("tr");
  const textoActual = tareaAEditar.find("td").first().text();
  $("#editInput").val(textoActual);
  $("#editContainer").removeClass("d-none");
}

function actualizarTarea() {
  const nuevoTexto = $("#editInput").val().trim();
  if (tareaAEditar && nuevoTexto !== "") {
    tareaAEditar.find("td").first().text(nuevoTexto);
    $("#editContainer").addClass("d-none");
    tareaAEditar = null;
  }
}

function vaciarLista() {
  $("#taskList").empty();
}
