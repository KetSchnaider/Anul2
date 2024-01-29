let currentPage = 0;
const rowsPerPage = 10;
let selectedCategory;
let selectedYear;
let currentData; 

function editStatistics() {
  const airButton = createCategoryButton("Air", "air");
  const waterButton = createCategoryButton("Water", "water");
  const wasteButton = createCategoryButton("Waste", "waste");

  const statisticsSection = document.getElementById("statistics");
  statisticsSection.innerHTML = "";
  statisticsSection.appendChild(airButton);
  statisticsSection.appendChild(waterButton);
  statisticsSection.appendChild(wasteButton);
}

function createCategoryButton(category, tableName) {
  const container = document.createElement("div");
  const button = document.createElement("button");
  button.textContent = category;
  button.className = "category-button";
  const yearDropdown = document.createElement("select");
  yearDropdown.id = "yearDropdown";
  container.appendChild(button);
  container.appendChild(yearDropdown);
  fetchYearsFromDatabaseAndPopulateDropdown(yearDropdown);

  button.onclick = function () {
    currentPage = 0;
    const statisticsSection = document.getElementById("statistics");
    statisticsSection.innerHTML = "";
    selectedCategory = tableName;
    selectedYear = yearDropdown.value;
    createTable(selectedCategory);
  };

  return container;
}

function fetchYearsFromDatabaseAndPopulateDropdown(yearDropdown) {
  const apiUrl = "get_years.php";

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (Array.isArray(data)) {
        data.forEach((year) => {
          const option = document.createElement("option");
          option.value = year;
          option.textContent = year;
          yearDropdown.appendChild(option);
        });

        selectedYear = yearDropdown.value;
        createTable(selectedCategory);
      } else {
        console.error("Error: Invalid data format received.");
      }
    })
    .catch((error) => {
      console.error("Error fetching available years:", error);
    });
}

function createTable(tableName) {
  const apiUrl = `get_${tableName}_data.php?year=${selectedYear}`;

  
  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      
      currentData = data;

      const startIndex = currentPage * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      const table = document.createElement("table");
      table.border = "1";
      const headerRow = table.insertRow();
      for (const label of data.labels) {
        const headerCell = headerRow.insertCell();
        headerCell.textContent = label;
      }
      const editHeaderCell = headerRow.insertCell();
      editHeaderCell.textContent = "Edit";
      const deleteHeaderCell = headerRow.insertCell();
      deleteHeaderCell.textContent = "Delete";

      for (let i = startIndex; i < Math.min(endIndex, data.values.length); i++) {
        const row = table.insertRow();
        row.setAttribute("data-category", selectedCategory);
        row.setAttribute("data-id", data.values[i][0]);

        for (const value of data.values[i]) {
          const cell = row.insertCell();
          cell.textContent = value;
        }

        const editCell = row.insertCell();
        editCell.innerHTML = '<button onclick="editRow(this)">Edit</button>';
        const deleteCell = row.insertCell();
        deleteCell.innerHTML = '<button onclick="deleteRow(this)">Delete</button>';
      }

      const statisticsSection = document.getElementById("statistics");
      statisticsSection.innerHTML = "";
      statisticsSection.appendChild(table);

      addNavigationButtons(data.values.length);
    })
    .catch((error) => {
      console.error("Error fetching data:", error);
    });
}

function addNavigationButtons(totalRows) {
  const navigationSection = document.getElementById("navigation");
  if (!navigationSection) {
    console.error("Navigation section not found.");
    return;
  }

  navigationSection.innerHTML = "";

  const totalPages = Math.ceil(totalRows / rowsPerPage);

  const prevButton = document.createElement("button");
  prevButton.textContent = "Previous";
  prevButton.onclick = function () {
    if (currentPage > 0) {
      currentPage--;
      createTable(selectedCategory);
    }
  };

  const nextButton = document.createElement("button");
  nextButton.textContent = "Next";
  nextButton.onclick = function () {
    if (currentPage < totalPages - 1) {
      currentPage++;
      createTable(selectedCategory);
    }
  };

  navigationSection.appendChild(prevButton);
  navigationSection.appendChild(
    document.createTextNode(` Page ${currentPage + 1} of ${totalPages} `)
  );
  navigationSection.appendChild(nextButton);
}

