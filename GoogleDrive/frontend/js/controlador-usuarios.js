function verificarEmail(){
    axios({
        url: '../backend/api/usuarios.php?correo='+document.getElementById('correo').value,
        method: 'get',
        responseType: 'json',
    }).then(res=>{
        console.log(res.data);
        if (res.data.codigoResultado == 1){
            document.getElementById('error').style.display = 'none';
            document.getElementById('correo').style.display = 'none';
            document.getElementById('contrasena').style.display = 'block';
            document.getElementById('botonesIniciarSesion').innerHTML = 
                `
                <button class="btn btn-primary" id="siguiente" onclick="iniciarSesion()" type="button">
                    <p>Siguiente</p>
                </button>	
            `;
        }else{
            document.getElementById('error').style.display = 'block';
            document.getElementById('error').innerHTML = res.data.mensaje;
        }
    }).catch(error=>{
        console.error(error);
    });

}

function iniciarSesion(){
    axios({
        url: '../backend/api/iniciarSesion.php',
        method: 'post',
        responseType: 'json',
        data: {
            correo: document.getElementById('correo').value,
            contrasena: document.getElementById('contrasena').value
        }
    }).then(res=>{
        console.log(res.data);
        if (res.data.codigoResultado == 1){
            window.location.href = "home.php";
        }else{
            document.getElementById('error').style.display = 'block';
            document.getElementById('error').innerHTML = res.data.mensaje;
        }
    }).catch(error=>{
        console.error(error);
    });
}
function nuevoUsuario(){
    axios({
        url: '../backend/api/usuarios.php',
        method: 'post',
        responseType: 'json',
        data: {
            nombre: document.getElementById('nombre').value,
            apellido: document.getElementById('apellido').value,
            correo: document.getElementById('correo').value,
            contrasena: document.getElementById('contrasena').value
        }
    }).then(res=>{
        console.log(res.data);
        if (res.data.codigoResultado == 1){
            window.location.href = "index.html";
        }else{
            document.getElementById('error2').style.display = 'inherit';
            document.getElementById('error2').innerHTML = res.data.mensaje;
        }
    }).catch(error=>{
        console.error(error);
    });
}