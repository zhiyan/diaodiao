var app=angular.module("app",["ui.router","ngAnimate"]),templateBar="";app.config(["$stateProvider",function(e){e.state("home",{url:"",views:{main:{templateUrl:"page-home.html",controller:"homeController"},bar:{template:""}}}).state("question",{url:"",views:{main:{templateUrl:"page-question.html",controller:"questionController"},bar:{template:templateBar}}}).state("report",{url:"",views:{main:{templateUrl:"page-report.html",controller:"reportController"},bar:{template:templateBar}}}).state("answer",{url:"",views:{main:{templateUrl:"page-answer.html",controller:"answerController"},bar:{template:templateBar}}})}]),app.controller("homeController",["$scope",function(){}]),app.controller("questionController",["$scope",function(){console.log("question")}]),app.controller("reportController",["$scope",function(){}]),app.controller("answerController",["$scope",function(){console.log("answer")}]);