function editRow(button) {
  const rowIndex = button.parentNode.parentNode.rowIndex;
  const category = button.parentNode.parentNode.getAttribute('data-category');
  const id = button.parentNode.parentNode.getAttribute('data-id');
  const row = button.parentNode.parentNode;

  const inputFields = [];
  for (let i = 0; i < row.cells.length - 2; i++) {
    const cellValue = row.cells[i].textContent;
    
    
    const input = (i === 1 || i === 2) ? document.createElement('span') : document.createElement('input');
    
    if (input.tagName === 'INPUT') {
      input.type = 'text';
      input.value = cellValue;
    } else {
      input.textContent = cellValue;
    }
    
    inputFields.push(input);
    row.cells[i].textContent = '';
    row.cells[i].appendChild(input);
  }

  const editButton = row.cells[row.cells.length - 2].querySelector('button');
  editButton.textContent = 'Update';
  editButton.onclick = function () {
    updateRow(category, id, rowIndex, inputFields);
  };
}

function updateRow(category, id, rowIndex, inputFields) {
  const updatedData = {};
  inputFields.forEach((input, index) => {
    const label = currentData.labels[index];
    updatedData[label] = input.value;
  });

  fetch(`edit_row_${category}.php?id=${id}`, {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(updatedData),
  })
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      alert(data.message);
      if (data.message === 'Row updated successfully') {
        
        createTable(selectedCategory);
      }
    })
    .catch(error => console.error("Error updating row:", error));
}


function deleteRow(button) {
  const rowIndex = button.parentNode.parentNode.rowIndex;
  const confirmDelete = confirm("Are you sure you want to delete this row?");
  if (!confirmDelete) {
    return;
  }

  const category = button.parentNode.parentNode.getAttribute("data-category");
  const id = button.parentNode.parentNode.getAttribute("data-id");

  fetch(`delete_row.php?category=${category}&id=${id}`, {
    method: "DELETE",
  })
    .then(response => response.json())
    .then(data => {
      alert(data.message);
      if (data.message === "Row deleted successfully") {
        const table = document.querySelector("table");
        table.deleteRow(rowIndex);
      }
    })
    .catch(error => console.error("Error deleting row:", error));
}

let isAddingMode = false;


function fetchZonesForYear(year, dropdown) {
  const apiUrl = `get_zones.php?year=${year}`;

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      dropdown.innerHTML = ""; 

      if (Array.isArray(data)) {
        data.forEach((zone) => {
          const option = document.createElement("option");
          option.value = zone;
          option.textContent = zone;
          dropdown.appendChild(option);
        });
      } else {
        console.error("Error: Invalid data format received for zones.");
      }
    })
    .catch((error) => {
      console.error("Error fetching zones:", error);
    });
}


function fetchYearsFromDatabaseAndPopulateDropdown(yearDropdown, zoneDropdown) {
  const apiUrl = "get_years.php";

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (Array.isArray(data)) {
        data.forEach((year) => {
          const option = document.createElement("option");
          option.value = year;
          option.textContent = year;
          yearDropdown.appendChild(option);
        });

        selectedYear = yearDropdown.value;
        fetchZonesForYear(selectedYear, zoneDropdown); 

        
        yearDropdown.addEventListener("change", function () {
          selectedYear = this.value;
          fetchZonesForYear(selectedYear, zoneDropdown);
        });

        createTable(selectedCategory);
      } else {
        console.error("Error: Invalid data format received.");
      }
    })
    .catch((error) => {
      console.error("Error fetching available years:", error);
    });
}


function addStatisticsWater() {
  isAddingMode = true;

  
  document.getElementById("editButton").style.display = "none";
  document.getElementById("addButtonWater").style.display = "none";
  document.getElementById("addButtonWaste").style.display = "none";
  document.getElementById("addButtonAir").style.display = "none";

  document.getElementById("addFormWater").style.display = "block";

  
  document.getElementById("addYearWater").value = "";
  document.getElementById("addZoneWater").value = "";
  document.getElementById("addSubstanceWater").value = "";
  document.getElementById("addDataWater").value = "";

  
  fetchYearsFromDatabaseAndPopulateDropdown(
    document.getElementById("addYearWater"),
    document.getElementById("addZoneWater")
  );
}

