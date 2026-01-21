<div class="container mt-4">
  <div class="card shadow-lg border-0 rounded-3">

    <div class="card-header d-flex justify-content-between align-items-center text-white fw-semibold fs-5"
      style="background-color: #0d6efd;">

      <span class="mx-auto">
        <i class="bi bi-people-fill me-2"></i> LISTA DE USUARIOS
      </span>

      <a href="<?= BASE_URL ?>new-user" class="btn btn-light btn-sm position-absolute end-0 me-3">
        Nuevo +
      </a>

    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle text-center mb-0">
          <thead class="text-white" style="background-color: #0d6efd;">
            <tr>
              <th>Nro</th>
              <th><i class="bi bi-person-vcard text-primary"></i> DNI</th>
              <th><i class="bi bi-person-lines-fill text-success"></i> Nombres y Apellidos</th>
              <th><i class="bi bi-envelope text-warning"></i> Correo</th>
              <th><i class="bi bi-person-gear text-info"></i> Rol</th>
              <th><i class="bi bi-check2-circle text-success"></i> Estado</th>
              <th><i class="bi bi-gear text-danger"></i> Acciones</th>
            </tr>
          </thead>
          <tbody id="content_users">
            <!-- Se cargan los usuarios dinámicamente -->
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>


<script src="<?= BASE_URL ?>view/function/user.js"></script>
<!-- <script>view_users();</script> -->