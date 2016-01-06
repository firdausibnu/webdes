var app2 = angular.module('alfi2', ['ngAnimate', 'ng-fx']);

app2.run(['$rootScope',
    function ($rootScope) {
        $rootScope.init = function () {
            $rootScope.displayW = 900; // Gunakan ini untuk set lebar dari tampilan utama aplikasi secara global
            $rootScope.started = true;
            $rootScope.begin = false;
            $rootScope.ended = false;
        };
        $rootScope.init();
    }]);

app2.controller('mainCtrl2', ['$rootScope', '$scope', '$http', '$timeout',
    function ($rootScope, $scope, $http, $timeout) {
        $scope.reset = function () {
            $scope.questions = [];
            $scope.answers = [];
            $scope.answered = 0;
            $scope.position = 0;
            $scope.submitReady = false;
        }

        $scope.run = function () {

            $http.get('kuis2/questions.php').success(function (response) {
                $scope.questions = response.result;
                console.log($scope.questions);
                angular.forEach(response.result, function (value, key) {
                    $scope.answers.push({ 'id': value.id, 'answer': 0 });
                });
            });
            $scope.startApp = function () {
                var s = $timeout(function () {
                    $rootScope.started = false;
                    $rootScope.begin = true;
                    $timeout.cancel(s);
                });
            }
            $scope.submit = function () {
                if ($scope.position === $scope.questions.length - 1) {
                    console.log('submit');
                    $http.post('kuis2/submit.php', $scope.answers).success(function (response) {
                        $scope.results = response.result;
                        console.log(JSON.stringify($scope.results));
                        var correct = 0;
                        angular.forEach($scope.results, function (value) {
                            if (value.result) {
                                console.log(value.result);
                                correct++;
                            }
                        });
                        $scope.score = Math.round(((correct / $scope.results.length) * 100) * 100) / 100;
                        var distance = (900 * $scope.results.length - 1);
                        console.log($scope.results.length);
                        console.log(distance);
                        $rootScope.ended = true;
                        $('.scrolls').animate({ scrollLeft: distance }, 500);
                        console.log($scope.results);
                    });
                }
            }
            $scope.next = function () {
                if ($scope.position < $scope.questions.length - 1) {
                    var distance = 900 + (900 * $scope.position);
                    console.log(distance);
                    $('.scrolls').animate({ scrollLeft: distance }, 500);
                    $scope.position++;
                    if ($scope.position === $scope.questions.length - 1) {
                        $scope.submitReady = true;
                    }
                }
            }
            $scope.prev = function () {
                if ($scope.position > 0) {
                    $scope.submitReady = false;
                    var distance = (900 * ($scope.position)) - 900;
                    console.log(distance);
                    $('.scrolls').animate({ scrollLeft: distance }, 500);
                    $scope.position--;
                    if ($scope.position === $scope.questions.length - 2) {
                        $scope.submitReady = false;
                    }
                }
            }
            $scope.choose = function (id, index, answerId) {
                console.log($scope.answers[$scope.position].answer);
                if ($scope.answers[$scope.position].answer == 0) { // If hasn't answered, iterate the scope.answered
                    $scope.answered++;
                }
                $scope.answers[$scope.position] = { "id": id, "index": index, "answer": answerId };
            }

            $scope.reload = function () {
                $rootScope.init();
                $scope.reset();
                $scope.run();
            }
        }
        $scope.reset();
        $scope.run();
    }]);