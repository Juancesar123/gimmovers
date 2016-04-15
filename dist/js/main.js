
var mainApp = angular.module("mainApp", ['ngRoute','datatables','checklist-model']);
 var url='http://localhost/gimmovers';
 mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/galery', {
            templateUrl: url+"/galery",
			controller :'galery'
		}).when('/service', {
            templateUrl: url+"/our_service",
			controller :'service'
		}).when('/managementuser', {
            templateUrl: url+"/management_user",
			controller :'managementuser'
		})
		
 });

mainApp.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                 
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);
		mainApp.service('fileUpload', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,gambar,status,deskripsi,uploadUrl){
        var fd = new FormData();
        fd.append('judul', judul);
        fd.append('gambar', gambar);
        fd.append('status', status);
        fd.append('deskripsi', deskripsi);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_galery").success(function(data){
		galery = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('fileEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,gambar,id,status,deksripsi,uploadUrl){
        var fd = new FormData();
        fd.append('judul', judul);
        fd.append('gambar', gambar);
        fd.append('id', id);
        fd.append('status', status);
        fd.append('deskripsi', deskripsi);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_galery").success(function(data){
		galery = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
	mainApp.service('serviceUpload', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(nama,gambar,deskripsi,uploadUrl){
        var fd = new FormData();
        fd.append('nama', nama);
        fd.append('gambar', gambar);
        fd.append('deskripsi', deskripsi);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_service").success(function(data){
		service = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('serviceEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(nama,gambar,deskripsi,id,uploadUrl){
        var fd = new FormData();
        fd.append('nama', nama);
        fd.append('gambar', gambar);
        fd.append('deskripsi', deskripsi);
        fd.append('id', id);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_service").success(function(data){
		service = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.controller("galery",function(fileEdit,fileUpload,$scope,DTOptionsBuilder,DTColumnBuilder,$http){
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("view_galery").success(function(data){
				$scope.galery = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah= function(){
			var judul = $scope.judul;
			var gambar = $scope.gambar;
			var galery = $scope.galery;
			var status = $scope.status;
			var deskripsi = $scope.deskripsi;
			var uploadUrl = "insert_galery";
			fileUpload.uploadFileToUrl(judul,gambar,status,deskripsi,uploadUrl);
			$scope.getdata();
		}
		$scope.edit=function(item){
			$scope.judul = item.judul;
			$scope.gambar = item.gambar;
			$scope.status = item.status;
			$scope.deskripsi = item.deskripsi;
			$scope.id = item.id;
		}
		$scope.actionedit=function(){
			var judul = $scope.judul;
			var gambar = $scope.gambar;
			var galery = $scope.galery;
			var status = $scope.status;
			var deskripsi = $scope.deskripsi;
			var id = $scope.id;
			var uploadUrl = "edit_galery";
			fileEdit.uploadFileToUrl(judul,gambar,id,status,deskripsi,uploadUrl);
			$scope.getdata();
		}
		$scope.user={
			galery:[]
		}
		$scope.hapus=function(){
			var id = $scope.user;
			$http.post("hapus_galery",{id:id}).success(function(){
				alert("data sukses dihapus");
				$scope.getdata();
			});
		}
});
mainApp.controller("service",function(serviceEdit,serviceUpload,$scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("view_service").success(function(data){
				$scope.service = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah=function(){
			var nama = $scope.nama;
			var gambar = $scope.gambar;
			var deskripsi = $scope.deskripsi;
			var uploadUrl = "insert_service";
			var service = $scope.service;
			serviceUpload.uploadFileToUrl(nama,gambar,deskripsi,uploadUrl);
			$scope.getdata();
		}
		$scope.edit=function(item){
			$scope.nama = item.nama_service;
			$scope.gambar = item.gambar;
			$scope.deskripsi = item.deskripsi;
			$scope.id = item.id;
		}
			$scope.actionedit=function(){
			var nama = $scope.nama;
			var gambar = $scope.gambar;
			var deskripsi = $scope.deskripsi;
			var id = $scope.id;
			var uploadUrl = "edit_service";
			var service = $scope.service;
			serviceEdit.uploadFileToUrl(nama,gambar,deskripsi,id,uploadUrl);
			$scope.getdata();
		}
		$scope.user={
			service:[]
		}
		$scope.hapus= function(){
			var id = $scope.user;
			$http.post("hapus_service",{id:id}).success(function(){
				alert("data sukses dihapus");
				$scope.getdata();
			});
		}
})
mainApp.controller("managementuser",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("view_user").success(function(data){
				$scope.users = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah=function(){
			var first_name = $scope.first_name;
			var last_name = $scope.last_name;
			var email = $scope.email;
			var password = $scope.password;
			$http.post("insert_user",{first_name:first_name,last_name:last_name,email:email,password:password}).success(function(){
				alert("data user sukses di simpan");
				$scope.getdata();
			})
		}
		$scope.edit=function(item){
			$scope.first_name = item.first_name;
			$scope.last_name = item.last_name;
			$scope.email = item.email;
			$scope.id = item.id;
		}
		$scope.actionedit= function(){
			var first_name = $scope.first_name;
			var last_name = $scope.last_name;
			var email = $scope.email;
			var password = $scope.password;
			var id = $scope.id;
			$http.post("edit_user",{id:id,first_name:first_name,last_name:last_name,email:email,password:password}).success(function(){
				alert("data user sukses di ubah");
				$scope.getdata();
			})
		}
		$scope.user={
			users:[]
		}
		$scope.hapus=function(){
			var id = $scope.user;
			$http.post("hapus_user",{id:id}).success(function(){
				alert("data user sukses di hapus");
				$scope.getdata();
			})
		}
});