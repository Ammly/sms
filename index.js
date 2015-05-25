var Region = function (regionName) {
       this.name = regionName; 
   }; 
   var Country = function (countryName) {
       this.name = countryName;
   } 
   Country.prototype = new Region("A random region");
   var country = new Country("A random country");
   console.log(country.name);