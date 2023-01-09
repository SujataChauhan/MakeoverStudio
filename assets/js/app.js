var app = angular.module("myapp", []);
app.controller("myappCtrl", function($scope) {
  $scope.services = [
      {
         "IMG":"SGML",
         "title":"Skin Care",
         "qoute":"Healthy skin is not an overnight process."
      },
      {
         "IMG":"SGML",
         "title":"Fashion / Bridal / Natural Makeup",
         "qoute":"Beauty is power, and makeup is something that really enhances that; it’s a woman’s secret."
      },
      {
         "IMG":"SGML",
         "title":"Hair Styling",
         "qoute":"The right hairstyle can make a plain woman beautiful & a beautiful woman unforgettable."
      },
      {
         "IMG":"SGML",
         "title":"Skin and Hair Treatment",
         "qoute":"Healthy Skin and Hair are always in. Professional skin care treatments are like oil changes for your car – get them regularly."
      }
   ]
} );
