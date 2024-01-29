document.addEventListener("DOMContentLoaded", function () {
  changeCategory("water");
});

function changeCategory(category) {

  document.getElementById("recycling-percentage").textContent = "Loading...";
  document.getElementById("waste-volume").textContent = "Loading...";
  document.getElementById("recycling-result").textContent = "Loading...";
  document.getElementById("waste-calculation-result").textContent = "Loading...";

  
  
  setTimeout(function () {
      fetch('getData.php')
          .then(response => response.json())
          .then(data => {
              
              document.getElementById("recycling-percentage").textContent = data.airStatistics.percentage + "%";
              document.getElementById("waste-volume").textContent = data.waterStatistics.wasteVolume + " kg";

              
              document.getElementById("recycling-result").textContent = getRecyclingCalculation(data.airStatistics.totalRecycled);
              document.getElementById("waste-calculation-result").textContent = getWasteCalculation(data.population, data.sanitationVehicles);
          })
          .catch(error => console.error('Error fetching data:', error));
  }, 1000); 
}

function getRecyclingCalculation(totalRecycled) {
  
  return "The total recycled amount is " + totalRecycled + " kg.";
}

function getWasteCalculation(population, sanitationVehicles) {
  
  
  var wastePerCapita = 0.2; 
  var totalWaste = population * wastePerCapita;
  var vehiclesNeeded = Math.ceil(totalWaste / sanitationVehicles);

  return "Each person produces " + wastePerCapita.toFixed(2) + " kg of waste per day. To manage the waste, " +
      vehiclesNeeded + " sanitation vehicles are needed.";
}
