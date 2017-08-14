var base_url = "http://localhost/energia/index.php/";

angular.module("sigere", []);
angular.module("sigere").controller("telaDeLoginCtrl", function ($scope, $http) {

    $scope.app = "sigere";

    $scope.openModal = function () {
        $scope.modalCadastro = {'display': ' inline'};
        $scope.modalMascara = {'display': ' inline'};

    };

    $scope.closeModal = function () {
        $scope.modalCadastro = {'display': 'none'};
        $scope.modalMascara = {'display': 'none'};
    };

    $scope.validaEmail = function (tipoCampo) {

    };

    $scope.validaCadastro = function (dadosCadastro) {

    };




});


