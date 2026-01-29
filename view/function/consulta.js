// ===============================
// CONSULTA DNI / RUC
// ===============================

$(document).ready(function () {
    inicializarTipoDocumento();
    eventosDocumento();
});

// Inicializa el input según el tipo
function inicializarTipoDocumento() {
    $('#tipo_documento').trigger('change');
}

// Eventos principales
function eventosDocumento() {
    $('#btn_buscar_documento').on('click', buscarDocumento);
    $('#tipo_documento').on('change', configurarInputDocumento);
}

// Función principal
function buscarDocumento() {
    const tipoDocumento = $('#tipo_documento').val();
    const numeroDocumento = $('#nro_identidad').val().trim();

    if (tipoDocumento === 'dni') {
        consultarDNI(numeroDocumento);
    } else if (tipoDocumento === 'ruc') {
        consultarRUC(numeroDocumento);
    }
}

// ===============================
// CONSULTA DNI
// ===============================
function consultarDNI(dni) {
    if (dni.length !== 8 || isNaN(dni)) {
        alert('Ingrese un DNI válido de 8 dígitos');
        return;
    }

    $.ajax({
        url: 'control/consulta_dni.php',
        type: 'POST',
        data: { dni: dni },
        dataType: 'json',
        success: function (r) {
            if (r.numeroDocumento === dni) {
                const nombreCompleto = `${r.nombres} ${r.apellidoPaterno} ${r.apellidoMaterno}`;
                $('#razon_social').val(nombreCompleto);
            }
            console.log(r);
        },
        error: function (xhr, status, error) {
            console.error('Error en consulta DNI:', error);
            console.log(xhr.responseText);
        }
    });
}

// ===============================
// CONSULTA RUC
// ===============================
function consultarRUC(ruc) {
    if (ruc.length !== 11 || isNaN(ruc)) {
        alert('Ingrese un RUC válido de 11 dígitos');
        return;
    }

    $.ajax({
        url: 'control/consulta_ruc.php',
        type: 'POST',
        data: { ruc: ruc },
        dataType: 'json',
        success: function (r) {
            if (r.numeroDocumento === ruc) {
                $('#razon_social').val(r.razonSocial || r.nombre);

                if (r.direccion) {
                    $('#direccion').val(r.direccion);
                }
            }
            console.log(r);
        },
        error: function (xhr, status, error) {
            console.error('Error en consulta RUC:', error);
            console.log(xhr.responseText);
        }
    });
}

// ===============================
// CONFIGURACIÓN INPUT DOCUMENTO
// ===============================
function configurarInputDocumento() {
    const tipo = $(this).val();
    const inputDoc = $('#nro_identidad');

    if (tipo === 'dni') {
        inputDoc.attr({
            maxlength: 8,
            placeholder: 'Ingrese 8 dígitos'
        });
    } else {
        inputDoc.attr({
            maxlength: 11,
            placeholder: 'Ingrese 11 dígitos'
        });
    }
}
