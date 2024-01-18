@push('css')
    <link
      rel="stylesheet"
      href="{{ asset('assets/admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/admin/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/admin/vendor/libs/select2/select2.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/admin/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}"
    />
@endpush
@extends('admin.layouts.app')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
    Dashboard/</span> Driver
</h4>
<!-- Form -->
 <!-- Users List Table -->
          <div class="card">
                <div class="card-header border-bottom">
                  <h5 class="card-title">Search Filter</h5>
                  <div
                    class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0"
                  >
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                  </div>
                </div>
                <div class="card-datatable table-responsive">
                  <table class="datatables-users table border-top">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Car_ID</th>
                        <th>Billing</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- Offcanvas to add new user -->
                <div
                  class="offcanvas offcanvas-end"
                  tabindex="-1"
                  id="offcanvasAddUser"
                  aria-labelledby="offcanvasAddUserLabel"
                >
                  <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">
                      Add Driver
                    </h5>
                    <button
                      type="button"
                      class="btn-close text-reset"
                      data-bs-dismiss="offcanvas"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="offcanvas-body mx-0 flex-grow-0">
                    <form
                      class="add-new-user pt-0"
                      id="addNewUserForm"
                      onsubmit="return false"
                    >
                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"
                          >Full Name</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="add-user-fullname"
                          placeholder="John Doe"
                          name="userFullname"
                          aria-label="John Doe"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-email"
                          >Email</label
                        >
                        <input
                          type="text"
                          id="add-user-email"
                          class="form-control"
                          placeholder="john.doe@example.com"
                          aria-label="john.doe@example.com"
                          name="userEmail"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-contact"
                          >Contact</label
                        >
                        <input
                          type="text"
                          id="add-user-contact"
                          class="form-control phone-mask"
                          placeholder="+1 (609) 988-44-11"
                          aria-label="john.doe@example.com"
                          name="userContact"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-company"
                          >Company</label
                        >
                        <input
                          type="text"
                          id="add-user-company"
                          class="form-control"
                          placeholder="Web Developer"
                          aria-label="jdoe1"
                          name="companyName"
                        />
                      </div>
                     
                      <div class="mb-3">
                        <label class="form-label" for="user-role"
                          >User Role</label
                        >
                        <select id="user-role" class="form-select">
                          <option value="subscriber">Subscriber</option>
                          <option value="editor">Editor</option>
                          <option value="maintainer">Maintainer</option>
                          <option value="author">Author</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="user-plan"
                          >Select Plan</label
                        >
                        <select id="user-plan" class="form-select">
                          <option value="basic">Basic</option>
                          <option value="enterprise">Enterprise</option>
                          <option value="company">Company</option>
                          <option value="team">Team</option>
                        </select>
                      </div>
                      <button
                        type="submit"
                        class="btn btn-primary me-sm-3 me-1 data-submit"
                      >
                        Submit
                      </button>
                      <button
                        type="reset"
                        class="btn btn-label-secondary"
                        data-bs-dismiss="offcanvas"
                      >
                        Cancel
                      </button>
                    </form>
                  </div>
                </div>
              </div>
@endsection

@push('js')
<script src="{{ asset('assets/admin/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/jszip/jszip.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/pdfmake/pdfmake.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('assets/admin/js/app-user-list.js') }}"></script>
<script>
$.fn.dataTable.ext.errMode = 'throw';
</script>


@endpush