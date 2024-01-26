@push('css')

<link href="{{ asset('assets/admin/plugins/custombox/dist/custombox.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
<script src="{{ asset('assets/admin/plugins/switchery/switchery.min.js')}}"></script>
@endpush

@extends('admin.layouts.app')
@section('content')
<style>
   .tbl-header{
   display: flex;
   justify-content: space-between;
    align-items: center;
    flex-direction: row;
    margin-bottom: 2%;
   }
</style>

<div class="row">
   <div class="col-sm-12">
      <div class="card-box table-responsive">
         <div class="row">
           <div class="tbl-header">
           <h4 class="header-title m-t-0 m-b-3">User List</h4>   
            <div class="col-sm-6 text-right">
               <div class="m-b-3">
                  <a href="#custom-modal" class="btn btn-primary waves-effect waves-light"
                     data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                  <i class="zmdi zmdi-plus"></i> Add user
                  </a>
               </div>
            </div>
           </div>
         </div>
        
         <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>0838838838</td>
                  <td>Edinburgh</td>
                  
                  <td class="actions">
                     <a href="#" class="on-default edit-row btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                     <a href="#" class=" on-default remove-row btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   <!-- end col -->
</div>
<!-- Model -->
<div id="custom-modal" class="modal-demo">
			    <button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Add New user</h4>
			    <div class="custom-modal-text text-left">
			        <form role="form">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="assign">name</label>
                                    <input type="text" class="form-control" id="assign" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="priority">email</label>
                                    <div class="form-check form-switch">
                                    <input type="text" class="form-control" id="assign" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="assign">Phone</label>
                                    <input type="text" class="form-control" id="assign" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="assign">Role</label>
                                    <select class="form-control select2">
                                        <option>Select user role</option>
                                            <option value="AK">Admin</option>
                                            <option value="HI">user</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        
                    </form>
			    </div>
			</div>

@endsection

@push('js')


<script src="{{ asset('assets/admin/plugins/custombox/dist/custombox.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/custombox/dist/legacy.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/custombox/dist/legacy.min.js')}}"></script>

<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('assets/admin/pages/datatables.init.js') }}"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>



@endpush