function submitWaterStatistics() {
  
  const yearIndex = document.getElementById("addYearWater").selectedIndex + 1;
  const zoneIndex = document.getElementById("addZoneWater").selectedIndex + 1;
  const substance = document.getElementById("addSubstanceWater").value;
  const data = document.getElementById("addDataWater").value;

  

  
  const newWaterData = {
    year_id: yearIndex, 
    zone_id: zoneIndex, 
    substance_name: substance,
    data: data,
  };

  
  fetch("add_water_statistics.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(newWaterData),
  })
    .then((response) => response.json())
    .then((data) => {
      alert(data.message);
      if (data.message === "Water statistics added successfully") {
        
        isAddingMode = false;
        document.getElementById("editButton").style.display = "block";
        document.getElementById("addButtonWater").style.display = "block";
        document.getElementById("addButtonWaste").style.display = "block";
        document.getElementById("addButtonAir").style.display = "block";

        document.getElementById("addFormWater").style.display = "none";

        
        createTable("water_statistics");
      }
    })
    .catch((error) =>
      console.error("Error adding water statistics:", error)
    );
}

function addStatisticsWaste() {
  isAddingMode = true;

  
  document.getElementById("editButton").style.display = "none";
  document.getElementById("addButtonWater").style.display = "none";
  document.getElementById("addButtonWaste").style.display = "none";
  document.getElementById("addButtonAir").style.display = "none";

  document.getElementById("addFormWaste").style.display = "block";

  
  document.getElementById("addYearWaste").value = "";
  document.getElementById("addZoneWaste").value = "";
  document.getElementById("addCategoryWaste").value = "";
  document.getElementById("addDataWaste").value = "";

  
  fetchYearsFromDatabaseAndPopulateDropdown(
    document.getElementById("addYearWaste"),
    document.getElementById("addZoneWaste")
  );
}
function submitWasteStatistics() {
  
  const yearIndex = document.getElementById("addYearWaste").selectedIndex + 1;
  const zoneIndex = document.getElementById("addZoneWaste").selectedIndex + 1;
  const category = document.getElementById("addCategoryWaste").value;
  const data = document.getElementById("addDataWaste").value;


  
  const newWaterData = {
    year_id: yearIndex, 
    zone_id: zoneIndex, 
    category_name: category,
    data: data,
  };

  
  fetch("add_waste_statistics.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(newWaterData),
  })
    .then((response) => response.json())
    .then((data) => {
      alert(data.message);
      if (data.message === "Waste statistics added successfully") {
        
        isAddingMode = false;
        document.getElementById("editButton").style.display = "block";
        document.getElementById("addButtonWater").style.display = "block";
        document.getElementById("addButtonWaste").style.display = "block";
        document.getElementById("addButtonAir").style.display = "block";

        document.getElementById("addFormWaste").style.display = "none";

        
        createTable("waste_statistics");
      }
    })
    .catch((error) =>
      console.error("Error adding waste statistics:", error)
    );
}

function addStatisticsAir() {
  isAddingMode = true;

  
  document.getElementById("editButton").style.display = "none";
  document.getElementById("addButtonWater").style.display = "none";
  document.getElementById("addButtonWaste").style.display = "none";
  document.getElementById("addButtonAir").style.display = "none";

  document.getElementById("addFormAir").style.display = "block";

  
  document.getElementById("addYearAir").value = "";
  document.getElementById("addZoneAir").value = "";
  document.getElementById("addCategoryAir").value = "";
  document.getElementById("addSubstanceAir").value = "";
  document.getElementById("addDataAir").value = "";

  
  fetchYearsFromDatabaseAndPopulateDropdown(
    document.getElementById("addYearAir"),
    document.getElementById("addZoneAir")
  );
}
function submitAirStatistics() {
  
  const yearIndex = document.getElementById("addYearAir").selectedIndex + 1;
  const zoneIndex = document.getElementById("addZoneAir").selectedIndex + 1;
  const category = document.getElementById("addCategoryAir").value;
  const substance = document.getElementById("addSubstanceAir").value;
  const data = document.getElementById("addDataAir").value;


  
  const newWaterData = {
    year_id: yearIndex, 
    zone_id: zoneIndex, 
    category_name: category,
    substance_name: substance,
    data: data,
  };

  
  fetch("add_air_statistics.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(newWaterData),
  })
    .then((response) => response.json())
    .then((data) => {
      alert(data.message);
      if (data.message === "Air statistics added successfully") {
        
        isAddingMode = false;
        document.getElementById("editButton").style.display = "block";
        document.getElementById("addButtonWater").style.display = "block";
        document.getElementById("addButtonWaste").style.display = "block";
        document.getElementById("addButtonAir").style.display = "block";

        document.getElementById("addFormAir").style.display = "none";

        
        createTable("air_statistics");
      }
    })
    .catch((error) =>
      console.error("Error adding air statistics:", error)
    );
}