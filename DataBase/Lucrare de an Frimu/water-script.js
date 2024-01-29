document.addEventListener("DOMContentLoaded", function () {
    fetchYears();
    fetchZones();
    fetchWaterSubstances();

    document.getElementById("apply-button").addEventListener("click", function () {
        if (areAllFiltersSelected()) {
            applyFilters();
        } else {
            alert("Please select all three filters: Year, Substance, Zone(s).");
        }
    });

    if (typeof Chart !== 'undefined') {
        initializeOrUpdateChart();
    }
});

let selectedWaterSubstance = ""; 

function areAllFiltersSelected() {
    const selectedYear = document.getElementById("year-dropdown").value;
    const selectedSubstance = document.getElementById("water-substance-dropdown").value;
    const selectedZones = Array.from(document.getElementById("zone-dropdown").selectedOptions).map(option => option.value);

    
    selectedWaterSubstance = selectedSubstance;

    return selectedYear !== "" && selectedSubstance !== "" && selectedZones.length > 0;
}

function fetchYears() {
    const yearDropdown = document.getElementById("year-dropdown");
    fetchData("get_years.php", yearDropdown, "Select the year");
}

function fetchZones() {
    const zoneDropdown = document.getElementById("zone-dropdown");
    fetchData("get_zones.php", zoneDropdown, "Select the zone(s)");
}

function fetchWaterSubstances() {
    const waterSubstanceDropdown = document.getElementById("water-substance-dropdown");
    fetchData("get_water_substances.php", waterSubstanceDropdown, "Select the water substance");
}

function fetchData(url, dropdown, defaultOptionText) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let data;

                try {
                    data = JSON.parse(xhr.responseText);
                } catch (error) {
                    data = xhr.responseText;
                }

                addOptionsToDropdown(data, dropdown, defaultOptionText);
            } else {
                console.error("Request failed with status:", xhr.status);
            }
        }
    };

    xhr.send();
}

function addOptionsToDropdown(options, dropdown, defaultOptionText) {
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = defaultOptionText;
    dropdown.add(defaultOption);

    options.forEach(function (option) {
        const cleanedOption = option.replace(/"/g, "").trim();

        if (cleanedOption !== "") {
            const dropdownOption = document.createElement("option");
            dropdownOption.value = cleanedOption;
            dropdownOption.text = cleanedOption;
            dropdown.add(dropdownOption);
        }
    });
}

function applyFilters() {
    initializeOrUpdateChart();
}

function initializeOrUpdateChart() {
    const selectedYear = document.getElementById("year-dropdown").value;
    const selectedZones = Array.from(document.getElementById("zone-dropdown").selectedOptions).map(option => option.value);

    if (selectedYear !== "" && selectedWaterSubstance !== "") {
        const xhr = new XMLHttpRequest();
        const url = `get_water_chart_data.php?year=${selectedYear}&water_substance=${selectedWaterSubstance}&zones=${selectedZones.join(',')}`;
        xhr.open("GET", url, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);

                if (data.message) {
                    displayAlert(data.message);
                } else {
                    updateChart(data);
                }
            }
        };

        xhr.send();
    } else {
        clearChart();
    }
}

function displayAlert(message) {
    alert(message);
}

function clearChart() {
    const chartContainer = document.getElementById("chart-container");
    const existingChart = Chart.getChart(chartContainer);

    if (existingChart) {
        existingChart.destroy();
    }
}

function createEmptyChart() {
    const chartContainer = document.getElementById("chart-container");
    const ctx = chartContainer.getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: [],
            datasets: [
                {
                    label: selectedWaterSubstance,
                    data: [],
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}

function updateChart(data) {
    const ctx = document.getElementById("chart-container").getContext("2d");
    const totalAmountContainer = document.getElementById("total-amount-container");

    if (window.myChart) {
        window.myChart.data.labels = data.labels;
        window.myChart.data.datasets[0].data = data.values;
        window.myChart.data.datasets[0].label = selectedWaterSubstance; 
        window.myChart.update();
    } else {
        window.myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: data.labels,
                datasets: [
                    {
                        label: selectedWaterSubstance,
                        data: data.values,
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    }
    totalAmountContainer.textContent = `Total Amount: ${data.totalAmount}`;
}
