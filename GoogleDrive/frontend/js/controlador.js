miUnidad();
function nuevo(){
    document.getElementById('botonNuevo').innerHTML = '';
    document.getElementById('botonNuevo').innerHTML =
        `
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-folder"></i> Carpeta</a><hr>
            <a class="dropdown-item btn-file" href="#"><i class="fas fa-file-upload"></i>Subir Archivo<input type="file"></a>
            <a class="dropdown-item" href="#"><i class="far fa-folder"></i>Subir Carpeta</a><hr>
            <a class="dropdown-item" href="#"><i class="fas fa-file-alt" style="color: #4285F4;"></i>Documentos de google</a>
            <a class="dropdown-item" href="#"><i class="fas fa-file-medical" style="color: #0F9D58;"></i>Hojas de calculo de google</a>
            <a class="dropdown-item" href="#"><i class="far fa-file" style="color: #F4B400;"></i>Presentaciones de google</a>
            <a class="dropdown-item" href="#">Mas</a>    
        `;
}
function miUnidad(){
    console.log("si entro")
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `
        <div class="btn-group">
        <a type="button" class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Mi unidad</a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-folder"></i> Carpeta</a><hr>
            <a class="dropdown-item btn-file" href="#"><i class="fas fa-file-upload"></i>Subir Archivo<input type="file"></a>
            <a class="dropdown-item" href="#"><i class="far fa-folder"></i>Subir Carpeta</a><hr>
            <a class="dropdown-item" href="https://docs.google.com/document/d/1C50qmBkCYHOh6LNo3Gam8dK6xMhaknPGaWmQY8YpJsM/edit" target="_blank"><i class="fas fa-file-alt" style="color: #4285F4;"></i>Documentos de google</a>
            <a class="dropdown-item" href="#"><i class="fas fa-file-medical" style="color: #0F9D58;"></i>Hojas de calculo de google</a>
            <a class="dropdown-item" href="#"><i class="far fa-file" style="color: #F4B400;"></i>Presentaciones de google</a>
            <a class="dropdown-item" href="#">Mas</a>    
        </div>    
        </div>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>
        `;
        document.getElementById('contenido').innerHTML = '';
        document.getElementById('contenido').innerHTML = 
            `<h3>Un lugar para todos tus archivos</h3>
            <div class="row" style="margin: 2rem 1rem;">
                <div class="col-5"  style="text-align: right;">
                    <p>Documentos, Hojas de calculo, Precentaciones de google y otras app</p>
                    <i class="fas fa-file-alt" style="color: #4285F4;"></i>
                    <i class="fas fa-file-medical" style="color: #0F9D58;"></i>
                    <i class="far fa-file" style="color: #F4B400;"></i>
                </div>
                <div class="col-2">
                    <img src="img/drive_96dp.png" style="text-align: right;" >
                </div>
                <div class="col-5" style="text-align: left;">
                    <p>Archivos de Microsoft Office y de muchos otros tipos</p>
                    <i class="fas fa-file-word" style="color: #4B87E4;"></i>
                    <i class="fas fa-file-excel" style="color: #0F9D58;"></i>
                    <i class="fas fa-file-powerpoint" style="color: #FD7541;"></i>
                </div>
            </div>
            <p>Puedes arastrar archivos o carpetas directamente a Drive</p>`;
}
function compartidos(){
    console.log("entro");
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `<a class="navbar-brand" href="#">Compartidos conmigo</a>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>`;
    document.getElementById('contenido').innerHTML = '';

}
function recientes(){
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `<a class="navbar-brand" href="#">Recientes</a>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>`;
    document.getElementById('contenido').innerHTML = '';
}
function destacados(){
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `<a class="navbar-brand" href="#">Destacados</a>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>`;
    document.getElementById('contenido').innerHTML = '';
    document.getElementById('contenido').innerHTML = 
        `
        <img src="img/destacado.svg" style="height: 11rem;">
        <h5>No hay archivos ni carpetas en destacados</h5>
        <p>Agrega estrellas a los elementos que quieras encontrar facilmente mas adelante.</p>
        `;
}

function papelera(){
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `
        <div class="btn-group">
            <a type="button" class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Papelera</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"></i> Vaciar papelera </a>
            </div>
        </div>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>`;
    document.getElementById('contenido').innerHTML = '';
    document.getElementById('contenido').innerHTML = 
        `
        <img src="img/trash.svg" style="height: 11rem;">
        <h5>No hay archivos ni carpetas en la papelera.</h5>
        <p style="margin: 0 8rem">Coloca los archivos que ya no necesitas en la Papelera. Haz click en "Vaciar papelera" para eliminar los elementos de forma definitiva
        y liberar espacio de almacenamiento.</p>
        `;


}

function almacenamiento(){
    document.getElementById('navAbajo').innerHTML = '';
    document.getElementById('navAbajo').innerHTML = 
        `<a class="navbar-brand" href="#">Almacenamiento</a>
        <i class="fas fa-list-alt" style="margin-left: auto; padding: 0 15px;"></i>
        <i class="fas fa-info-circle" style="padding: 0 15px;"></i>`;
    document.getElementById('contenido').innerHTML = '';
}
