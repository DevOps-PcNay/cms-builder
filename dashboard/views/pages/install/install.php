<div class="container-fluid">
<!-- Centro Vertical, ocupa 100% pantalla,-->
  <div class="d-flex flex-wrap justify-content-center align-content-center vh-100"> 

    <!-- Para ventana de captura, border redondeado, con sombra en bordes, padin 5 -->
    <div class="card border-0 rounded shadow p-5">

      <form method="POST">
        <h3 class="pt-3">Instalacion Dashboard</h3>
        <hr>
        <div class="form-group mb-3">
          <label for="email_admin">Correo Administrador<sup>*</sup></label>
            <input type="email" class="form-control rounded" id="email_admin" name="email_admin" required>
        </div>

        <div class="form-group mb-3">
          <label for="password_admin">Contrasena Administrador<sup>*</sup></label>
            <input type="password" class="form-control rounded" id="password_admin" name="password_admin" required>
        </div>

        <div class="form-group mb-3">
          <label for="title_admin">Nombre Del Dashboard<sup>*</sup></label>
            <input type="text" class="form-control rounded" id="title_admin" name="title_admin" required>
        </div>       

        <div class="form-group mb-3">
          <label for="symbol_admin">Simbolo Del Dashboard<sup>*</sup></label>
            <input type="text" class="form-control rounded" id="symbol_admin" name="symbol_admin" required>
        </div> 

        <div class="form-group mb-3">
          <label for="font_admin">Tipografia Del Dashboard</label>
            <textarea  class="form-control rounded" id="font_admin" name="font_admin" ></textarea>
        </div> 

        <div class="form-group mb-3">
          <label for="color_admin">Color Del Dashboard</label>
            <input type="color" 
              class="form-control form-control-color rounded" 
              id="color_admin" 
              name="color_admin"
              value="#000000"
              title="Escoge Color">
        </div> 

        <div class="form-group mb-3">
          <label for="back_admin">Imagen Para El Login</label>
            <input 
              type="text" 
              class="form-control rounded" 
              id="back_admin" 
              name="back_admin">
        </div>  
        
        <small<sup>*</sup>Campos Obligatorios</small>

        <button type="submit" class="btn btn-dark btn-block w-100 rounded mt-5">Instalar </button>

      </form>

    </div> <!-- <div class="card border-0 rounded shadow p-5"> -->

  </div> <!--  <div class="d-flex flex-wrap justify-content-center align-content-center vh-100"> -->

</div> <!-- <div class="container-fluid"> -->
