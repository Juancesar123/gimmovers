<html>
<head>
</head>
<body>
 <section class="content-header">
          <h1>
            Galery
            <small>Foto Galery</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Galery</li>
          </ol>
        </section>
		<div class = "box-header">
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> tambah</button>
<button class="btn btn-danger" ng-click="hapus()"><i class="fa fa-trash"></i> Hapus</button>
</div>
<table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
<thead>
<th><input type="checkbox" ng-click="checkall()"></th>
<th>judul</th>
<th>gambar</th>
<th>Action</th>
</thead>
<tbody>
<tr ng-repeat="item in galery">
 <td> <input type="checkbox"  checklist-model="user.galery" checklist-value="item" role></td>
<td>{{item.judul}}</td>
<td><img ng-src="{{item.gambar}}" width="100" height="100"></td>
<td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"id="edit"><i class="fa fa-edit"></i></button></td>
</tr>
</tbody>
</table>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input galery</h4>
      </div>
      <div class="modal-body">
       <div class = "form-group">
	   <label>Judul Gambar</label>
	   <input type="text" class="form-control" ng-model="judul">
	   </div>
	   <div class = "form-group">
	   <label>Gambar</label>
	   <input type="file" class="form-control" file-model="gambar">
	   </div>
	   <div class = "form-group">
	   <label>Status</label>
	   <Select class="form-control" ng-model="status">
	   <option value="process">Proses</option>
	   <option value="storage">Storage</option>
	   <option value="trans">Transport</option>
	   </select>
	   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary" ng-click="tambah()"><i class="fa fa-cloud-upload"></i> Upload</button>
      </div>
    </div>

  </div>
</div>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit galery</h4>
      </div>
      <div class="modal-body">
       <div class = "form-group">
	   <label>Judul Gambar</label>
	   <input type="text" class="form-control" ng-model="judul">
	   <input type="hidden" class="form-control" ng-model="id">
	   </div>
	   <div class = "form-group">
	   <label>Gambar</label>
	   <input type="file" class="form-control" file-model="gambar">
	   </div>
	   <div class = "form-group">
	   <label>Status</label>
	   <Select class="form-control" ng-model="status">
	   <option value="process">Proses</option>
	   <option value="storage">Storage</option>
	   <option value="trans">Transport</option>
	   </select>
	   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-success" ng-click="actionedit()"><i class="fa fa-edit"></i> Submit</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
