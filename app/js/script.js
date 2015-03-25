// 初始化
var app = angular.module('app',['ui.router','ngAnimate']);

// 底栏模板
var templateBar = "";

// 路由
app.config(["$stateProvider", function($stateProvider) {
  $stateProvider
    .state('home', {
      url: "",
      views: {
        "main": { templateUrl: "page-home.html", controller:"homeController" },
        "bar": { template: "" }
      }
    })
    .state('question', {
      url: "",
      views: {
        "main": { templateUrl: "page-question.html", controller:"questionController" },
        "bar": { template: templateBar }
      }
    })
    .state('report', {
      url: "",
      views: {
        "main": { templateUrl: "page-report.html", controller:"reportController" },
        "bar": { template: templateBar }
      }
    })
    .state('answer', {
      url: "",
      views: {
        "main": { templateUrl: "page-answer.html", controller:"answerController" },
        "bar": { template: templateBar }
      }
    })
}]);

// 首页
app.controller( "homeController", ["$scope", function($scope){
   
}]);

// 回答问题
app.controller( "questionController", ["$scope", function($scope){
	console.log("question")
}]);

// 结论
app.controller( "reportController", ["$scope", function($scope){
	 // var ctx = document.getElementById("chart").getContext("2d");
  //   var data = {
  //       labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
  //       datasets: [
  //           {
  //               fillColor: "red",
  //               strokeColor: "red",
  //               data: [28, 48, 40, 19, 96, 27, 100]
  //           }
  //       ]
  //   };
  //   var options = {
  //     responsive: true,
  //     scaleShowLabels : false,
  //     scaleShowLine : false,
  //     angleShowLineOut : false,
  //     pointDot : false,
  //   };
  //   var myRadarChart = new Chart(ctx).Radar(data, options);
}]);

// 好友的回答
app.controller( "answerController", ["$scope", function($scope){
	console.log("answer")
}]);